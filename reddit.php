<?php

//Login To Reddit for the first Time (this works)
$user = $_POST['formName'];
$pwd = $_POST['password'];

$r = new HttpRequest('http://www.reddit.com/api/login/USERNAME', HttpRequest::METH_POST);
$r->enableCookies();
$r->addPostFields(array('api' => 'json', 'user' => $user, 'passwd' => $pwd));
$r->getResponseCookies();
		
	try {
	$userinfo = $r->send();
	//parseObject is a function that returns a Cookie
	parseObject($userinfo);
		} catch (HttpException $ex) {
		echo $ex;
		}

//Getting User ModHash (Using HTTP_Request) (works! also returns users favorite sub reddits)
$url = 'http://www.reddit.com/r/PHP/comments/f8jvu/.json';
$r = new HTTP_Request($url);
$r->addHeader('Cookie', $_SESSION['reddit']);
$r->sendRequest();
$page2 = $r->getResponseBody();

$things = json_decode($page2, true);
//print_r($things);
$modhash = $things[1]['data']['modhash'];

//Voting (Using HTTP_Request2) (not working)
$urlVote = 'http://www.reddit.com/api/vote';
$r = new HTTP_Request2($urlVote,HTTP_Request2::METHOD_POST);
$r->addCookie('reddit_session' , 'Cookie.txt');
$r->addPostParameter(array('id' => 't3_f8jvu', 'dir' => '1', 'r' => 'php', 'uh' => $modhash));
	
$page = $r->send();		
print_r($page);

?>