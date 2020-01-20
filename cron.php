<?php

date_default_timezone_set('PRC');

for ($i = 0; $i < 1000; $i ++) {
	if (date('G') >= 9 && date('G') <= 21) {
        	if (time()%3600 <= 10) {//每小时播放普通音量的声音
                	//shell_exec('mpv putong.mp3');
			print 1;
        	} else {
			print 'A';
		}
	} else {
        	if (time()%3600 <= 10) {//每小时播放声音不算大的声音
                	//shell_exec('mpv low_voice.mp3');
			print 2;
        	} else {
			print 'B';
		}
	}
	sleep(1);
}
