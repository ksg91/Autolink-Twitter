<?php
/*
Plugin Name: Autolink Twitter
Plugin URI: http://ksg91.com
Description: A simple plugin for wordpress, which automatically link mentions in post or page to twitter profiles and hashtags to search link. 
Version: 0.0
Author: Kishan Gor
Author URI: http://ksg91.com
License: GPL2
*/
function autoLinkTwitter($contents)
{
  //links mentions to the twitter profile
  $contents=preg_replace('/(\s)@([a-zA-Z]+)/',' <a href="http://twitter.com/\2">@\2</a>',$contents);
  return $contents;
}
?>