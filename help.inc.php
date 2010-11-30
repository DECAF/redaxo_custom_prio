<?php
/**
 * decaf_custom_prio
 *
 * @author Sven Kesting <sk@decaf.de>
 * @author <a href="http://www.decaf.de">www.decaf.de</a>
 * @package redaxo4
 * @version $Id: help.inc.php 26 2010-11-30 12:11:05Z sk $
 */

$mypage = 'decaf_custom_prio';

$base_path = $REX['INCLUDE_PATH'] .'/addons/'.$mypage;
require_once($base_path.'/classes/markdown.class.php');

switch($lang) {
  case 'default':
  case 'de_de_utf8':
  case 'de_de':
    $file = 'LIESMICH.markdown';
    break;
  default:
    $file = 'README.markdown';
}


$content = Markdown(file_get_contents(dirname( __FILE__)."/".$file));

?>
<style type="text/css" media="screen">
  div#decaf_piwik_tracker_help p { margin-bottom: 12px; margin-left: 10px;}
  div#decaf_piwik_tracker_help h1 { margin-bottom: 10px; font-size: 150%;}
  div#decaf_piwik_tracker_help h2 { margin-top: 20px; margin-bottom: 10px; font-size: 120%;}
  div#decaf_piwik_tracker_help ul { margin-bottom: 10px; padding-left: 40px; }
</style>

<div id="decaf_piwik_tracker_help">

<?php echo $content ?>

</div>