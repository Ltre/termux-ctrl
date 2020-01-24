
pids=`ps aux|awk '/php ctrlcron\.php/{print $2}'`
is_terminated=1
for pid in pids
do
	kill -9 $pid
done
echo 'done!'