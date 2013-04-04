<?php

require '../src/facebook.php';


// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '200768459981323',
  'secret' => 'db533a6d0e9697585e8dba50132718e7',
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
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_posts = $facebook->api('/me/feed?limit=10');
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
	  
  
	  
	
	  
	  <?php 
	  
	  print_r($user_posts);

 function echoppic($id)
 {
	echo "<img  src='" . "https://graph.facebook.com/" . $id . "/picture?type=square ' />";
 }
  function echoppic_mid($id)
 {
	echo "<img width=100px src='" . "https://graph.facebook.com/" . $id . "/picture?type=large ' />";
 }

 
 
  foreach($user_posts['data'] as $key => $value)
  {
  
	  if($value['message'])
	  {
		//情緒偵測 1:喜 2:樂3:怒4:哀
		  $handle = fopen("http://140.133.13.43:8080/projfbemo/text/?input=" . '好開心'  , "r");
		  $emotion = stream_get_contents($handle);
		  fclose($handle);
	
		if(  !($emotion == 1 || $emotion == 2) )  continue;
		
	  
	    echoppic_mid($value['from']['id']);
		echo "<br>";
		echo $value['message'];
		
		
		if($value['comments'])//貼出所有的留言和大頭貼 
		{
			echo "<br>";
			  
			
					 try {
						// Proceed knowing you have a logged in user who's authenticated.
						$comments = $facebook->api( $value['id'] . '/comments');
					  } catch (FacebookApiException $e) {
						error_log($e);
						$comments = null;}
						
					
						
						 foreach($comments['data'] as $key2_comments => $value2_comments)
						 {
							echoppic( $value2_comments['from']['id'] );
							echo $value2_comments['message'];
							echo "<br>";
							
						 }
						
			
			
		
		}
		
		
		
			
		if($value['likes']) //貼出所有按讚的大頭貼
		{
			echo "<br>";

					 try {
						// Proceed knowing you have a logged in user who's authenticated.
						$likes = $facebook->api( $value['id'] . '/likes');
					  } catch (FacebookApiException $e) {
						error_log($e);
						$likes = null;}
						
						
						
						 foreach($likes['data'] as $key2_likes => $value2_likes)
						 {
							echoppic( $value2_likes['id'] );
						//	echo '&nbsp;';
							
						 }
						
			
			 echo "喜歡這則回憶";
		
		}
		
		
		
		
		
		

		
		
		
		
		
		echo '<hr>';
	  }	
  }
	  





	  ?>
       <pre><?php //$nextpost =  substr ( $user_posts['paging']['next'] , 26 ) ;?></pre>  
	   <pre>
	   <?php
	   while ( $nextpost )
	   {
					 try {
				// Proceed knowing you have a logged in user who's authenticated.
				$user_posts = $facebook->api($nextpost );
			  } catch (FacebookApiException $e) {
				error_log($e);
				$user = null;
			  }

			  $nextpost =  substr ( $user_posts['paging']['next'] , 26 ) ;
			   //echo print_r($user_posts);
			   
			   
			     foreach($user_posts['data'] as $key => $value)
				  {
					  if($value['message'])
					  {
						echo $value['message'];
						echo '<hr>';
					  }	
				  }
	  


   
  }
	   
	   
	   
	   ?> 
	   
	  </pre>    
	   
	   
	   <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>

  </body>
</html>
