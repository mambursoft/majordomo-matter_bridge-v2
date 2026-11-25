<?php
$dictionary=array(
'MATTER_BRIDGE_ENDPOINT'=>'Адрес API',
'MATTER_BRIDGE_METHOD'=>'HTTP-метод',
'MATTER_BRIDGE_TOKEN'=>'Токен доступа',
'MATTER_BRIDGE_REGION'=>'Регион / маршрут',
'MATTER_BRIDGE_TRACKING'=>'Номер отправления',
'MATTER_BRIDGE_PAYLOAD'=>'Шаблон POST-запроса',
'MATTER_BRIDGE_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'MATTER_BRIDGE_LAST'=>'Последний результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}