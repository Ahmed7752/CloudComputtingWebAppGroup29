@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist E:\xampp2\hypersonic\scripts\ctl.bat (start /MIN /B E:\xampp2\server\hsql-sample-database\scripts\ctl.bat START)
if exist E:\xampp2\ingres\scripts\ctl.bat (start /MIN /B E:\xampp2\ingres\scripts\ctl.bat START)
if exist E:\xampp2\mysql\scripts\ctl.bat (start /MIN /B E:\xampp2\mysql\scripts\ctl.bat START)
if exist E:\xampp2\postgresql\scripts\ctl.bat (start /MIN /B E:\xampp2\postgresql\scripts\ctl.bat START)
if exist E:\xampp2\apache\scripts\ctl.bat (start /MIN /B E:\xampp2\apache\scripts\ctl.bat START)
if exist E:\xampp2\openoffice\scripts\ctl.bat (start /MIN /B E:\xampp2\openoffice\scripts\ctl.bat START)
if exist E:\xampp2\apache-tomcat\scripts\ctl.bat (start /MIN /B E:\xampp2\apache-tomcat\scripts\ctl.bat START)
if exist E:\xampp2\resin\scripts\ctl.bat (start /MIN /B E:\xampp2\resin\scripts\ctl.bat START)
if exist E:\xampp2\jboss\scripts\ctl.bat (start /MIN /B E:\xampp2\jboss\scripts\ctl.bat START)
if exist E:\xampp2\jetty\scripts\ctl.bat (start /MIN /B E:\xampp2\jetty\scripts\ctl.bat START)
if exist E:\xampp2\subversion\scripts\ctl.bat (start /MIN /B E:\xampp2\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist E:\xampp2\lucene\scripts\ctl.bat (start /MIN /B E:\xampp2\lucene\scripts\ctl.bat START)
if exist E:\xampp2\third_application\scripts\ctl.bat (start /MIN /B E:\xampp2\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist E:\xampp2\third_application\scripts\ctl.bat (start /MIN /B E:\xampp2\third_application\scripts\ctl.bat STOP)
if exist E:\xampp2\lucene\scripts\ctl.bat (start /MIN /B E:\xampp2\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist E:\xampp2\subversion\scripts\ctl.bat (start /MIN /B E:\xampp2\subversion\scripts\ctl.bat STOP)
if exist E:\xampp2\jetty\scripts\ctl.bat (start /MIN /B E:\xampp2\jetty\scripts\ctl.bat STOP)
if exist E:\xampp2\hypersonic\scripts\ctl.bat (start /MIN /B E:\xampp2\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist E:\xampp2\jboss\scripts\ctl.bat (start /MIN /B E:\xampp2\jboss\scripts\ctl.bat STOP)
if exist E:\xampp2\resin\scripts\ctl.bat (start /MIN /B E:\xampp2\resin\scripts\ctl.bat STOP)
if exist E:\xampp2\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT E:\xampp2\apache-tomcat\scripts\ctl.bat STOP)
if exist E:\xampp2\openoffice\scripts\ctl.bat (start /MIN /B E:\xampp2\openoffice\scripts\ctl.bat STOP)
if exist E:\xampp2\apache\scripts\ctl.bat (start /MIN /B E:\xampp2\apache\scripts\ctl.bat STOP)
if exist E:\xampp2\ingres\scripts\ctl.bat (start /MIN /B E:\xampp2\ingres\scripts\ctl.bat STOP)
if exist E:\xampp2\mysql\scripts\ctl.bat (start /MIN /B E:\xampp2\mysql\scripts\ctl.bat STOP)
if exist E:\xampp2\postgresql\scripts\ctl.bat (start /MIN /B E:\xampp2\postgresql\scripts\ctl.bat STOP)

:end

