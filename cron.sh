ctrlExec(){
	php cron.php	
}

while :
do
	pids=`ps aux|awk '/php cron\.php'/{print $2}`
	is_terminated=1
	for pid in pids
	do
		is_terminated=0
	done
	if [ $is_terminated == 1 ]; then
		echo `date --date=now '+%Y-%m-%d %H:%M:%S %Z'` >> cron.daemon.log
		echo 'wake ctrlExec..' >> cron.daemon.log
		nohup ctrlExec >> cron.daemon.log &
	fi
	sleep 10s
done
