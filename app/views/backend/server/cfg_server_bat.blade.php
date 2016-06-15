@ECHO OFF
START "instance_{{ $server->name }}" /D C:\arma3 "C:\arma3\arma3server.exe" -enableHT -exThreads={{ $server->ex_threads }} -maxMem={{ $server->memory }} -server -nosplash -nosound -noPause -noCB -loadMissionToMemory -malloc=tbb4malloc_bi -name=ArmA3 -profiles=C:\arma3\instances\{{ $server->name }}\profile -pid=C:\arma3\instances\{{ $server->name }}\server.pid -config=C:\arma3\instances\{{ $server->name }}\server.cfg -cfg=C:\arma3\instances\{{ $server->name }}\basic.cfg -par=C:\arma3\instances\{{ $server->name }}\parameters.cfg -bepath=C:\arma3\instances\{{ $server->name }}\battleye -port={{ $server->port }}2