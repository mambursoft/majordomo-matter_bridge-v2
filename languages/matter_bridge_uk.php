<?php
$dictionary=array(
'MATTER_BRIDGE_ENDPOINT'=>'Адреса API',
'MATTER_BRIDGE_METHOD'=>'HTTP-метод',
'MATTER_BRIDGE_TOKEN'=>'Токен доступу',
'MATTER_BRIDGE_REGION'=>'Регіон / маршрут',
'MATTER_BRIDGE_TRACKING'=>'Номер відправлення',
'MATTER_BRIDGE_PAYLOAD'=>'Шаблон POST-запиту',
'MATTER_BRIDGE_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'MATTER_BRIDGE_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}