<?php

namespace ABC\Abc\Builders;

use ABC\Abc\Builders\AbcBuilder;

/** 
 * Сборка дебаггера SQL 
 */ 
use ABC\Abc\Components\Sqldebug\SqlDebug;
use ABC\Abc\Components\Sqldebug\View;
use ABC\Abc\Components\Mysqli\Shaper;
/** 
 * Класс MysqliBuilder
 * 
 * NOTE: Requires PHP version 5.5 or later   
 * @author phpforum.su
 * @copyright © 2015
 * @license http://abc-framework.com/license/ 
 */  

class MysqliBuilder extends AbcBuilder
{
    /**
    * @var array
    */ 
    protected $service = 'mysqli'; 
    
    /**
    * Строит сервис.
    * 
    * @return void
    */        
    protected function buildService($global = false)
    { 
        $component = '\ABC\abc\components\\'. $this->service .'\\'. $this->service; 
        $data = @$this->config[$this->service] ?: [];        
        $typeService = $global ? 'setGlobal' : 'set';
        
        $this->locator->$typeService(
            $this->service, 
            function() use ($component, $data) {
                $data['debugger'] = !empty($data['debug']) ? new SqlDebug(new View) : null;
                return new $component($data);
            }
        );
    }   
}
