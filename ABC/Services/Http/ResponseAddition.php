<?php

namespace ABC\ABC\Services\Http;

use ABC\ABC\Core\Exception\AbcError;

/** 
 * Класс Uri
 * 
 * NOTE: Requires PHP version 5.5 or later   
 * @author phpforum.su
 * @copyright © 2017
 * @license http://www.wtfpl.net/
 */   
abstract class ResponseAddition
{
    /**
     * Запись данных в тело ответа.
     *
     * @param string $data
     * 
     * @return $this
     */
    public function write($data)
    {
        $this->getBody()->write($data);
        return $this;
    }
}

