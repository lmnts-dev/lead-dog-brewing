!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=273)}({17:function(e,t){e.exports=window.jQuery},273:function(e,t,n){"use strict";n.r(t);var r=n(17),o=n.n(r),i=n(95),a=n.n(i);const s=yoastReindexLinksData.data;let l=!1;class c{constructor(e){this.element=o()("#wpseo_count_index_links"),this.progressbarTarget=o()("#wpseo_index_links_progressbar").progressbar({value:0}),this.total=parseInt(e,10),this.totalProcessed=0}update(e){this.totalProcessed+=e;const t=this.totalProcessed*(100/this.total);this.progressbarTarget.progressbar("value",Math.round(t)),this.element.html(this.totalProcessed)}complete(){this.progressbarTarget.progressbar("value",100)}}function u(){l=!0,a()(s.l10n.calculationCompleted),o()("#reindexLinks").html(s.message.indexingCompleted),tb_remove()}function d(){o()("#general-tab").trigger("click"),!1===l&&o()("#openLinkIndexing").trigger("click")}o()((function(){let e=!1;o()(".yoast-js-calculate-index-links--all ").on("click",(function(){!1===e&&(function(){a()(s.l10n.calculationInProgress);const e=[];e.push(new Promise(e=>{!function e(t,n){o.a.ajax({type:"GET",url:s.restApi.root+s.restApi.endpoint,beforeSend:e=>{e.setRequestHeader("X-WP-Nonce",s.restApi.nonce)},success:r=>{const o=parseInt(r,10);if(0!==o)return t.update(o),void e(t,n);t.complete(),n()}})}(new c(s.amount),e)})),Promise.all(e).then(u)}(),e=!0)})),o()("#noticeRunLinkIndex").on("click",d),-1!==window.location.href.indexOf("&reIndexLinks=1")&&o()(d)}))},95:function(e,t){var n,r,o="",i=function(e){e=e||"polite";var t=document.createElement("div");return t.id="a11y-speak-"+e,t.className="a11y-speak-region",t.setAttribute("style","clip: rect(1px, 1px, 1px, 1px); position: absolute; height: 1px; width: 1px; overflow: hidden; word-wrap: normal;"),t.setAttribute("aria-live",e),t.setAttribute("aria-relevant","additions text"),t.setAttribute("aria-atomic","true"),document.querySelector("body").appendChild(t),t};!function(e){if("complete"===document.readyState||"loading"!==document.readyState&&!document.documentElement.doScroll)return e();document.addEventListener("DOMContentLoaded",e)}((function(){n=document.getElementById("a11y-speak-polite"),r=document.getElementById("a11y-speak-assertive"),null===n&&(n=i("polite")),null===r&&(r=i("assertive"))})),e.exports=function(e,t){!function(){for(var e=document.querySelectorAll(".a11y-speak-region"),t=0;t<e.length;t++)e[t].textContent=""}(),e=e.replace(/<[^<>]+>/g," "),o===e&&(e+=" "),o=e,r&&"assertive"===t?r.textContent=e:n&&(n.textContent=e)}}});