<?php

namespace ABC\Abc\Core;

use ABC\Abc\Core\AbcConfigurator;
use ABC\Abc\Components\Builder;
use ABC\Abc\Components\Container\Container;

/** 
 * Класс AbcFramework
 * 
 * NOTE: Requires PHP version 5.5 or later   
 * @author phpforum.su
 * @copyright © 2015
 * @license http://www.wtfpl.net/ 
 */   
class Abc
{

    protected $config; 
    protected $container;
    
    /**
    * Конструктор
    * 
    * @param array $appConfig
    * @param array $siteConfig
    */    
    public function __construct($appConfig = [], $siteConfig = [])
    {  
        $configurator = new AbcConfigurator($appConfig, $siteConfig);
        $this->config = $configurator->getConfig();        
        $this->container = new Container;  
        $this->setToStorage('config', $this->config);
        $this->setToStorage('Abc', $this); 
        $this->addToContainer('AppManager');       
        $this->addToContainer('Request');    
        $this->addToContainer('Router');
        $this->includeFunction();
    } 
   
    /**
    * Запускает приложение 
    *
    * @return void
    */     
    public function startApp()
    {
        $manager = $this->getFromStorage('AppManager');
        $manager->run();
    }
    
    /**
    * Возвращает контейнер
    *
    * @return object
    */     
    public function getContainer()
    {  
        return $this->container;
    }
    
    /**
    * Помещает любые данные в глобальное хранилище
    *
    * @param string $id
    * @param mix $data
    *
    * @return void
    */     
    public function setToStorage($id, $data)
    {  
        $this->container->setAsShared($id, 
               function() use ($data) {
                   return $data;
               });
    }
    
    /**
    * Получает содержимое глобального хранилища по ключу
    *
    * @param string $id
    *
    * @return mix
    */     
    public function getFromStorage($id = null)
    {  
        return $this->container->get($id);
    }

    /**
    * Выбирает и запускает сервис
    *
    * @param string $serviceId
    *
    * @return object
    */     
    public function newService($serviceId = null)
    {   
        $builder = $this->getBuilder($serviceId);
        return $builder->newService($serviceId);
    }
    
    /**
    * Выбирает и запускает синглтон сервиса
    *
    * @param string $serviceId
    *
    * @return object
    */     
    public function sharedService($serviceId = null)
    {  
        $builder = $this->getBuilder($serviceId);
        return $builder->sharedService($serviceId);
    }
    
    /**
    * Получает настройку конфигурации
    *
    * @param string $key
    *
    * @return string
    */     
    public function getConfig($key = null)
    {
        $config = $this->container->get('config');
     
        if (empty($key)) {
            return $config;
        } elseif (!is_string($key)) {
            AbcError::invalidArgument(ABC_INVALID_CONFIGURE);        
        } elseif (empty($config[$key])) {
            AbcError::invalidArgument('<strong>'. $key .'</strong>'. ABC_NO_CONFIGURE);
        }
            return $config[$key];
    }
  
    /**
    * Возвращает объект билдера
    *
    * @param string $serviceId
    *
    * @return object
    */     
    protected function getBuilder($serviceId = null)
    {    
        if (empty($serviceId) || !is_string($serviceId)) {
            AbcError::invalidArgument(ABC_INVALID_SERVICE_NAME);
        } 
        
        $builder = new Builder($serviceId, $this);
        return $builder;
    }
    
    /**
    * Помещает объекты ядра в контейнер
    *
    * @param string $className
    *
    * @return void
    */     
    protected function addToContainer($className)
    { 
        $abc = $this;
        $this->container->setAsShared($className, 
               function() use ($className, $abc) {
                   $className = 'ABC\Abc\Core\\' . $className;
                   return new $className($abc);
               });
    }
    
    /**
    * Подключает файл функций 
    *
    * @return void
    */     
    protected function includeFunction()
    {
        include_once __DIR__ .'/Functions/default.php';
        abcForFunctions($this);
    }   
}
