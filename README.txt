Z-Ray-MonitoringTrigger
=======================

Z-Ray Plugin which is triggering a custom event in Zend Server monitoring in every request.

The purpose of the plugin is to allow to debug a request from the Zend Server UI after a Z-Ray Snapshot 
has been created for this request. With the help of monitoring rules one can also go one step beyond and
get a Code Trace for this specific request. Therefore an event rule for "Custom Events" (either for a specific
application or as a Global Rule), which captures a Code Trace when observing a Custom Event with "Notice" level.