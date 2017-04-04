<?php

namespace ABC\Abc\Services\Psr7;

use ABC\Abc\Core\Exception\AbcError;

/** 
 * Класс UploadedFile
 * 
 * NOTE: Requires PHP version 5.5 or later   
 * @author phpforum.su
 * @copyright © 2017
 * @license http://www.wtfpl.net/
 */   
class UploadedFile
{
    protected $file;
    protected $name;
    protected $type;
    protected $size;
    protected $error;


    public function __construct($file = null, $name = null, $type = null, $size = null, $error = UPLOAD_ERR_OK)
    {
        if (empty($file)) {
            $this->file = isset($_FILES) ? static::parse($_FILES) : [];
        } else {
         
            if (is_string($file)) {
                $this->file = $file;
            }
            
            if (is_resource($file)) {
                $this->stream = $this->getObject('Stream', $file);
            }   
        }
        
        if (empty($this->file) && empty($this->stream)) {
            $this->stream = $file;
        }
        
        $this->name  = $name;
        $this->type  = $type;
        $this->size  = $size;
        $this->error = $error;
    }

    /**
    * Получает поток, представляющий загруженный файл.
    *
    * @return object
    */
    public function getStream()
    {
        if ($this->moved) {
            AbcError::InvalidArgument('Request: '. ABC_ERROR_MOVED);
            return false;
        }

        if ($this->stream instanceof Stream) {
            return $this->stream;
        }
        
        $this->stream = new Stream(fopen($this->file, 'r'));
        return $this->stream;
    }

    /**
    * Перемещает загруженный файл в новую локацию.
    *
    * @param string $targetPath 
    */
    public function moveTo($targetPath)
    {

        if (empty($targetPath)) {
            AbcError::InvalidArgument('Request: '. ABC_EMPTY_FILE_PATH);
            return false;
        }
        
        if (!is_string($targetPath)) {
            AbcError::InvalidArgument('Request: '. ABC_PATH_NO_STRING);
            return false;
        }

        if ($this->moved) {
            AbcError::InvalidArgument('Request: '. ABC_CANNOT_MOVE_FILE);
            return false;
        }

        $sapi = PHP_SAPI;
        switch (true) {
            case (empty($sapi) || 0 === strpos($sapi, 'cli') || ! $this->file):
                $this->writeFile($targetPath);
                break;
            default:
                if (false === move_uploaded_file($this->file, $targetPath)) {
                    AbcError::InvalidArgument('Request: '. ABC_ERROR_FILE);
                    return false;
                }
                break;
        }

        $this->moved = true;
    }
    
    /**
    * Получает размер файла.
    *
    * @return int|null 
    */
    public function getSize()
    {
        return $this->size;
    }
    
    /**
    * Получает ошибку, связанную с загруженным файлом..
    *
    * @return int 
    */
    public function getError()
    {
        return $this->error;
    }
    
    /**
    * Получает имя файла, отправленное клиентом.
    *
    * @return string|null 
    */
    public function getClientFilename()
    {
        return $this->name;
    }
    
    /**
    * Извлеките тип media, отправленный клиентом.
    *
    * @return string|null 
    */
    public function getClientMediaType()
    {
        return $this->type;
    }
    
    
    /**
    * Разбор $_FILE
    *
    * @param array $uploadedFiles
    *
    * @return array
    */
    protected static function parse($uploadedFiles)
    {
        $parsed = [];
        foreach ($uploadedFiles as $field => $uploadedFile) {
        
            if (!isset($uploadedFile['error'])) {
                if (is_array($uploadedFile)) {
                    $parsed[$field] = static::parse($uploadedFile);
                }
                continue;
            }
          
            $parsed[$field] = [];
            if (!is_array($uploadedFile['error'])) {
                $parsed[$field] = new static(
                    $uploadedFile['tmp_name'],
                    isset($uploadedFile['name']) ? $uploadedFile['name'] : null,
                    isset($uploadedFile['type']) ? $uploadedFile['type'] : null,
                    isset($uploadedFile['size']) ? $uploadedFile['size'] : null,
                    $uploadedFile['error'],
                    true
                );
                
            } else {
              
                $subArray = [];                
                foreach ($uploadedFile['error'] as $fileIdx => $error) {
                 
                    $subArray[$fileIdx]['name'] = $uploadedFile['name'][$fileIdx];
                    $subArray[$fileIdx]['type'] = $uploadedFile['type'][$fileIdx];
                    $subArray[$fileIdx]['tmp_name'] = $uploadedFile['tmp_name'][$fileIdx];
                    $subArray[$fileIdx]['error'] = $uploadedFile['error'][$fileIdx];
                    $subArray[$fileIdx]['size'] = $uploadedFile['size'][$fileIdx];
                 
                    $parsed[$field] = static::parse($subArray);
                }
            }
        }
     
        return $parsed;
    }
}

