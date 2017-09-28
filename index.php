<?php
	//在地址栏中输入的地址
	$domain = "http://oa.evdna.com"
	//要转发到的地址
	$http = "http://server.evdna.com:8/";
	if($_SERVER['HTTP_HOST'] == $domain){
		print <<<EOF
		<frameset rows="0%,*" frameborder="NO" border="0" framespacing="0">
			<frame src="about:blank" name="topFrame" scrolling="NO" noresize>
			<frame src="{$http}" name="mainFrame">
		</frameset>

		<noframes>
			<body>
				<ul>
					您的浏览器可能不支持框架页面.
					<li>此页面为提供域名的转向功能,与站点{$target}无关.
					<li>如此转向页面指向到有害内容，请联络<a href="#">域名转向服务提供商</a>删除
				</ul>
			</body>
		</noframes>
		
		EOF;
	}
?>
