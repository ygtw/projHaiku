<?php
session_start();
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<meta property="og:title" content="我的排牆(My Haiku)" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<META HTTP-EQUIV="pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate">
<META HTTP-EQUIV="expires" CONTENT="Wed, 26 Feb 1997 08:21:57 GMT">
<META HTTP-EQUIV="expires" CONTENT="0">
 <link href="favicon.ico" rel="SHORTCUT ICON">
  <head>
    <title>我的徘牆 v0.4</title>
    <style>
	body
	{
		color:white;
		background-color:black;
	}
      div {
        font-family: '標楷體', Verdana, Arial, sans-serif;
      }
	
	  a:visited , a 
	  {
		color:gray;   text-decoration: none;
	  }
       a:hover,  h1 a:hover {
       text-decoration: none;
		color:yellow;
	  }
	  	h1 a
		{
			color: white;
		}
	  .smalla
	  {
		font-size:20px;
	  }
	  .fb-like 
	  {
		position:fixed;
		left:90%;
		top:-100px;
	

	  }
	  #loading
	  {
		padding:20px;
		text-align: center;
	 
	
	  }
    </style>
  </head>
  <body>
  
  
  
  
  
  
  
  
 <h1 ><a title="粉絲專頁(開新視窗)" alt="粉絲專頁(開新視窗)" style="color:white" href="http://www.facebook.com/apps/application.php?id=259720817401522" target="_blank">
 我的徘牆 <span style="font-size:small">v0.4</span>
 
 </a></h1>
 <h5>你的塗鴉牆會產生的徘牆...</h5>
	  <hr>
	  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/all.js#xfbml=1&appId=259720817401522";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-href="https://apps.facebook.com/myhaikuonwall/" data-send="false" data-layout="box_count" data-width="50" data-show-faces="true" data-colorscheme="dark" data-action="recommend"></div>
	  

	  
	 <?php if(isset($_GET['fblike'])) echo '<!--'  ?> 
	  <div id="loading" > <img src='loading.gif' width="100px" /> <br><br>爬牆中，請稍待</div>
	  <?php if(isset($_GET['fblike'])) echo '-->'  ?> 
	  
	  
	  
	  
  
<?php if(isset($_GET['fblike'])) echo '<!--'  ?> 


<?php if(isset($_GET['fblike'])) echo '-->'  ?> 
  
  

	  
<?php
$_GET['d']=0;



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

//$rnum = mt_rand ( 0 , count($ss['a'])-1 ) ;
echo $ss[ 'a' ][ mt_rand ( 0 , count($ss['a'])-1 ) ];
echo $ss[ 'n' ][ mt_rand ( 0 , count($ss['n'])-1 ) ];
echo '<br>';
echo $ss[ 'n' ][ mt_rand ( 0 , count($ss['n'])-1 ) ];
echo $ss[ 'v' ][ mt_rand ( 0 , count($ss['v'])-1 ) ];
echo $ss[ 'p' ][ mt_rand ( 0 , count($ss['p'])-1 ) ];
echo $ss[ 'n' ][ mt_rand ( 0 , count($ss['n'])-1 ) ];
echo '<br>';
echo $ss[ 'a' ][ mt_rand ( 0 , count($ss['a'])-1 ) ];
echo $ss[ 'a' ][ mt_rand ( 0 , count($ss['a'])-1 ) ];
echo $ss[ 'uj' ][ mt_rand ( 0 , count($ss['uj'])-1 ) ];
echo $ss[ 'n' ][ mt_rand ( 0 , count($ss['n'])-1 ) ];


print_r($ss);
*/



?>




<?php
error_reporting(0);
 //error_reporting(E_ALL);
//請把本檔案放到Facebook SDK examples資料夾裡面才讀得到下面的檔案(FBSDK)
require 'src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '259720817401522',
  'secret' => '6c587be09f78df10e85a34b1f7a0ce92',
));

// Get User ID
$user = $facebook->getUser();
///print_r($user);

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');  //登入
//	print_r($user_profile);
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}
else{
	$app_id = '259720817401522';
	$app_secret = "6c587be09f78df10e85a34b1f7a0ce92";
	$my_url = "http://apps.facebook.com/myhaikuonwall";
	$code = $_REQUEST["code"];
	if(empty($code)) {
		$dialog_url = "http://www.facebook.com/dialog/oauth?client_id=" 
			. $app_id . "&redirect_uri=" . $my_url.'&scope=publish_stream,user_status,read_stream,user_events';

		echo("<script> top.location.href='" . $dialog_url . "'</script>");
	}
}

$getsession=0;
//	echo "XD";
if(!isset($_SESSION['user_posts0']))
{
	$getsession=1;
	if ($user) {
	  try {
		// Proceed knowing you have a logged in user who's authenticated.
		$user_posts = $facebook->api('/me/feed?fields=message,link,from&limit=1000');  //取得資料
	$_SESSION["user_posts0"] = json_encode($user_posts);
//	print_r(	$user_posts  );
//	echo "XD";
	
	  } catch (FacebookApiException $e) {
		echo "<pre>";
		print_r($e);
		$user = null;
	  }
	}



}

$access_token =$facebook->getAccessToken();
//print_r($user);
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
	$user_posts = json_decode($_SESSION['user_posts0'],true);  
	$firstpage =1 ;
