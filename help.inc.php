<?php
/**
 * decaf_custom_prio
 *
 * @author Sven Kesting <sk@decaf.de>
 * @author <a href="http://www.decaf.de">www.decaf.de</a>
 * @package redaxo4
 * @version $Id: help.inc.php 26 2010-11-30 12:11:05Z sk $
 */
?>
<style type="text/css" media="screen">
  #addon-help h1 {
    font-size: 130%;
  }
  #addon-help p,
  #addon-help h1,
  #addon-help h2 {
    margin-bottom: 1em;
  }
  #addon-help li {
    margin: 0 0.5em 0 1.5em;
  }
</style>

<div id="addon-help">

  <h1>Addon: <a href="http://www.redaxo.de/180-0-addon-details.html?addon_id=840" title="http://www.redaxo.de/180-0-addon-details.html?addon_id=840">CustomPrio</a></h1>

  <p><strong>Changes the priority (Prio) of new articles or categories. Instead of 100 as the default value, you can set your own default priorities.</strong></p>
  <p>After installation of the addon new articles will get the priority of 2, categories are unchanged at 100.</p>
  <p>Configuration is stored in an ini file. You can define custom prios for any categories, restricted or inherited.<br />
    The default priority is set with jQuery, so JavaScript has to be activated on the client side.</p>

</div>