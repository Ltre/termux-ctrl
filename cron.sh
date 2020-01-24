ctrlExec(){
	php ctrlcron.php	
}

while :
do
	pids=`ps aux|awk '/php ctrlcron\.php/{print $2}'`
	is_terminated=1
	for pid in pids
	do
		is_terminated=0
	done
	if [ $is_terminated == 1 ]; then
		# echo `date --date=now '+%Y-%m-%d %H:%M:%S %Z'` >> ctrl.daemon.log #在mac不兼容，暂时屏蔽
		echo 'wake ctrlExec..' >> ctrl.daemon.log
		nohup ctrlExec >> ctrl.daemon.log &
	fi
	sleep 10s
done
