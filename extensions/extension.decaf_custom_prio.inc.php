<?php
/**
 * decaf_category_js
 *
 * @author Sven Kesting <sk@decaf.de>
 * @author <a href="http://www.decaf.de">www.decaf.de</a>
 * @package redaxo4
 * @version $Id: extension.decaf_custom_prio.inc.php 31 2010-11-30 13:12:00Z sk $
 */

rex_register_extension('PAGE_HEADER', 'decaf_custom_prio');

function decaf_custom_prio($params)
{
  $mypage = 'decaf_custom_prio';
  global $REX;
  $decaf_category_js_config = parse_ini_file($REX['INCLUDE_PATH']. '/addons/'.$mypage.'/config/config.ini.php', true);

  // init vars
  $new_category_prio = false;
  $new_article_prio = false;

  $cat_id = rex_get('category_id') ? rex_get('category_id') : 0;

  if (isset($decaf_category_js_config[$cat_id])) // check entry for current category
  {
    $new_category_prio = $decaf_category_js_config[$cat_id]['new_category_prio'];
    $new_article_prio = $decaf_category_js_config[$cat_id]['new_article_prio'];
  }

  if (!$new_category_prio) // check if prios are set in parent categories
  {
    $cat = OOCategory::getCategoryById($cat_id);
    if ($cat)
    {
      
      $path = getCategoryPathAsArray($cat);

      foreach($path as $cat_id) {
        if (isset($decaf_category_js_config[$cat_id]) && $decaf_category_js_config[$cat_id]['inherit']) // check entry for current category
        {
          $new_category_prio = $decaf_category_js_config[$cat_id]['new_category_prio'];
          $new_article_prio = $decaf_category_js_config[$cat_id]['new_article_prio'];
          break;
        }
      }
    }
  }

  if ($new_article_prio || $new_category_prio)
  {
    echo '<script>(function($){ $(document).ready(function() { '."\n";
    if ($new_article_prio) {
      echo 'if ($(\'input[name="Position_New_Article"]\').length) {
        $(\'input[name="Position_New_Article"]\').val(\''.$new_article_prio.'\');
      }'."\n";
    }
    if ($new_category_prio) {
      echo 'if ($(\'input[name="Position_New_Category"]\').length) {
        $(\'input[name="Position_New_Category"]\').val(\''.$new_category_prio.'\');
      }'."\n";
    }
    echo '})})(jQuery);</script>'."\n";
  }
}

// compat for REX4.2
function getCategoryPathAsArray($cat) {
  if (method_exists($cat, 'getPathAsArray')) {
    $path = array_reverse($cat->getPathAsArray());
  } else {
    $p = explode('|',$cat->_path);
    foreach($p as $k => $v)
    {
      if($v == '')
        unset($p[$k]);
      else
        $p[$k] = (int) $v;
    }
    $path = array_values($p);
  }
  array_unshift($path,0); // add root category '0' to path
  return $path;
}
