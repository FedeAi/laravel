/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/
(function ($) {
  var $window = $(window),
      $head = $('head'),
      $body = $('body'); // Breakpoints.

  breakpoints({
    xlarge: ['1281px', '1680px'],
    large: ['981px', '1280px'],
    medium: ['737px', '980px'],
    small: ['481px', '736px'],
    xsmall: ['361px', '480px'],
    xxsmall: [null, '360px'],
    'xlarge-to-max': '(min-width: 1681px)',
    'small-to-xlarge': '(min-width: 481px) and (max-width: 1680px)'
  }); // Stops animations/transitions until the page has ...
  // ... loaded.

  $window.on('load', function () {
    window.setTimeout(function () {
      $body.removeClass('is-preload');
    }, 100);
  }); // ... stopped resizing.

  var resizeTimeout;
  $window.on('resize', function () {
    // Mark as resizing.
    $body.addClass('is-resizing'); // Unmark after delay.

    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(function () {
      $body.removeClass('is-resizing');
    }, 100);
  }); // Fixes.
  // Object fit images.

  if (!browser.canUse('object-fit') || browser.name == 'safari') $('.image.object').each(function () {
    var $this = $(this),
        $img = $this.children('img'); // Hide original image.

    $img.css('opacity', '0'); // Set background.

    $this.css('background-image', 'url("' + $img.attr('src') + '")').css('background-size', $img.css('object-fit') ? $img.css('object-fit') : 'cover').css('background-position', $img.css('object-position') ? $img.css('object-position') : 'center');
  }); // Sidebar.

  var $sidebar = $('#sidebar'),
      $sidebar_inner = $sidebar.children('.inner'); // Inactive by default on <= large.

  breakpoints.on('<=large', function () {
    $sidebar.addClass('inactive');
  });
  breakpoints.on('>large', function () {
    $sidebar.removeClass('inactive');
  }); // Hack: Workaround for Chrome/Android scrollbar position bug.

  if (browser.os == 'android' && browser.name == 'chrome') $('<style>#sidebar .inner::-webkit-scrollbar { display: none; }</style>').appendTo($head); // Toggle.

  $('<a href="#sidebar" class="toggle">Toggle</a>').appendTo($sidebar).on('click', function (event) {
    // Prevent default.
    event.preventDefault();
    event.stopPropagation(); // Toggle.

    $sidebar.toggleClass('inactive');
  }); // Events.
  // Link clicks.

  $sidebar.on('click', 'a', function (event) {
    // >large? Bail.
    if (breakpoints.active('>large')) return; // Vars.

    var $a = $(this),
        href = $a.attr('href'),
        target = $a.attr('target'); // Prevent default.

    event.preventDefault();
    event.stopPropagation(); // Check URL.

    if (!href || href == '#' || href == '') return; // Hide sidebar.

    $sidebar.addClass('inactive'); // Redirect to href.

    setTimeout(function () {
      if (target == '_blank') window.open(href);else window.location.href = href;
    }, 500);
  }); // Prevent certain events inside the panel from bubbling.

  $sidebar.on('click touchend touchstart touchmove', function (event) {
    // >large? Bail.
    if (breakpoints.active('>large')) return; // Prevent propagation.

    event.stopPropagation();
  }); // Hide panel on body click/tap.

  $body.on('click touchend', function (event) {
    // >large? Bail.
    if (breakpoints.active('>large')) return; // Deactivate.

    $sidebar.addClass('inactive');
  }); // Scroll lock.
  // Note: If you do anything to change the height of the sidebar's content, be sure to
  // trigger 'resize.sidebar-lock' on $window so stuff doesn't get out of sync.

  $window.on('load.sidebar-lock', function () {
    var sh, wh, st; // Reset scroll position to 0 if it's 1.

    if ($window.scrollTop() == 1) $window.scrollTop(0);
    $window.on('scroll.sidebar-lock', function () {
      var x, y; // <=large? Bail.

      if (breakpoints.active('<=large')) {
        $sidebar_inner.data('locked', 0).css('position', '').css('top', '');
        return;
      } // Calculate positions.


      x = Math.max(sh - wh, 0);
      y = Math.max(0, $window.scrollTop() - x); // Lock/unlock.

      if ($sidebar_inner.data('locked') == 1) {
        if (y <= 0) $sidebar_inner.data('locked', 0).css('position', '').css('top', '');else $sidebar_inner.css('top', -1 * x);
      } else {
        if (y > 0) $sidebar_inner.data('locked', 1).css('position', 'fixed').css('top', -1 * x);
      }
    }).on('resize.sidebar-lock', function () {
      // Calculate heights.
      wh = $window.height();
      sh = $sidebar_inner.outerHeight() + 30; // Trigger scroll.

      $window.trigger('scroll.sidebar-lock');
    }).trigger('resize.sidebar-lock');
  }); // Menu.

  var $menu = $('#menu'),
      $menu_openers = $menu.children('ul').find('.opener'); // Openers.

  $menu_openers.each(function () {
    var $this = $(this);
    $this.on('click', function (event) {
      // Prevent default.
      event.preventDefault(); // Toggle.

      $menu_openers.not($this).removeClass('active');
      $this.toggleClass('active'); // Trigger resize (sidebar lock).

      $window.triggerHandler('resize.sidebar-lock');
    });
  });
})(jQuery);

/***/ }),

/***/ "./resources/sass/main.scss":
/*!**********************************!*\
  !*** ./resources/sass/main.scss ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***************************************************************!*\
  !*** multi ./resources/js/main.js ./resources/sass/main.scss ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/federico/Documents/progetti/web/laravel/personalSite/resources/js/main.js */"./resources/js/main.js");
module.exports = __webpack_require__(/*! /home/federico/Documents/progetti/web/laravel/personalSite/resources/sass/main.scss */"./resources/sass/main.scss");


/***/ })

/******/ });