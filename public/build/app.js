(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$":
/*!****************************************************************************************************************!*\
  !*** ./assets/controllers/ sync ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \.[jt]sx?$ ***!
  \****************************************************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./hello_controller.js": "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$";

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json":
/*!************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/dist/webpack/loader.js!./assets/controllers.json ***!
  \************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  'symfony--ux-swup--swup': Promise.resolve(/*! import() eager */).then(__webpack_require__.bind(__webpack_require__, /*! @symfony/ux-swup/dist/controller.js */ "./node_modules/@symfony/ux-swup/dist/controller.js")),
});

/***/ }),

/***/ "./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js":
/*!******************************************************************************************************************!*\
  !*** ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js!./assets/controllers/hello_controller.js ***!
  \******************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }













function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }


/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
var _default = /*#__PURE__*/function (_Controller) {
  _inherits(_default, _Controller);
  var _super = _createSuper(_default);
  function _default() {
    _classCallCheck(this, _default);
    return _super.apply(this, arguments);
  }
  _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
  }]);
  return _default;
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_13__.Controller);


/***/ }),

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _bootstrap_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./bootstrap */ "./assets/bootstrap.js");
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./styles/app.scss */ "./assets/styles/app.scss");
/* harmony import */ var bootstrap_icons_font_bootstrap_icons_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! bootstrap-icons/font/bootstrap-icons.css */ "./node_modules/bootstrap-icons/font/bootstrap-icons.css");
/* harmony import */ var _styles_admin_scss__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./styles/admin.scss */ "./assets/styles/admin.scss");
/* harmony import */ var _js_main__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./js/main */ "./assets/js/main.js");
/* harmony import */ var _js_main__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_js_main__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _js_counter_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./js/counter.js */ "./assets/js/counter.js");
/* harmony import */ var _js_dashboard_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./js/dashboard.js */ "./assets/js/dashboard.js");
/* harmony import */ var _js_dashboard_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_js_dashboard_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _js_accordeon_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./js/accordeon.js */ "./assets/js/accordeon.js");
/* harmony import */ var _js_accordeon_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_js_accordeon_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var _js_darkMode_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./js/darkMode.js */ "./assets/js/darkMode.js");
/* harmony import */ var _js_darkMode_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_js_darkMode_js__WEBPACK_IMPORTED_MODULE_8__);


/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)




// start the Stimulus application







/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "app": () => (/* binding */ app)
/* harmony export */ });
/* harmony import */ var _symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @symfony/stimulus-bridge */ "./node_modules/@symfony/stimulus-bridge/dist/index.js");


// Registers Stimulus controllers from controllers.json and in the controllers/ directory
var app = (0,_symfony_stimulus_bridge__WEBPACK_IMPORTED_MODULE_0__.startStimulusApp)(__webpack_require__("./assets/controllers sync recursive ./node_modules/@symfony/stimulus-bridge/lazy-controller-loader.js! \\.[jt]sx?$"));

// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

/***/ }),

/***/ "./assets/js/accordeon.js":
/*!********************************!*\
  !*** ./assets/js/accordeon.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
// Sélectionner tous les éléments de titre d'accordéon
var accordionTitles = document.querySelectorAll('.accordion-title');

// Parcourir chaque titre d'accordéon et ajouter un écouteur d'événement au clic
accordionTitles.forEach(function (title) {
  title.addEventListener('click', function () {
    // Sélectionner l'élément de contenu correspondant à ce titre
    var content = this.nextElementSibling;

    // Vérifier si l'élément de contenu est déjà affiché ou non
    var isContentVisible = content.style.display === 'block';

    // Afficher ou masquer l'élément de contenu en ajoutant ou en supprimant une classe active
    if (isContentVisible) {
      content.style.display = 'none';
      this.classList.remove('active-title');
    } else {
      content.style.display = 'block';
      this.classList.add('active-title');
    }
  });
});

/***/ }),

/***/ "./assets/js/counter.js":
/*!******************************!*\
  !*** ./assets/js/counter.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var waypoints_lib_jquery_waypoints__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! waypoints/lib/jquery.waypoints */ "./node_modules/waypoints/lib/jquery.waypoints.js");
