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

/***/ "./resources/js/Shared/navbar.js":
/*!***************************************!*\
  !*** ./resources/js/Shared/navbar.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var sidebar = document.getElementById('sidenavbar');
var barsIcon = document.querySelector('.bars');
var darkLayer = document.querySelector('.dark-layer');
var sidebarIsOpen = false;

var openSidebar = function openSidebar() {
  sidebar.style.width = "60%";
  sidebarIsOpen = true;
  darkLayer.style.display = 'block';
  var elements = document.getElementsByClassName('sidebartext');
  for (var i = 0; i < elements.length; i++) {
      elements[i].classList.add('tracking');
      elements[i].classList.remove('trackingo');
  }  
};

var closeSidebar = function closeSidebar() {
  sidebar.style.width = "0%";
  sidebarIsOpen = false;
  darkLayer.style.display = 'none';
  var elements = document.getElementsByClassName('sidebartext');
  for (var i = 0; i < elements.length; i++) {
      elements[i].classList.remove('tracking');
      elements[i].classList.add('trackingo');
  }    
};

barsIcon.addEventListener('click', function () {
  if (sidebarIsOpen) {
    closeSidebar();
  } else {
    openSidebar();
  }
});
darkLayer.addEventListener('click', function () {
  closeSidebar();
}); // function opensidebar() {
//     if (sidebarIsOpen) {
//         var sidebar = document.getElementById('sidenavbar');
//         var body = document.getElementById('content');
//         sidebar.style.width = "60%";
//         body.style.backgroundColor = "rgba(0,0,0,0.4)";
//         var elements = document.getElementsByClassName('sidebartext');
//         for (var i = 0; i < elements.length; i++) {
//             elements[i].classList.add('tracking');
//             elements[i].classList.remove('trackingo');
//         }
//     } else {
//         var sidebar = document.getElementById('sidenavbar');
//         var body = document.getElementById('content');
//         sidebar.style.width = "0%";
//         body.style.backgroundColor = "rgba(0,0,0,0)";
//         var elements = document.getElementsByClassName('sidebartext');
//         for (var i = 0; i < elements.length; i++) {
//             elements[i].classList.remove('tracking');
//             elements[i].classList.add('trackingo');
//         }
//     }
// }

/***/ }),

/***/ "./resources/sass/Shared/footer.scss":
/*!*******************************************!*\
  !*** ./resources/sass/Shared/footer.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/Shared/navbar.scss":
/*!*******************************************!*\
  !*** ./resources/sass/Shared/navbar.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/Shared/shared.scss":
/*!*******************************************!*\
  !*** ./resources/sass/Shared/shared.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/User/about.scss":
/*!****************************************!*\
  !*** ./resources/sass/User/about.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/User/committees.scss":
/*!*********************************************!*\
  !*** ./resources/sass/User/committees.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/User/contact.scss":
/*!******************************************!*\
  !*** ./resources/sass/User/contact.scss ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/User/events.scss":
/*!*****************************************!*\
  !*** ./resources/sass/User/events.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/User/home_page.scss":
/*!********************************************!*\
  !*** ./resources/sass/User/home_page.scss ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/User/profile.scss":
/*!******************************************!*\
  !*** ./resources/sass/User/profile.scss ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/User/sign.scss":
/*!***************************************!*\
  !*** ./resources/sass/User/sign.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** multi ./resources/js/Shared/navbar.js ./resources/sass/Shared/footer.scss ./resources/sass/Shared/navbar.scss ./resources/sass/Shared/shared.scss ./resources/sass/User/about.scss ./resources/sass/User/committees.scss ./resources/sass/User/contact.scss ./resources/sass/User/events.scss ./resources/sass/User/home_page.scss ./resources/sass/User/profile.scss ./resources/sass/User/sign.scss ***!
  \*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! G:\Pirates\Pirates-Website\resources\js\Shared\navbar.js */"./resources/js/Shared/navbar.js");
__webpack_require__(/*! G:\Pirates\Pirates-Website\resources\sass\Shared\footer.scss */"./resources/sass/Shared/footer.scss");
__webpack_require__(/*! G:\Pirates\Pirates-Website\resources\sass\Shared\navbar.scss */"./resources/sass/Shared/navbar.scss");
__webpack_require__(/*! G:\Pirates\Pirates-Website\resources\sass\Shared\shared.scss */"./resources/sass/Shared/shared.scss");
__webpack_require__(/*! G:\Pirates\Pirates-Website\resources\sass\User\about.scss */"./resources/sass/User/about.scss");
__webpack_require__(/*! G:\Pirates\Pirates-Website\resources\sass\User\committees.scss */"./resources/sass/User/committees.scss");
__webpack_require__(/*! G:\Pirates\Pirates-Website\resources\sass\User\contact.scss */"./resources/sass/User/contact.scss");
__webpack_require__(/*! G:\Pirates\Pirates-Website\resources\sass\User\events.scss */"./resources/sass/User/events.scss");
__webpack_require__(/*! G:\Pirates\Pirates-Website\resources\sass\User\home_page.scss */"./resources/sass/User/home_page.scss");
__webpack_require__(/*! G:\Pirates\Pirates-Website\resources\sass\User\profile.scss */"./resources/sass/User/profile.scss");
module.exports = __webpack_require__(/*! G:\Pirates\Pirates-Website\resources\sass\User\sign.scss */"./resources/sass/User/sign.scss");


/***/ })

/******/ });