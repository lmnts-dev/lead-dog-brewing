!function(e){var t={};function r(o){if(t[o])return t[o].exports;var n=t[o]={i:o,l:!1,exports:{}};return e[o].call(n.exports,n,n.exports,r),n.l=!0,n.exports}r.m=e,r.c=t,r.d=function(e,t,o){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(r.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)r.d(o,n,function(t){return e[t]}.bind(null,n));return o},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=7)}({0:function(e,t,r){"use strict";t.a=function(e){e("#ppw_subscribe_form").submit(function(t){t.preventDefault();const r=e("#ppw_email_subscribe").val().trim();/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(r)?(e("#ppw_subscribe_button").val("Saving..."),function(e,t,r){var o={action:"ppw_free_subscribe_request",settings:t,security_check:e("#ppw_subscribe_form_nonce").val()};!function(e,t,r){let o=!1;window.ppw_general_data?o=ppw_general_data.ajax_url:window.ppw_entire_site_data&&(o=ppw_entire_site_data.ajax_url),o&&e.ajax({url:o,type:"POST",data:t,timeout:5e3,success:function(e){r(e,null)},error:function(e){r(null,e)}})}(e,o,r)}(e,{ppw_email:r},function(t,r){t?(e("#ppw_subscribe_form").hide(),e("#ppw_subscribe_form_success").show()):r&&(400===r.status?(e(".ppw_subscribe_error").text(r.responseJSON.message),e(".ppw_subscribe_error").show("slow")):(e(".ppw_subscribe_error").text("Oops! Something went wrong. Please reload the page and try again."),e(".ppw_subscribe_error").show("slow"))),e("#ppw_subscribe_button").val("Get Lucky")})):(e(".ppw_subscribe_error").show("slow"),e("#ppw_email_subscribe").focus(),e("#ppw_subscribe_button").val("Get Lucky"))})}},7:function(e,t,r){"use strict";r.r(t);var o=r(0);!function(e){e(function(){e(".ppwp_select2").select2({width:"100%"}),Object(o.a)(e),e("#wpp_shortcode_form").submit(function(t){t.preventDefault(),function(t,r){var o={action:"ppw_free_update_shortcode_settings",settings:t,security_check:ppw_shortcode_data.nonce};e("#submit").prop("disabled",!0),function(t,r){e.ajax({url:ppw_shortcode_data.ajax_url,type:"POST",data:t,timeout:5e3,success:function(e){r(e,null)},error:function(e){r(null,e)}})}(o,r)}({wpp_use_shortcode_page_builder:e("#wpp_use_shortcode_page_builder").prop("checked")},function(t,r){t&&(toastr.success("Great! Your settings have been updated successfully.","PPWP Lite"),location.reload(!0)),r&&(400===r.status?toastr.error(r.responseJSON.message,"PPWP Lite"):toastr.error("Oops! Something went wrong. Please try again.","PPWP Lite"),console.log("Data error",r),e("#submit").prop("disabled",!1))})})})}(jQuery)}});