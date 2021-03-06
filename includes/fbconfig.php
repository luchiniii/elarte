<?php
session_start();
require('config.php');
$url_referrer = urlencode($_REQUEST['url']);
// added in v4.0.0
define('FACEBOOK_SDK_V4_SRC_DIR', 'Facebook/');
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( FB_APP_ID, FB_APP_SECRET );
// login helper with redirect_uri
$helper = new FacebookRedirectLoginHelper( URL.'includes/fbconfig.php?url='.$url_referrer );
try {
	$session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
	// When Facebook returns an error
} catch( Exception $ex ) {
	// When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
	// graph api request for user data
	$request = new FacebookRequest( $session, 'GET', '/me' );
	$response = $request->execute();
	// get response
	$graphObject = $response->getGraphObject();
	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
	$firstName = $graphObject->getProperty('first_name');
	$lastName = $graphObject->getProperty('last_name');
	$birthDay = $graphObject->getProperty('birthday');
	$fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	$femail = $graphObject->getProperty('email');    // To Get Facebook email ID

	/* ---- Session Variables -----*/
	$_SESSION['FBID'] = $fbid;
	
	/* ---- header location after session ----*/
	header( "Location: $_REQUEST[url]" );

} else {
	
	$loginUrl = $helper->getLoginUrl();
	header("Location: ".$loginUrl);
	
}
?>