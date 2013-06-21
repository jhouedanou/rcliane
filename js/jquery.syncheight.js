/**
 * syncHeight - jQuery plugin to automagically Sync the heights of columns
 * Made to seemlessly work with the CCS-Framework YAML (yaml.de)
 * @requires jQuery v1.0.3 or newer
 *
 * http://blog.ginader.de/dev/syncheight/
 *
 * Copyright (c) 2007-2013
 * Dirk Ginader (ginader.de)
 * Dirk Jesse (yaml.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Version: 1.5
 *
 * Changelog
 * * v1.5 fixes issue with box-sizing: border-box
 * * v1.4: new Method unSyncHeight() that removes previously added syncs i.e. for responsive layouts
 * * v1.3: compatibility fix for jQuery 1.9.x (removed $.browser)
 *
 * Usage sync:
  $(window).load(function(){
    $('p').syncHeight();
  });
 * Usage unsync:
  $(window).resize(function(){
    if($(window).width() < 500){
      $('p').unSyncHeight();
    }
  });
 */
