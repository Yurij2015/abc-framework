<?php

namespace ABC\Abc\Core\PhpBugsnare\Lang;

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
    protected static function errorReportings() 
    {
        return [
'(.+)should return an array only containing the names of instance-variables to serialize' => '<strong>$1</strong> should return an array only containing the names of instance-variables to serialize<br /><span class="translate">

(Serialize (): __sleep должен возвращать массив, содержащий только имена свойств для сериализации)

</span><br />',
'You cannot serialize or unserialize (.+?) instances' => 'You cannot serialize or unserialize <strong>$1</strong> instances<br /><span class="translate">

(Вы не можете сериализовать и десереиализовать объекты <strong>$1</strong>)

</span><br />',
'Serialization of \'Closure\' is not allowed' => 'Serialization of \'Closure\' is not allowed<br /><span class="translate">

(Сериализация замыканий запрещена)

</span><br />',
'(.+?)Invalid arguments passed' => '<strong>$1</strong>Invalid arguments passed<br /><span class="translate">

(<strong>$1</strong> переданы недопустимые аргументы)

</span><br />', 
'Cannot access protected property (.+)' => 'Cannot access protected property  <strong>$1</strong><br /><span class="translate">

(Нет доступа к защищенному свойству <strong>$1</strong>)

</span><br />',
'Missing argument (\d+) for (.+)' => 'Missing argument <strong>$1</strong> for <strong>$2</strong><br /><span class="translate">

(Отсутствует аргумент <strong>$1</strong> для <strong>$2</strong>)

</span><br />',
'Maximum execution time of (.+?) seconds exceeded' => 'Maximum execution time of <strong>$1</strong> seconds exceeded<br /><span class="translate">

(Превышено максимальное время выполнения <strong>$1</strong> cекунд)

</span><br />',
        
'Cannot use (.+?) for reading' => 'Cannot use <strong>$1</strong> for reading<br /><span class="translate">

(Нельзя использовать <strong>$1</strong> при чтении)

</span><br />',
'Call to undefined function (.+)' => 'Call to undefined function <strong>$1</strong><br /><span class="translate">

(Вызов неопределенной функции <strong>$1</strong>)

</span><br />',
        
'(.+?) operator not supported for strings' => '<strong>$1</strong> operator not supported for strings<br /><span class="translate">

(<strong>$1</strong> оператор не поддерживается для строк)

</span><br />',
      
'(.*?)Unknown database(.+)' => 'Unknown database$2<br /><span class="translate">

(Неизвестная база данных$2)

</span><br />',
'syntax error, unexpected(.+)expecting(.+)or(.+)' => 'Synᐃtax error, unexpected$1expecting$2or$3<br /><span class="translate">

(Синтаксическая ошибка, неожиданное:<strong>$1</strong>, ожидалось <strong>$2</strong>ᐃ<strong>$3</strong>)

</span><br />',
'syntax error, unexpected (\'.+?\')' => 'Syntax error, unexpected $1<br /><span class="translate">

(Синтаксическая ошибка, неожиданное: <strong>$1</strong>)

</span><br />',        

'Undefined variable: (.+)' => 'Undefined variable: <strong>$$1</strong><br /><span class="translate">

(Не определена переменная: $<strong>$1</strong>)

</span><br />',
'Undefined property: (.+)' => 'Undefined property:<strong>$1</strong><br /><span class="translate">

(Не определено свойство)

</span><br />',
'Undefined offset: (.+)' => 'Undefined offset: <strong>$1</strong> <br /><span class="translate">

(Не определено смещение (номер элемента массива))

</span><br />',
'Undefined index: (.+)' => 'Undefined index: <strong>$1</strong><br /><span class="translate">

(Не определен индекс массива)

</span><br />',
'Use of undefined constant(.*)' => 'Use of undefined constant <br /><span class="translate">

(Используется неопределенная константа)

</span><br />',
'Constant (.+?) already defined' => 'Constant <strong>$1</strong> already defined<br /><span class="translate">

(Константа <strong>$1</strong> уже определена)

</span><br />',
'(.+?)expects parameter (\d+?) to be (.+?), (.+?) given' => '<strong>$1</strong> expects parameter $2 to be $3, $4 given <br /><span class="translate">

(<strong>$1</strong> ожидает, что $2-м параметром будет $3, а используется ᐃ$4)

</span><br />',
'(.+?): Empty delimiter' => '<strong>$1</strong>: Empty delimiter <br /><span class="translate">

(<strong>$1</strong>: отсутствует разделитель)

</span><br />',
'(.+?)expects exactly (\d+?) parameter[s]*, (\d+?) given' => '<strong>$1</strong> expects exactly $2 parameters, $3 given <br /><span class="translate">

(<strong>$1</strong> ожидает  параметров: $2, а используется $3)

</span><br />',
'Declaration of (.+?) should be compatible with (.+)' => 'Declaration of <strong>$1</strong> should be compatible with <strong>$2</strong> <br /><span class="translate">

(Задекларированный <strong>$1</strong> должен быть совместим с <strong>$2</strong>)

</span><br />',
'Missing argument (\d+?) for (.+?), called in (.+?) on line (\d+?) and defined' => 'Missing argument $1 for $2, called in $3 on line $4 and defined <br /><span class="translate">

(Отсутствует аргумент $1 для $2, вызванного из $3 на линии $4)

</span><br />',
'Invalid argument supplied for (.+)' => 'Invalid argument supplied for $1 <br /><span class="translate">

(Неверный аргумент передан в $1)

</span><br />',
'Division by zero' => 'Division by zero<br /><span class="translate">

(Деление на ноль)

</span><br />',
'Trying to get property of non-object' => 'Trying to get property of non-object<br /><span class="translate">

(Попытка получить свойство не из объекта)

</span><br />',
'Creating default object from empty value' => 'Creating default object from empty value<br /><span class="translate">

(Создание объекта из пустого значения)

</span><br />',
'Cannot modify header information - headers already sent by \(output started at(.+?)\)' => 'Cannot modify header information - headers already sent by (output started at $1)<br /><span class="translate">

(Не удается изменить информацию в заголовке - заголовки уже отправлены (отправка начата на $1))

</span><br />',
'Array to string conversion' => 'Array to string conversion<br /><span class="translate">

(Массив преобразуется в строку)

</span><br />',
'Call to a member function (.+?)on null'  => 'Call to a member function <strong>$1</strong> on null<br /><span class="translate">

(Вызов метода <strong>$1</strong> из NULL)

</span><br />',
'Call to undefined method (.+)'   => 'Call to undefined method: <strong>$1</strong><br /><span class="translate">

(Вызов неопределенного метода)

</span><br />',
'Call to a member function (.+?) on boolean' => 'Call to a member function <strong>$1</strong> on boolean<br /><span class="translate">

(Вызов метода <strong>$1</strong> из булева значения)

</span><br />',
'Parameter (.+?) to (.+?) expected to be a reference, value given' => 'Parameter $1 to <strong>$2</strong> expected to be a reference, value given<br /><span class="translate">

(Параметр $1 в <strong>$2</strong> ожидался ссылкой, а задан значением)

</span><br />',
'Cannot pass parameter (.+?) by reference' => 'Cannot pass parameter $1 by reference<br /><span class="translate">

(Невозможно передать параметр $1 по ссылке)

</span><br />',
'Call-time pass-by-reference has been removed' => 'Call-time pass-by-reference has been removed<br /><span class="translate">

(Время передачи по ссылке было удалено)

</span><br />',
'Method (.+?) cannot take arguments by reference' => 'Method <strong>$1</strong> cannot take arguments by reference<br /><span class="translate">

(Метод не может принимать аргументы по ссылке)

</span><br />',
'There is already an active transaction' => 'There is already an active transaction<br /><span class="translate">

(Уже есть активная транзакция)

</span><br />',
'There is no active transaction' => 'There is already an active transaction<br /><span class="translate">

(Нет активных транзакций)

</span><br />',
'Object of class (.+?) to string conversion' => 'Object of class $1 to string conversion<br /><span class="translate">

(Объект или класс <strong>$1</strong> преобразуется в строку)

</span><br />',
'Object of class (.+?) could not be converted to string' => 'Object of class <strong>$1</strong> could not be converted to string<br /><span class="translate">

(Объект или класс <strong>$1</strong> нельзя преобразовать в строку)

</span><br />',
'Call to protected method (.+?) from context (.+)' => 'Call to protected method <strong>$1</strong> from context <strong>$2</strong><br /><span class="translate">

(Вызов защищенного метода <strong>$1</strong> из контекста <strong>$2</strong>)

</span><br />',
'(.+?) expects at least (.+?) parameters, (.+?) given' => '<strong>$1</strong> expects at least <strong>$2</strong> parameters, <strong>$3</strong> given<br /><span class="translate">

(<strong>$1</strong> ожидает как минимум параметров $2, а задано $3)

</span><br />',
'Call to a member function (.+?) on string' => 'Call to a member function <strong>$1</strong> on string<br /><span class="translate">

(Вызов метода <strong>$1</strong> из строки)

</span><br />',
'Undefined class constant (.+)' => 'Undefined class constant <strong>$1</strong><br /><span class="translate">

(Не установлена константа <strong>$1</strong> в классе)

</span><br />',
'Cannot use a scalar value as an array' => 'Cannot use a scalar value as an array<br /><span class="translate">

(Нельзя использовать скалярное значение в качестве массива

</span><br />',
'Invalid parameter number: Columns/Parameters are 1-based' => 'Invalid parameter number: Columns/Parameters are 1-based<br /><span class="translate">

(Неверный номер колонки/параметра. Отсчет должен начинаться с 1)

</span><br />',
'Illegal string offset (.+)' => 'Illegal string offset <strong>$1</strong><br /><span class="translate">

(Недопустимое смещение, строкa <strong>$1</strong>)

</span><br />', 
'Cannot use object of type (.+?) as array' => 'Cannot use object of type <strong>$1</strong> as array<br /><span class="translate">

(Невозможно использовать объект типа <strong>$1</strong> как массив)

</span><br />',
'Call to a member function (.+?) on integer' => 'Call to a member function <strong>$1</strong> on integer<br /><span class="translate">

(Вызов метода <strong>$1</strong> из числа)

</span><br />',

// PDO

'.+Base table or view not found: 1146 Table (.+?) doesn\'t exist' => 'Base table or view not found: Table <strong>$1</strong> doesn\'t exist<br /><span class="translate">

(Таблица <strong>$1</strong> не обнаружена в базе данных)

</span><br />',
'.+Field (.+?) doesn\'t have a default value' => 'Field <strong>$1</strong> doesn\'t have a default value<br /><span class="translate">

(Поле <strong>$1</strong> не имеет значения по умолчанию)

</span><br />',
'PDO constructor was not called' => 'PDO constructor was not called<br /><span class="translate">

(Конструктор PDO не вызван)

</span><br />',

'.+You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near(.+?)at line (.+)' => 'You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near$1at line <strong>$2</strong><br /><span class="translate">

(Ошибка SQL синтаксиса. <br />Обратитесь к мануалу, соответствующему Вашей версии MySQL сервера, чтобы использовать верно строку <strong>$1</strong> на линии <strong>$2</strong>)

</span><br />',
'(.+?)SQLSTATE.+?General error' => '<strong>$1</strong> General error<br /><span class="translate">

(<strong>$1</strong> Общая ошибка)

</span><br />',

                 //''  => '',
                 'Synᐃtax'  => 'Syntax',
                 'ᐃboolean' => 'boolean',
                 'ᐃnull'    => 'null',
                 'ᐃarray'   => 'массив',
                 'ᐃstring'  => 'строка',
                 'ᐃobject'  => 'объект',
                 'ᐃ'        => 'или'
        ];
    }

    public static function translate($message) 
    {
        $reporting = self::errorReportings();
        $patterns = [];
     
        foreach ($reporting as $key => $value) {
            $patterns[] = '#'. $key .'#s';
        }
        return preg_replace($patterns, array_values($reporting), $message);
    }
}
