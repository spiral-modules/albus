!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e(require("jquery"),require("materialize-css")):"function"==typeof define&&define.amd?define("spiral-vault",[,],e):"object"==typeof exports?exports["spiral-vault"]=e(require("jquery"),require("materialize-css")):t["spiral-vault"]=e(t.jQuery,t[void 0])}(this,function(t,e){return function(t){function e(o){if(n[o])return n[o].exports;var r=n[o]={i:o,l:!1,exports:{}};return t[o].call(r.exports,r,r.exports,e),r.l=!0,r.exports}var n={};return e.m=t,e.c=n,e.i=function(t){return t},e.d=function(t,n,o){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:o})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="/",e(e.s=10)}([function(t,e){$(document).ready(function(){$(".dropdown-button").dropdown(),$(".collapsible").collapsible({accordion:!1}),$("ul.tabs").tabs(),$(".item-select").material_select(),$(".button-collapse").sideNav({menuWidth:300,edge:"left"}),$(".button-collapse").on("click",function(){$(this).toggleClass("active")}),function(t){t.length&&(t.on("click",function(t){if(window.location.hash!==t.currentTarget.getAttribute("href")){var e=window.location.href;e.indexOf("#")&&(e=e.substr(0,e.indexOf("#"))),window.location.href=e+t.currentTarget.getAttribute("href")}}),window.onhashchange=function(e){var n=e.newURL.substr(e.newURL.indexOf("#")+1,e.newURL.length),o=document.body.scrollTop;t.parent().find('a[href$="'+n+'"]')&&(t.parent().tabs("select_tab",n),window.scrollTo(0,o))})}($(".tabs a")),$(document).on("click touchstart",function(t){$(t.target).closest(".drag-target").length&&$(".button-collapse").toggleClass("active")}),$(document).on("click",".js-vault-confirm",function(t){var e=$(t.target).hasClass("js-vault-confirm")?$(t.target).data("confirm"):$(t.target).parent(".js-vault-confirm").data("confirm");window.confirm(e)||(t.preventDefault(),t.stopPropagation())})})},function(e,n){e.exports=t},function(t,n){t.exports=e},,function(t,e,n){n(1),n(2),n(0),t.exports="Vault Global Modules Without Styles. This module has no exports. It populates global environment."},,,,,,function(t,e,n){t.exports=n(4)}])});
//# sourceMappingURL=vault-no-styles.js.map