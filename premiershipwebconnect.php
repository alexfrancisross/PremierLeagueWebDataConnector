<?php
/*********************************************************************************************************/
/** Twitter Web Connector																				**/
/** Manages Oauth Authentication and Merges Multiple Requests To Twitter Search API 					**/
/** Author Alex Ross 																					**/
/** Version 1.0                               															**/
/*********************************************************************************************************/

 
$baseurl = 'http://fantasy.premierleague.com/web/api/elements/';

/** Get Search Term From Query String **/
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}else{
    // Fallback behaviour goes here
	$id="1";
}
 
 /** Get Request From Twitter Search API **/
$requestMethod = "GET";
$url = $baseurl . $id;
$result = @file_get_contents($url);
// Will dump a beauty json :3
//var_dump(json_decode($result, true));	

if ($result === FALSE)
{
	$result=-1;
}	
echo $result;
?>