<?php

namespace ABC\Abc\Resourses\Lang;

/** 
 * Класс En
 * 
 * NOTE: Requires PHP version 5.5 or later   
 * @author phpforum.su
 * @copyright © 2015
 * @license http://www.wtfpl.net/ 
 */   
class Ru
{
    /**
    * Устанавливает языковые константы
    */     
    public static function set() 
    {
        /**
        * Общие константы
        */ 
        define('ABC_NO_CLASS',                 ' class not found <br /><span style="color:red">(класс не найден)</span><br />');
        define('ABC_NO_METHOD',                ' method offline in framework <br /><span style="color:red">(метод не поддержиается фреймворком)</span><br />');
        define('ABC_TPL_DISABLE',              ' the template disabled <br /><span style="color:red">(шаблонизатор отключен)</span><br />');
        define('ABC_INVALID_CONFIGURE_APP',    ' Configuring the application is to be performed array <br /><span style="color:red">(конфигурация приложения должна быть массивом)</span><br />');
        define('ABC_INVALID_CONFIGURE_SITE',   ' Configuring the site is to be performed array <br /><span style="color:red">(конфигурация сайта должна быть массивом)</span><br />');
        define('ABC_NO_CONFIGURE',             ' Setting is not specified in the configuration file <br /><span style="color:red">(настройка не задана в конфигурационном файле)</span><br />');
        define('ABC_INVALID_CONFIGURE',        'Setup key must be a string <br /><span style="color:red">(ключ настройки должен быть строкой)</span><br />');        
        define('ABC_UNKNOWN_ROUTES',           ' Unknown type of routing data <br /><span style="color:red">(неизвестный тип маршрутизации)</span><br />');
        define('ABC_ERROR_ROUTES_RULE',        ' Error in the routing rules <br /><span style="color:red">(ошибка в правилах роутинга)</span><br />');
        
        /**
        * Настройки дебаггера
        */ 
        define('ABC_TRACING_VARIABLE',         ' Tracing Variable <br /><span style="color:red">(трассировка переменной)</span><br />');
        define('ABC_TRACING_OBJECT',           ' Tracing Object <br /><span style="color:red">(трассировка объекта)</span><br />');
        define('ABC_TRACING_CONTAINER',        ' Tracing Container <br /><span style="color:red">(трассировка контейнера)</span><br />');        
        define('ABC_TRACING_CLASS',            ' Tracing Class <br /><span style="color:red">(трассировка класса)</span><br />');
        
        /**
        * Ошибки использования контейнера зависимостей
        */ 
        define('ABC_INVALID_SERVICE_NAME',     ' Service name should be a string <br /><span style="color:red">(название сервиса должно быть строкой)</span><br />');
        define('ABC_NO_SERVICE',               ' service is not defined <br /><span style="color:red">(сервис не определен)</span><br />');  
        define('ABC_ALREADY_SERVICE',          ' service is already installed <br /><span style="color:red">(сервис уже имеется в хранилище)</span><br />');       
        define('ABC_NOT_FOUND_SERVICE',        ' service not found <br /><span style="color:red">(сервис не найден)</span><br />'); 
        define('ABC_INVALID_CALLABLE',         ' Argument must be a function of anonymity is conferred <br /><span style="color:red">(аргумент должен быть анонимной функцией)</span><br />');        
        define('ABC_SYNTHETIC_SERVICE',        ' service created synthetically. Impossible to implement services according to the synthetic <br /><span style="color:red">(сервис создан синтетически. Невозможно внедрение зависимости в синтетический сервис)</span><br />');
        define('ABC_INVALID_PROPERTY',         ' Property should be a array <br /><span style="color:red">(свойство должно быть массивом)</span><br />');
        define('ABC_NOT_REGISTERED_SERVICE',   ' service is not registered in a container <br /><span style="color:red">(сервис не зарегистрирован в хранилище)</span><br />');
        
        /**
        * Ошибки использования компонентов СУБД
        */   
        define('ABC_WRONG_CONNECTION',         ' wrong data connection in the configuration file <br /><span style="color:red">(неверные данные коннекта в конфигурационном файле)</span><br />');
        define('ABC_NO_SQL_DEBUGGER',          ' SQL debugger is inactive. Set to true debug configuration. <br /><span style="color:red">(SQL дебаггер не установлен. Установите настройку в конфигурационном файле)</span><br />');    
        define('ABC_INVALID_MYSQLI_TYPE',      ' Number of elements in type definition string doesn\'t match number of bind variables  <br /><span style="color:red">(количество элементов типа отличается от количества аргументов)</span><br />');
        define('ABC_NO_MYSQLI_TYPE',           ' Unknown type of the parameter  <br /><span style="color:red">(неизвестный тип параметра)</span><br />');
        define('ABC_SQL_ERROR',                ' Query build error  <br /><span style="color:red">(Ошибка построения запроса)</span><br />');
        define('ABC_SQL_EMPTY_ARGUMENTS',      ' Not all arguments are specified in a member function <br /><span style="color:red"> Не все аргументы заданы в методе <strong>');        
        define('ABC_TRANSACTION_EXIST',        ' There is already an active transaction  <br /><span style="color:red">(Уже есть активная транзакция)</span><br />');
        define('ABC_TRANSACTION_ERROR',        ' Transaction error:  <br /><span style="color:red">Ошибка транзакции: </span><br />'); 
        define('ABC_NO_SUPPORT',               ' This type of table is not supported by the debugger  <br /><span style="color:red">(Этот тип таблицы не поддерживается дебаггером)</span><br />'); 
        define('ABC_OTHER_OBJECT',             ' An inappropriate object is used  <br /><span style="color:red">(Используется неподходящий объект)</span><br />'); 
        define('ABC_NO_METHOD_IN_DBC',         ' method is not supported by the Query builder<br /><span style="color:red">(метод не поддерживается конструктором запросов)</span><br />');
        define('ABC_ERROR_BINDVALUES',         ' The numbering of the array in the parameter of the <strong>bindValues()</strong> method must begin with 1<br /><span style="color:red">(Нумерация массива в параметре метода <strong>bindValues()</strong> должна начинаться с единицы)</span><br />');
        define('ABC_DBCOMAND_SERIALIZE',       ' You can not serialize a query builder object<br /><span style="color:red">(Нельзя сериализовать объект конструктора запросов)</span><br />');
        
        
        
        /**
        * Ошибки использования шаблонизатора
        */ 
        define('ABC_NO_TEMPLATE',              ' templates file  does not exist <br /><span style="color:red">(файл шаблона отутствует)</span><br />');
        define('ABC_INVALID_BLOCK',            ' block does not exist or incorrect syntax <br /><span style="color:red">(блок отсутствует, либо имеет некорректный синтаксис)</span><br />');
        define('ABC_NO_METHOD_IN_TPL',         ' templating method is not supported <br /><span style="color:red">(метод не поддерживается шаблонизатором)</span><br />');
        
        /**
        * Ошибки конфигурации
        */ 
        define('ABC_NO_MODEL',                 ' model is not implemented <br /><span style="color:red">(модель не реализована)</span><br />');
        
        /**
        * Ошибки использования пагинатора
        */         
        define('ABC_NO_TOTAL',                 ' limit is not set <br /><span style="color:red">(лимит не установлен)</span><br />');
    }
}