<?php
/**
 * decaf_custom_prio
 *
 * @author Sven Kesting <sk@decaf.de>
 * @author <a href="http://www.decaf.de">www.decaf.de</a>
 * @package redaxo4
 * @version $Id: config.inc.php 27 2010-11-30 12:18:12Z sk $
 */

$mypage = 'decaf_custom_prio';
$REX['ADDON']['rxid'][$mypage]    = "840";
$REX['ADDON']['page'][$mypage]    = $mypage;
$REX['ADDON']['version'][$mypage] = "1.0.0";
$REX['ADDON']['author'][$mypage]  = "Sven Kesting <sk@decaf.de>, DECAF° | www.decaf.de";
$REX['ADDON']['perm'][$mypage]    = "decaf_category_js[]";
$REX['PERM'][]                    = "decaf_category_js[]";


if ($REX['REDAXO']) // backend
{
  if (rex_get('page') == 'structure')
  {
    require_once($REX['INCLUDE_PATH']."/addons/".$mypage."/extensions/extension.".$mypage.".inc.php");
  }
}
