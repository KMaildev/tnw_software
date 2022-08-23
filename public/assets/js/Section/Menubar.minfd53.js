/*!
 * Remark Material (http://getbootstrapadmin.com/remark)
 * Copyright 2017 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */

!function(global,factory){if("function"==typeof define&&define.amd)define("/Section/Menubar",["exports","jquery","Component"],factory);else if("undefined"!=typeof exports)factory(exports,require("jquery"),require("Component"));else{var mod={exports:{}};factory(mod.exports,global.jQuery,global.Component),global.SectionMenubar=mod.exports}}(this,function(exports,_jquery,_Component2){"use strict";Object.defineProperty(exports,"__esModule",{value:!0});var _jquery2=babelHelpers.interopRequireDefault(_jquery),_Component3=babelHelpers.interopRequireDefault(_Component2),$BODY=(0,_jquery2.default)("body"),$HTML=(0,_jquery2.default)("html"),Scrollable=function(){function Scrollable($el){babelHelpers.classCallCheck(this,Scrollable),this.$el=$el,this.native=!1,this.api=null}return babelHelpers.createClass(Scrollable,[{key:"init",value:function(){$BODY.is(".site-menubar-native")?this.native=!0:this.api||(this.api=this.$el.asScrollable({namespace:"scrollable",skin:"scrollable-inverse",direction:"vertical",contentSelector:">",containerSelector:">"}).data("asScrollable"))}},{key:"destroy",value:function(){this.api&&(this.api.destroy(),this.api=null)}},{key:"update",value:function(){this.api&&this.api.update()}},{key:"enable",value:function(){this.native||(this.api||this.init(),this.api&&this.api.enable())}},{key:"disable",value:function(){this.api&&this.api.disable()}}]),Scrollable}(),_class=function(_Component){function _class(){var _ref;babelHelpers.classCallCheck(this,_class);for(var _len=arguments.length,args=Array(_len),_key=0;_key<_len;_key++)args[_key]=arguments[_key];var _this=babelHelpers.possibleConstructorReturn(this,(_ref=_class.__proto__||Object.getPrototypeOf(_class)).call.apply(_ref,[this].concat(args)));return _this.$menuBody=_this.$el.children(".site-menubar-body"),_this.$menu=_this.$el.find("[data-plugin=menu]"),_this.type="hide",_this}return babelHelpers.inherits(_class,_Component),babelHelpers.createClass(_class,[{key:"initialize",value:function(){this.$menuBody.length>0?(this.initialized=!0,this.scrollable=new Scrollable(this.$menuBody),$HTML.removeClass("css-menubar").addClass("js-menubar"),this.change(this.type)):this.initialized=!1}},{key:"getMenuApi",value:function(){return this.$menu.data("menuApi")}},{key:"update",value:function(){this.scrollable.update()}},{key:"change",value:function(type){this.initialized&&(this.reset(),this[type]())}},{key:"animate",value:function(doing){var _this2=this,callback=arguments.length>1&&void 0!==arguments[1]?arguments[1]:function(){};$BODY.addClass("site-menubar-changing"),doing.call(this),this.$el.trigger("changing.site.menubar");var menuApi=this.getMenuApi();menuApi&&menuApi.refresh(),setTimeout(function(){callback.call(_this2),$BODY.removeClass("site-menubar-changing"),_this2.update(),_this2.$el.trigger("changed.site.menubar")},500)}},{key:"reset",value:function(){$BODY.removeClass("site-menubar-hide site-menubar-open")}},{key:"open",value:function(){this.animate(function(){$BODY.addClass("site-menubar-open"),$HTML.addClass("disable-scrolling")},function(){this.scrollable.init()}),this.type="open"}},{key:"hide",value:function(){this.animate(function(){$BODY.addClass("site-menubar-hide"),$HTML.removeClass("disable-scrolling")},function(){this.scrollable.destroy()}),this.type="hide"}}]),_class}(_Component3.default);exports.default=_class});