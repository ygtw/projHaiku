<?php

//請把本檔案放到Facebook SDK examples資料夾裡面才讀得到下面的檔案(FBSDK)
require 'src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '...',
  'secret' => '...',
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

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_posts = $facebook->api('/me/feed?limit=10000');  //取得資料
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}


// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl(array('scope'=>'publish_stream,user_status,read_stream,user_likes,user_checkins'));
}

print_r ( $user );
echo "XD";
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>php-sdk</title>
    <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <h1>php-sdk</h1>

    <?php if ($user): ?>
      <a href="<?php echo $logoutUrl; ?>">Logout</a>
    <?php else: ?>
      <div>
        Login using OAuth 2.0 handled by the PHP SDK:
        <a href="<?php echo $loginUrl; ?>">Login with Facebook</a>
      </div>
    <?php endif ?>

    <h3>PHP Session</h3>
    <pre><?php print_r($_SESSION); ?></pre>

    <?php if ($user): ?>

      <h3>Your User Object (/me)</h3>
	  
      <pre><?php print_r($user_posts); ?></pre>
       <pre><?php $nextpost =  substr ( $user_posts['paging']['next'] , 26 ) ;  //取得下一頁id ?></pre>  
	   <pre>
	   <?php
	   while ( $nextpost )  //以下一頁id繼續爬資料
	   {
		   try {
				$user_posts = $facebook->api($nextpost );  //取得資料
		  } catch (FacebookApiException $e) {	error_log($e);	$user = null;	  }

		  $nextpost =  substr ( $user_posts['paging']['next'] , 26 ) ;   //取得下一頁id 
		   echo print_r($user_posts);  
	  }
		   
	   
	   
	   ?> 
	   
	  </pre>    
	   
	   
	   <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>

  </body>
</html>
