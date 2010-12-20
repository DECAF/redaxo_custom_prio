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

?>
<style type="text/css" media="screen">
  div#decaf_piwik_tracker_help p { margin-bottom: 12px; margin-left: 10px;}
  div#decaf_piwik_tracker_help h1 { margin-bottom: 10px; font-size: 150%;}
  div#decaf_piwik_tracker_help h2 { margin-top: 20px; margin-bottom: 10px; font-size: 120%;}
  div#decaf_piwik_tracker_help ul { margin-bottom: 10px; padding-left: 40px; }
</style>

<div id="decaf_piwik_tracker_help">
<h1>
  README
</h1>
<h2>
  Addon: <a href="http://www.redaxo.de/180-0-addon-details.html?addon_id=840" title="http://www.redaxo.de/180-0-addon-details.html?addon_id=840">CustomPrio</a>
</h2>
<h2>
  Description
</h2>
<p>
  Changes the priority of new articles or categories. Instead of 100 as the default value you can set your own default priorities.
</p>
<p>
  Configuration is stored in an ini-File. You can set the category-ID in which the custom priority for new articles and categories are overridden and if the priority should be inherited.
</p>
<p>
  After installation of the addon new articles will get the priority of 2, categories are unchanged at 100.
</p>
<p>
  The default priority is set with jQuery, so Javascript has to be activated on the client side.
</p>
<h2>
  Changelog
</h2>
<ul>
  <li>
    <p>
      <strong>1.0.1:</strong>
    </p>
    <ul>
      <li>cleaned up svn files
      </li>
    </ul>
  </li>
  <li>
    <p>
      <strong>1.0.1:</strong>
    </p>
    <ul>
      <li>removed obsolete backend user permissions
      </li>
    </ul>
  </li>
  <li>
    <p>
      <strong>1.0.0:</strong>
    </p>
    <ul>
      <li>Initial release
      </li>
    </ul>
  </li>
</ul>
</div>