!function(t){var e={};function o(n){if(e[n])return e[n].exports;var r=e[n]={i:n,l:!1,exports:{}};return t[n].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=t,o.c=e,o.d=function(t,e,n){o.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},o.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)o.d(n,r,function(e){return t[e]}.bind(null,r));return n},o.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return o.d(e,"a",e),e},o.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},o.p="",o(o.s=0)}([function(t,e){window.ppwpRowAction=function(t){return{handleOnClickRowAction:function(e){const o=t(`#ppw-protect-post_${e}`);if(!o)return;const{plugin_name:n}=ppw_row_action_data,r=o.attr("data-ppw-status");if(void 0===r)return;const s=o.text();if("Unprotect"===s&&"0"===r&&!confirm("All passwords will be removed if you unprotect this page. Do you want to proceed?"))return!1;o.css("pointer-events","none"),o.attr("title"),o.text(s+"ing..."),function(e,o,n){!function(e,o){const{ajax_url:n,nonce:r}=ppw_row_action_data;t.ajax({url:n,type:"POST",data:e,timeout:5e3,headers:{"X-WP-Nonce":r},success:function(t){o(t,null)},error:function(t){o(null,t)}})}({postId:e,status:r,action:"ppw_update_post_status",nonce:ppw_row_action_data.nonce},n)}(e,0,function(r,a){if(o.css("pointer-events","auto"),a)return o.text(s),void(400===a.status?toastr.error(a.responseJSON.message,n):toastr.error("Oops! Something went wrong. Please reload the page and try again.",n));const{server_status:c,message:u}=r;!function(e,o,n){const r=`#ppw-badge-protection_${n}`;e.attr("data-ppw-status",o);const s={status:1,label:"Protect"},a={status:0,label:"Unprotect"};s.status===o?(e.text(s.label),function(e,o,n){t(o).removeClass("ppw_protected_color"),t(o).addClass("ppw_unprotected_color"),t(o).html('<i class="dashicons dashicons-unlock"></i> unprotected')}(0,r)):(e.text(a.label),function(e,o,n){t(o).removeClass("ppw_unprotected_color"),t(o).addClass("ppw_protected_color"),t(o).html('<i class="dashicons dashicons-lock"></i> protected')}(0,r))}(o,c,e),toastr.success(u,n)})}}}(jQuery)}]);