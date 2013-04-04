<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <head>
    <title>我的Haiku v0.2</title>
    <style>
	body
	{
		color:white;
		background-color:black;
	}
      div {
        font-family: '標楷體', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
	  a:visited , a 
	  {
		color:gray;   text-decoration: none;
	  }
       a:hover {
        text-decoration: underline;
		color:yellow;
	  }
	  
	  .smalla
	  {
		font-size:20px;
	  }
    </style>
  </head>
  <body>
      <h1>我的Haiku v0.2</h1>
 <h3>你的塗鴉牆會產生的Haiku...</h3>
	  <hr>
<?php
$_GET['d']=0;

session_start();

ob_flush();flush();

function clean_file_name($filename)

{

$bad = array(
"{",
"}",
"\r\n",
"<!--",
"<!--",
"\r",
"\n",
"<br>",
"<br/>",
"-->",

"'",
"[",
"]",

"<",

">",

'"',

'&',

'$',

'=',
' ',

';',

'?',

'/',
'\r\n',
'\n',
"%20",

"%22",

"%3c",  // <

"%253c",  // <

"%3e",   // >

"%0e",   // >

"%28",   // (

"%29",   // )

"%2528",  // (

"%26",   // &

"%24",   // $

"%3f",   // ?

"%3b",   // ;
'　',
' ',
"%3d"  // =


);



$filename = str_replace($bad, '', $filename);



return stripslashes($filename);

}










$sh = scws_open();
scws_set_charset($sh, 'utf-8');
scws_set_dict($sh, 'C:\dict_cht.utf8.xdb');
scws_set_rule($sh, 'C:\rules_cht.utf8.ini');



/*
$text = "也許有，那其實是賦諸你我的無形規律遂想起當年，凝結流光歲月的溫柔刻度。或許是，這伺擁內心難以描繪的若干形骸遂想起當年，散心時延展你我視線的大片翠綠。聽說心靈中的孤寂總是深邃時而神秘，那麼守住小徑兀自張望的無從湧動的乾涸吶喊，有沒有出離夢境帶來片斷記憶的一絲或然率?我們的思維說不清每一個悸動當下的念頭，絕對的推理永遠理不斷任何一次無心的書寫。路上行人果然多得出奇。彼此關係只建立在腳步的快慢腳印的深淺交疊發生的先後順序與，展開自速度的階級美學。於焉以極端時髦的審視角度，看人，以及繼續呼吸。自此眼聾耳盲。嘈雜中漸漸，輕視嗅覺與味覺終於，風華絕代殿堂中背熟了統一風格的奧義體系。我傲視群倫並且，躬背哈腰。我們只能這麼說了，城市心靈角隅優越與其突變的劣等基因，雜遝盤據在意識的剖面。我只能這麼說了，無須重組本質及無法為心情命名，並且風雨驟驚。如此而已。所以不明白。不明白自喉間一躍而起的熟悉同時陌生的音律，為何總驟跌在與空氣互疊的倒影裏，此般安靜。";
scws_send_text($sh, $text);
$rst = scws_get_result($sh);


// 冠詞  形容詞 名詞 動詞 介系詞

//	[q] [a]	[n nr ns] [v]  [p ba bei]
/*
  [6] => Array
        (
            [word] => 只有
            [off] => 21
            [len] => 6
            [idf] => 6.2600002288818
            [attr] => d
        )
		

//print_r( $rst );
foreach ( $rst as $key => $value )
{ 
	$ss [ $value['attr'] ][]= $value['word'];


}

$ss['n'] = array_merge (  $ss['n'] , $ss['nr'] );
$ss['n'] = array_merge (  $ss['n'] , $ss['ns'] );

$ss['v'] = array_merge (  $ss['v'] , $ss['vn'] );

$ss['p'] = array_merge (  $ss['p'] , $ss['ba'] );
$ss['p'] = array_merge (  $ss['p'] , $ss['bei'] );

//$rnum = rand ( 0 , count($ss['a'])-1 ) ;
echo $ss[ 'a' ][ rand ( 0 , count($ss['a'])-1 ) ];
echo $ss[ 'n' ][ rand ( 0 , count($ss['n'])-1 ) ];
echo '<br>';
echo $ss[ 'n' ][ rand ( 0 , count($ss['n'])-1 ) ];
echo $ss[ 'v' ][ rand ( 0 , count($ss['v'])-1 ) ];
echo $ss[ 'p' ][ rand ( 0 , count($ss['p'])-1 ) ];
echo $ss[ 'n' ][ rand ( 0 , count($ss['n'])-1 ) ];
echo '<br>';
echo $ss[ 'a' ][ rand ( 0 , count($ss['a'])-1 ) ];
echo $ss[ 'a' ][ rand ( 0 , count($ss['a'])-1 ) ];
echo $ss[ 'uj' ][ rand ( 0 , count($ss['uj'])-1 ) ];
echo $ss[ 'n' ][ rand ( 0 , count($ss['n'])-1 ) ];


print_r($ss);
*/



?>





<?php
error_reporting(0);
if($_GET['d']==1) error_reporting(E_ALL);
//請把本檔案放到Facebook SDK examples資料夾裡面才讀得到下面的檔案(FBSDK)
require 'src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '259720817401522',
  'secret' => '6c587be09f78df10e85a34b1f7a0ce92',
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');  //登入
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}
else{


$app_id = '259720817401522';
$app_secret = "6c587be09f78df10e85a34b1f7a0ce92";
$my_url = "http://140.133.13.43:8080/projHaiku/reindex.php";

$code = $_REQUEST["code"];

if(empty($code)) {
    $dialog_url = "http://www.facebook.com/dialog/oauth?client_id=" 
        . $app_id . "&redirect_uri=" . $my_url.'&scope=publish_stream,user_status,read_stream';

    echo("<script> top.location.href='" . $dialog_url . "'</script>");
}

$token_url = "https://graph.facebook.com/oauth/access_token?client_id="
    . $app_id . "&redirect_uri=" . urlencode($my_url) . "&client_secret="
    . $app_secret . "&code=" . $code .'&scope=publish_stream,user_status,read_stream';

$access_token = file_get_contents($token_url);



}
if(!isset($_SESSION['user_posts']))
{
if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_posts = $facebook->api('/me/feed?limit=1000');  //取得資料
$_SESSION["user_posts"] = json_encode($user_posts);
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}



}
// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl(array('scope'=>'publish_stream,user_status,read_stream'));
}

