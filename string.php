<?php
	$sde='d_c0="AGDAKy9mZwqPTpRPVX1LFSwRVhTB9igGLK8=|1471517691"; _za=a5328e74-281e-4fbe-9ce8-92f8f87d4155; _zap=676ece96-f903-42a7-9051-13dc4e0fc911; q_c1=4b06fce8c2cb41a6a6be81995b6f33a6|1474886445000|1471517691000; _xsrf=d531a4697b784cbb6dfd41d6ba02e35b; __utma=51854390.1895702378.1473684101.1475071141.1475815200.7; __utmc=51854390; __utmz=51854390.1475071141.6.5.utmcsr=baidu|utmccn=(organic)|utmcmd=organic; __utmv=51854390.000--|2=registration_date=20160130=1^3=entry_date=20160818=1; a_t="2.0ABDKwbddZAkXAAAAINQeWAAQysG3XWQJAGDAKy9mZwoXAAAAYQJVTSDUHlgAEQOV7UNQZ6-MKx9ZPjL31GjYLQlXP8pyvd7qsOmfHSqmQ7f8EJZfSg=="; z_c0=Mi4wQUJES3diZGRaQWtBWU1BckwyWm5DaGNBQUFCaEFsVk5JTlFlV0FBUkE1WHRRMUJucjR3ckgxay1NdmZVYU5ndENR|1475823392|031aab455af6be826bd6f4f92add5435934cd2d8; cap_id="Y2Q5ZTQwZWU1NjNlNDBkYjk0N2FmMGNiNzZlM2FhYTE=|1475823392|d1213e5e6db324814645dd732692c2262139ebcd"; l_cap_id="NDVkNDliODc3OWM0NGRmYTg5Y2YzMWYzNWFhZWUwNDA=|1475823392|353032e3579895606ad481997b662e36965102ba"; login="NzAxM2VlZmYwOTJhNDJkMDljYWIwNjlkYWRkMTM3N2E=|1475823392|801b6113ab4e7885c7d865154ee33f4198b53c23"; n_c=1';

	$url='https://www.zhihu.com/people/juliana-yang/followees';
	$ch=curl_init($url);
	curl_setopt($ch,CURLOPT_HEADER,0);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch,CURLOPT_COOKIE,$sde);
	$contents=curl_exec($ch);
	//var_dump(curl_error($ch)); 
	curl_close($ch);
	//var_dump($contents);
	// /people/zhang-xiao-fang-52
	$pattern="'/people/([a-z]|[0-9]|-)+'";
	preg_match_all($pattern, $contents, $matches);
	$aaa=array_unique($matches[0]);
	echo $contents;
	foreach ($aaa as $key => $value) {
		echo $key."------->".$value.'<br/>';
	}
?>