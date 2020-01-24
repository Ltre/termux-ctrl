<?php

date_default_timezone_set('PRC');

$now = time();
$hour = date('G');

//debug1
$now = strtotime('2020-01-24 14:00:09');
$hour = 14;

//debug2
// $now = strtotime('2020-01-24 23:00:11');
// $hour = 23;


for ($i = 0; $i < 1000; $i ++) {
	if ($hour >= 9 && $hour <= 21) {
        if ($now%3600 <= 10) {//每小时播放普通音量的声音
        	shell_exec('mpv putong.mp3');
			print 1;
    	} else {
			print 'A';
		}
	} else {
    	if ($now%3600 <= 10) {//每小时播放声音不算大的声音
        	shell_exec('mpv feng.mp3');
			print 2;
    	} else {
			print 'B';
		}
	}
	sleep(1);
}