?>


      
    <?php if ($user): ?>
    <?php else: ?>
      <div>
	  這是一隻可以用你塗鴉牆上過去的文字幫你寫排句(Haiku)的小程式 盡情的使用吧^.< <p>
        <a href="<?php echo $loginUrl; ?>">開始(需要登入FB)</a>
      </div>
    <?php endif ?>

    <?php if ($user): ?>

     
	  
	  <?php
	 // echo $_SESSION["user_posts"];
//	  print_r($user_posts);
/* 
	  if(!isset($_SESSION['user_posts']))
		{}
	  else
	  {

		$user_posts = json_decode($_SESSION['user_posts']);
	  }
*/
	  //	  foreach
	$user_posts = json_decode($_SESSION['user_posts'],true);  
		if($_GET['d']==1) { echo '<pre>';  print_r( 	$user_posts ); }
//echo $_SESSION["user_posts"];
ob_flush();flush();
	  foreach ( $user_posts['data'] as $key => $value )
	  {
		
		if($value['from']['id']== $user_profile['id'] && $value['link']!='http://apps.facebook.com/259720817401522/')
		{	
		
		
		if($_GET['d']==1) echo $text;
		
		$text = clean_file_name($value['message']); 
		scws_send_text($sh, $text);
		$rst = scws_get_result($sh);

			foreach ( $rst as $key => $value )
			{ 
					$ss [ $value['attr'] ][]= clean_file_name($value['word']);
			}
					
		
		
		
		
		
		
		
		
		
		}
		
		
	  }
	  
	  
	  
	  ?>
	  
	  
	 
    
	  
	   <?php
	   /*
	    if(!isset($_SESSION['user_posts']))
		{
	   $nextpost =  substr ( $user_posts['paging']['next'] , 26 ) ;  //取得下一頁id
	   while ($nextpost)  //以下一頁id繼續爬資料
	   {
		   try {
				$user_posts = $facebook->api($nextpost );  //取得資料
		  } catch (FacebookApiException $e) {	error_log($e);	$user = null;	  }

		  $nextpost =  substr ( $user_posts['paging']['next'] , 26 ) ;   //取得下一頁id 
		 //  echo print_r($user_posts);  
	  }
		 */  
		if($ss['n'])
		{		
			if($ss['nr']) $ss['n'] = array_merge (  $ss['n'] , $ss['nr'] );
			if($ss['ns']) $ss['n'] = array_merge (  $ss['n'] , $ss['ns'] );
			if($ss['nz']) $ss['n'] = array_merge (  $ss['n'] , $ss['nz'] );
			if($ss['nt']) $ss['n'] = array_merge (  $ss['n'] , $ss['nt'] );
		}
		if($ss['v'] &&  $ss['vn'] )
			$ss['v'] = array_merge (  $ss['v'] , $ss['vn'] );
		if($ss['p'])
		{
		   if($ss['ba'])	$ss['p'] = array_merge (  $ss['p'] , $ss['ba'] );
		   if($ss['bei'])	$ss['p'] = array_merge (  $ss['p'] , $ss['bei'] );
		 }  
		 
		// echo "<pre>";	 print_r($ss);  echo "</pre>";
		   //echo "";
					  
			?>
			
			
			 <div style="font-size:400%; left:15%; position:absolute" >
	
			<?php
				//$rnum = rand ( 0 , count($ss['a'])-1 ) ;
				$rst=
				$ss[ 'a' ][ rand ( 0 , count($ss['a'])-1 ) ].
				 $ss[ 'n' ][ rand ( 0 , count($ss['n'])-1 ) ].
				 '<br>  '.
				 $ss[ 'n' ][ rand ( 0 , count($ss['n'])-1 ) ].
				 $ss[ 'v' ][ rand ( 0 , count($ss['v'])-1 ) ].
				 $ss[ 'p' ][ rand ( 0 , count($ss['p'])-1 ) ].
				 $ss[ 'n' ][ rand ( 0 , count($ss['n'])-1 ) ].
				 '<br>  '.
				 $ss[ 'a' ][ rand ( 0 , count($ss['a'])-1 ) ].
				 $ss[ 'a' ][ rand ( 0 , count($ss['a'])-1 ) ].
				 $ss[ 'uj' ][ rand ( 0 , count($ss['uj'])-1 ) ].
				 $ss[ 'n' ][ rand ( 0 , count($ss['n'])-1 ) ];
				echo $rst;

				
						   
						   
		   
		   //$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
			$rst2 = str_replace("<br>" , '    ' , $rst);
		   
		   $url="http://www.facebook.com/dialog/feed?app_id=259720817401522&link=http://140.133.13.43:8080/projHaiku/reindex.php&name=我的Haiku&  caption=分享我的Haiku&description=$rst&message=$rst2&redirect_uri=http://140.133.13.43:8080/projHaiku/reindex.php"
  
		   
		   
		   
		   
		   
		   
		   
	   
	   
	   ?> 
	   
	  </p>   

	  <div  style="font-size:50%">
<a href="javascript:document.location.reload(true)"><img src="next.png" width="50px"/>下一個</a>
<p>

	  <a href="<?php echo $url ?>" target='_blank'>貼到塗鴉牆分享</a>
</div>
<a class="smalla" href="http://www.facebook.com/apps/application.php?id=259720817401522" target="_blank"> 粉絲專頁 歡迎來和大家分享你的Haiku!</a> 
<p>

<!--
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#appId=151245788302736&xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="http://www.facebook.com/apps/application.php?id=259720817401522" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark" data-font="tahoma"></div>
	  </div>	  
	-->   
	  

	   <? else: ?>

    <?php endif ?>

  </body>
</html>