/* harmony import */ var waypoints_lib_jquery_waypoints__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(waypoints_lib_jquery_waypoints__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var jquery_counterup__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! jquery.counterup */ "./node_modules/jquery.counterup/jquery.counterup.js");
/* harmony import */ var jquery_counterup__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(jquery_counterup__WEBPACK_IMPORTED_MODULE_2__);



jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).ready(function () {
  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.counter').counterUp({
    delay: 10,
    time: 1000
  });
});

/***/ }),

/***/ "./assets/js/darkMode.js":
/*!*******************************!*\
  !*** ./assets/js/darkMode.js ***!
  \*******************************/
/***/ (() => {

(function () {
  // Switch Btn
  var switchBox = document.createElement("div");
  switchBox.className = "switch-box";
  var label = document.createElement("label");
  label.id = "switch";
  label.className = "switch";
  var input = document.createElement("input");
  input.type = "checkbox";
  input.addEventListener("change", toggleTheme);
  input.id = "slider";
  var span = document.createElement("span");
  span.className = "slider round";
  label.appendChild(input);
  label.appendChild(span);
  switchBox.appendChild(label);
  document.body.appendChild(switchBox);
})();

// function to set a given theme/color-scheme
function setTheme(themeName) {
  localStorage.setItem("jovie_theme", themeName);
  document.documentElement.className = themeName;
}
// function to toggle between light and dark theme
function toggleTheme() {
  if (localStorage.getItem("jovie_theme") === "theme-dark") {
    setTheme("theme-light");
  } else {
    setTheme("theme-dark");
  }
}

/***/ }),

/***/ "./assets/js/dashboard.js":
/*!********************************!*\
  !*** ./assets/js/dashboard.js ***!
  \********************************/
/***/ (() => {

var toggler = document.querySelector(".btn-dashboard");
if (toggler) {
  toggler.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("collapsed");
  });
}

/***/ }),

/***/ "./assets/js/main.js":
/*!***************************!*\
  !*** ./assets/js/main.js ***!
  \***************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var toggle = document.querySelector(".toggle");
  var items = document.querySelectorAll(".item");
  toggle.addEventListener("click", function () {
    for (var i = 0; i < items.length; i++) {
      if (items[i].classList.contains("active")) {
        items[i].classList.remove("active");
      } else {
        items[i].classList.add("active");
      }
    }
  });
});

/***/ }),

