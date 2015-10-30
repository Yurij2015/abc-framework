<?php

namespace ABC\Abc\Core\Exception;

/** 
 * Класс InvalidArgumentException 
 * Адаптирует trigger_error к Exception
 * для корректного выброса исключения
 * NOTE: Requires PHP version 5.5 or later   
 * @author phpforum.su
 * @copyright © 2015
 * @license http://www.wtfpl.net/
 */  

class AbcInvalidArgumentException extends \InvalidArgumentException
{
    /**
    * Конструктор
    * 
    */  
    public function __construct($message, $code) 
    {var_dump(debug_backtrace());
        //$this->file = $file;
        //$this->line = $line;        
        //parent::__construct($message, $code);
    }
}  





























