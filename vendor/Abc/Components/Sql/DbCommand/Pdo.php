<?php

namespace ABC\Abc\Components\Sql\DbCommand;

use ABC\Abc\Components\Sql\DbCommand\Mysql;

/** 
 * Конструктор для PDO
 * 
 * NOTE: Requires PHP version 5.5 or later   
 * @author phpforum.su
 * @copyright © 2015
 * @license http://www.wtfpl.net/ 
 */  
class Pdo
{
    public $prefix;
    
    protected $db;
    protected $stmt;
    protected $config;
    
    /**
    * Конструктор
    *
    */     
    public function __construct($abc)
    {
        $this->db = $abc->sharedService('Pdo');
        $this->config = $abc->getConfig('pdo');
        $this->prefix = $this->db->prefix;
        $this->mysql  = new MysqlConstruct($this->prefix);
    }
    
    /**
    * Проксирование вызовов методов конструктора
    *
    */     
    public function __call($method, $params)
    { 
        $this->mysql->$method($params);
        return $this;
    }
    
    /**
    * Выполняет запрос из подготовленного выражения с привязкой параметров
    *
    * @param string $sql
    * @param array $params
    *
    * @return object
    */     
    public function createCommand($sql = null, $params = [])
    {
        $this->prepare($sql);
        
        if (!empty($params)) {
            $this->bindValues($params);
        }
        
        $this->execute($sql);
        return $this;
    }

    /**
    * Обертка PDO::prepare()
    *
    * @param string $sql
    *
    * @return object
    */     
    public function prepare($sql)
    {
        $this->stmt = $this->db->prepare($sql);
        return $this;        
    }
    
    /**
    * Обертка PDO::bindValue()
    *
    * @param string $name
    * @param mix $value
    * @param int $type
    *
    * @return object
    */    
    public function bindValue($name, $value, $type = \PDO::PARAM_STR)
    {
        $this->stmt->bindValue($name, $value, $type);
        return $this;
    } 
    
    /**
    * Обертка PDO::bindValue() для массива
    *
    * @param array $params
    *
    * @return object
    */     
    public function bindValues($params)
    {
        if (!empty($params)) {
         
            foreach ($params as $name => $param) {
                
                if (is_array($param)) {
                    $value = $param[0];
                    $type  = $param[1];
                } else {
                    $value = $param;
                    $type  = \PDO::PARAM_STR;
                }
                
                $this->stmt->bindValue($name, $value, $type);
            }
        }
        
        return $this;
    } 
 
    /**
    * Обертка PDO::execute()
    *
    * @return object
    */     
    public function execute($sql = null)
    {
        if (!empty($this->config['debug'])) {
            $this->db->beginTransaction();
            $this->db->query($sql);
            $this->db->rollback();
        }
        
        $this->stmt->execute();
        return $this;
    } 
    
    /**
    * 
    *
    */     
    public function fetchAll()
    {
        $this->createCommand($this->getSql());
        return $this->stmt->fetchAll();
    }  
    
    /**
    * 
    *
    */     
    public function fetchColumn()
    {
        $this->createCommand($this->getSql());
        return $this->stmt->fetchColumn();
    }
    
    /**
    * 
    *
    */     
    public function getSql()
    {
        return $this->mysql->getSql();
    } 
    
    /**
    * 
    *
    */     
    public function test()
    {
        $this->db->test();
        return $this;
    }    
}