/***/ "./assets/styles/admin.scss":
/*!**********************************!*\
  !*** ./assets/styles/admin.scss ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/styles/app.scss":
/*!********************************!*\
  !*** ./assets/styles/app.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_symfony_stimulus-bridge_dist_index_js-node_modules_symfony_ux-swup_dist_-e5738a"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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O0VBQ3JELElBQUlpQyxNQUFNLEdBQUdyQyxRQUFRLENBQUNvQyxhQUFhLENBQUMsU0FBUyxDQUFDO0VBQzlDLElBQUlFLEtBQUssR0FBR3RDLFFBQVEsQ0FBQ0MsZ0JBQWdCLENBQUMsT0FBTyxDQUFDO0VBRTlDb0MsTUFBTSxDQUFDakMsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFlBQVc7SUFDeEMsS0FBSyxJQUFJbUMsQ0FBQyxHQUFHLENBQUMsRUFBRUEsQ0FBQyxHQUFHRCxLQUFLLENBQUNFLE1BQU0sRUFBRUQsQ0FBQyxFQUFFLEVBQUU7TUFDbkMsSUFBSUQsS0FBSyxDQUFDQyxDQUFDLENBQUMsQ0FBQzdCLFNBQVMsQ0FBQytCLFFBQVEsQ0FBQyxRQUFRLENBQUMsRUFBRTtRQUN2Q0gsS0FBSyxDQUFDQyxDQUFDLENBQUMsQ0FBQzdCLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLFFBQVEsQ0FBQztNQUN2QyxDQUFDLE1BQU07UUFDSDJCLEtBQUssQ0FBQ0MsQ0FBQyxDQUFDLENBQUM3QixTQUFTLENBQUNFLEdBQUcsQ0FBQyxRQUFRLENBQUM7TUFDcEM7SUFDSjtFQUNKLENBQUMsQ0FBQztBQUNOLENBQUMsQ0FBQzs7Ozs7Ozs7Ozs7O0FDYkY7Ozs7Ozs7Ozs7Ozs7QUNBQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8gXFwuW2p0XXN4Iiwid2VicGFjazovLy8uL2Fzc2V0cy9jb250cm9sbGVycy5qc29uIiwid2VicGFjazovLy8uL2Fzc2V0cy9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Jvb3RzdHJhcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYWNjb3JkZW9uLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9jb3VudGVyLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9kYXJrTW9kZS5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvZGFzaGJvYXJkLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9tYWluLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYWRtaW4uc2Nzcz9lMjU0Iiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYXBwLnNjc3M/OGY1OSJdLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgbWFwID0ge1xuXHRcIi4vaGVsbG9fY29udHJvbGxlci5qc1wiOiBcIi4vbm9kZV9tb2R1bGVzL0BzeW1mb255L3N0aW11bHVzLWJyaWRnZS9sYXp5LWNvbnRyb2xsZXItbG9hZGVyLmpzIS4vYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanNcIlxufTtcblxuXG5mdW5jdGlvbiB3ZWJwYWNrQ29udGV4dChyZXEpIHtcblx0dmFyIGlkID0gd2VicGFja0NvbnRleHRSZXNvbHZlKHJlcSk7XG5cdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKGlkKTtcbn1cbmZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0UmVzb2x2ZShyZXEpIHtcblx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhtYXAsIHJlcSkpIHtcblx0XHR2YXIgZSA9IG5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIgKyByZXEgKyBcIidcIik7XG5cdFx0ZS5jb2RlID0gJ01PRFVMRV9OT1RfRk9VTkQnO1xuXHRcdHRocm93IGU7XG5cdH1cblx0cmV0dXJuIG1hcFtyZXFdO1xufVxud2VicGFja0NvbnRleHQua2V5cyA9IGZ1bmN0aW9uIHdlYnBhY2tDb250ZXh0S2V5cygpIHtcblx0cmV0dXJuIE9iamVjdC5rZXlzKG1hcCk7XG59O1xud2VicGFja0NvbnRleHQucmVzb2x2ZSA9IHdlYnBhY2tDb250ZXh0UmVzb2x2ZTtcbm1vZHVsZS5leHBvcnRzID0gd2VicGFja0NvbnRleHQ7XG53ZWJwYWNrQ29udGV4dC5pZCA9IFwiLi9hc3NldHMvY29udHJvbGxlcnMgc3luYyByZWN1cnNpdmUgLi9ub2RlX21vZHVsZXMvQHN5bWZvbnkvc3RpbXVsdXMtYnJpZGdlL2xhenktY29udHJvbGxlci1sb2FkZXIuanMhIFxcXFwuW2p0XXN4PyRcIjsiLCJleHBvcnQgZGVmYXVsdCB7XG4gICdzeW1mb255LS11eC1zd3VwLS1zd3VwJzogaW1wb3J0KC8qIHdlYnBhY2tNb2RlOiBcImVhZ2VyXCIgKi8gJ0BzeW1mb255L3V4LXN3dXAvZGlzdC9jb250cm9sbGVyLmpzJyksXG59OyIsImltcG9ydCB7IENvbnRyb2xsZXIgfSBmcm9tICdAaG90d2lyZWQvc3RpbXVsdXMnO1xuXG4vKlxuICogVGhpcyBpcyBhbiBleGFtcGxlIFN0aW11bHVzIGNvbnRyb2xsZXIhXG4gKlxuICogQW55IGVsZW1lbnQgd2l0aCBhIGRhdGEtY29udHJvbGxlcj1cImhlbGxvXCIgYXR0cmlidXRlIHdpbGwgY2F1c2VcbiAqIHRoaXMgY29udHJvbGxlciB0byBiZSBleGVjdXRlZC4gVGhlIG5hbWUgXCJoZWxsb1wiIGNvbWVzIGZyb20gdGhlIGZpbGVuYW1lOlxuICogaGVsbG9fY29udHJvbGxlci5qcyAtPiBcImhlbGxvXCJcbiAqXG4gKiBEZWxldGUgdGhpcyBmaWxlIG9yIGFkYXB0IGl0IGZvciB5b3VyIHVzZSFcbiAqL1xuZXhwb3J0IGRlZmF1bHQgY2xhc3MgZXh0ZW5kcyBDb250cm9sbGVyIHtcbiAgICBjb25uZWN0KCkge1xuICAgICAgICB0aGlzLmVsZW1lbnQudGV4dENvbnRlbnQgPSAnSGVsbG8gU3RpbXVsdXMhIEVkaXQgbWUgaW4gYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanMnO1xuICAgIH1cbn1cbiIsImltcG9ydCBcIi4vYm9vdHN0cmFwLmpzXCI7XG5cbi8qXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXG4gKlxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cbiAqL1xuXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXG5pbXBvcnQgXCIuL3N0eWxlcy9hcHAuc2Nzc1wiO1xuaW1wb3J0IFwiYm9vdHN0cmFwLWljb25zL2ZvbnQvYm9vdHN0cmFwLWljb25zLmNzc1wiO1xuaW1wb3J0IFwiLi9zdHlsZXMvYWRtaW4uc2Nzc1wiO1xuXG4vLyBzdGFydCB0aGUgU3RpbXVsdXMgYXBwbGljYXRpb25cbmltcG9ydCBcIi4vYm9vdHN0cmFwXCI7XG5pbXBvcnQgXCIuL2pzL21haW5cIjtcbmltcG9ydCBcIi4vanMvY291bnRlci5qc1wiO1xuaW1wb3J0IFwiLi9qcy9kYXNoYm9hcmQuanNcIjtcbmltcG9ydCBcIi4vanMvYWNjb3JkZW9uLmpzXCI7XG5pbXBvcnQgXCIuL2pzL2RhcmtNb2RlLmpzXCI7IiwiaW1wb3J0IHsgc3RhcnRTdGltdWx1c0FwcCB9IGZyb20gXCJAc3ltZm9ueS9zdGltdWx1cy1icmlkZ2VcIjtcblxuLy8gUmVnaXN0ZXJzIFN0aW11bHVzIGNvbnRyb2xsZXJzIGZyb20gY29udHJvbGxlcnMuanNvbiBhbmQgaW4gdGhlIGNvbnRyb2xsZXJzLyBkaXJlY3RvcnlcbmV4cG9ydCBjb25zdCBhcHAgPSBzdGFydFN0aW11bHVzQXBwKFxuICAgIHJlcXVpcmUuY29udGV4dChcbiAgICAgICAgXCJAc3ltZm9ueS9zdGltdWx1cy1icmlkZ2UvbGF6eS1jb250cm9sbGVyLWxvYWRlciEuL2NvbnRyb2xsZXJzXCIsXG4gICAgICAgIHRydWUsXG4gICAgICAgIC9cXC5banRdc3g/JC9cbiAgICApXG4pO1xuXG4vLyByZWdpc3RlciBhbnkgY3VzdG9tLCAzcmQgcGFydHkgY29udHJvbGxlcnMgaGVyZVxuLy8gYXBwLnJlZ2lzdGVyKCdzb21lX2NvbnRyb2xsZXJfbmFtZScsIFNvbWVJbXBvcnRlZENvbnRyb2xsZXIpO1xuIiwiLy8gU8OpbGVjdGlvbm5lciB0b3VzIGxlcyDDqWzDqW1lbnRzIGRlIHRpdHJlIGQnYWNjb3Jkw6lvblxuY29uc3QgYWNjb3JkaW9uVGl0bGVzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmFjY29yZGlvbi10aXRsZScpO1xuXG4vLyBQYXJjb3VyaXIgY2hhcXVlIHRpdHJlIGQnYWNjb3Jkw6lvbiBldCBham91dGVyIHVuIMOpY291dGV1ciBkJ8OpdsOpbmVtZW50IGF1IGNsaWNcbmFjY29yZGlvblRpdGxlcy5mb3JFYWNoKGZ1bmN0aW9uKHRpdGxlKSB7XG4gICAgdGl0bGUuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcbiAgICAgICAgLy8gU8OpbGVjdGlvbm5lciBsJ8OpbMOpbWVudCBkZSBjb250ZW51IGNvcnJlc3BvbmRhbnQgw6AgY2UgdGl0cmVcbiAgICAgICAgY29uc3QgY29udGVudCA9IHRoaXMubmV4dEVsZW1lbnRTaWJsaW5nO1xuICAgICAgICBcbiAgICAgICAgLy8gVsOpcmlmaWVyIHNpIGwnw6lsw6ltZW50IGRlIGNvbnRlbnUgZXN0IGTDqWrDoCBhZmZpY2jDqSBvdSBub25cbiAgICAgICAgY29uc3QgaXNDb250ZW50VmlzaWJsZSA9IGNvbnRlbnQuc3R5bGUuZGlzcGxheSA9PT0gJ2Jsb2NrJztcblxuICAgICAgICAvLyBBZmZpY2hlciBvdSBtYXNxdWVyIGwnw6lsw6ltZW50IGRlIGNvbnRlbnUgZW4gYWpvdXRhbnQgb3UgZW4gc3VwcHJpbWFudCB1bmUgY2xhc3NlIGFjdGl2ZVxuICAgICAgICBpZiAoaXNDb250ZW50VmlzaWJsZSkge1xuICAgICAgICAgICAgY29udGVudC5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xuICAgICAgICAgICAgdGhpcy5jbGFzc0xpc3QucmVtb3ZlKCdhY3RpdmUtdGl0bGUnKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIGNvbnRlbnQuc3R5bGUuZGlzcGxheSA9ICdibG9jayc7XG4gICAgICAgICAgICB0aGlzLmNsYXNzTGlzdC5hZGQoJ2FjdGl2ZS10aXRsZScpO1xuICAgICAgICB9XG4gICAgfSk7XG59KTtcblxuXG4iLCJpbXBvcnQgJCBmcm9tICdqcXVlcnknO1xuaW1wb3J0ICd3YXlwb2ludHMvbGliL2pxdWVyeS53YXlwb2ludHMnO1xuaW1wb3J0ICdqcXVlcnkuY291bnRlcnVwJztcblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuICAgICQoJy5jb3VudGVyJykuY291bnRlclVwKHtcbiAgICAgICAgZGVsYXk6IDEwLFxuICAgICAgICB0aW1lOiAxMDAwLFxuICAgIH0pO1xufSk7IiwiKGZ1bmN0aW9uICgpIHtcbiAgICAvLyBTd2l0Y2ggQnRuXG4gICAgdmFyIHN3aXRjaEJveCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJkaXZcIik7XG4gICAgc3dpdGNoQm94LmNsYXNzTmFtZSA9IFwic3dpdGNoLWJveFwiO1xuXG4gICAgdmFyIGxhYmVsID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcImxhYmVsXCIpO1xuICAgIGxhYmVsLmlkID0gXCJzd2l0Y2hcIjtcbiAgICBsYWJlbC5jbGFzc05hbWUgPSBcInN3aXRjaFwiO1xuXG4gICAgdmFyIGlucHV0ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcImlucHV0XCIpO1xuICAgIGlucHV0LnR5cGUgPSBcImNoZWNrYm94XCI7XG4gICAgaW5wdXQuYWRkRXZlbnRMaXN0ZW5lcihcImNoYW5nZVwiLCB0b2dnbGVUaGVtZSk7XG4gICAgaW5wdXQuaWQgPSBcInNsaWRlclwiO1xuXG4gICAgdmFyIHNwYW4gPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KFwic3BhblwiKTtcbiAgICBzcGFuLmNsYXNzTmFtZSA9IFwic2xpZGVyIHJvdW5kXCI7XG5cbiAgICBsYWJlbC5hcHBlbmRDaGlsZChpbnB1dCk7XG4gICAgbGFiZWwuYXBwZW5kQ2hpbGQoc3Bhbik7XG5cbiAgICBzd2l0Y2hCb3guYXBwZW5kQ2hpbGQobGFiZWwpO1xuXG4gICAgZG9jdW1lbnQuYm9keS5hcHBlbmRDaGlsZChzd2l0Y2hCb3gpO1xufSkoKTtcblxuLy8gZnVuY3Rpb24gdG8gc2V0IGEgZ2l2ZW4gdGhlbWUvY29sb3Itc2NoZW1lXG5mdW5jdGlvbiBzZXRUaGVtZSh0aGVtZU5hbWUpIHtcbiAgICBsb2NhbFN0b3JhZ2Uuc2V0SXRlbShcImpvdmllX3RoZW1lXCIsIHRoZW1lTmFtZSk7XG4gICAgZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LmNsYXNzTmFtZSA9IHRoZW1lTmFtZTtcbn1cbi8vIGZ1bmN0aW9uIHRvIHRvZ2dsZSBiZXR3ZWVuIGxpZ2h0IGFuZCBkYXJrIHRoZW1lXG5mdW5jdGlvbiB0b2dnbGVUaGVtZSgpIHtcbiAgICBpZiAobG9jYWxTdG9yYWdlLmdldEl0ZW0oXCJqb3ZpZV90aGVtZVwiKSA9PT0gXCJ0aGVtZS1kYXJrXCIpIHtcbiAgICAgICAgc2V0VGhlbWUoXCJ0aGVtZS1saWdodFwiKTtcbiAgICB9IGVsc2Uge1xuICAgICAgICBzZXRUaGVtZShcInRoZW1lLWRhcmtcIik7XG4gICAgfVxufVxuIiwiY29uc3QgdG9nZ2xlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuYnRuLWRhc2hib2FyZFwiKTtcblxuaWYgKHRvZ2dsZXIpIHtcbiAgICB0b2dnbGVyLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKSA9PiB7XG4gICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjc2lkZWJhclwiKS5jbGFzc0xpc3QudG9nZ2xlKFwiY29sbGFwc2VkXCIpO1xuICAgIH0pO1xufVxuIiwiZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcIkRPTUNvbnRlbnRMb2FkZWRcIiwgZnVuY3Rpb24oKSB7XG4gICAgdmFyIHRvZ2dsZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIudG9nZ2xlXCIpO1xuICAgIHZhciBpdGVtcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuaXRlbVwiKTtcbiAgICBcbiAgICB0b2dnbGUuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZ1bmN0aW9uKCkge1xuICAgICAgICBmb3IgKGxldCBpID0gMDsgaSA8IGl0ZW1zLmxlbmd0aDsgaSsrKSB7XG4gICAgICAgICAgICBpZiAoaXRlbXNbaV0uY2xhc3NMaXN0LmNvbnRhaW5zKFwiYWN0aXZlXCIpKSB7XG4gICAgICAgICAgICAgICAgaXRlbXNbaV0uY2xhc3NMaXN0LnJlbW92ZShcImFjdGl2ZVwiKTtcbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgaXRlbXNbaV0uY2xhc3NMaXN0LmFkZChcImFjdGl2ZVwiKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH0pO1xufSk7XG5cbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJDb250cm9sbGVyIiwiZWxlbWVudCIsInRleHRDb250ZW50Iiwic3RhcnRTdGltdWx1c0FwcCIsImFwcCIsInJlcXVpcmUiLCJjb250ZXh0IiwiYWNjb3JkaW9uVGl0bGVzIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsInRpdGxlIiwiYWRkRXZlbnRMaXN0ZW5lciIsImNvbnRlbnQiLCJuZXh0RWxlbWVudFNpYmxpbmciLCJpc0NvbnRlbnRWaXNpYmxlIiwic3R5bGUiLCJkaXNwbGF5IiwiY2xhc3NMaXN0IiwicmVtb3ZlIiwiYWRkIiwiJCIsInJlYWR5IiwiY291bnRlclVwIiwiZGVsYXkiLCJ0aW1lIiwic3dpdGNoQm94IiwiY3JlYXRlRWxlbWVudCIsImNsYXNzTmFtZSIsImxhYmVsIiwiaWQiLCJpbnB1dCIsInR5cGUiLCJ0b2dnbGVUaGVtZSIsInNwYW4iLCJhcHBlbmRDaGlsZCIsImJvZHkiLCJzZXRUaGVtZSIsInRoZW1lTmFtZSIsImxvY2FsU3RvcmFnZSIsInNldEl0ZW0iLCJkb2N1bWVudEVsZW1lbnQiLCJnZXRJdGVtIiwidG9nZ2xlciIsInF1ZXJ5U2VsZWN0b3IiLCJ0b2dnbGUiLCJpdGVtcyIsImkiLCJsZW5ndGgiLCJjb250YWlucyJdLCJzb3VyY2VSb290IjoiIn0=