//		if(1) { echo '<pre>';  print_r( 	$user_posts ); }
//echo $_SESSION["user_posts0"];
ob_flush();flush();

	  
	  
	  
	  ?>
	  
	  
	 
    
	
       
	   <?php 
	      $temp= strpos( $user_posts['paging']['next'] , "feed");
		  
		  
		  
	   $nextpost =  substr ( $user_posts['paging']['next'] , $temp ) ;  //取得下一頁id 
	  // echo  $nextpost;
	
	   ?>
	  
	   <?php
	     $ssnum = 0;
		 
		 	$depth = 1;
		if( isset ($_GET['depth']) )
		{
			
			$depth = $_GET['depth']; 
		}
		else
		{	
			$depth = mt_rand(1,10);
		//echo 'mt_rand:'.$depth;

		}

		 while ( $nextpost && $ssnum <= $depth)  //以下一頁id繼續爬資料
	   {
		if($getsession==1 &&  $ssnum >0)
		{
		   try {
					$user_posts = $facebook->api("me/" + $nextpost );  //取得資料
					$_SESSION["user_posts". $ssnum] = json_encode($user_posts);
			
				
			} catch (FacebookApiException $e) {	error_log($e);	$user = null;	  }
		}
		else
		{
			$user_posts = json_decode($_SESSION['user_posts'. $ssnum],true);  
		}
//		echo "<pre>";
	//	print_r($user_posts);
		
		foreach ( $user_posts['data'] as $key => $value )
	  {
	  
	//	print_r( $value );
	//	echo "<br>";
		if($value['from']['id']== $user_profile['id'] && $value['link']!='http://apps.facebook.com/259720817401522/')
		{	
	
	
		//if($_GET['d']==1)
		//echo $value['message'].'<p>';
		
		$text = clean_file_name($value['message']); 
		
		//echo $text.'<p>';
		scws_send_text($sh, $text);
		$rst = scws_get_result($sh);

			foreach ( $rst as $key => $value )
			{ 
					$ss [ $value['attr'] ][]= clean_file_name($value['word']);
			}
					
		
		}
		
		
	  }
			
		  
				++$ssnum;
		  $nextpost =  substr ( $user_posts['paging']['next'] , 26 ) ;   //取得下一頁id 
		 //  echo print_r($user_posts);  
	  }
	  
	  
	
	 
	  ?>
	
	
	  
	   <?php
	  // print_r($_SESSION);
	  // print_r($ss);
	  
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
			
			
			 <div style="font-size:200%; text-align:center; position:absolute; width:95%;" >
			 <br>
	
			<?php
			
			
				//$rnum = mt_rand ( 0 , count($ss['a'])-1 ) ;
				
				
				$sants[1] = $ss[ 'a' ][ mt_rand ( 0 , count($ss['a'])-1 ) ].
				 $ss[ 'n' ][ mt_rand ( 0 , count($ss['n'])-1 ) ].
				 ' ';
				$sants[2] = 	 $ss[ 'n' ][ mt_rand ( 0 , count($ss['n'])-1 ) ].
				 $ss[ 'v' ][ mt_rand ( 0 , count($ss['v'])-1 ) ].
				 $ss[ 'p' ][ mt_rand ( 0 , count($ss['p'])-1 ) ].
				 $ss[ 'n' ][ mt_rand ( 0 , count($ss['n'])-1 ) ].
				 ' ';
				 
				$sants[3] = 
				 $ss[ 'a' ][ mt_rand ( 0 , count($ss['a'])-1 ) ].
				 $ss[ 'a' ][ mt_rand ( 0 , count($ss['a'])-1 ) ].
				 $ss[ 'uj' ][ mt_rand ( 0 , count($ss['uj'])-1 ) ].
				 $ss[ 'n' ][ mt_rand ( 0 , count($ss['n'])-1 ) ];
				  
				  
		   // 句子亂數
			 $sant = mt_rand ( 1 , 3 );
			 if( $sant == 3 )
			 {
			   $rst= $sants[1] . $sants[2] . $sants[3];
		     }
			 else if ($sant == 2)
			 {
		     $rst= $sants[1] . $sants[3];
		   
			 
			 }
			 else if ($sant == 1)
			 {
				 $rst= $sants[mt_rand ( 1 , 3 )];
		  			 
			 }
			 
				  
				  
				
			
				echo $rst;

				
						   
						   
		   
		   //$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
			$rst2 = str_replace("<br>" , '    ' , $rst);
		   
		  $url="http://www.facebook.com/dialog/feed?app_id=259720817401522&link=http://apps.facebook.com/myhaikuonwall/&name=我的徘牆&  caption=來自我塗鴉牆自動生成的徘句...&description=$rst&message=$rst2&
		  picture=https://sites.google.com/site/fbapptrans/img2.JPG?attredirects=0&
		  redirect_uri=http://122.117.232.20/projHaiku/close.php";
  
		  // $url = "https://graph.facebook.com/me/feed/?message=test&access_token=".$access_token;
		   
		   


	//	 echo 'XD:'. $result;
		   
	
if($_GET['smsg'])
{
$smsg = $_GET['smsg']; 
$result = $facebook->api(
    '/me/feed/',
    'post',
    array('access_token' => $access_token, 'message' => $smsg)
);
}		   
		   
	   
	   
	   ?> 
	   
	    
<p>
	  <div  style="text-align: right ; font-size:50%">
<a href="index.php?fblike=0" taget="_self">下一個<img style=" vertical-align:middle; " border="0" src="next.png" width="50px"/></a>
<p>

	  <a href="<?php echo $url ?>" target='_blank'>貼到塗鴉牆分享</a>
	 

</div>


 </div>

	  
  
  

	   <? else: ?>

    <?php endif ?>

	<script>
				document.getElementById('loading').style.display = 'none';

	</script>
	<div>
	
	</div>
	
  </body>
</html>
