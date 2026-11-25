<?php
$dictionary=array(
'MATTER_BRIDGE_ENDPOINT'=>'API endpoint',
'MATTER_BRIDGE_METHOD'=>'HTTP method',
'MATTER_BRIDGE_TOKEN'=>'Access token',
'MATTER_BRIDGE_REGION'=>'Region / route',
'MATTER_BRIDGE_TRACKING'=>'Tracking number',
'MATTER_BRIDGE_PAYLOAD'=>'POST payload template',
'MATTER_BRIDGE_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'MATTER_BRIDGE_LAST'=>'Last result'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}