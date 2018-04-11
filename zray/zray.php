<?php

$messageClass = 'Custom Event triggered by Z-Ray Plugin';
$message = <<<MESSAGE
This event is actually not an application error, but this notice has been triggered by a specific Z-Ray Plugin.
The purpose of the plugin is to allow to debug a request from the Zend Server UI after a Z-Ray Snapshot 
has been created for this request. With the help of monitoring rules one can also go one step beyond and
get a Code Trace for this specific request. Therefore an event rule for "Custom Events" (either for a specific
application or as a Global Rule), which captures a Code Trace when observing a Custom Event with "Notice" level.
MESSAGE;

register_shutdown_function(function() use ($messageClass, $message) {
    zend_monitor_custom_event($messageClass, $message, null, ZEND_MONITOR_EVENT_SEVERITY_INFO);
});