<?php include 'db.php';

if(isset($_REQUEST['logout'])=='1') {

$login_user="UPDATE `users_details` SET `login_user` = '0' WHERE `users_details`.`user_id` = '".$_SESSION['login_username_id']."';";
$conn->query($login_user);

  $_SESSION['login_username_id']="";
    session_destroy();
    header("Location: login.php");
    
}
if (!isset($_SESSION['login_username_id'])) {
    header("Location: login.php");
    exit();
}
if(isset($_REQUEST['delete_product'])){

$delete_product_id=$_GET['delete_product'];

$del_single="DELETE FROM `wishlist` WHERE `product_id`='".$delete_product_id."' ";
$conn->query($del_single);



}
if(isset($_REQUEST['delete_all'])){


$del_all="DELETE FROM `wishlist` ";
$conn->query($del_all);

}










?>
<!doctype html>
<html class="no-js wbboxlt" lang="en" >
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="">
    <link rel="canonical" href="https://storego-demo.myshopify.com/pages/wishlist">
    <link rel="preconnect" href="https:https://cdn.shopify.com" crossorigin><link rel="icon" type="image/png" href="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/Favicon_a8c7c7e1-5312-4697-a323-8607cbd976f4_32x32.png?v=1657006073"><title>
      wishlist
 &ndash; storego-demo</title>

    

    

<meta property="og:site_name" content="storego-demo">
<meta property="og:url" content="https://storego-demo.myshopify.com/pages/wishlist">
<meta property="og:title" content="wishlist">
<meta property="og:type" content="website">
<meta property="og:description" content="Storego Shopify Description"><meta property="og:image" content="http:https://cdn.shopify.com/s/files/1/0257/0492/3199/files/offerbanner.jpg?v=1646043908">
  <meta property="og:image:secure_url" content="https:https://cdn.shopify.com/s/files/1/0257/0492/3199/files/offerbanner.jpg?v=1646043908">
  <meta property="og:image:width" content="1060">
  <meta property="og:image:height" content="600"><meta name="twitter:site" content="@#"><meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="wishlist">
<meta name="twitter:description" content="Storego Shopify Description">


    <script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/global.js?v=172000988338349312601664959209" defer="defer"></script>
    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/25704923199/digital_wallets/dialog">
<link rel="alternate" hreflang="x-default" href="https://storego-demo.myshopify.com/pages/wishlist">
<link rel="alternate" hreflang="en-IN" href="https://storego-demo.myshopify.com/pages/wishlist">
<link rel="alternate" hreflang="ar-IN" href="https://storego-demo.myshopify.com/ar/pages/wishlist">
<link rel="alternate" hreflang="en-US" href="https://storego-demo.myshopify.com/en-us/pages/wishlist">
<link rel="alternate" hreflang="ar-US" href="https://storego-demo.myshopify.com/ar-us/pages/wishlist">
<script>
  (function() {
    var scripts = ["https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.latest.en.8645d252f07ec25fdbc6.js", "https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-packages~Information~NoAddressLocation~Payment~PostPurchase~Review~Shipping~ShopPay~Sho~cf13f96e.latest.en.04837ae4ff5a8e949953.js", "https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment~ShopPay.latest.en.84ff9c0024faf7f72c14.js", "https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.900911b3d82c82309ebf.js", "https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-ui~app.latest.en.86cd9328cdcd6cd3a58f.js", "https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/vendors~app.latest.en.b4546f9bffad10b3673b.js", "https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-packages~app.latest.en.f5154093d2604596d084.js", "https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.931851b1b02f1bcae42a.js"];
    var styles = ["https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/checkout-web-ui~app.latest.en.9f2a5e9ec696775e2217.css", "https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/vendors~app.latest.en.e788719f193b49c039a3.css", "https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.6b4c79ead7042980b29d.css", "https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information~Payment~ShopPay.latest.en.da9f06164a980bf8e7ea.css", "https:https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.9a0274ab07be120c1902.css"];

    function prefetch(url, as, callback) {
      var link = document.createElement('link');
      if (link.relList.supports('prefetch')) {
        link.rel = 'prefetch';
        link.fetchPriority = 'low';
        link.as = as;
        link.href = url;
        link.onload = link.onerror = callback;
        document.head.appendChild(link);
      } else {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onloadend = callback;
        xhr.send();
      }
    }

    function prefetchAssets() {
      var resources = [].concat(
        scripts.map(function(url) { return [url, 'script']; }),
        styles.map(function(url) { return [url, 'style']; })
      );
      var index = 0;
      (function next() {
        var res = resources[index++];
        if (res) prefetch(res[0], res[1], next);
      })();
    }

    addEventListener('load', prefetchAssets);
   })();
</script>
<script id="shopify-features" type="application/json">{"accessToken":"256cf175c280f432309cfc51c44a3e6d","betas":["rich-media-storefront-analytics"],"domain":"storego-demo.myshopify.com","predictiveSearch":true,"shopId":25704923199,"smart_payment_buttons_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js?v=2","dynamic_checkout_cart_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js?v=2","locale":"en","optimusEnabled":false}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "storego-demo.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"INR","rate":"1.0"};
Shopify.country = "IN";
Shopify.theme = {"name":"Storego-1","id":120853561407,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "cdn.shopify.com";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["\/\/productreviews.shopifycdn.com\/embed\/loader.js?shop=storego-demo.myshopify.com","https:\/\/geolocation-recommendations.shopifyapps.com\/locale_bar\/script.js?shop=storego-demo.myshopify.com"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id="__st">var __st={"a":25704923199,"offset":-14400,"reqid":"71d3ce07-ea41-4ae6-b886-8aaf0ffa2472","pageurl":"storego-demo.myshopify.com\/pages\/wishlist","s":"pages-47442591807","u":"7d6d6c7cb2e4","cid":6404506648639,"p":"page","rtyp":"page","rid":47442591807};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https:https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>
<script integrity="sha256-PxOtY43aY0IIRkJyboCWUgXVuC12GAXQ8LKFAxO8H98=" data-source-attribution="shopify.loadfeatures" defer="defer" src="https://cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-3f13ad638dda6342084642726e80965205d5b82d761805d0f0b2850313bc1fdf.js" crossorigin="anonymous"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="https://cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
<script id="sections-script" data-sections="header" defer="defer" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/compiled_assets/scripts.js?10371"></script>

<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>

    <svg style="display:none">


    <symbol id="wish" viewBox="0 0 96 96" ><path d="M87.598,15.029c-9.373-9.373-24.568-9.373-33.94,0L48,20.686l-5.657-5.656c-9.373-9.373-24.569-9.373-33.941,0  c-9.373,9.373-9.373,24.568,0,33.941l5.657,5.654L48,88.566l33.941-33.941l5.656-5.654C96.971,39.598,96.971,24.402,87.598,15.029z   M70.627,54.627L48,77.254L25.374,54.627L14.061,43.314c-6.249-6.248-6.249-16.379,0-22.629c6.249-6.248,16.379-6.248,22.627,0  L48,32l11.314-11.314c6.248-6.248,16.379-6.248,22.627,0c6.248,6.25,6.248,16.379,0,22.629L70.627,54.627z"/></symbol>

    

  </svg>

    <style data-shopify>
:root {
        --wbbase-font: Rubik;
        --font-size-header: 22;
        --font-size-base: 14;
        
        --gradient-base-accent-1: #d01418;
        --color-base-solid-button-labels: #ffffff;

        --gradient-base-accent-2: #000000;
        --color-wb-hovercolor-button-text: #ffffff;

        --color-wbmaincolors-text: #d01418;
        --color-base-text: 0, 0, 0;
        --color-wbbordercolor: #e4e4e4;
        
        --color-background: 255, 255, 255;
        --gradient-background: #ffffff;

        --payment-terms-background-color: #ffffff;

        --color-wbprodct-background: #ffffff;
      }

      *,
      *::before,
      *::after {
        box-sizing: inherit;
      }
      svg{
        width: 14px;height: 14px;
      }
    </style> 

    <link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/bootstrap.min.css?v=66654331482714394831645685316" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/slick.css?v=98340474046176884051645685352" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/slick-theme.css?v=67893072228317858721645685352" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/font-awesome.min.css?v=140533306961432629691645685336" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/base.css?v=98729424779769166871679391430" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/jquery.fancybox.min.css?v=19278034316635137701664955074" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/wbquickview.css?v=86262734186032633401664959661" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-list-menu.css?v=117300255725393243301648443200" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-predictive-search.css?v=162850720950732977291645685327" media="print" onload="this.media='all'">
      <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,600,700"  rel="stylesheet">
    
    <script>document.documentElement.className = document.documentElement.className.replace('no-js', 'js');</script>
  <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 25704923199,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "page"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script id="evids-setup">
  (function () {let t,e;function n(){t={page_viewed:{},collection_viewed:{},product_viewed:{},product_variant_viewed:{},search_submitted:{},product_added_to_cart:{},checkout_started:{},checkout_completed:{},payment_info_submitted:{},session_started:{}},e={wpm:{},trekkie:{}}}function o(t){return`${t||"sh"}-${function(){const t="xxxx-4xxx-xxxx-xxxxxxxxxxxx";let e="";try{const n=window.crypto,o=new Uint16Array(31);n.getRandomValues(o);let r=0;e=t.replace(/[x]/g,(t=>{const e=o[r]%16;return r++,("x"===t?e:3&e|8).toString(16)})).toUpperCase()}catch(n){e=t.replace(/[x]/g,(t=>{const e=16*Math.random()|0;return("x"===t?e:3&e|8).toString(16)})).toUpperCase()}return`${function(){let t=0,e=0;t=(new Date).getTime()>>>0;try{e=performance.now()>>>0}catch(t){e=0}const n=Math.abs(t+e).toString(16).toLowerCase();return"00000000".substr(0,8-n.length)+n}()}-${e}`}()}`}function r(n,r){if(!t[n]||"trekkie"!==(null==r?void 0:r.analyticsFramework)&&"wpm"!==(null==r?void 0:r.analyticsFramework))return o("shu");const i="string"==typeof(c=r.cacheKey)&&c?c:"default";var c;const a=function(t,n,o){const r=e[n];return void 0===r[t]&&(r[t]={}),void 0===r[t][o]?r[t][o]=0:r[t][o]+=1,r[t][o]}(n,r.analyticsFramework,i);return function(e,n,r){const i=t[e];if(void 0===i[r]){const t=o();i[r]=[t]}else if(void 0===i[r][n]){const t=o();i[r].push(t)}return i[r][n]}(n,a,i)}function i(){window.Shopify=window.Shopify||{},n(),window.Shopify.evids=(t,e)=>r(t,e)}i();})();
</script>
<script id="web-pixels-manager-setup">(function e(e,n,a,t,o,r,i){var s=i||[],l=null!==e;l&&(window.Shopify=window.Shopify||{},window.Shopify.analytics=window.Shopify.analytics||{},window.Shopify.analytics.replayQueue=[],window.Shopify.analytics.publish=function(e,n,a){window.Shopify.analytics.replayQueue.push([e,n,a])});var d=function(){var e="legacy",n="unknown",a=null,t=navigator.userAgent.match(/(Firefox|Chrome)\/(\d+)/i),o=navigator.userAgent.match(/(Edg)\/(\d+)/i),r=navigator.userAgent.match(/(Version)\/(\d+)(.+)(Safari)\/(\d+)/i);r?(n="safari",a=parseInt(r[2],10)):o?(n="edge",a=parseInt(o[2],10)):t&&(n=t[1].toLocaleLowerCase(),a=parseInt(t[2],10));var i={chrome:60,firefox:55,safari:11,edge:80}[n];return void 0!==i&&null!==a&&i<=a&&(e="modern"),e}().substring(0,1),c=t.substring(0,1);if(l)try{self.performance.mark("wpm:start")}catch(e){}var p,u,f,w,h,y,m,g,v=[a,s.indexOf("web_pixels_manager_runtime_asset_prefix")>-1?"/wpm":null,"/",c,r,d,".js"].join("");p={src:v,async:!0,onload:function(){if(e){var a=window.webPixelsManager.init(e);n(a),window.Shopify.analytics.replayQueue.forEach((function(e){a.publishCustomEvent(e[0],e[1],e[2])})),window.Shopify.analytics.replayQueue=[],window.Shopify.analytics.publish=a.publishCustomEvent}},onerror:function(){var n=(e.storefrontBaseUrl?e.storefrontBaseUrl.replace(/\/$/,""):self.location.origin)+"/.well-known/shopify/monorail/unstable/produce_batch",a=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/2.0",payload:{version:o||"latest",page_url:self.location.href,status:"failed",error_msg:v+" has failed to load"},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(n,a))return!0}catch(e){}const t=new XMLHttpRequest;try{return t.open("POST",n,!0),t.setRequestHeader("Content-Type","text/plain"),t.send(a),!0}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1}},u=document.createElement("script"),f=p.src,w=p.async||!0,h=p.onload,y=p.onerror,m=document.head,g=document.body,u.async=w,u.src=f,h&&u.addEventListener("load",h),y&&u.addEventListener("error",y),m?m.appendChild(u):g?g.appendChild(u):console.error("Did not find a head or body element to append the script")})({shopId: 25704923199,storefrontBaseUrl: "https://storego-demo.myshopify.com",cdnBaseUrl: "https:https://cdn.shopify.com",surface: "storefront-renderer",enabledBetaFlags: ["web_pixels_use_shop_domain_monorail_endpoint","web_pixels_shopify_pixel_validation","web_pixels_prefetch_assets","web_pixels_manager_runtime_asset_prefix","web_pixels_async_pixel_refactor"],webPixelsConfigList: [{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0544","apiClientId":"shopify-pixel","type":"APP"},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0544","apiClientId":"shopify-pixel","type":"CUSTOM"}],initData: {"cart":null,"checkout":null,"customer":{"email":"gambologofficial@gmail.com","firstName":"Muhammad Adeel","id":"6404506648639","lastName":"Ur Rehman","ordersCount":0,"phone":null},"productVariants":[]},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed");},"https:https://cdn.shopify.com","browser","0.0.315","84e87a71wff12d2bfp19382293m9873e283",["web_pixels_use_shop_domain_monorail_endpoint","web_pixels_shopify_pixel_validation","web_pixels_prefetch_assets","web_pixels_manager_runtime_asset_prefix","web_pixels_async_pixel_refactor"]);</script>  <script>window['GoogleAnalyticsObject'] = 'ga';
window['ga'] = window['ga'] || function() {
  (window['ga'].q = window['ga'].q || []).push(arguments);
};
window['ga'].l = 1 * new Date();</script>
<script>var _gaUTrackerOptions = {'allowLinker': true};ga('create', 'UA-111713555-5', 'auto', _gaUTrackerOptions);ga('send', 'pageview');
      (function(){
        ga('require', 'linker');
        function addListener(element, type, callback) {
          if (element.addEventListener) {
            element.addEventListener(type, callback);
          }
          else if (element.attachEvent) {
            element.attachEvent('on' + type, callback);
          }
        }
        function decorate(event) {
          event = event || window.event;
          var target = event.target || event.srcElement;
          if (target && (target.action || target.href)) {
            ga(function (tracker) {
              var linkerParam = tracker.get('linkerParam');
              document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
            });
          }
        }
        addListener(window, 'load', function(){
          for (var i=0; i<document.forms.length; i++) {
            if(document.forms[i].action && document.forms[i].action.indexOf('/cart') >= 0) {
              addListener(document.forms[i], 'submit', decorate);
            }
          }
          for (var i=0; i<document.links.length; i++) {
            if(document.links[i].href && document.links[i].href.indexOf('/checkout') >= 0) {
              addListener(document.links[i], 'click', decorate);
            }
          }
        })
      }());
    </script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'INR';
var meta = {"page":{"pageType":"page","customerId":6404506648639,"resourceType":"page","resourceId":47442591807}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
    var customDocumentWrite = function(content) {
      var jquery = null;

      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }

      if (jquery) {
        jquery('body').append(content);
      }
    };

    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }

    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }

    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.onerror = function(e) {
        var scriptFallback = document.createElement('script');
        scriptFallback.type = 'text/javascript';
        scriptFallback.onerror = function(error) {
                var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });

          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful

        } // XHR beacon

        var xhr = new XMLHttpRequest();

        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }

        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 25704923199,
      theme_id: 120853561407,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "https:https://cdn.shopify.com/s/trekkie.storefront.2e81fd74baaaa88c841b5f4e7420a1f3f4417003.min.js"});

        };
        scriptFallback.async = true;
        scriptFallback.src = 'https:https://cdn.shopify.com/s/trekkie.storefront.2e81fd74baaaa88c841b5f4e7420a1f3f4417003.min.js';
        first.parentNode.insertBefore(scriptFallback, first);
      };
      script.async = true;
      script.src = 'https:https://cdn.shopify.com/s/trekkie.storefront.2e81fd74baaaa88c841b5f4e7420a1f3f4417003.min.js';
      first.parentNode.insertBefore(script, first);
    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":25704923199,"isMerchantRequest":null,"themeId":120853561407,"themeCityHash":"6559656358422529293","contentLanguage":"en","currency":"INR"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain"},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"customerId":6404506648639,"source":"trekkie-storefront-renderer"}}
    );

    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;

      window.ShopifyAnalytics.lib = window.trekkie;

  
      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;

      window.ShopifyAnalytics.lib.page(null,{"pageType":"page","customerId":6404506648639,"resourceType":"page","resourceId":47442591807});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        
      }
    });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "https://cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-65cd0ba3fcd81a1df33f2510ec5bcf8c0e0958653b50e3965ec972dd638ee13f.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>
<script class="boomerang">
(function () {
  if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
    return;
  }
  window.BOOMR = window.BOOMR || {};
  window.BOOMR.snippetStart = new Date().getTime();
  window.BOOMR.snippetExecuted = true;
  window.BOOMR.snippetVersion = 12;
  window.BOOMR.application = "storefront-renderer";
  window.BOOMR.themeName = "Storego";
  window.BOOMR.themeVersion = "8.0.0";
  window.BOOMR.shopId = 25704923199;
  window.BOOMR.themeId = 120853561407;
  window.BOOMR.renderRegion = "gcp-us-east1";
  window.BOOMR.url =
    "https:https://cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
  var where = document.currentScript || document.getElementsByTagName("script")[0];
  var parentNode = where.parentNode;
  var promoted = false;
  var LOADER_TIMEOUT = 3000;
  function promote() {
    if (promoted) {
      return;
    }
    var script = document.createElement("script");
    script.id = "boomr-scr-as";
    script.src = window.BOOMR.url;
    script.async = true;
    parentNode.appendChild(script);
    promoted = true;
  }
  function iframeLoader(wasFallback) {
    promoted = true;
    var dom, bootstrap, iframe, iframeStyle;
    var doc = document;
    var win = window;
    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
    bootstrap = function(parent, scriptId) {
      var script = doc.createElement("script");
      script.id = scriptId || "boomr-if-as";
      script.src = window.BOOMR.url;
      BOOMR_lstart = new Date().getTime();
      parent = parent || doc.body;
      parent.appendChild(script);
    };
    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
      window.BOOMR.snippetMethod = "s";
      bootstrap(parentNode, "boomr-async");
      return;
    }
    iframe = document.createElement("IFRAME");
    iframe.src = "about:blank";
    iframe.title = "";
    iframe.role = "presentation";
    iframe.loading = "eager";
    iframeStyle = (iframe.frameElement || iframe).style;
    iframeStyle.width = 0;
    iframeStyle.height = 0;
    iframeStyle.border = 0;
    iframeStyle.display = "none";
    parentNode.appendChild(iframe);
    try {
      win = iframe.contentWindow;
      doc = win.document.open();
    } catch (e) {
      dom = document.domain;
      iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
      win = iframe.contentWindow;
      doc = win.document.open();
    }
    if (dom) {
      doc._boomrl = function() {
        this.domain = dom;
        bootstrap();
      };
      doc.write("<body onload='document._boomrl();'>");
    } else {
      win._boomrl = function() {
        bootstrap();
      };
      if (win.addEventListener) {
        win.addEventListener("load", win._boomrl, false);
      } else if (win.attachEvent) {
        win.attachEvent("onload", win._boomrl);
      }
    }
    doc.close();
  }
  var link = document.createElement("link");
  if (link.relList &&
    typeof link.relList.supports === "function" &&
    link.relList.supports("preload") &&
    ("as" in link)) {
    window.BOOMR.snippetMethod = "p";
    link.href = window.BOOMR.url;
    link.rel = "preload";
    link.as = "script";
    link.addEventListener("load", promote);
    link.addEventListener("error", function() {
      iframeLoader(true);
    });
    setTimeout(function() {
      if (!promoted) {
        iframeLoader(true);
      }
    }, LOADER_TIMEOUT);
    BOOMR_lstart = new Date().getTime();
    parentNode.appendChild(link);
  } else {
    iframeLoader(false);
  }
  function boomerangSaveLoadTime(e) {
    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
  }
  if (window.addEventListener) {
    window.addEventListener("load", boomerangSaveLoadTime, false);
  } else if (window.attachEvent) {
    window.attachEvent("onload", boomerangSaveLoadTime);
  }
  if (document.addEventListener) {
    document.addEventListener("onBoomerangLoaded", function(e) {
      e.detail.BOOMR.init({
        ResourceTiming: {
          enabled: true,
          trackedResourceTypes: ["script", "img", "css"]
        },
      });
      e.detail.BOOMR.t_end = new Date().getTime();
    });
  } else if (document.attachEvent) {
    document.attachEvent("onpropertychange", function(e) {
      if (!e) e=event;
      if (e.propertyName === "onBoomerangLoaded") {
        e.detail.BOOMR.init({
          ResourceTiming: {
            enabled: true,
            trackedResourceTypes: ["script", "img", "css"]
          },
        });
        e.detail.BOOMR.t_end = new Date().getTime();
      }
    });
  }
})();</script>
<script async="async" src="https://www.google-analytics.com/analytics.js"></script>
</head>

  <body class="gradient customer-logged-in template-page">

    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
      Skip to content
    </a>

    <div id="shopify-section-announcement-bar" class="shopify-section">
<div class="announcement-bar" role="region" aria-label="Announcement"  style="background: #202020;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-left">
              <svg viewBox="0 0 486.982 486.982">
	<path d="M131.35,422.969c14.6,14.6,38.3,14.6,52.9,0l181.1-181.1c5.2-5.2,9.2-11.4,11.8-18c18.2,5.1,35.9,7.8,51.5,7.7
    c38.6-0.2,51.4-17.1,55.6-27.2c4.2-10,7.2-31-19.9-58.6c-0.3-0.3-0.6-0.6-0.9-0.9c-16.8-16.8-41.2-32.3-68.9-43.8
    c-5.1-2.1-10.2-4-15.2-5.8v-0.3c-0.3-22.2-18.2-40.1-40.4-40.4l-108.5-1.5c-14.4-0.2-28.2,5.4-38.3,15.6l-181.2,181.1
    c-14.6,14.6-14.6,38.3,0,52.9L131.35,422.969z M270.95,117.869c12.1-12.1,31.7-12.1,43.8,0c7.2,7.2,10.1,17.1,8.7,26.4
    c11.9,8.4,26.1,16.2,41.3,22.5c5.4,2.2,10.6,4.2,15.6,5.9l-0.6-43.6c0.9,0.4,1.7,0.7,2.6,1.1c23.7,9.9,45,23.3,58.7,37
    c0.2,0.2,0.4,0.4,0.6,0.6c13,13.3,14.4,21.8,13.3,24.4c-3.4,8.1-39.9,15.3-95.3-7.8c-16.2-6.8-31.4-15.2-43.7-24.3
    c-0.4,0.5-0.9,1-1.3,1.5c-12.1,12.1-31.7,12.1-43.8,0C258.85,149.569,258.85,129.969,270.95,117.869z"></path>
</svg>
<p class="announcement-bar__message" style="color: #ffffff;">
                  free shipping world wide order over on $199.00
                </p></div>
            <div class="col-md-6 text-right headtleft">
              <localization-form><form method="post" action="/localization" id="FooterCountryForm" accept-charset="UTF-8" class="localization-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="localization" /><input type="hidden" name="utf8" value="?" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="return_to" value="/pages/wishlist" /><div class="no-js-hidden">
                        <div class="disclosure">
                          <button type="button" class="disclosure__button localization-form__select localization-selector link link--text caption-large" aria-expanded="false" aria-controls="FooterCountryList" aria-describedby="FooterCountryLabel" style="color: #ffffff;">
                            India (INR ?)
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

                          </button>
                          <ul id="FooterCountryList" role="list" class="disclosure__list list-unstyled" hidden><li class="disclosure__item" tabindex="-1">
                                <a class="link link--text disclosure__link caption-large disclosure__link--active focus-inset" href="#" aria-current="true" data-value="IN">
                                  India <span class="localization-form__currency">(INR ?)</span>
                                </a>
                              </li><li class="disclosure__item" tabindex="-1">
                                <a class="link link--text disclosure__link caption-large focus-inset" href="#" data-value="US">
                                  United States <span class="localization-form__currency">(USD $)</span>
                                </a>
                              </li></ul>
                        </div>
                        <input type="hidden" name="country_code" value="IN">
                      </div></form></localization-form>
                
                  <localization-form class="anouncebar-lang"><form method="post" action="/localization" id="FooterLanguageForm" accept-charset="UTF-8" class="localization-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="localization" /><input type="hidden" name="utf8" value="?" /><input type="hidden" name="_method" value="put" /><input type="hidden" name="return_to" value="/pages/wishlist" /><div class="no-js-hidden">
                        <div class="disclosure">
                          <button type="button" class="disclosure__button localization-form__select localization-selector link link--text caption-large" aria-expanded="false" aria-controls="FooterLanguageList" aria-describedby="FooterLanguageLabel" style="color: #ffffff;">
                            English
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

                          </button>
                          <ul id="FooterLanguageList" role="list" class="disclosure__list list-unstyled" hidden><li class="disclosure__item" tabindex="-1">
                                <a class="link link--text disclosure__link caption-large disclosure__link--active focus-inset" href="#" hreflang="en" lang="en" aria-current="true" data-value="en">
                                  English
                                </a>
                              </li><li class="disclosure__item" tabindex="-1">
                                <a class="link link--text disclosure__link caption-large focus-inset" href="#" hreflang="ar" lang="ar" data-value="ar">
                                  ???????
                                </a>
                              </li></ul>
                        </div>
                        <input type="hidden" name="locale_code" value="en">
                      </div></form></localization-form>
              
                <div class="wbheadwish">
                    <div class="wishlist">
                        
                            <a href="wishlist.php">
                                <svg viewBox="0 0 129 129">
  <path d="m121.6,40.1c-3.3-16.6-15.1-27.3-30.3-27.3-8.5,0-17.7,3.5-26.7,10.1-9.1-6.8-18.3-10.3-26.9-10.3-15.2,0-27.1,10.8-30.3,27.6-4.8,24.9 10.6,58 55.7,76 0.5,0.2 1,0.3 1.5,0.3 0.5,0 1-0.1 1.5-0.3 45-18.4 60.3-51.4 55.5-76.1zm-57,67.9c-39.6-16.4-53.3-45-49.2-66.3 2.4-12.7 11.2-21 22.3-21 7.5,0 15.9,3.6 24.3,10.5 1.5,1.2 3.6,1.2 5.1,0 8.4-6.7 16.7-10.2 24.2-10.2 11.1,0 19.8,8.1 22.3,20.7 4.1,21.1-9.5,49.6-49,66.3z"></path>
</svg> 
                                <span class="wbwish">Wishlist</span>
                                <span class="wbwishcount d-none">0</span>
                            </a>
                        
                    </div>
                </div>
              
            </div>
          </div>
        </div>
        
      </div>
</div>
    <div id="shopify-section-header" class="shopify-section"><link rel="stylesheet" href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-menu-drawer.css?v=66644536192796902501645685325" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-cart-notification.css?v=71676824558977264271645685320" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-cart-items.css?v=93912070136416773681645685320" media="print" onload="this.media='all'"><link rel="stylesheet" href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-price.css?v=75926142592083736931648449696" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-loading-overlay.css?v=28628663824550559871645685324" media="print" onload="this.media='all'"><noscript><link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-menu-drawer.css?v=66644536192796902501645685325" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-cart-notification.css?v=71676824558977264271645685320" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-cart-items.css?v=93912070136416773681645685320" rel="stylesheet" type="text/css" media="all" /></noscript>

<style>
header.header{
    background: #202020;
}
header-drawer {
    justify-self: start;
    margin-left: -1.2rem;
}
@media screen and (min-width: 992px) {
    header-drawer {
        display: none;
    }
}
</style>

<script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/details-disclosure.js?v=118626640824924522881645685334" defer="defer"></script>
<script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/details-modal.js?v=4511761896672669691645685334" defer="defer"></script>
<script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/cart-notification.js?v=18770815536247936311645685317" defer="defer"></script>

<svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-search" viewBox="0 0 512 512">
    <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"></path>
  </symbol>


  <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
  </symbol>
</svg>
<div class="header-wrapper">
<header class="header">
    <div class="header-top">
        <div class="container">
          <div class="row menuposrow">
            <div class="col-xl-2 col-lg-3 col-md-4 col-8 headlogo"><a href="/" class="header__heading-link link link--text focus-inset"><img srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/logo_170x.png?v=1645685451 1x, https://cdn.shopify.com/s/files/1/0257/0492/3199/files/logo_170x@2x.png?v=1645685451 2x"
                        class="img img-fluid" 
                        src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/logo_170x.png?v=1645685451"
                        loading="lazy"
                        class="header__heading-logo"
                        width="167"
                        height="32"
                        alt="storego-demo"
                        ></a></div>
            <div class="col-xl-6 col-md-5 text-center homesearch">
              <div class="header__icons">
                  <div class="search-modal__content" tabindex="-1"><predictive-search class="search-modal__form" data-loading-text="Loading..."><form action="/search" method="get" role="search" class="search search-modal__form">
                        <div class="field">
                          <input class="search__input field__input"
                            id="Search-In-Modal"
                            type="search"
                            name="q"
                            value=""
                            placeholder="Search"role="combobox"
                              aria-expanded="false"
                              aria-owns="predictive-search-results-list"
                              aria-controls="predictive-search-results-list"
                              aria-haspopup="listbox"
                              aria-autocomplete="list"
                              autocorrect="off"
                              autocomplete="off"
                              autocapitalize="off"
                              spellcheck="false">
                          <label class="field__label" for="Search-In-Modal">Search</label>
                          <input type="hidden" name="options[prefix]" value="last">
                          <button class="search__button field__button" aria-label="Search">
                            <svg class="icon icon-search" aria-hidden="true" focusable="false" role="presentation">
                              <use href="#icon-search">
                            </svg>
                          </button>
                        </div><div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>
                            <div class="predictive-search__loading-state">
                              <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                              </svg>
                            </div>
                          </div>

                          <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span></form></predictive-search></div>

              </div>
            </div>
            <div class="col-lg-4 col-md-3 col-4 text-right tright">

              <div class="husercart">
                <div class="header-support d-xl-inline-block d-none">
                  <span class="svgbg d-inline-block align-middle text-center"><svg aria-hidden="true" class="icon" viewBox="0 0 512 512">
  <path d="M477.679,222.71C473.752,99.221,375.854,0,256,0S38.248,99.221,34.321,222.71C14.387,226.709,0.032,244.202,0,264.533
        V384c0.028,23.553,19.114,42.639,42.667,42.667c0.049,42.395,34.405,76.751,76.8,76.8h79.173
        c3.024,5.262,8.624,8.514,14.693,8.533h76.8c9.422-0.009,17.057-7.645,17.067-17.067V460.8
        c-0.009-9.422-7.645-17.057-17.067-17.067h-76.8c-6.07,0.019-11.669,3.271-14.693,8.533h-79.173
        c-14.132-0.015-25.585-11.468-25.6-25.6h25.6c9.422-0.009,17.057-7.645,17.067-17.067V238.933
        c-0.009-9.422-7.645-17.057-17.067-17.067H85.745C90.03,127.028,164.639,51.2,256,51.2s165.97,75.828,170.255,170.667h-33.721
        c-9.422,0.009-17.057,7.645-17.067,17.067V409.6c0.009,9.422,7.645,17.057,17.067,17.067h76.8
        C492.886,426.639,511.972,407.553,512,384V264.533C511.968,244.202,497.613,226.709,477.679,222.71z M213.333,460.8h76.8
        l0.012,34.133h-76.812V460.8z M119.467,469.333h76.8V486.4h-76.8c-32.974-0.037-59.696-26.759-59.733-59.733H76.8
        C76.828,450.219,95.914,469.306,119.467,469.333z M119.467,238.933l0.012,170.667H42.667c-14.132-0.015-25.585-11.468-25.6-25.6
        V264.533c0.015-14.132,11.468-25.585,25.6-25.6H119.467z M256,34.133c-100.779,0-183.234,83.459-187.526,187.733H51.408
        c4.32-113.687,94.415-204.8,204.592-204.8s200.272,91.113,204.592,204.8h-17.066C439.234,117.593,356.779,34.133,256,34.133z
         M494.933,384c-0.015,14.132-11.468,25.585-25.6,25.6h-76.8V238.933h76.8c14.132,0.015,25.585,11.468,25.6,25.6V384z"></path>
      <path d="M349.867,332.8H332.8v-21.333c0-4.713-3.82-8.533-8.533-8.533s-8.533,3.82-8.533,8.533V332.8h-36.162l43.446-72.408
        c1.569-2.614,1.624-5.867,0.145-8.532c-1.479-2.666-4.268-4.34-7.317-4.392c-3.048-0.052-5.893,1.527-7.462,4.141l-51.2,85.333
        c-1.582,2.636-1.623,5.919-0.109,8.595s4.351,4.33,7.425,4.33h51.233v25.6c0,4.713,3.82,8.533,8.533,8.533
        s8.533-3.82,8.533-8.533v-25.6h17.067c4.713,0,8.533-3.82,8.533-8.533S354.58,332.8,349.867,332.8z"></path>
      <path d="M158.313,367.838c-3.535,1.773-5.389,5.743-4.48,9.592s4.345,6.568,8.3,6.57h76.8c4.713,0,8.533-3.82,8.533-8.533
        s-3.82-8.533-8.533-8.533H191.45c21.067-15.825,47.483-42.5,47.483-76.8c0-17.745-10.983-33.637-27.582-39.911
        c-16.599-6.274-35.348-1.619-47.085,11.69c-3.118,3.535-2.78,8.928,0.754,12.046c3.535,3.118,8.928,2.78,12.046-0.754
        c7.041-7.987,18.291-10.782,28.251-7.018c9.96,3.764,16.55,13.3,16.549,23.947C221.867,335.4,158.946,367.517,158.313,367.838z"></path>
</svg></span>
                    <span class="d-lg-inline-block d-none text-left align-middle icon-right-part">
                        <span class="d-block main-title">(+91) 012 1544 489</span>
                        <span class="d-block sub-title">Customer Support</span>
                    </span>
                </div><div class="slidedown_section dropdown">
                    <div class="hmuser" data-toggle="dropdown">
                        <div class="userdrop">
                            <span class="svgbg d-inline-block align-middle text-center"><svg viewBox="-42 0 512 512.001">
  <path d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0"></path><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0"></path>
</svg></span>
                           <span class="d-lg-inline-block d-none text-left align-middle icon-right-part">
							     <span class="d-block main-title">My Account</span>
					  <?php if (!isset($_SESSION['login_username_id'])) {?>	
					   <span class="d-block sub-title">Log in</span>
					  		<?php } else{ ?>		
                                <span class="d-block sub-title">Logout</span>
							   
									<?php } ?>
                            </span>
			
					
							
							
                        </div>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="header-panel-top">
                            <div class="customer_account text-left">
                                <ul class="list-unstyled">
								
								 <?php if (!isset($_SESSION['login_username_id'])) { ?>
                                    
									  <li>
                                        <a href="/account/register"title="Create account" >                    
                                        <i class="fa fa-user"></i>
                                        Create account
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login.php">
                                        <i class="fa fa-lock"></i>
                                        Log in
                                        </a>
                                    </li>
                                  
									<?php } else{?>
									
									 <li>
                                        <a href="myaccountaddress.php">
                                        <i class="fa fa-lock"></i>
                                       My Account 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?logout=1" name="logout" title="Create account">
                                        <i class="fa fa-user"></i>
                                        Logout
                                        </a>
                                    </li>
									
									<?php }?>
                                    
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown" id="cart-icon-bubble">
                    <div data-toggle="dropdown1"> 
                        <div class="wbhcart">
                            <span class="svgbg d-inline-block align-middle text-center"><a href="cart.php" ><svg viewBox="0 -36 512.001 512">
  <path d="m256 219.988281c5.519531 0 10-4.480469 10-10s-4.480469-10-10-10-10 4.480469-10 10 4.480469 10 10 10zm0 0"></path><path d="m472 139.988281h-59.136719l-90.96875-125.152343c-8.171875-14.003907-26.171875-18.988282-40.46875-11.070313-14.492187 8.050781-19.703125 26.304687-11.648437 40.800781.230468.410156.484375.804688.769531 1.179688l71.351563 94.242187h-171.796876l71.351563-94.242187c.28125-.375.539063-.769532.769531-1.179688 8.035156-14.460937 2.882813-32.730468-11.660156-40.808594-14.265625-7.902343-32.265625-2.921874-40.453125 11.070313l-90.972656 125.160156h-59.136719c-22.054688 0-40 17.945313-40 40 0 17.394531 11.289062 32.539063 27.191406 37.898438 1.695313 1.3125 3.8125 2.101562 6.117188 2.101562.460937 0 .894531.027344 1.347656.089844 4.304688.578125 7.714844 3.84375 8.496094 8.117187l34.019531 187.164063c2.597656 14.269531 15.011719 24.628906 29.519531 24.628906h298.617188c14.507812 0 26.921875-10.359375 29.519531-24.632812l34.019531-187.15625c.78125-4.277344 4.195313-7.542969 8.515625-8.121094.4375-.0625.871094-.089844 1.328125-.089844 2.320313 0 4.453125-.796875 6.148438-2.125 15.914062-5.394531 27.160156-20.511719 27.160156-37.875 0-22.054687-17.945312-40-40-40zm-185.011719-105.660156c-2.285156-4.730469-.511719-10.492187 4.136719-13.070313 4.839844-2.683593 10.941406-.953124 13.609375 3.855469.195313.359375.417969.703125.65625 1.03125l82.746094 113.84375h-21.15625zm-80.378906-8.179687c.238281-.328126.453125-.667969.652344-1.019532 2.675781-4.8125 8.78125-6.546875 13.601562-3.878906 4.65625 2.585938 6.4375 8.339844 4.148438 13.078125l-79.992188 105.660156h-21.15625zm265.390625 173.839843h-176c-5.523438 0-10 4.476563-10 10 0 5.523438 4.476562 9.898438 10 9.898438h154.398438c-.523438 1.492187-.9375 3.039062-1.226563 4.632812l-34.023437 187.257813c-.863282 4.757812-5.003907 8.210937-9.839844 8.210937h-298.617188c-4.839844 0-8.976562-3.453125-9.84375-8.207031l-34.019531-187.164062c-.289063-1.59375-.703125-3.140626-1.226563-4.628907h154.398438c5.523438 0 10-4.476562 10-10 0-5.523437-4.476562-10-10-10h-176c-11.121094 0-20-9.0625-20-20 0-11.027343 8.972656-20 20-20h432c11.027344 0 20 8.972657 20 20 0 11.105469-9.085938 20-20 20zm0 0"></path><path d="m256 249.988281c-16.542969 0-30 13.457031-30 30v80c0 16.542969 13.457031 30 30 30s30-13.457031 30-30v-80c0-16.574219-13.425781-30-30-30zm10 110c0 5.515625-4.484375 10-10 10s-10-4.484375-10-10v-80c0-5.515625 4.484375-10 10-10 5.519531 0 10 4.480469 10 10zm0 0"></path><path d="m356 389.988281c16.542969 0 30-13.457031 30-30v-80c0-16.574219-13.425781-30-30-30-16.542969 0-30 13.457031-30 30v80c0 16.542969 13.457031 30 30 30zm-10-110c0-5.515625 4.484375-10 10-10 5.519531 0 10 4.480469 10 10v80c0 5.515625-4.484375 10-10 10s-10-4.484375-10-10zm0 0"></path><path d="m156 249.988281c-16.542969 0-30 13.457031-30 30v80c0 16.542969 13.457031 30 30 30s30-13.457031 30-30v-80c0-16.574219-13.425781-30-30-30zm10 110c0 5.515625-4.484375 10-10 10s-10-4.484375-10-10v-80c0-5.515625 4.484375-10 10-10 5.519531 0 10 4.476563 10 10zm0 0"></path>
</svg></a></span>
                            <span class="d-lg-inline-block text-left align-middle icon-right-part">
                                <span class="d-lg-block main-title d-none">My Cart</span>
								
								
								
                               <?php 
							
							if (isset($_SESSION['login_username_id'])) {
							
							$select_from_cart="SELECT * FROM `add_cart` where user_id='".$_SESSION['login_username_id']."'";
							$result_cart_selected=mysqli_query($conn,$select_from_cart);
							$row_count_cart_selected=mysqli_num_rows($result_cart_selected);
							$quantity_final=0;
							while($row_cart=mysqli_fetch_array($result_cart_selected)){
							
							$quantity_final+=intval($row_cart['quantity']);
							
							}
							
							
											
						 ?>		
								
                                <span class="d-block sub-title"><span class="wbhcartitem"><?php echo $quantity_final; ?> <span class="d-lg-inline-block d-none">item</span></span>
								<?php } ?>
                   
                        </div>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                        <webi-cart-items class=" is-empty">
                            <div class="cart__warnings">
                                <h5 class="cart__empty-text">Your cart is empty</h5>
                            </div>
                            <form action="/cart" class="cart__contents critical-hidden" method="post" id="cart">
                                <div id="webi-main-cart-items" data-id="header">
                                    <div class="js-contents"></div>
                                </div>
                                <p class="visually-hidden" id="webi-cart-live-region-text" aria-live="polite" role="status"></p>
                                <p class="visually-hidden" id="shopping-cart-line-item-status" aria-live="polite" aria-hidden="true" role="status">Loading...</p>
                            </form>
                        </webi-cart-items>
                        <div class=" is-empty" id="webi-main-cart-footer" data-id="header">
                            <div class="cart__blocks">
                                <div class="js-contents" >
                                    <div class="totals">
                                        <p>Subtotal:</p>
                                        <h3>? 0.00</h3>
                                    </div>
                                    <div></div>
                                </div>  
                                <div class="cart__ctas" >
                                    <noscript>
                                        <button type="submit" class="cart__update-button button button--secondary" form="cart">Update</button>
                                    </noscript>
                                    <a href="/cart" class="button button-primary">View Cart</a>
                                    <button type="submit" id="checkout" class="cart__checkout-button button" name="checkout" disabled form="cart">
                                        Check out
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                
              </div>
            </div>    
          </div>
        </div>
    </div>

<cart-notification>
  <div class="cart-notification-wrapper container ">
    <div id="cart-notification" class="cart-notification focus-inset" aria-modal="true" aria-label="Item added to your cart" role="dialog" tabindex="-1">
      <div class="cart-notification__header">
        <h2 class="cart-notification__heading"><svg class="icon icon-checkmark" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 9" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.35.643a.5.5 0 01.006.707l-6.77 6.886a.5.5 0 01-.719-.006L.638 4.845a.5.5 0 11.724-.69l2.872 3.011 6.41-6.517a.5.5 0 01.707-.006h-.001z" fill="currentColor"/>
</svg>
Item added to your cart</h2>
        <button type="button" class="cart-notification__close modal__close-button link link--text focus-inset" aria-label="Close">
          <svg class="icon icon-close" aria-hidden="true" focusable="false"><use href="#icon-close"></svg>
        </button>
      </div>
      <div id="cart-notification-product" class="cart-notification-product"></div>
      <div class="cart-notification__links">
        <a href="/cart" id="cart-notification-button" class="button button--secondary button--full-width"></a>
        <form action="/cart" method="post" id="cart-notification-form">
          <button class="button button--primary button--full-width" name="checkout">Check out</button>
        </form>
        <button type="button" class="link button-label">Continue shopping</button>
      </div>
    </div>
  </div>
</cart-notification>
<style data-shopify>
  .cart-notification {
     display: none;
  }
</style>
</header>
</div>



<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "storego-demo",
    
      
      "logo": "https:\/\/cdn.shopify.com\/s\/files\/1\/0257\/0492\/3199\/files\/logo_167x.png?v=1645685451",
    
    "sameAs": [
      "#",
      "#",
      "#",
      "#",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/storego-demo.myshopify.com\/pages\/wishlist"
  }
</script>
</div>
    <div class="page-container drawer-page-content" id="PageContainer">
      <div class="cate-menu">
        <div class="container">
          <div class="row">
             <div class="col-lg-3 col-md-4 col-12 hleftw d-lg-inline-block d-none">
                
             </div>
             <div class="col-lg-9 col-md-12 col-12 rightw">
                <div id="shopify-section-cms-menu" class="shopify-section index-section"><div class="row">
  <div class="col-xl-9 col-12 hmenu">
    <div class="cms-menu">
        
           
            <p><a href="index.php" title="">home</a></p><p><a href="products.php" title="Best Product">top product</a></p><p><a href="" title="Special Product">special product</a></p><p><a href="" title="News">blog</a></p><p><a href="" title="About Us">about us</a></p><p><a href="" title="Contact Us">contact us</a></p>
        
    </div>
  </div>
  <div class="col-lg-3 text-right offer-icon d-xl-inline-block d-none">
    <div class="special-offer">
        
            <p><a href="/collections/best-product" title="Best Product">GET 20% OFF on selected items</a></p>
        
    </div>
  </div>
</div>


</div>
             </div>
          </div>
        </div>
      </div>
      <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
        <div class="container">
          <div class="row">
             
              <div class="col-12 col-md-4 col-lg-2 leftw">
                  <div id="shopify-section-site-nav" class="shopify-section index-section"><style>
@media (min-width: 768px){
      .cate-menu{
          background: #202020;
      }
}
#megamenu li.wbmenul_1 a.wbmenul1_link {
    color: #000000;
}
#megamenu li.wbmenul_1 a.wbmenul1_link:hover{
    color: var(--color-wbmaincolors-text);
}
</style>
<div class="wbmenuup">
    
    <h3 class="whr-menu d-lg-block d-none" data-toggle="collapse" data-target="#under-menu" aria-expanded="false" aria-label="Toggle navigation">
    <button class="navbar-toggler" type="button" aria-label="Center Align">
        <div class="navbar-toggler-icon">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        </div>
    </button>
    <span class="cate">All Categories</span>
    </h3>
    <div id="under-menu" class="collapse">
        <nav id="megamenu" class="megamenu">

            <div class="wr-menu" onClick="w3_open()">
                <span><svg class="icon" viewBox="0 0 384 384">
	<rect x="0" y="277.333" width="384" height="42.667"></rect>
    <rect x="0" y="170.667" width="384" height="42.667"></rect>
    <rect x="0" y="64" width="384" height="42.667"></rect>
</svg></span>
            </div>
            <ul id="wbmegalevel-1" class="level_1 menu-vertical">
                <h2 class="wbmenuclose">Menu<button type="button" class="closebtn float-right" aria-label="Menu" onclick="w3_close()"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" fill="none" viewBox="0 0 18 17">
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>
</h2>
                
                    
                    
                    

                    <li class="wbmenulink wbmenul_1 ">
                        <a class="wbmenul1_link " href="/collections/camera">camera
                            
                            

                        </a> 

                        

                    </li>

                
                    
                    
                    

                    <li class="wbmenulink wbmenul_1 ">
                        <a class="wbmenul1_link " href="/collections/laptop">Laptop
                            
                            

                        </a> 

                        

                    </li>

                
                    
                    
                    

                    <li class="wbmenulink wbmenul_1 wbmegaonlylink">
                        <a class="wbmenul1_link " href="/collections/phone">Phone
                            <i class="fa fa-angle-down float-right float-right wbmegamainhd" data-submenu="menu_20269094-fc20-482c-ae2c-0ffcb58f0e50"></i>
                            

                        </a> 

                        
                                
                                    <ul class="level_2 simple-linkmn wbmenudropdown" id="menu_20269094-fc20-482c-ae2c-0ffcb58f0e50">
                                        <li>
                                            <div><ul class="level_3">
                                                    


                                                        <li class="level_3__item ">
                                                            <a class="level_3__link" href="/collections/best-product">recliener set</a>

                                                            
                                                        </li>
                                                    


                                                        <li class="level_3__item with_ul">
                                                            <a class="level_3__link" href="/collections/latest-product">lather sofa<i class="level_3__trigger wbmegamainhd" data-submenu="submenu_20269094-fc20-482c-ae2c-0ffcb58f0e50-4"></i></a>

                                                            
                                                                <ul class="level_3_2 droped_linklist" id="submenu_20269094-fc20-482c-ae2c-0ffcb58f0e50-4">
                                                                    

                                                                            
                                                                        <li class="level_3_2_item with_ul">
                                                                            <a class="level_3_2_link" href="/collections/electronic">designer sofa<i class="level_3__trigger wbmegamainhd" data-submenu="subsubmenu_20269094-fc20-482c-ae2c-0ffcb58f0e50-4"></i></a>

                                                                            
                                                                                <ul class="level_3_3 droped_linklist" id="subsubmenu_20269094-fc20-482c-ae2c-0ffcb58f0e50-4">
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/best-product">recliener set</a>
                                                                                        </li>
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/latest-product">lather sofa</a>
                                                                                        </li>
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections">simple chair</a>
                                                                                        </li>
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/phone">office sofa</a>
                                                                                        </li>
                                                                                    
                                                                                </ul>
                                                                            
                                                                        </li>
                                                                    

                                                                            
                                                                        <li class="level_3_2_item with_ul">
                                                                            <a class="level_3_2_link" href="/collections/deal-product">simple sofa<i class="level_3__trigger wbmegamainhd" data-submenu="subsubmenu_20269094-fc20-482c-ae2c-0ffcb58f0e50-4"></i></a>

                                                                            
                                                                                <ul class="level_3_3 droped_linklist" id="subsubmenu_20269094-fc20-482c-ae2c-0ffcb58f0e50-4">
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/latest-product">sofa cum beds</a>
                                                                                        </li>
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/phone">designer sofa</a>
                                                                                        </li>
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/tablate">office sofa</a>
                                                                                        </li>
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/television">recliner sofa</a>
                                                                                        </li>
                                                                                    
                                                                                </ul>
                                                                            
                                                                        </li>
                                                                    

                                                                            
                                                                        <li class="level_3_2_item with_ul">
                                                                            <a class="level_3_2_link" href="/collections/latest-product">office sofa<i class="level_3__trigger wbmegamainhd" data-submenu="subsubmenu_20269094-fc20-482c-ae2c-0ffcb58f0e50-4"></i></a>

                                                                            
                                                                                <ul class="level_3_3 droped_linklist" id="subsubmenu_20269094-fc20-482c-ae2c-0ffcb58f0e50-4">
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/cosmatic">sectional sofas</a>
                                                                                        </li>
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/latest-product">recliner sofas</a>
                                                                                        </li>
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/furniture">craftter</a>
                                                                                        </li>
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/accessories">bar box</a>
                                                                                        </li>
                                                                                    
                                                                                </ul>
                                                                            
                                                                        </li>
                                                                    

                                                                            
                                                                        <li class="level_3_2_item with_ul">
                                                                            <a class="level_3_2_link" href="/collections/speakers">lather sofa<i class="level_3__trigger wbmegamainhd" data-submenu="subsubmenu_20269094-fc20-482c-ae2c-0ffcb58f0e50-4"></i></a>

                                                                            
                                                                                <ul class="level_3_3 droped_linklist" id="subsubmenu_20269094-fc20-482c-ae2c-0ffcb58f0e50-4">
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/electronic">designer sofa</a>
                                                                                        </li>
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/deal-product">simple sofa</a>
                                                                                        </li>
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/latest-product">office sofa</a>
                                                                                        </li>
                                                                                    
                                                                                        <li class="level_3_3_item">
                                                                                            <a class="level_3_3_link" href="/collections/speakers">lather sofa</a>
                                                                                        </li>
                                                                                    
                                                                                </ul>
                                                                            
                                                                        </li>
                                                                    
                                                                </ul>
                                                            
                                                        </li>
                                                    


                                                        <li class="level_3__item ">
                                                            <a class="level_3__link" href="/collections">simple chair</a>

                                                            
                                                        </li>
                                                    


                                                        <li class="level_3__item with_ul">
                                                            <a class="level_3__link" href="/collections/phone">office sofa<i class="level_3__trigger wbmegamainhd" data-submenu="submenu_20269094-fc20-482c-ae2c-0ffcb58f0e50-4"></i></a>

                                                            
                                                                <ul class="level_3_2 droped_linklist" id="submenu_20269094-fc20-482c-ae2c-0ffcb58f0e50-4">
                                                                    

                                                                            
                                                                        <li class="level_3_2_item ">
                                                                            <a class="level_3_2_link" href="/collections/cosmatic">sectional sofas</a>

                                                                            
                                                                        </li>
                                                                    

                                                                            
                                                                        <li class="level_3_2_item ">
                                                                            <a class="level_3_2_link" href="/collections/latest-product">recliner sofas</a>

                                                                            
                                                                        </li>
                                                                    

                                                                            
                                                                        <li class="level_3_2_item ">
                                                                            <a class="level_3_2_link" href="/collections/furniture">craftter</a>

                                                                            
                                                                        </li>
                                                                    

                                                                            
                                                                        <li class="level_3_2_item ">
                                                                            <a class="level_3_2_link" href="/collections/accessories">bar box</a>

                                                                            
                                                                        </li>
                                                                    
                                                                </ul>
                                                            
                                                        </li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                

                            

                    </li>

                
                    
                    
                    

                    <li class="wbmenulink wbmenul_1 wbmegalink-img">
                        <a class="wbmenul1_link " href="/collections/speakers">speaker
                            <i class="fa fa-angle-down float-right float-right wbmegamainhd" data-submenu="menu_eb14554d-8987-4409-86ef-5e3fc7019981"></i>
                            

                        </a> 

                        
                                
                                    <ul class="level_2 wbmenudropdown" id="menu_eb14554d-8987-4409-86ef-5e3fc7019981">
                                        <li class="container">
                                            <div class="row rless">
                                              
                                                
                                                
                                                
<div class="wbmegacolpart col-lg-3 col-12 cless ">
                                                    
                                                    <h3 >simple sofa <i class="level_2__trigger wbmegamainhd" data-submenu="menu_eb14554d-8987-4409-86ef-5e3fc7019981-1"></i></h3>

                                                    <ul class="level_3" id="menu_eb14554d-8987-4409-86ef-5e3fc7019981-1">
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/latest-product">sofa cum beds</a>
                                                            </li>
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/phone">designer sofa</a>
                                                            </li>
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/tablate">office sofa</a>
                                                            </li>
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/television">recliner sofa</a>
                                                            </li>
                                                        
                                                    </ul>

                                                    
                                                    <a href=""> 
                                                        <img src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/1_b77e467a-b159-43c3-936e-62cd34704857_430x200_crop_center.jpg?v=1648301056" alt="simple sofa" class="img-fluid mx-auto wb4proimg">
                                                    </a>
                                                    

                                                </div>
                                              
                                                
                                                
                                                
<div class="wbmegacolpart col-lg-3 col-12 cless ">
                                                    
                                                    <h3 >designer sofa <i class="level_2__trigger wbmegamainhd" data-submenu="menu_eb14554d-8987-4409-86ef-5e3fc7019981-2"></i></h3>

                                                    <ul class="level_3" id="menu_eb14554d-8987-4409-86ef-5e3fc7019981-2">
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/best-product">recliener set</a>
                                                            </li>
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/latest-product">lather sofa</a>
                                                            </li>
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections">simple chair</a>
                                                            </li>
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/phone">office sofa</a>
                                                            </li>
                                                        
                                                    </ul>

                                                    
                                                    <a href=""> 
                                                        <img src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/2_687b9819-88c0-4625-bff0-4ab23d3df215_430x200_crop_center.jpg?v=1648301066" alt="designer sofa" class="img-fluid mx-auto wb4proimg">
                                                    </a>
                                                    

                                                </div>
                                              
                                                
                                                
                                                
<div class="wbmegacolpart col-lg-3 col-12 cless ">
                                                    
                                                    <h3 >office sofa <i class="level_2__trigger wbmegamainhd" data-submenu="menu_eb14554d-8987-4409-86ef-5e3fc7019981-3"></i></h3>

                                                    <ul class="level_3" id="menu_eb14554d-8987-4409-86ef-5e3fc7019981-3">
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/cosmatic">sectional sofas</a>
                                                            </li>
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/latest-product">recliner sofas</a>
                                                            </li>
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/furniture">craftter</a>
                                                            </li>
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/accessories">bar box</a>
                                                            </li>
                                                        
                                                    </ul>

                                                    
                                                    <a href=""> 
                                                        <img src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/3_21072104-f650-43ca-b96e-69ec86a3ba69_430x200_crop_center.jpg?v=1648301075" alt="office sofa" class="img-fluid mx-auto wb4proimg">
                                                    </a>
                                                    

                                                </div>
                                              
                                                
                                                
                                                
<div class="wbmegacolpart col-lg-3 col-12 cless ">
                                                    
                                                    <h3 >lather sofa <i class="level_2__trigger wbmegamainhd" data-submenu="menu_eb14554d-8987-4409-86ef-5e3fc7019981-4"></i></h3>

                                                    <ul class="level_3" id="menu_eb14554d-8987-4409-86ef-5e3fc7019981-4">
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/electronic">designer sofa</a>
                                                            </li>
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/deal-product">simple sofa</a>
                                                            </li>
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/latest-product">office sofa</a>
                                                            </li>
                                                        
                                                            <li class="level_3__item">
                                                                

                                                                <a class="level_3__link" href="/collections/speakers">lather sofa</a>
                                                            </li>
                                                        
                                                    </ul>

                                                    
                                                    <a href=""> 
                                                        <img src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/4_a647fb94-1359-4d96-af2d-d4f9951a22b4_430x200_crop_center.jpg?v=1648301080" alt="lather sofa" class="img-fluid mx-auto wb4proimg">
                                                    </a>
                                                    

                                                </div>
                                            
                                            </div>
                                        </li>
                                    </ul>
                                

                            

                    </li>

                
                    
                    
                    

                    <li class="wbmenulink wbmenul_1 wbmegaonlylink">
                        <a class="wbmenul1_link " href="/collections/smartphone">smarthphone
                            <i class="fa fa-angle-down float-right float-right wbmegamainhd" data-submenu="menu_61c456c2-24d1-48c2-92fe-e82d65e9796a"></i>
                            

                        </a> 

                        
                                
                                    <ul class="level_2 simple-linkmn wbmenudropdown" id="menu_61c456c2-24d1-48c2-92fe-e82d65e9796a">
                                        <li>
                                            <div><ul class="level_3">
                                                    


                                                        <li class="level_3__item with_ul">
                                                            <a class="level_3__link" href="/collections/latest-product">handbag<i class="level_3__trigger wbmegamainhd" data-submenu="submenu_61c456c2-24d1-48c2-92fe-e82d65e9796a-2"></i></a>

                                                            
                                                                <ul class="level_3_2 droped_linklist" id="submenu_61c456c2-24d1-48c2-92fe-e82d65e9796a-2">
                                                                    

                                                                            
                                                                        <li class="level_3_2_item ">
                                                                            <a class="level_3_2_link" href="/collections/best-product">shoulder bags</a>

                                                                            
                                                                        </li>
                                                                    

                                                                            
                                                                        <li class="level_3_2_item ">
                                                                            <a class="level_3_2_link" href="/collections/latest-product">cluthes</a>

                                                                            
                                                                        </li>
                                                                    
                                                                </ul>
                                                            
                                                        </li>
                                                    


                                                        <li class="level_3__item ">
                                                            <a class="level_3__link" href="/collections/fruits">watches</a>

                                                            
                                                        </li>
                                                    


                                                        <li class="level_3__item ">
                                                            <a class="level_3__link" href="/collections/smart-tv">ethanic cloth</a>

                                                            
                                                        </li>
                                                    


                                                        <li class="level_3__item ">
                                                            <a class="level_3__link" href="/collections/cosmatic">cosmatic</a>

                                                            
                                                        </li>
                                                    
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                

                            

                    </li>

                
                    
                    
                    

                    <li class="wbmenulink wbmenul_1 wbmegaonlylink">
                        <a class="wbmenul1_link " href="/collections/smart-tv">smart tv
                            
                            

                        </a> 

                        
                                

                            

                    </li>

                
                    
                    
                    

                    <li class="wbmenulink wbmenul_1 ">
                        <a class="wbmenul1_link " href="/collections/television">television
                            
                            

                        </a> 

                        

                    </li>

                
                    
                    
                    

                    <li class="wbmenulink wbmenul_1 ">
                        <a class="wbmenul1_link " href="/collections/watch">watch
                            
                            

                        </a> 

                        

                    </li>

                
                    
                    
                    

                    <li class="wbmenulink wbmenul_1 ">
                        <a class="wbmenul1_link " href="/collections/furniture">fueniture
                            
                            

                        </a> 

                        

                    </li>

                
                    
                    
                    

                    <li class="wbmenulink wbmenul_1 ">
                        <a class="wbmenul1_link " href="/collections/accessories">accessories
                            
                            

                        </a> 

                        

                    </li>

                
                    
                    
                    

                    <li class="wbmenulink wbmenul_1 ">
                        <a class="wbmenul1_link " href="/collections/electronic">electronic
                            
                            

                        </a> 

                        

                    </li>

                
            </ul>
            <div class="w3-overlay w3-animate-opacity" onClick="w3_close()" style="cursor: pointer;" id="myOverlay"></div>
        </nav>
    </div>
    
</div>


</div>
                  
                    <div id="shopify-section-leftbanner" class="shopify-section spaced-section"><div class="leftbnr">
	<div class="beffect">
        <a href="/collections" title="Banners">
        
            <img loading="lazy" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/295x500.jpg?v=1648099738" alt="" class="img-fluid mx-auto" width="295" height="500"/>
        
        </a>
    </div>
    <div class="lefttxt">
    	<div class="lftff">
    		
	            <h5>up to 60% off</h5>
	        
	        
	            <h2>fashion footwear</h2>
	        
	        
	        
	            <a href="/collections" class="btn btn-primary">Shop now<svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</a>
	        
        </div>
    </div>
</div>

</div>
                  
                  
                  
                    <div id="shopify-section-popular" class="shopify-section spaced-section"><link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-card.css?v=100729205794507640871679391631" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-price.css?v=75926142592083736931648449696" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-product-grid.css?v=139211915441709507551664166894" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-rating.css?v=149782489698461958261645685328" rel="stylesheet" type="text/css" media="all" />
<div class="popular leftpro">
  <h2 class="heading text-left"><span>Popular Products</span></h2>
    <div class="rless">
      <div class="wbpop"> 
        
<ul class="twopro">
        <li class="grid__item col-12 cless list-unstyled">
          
<div class="card-wrapper wbproduct-container">
    <div class="row rless">
        <div class="wbimgblock col-4 cless">
                <div id="webipro-popular-4397860585535" class="card__media"><div class="product__media-item" data-media-id="popular-4397860585535-5824692715583">
                            <a href="/products/bajaj-gx1-500-w-camera" title="Bajaj GX1 500 W Camera" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                <img class="img-fluid mx-auto" 
                               srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45_493x.jpg?v=1575011947 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45_600x.jpg?v=1575011947 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45_713x.jpg?v=1575011947 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45_823x.jpg?v=1575011947 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45_992x.jpg?v=1575011947 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45.jpg?v=1575011947 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45_370x.jpg?v=1575011947 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                loading="lazy"
                                width="1000"
                                height="1000"
                                alt="">
                            </a>
                            
                        </div><div class="product__media-item" data-media-id="popular-4397860585535-5824692748351">
                                <a href="/products/bajaj-gx1-500-w-camera" title="Bajaj GX1 500 W Camera" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46_493x.jpg?v=1575011947 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46_600x.jpg?v=1575011947 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46_713x.jpg?v=1575011947 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46_823x.jpg?v=1575011947 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46_992x.jpg?v=1575011947 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46.jpg?v=1575011947 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46_370x.jpg?v=1575011947 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div></div>
                
<div class="card__badge"><span>Sale</span></div>

        </div> 
        <div class="wbproductdes col-8 cless">

            
<h3 class="product-title"><a href="/products/bajaj-gx1-500-w-camera" >Bajaj GX1 500 W Camera</a></h3>
            <span class="caption-large light"></span><div id="ProductInfo-popular-4397860585535" ><div class="wbhrating">
                            
                            <div class="rating" role="img" aria-label="5.0 out of 5.0 stars">
                                <span aria-hidden="true" class="rating-star" style="--rating: 5; --rating-max: 5.0; --rating-decimal: 0;"></span>
                            </div>
                            <p class="rating-text caption">
                                <span aria-hidden="true">5.0 / 5.0</span>
                            </p>
                            <p class="rating-count caption">
                                <span aria-hidden="true">(3)</span>
                                <span class="visually-hidden">3 total reviews</span>
                            </p>
                        </div><div class="no-js-hidden wbhprice" id="price-popular-4397860585535" role="status" >
<div class="price price--on-sale ">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 450.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 450.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              ? 650.00
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div>
                

            </div>

        </div>
    </div>
</div>
        </li>
        
        

        <li class="grid__item col-12 cless list-unstyled">
          
<div class="card-wrapper wbproduct-container">
    <div class="row rless">
        <div class="wbimgblock col-4 cless">
                <div id="webipro-popular-4397828571199" class="card__media"><div class="product__media-item" data-media-id="popular-4397828571199-5824576487487">
                            <a href="/products/rdp-smart-laptops" title="RDP smart laptops" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                <img class="img-fluid mx-auto" 
                               srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9_493x.jpg?v=1575011120 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9_600x.jpg?v=1575011120 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9_713x.jpg?v=1575011120 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9_823x.jpg?v=1575011120 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9_992x.jpg?v=1575011120 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9.jpg?v=1575011120 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9_370x.jpg?v=1575011120 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                loading="lazy"
                                width="1000"
                                height="1000"
                                alt="">
                            </a>
                            
                        </div><div class="product__media-item" data-media-id="popular-4397828571199-5824594116671">
                                <a href="/products/rdp-smart-laptops" title="RDP smart laptops" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_493x.jpg?v=1575011120 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_600x.jpg?v=1575011120 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_713x.jpg?v=1575011120 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_823x.jpg?v=1575011120 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_992x.jpg?v=1575011120 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14.jpg?v=1575011120 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_370x.jpg?v=1575011120 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div></div>
                
<div class="card__badge"></div>

        </div> 
        <div class="wbproductdes col-8 cless">

            
<h3 class="product-title"><a href="/products/rdp-smart-laptops" >RDP smart laptops</a></h3>
            <span class="caption-large light"></span><div id="ProductInfo-popular-4397828571199" ><div class="wbhrating">
                            <div class="rating">
                                <span class="rating-star wbnorating"></span>
                            </div>
                            <p class="rating-count caption">
                                <span aria-hidden="true">(0)</span>
                            </p>
                        </div><div class="no-js-hidden wbhprice" id="price-popular-4397828571199" role="status" >
<div class="price">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 550.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 550.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div>
                

            </div>

        </div>
    </div>
</div>
        </li>
        
        

        <li class="grid__item col-12 cless list-unstyled">
          
<div class="card-wrapper wbproduct-container">
    <div class="row rless">
        <div class="wbimgblock col-4 cless">
                <div id="webipro-popular-4397838598207" class="card__media"><div class="product__media-item" data-media-id="popular-4397838598207-5824614301759">
                            <a href="/products/15-core-i5-8th-gen-led-tv" title="15 Core I5 8th Gen LED TV" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                <img class="img-fluid mx-auto" 
                               srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441_493x.jpg?v=1575011285 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441_600x.jpg?v=1575011285 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441_713x.jpg?v=1575011285 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441_823x.jpg?v=1575011285 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441_992x.jpg?v=1575011285 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441.jpg?v=1575011285 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441_370x.jpg?v=1575011285 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                loading="lazy"
                                width="1000"
                                height="1000"
                                alt="">
                            </a>
                            
                        </div><div class="product__media-item" data-media-id="popular-4397838598207-5824614268991">
                                <a href="/products/15-core-i5-8th-gen-led-tv" title="15 Core I5 8th Gen LED TV" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787_493x.jpg?v=1575011285 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787_600x.jpg?v=1575011285 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787_713x.jpg?v=1575011285 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787_823x.jpg?v=1575011285 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787_992x.jpg?v=1575011285 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787.jpg?v=1575011285 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787_370x.jpg?v=1575011285 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div><div class="product__media-item" data-media-id="popular-4397838598207-5824614334527">
                                <a href="/products/15-core-i5-8th-gen-led-tv" title="15 Core I5 8th Gen LED TV" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33_493x.jpg?v=1575011285 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33_600x.jpg?v=1575011285 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33_713x.jpg?v=1575011285 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33_823x.jpg?v=1575011285 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33_992x.jpg?v=1575011285 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33.jpg?v=1575011285 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33_370x.jpg?v=1575011285 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div></div>
                
<div class="card__badge"><span>Sale</span></div>

        </div> 
        <div class="wbproductdes col-8 cless">

            
<h3 class="product-title"><a href="/products/15-core-i5-8th-gen-led-tv" >15 Core I5 8th Gen LED TV</a></h3>
            <span class="caption-large light"></span><div id="ProductInfo-popular-4397838598207" ><div class="wbhrating">
                            <div class="rating">
                                <span class="rating-star wbnorating"></span>
                            </div>
                            <p class="rating-count caption">
                                <span aria-hidden="true">(0)</span>
                            </p>
                        </div><div class="no-js-hidden wbhprice" id="price-popular-4397838598207" role="status" >
<div class="price price--on-sale ">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 350.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 350.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              ? 400.00
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div>
                

            </div>

        </div>
    </div>
</div>
        </li>
        
        

        <li class="grid__item col-12 cless list-unstyled">
          
<div class="card-wrapper wbproduct-container">
    <div class="row rless">
        <div class="wbimgblock col-4 cless">
                <div id="webipro-popular-4397823623231" class="card__media"><div class="product__media-item" data-media-id="popular-4397823623231-5824549126207">
                            <a href="/products/over-ear-usb-headset" title="Over-Ear USB Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                <img class="img-fluid mx-auto" 
                               srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d_493x.jpg?v=1575010861 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d_600x.jpg?v=1575010861 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d_713x.jpg?v=1575010861 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d_823x.jpg?v=1575010861 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d_992x.jpg?v=1575010861 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d.jpg?v=1575010861 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d_370x.jpg?v=1575010861 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                loading="lazy"
                                width="1000"
                                height="1000"
                                alt="">
                            </a>
                            
                        </div><div class="product__media-item" data-media-id="popular-4397823623231-5824548995135">
                                <a href="/products/over-ear-usb-headset" title="Over-Ear USB Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415_493x.jpg?v=1575010861 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415_600x.jpg?v=1575010861 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415_713x.jpg?v=1575010861 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415_823x.jpg?v=1575010861 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415_992x.jpg?v=1575010861 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415.jpg?v=1575010861 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415_370x.jpg?v=1575010861 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div><div class="product__media-item" data-media-id="popular-4397823623231-5824549060671">
                                <a href="/products/over-ear-usb-headset" title="Over-Ear USB Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21_493x.jpg?v=1575010861 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21_600x.jpg?v=1575010861 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21_713x.jpg?v=1575010861 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21_823x.jpg?v=1575010861 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21_992x.jpg?v=1575010861 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21.jpg?v=1575010861 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21_370x.jpg?v=1575010861 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div><div class="product__media-item" data-media-id="popular-4397823623231-5824549093439">
                                <a href="/products/over-ear-usb-headset" title="Over-Ear USB Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22_493x.jpg?v=1575010861 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22_600x.jpg?v=1575010861 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22_713x.jpg?v=1575010861 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22_823x.jpg?v=1575010861 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22_992x.jpg?v=1575010861 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22.jpg?v=1575010861 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22_370x.jpg?v=1575010861 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div></div>
                
<div class="card__badge"><span>Sale</span></div>

        </div> 
        <div class="wbproductdes col-8 cless">

            
<h3 class="product-title"><a href="/products/over-ear-usb-headset" >Over-Ear USB Headset</a></h3>
            <span class="caption-large light"></span><div id="ProductInfo-popular-4397823623231" ><div class="wbhrating">
                            
                            <div class="rating" role="img" aria-label="2.0 out of 5.0 stars">
                                <span aria-hidden="true" class="rating-star" style="--rating: 2; --rating-max: 5.0; --rating-decimal: 0;"></span>
                            </div>
                            <p class="rating-text caption">
                                <span aria-hidden="true">2.0 / 5.0</span>
                            </p>
                            <p class="rating-count caption">
                                <span aria-hidden="true">(1)</span>
                                <span class="visually-hidden">1 total reviews</span>
                            </p>
                        </div><div class="no-js-hidden wbhprice" id="price-popular-4397823623231" role="status" >
<div class="price price--on-sale ">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 370.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 370.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              ? 450.00
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div>
                

            </div>

        </div>
    </div>
</div>
        </li>
        
        

        <li class="grid__item col-12 cless list-unstyled">
          
<div class="card-wrapper wbproduct-container">
    <div class="row rless">
        <div class="wbimgblock col-4 cless">
                <div id="webipro-popular-4397811597375" class="card__media"><div class="product__media-item" data-media-id="popular-4397811597375-5824506331199">
                            <a href="/products/smartphone-16gb-blue" title="Smartphone 16GB Blue" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                <img class="img-fluid mx-auto" 
                               srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35_493x.jpg?v=1575010481 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35_600x.jpg?v=1575010481 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35_713x.jpg?v=1575010481 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35_823x.jpg?v=1575010481 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35_992x.jpg?v=1575010481 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35.jpg?v=1575010481 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35_370x.jpg?v=1575010481 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                loading="lazy"
                                width="1000"
                                height="1000"
                                alt="">
                            </a>
                            
                        </div><div class="product__media-item" data-media-id="popular-4397811597375-5824504889407">
                                <a href="/products/smartphone-16gb-blue" title="Smartphone 16GB Blue" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5_493x.jpg?v=1575010481 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5_600x.jpg?v=1575010481 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5_713x.jpg?v=1575010481 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5_823x.jpg?v=1575010481 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5_992x.jpg?v=1575010481 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5.jpg?v=1575010481 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5_370x.jpg?v=1575010481 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div><div class="product__media-item" data-media-id="popular-4397811597375-5824504954943">
                                <a href="/products/smartphone-16gb-blue" title="Smartphone 16GB Blue" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7_493x.jpg?v=1575010481 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7_600x.jpg?v=1575010481 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7_713x.jpg?v=1575010481 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7_823x.jpg?v=1575010481 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7_992x.jpg?v=1575010481 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7.jpg?v=1575010481 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7_370x.jpg?v=1575010481 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div></div>
                
<div class="card__badge"></div>

        </div> 
        <div class="wbproductdes col-8 cless">

            
<h3 class="product-title"><a href="/products/smartphone-16gb-blue" >Smartphone 16GB Blue</a></h3>
            <span class="caption-large light"></span><div id="ProductInfo-popular-4397811597375" ><div class="wbhrating">
                            <div class="rating">
                                <span class="rating-star wbnorating"></span>
                            </div>
                            <p class="rating-count caption">
                                <span aria-hidden="true">(0)</span>
                            </p>
                        </div><div class="no-js-hidden wbhprice" id="price-popular-4397811597375" role="status" >
<div class="price">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 180.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 180.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div>
                

            </div>

        </div>
    </div>
</div>
        </li>
        
        </ul>
<ul class="twopro">
        <li class="grid__item col-12 cless list-unstyled">
          
<div class="card-wrapper wbproduct-container">
    <div class="row rless">
        <div class="wbimgblock col-4 cless">
                <div id="webipro-popular-4397850787903" class="card__media"><div class="product__media-item" data-media-id="popular-4397850787903-5824665878591">
                            <a href="/products/wireless-z-bluetooth-headset" title="Wireless Z Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                <img class="img-fluid mx-auto" 
                               srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32_493x.jpg?v=1575011635 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32_600x.jpg?v=1575011635 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32_713x.jpg?v=1575011635 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32_823x.jpg?v=1575011635 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32_992x.jpg?v=1575011635 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32.jpg?v=1575011635 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32_370x.jpg?v=1575011635 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                loading="lazy"
                                width="1000"
                                height="1000"
                                alt="">
                            </a>
                            
                        </div><div class="product__media-item" data-media-id="popular-4397850787903-5824665780287">
                                <a href="/products/wireless-z-bluetooth-headset" title="Wireless Z Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11_493x.jpg?v=1575011635 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11_600x.jpg?v=1575011635 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11_713x.jpg?v=1575011635 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11_823x.jpg?v=1575011635 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11_992x.jpg?v=1575011635 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11.jpg?v=1575011635 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11_370x.jpg?v=1575011635 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div><div class="product__media-item" data-media-id="popular-4397850787903-5824665845823">
                                <a href="/products/wireless-z-bluetooth-headset" title="Wireless Z Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31_493x.jpg?v=1575011635 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31_600x.jpg?v=1575011635 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31_713x.jpg?v=1575011635 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31_823x.jpg?v=1575011635 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31_992x.jpg?v=1575011635 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31.jpg?v=1575011635 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31_370x.jpg?v=1575011635 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div></div>
                
<div class="card__badge"><span>Sold out</span></div>

        </div> 
        <div class="wbproductdes col-8 cless">

            
<h3 class="product-title"><a href="/products/wireless-z-bluetooth-headset" >Wireless Z Bluetooth Headset</a></h3>
            <span class="caption-large light"></span><div id="ProductInfo-popular-4397850787903" ><div class="wbhrating">
                            <div class="rating">
                                <span class="rating-star wbnorating"></span>
                            </div>
                            <p class="rating-count caption">
                                <span aria-hidden="true">(0)</span>
                            </p>
                        </div><div class="no-js-hidden wbhprice" id="price-popular-4397850787903" role="status" >
<div class="price price--sold-out  price--on-sale ">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 350.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 350.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              ? 400.00
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div>
                

            </div>

        </div>
    </div>
</div>
        </li>
        
        

        <li class="grid__item col-12 cless list-unstyled">
          
<div class="card-wrapper wbproduct-container">
    <div class="row rless">
        <div class="wbimgblock col-4 cless">
                <div id="webipro-popular-4394542530623" class="card__media"><div class="product__media-item" data-media-id="popular-4394542530623-5824457343039">
                            <a href="/products/boat-rockerz-400-bluetooth-headset" title="BoAt Rockerz 400 Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                <img class="img-fluid mx-auto" 
                               srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4_493x.jpg?v=1575009824 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4_600x.jpg?v=1575009824 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4_713x.jpg?v=1575009824 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4_823x.jpg?v=1575009824 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4_992x.jpg?v=1575009824 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4.jpg?v=1575009824 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4_370x.jpg?v=1575009824 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                loading="lazy"
                                width="1000"
                                height="1000"
                                alt="">
                            </a>
                            
                        </div><div class="product__media-item" data-media-id="popular-4394542530623-5824457244735">
                                <a href="/products/boat-rockerz-400-bluetooth-headset" title="BoAt Rockerz 400 Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_493x.jpg?v=1575009824 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_600x.jpg?v=1575009824 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_713x.jpg?v=1575009824 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_823x.jpg?v=1575009824 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_992x.jpg?v=1575009824 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1.jpg?v=1575009824 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_370x.jpg?v=1575009824 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div><div class="product__media-item" data-media-id="popular-4394542530623-5824457277503">
                                <a href="/products/boat-rockerz-400-bluetooth-headset" title="BoAt Rockerz 400 Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2_493x.jpg?v=1575009824 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2_600x.jpg?v=1575009824 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2_713x.jpg?v=1575009824 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2_823x.jpg?v=1575009824 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2_992x.jpg?v=1575009824 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2.jpg?v=1575009824 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2_370x.jpg?v=1575009824 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div><div class="product__media-item" data-media-id="popular-4394542530623-5824458162239">
                                <a href="/products/boat-rockerz-400-bluetooth-headset" title="BoAt Rockerz 400 Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                    <img class="img-fluid mx-auto"
                                    srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15_493x.jpg?v=1575009836 493w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15_600x.jpg?v=1575009836 600w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15_713x.jpg?v=1575009836 713w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15_823x.jpg?v=1575009836 823w,
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15_992x.jpg?v=1575009836 992w,
                                      
                                      
                                      
                                      
                                      
                                      
                                      https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15.jpg?v=1575009836 1000w"
                                src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15_370x.jpg?v=1575009836 370w"
                                sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                    loading="lazy"
                                    width="1000"
                                    height="1000"
                                    alt="">
                                </a>
                                
                            </div></div>
                
<div class="card__badge"><span>Sale</span></div>

        </div> 
        <div class="wbproductdes col-8 cless">

            
<h3 class="product-title"><a href="/products/boat-rockerz-400-bluetooth-headset" >BoAt Rockerz 400 Bluetooth Headset</a></h3>
            <span class="caption-large light"></span><div id="ProductInfo-popular-4394542530623" ><div class="wbhrating">
                            <div class="rating">
                                <span class="rating-star wbnorating"></span>
                            </div>
                            <p class="rating-count caption">
                                <span aria-hidden="true">(0)</span>
                            </p>
                        </div><div class="no-js-hidden wbhprice" id="price-popular-4394542530623" role="status" >
<div class="price price--on-sale ">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 50.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 50.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              ? 100.00
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div>
                

            </div>

        </div>
    </div>
</div>
        </li>
        
        

      </div>   
    </div> 
</div>


</div>
                  
                  
                    <div id="shopify-section-secondleftbanner" class="shopify-section spaced-section"><div class="secleftbnr">
	<div class="beffect">
        <a href="/collections" title="Banners">
        
            <img loading="lazy" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/295x420.jpg?v=1648099761" alt="" class="img-fluid mx-auto" width="295" height="420"/>
        
        </a>
    </div>
    <div class="slefttxt">
    	<div class="slftff">
    		
	            <h5>new mobile</h5>
	        
	        
	            <h2>galaxy s10+</h2>
	        
	        
	        
	            <a href="/collections" class="btn btn-primary">Shop now<svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</a>
	        
        </div>
    </div>
</div>

</div>
                  
                  
                    <div id="shopify-section-testimonial" class="shopify-section spaced-section"><div class="testimonial leftpro">
    
        <div class="testi rless">
            
                <div class="cless col-12">
                    <div class="wbtestisub text-center">
                        <ul>
                          <li><svg viewBox="0 0 475.082 475.081">
  <path d="M164.45,219.27h-63.954c-7.614,0-14.087-2.664-19.417-7.994c-5.327-5.33-7.994-11.801-7.994-19.417v-9.132
      c0-20.177,7.139-37.401,21.416-51.678c14.276-14.272,31.503-21.411,51.678-21.411h18.271c4.948,0,9.229-1.809,12.847-5.424
      c3.616-3.617,5.424-7.898,5.424-12.847V54.819c0-4.948-1.809-9.233-5.424-12.85c-3.617-3.612-7.898-5.424-12.847-5.424h-18.271
      c-19.797,0-38.684,3.858-56.673,11.563c-17.987,7.71-33.545,18.132-46.68,31.267c-13.134,13.129-23.553,28.688-31.262,46.677
      C3.855,144.039,0,162.931,0,182.726v200.991c0,15.235,5.327,28.171,15.986,38.834c10.66,10.657,23.606,15.985,38.832,15.985
      h109.639c15.225,0,28.167-5.328,38.828-15.985c10.657-10.663,15.987-23.599,15.987-38.834V274.088
      c0-15.232-5.33-28.168-15.994-38.832C192.622,224.6,179.675,219.27,164.45,219.27z"></path>
    <path d="M459.103,235.256c-10.656-10.656-23.599-15.986-38.828-15.986h-63.953c-7.61,0-14.089-2.664-19.41-7.994
      c-5.332-5.33-7.994-11.801-7.994-19.417v-9.132c0-20.177,7.139-37.401,21.409-51.678c14.271-14.272,31.497-21.411,51.682-21.411
      h18.267c4.949,0,9.233-1.809,12.848-5.424c3.613-3.617,5.428-7.898,5.428-12.847V54.819c0-4.948-1.814-9.233-5.428-12.85
      c-3.614-3.612-7.898-5.424-12.848-5.424h-18.267c-19.808,0-38.691,3.858-56.685,11.563c-17.984,7.71-33.537,18.132-46.672,31.267
      c-13.135,13.129-23.559,28.688-31.265,46.677c-7.707,17.987-11.567,36.879-11.567,56.674v200.991
      c0,15.235,5.332,28.171,15.988,38.834c10.657,10.657,23.6,15.985,38.828,15.985h109.633c15.229,0,28.171-5.328,38.827-15.985
      c10.664-10.663,15.985-23.599,15.985-38.834V274.088C475.082,258.855,469.76,245.92,459.103,235.256z"></path>
</svg></li>
                            <li><img class="img-fluid max-auto" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/testi1_80x80.png?v=1614914299" alt=""></li>
                            <li>
                                
                                    <h3>ms. bella</h3>
                                
                                
                                    <h4>developer</h4>
                                
                                <span></span>
                            </li>
                        </ul>
                        
                            <p><p>Sed elit quam, iaculis the sed semper sit amet udin vitae nibh. at magna akal semper sema olatiup sema olatiup udin vitae.</p></p>
                        
                    </div>
                </div>
            
                <div class="cless col-12">
                    <div class="wbtestisub text-center">
                        <ul>
                          <li><svg viewBox="0 0 475.082 475.081">
  <path d="M164.45,219.27h-63.954c-7.614,0-14.087-2.664-19.417-7.994c-5.327-5.33-7.994-11.801-7.994-19.417v-9.132
      c0-20.177,7.139-37.401,21.416-51.678c14.276-14.272,31.503-21.411,51.678-21.411h18.271c4.948,0,9.229-1.809,12.847-5.424
      c3.616-3.617,5.424-7.898,5.424-12.847V54.819c0-4.948-1.809-9.233-5.424-12.85c-3.617-3.612-7.898-5.424-12.847-5.424h-18.271
      c-19.797,0-38.684,3.858-56.673,11.563c-17.987,7.71-33.545,18.132-46.68,31.267c-13.134,13.129-23.553,28.688-31.262,46.677
      C3.855,144.039,0,162.931,0,182.726v200.991c0,15.235,5.327,28.171,15.986,38.834c10.66,10.657,23.606,15.985,38.832,15.985
      h109.639c15.225,0,28.167-5.328,38.828-15.985c10.657-10.663,15.987-23.599,15.987-38.834V274.088
      c0-15.232-5.33-28.168-15.994-38.832C192.622,224.6,179.675,219.27,164.45,219.27z"></path>
    <path d="M459.103,235.256c-10.656-10.656-23.599-15.986-38.828-15.986h-63.953c-7.61,0-14.089-2.664-19.41-7.994
      c-5.332-5.33-7.994-11.801-7.994-19.417v-9.132c0-20.177,7.139-37.401,21.409-51.678c14.271-14.272,31.497-21.411,51.682-21.411
      h18.267c4.949,0,9.233-1.809,12.848-5.424c3.613-3.617,5.428-7.898,5.428-12.847V54.819c0-4.948-1.814-9.233-5.428-12.85
      c-3.614-3.612-7.898-5.424-12.848-5.424h-18.267c-19.808,0-38.691,3.858-56.685,11.563c-17.984,7.71-33.537,18.132-46.672,31.267
      c-13.135,13.129-23.559,28.688-31.265,46.677c-7.707,17.987-11.567,36.879-11.567,56.674v200.991
      c0,15.235,5.332,28.171,15.988,38.834c10.657,10.657,23.6,15.985,38.828,15.985h109.633c15.229,0,28.171-5.328,38.827-15.985
      c10.664-10.663,15.985-23.599,15.985-38.834V274.088C475.082,258.855,469.76,245.92,459.103,235.256z"></path>
</svg></li>
                            <li><img class="img-fluid max-auto" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/testi2_80x80.png?v=1614914299" alt=""></li>
                            <li>
                                
                                    <h3>mr. jhon deo</h3>
                                
                                
                                    <h4>developer</h4>
                                
                                <span></span>
                            </li>
                        </ul>
                        
                            <p><p>Sed elit quam, iaculis the sed semper sit amet udin vitae nibh. at magna akal semper sema olatiup sema olatiup udin vitae.</p></p>
                        
                    </div>
                </div>
            
                <div class="cless col-12">
                    <div class="wbtestisub text-center">
                        <ul>
                          <li><svg viewBox="0 0 475.082 475.081">
  <path d="M164.45,219.27h-63.954c-7.614,0-14.087-2.664-19.417-7.994c-5.327-5.33-7.994-11.801-7.994-19.417v-9.132
      c0-20.177,7.139-37.401,21.416-51.678c14.276-14.272,31.503-21.411,51.678-21.411h18.271c4.948,0,9.229-1.809,12.847-5.424
      c3.616-3.617,5.424-7.898,5.424-12.847V54.819c0-4.948-1.809-9.233-5.424-12.85c-3.617-3.612-7.898-5.424-12.847-5.424h-18.271
      c-19.797,0-38.684,3.858-56.673,11.563c-17.987,7.71-33.545,18.132-46.68,31.267c-13.134,13.129-23.553,28.688-31.262,46.677
      C3.855,144.039,0,162.931,0,182.726v200.991c0,15.235,5.327,28.171,15.986,38.834c10.66,10.657,23.606,15.985,38.832,15.985
      h109.639c15.225,0,28.167-5.328,38.828-15.985c10.657-10.663,15.987-23.599,15.987-38.834V274.088
      c0-15.232-5.33-28.168-15.994-38.832C192.622,224.6,179.675,219.27,164.45,219.27z"></path>
    <path d="M459.103,235.256c-10.656-10.656-23.599-15.986-38.828-15.986h-63.953c-7.61,0-14.089-2.664-19.41-7.994
      c-5.332-5.33-7.994-11.801-7.994-19.417v-9.132c0-20.177,7.139-37.401,21.409-51.678c14.271-14.272,31.497-21.411,51.682-21.411
      h18.267c4.949,0,9.233-1.809,12.848-5.424c3.613-3.617,5.428-7.898,5.428-12.847V54.819c0-4.948-1.814-9.233-5.428-12.85
      c-3.614-3.612-7.898-5.424-12.848-5.424h-18.267c-19.808,0-38.691,3.858-56.685,11.563c-17.984,7.71-33.537,18.132-46.672,31.267
      c-13.135,13.129-23.559,28.688-31.265,46.677c-7.707,17.987-11.567,36.879-11.567,56.674v200.991
      c0,15.235,5.332,28.171,15.988,38.834c10.657,10.657,23.6,15.985,38.828,15.985h109.633c15.229,0,28.171-5.328,38.827-15.985
      c10.664-10.663,15.985-23.599,15.985-38.834V274.088C475.082,258.855,469.76,245.92,459.103,235.256z"></path>
</svg></li>
                            <li><img class="img-fluid max-auto" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/testi3_80x80.png?v=1614914299" alt=""></li>
                            <li>
                                
                                    <h3>larry kinda</h3>
                                
                                
                                    <h4>developer</h4>
                                
                                <span></span>
                            </li>
                        </ul>
                        
                            <p><p>Sed elit quam, iaculis the sed semper sit amet udin vitae nibh. at magna akal semper sema olatiup sema olatiup udin vitae.</p></p>
                        
                    </div>
                </div>
            
        </div>
    
</div>
<style>
  .testimonial {
     background: #f5f5f5;
  }
</style>

</div>
                  
                  
                    <div id="shopify-section-bestproduct" class="shopify-section spaced-section"><link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-card.css?v=100729205794507640871679391631" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-price.css?v=75926142592083736931648449696" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-product-grid.css?v=139211915441709507551664166894" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-rating.css?v=149782489698461958261645685328" rel="stylesheet" type="text/css" media="all" />
<div class="bestproduct leftpro">
        <h2 class="heading text-left"><span>Best Products</span></h2>
        <div class="rless">
            <div class="wbbestp"> 
                
<ul class="twopro">
                        <li class="grid__item col-12 cless list-unstyled">
                            
<div class="card-wrapper wbproduct-container">
	<div class="card">
      <div class="wbimgblock">
              <div id="webipro-bestproduct-4397844955199" class="card__media"><div class="product__media-item" data-media-id="bestproduct-4397844955199-5824634093631">
                          <a href="/products/bl-go-plus-bluetooth-speaker" title="BL Go PLUS Bluetooth Speaker" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                              <img class="img-fluid mx-auto" 
                              srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/38_493x.jpg?v=1575011477 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/38_600x.jpg?v=1575011477 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/38_713x.jpg?v=1575011477 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/38_823x.jpg?v=1575011477 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/38_992x.jpg?v=1575011477 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/38.jpg?v=1575011477 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/38_370x.jpg?v=1575011477 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                              loading="lazy"
                              width="1000"
                              height="1000"
                              alt="">
                          </a>
                          
                      </div><div class="product__media-item" data-media-id="bestproduct-4397844955199-5824634060863">
                              <a href="/products/bl-go-plus-bluetooth-speaker" title="BL Go PLUS Bluetooth Speaker" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/37_493x.jpg?v=1575011477 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/37_600x.jpg?v=1575011477 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/37_713x.jpg?v=1575011477 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/37_823x.jpg?v=1575011477 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/37_992x.jpg?v=1575011477 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/37.jpg?v=1575011477 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/37_370x.jpg?v=1575011477 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div></div>
              
<div class="card__badge"></div>

      </div>


      <div class="wbproductdes">

        
<h3 class="product-title"><a href="/products/bl-go-plus-bluetooth-speaker" >BL Go PLUS Bluetooth Speaker</a></h3>
        <span class="caption-large light"></span><div id="ProductInfo-bestproduct-4397844955199" ><div class="wbhrating">
                        
                        <div class="rating" role="img" aria-label="3.6 out of 5.0 stars">
                            <span aria-hidden="true" class="rating-star" style="--rating: 3; --rating-max: 5.0; --rating-decimal: 0.5;"></span>
                        </div>
                        <p class="rating-text caption">
                            <span aria-hidden="true">3.6 / 5.0</span>
                        </p>
                        <p class="rating-count caption">
                            <span aria-hidden="true">(5)</span>
                            <span class="visually-hidden">5 total reviews</span>
                        </p>
                    </div><div class="no-js-hidden wbhprice" id="price-bestproduct-4397844955199" role="status" >
<div class="price">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 100.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 100.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div><select name="id" id="Variants-bestproduct-4397844955199" class="select__select no-js" form="product-form-bestproduct-4397844955199"><option data-v-title="Blue"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 100.00"
                    data-cprice="" 
                    selected="selected"
                     value="31374865629247">
                        Blue

                    - ? 100.00
                    </option><option data-v-title="Gray"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 100.00"
                    data-cprice="" 
                    
                     value="31374865662015">
                        Gray

                    - ? 100.00
                    </option></select>

            <product-form class="product-form">
                <div class="button-group">
                    <div class="wbquicksuccess hidden" hidden><i class="fa fa-check-circle" aria-hidden="true"></i> Your item is successfully added to the Cart!!</div>
                    <div class="product-form__error-message-wrapper" role="alert" hidden>
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error" viewBox="0 0 13 13">
                        <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
                        <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
                        <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
                        <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                        </svg>
                        <span class="product-form__error-message"></span>
                    </div>

                    
<form method="post" action="/cart/add" id="product-form-bestproduct-4397844955199" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="?" /><input type="hidden" name="id" value="31374865629247" disabled>
                        <button type="submit" name="add" class="cartb product-form__submit button" aria-label="Add to cart" ><svg viewBox="0 0 459.529 459.529">
  <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
    <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
    <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
</svg><span>Add to cart</span><div class="loading-overlay__spinner hidden">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                            </div>
                        </button></form>
                    <div class="wbwish">
                        
                            
                                <a class="wbwishremove wishlist" href="javascript:void(0)" data-product-handle="bl-go-plus-bluetooth-speaker">
                                    <svg viewBox="0 0 129 129">
  <path d="m121.6,40.1c-3.3-16.6-15.1-27.3-30.3-27.3-8.5,0-17.7,3.5-26.7,10.1-9.1-6.8-18.3-10.3-26.9-10.3-15.2,0-27.1,10.8-30.3,27.6-4.8,24.9 10.6,58 55.7,76 0.5,0.2 1,0.3 1.5,0.3 0.5,0 1-0.1 1.5-0.3 45-18.4 60.3-51.4 55.5-76.1zm-57,67.9c-39.6-16.4-53.3-45-49.2-66.3 2.4-12.7 11.2-21 22.3-21 7.5,0 15.9,3.6 24.3,10.5 1.5,1.2 3.6,1.2 5.1,0 8.4-6.7 16.7-10.2 24.2-10.2 11.1,0 19.8,8.1 22.3,20.7 4.1,21.1-9.5,49.6-49,66.3z"></path>
</svg><span class="wbaddwish">Add To Wishlist</span>
                                    <span class="wbloadtowish wishanimated"><i class="fa fa-refresh"></i></span>
                                    <span class="wbwishirmv" title="Remove Wishlist"><i class="fa fa-remove"></i><span class="wbremovewish">Remove Wishlist</span></span>
                                </a>  
                            
                        
                    </div>
                    
                    <div class="wbqvtop">
                        <button class="focus-inset wbquickv quick_shop js-wbquickview-link" aria-label="Quick view" data-id="4397844955199" data-url="/products/bl-go-plus-bluetooth-speaker"><svg viewBox="0 0 459.529 459.529">
        <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
    <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
</svg><span>Quick view</span></button>
                    </div>

                    
                </div>
            </product-form>
            

        </div>

    </div>
    </div>

</div>
                        </li>
                    
                    

                        <li class="grid__item col-12 cless list-unstyled">
                            
<div class="card-wrapper wbproduct-container">
	<div class="card">
      <div class="wbimgblock">
              <div id="webipro-bestproduct-4397860585535" class="card__media"><div class="product__media-item" data-media-id="bestproduct-4397860585535-5824692715583">
                          <a href="/products/bajaj-gx1-500-w-camera" title="Bajaj GX1 500 W Camera" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                              <img class="img-fluid mx-auto" 
                              srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45_493x.jpg?v=1575011947 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45_600x.jpg?v=1575011947 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45_713x.jpg?v=1575011947 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45_823x.jpg?v=1575011947 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45_992x.jpg?v=1575011947 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45.jpg?v=1575011947 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/45_370x.jpg?v=1575011947 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                              loading="lazy"
                              width="1000"
                              height="1000"
                              alt="">
                          </a>
                          
                      </div><div class="product__media-item" data-media-id="bestproduct-4397860585535-5824692748351">
                              <a href="/products/bajaj-gx1-500-w-camera" title="Bajaj GX1 500 W Camera" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46_493x.jpg?v=1575011947 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46_600x.jpg?v=1575011947 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46_713x.jpg?v=1575011947 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46_823x.jpg?v=1575011947 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46_992x.jpg?v=1575011947 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46.jpg?v=1575011947 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/46_370x.jpg?v=1575011947 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div></div>
              
<div class="card__badge"><span>Sale</span></div>

      </div>


      <div class="wbproductdes">

        
<h3 class="product-title"><a href="/products/bajaj-gx1-500-w-camera" >Bajaj GX1 500 W Camera</a></h3>
        <span class="caption-large light"></span><div id="ProductInfo-bestproduct-4397860585535" ><div class="wbhrating">
                        
                        <div class="rating" role="img" aria-label="5.0 out of 5.0 stars">
                            <span aria-hidden="true" class="rating-star" style="--rating: 5; --rating-max: 5.0; --rating-decimal: 0;"></span>
                        </div>
                        <p class="rating-text caption">
                            <span aria-hidden="true">5.0 / 5.0</span>
                        </p>
                        <p class="rating-count caption">
                            <span aria-hidden="true">(3)</span>
                            <span class="visually-hidden">3 total reviews</span>
                        </p>
                    </div><div class="no-js-hidden wbhprice" id="price-bestproduct-4397860585535" role="status" >
<div class="price price--on-sale ">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 450.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 450.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              ? 650.00
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div><select name="id" id="Variants-bestproduct-4397860585535" class="select__select no-js" form="product-form-bestproduct-4397860585535"><option data-v-title="Blue"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 450.00"
                    data-cprice="? 650.00" 
                    selected="selected"
                     value="31374910324799">
                        Blue

                    - ? 450.00
                    </option><option data-v-title="Pink"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 450.00"
                    data-cprice="" 
                    
                     value="31374910390335">
                        Pink

                    - ? 450.00
                    </option></select>

            <product-form class="product-form">
                <div class="button-group">
                    <div class="wbquicksuccess hidden" hidden><i class="fa fa-check-circle" aria-hidden="true"></i> Your item is successfully added to the Cart!!</div>
                    <div class="product-form__error-message-wrapper" role="alert" hidden>
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error" viewBox="0 0 13 13">
                        <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
                        <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
                        <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
                        <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                        </svg>
                        <span class="product-form__error-message"></span>
                    </div>

                    
<form method="post" action="/cart/add" id="product-form-bestproduct-4397860585535" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="?" /><input type="hidden" name="id" value="31374910324799" disabled>
                        <button type="submit" name="add" class="cartb product-form__submit button" aria-label="Add to cart" ><svg viewBox="0 0 459.529 459.529">
  <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
    <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
    <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
</svg><span>Add to cart</span><div class="loading-overlay__spinner hidden">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                            </div>
                        </button></form>
                    <div class="wbwish">
                        
                            
                                <a class="wbwishremove wishlist" href="javascript:void(0)" data-product-handle="bajaj-gx1-500-w-camera">
                                    <svg viewBox="0 0 129 129">
  <path d="m121.6,40.1c-3.3-16.6-15.1-27.3-30.3-27.3-8.5,0-17.7,3.5-26.7,10.1-9.1-6.8-18.3-10.3-26.9-10.3-15.2,0-27.1,10.8-30.3,27.6-4.8,24.9 10.6,58 55.7,76 0.5,0.2 1,0.3 1.5,0.3 0.5,0 1-0.1 1.5-0.3 45-18.4 60.3-51.4 55.5-76.1zm-57,67.9c-39.6-16.4-53.3-45-49.2-66.3 2.4-12.7 11.2-21 22.3-21 7.5,0 15.9,3.6 24.3,10.5 1.5,1.2 3.6,1.2 5.1,0 8.4-6.7 16.7-10.2 24.2-10.2 11.1,0 19.8,8.1 22.3,20.7 4.1,21.1-9.5,49.6-49,66.3z"></path>
</svg><span class="wbaddwish">Add To Wishlist</span>
                                    <span class="wbloadtowish wishanimated"><i class="fa fa-refresh"></i></span>
                                    <span class="wbwishirmv" title="Remove Wishlist"><i class="fa fa-remove"></i><span class="wbremovewish">Remove Wishlist</span></span>
                                </a>  
                            
                        
                    </div>
                    
                    <div class="wbqvtop">
                        <button class="focus-inset wbquickv quick_shop js-wbquickview-link" aria-label="Quick view" data-id="4397860585535" data-url="/products/bajaj-gx1-500-w-camera"><svg viewBox="0 0 459.529 459.529">
        <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
    <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
</svg><span>Quick view</span></button>
                    </div>

                    
                </div>
            </product-form>
            

        </div>

    </div>
    </div>

</div>
                        </li>
                    
                    </ul>
<ul class="twopro">
                        <li class="grid__item col-12 cless list-unstyled">
                            
<div class="card-wrapper wbproduct-container">
	<div class="card">
      <div class="wbimgblock">
              <div id="webipro-bestproduct-4397828571199" class="card__media"><div class="product__media-item" data-media-id="bestproduct-4397828571199-5824576487487">
                          <a href="/products/rdp-smart-laptops" title="RDP smart laptops" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                              <img class="img-fluid mx-auto" 
                              srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9_493x.jpg?v=1575011120 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9_600x.jpg?v=1575011120 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9_713x.jpg?v=1575011120 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9_823x.jpg?v=1575011120 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9_992x.jpg?v=1575011120 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9.jpg?v=1575011120 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/9_370x.jpg?v=1575011120 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                              loading="lazy"
                              width="1000"
                              height="1000"
                              alt="">
                          </a>
                          
                      </div><div class="product__media-item" data-media-id="bestproduct-4397828571199-5824594116671">
                              <a href="/products/rdp-smart-laptops" title="RDP smart laptops" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_493x.jpg?v=1575011120 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_600x.jpg?v=1575011120 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_713x.jpg?v=1575011120 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_823x.jpg?v=1575011120 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_992x.jpg?v=1575011120 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14.jpg?v=1575011120 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_370x.jpg?v=1575011120 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div></div>
              
<div class="card__badge"></div>

      </div>


      <div class="wbproductdes">

        
<h3 class="product-title"><a href="/products/rdp-smart-laptops" >RDP smart laptops</a></h3>
        <span class="caption-large light"></span><div id="ProductInfo-bestproduct-4397828571199" ><div class="wbhrating">
                        <div class="rating">
                            <span class="rating-star wbnorating"></span>
                        </div>
                        <p class="rating-count caption">
                            <span aria-hidden="true">(0)</span>
                        </p>
                    </div><div class="no-js-hidden wbhprice" id="price-bestproduct-4397828571199" role="status" >
<div class="price">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 550.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 550.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div><select name="id" id="Variants-bestproduct-4397828571199" class="select__select no-js" form="product-form-bestproduct-4397828571199"><option data-v-title="Gray"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 550.00"
                    data-cprice="" 
                    selected="selected"
                     value="39636975550527">
                        Gray

                    - ? 550.00
                    </option><option data-v-title="Blue"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 550.00"
                    data-cprice="" 
                    
                    disabled value="39636975583295">
                        Blue
 - Sold out
                    - ? 550.00
                    </option></select>

            <product-form class="product-form">
                <div class="button-group">
                    <div class="wbquicksuccess hidden" hidden><i class="fa fa-check-circle" aria-hidden="true"></i> Your item is successfully added to the Cart!!</div>
                    <div class="product-form__error-message-wrapper" role="alert" hidden>
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error" viewBox="0 0 13 13">
                        <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
                        <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
                        <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
                        <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                        </svg>
                        <span class="product-form__error-message"></span>
                    </div>

                    
<form method="post" action="/cart/add" id="product-form-bestproduct-4397828571199" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="?" /><input type="hidden" name="id" value="39636975550527" disabled>
                        <button type="submit" name="add" class="cartb product-form__submit button" aria-label="Add to cart" ><svg viewBox="0 0 459.529 459.529">
  <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
    <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
    <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
</svg><span>Add to cart</span><div class="loading-overlay__spinner hidden">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                            </div>
                        </button></form>
                    <div class="wbwish">
                        
                            
                                <a class="wbwishremove wishlist" href="javascript:void(0)" data-product-handle="rdp-smart-laptops">
                                    <svg viewBox="0 0 129 129">
  <path d="m121.6,40.1c-3.3-16.6-15.1-27.3-30.3-27.3-8.5,0-17.7,3.5-26.7,10.1-9.1-6.8-18.3-10.3-26.9-10.3-15.2,0-27.1,10.8-30.3,27.6-4.8,24.9 10.6,58 55.7,76 0.5,0.2 1,0.3 1.5,0.3 0.5,0 1-0.1 1.5-0.3 45-18.4 60.3-51.4 55.5-76.1zm-57,67.9c-39.6-16.4-53.3-45-49.2-66.3 2.4-12.7 11.2-21 22.3-21 7.5,0 15.9,3.6 24.3,10.5 1.5,1.2 3.6,1.2 5.1,0 8.4-6.7 16.7-10.2 24.2-10.2 11.1,0 19.8,8.1 22.3,20.7 4.1,21.1-9.5,49.6-49,66.3z"></path>
</svg><span class="wbaddwish">Add To Wishlist</span>
                                    <span class="wbloadtowish wishanimated"><i class="fa fa-refresh"></i></span>
                                    <span class="wbwishirmv" title="Remove Wishlist"><i class="fa fa-remove"></i><span class="wbremovewish">Remove Wishlist</span></span>
                                </a>  
                            
                        
                    </div>
                    
                    <div class="wbqvtop">
                        <button class="focus-inset wbquickv quick_shop js-wbquickview-link" aria-label="Quick view" data-id="4397828571199" data-url="/products/rdp-smart-laptops"><svg viewBox="0 0 459.529 459.529">
        <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
    <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
</svg><span>Quick view</span></button>
                    </div>

                    
                </div>
            </product-form>
            

        </div>

    </div>
    </div>

</div>
                        </li>
                    
                    

                        <li class="grid__item col-12 cless list-unstyled">
                            
<div class="card-wrapper wbproduct-container">
	<div class="card">
      <div class="wbimgblock">
              <div id="webipro-bestproduct-4397838598207" class="card__media"><div class="product__media-item" data-media-id="bestproduct-4397838598207-5824614301759">
                          <a href="/products/15-core-i5-8th-gen-led-tv" title="15 Core I5 8th Gen LED TV" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                              <img class="img-fluid mx-auto" 
                              srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441_493x.jpg?v=1575011285 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441_600x.jpg?v=1575011285 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441_713x.jpg?v=1575011285 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441_823x.jpg?v=1575011285 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441_992x.jpg?v=1575011285 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441.jpg?v=1575011285 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/14_bf0759e6-9a83-402e-a87a-c7c9ca796441_370x.jpg?v=1575011285 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                              loading="lazy"
                              width="1000"
                              height="1000"
                              alt="">
                          </a>
                          
                      </div><div class="product__media-item" data-media-id="bestproduct-4397838598207-5824614268991">
                              <a href="/products/15-core-i5-8th-gen-led-tv" title="15 Core I5 8th Gen LED TV" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787_493x.jpg?v=1575011285 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787_600x.jpg?v=1575011285 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787_713x.jpg?v=1575011285 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787_823x.jpg?v=1575011285 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787_992x.jpg?v=1575011285 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787.jpg?v=1575011285 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/13_16a493b7-9dda-4974-a974-3c4b39e97787_370x.jpg?v=1575011285 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div><div class="product__media-item" data-media-id="bestproduct-4397838598207-5824614334527">
                              <a href="/products/15-core-i5-8th-gen-led-tv" title="15 Core I5 8th Gen LED TV" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33_493x.jpg?v=1575011285 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33_600x.jpg?v=1575011285 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33_713x.jpg?v=1575011285 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33_823x.jpg?v=1575011285 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33_992x.jpg?v=1575011285 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33.jpg?v=1575011285 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/33_370x.jpg?v=1575011285 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div></div>
              
<div class="card__badge"><span>Sale</span></div>

      </div>


      <div class="wbproductdes">

        
<h3 class="product-title"><a href="/products/15-core-i5-8th-gen-led-tv" >15 Core I5 8th Gen LED TV</a></h3>
        <span class="caption-large light"></span><div id="ProductInfo-bestproduct-4397838598207" ><div class="wbhrating">
                        <div class="rating">
                            <span class="rating-star wbnorating"></span>
                        </div>
                        <p class="rating-count caption">
                            <span aria-hidden="true">(0)</span>
                        </p>
                    </div><div class="no-js-hidden wbhprice" id="price-bestproduct-4397838598207" role="status" >
<div class="price price--on-sale ">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 350.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 350.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              ? 400.00
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div><select name="id" id="Variants-bestproduct-4397838598207" class="select__select no-js" form="product-form-bestproduct-4397838598207"><option data-v-title="Black"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 350.00"
                    data-cprice="? 400.00" 
                    selected="selected"
                     value="39636973879359">
                        Black

                    - ? 350.00
                    </option><option data-v-title="Blue"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 350.00"
                    data-cprice="? 400.00" 
                    
                    disabled value="39636973912127">
                        Blue
 - Sold out
                    - ? 350.00
                    </option></select>

            <product-form class="product-form">
                <div class="button-group">
                    <div class="wbquicksuccess hidden" hidden><i class="fa fa-check-circle" aria-hidden="true"></i> Your item is successfully added to the Cart!!</div>
                    <div class="product-form__error-message-wrapper" role="alert" hidden>
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error" viewBox="0 0 13 13">
                        <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
                        <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
                        <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
                        <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                        </svg>
                        <span class="product-form__error-message"></span>
                    </div>

                    
<form method="post" action="/cart/add" id="product-form-bestproduct-4397838598207" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="?" /><input type="hidden" name="id" value="39636973879359" disabled>
                        <button type="submit" name="add" class="cartb product-form__submit button" aria-label="Add to cart" ><svg viewBox="0 0 459.529 459.529">
  <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
    <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
    <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
</svg><span>Add to cart</span><div class="loading-overlay__spinner hidden">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                            </div>
                        </button></form>
                    <div class="wbwish">
                        
                            
                                <a class="wbwishremove wishlist" href="javascript:void(0)" data-product-handle="15-core-i5-8th-gen-led-tv">
                                    <svg viewBox="0 0 129 129">
  <path d="m121.6,40.1c-3.3-16.6-15.1-27.3-30.3-27.3-8.5,0-17.7,3.5-26.7,10.1-9.1-6.8-18.3-10.3-26.9-10.3-15.2,0-27.1,10.8-30.3,27.6-4.8,24.9 10.6,58 55.7,76 0.5,0.2 1,0.3 1.5,0.3 0.5,0 1-0.1 1.5-0.3 45-18.4 60.3-51.4 55.5-76.1zm-57,67.9c-39.6-16.4-53.3-45-49.2-66.3 2.4-12.7 11.2-21 22.3-21 7.5,0 15.9,3.6 24.3,10.5 1.5,1.2 3.6,1.2 5.1,0 8.4-6.7 16.7-10.2 24.2-10.2 11.1,0 19.8,8.1 22.3,20.7 4.1,21.1-9.5,49.6-49,66.3z"></path>
</svg><span class="wbaddwish">Add To Wishlist</span>
                                    <span class="wbloadtowish wishanimated"><i class="fa fa-refresh"></i></span>
                                    <span class="wbwishirmv" title="Remove Wishlist"><i class="fa fa-remove"></i><span class="wbremovewish">Remove Wishlist</span></span>
                                </a>  
                            
                        
                    </div>
                    
                    <div class="wbqvtop">
                        <button class="focus-inset wbquickv quick_shop js-wbquickview-link" aria-label="Quick view" data-id="4397838598207" data-url="/products/15-core-i5-8th-gen-led-tv"><svg viewBox="0 0 459.529 459.529">
        <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
    <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
</svg><span>Quick view</span></button>
                    </div>

                    
                </div>
            </product-form>
            

        </div>

    </div>
    </div>

</div>
                        </li>
                    
                    </ul>
<ul class="twopro">
                        <li class="grid__item col-12 cless list-unstyled">
                            
<div class="card-wrapper wbproduct-container">
	<div class="card">
      <div class="wbimgblock">
              <div id="webipro-bestproduct-4397823623231" class="card__media"><div class="product__media-item" data-media-id="bestproduct-4397823623231-5824549126207">
                          <a href="/products/over-ear-usb-headset" title="Over-Ear USB Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                              <img class="img-fluid mx-auto" 
                              srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d_493x.jpg?v=1575010861 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d_600x.jpg?v=1575010861 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d_713x.jpg?v=1575010861 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d_823x.jpg?v=1575010861 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d_992x.jpg?v=1575010861 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d.jpg?v=1575010861 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_2d88be7f-cd06-4a67-b305-8a89a6cf836d_370x.jpg?v=1575010861 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                              loading="lazy"
                              width="1000"
                              height="1000"
                              alt="">
                          </a>
                          
                      </div><div class="product__media-item" data-media-id="bestproduct-4397823623231-5824548995135">
                              <a href="/products/over-ear-usb-headset" title="Over-Ear USB Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415_493x.jpg?v=1575010861 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415_600x.jpg?v=1575010861 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415_713x.jpg?v=1575010861 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415_823x.jpg?v=1575010861 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415_992x.jpg?v=1575010861 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415.jpg?v=1575010861 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/3_8460d232-8437-466e-a106-f00839901415_370x.jpg?v=1575010861 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div><div class="product__media-item" data-media-id="bestproduct-4397823623231-5824549060671">
                              <a href="/products/over-ear-usb-headset" title="Over-Ear USB Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21_493x.jpg?v=1575010861 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21_600x.jpg?v=1575010861 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21_713x.jpg?v=1575010861 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21_823x.jpg?v=1575010861 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21_992x.jpg?v=1575010861 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21.jpg?v=1575010861 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/21_370x.jpg?v=1575010861 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div><div class="product__media-item" data-media-id="bestproduct-4397823623231-5824549093439">
                              <a href="/products/over-ear-usb-headset" title="Over-Ear USB Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22_493x.jpg?v=1575010861 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22_600x.jpg?v=1575010861 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22_713x.jpg?v=1575010861 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22_823x.jpg?v=1575010861 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22_992x.jpg?v=1575010861 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22.jpg?v=1575010861 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/22_370x.jpg?v=1575010861 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div></div>
              
<div class="card__badge"><span>Sale</span></div>

      </div>


      <div class="wbproductdes">

        
<h3 class="product-title"><a href="/products/over-ear-usb-headset" >Over-Ear USB Headset</a></h3>
        <span class="caption-large light"></span><div id="ProductInfo-bestproduct-4397823623231" ><div class="wbhrating">
                        
                        <div class="rating" role="img" aria-label="2.0 out of 5.0 stars">
                            <span aria-hidden="true" class="rating-star" style="--rating: 2; --rating-max: 5.0; --rating-decimal: 0;"></span>
                        </div>
                        <p class="rating-text caption">
                            <span aria-hidden="true">2.0 / 5.0</span>
                        </p>
                        <p class="rating-count caption">
                            <span aria-hidden="true">(1)</span>
                            <span class="visually-hidden">1 total reviews</span>
                        </p>
                    </div><div class="no-js-hidden wbhprice" id="price-bestproduct-4397823623231" role="status" >
<div class="price price--on-sale ">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 370.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 370.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              ? 450.00
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div><select name="id" id="Variants-bestproduct-4397823623231" class="select__select no-js" form="product-form-bestproduct-4397823623231"><option data-v-title="White"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 370.00"
                    data-cprice="? 450.00" 
                    selected="selected"
                     value="31374808023103">
                        White

                    - ? 370.00
                    </option><option data-v-title="Black"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 320.00"
                    data-cprice="? 600.00" 
                    
                     value="31374808055871">
                        Black

                    - ? 320.00
                    </option><option data-v-title="Pink"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 420.00"
                    data-cprice="? 500.00" 
                    
                     value="31374808088639">
                        Pink

                    - ? 420.00
                    </option></select>

            <product-form class="product-form">
                <div class="button-group">
                    <div class="wbquicksuccess hidden" hidden><i class="fa fa-check-circle" aria-hidden="true"></i> Your item is successfully added to the Cart!!</div>
                    <div class="product-form__error-message-wrapper" role="alert" hidden>
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error" viewBox="0 0 13 13">
                        <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
                        <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
                        <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
                        <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                        </svg>
                        <span class="product-form__error-message"></span>
                    </div>

                    
<form method="post" action="/cart/add" id="product-form-bestproduct-4397823623231" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="?" /><input type="hidden" name="id" value="31374808023103" disabled>
                        <button type="submit" name="add" class="cartb product-form__submit button" aria-label="Add to cart" ><svg viewBox="0 0 459.529 459.529">
  <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
    <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
    <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
</svg><span>Add to cart</span><div class="loading-overlay__spinner hidden">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                            </div>
                        </button></form>
                    <div class="wbwish">
                        
                            
                                <a class="wbwishremove wishlist" href="javascript:void(0)" data-product-handle="over-ear-usb-headset">
                                    <svg viewBox="0 0 129 129">
  <path d="m121.6,40.1c-3.3-16.6-15.1-27.3-30.3-27.3-8.5,0-17.7,3.5-26.7,10.1-9.1-6.8-18.3-10.3-26.9-10.3-15.2,0-27.1,10.8-30.3,27.6-4.8,24.9 10.6,58 55.7,76 0.5,0.2 1,0.3 1.5,0.3 0.5,0 1-0.1 1.5-0.3 45-18.4 60.3-51.4 55.5-76.1zm-57,67.9c-39.6-16.4-53.3-45-49.2-66.3 2.4-12.7 11.2-21 22.3-21 7.5,0 15.9,3.6 24.3,10.5 1.5,1.2 3.6,1.2 5.1,0 8.4-6.7 16.7-10.2 24.2-10.2 11.1,0 19.8,8.1 22.3,20.7 4.1,21.1-9.5,49.6-49,66.3z"></path>
</svg><span class="wbaddwish">Add To Wishlist</span>
                                    <span class="wbloadtowish wishanimated"><i class="fa fa-refresh"></i></span>
                                    <span class="wbwishirmv" title="Remove Wishlist"><i class="fa fa-remove"></i><span class="wbremovewish">Remove Wishlist</span></span>
                                </a>  
                            
                        
                    </div>
                    
                    <div class="wbqvtop">
                        <button class="focus-inset wbquickv quick_shop js-wbquickview-link" aria-label="Quick view" data-id="4397823623231" data-url="/products/over-ear-usb-headset"><svg viewBox="0 0 459.529 459.529">
        <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
    <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
</svg><span>Quick view</span></button>
                    </div>

                    
                </div>
            </product-form>
            

        </div>

    </div>
    </div>

</div>
                        </li>
                    
                    

                        <li class="grid__item col-12 cless list-unstyled">
                            
<div class="card-wrapper wbproduct-container">
	<div class="card">
      <div class="wbimgblock">
              <div id="webipro-bestproduct-4397811597375" class="card__media"><div class="product__media-item" data-media-id="bestproduct-4397811597375-5824506331199">
                          <a href="/products/smartphone-16gb-blue" title="Smartphone 16GB Blue" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                              <img class="img-fluid mx-auto" 
                              srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35_493x.jpg?v=1575010481 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35_600x.jpg?v=1575010481 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35_713x.jpg?v=1575010481 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35_823x.jpg?v=1575010481 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35_992x.jpg?v=1575010481 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35.jpg?v=1575010481 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/35_370x.jpg?v=1575010481 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                              loading="lazy"
                              width="1000"
                              height="1000"
                              alt="">
                          </a>
                          
                      </div><div class="product__media-item" data-media-id="bestproduct-4397811597375-5824504889407">
                              <a href="/products/smartphone-16gb-blue" title="Smartphone 16GB Blue" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5_493x.jpg?v=1575010481 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5_600x.jpg?v=1575010481 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5_713x.jpg?v=1575010481 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5_823x.jpg?v=1575010481 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5_992x.jpg?v=1575010481 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5.jpg?v=1575010481 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/5_370x.jpg?v=1575010481 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div><div class="product__media-item" data-media-id="bestproduct-4397811597375-5824504954943">
                              <a href="/products/smartphone-16gb-blue" title="Smartphone 16GB Blue" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7_493x.jpg?v=1575010481 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7_600x.jpg?v=1575010481 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7_713x.jpg?v=1575010481 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7_823x.jpg?v=1575010481 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7_992x.jpg?v=1575010481 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7.jpg?v=1575010481 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/7_370x.jpg?v=1575010481 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div></div>
              
<div class="card__badge"></div>

      </div>


      <div class="wbproductdes">

        
<h3 class="product-title"><a href="/products/smartphone-16gb-blue" >Smartphone 16GB Blue</a></h3>
        <span class="caption-large light"></span><div id="ProductInfo-bestproduct-4397811597375" ><div class="wbhrating">
                        <div class="rating">
                            <span class="rating-star wbnorating"></span>
                        </div>
                        <p class="rating-count caption">
                            <span aria-hidden="true">(0)</span>
                        </p>
                    </div><div class="no-js-hidden wbhprice" id="price-bestproduct-4397811597375" role="status" >
<div class="price">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 180.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 180.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div><select name="id" id="Variants-bestproduct-4397811597375" class="select__select no-js" form="product-form-bestproduct-4397811597375"><option data-v-title="s / Red"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 180.00"
                    data-cprice="" 
                    selected="selected"
                     value="31374782693439">
                        s / Red

                    - ? 180.00
                    </option><option data-v-title="s / Blue"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 180.00"
                    data-cprice="" 
                    
                     value="31374782758975">
                        s / Blue

                    - ? 180.00
                    </option><option data-v-title="s / Purple"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 180.00"
                    data-cprice="" 
                    
                     value="31374782824511">
                        s / Purple

                    - ? 180.00
                    </option><option data-v-title="m / Red"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 180.00"
                    data-cprice="" 
                    
                     value="39983737176127">
                        m / Red

                    - ? 180.00
                    </option><option data-v-title="m / Blue"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 180.00"
                    data-cprice="" 
                    
                     value="39983737208895">
                        m / Blue

                    - ? 180.00
                    </option><option data-v-title="m / Purple"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 180.00"
                    data-cprice="" 
                    
                     value="39983737241663">
                        m / Purple

                    - ? 180.00
                    </option></select>

            <product-form class="product-form">
                <div class="button-group">
                    <div class="wbquicksuccess hidden" hidden><i class="fa fa-check-circle" aria-hidden="true"></i> Your item is successfully added to the Cart!!</div>
                    <div class="product-form__error-message-wrapper" role="alert" hidden>
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error" viewBox="0 0 13 13">
                        <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
                        <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
                        <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
                        <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                        </svg>
                        <span class="product-form__error-message"></span>
                    </div>

                    
<form method="post" action="/cart/add" id="product-form-bestproduct-4397811597375" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="?" /><input type="hidden" name="id" value="31374782693439" disabled>
                        <button type="submit" name="add" class="cartb product-form__submit button" aria-label="Add to cart" ><svg viewBox="0 0 459.529 459.529">
  <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
    <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
    <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
</svg><span>Add to cart</span><div class="loading-overlay__spinner hidden">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                            </div>
                        </button></form>
                    <div class="wbwish">
                        
                            
                                <a class="wbwishremove wishlist" href="javascript:void(0)" data-product-handle="smartphone-16gb-blue">
                                    <svg viewBox="0 0 129 129">
  <path d="m121.6,40.1c-3.3-16.6-15.1-27.3-30.3-27.3-8.5,0-17.7,3.5-26.7,10.1-9.1-6.8-18.3-10.3-26.9-10.3-15.2,0-27.1,10.8-30.3,27.6-4.8,24.9 10.6,58 55.7,76 0.5,0.2 1,0.3 1.5,0.3 0.5,0 1-0.1 1.5-0.3 45-18.4 60.3-51.4 55.5-76.1zm-57,67.9c-39.6-16.4-53.3-45-49.2-66.3 2.4-12.7 11.2-21 22.3-21 7.5,0 15.9,3.6 24.3,10.5 1.5,1.2 3.6,1.2 5.1,0 8.4-6.7 16.7-10.2 24.2-10.2 11.1,0 19.8,8.1 22.3,20.7 4.1,21.1-9.5,49.6-49,66.3z"></path>
</svg><span class="wbaddwish">Add To Wishlist</span>
                                    <span class="wbloadtowish wishanimated"><i class="fa fa-refresh"></i></span>
                                    <span class="wbwishirmv" title="Remove Wishlist"><i class="fa fa-remove"></i><span class="wbremovewish">Remove Wishlist</span></span>
                                </a>  
                            
                        
                    </div>
                    
                    <div class="wbqvtop">
                        <button class="focus-inset wbquickv quick_shop js-wbquickview-link" aria-label="Quick view" data-id="4397811597375" data-url="/products/smartphone-16gb-blue"><svg viewBox="0 0 459.529 459.529">
        <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
    <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
</svg><span>Quick view</span></button>
                    </div>

                    
                </div>
            </product-form>
            

        </div>

    </div>
    </div>

</div>
                        </li>
                    
                    </ul>
<ul class="twopro">
                        <li class="grid__item col-12 cless list-unstyled">
                            
<div class="card-wrapper wbproduct-container">
	<div class="card">
      <div class="wbimgblock">
              <div id="webipro-bestproduct-4397850787903" class="card__media"><div class="product__media-item" data-media-id="bestproduct-4397850787903-5824665878591">
                          <a href="/products/wireless-z-bluetooth-headset" title="Wireless Z Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                              <img class="img-fluid mx-auto" 
                              srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32_493x.jpg?v=1575011635 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32_600x.jpg?v=1575011635 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32_713x.jpg?v=1575011635 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32_823x.jpg?v=1575011635 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32_992x.jpg?v=1575011635 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32.jpg?v=1575011635 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/32_370x.jpg?v=1575011635 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                              loading="lazy"
                              width="1000"
                              height="1000"
                              alt="">
                          </a>
                          
                      </div><div class="product__media-item" data-media-id="bestproduct-4397850787903-5824665780287">
                              <a href="/products/wireless-z-bluetooth-headset" title="Wireless Z Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11_493x.jpg?v=1575011635 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11_600x.jpg?v=1575011635 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11_713x.jpg?v=1575011635 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11_823x.jpg?v=1575011635 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11_992x.jpg?v=1575011635 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11.jpg?v=1575011635 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/11_370x.jpg?v=1575011635 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div><div class="product__media-item" data-media-id="bestproduct-4397850787903-5824665845823">
                              <a href="/products/wireless-z-bluetooth-headset" title="Wireless Z Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31_493x.jpg?v=1575011635 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31_600x.jpg?v=1575011635 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31_713x.jpg?v=1575011635 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31_823x.jpg?v=1575011635 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31_992x.jpg?v=1575011635 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31.jpg?v=1575011635 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/31_370x.jpg?v=1575011635 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div></div>
              
<div class="card__badge"><span>Sold out</span></div>

      </div>


      <div class="wbproductdes">

        
<h3 class="product-title"><a href="/products/wireless-z-bluetooth-headset" >Wireless Z Bluetooth Headset</a></h3>
        <span class="caption-large light"></span><div id="ProductInfo-bestproduct-4397850787903" ><div class="wbhrating">
                        <div class="rating">
                            <span class="rating-star wbnorating"></span>
                        </div>
                        <p class="rating-count caption">
                            <span aria-hidden="true">(0)</span>
                        </p>
                    </div><div class="no-js-hidden wbhprice" id="price-bestproduct-4397850787903" role="status" >
<div class="price price--sold-out  price--on-sale ">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 350.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 350.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              ? 400.00
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div><select name="id" id="Variants-bestproduct-4397850787903" class="select__select no-js" form="product-form-bestproduct-4397850787903"><option data-v-title="Black"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 350.00"
                    data-cprice="? 400.00" 
                    selected="selected"
                    disabled value="31374879195199">
                        Black
 - Sold out
                    - ? 350.00
                    </option><option data-v-title="Gray"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 350.00"
                    data-cprice="? 400.00" 
                    
                    disabled value="31374879227967">
                        Gray
 - Sold out
                    - ? 350.00
                    </option></select>

            <product-form class="product-form">
                <div class="button-group">
                    <div class="wbquicksuccess hidden" hidden><i class="fa fa-check-circle" aria-hidden="true"></i> Your item is successfully added to the Cart!!</div>
                    <div class="product-form__error-message-wrapper" role="alert" hidden>
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error" viewBox="0 0 13 13">
                        <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
                        <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
                        <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
                        <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                        </svg>
                        <span class="product-form__error-message"></span>
                    </div>

                    
<form method="post" action="/cart/add" id="product-form-bestproduct-4397850787903" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="?" /><input type="hidden" name="id" value="31374879195199" disabled>
                        <button type="submit" name="add" class="cartb product-form__submit button" aria-label="Add to cart" disabled><svg viewBox="0 0 459.529 459.529">
  <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
    <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
    <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
</svg><span>Sold out</span><div class="loading-overlay__spinner hidden">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                            </div>
                        </button></form>
                    <div class="wbwish">
                        
                            
                                <a class="wbwishremove wishlist" href="javascript:void(0)" data-product-handle="wireless-z-bluetooth-headset">
                                    <svg viewBox="0 0 129 129">
  <path d="m121.6,40.1c-3.3-16.6-15.1-27.3-30.3-27.3-8.5,0-17.7,3.5-26.7,10.1-9.1-6.8-18.3-10.3-26.9-10.3-15.2,0-27.1,10.8-30.3,27.6-4.8,24.9 10.6,58 55.7,76 0.5,0.2 1,0.3 1.5,0.3 0.5,0 1-0.1 1.5-0.3 45-18.4 60.3-51.4 55.5-76.1zm-57,67.9c-39.6-16.4-53.3-45-49.2-66.3 2.4-12.7 11.2-21 22.3-21 7.5,0 15.9,3.6 24.3,10.5 1.5,1.2 3.6,1.2 5.1,0 8.4-6.7 16.7-10.2 24.2-10.2 11.1,0 19.8,8.1 22.3,20.7 4.1,21.1-9.5,49.6-49,66.3z"></path>
</svg><span class="wbaddwish">Add To Wishlist</span>
                                    <span class="wbloadtowish wishanimated"><i class="fa fa-refresh"></i></span>
                                    <span class="wbwishirmv" title="Remove Wishlist"><i class="fa fa-remove"></i><span class="wbremovewish">Remove Wishlist</span></span>
                                </a>  
                            
                        
                    </div>
                    
                    <div class="wbqvtop">
                        <button class="focus-inset wbquickv quick_shop js-wbquickview-link" aria-label="Quick view" data-id="4397850787903" data-url="/products/wireless-z-bluetooth-headset"><svg viewBox="0 0 459.529 459.529">
        <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
    <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
</svg><span>Quick view</span></button>
                    </div>

                    
                </div>
            </product-form>
            

        </div>

    </div>
    </div>

</div>
                        </li>
                    
                    

                        <li class="grid__item col-12 cless list-unstyled">
                            
<div class="card-wrapper wbproduct-container">
	<div class="card">
      <div class="wbimgblock">
              <div id="webipro-bestproduct-4394542530623" class="card__media"><div class="product__media-item" data-media-id="bestproduct-4394542530623-5824457343039">
                          <a href="/products/boat-rockerz-400-bluetooth-headset" title="BoAt Rockerz 400 Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                              <img class="img-fluid mx-auto" 
                              srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4_493x.jpg?v=1575009824 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4_600x.jpg?v=1575009824 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4_713x.jpg?v=1575009824 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4_823x.jpg?v=1575009824 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4_992x.jpg?v=1575009824 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4.jpg?v=1575009824 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/4_370x.jpg?v=1575009824 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                              loading="lazy"
                              width="1000"
                              height="1000"
                              alt="">
                          </a>
                          
                      </div><div class="product__media-item" data-media-id="bestproduct-4394542530623-5824457244735">
                              <a href="/products/boat-rockerz-400-bluetooth-headset" title="BoAt Rockerz 400 Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_493x.jpg?v=1575009824 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_600x.jpg?v=1575009824 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_713x.jpg?v=1575009824 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_823x.jpg?v=1575009824 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_992x.jpg?v=1575009824 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1.jpg?v=1575009824 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/1_370x.jpg?v=1575009824 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div><div class="product__media-item" data-media-id="bestproduct-4394542530623-5824457277503">
                              <a href="/products/boat-rockerz-400-bluetooth-headset" title="BoAt Rockerz 400 Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2_493x.jpg?v=1575009824 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2_600x.jpg?v=1575009824 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2_713x.jpg?v=1575009824 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2_823x.jpg?v=1575009824 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2_992x.jpg?v=1575009824 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2.jpg?v=1575009824 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/2_370x.jpg?v=1575009824 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div><div class="product__media-item" data-media-id="bestproduct-4394542530623-5824458162239">
                              <a href="/products/boat-rockerz-400-bluetooth-headset" title="BoAt Rockerz 400 Bluetooth Headset" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15_493x.jpg?v=1575009836 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15_600x.jpg?v=1575009836 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15_713x.jpg?v=1575009836 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15_823x.jpg?v=1575009836 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15_992x.jpg?v=1575009836 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15.jpg?v=1575009836 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/15_370x.jpg?v=1575009836 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div></div>
              
<div class="card__badge"><span>Sale</span></div>

      </div>


      <div class="wbproductdes">

        
<h3 class="product-title"><a href="/products/boat-rockerz-400-bluetooth-headset" >BoAt Rockerz 400 Bluetooth Headset</a></h3>
        <span class="caption-large light"></span><div id="ProductInfo-bestproduct-4394542530623" ><div class="wbhrating">
                        <div class="rating">
                            <span class="rating-star wbnorating"></span>
                        </div>
                        <p class="rating-count caption">
                            <span aria-hidden="true">(0)</span>
                        </p>
                    </div><div class="no-js-hidden wbhprice" id="price-bestproduct-4394542530623" role="status" >
<div class="price price--on-sale ">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 50.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 50.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              ? 100.00
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div><select name="id" id="Variants-bestproduct-4394542530623" class="select__select no-js" form="product-form-bestproduct-4394542530623"><option data-v-title="Gray"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 50.00"
                    data-cprice="? 100.00" 
                    selected="selected"
                     value="31374755594303">
                        Gray

                    - ? 50.00
                    </option><option data-v-title="Pink"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 50.00"
                    data-cprice="? 100.00" 
                    
                     value="31374755627071">
                        Pink

                    - ? 50.00
                    </option><option data-v-title="Black"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 50.00"
                    data-cprice="? 100.00" 
                    
                     value="31374755659839">
                        Black

                    - ? 50.00
                    </option></select>

            <product-form class="product-form">
                <div class="button-group">
                    <div class="wbquicksuccess hidden" hidden><i class="fa fa-check-circle" aria-hidden="true"></i> Your item is successfully added to the Cart!!</div>
                    <div class="product-form__error-message-wrapper" role="alert" hidden>
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error" viewBox="0 0 13 13">
                        <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
                        <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
                        <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
                        <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                        </svg>
                        <span class="product-form__error-message"></span>
                    </div>

                    
<form method="post" action="/cart/add" id="product-form-bestproduct-4394542530623" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="?" /><input type="hidden" name="id" value="31374755594303" disabled>
                        <button type="submit" name="add" class="cartb product-form__submit button" aria-label="Add to cart" ><svg viewBox="0 0 459.529 459.529">
  <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
    <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
    <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
</svg><span>Add to cart</span><div class="loading-overlay__spinner hidden">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                            </div>
                        </button></form>
                    <div class="wbwish">
                        
                            
                                <a class="wbwishremove wishlist" href="javascript:void(0)" data-product-handle="boat-rockerz-400-bluetooth-headset">
                                    <svg viewBox="0 0 129 129">
  <path d="m121.6,40.1c-3.3-16.6-15.1-27.3-30.3-27.3-8.5,0-17.7,3.5-26.7,10.1-9.1-6.8-18.3-10.3-26.9-10.3-15.2,0-27.1,10.8-30.3,27.6-4.8,24.9 10.6,58 55.7,76 0.5,0.2 1,0.3 1.5,0.3 0.5,0 1-0.1 1.5-0.3 45-18.4 60.3-51.4 55.5-76.1zm-57,67.9c-39.6-16.4-53.3-45-49.2-66.3 2.4-12.7 11.2-21 22.3-21 7.5,0 15.9,3.6 24.3,10.5 1.5,1.2 3.6,1.2 5.1,0 8.4-6.7 16.7-10.2 24.2-10.2 11.1,0 19.8,8.1 22.3,20.7 4.1,21.1-9.5,49.6-49,66.3z"></path>
</svg><span class="wbaddwish">Add To Wishlist</span>
                                    <span class="wbloadtowish wishanimated"><i class="fa fa-refresh"></i></span>
                                    <span class="wbwishirmv" title="Remove Wishlist"><i class="fa fa-remove"></i><span class="wbremovewish">Remove Wishlist</span></span>
                                </a>  
                            
                        
                    </div>
                    
                    <div class="wbqvtop">
                        <button class="focus-inset wbquickv quick_shop js-wbquickview-link" aria-label="Quick view" data-id="4394542530623" data-url="/products/boat-rockerz-400-bluetooth-headset"><svg viewBox="0 0 459.529 459.529">
        <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
    <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
</svg><span>Quick view</span></button>
                    </div>

                    
                </div>
            </product-form>
            

        </div>

    </div>
    </div>

</div>
                        </li>
                    
                    </ul>
<ul class="twopro">
                        <li class="grid__item col-12 cless list-unstyled">
                            
<div class="card-wrapper wbproduct-container">
	<div class="card">
      <div class="wbimgblock">
              <div id="webipro-bestproduct-4397875429439" class="card__media"><div class="product__media-item" data-media-id="bestproduct-4397875429439-5824745537599">
                          <a href="/products/bajaj-17-l-solo-microwave-oven" title="Bajaj 17 L Solo Microwave Oven" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                              <img class="img-fluid mx-auto" 
                              srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/43_493x.jpg?v=1575012579 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/43_600x.jpg?v=1575012579 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/43_713x.jpg?v=1575012579 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/43_823x.jpg?v=1575012579 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/43_992x.jpg?v=1575012579 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/43.jpg?v=1575012579 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/43_370x.jpg?v=1575012579 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                              loading="lazy"
                              width="1000"
                              height="1000"
                              alt="">
                          </a>
                          
                      </div><div class="product__media-item" data-media-id="bestproduct-4397875429439-5824745570367">
                              <a href="/products/bajaj-17-l-solo-microwave-oven" title="Bajaj 17 L Solo Microwave Oven" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/44_493x.jpg?v=1575012579 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/44_600x.jpg?v=1575012579 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/44_713x.jpg?v=1575012579 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/44_823x.jpg?v=1575012579 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/44_992x.jpg?v=1575012579 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/44.jpg?v=1575012579 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/44_370x.jpg?v=1575012579 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div><div class="product__media-item" data-media-id="bestproduct-4397875429439-5824745635903">
                              <a href="/products/bajaj-17-l-solo-microwave-oven" title="Bajaj 17 L Solo Microwave Oven" class="media media--transparent media--adapt media--hover-effect "  style="padding-bottom: 100.0%;">
                                  <img class="img-fluid mx-auto"
                                  srcset="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/26_493x.jpg?v=1575012579 493w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/26_600x.jpg?v=1575012579 600w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/26_713x.jpg?v=1575012579 713w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/26_823x.jpg?v=1575012579 823w,
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/26_992x.jpg?v=1575012579 992w,
                                        
                                        
                                        
                                        
                                        
                                        
                                        https://cdn.shopify.com/s/files/1/0257/0492/3199/products/26.jpg?v=1575012579 1000w"
                                  src="https://cdn.shopify.com/s/files/1/0257/0492/3199/products/26_370x.jpg?v=1575012579 370w"
                                  sizes="(min-width: 1600px) 0px, (min-width: 992px) calc(0vw - 10rem), (min-width: 768px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"
                                  loading="lazy"
                                  width="1000"
                                  height="1000"
                                  alt="">
                              </a>
                              
                          </div></div>
              
<div class="card__badge"></div>

      </div>


      <div class="wbproductdes">

        
<h3 class="product-title"><a href="/products/bajaj-17-l-solo-microwave-oven" >Bajaj 17 L Solo Microwave Oven</a></h3>
        <span class="caption-large light"></span><div id="ProductInfo-bestproduct-4397875429439" ><div class="wbhrating">
                        
                        <div class="rating" role="img" aria-label="5.0 out of 5.0 stars">
                            <span aria-hidden="true" class="rating-star" style="--rating: 5; --rating-max: 5.0; --rating-decimal: 0;"></span>
                        </div>
                        <p class="rating-text caption">
                            <span aria-hidden="true">5.0 / 5.0</span>
                        </p>
                        <p class="rating-count caption">
                            <span aria-hidden="true">(1)</span>
                            <span class="visually-hidden">1 total reviews</span>
                        </p>
                    </div><div class="no-js-hidden wbhprice" id="price-bestproduct-4397875429439" role="status" >
<div class="price">
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        ? 350.00
      </span>
    </div>
    <div class="price__sale">
      <span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        ? 350.00
      </span>
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              
            
          </s>
        </span></div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div></div>
</div><select name="id" id="Variants-bestproduct-4397875429439" class="select__select no-js" form="product-form-bestproduct-4397875429439"><option data-v-title="Pink"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 350.00"
                    data-cprice="" 
                    selected="selected"
                     value="31374942371903">
                        Pink

                    - ? 350.00
                    </option><option data-v-title="Blue"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 350.00"
                    data-cprice="" 
                    
                     value="31374942437439">
                        Blue

                    - ? 350.00
                    </option><option data-v-title="Black"
                    data-unitprice=""
                    data-unitvalue=""
                    data-price="? 350.00"
                    data-cprice="" 
                    
                     value="31374942502975">
                        Black

                    - ? 350.00
                    </option></select>

            <product-form class="product-form">
                <div class="button-group">
                    <div class="wbquicksuccess hidden" hidden><i class="fa fa-check-circle" aria-hidden="true"></i> Your item is successfully added to the Cart!!</div>
                    <div class="product-form__error-message-wrapper" role="alert" hidden>
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-error" viewBox="0 0 13 13">
                        <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
                        <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
                        <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
                        <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                        </svg>
                        <span class="product-form__error-message"></span>
                    </div>

                    
<form method="post" action="/cart/add" id="product-form-bestproduct-4397875429439" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="?" /><input type="hidden" name="id" value="31374942371903" disabled>
                        <button type="submit" name="add" class="cartb product-form__submit button" aria-label="Add to cart" ><svg viewBox="0 0 459.529 459.529">
  <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
      l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
      s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
      S7.65,55.231,17,55.231z"></path>
    <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
      S114.183,438.298,135.433,438.298z"></path>
    <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
      c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
      C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
</svg><span>Add to cart</span><div class="loading-overlay__spinner hidden">
                                <svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                </svg>
                            </div>
                        </button></form>
                    <div class="wbwish">
                        
                            
                                <a class="wbwishremove wishlist" href="javascript:void(0)" data-product-handle="bajaj-17-l-solo-microwave-oven">
                                    <svg viewBox="0 0 129 129">
  <path d="m121.6,40.1c-3.3-16.6-15.1-27.3-30.3-27.3-8.5,0-17.7,3.5-26.7,10.1-9.1-6.8-18.3-10.3-26.9-10.3-15.2,0-27.1,10.8-30.3,27.6-4.8,24.9 10.6,58 55.7,76 0.5,0.2 1,0.3 1.5,0.3 0.5,0 1-0.1 1.5-0.3 45-18.4 60.3-51.4 55.5-76.1zm-57,67.9c-39.6-16.4-53.3-45-49.2-66.3 2.4-12.7 11.2-21 22.3-21 7.5,0 15.9,3.6 24.3,10.5 1.5,1.2 3.6,1.2 5.1,0 8.4-6.7 16.7-10.2 24.2-10.2 11.1,0 19.8,8.1 22.3,20.7 4.1,21.1-9.5,49.6-49,66.3z"></path>
</svg><span class="wbaddwish">Add To Wishlist</span>
                                    <span class="wbloadtowish wishanimated"><i class="fa fa-refresh"></i></span>
                                    <span class="wbwishirmv" title="Remove Wishlist"><i class="fa fa-remove"></i><span class="wbremovewish">Remove Wishlist</span></span>
                                </a>  
                            
                        
                    </div>
                    
                    <div class="wbqvtop">
                        <button class="focus-inset wbquickv quick_shop js-wbquickview-link" aria-label="Quick view" data-id="4397875429439" data-url="/products/bajaj-17-l-solo-microwave-oven"><svg viewBox="0 0 459.529 459.529">
        <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
      c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
      c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
      c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
      c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
      c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
      c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
      c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
      c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
      c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
      C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
    <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
      c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
      L173.261,211.555z"></path>
</svg><span>Quick view</span></button>
                    </div>

                    
                </div>
            </product-form>
            

        </div>

    </div>
    </div>

</div>
                        </li>
                    
                    

            </div>   
        </div> 
</div>


</div>
                  
              </div>
            
            <div class="col-12  col-md-8 col-lg-10 right-col ">
                
<div class="">
	<nav class="breadcrumb row" role="navigation" aria-label="breadcrumbs">
		<div class="col-12">
			<a href="index.php" title="Home">Home</a>
			
				<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
				<span>wishlist</span>
			
		</div>
	</nav>
</div>

                <div id="shopify-section-template--14270126358591__wishlist" class="shopify-section">
    
        <div class="wbmainwish">
            <h1 class="heading text-left"><span>My Wishlist</span></h1>
            <div class="row rless">
            
			<?php 
			
		$select_wishlist="SELECT * FROM `wishlist` ";
$result1=mysqli_query($conn,$select_wishlist);

while($show_users1=mysqli_fetch_array($result1)){
$wishlist_pro_id=$show_users1['product_id'];
			
			$select_product="SELECT * FROM `add_product` WHERE  product_id='".$wishlist_pro_id."' ";
$result=mysqli_query($conn,$select_product);
$sr=0;
while($show_users=mysqli_fetch_array($result)){
$sr=$sr+1;

$product_title=$show_users['title'];
$sale_price=$show_users['sale_price'];
$real_price=$show_users['real_price'];
$discription= $show_users["discription"];
}

$show_images="SELECT * FROM `multiple_images` where  product_id='".$wishlist_pro_id."'  limit 1 ";
	$get_images=mysqli_query($conn,$show_images);
 	while($row123456700=mysqli_fetch_array($get_images)){
	$image_id= $row123456700["image_id"];
	$image_name= $row123456700["image_name"];
	}	
  

			?>
			
                
                    <form action="/cart/add" method="post" class="cart col-lg-3 col-md-4 col-sm-4 col-6 cless" data-product-handle="15-core-i5-8th-gen-led-tv" enctype="multipart/form-data" id="add-item-form-4397838598207"><input name="id" id="id" value="39636973879359" type="hidden">
                        <input value="1" type="hidden" name="quantity" min="1">
                        <div class="wbinnerwish" data-product-id="4397838598207" data-product-handle="15-core-i5-8th-gen-led-tv">    
                            <div class="wbinnerwimg">
                                <a href="/products/15-core-i5-8th-gen-led-tv">
                                    <img class="lazyload img-fluid mx-auto" src="./admin/admin_pics/<?php echo $image_name; ?>" alt="15 Core I5 8th Gen LED TV" />
                                </a>
                                <a class="wbwishremove" onClick="reloadPage();" title="Remove Wishlist" href="wishlist.php?delete_product=<?php echo $wishlist_pro_id; ?>" data-product-handle="15-core-i5-8th-gen-led-tv">
                                    <span class="wbwishirmv"><i class="fa fa-remove"></i></span>
                                </a>
                            </div>
                            <div class="wbwishdesc">
                                <h5><a href="products.php" title="<?php echo $product_title ?>"><?php echo $product_title ?></a></h5>
                                <div class="product-price">
                                    
                                        <span class="price-sale">$ <?php echo $sale_price; ?></span>
                                        <span class="compare-price">$ <?php echo $real_price; ?></span>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                
                   <?php } ?>
                
                   
            
            </div>
            <div class="text-center">
                <a href="products.php" class="btn btn-primary">Continue Shopping</a>
                <a href="wishlist.php?delete_all" id="wbwishcall" class="btn btn-primary">Clear Wishlist</a>
            </div>
        </div>
        <div class="wbwishempty text-center">
            <p>Your wishlist is currently empty!</p>
        </div>
        <div class="wbwishloader" style="display: none;">
            <p>Loading...</p>
        </div>
    


</div>
            </div>
          </div>
        </div>
      </main>
      <div id="shopify-section-logo-bar" class="shopify-section spaced-section"><div class="container">
    <div class="wblogos">
        
            <div class="wblogobar">
                
                    <div class="col-12 cless">
                        <a href="/collections" title="Banners">
                        
                            <img loading="lazy" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/brand1_8c4eb927-f1f4-4cb4-91d2-51d3c0942c18_225x150.png?v=1645686374" class="logo-bar__image img-fluid mx-auto" alt="" width="225" height="150"/>
                        
                        </a>
                    </div>
                
                    <div class="col-12 cless">
                        <a href="/collections" title="Banners">
                        
                            <img loading="lazy" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/brand2_06cbc0d5-288c-4beb-9fc8-7c71b83272bb_225x150.png?v=1645686385" class="logo-bar__image img-fluid mx-auto" alt="" width="225" height="150"/>
                        
                        </a>
                    </div>
                
                    <div class="col-12 cless">
                        <a href="/collections" title="Banners">
                        
                            <img loading="lazy" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/brand3_fc7234e8-d28e-4b9d-a410-3772a7f713d9_225x150.png?v=1645686396" class="logo-bar__image img-fluid mx-auto" alt="" width="225" height="150"/>
                        
                        </a>
                    </div>
                
                    <div class="col-12 cless">
                        <a href="/collections" title="Banners">
                        
                            <img loading="lazy" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/brand4_02a8b877-e192-4a99-b7b4-fdaf7bdd74c0_225x150.png?v=1645686408" class="logo-bar__image img-fluid mx-auto" alt="" width="225" height="150"/>
                        
                        </a>
                    </div>
                
                    <div class="col-12 cless">
                        <a href="/collections" title="Banners">
                        
                            <img loading="lazy" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/brand5_225x150.png?v=1645686418" class="logo-bar__image img-fluid mx-auto" alt="" width="225" height="150"/>
                        
                        </a>
                    </div>
                
                    <div class="col-12 cless">
                        <a href="/collections" title="Banners">
                        
                            <img loading="lazy" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/brand6_225x150.png?v=1645686429" class="logo-bar__image img-fluid mx-auto" alt="" width="225" height="150"/>
                        
                        </a>
                    </div>
                
                    <div class="col-12 cless">
                        <a href="/collections" title="Banners">
                        
                            <img loading="lazy" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/brand7_2436c357-e48e-4ca3-b9f4-d40a214fb1c2_225x150.png?v=1645686440" class="logo-bar__image img-fluid mx-auto" alt="" width="225" height="150"/>
                        
                        </a>
                    </div>
                
                    <div class="col-12 cless">
                        <a href="/collections" title="Banners">
                        
                            <img loading="lazy" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/brand8_225x150.png?v=1645686497" class="logo-bar__image img-fluid mx-auto" alt="" width="225" height="150"/>
                        
                        </a>
                    </div>
                
                    <div class="col-12 cless">
                        <a href="/collections" title="Banners">
                        
                            <img loading="lazy" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/menufacture-4_ca1716a0-8d0d-4dea-a88d-6e5eedf2ac09_225x150.png?v=1645686512" class="logo-bar__image img-fluid mx-auto" alt="" width="225" height="150"/>
                        
                        </a>
                    </div>
                
                    <div class="col-12 cless">
                        <a href="/collections" title="Banners">
                        
                            <img loading="lazy" src="https://cdn.shopify.com/s/files/1/0257/0492/3199/files/menufacture-5_b725de99-b747-466e-8c7f-146d041d5685_225x150.png?v=1645686526" class="logo-bar__image img-fluid mx-auto" alt="" width="225" height="150"/>
                        
                        </a>
                    </div>
                
            </div>
        
    </div>
</div>




</div>
      <div id="shopify-section-popup-products" class="shopify-section index-section"><link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-card.css?v=100729205794507640871679391631" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-price.css?v=75926142592083736931648449696" rel="stylesheet" type="text/css" media="all" />
<link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-rating.css?v=149782489698461958261645685328" rel="stylesheet" type="text/css" media="all" />


  </div>
      <div id="shopify-section-footer" class="shopify-section">
<link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/section-footer.css?v=94465455141337427801679392094" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-newsletter.css?v=65970241426963509761645685325" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-list-menu.css?v=117300255725393243301648443200" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-rte.css?v=146918724777113224111645685329" media="print" onload="this.media='all'">
<link rel="stylesheet" href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/disclosure.css?v=23085793905083514321645685335" media="print" onload="this.media='all'">

<noscript><link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-newsletter.css?v=65970241426963509761645685325" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-list-menu.css?v=117300255725393243301648443200" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/component-rte.css?v=146918724777113224111645685329" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/disclosure.css?v=23085793905083514321645685335" rel="stylesheet" type="text/css" media="all" /></noscript>
<style>
  .footer,.footapptop ul {
    color: #c8c8c8;
    background-color: #202020;
  }
  .footer__blocks-wrapper h5,.footer-block--newsletter h4{
    color: #ffffff;
  }
  .footer .footer-collapse li a,.footblink p a,.footblink p a:after{
    color: #c8c8c8;
  }
</style>
<footer class="footer">
<div class="footmiddle"><div class="container">
            <div class="row">
                <div class="col-lg-9 col-12 wbfooterblk"><div class="footer__blocks-wrapper row"><div class="footer-block col-md-3 col-12" ><h5 data-toggle="collapse" data-target="#wb-ContactUs" class="toggle collapsed">contact us</h5><div class="wbfootcont collapse footer-collapse" id="wb-ContactUs">
                                            <ul class="wbfootcont collapse footer-collapse list-unstyled" id="wb-ContactUs"><li><svg viewBox="0 0 15.433 21.606">
  <path id="Location_Icon" data-name="Location Icon" d="M14.467,2.25c-4.26,0-7.717,3.111-7.717,6.945,0,6.173,7.717,14.662,7.717,14.662s7.717-8.488,7.717-14.662C22.183,5.361,18.727,2.25,14.467,2.25Zm0,10.8a3.087,3.087,0,1,1,3.087-3.087A3.087,3.087,0,0,1,14.467,13.053Z" transform="translate(-6.75 -2.25)"/>
</svg>
 <span>demo store United States.</span></li><li><svg viewBox="0 0 20.137 19.786">
  <path id="Phone_Icon" data-name="Phone Icon" d="M7.739,10.647a11.136,11.136,0,0,0,4.046,2.619l2.061-1.64a.366.366,0,0,1,.415,0l3.827,2.466a1.093,1.093,0,0,1,.18,1.739L16.476,17.6a2.187,2.187,0,0,1-1.985.585,19.184,19.184,0,0,1-9.376-4.92,18.473,18.473,0,0,1-5.068-9.2,2.067,2.067,0,0,1,.6-1.941L2.507.331A1.093,1.093,0,0,1,4.213.506L6.761,4.284a.344.344,0,0,1,0,.41L5.082,6.711a10.8,10.8,0,0,0,2.657,3.936Z" transform="matrix(0.996, 0.087, -0.087, 0.996, 1.589, 0)"/>
</svg>
 <span>0123-456-789</span></li><li><svg  viewBox="0 0 18.877 14.974">
  <path id="Path_205" data-name="Path 205" d="M31.081,7.1a2.606,2.606,0,0,0-4.845-1.333v0c-.022.036-.043.074-.063.112l-.01.02c-.017.032-.033.065-.049.1l-.014.031c-.013.03-.027.06-.039.09l-.015.038c-.011.028-.021.057-.032.086L26,6.291c-.009.028-.017.056-.025.084s-.009.031-.013.047-.014.055-.021.082-.008.034-.012.05-.011.056-.016.082-.006.034-.009.051-.008.057-.012.086,0,.034-.006.05-.005.062-.008.094c0,.014,0,.03,0,.044,0,.046,0,.093,0,.14s0,.082,0,.12v.026q0,.057.009.115l0,.02c0,.035.008.069.013.1a.055.055,0,0,0,0,.021c.006.037.013.073.02.111a.154.154,0,0,0,.005.027c.008.035.016.07.024.1v.008c.009.036.02.072.031.107l.009.028c.011.035.023.068.035.1,0,.008.005.014.008.022.011.029.023.058.034.086,0,.009.006.017.01.025.014.032.028.064.043.1l.013.027c.014.028.028.057.043.085a2.618,2.618,0,0,0,.9.969,2.532,2.532,0,0,0,.31.169l.016.008q.108.049.221.088l.039.013.061.019.056.016.078.02.071.016.047.009.075.013.038.006.111.014.031,0,.09.006.035,0c.041,0,.079,0,.119,0s.094,0,.14,0l.044,0,.094-.008.051-.006.086-.012.051-.009.082-.016.05-.012c.028-.006.056-.013.082-.021L29.2,9.6l.084-.025.043-.014.086-.032.038-.015c.031-.012.061-.025.09-.039l.031-.014c.033-.016.065-.031.1-.049l.02-.01c.038-.02.075-.041.112-.063h0a2.625,2.625,0,0,0,.627-.517A2.6,2.6,0,0,0,31.081,7.1Z" transform="translate(-12.204 -4.497)"/>
  <path id="Path_206" data-name="Path 206" d="M16.058,10.61l-4.294,3.34a.651.651,0,0,1-.8,0L5.105,9.394a.651.651,0,1,1,.8-1.028l5.459,4.246L15.2,9.631a3.9,3.9,0,0,1-.057-4.006H4.529A2.281,2.281,0,0,0,2.25,7.9v9.764a2.281,2.281,0,0,0,2.279,2.279H18.2a2.281,2.281,0,0,0,2.279-2.279V10.962a3.9,3.9,0,0,1-4.419-.352Z" transform="translate(-2.25 -4.972)"/>
</svg>
 <span>demo@demo.com</span></li><ul class="footer__list-social" role="list"><li>
                                                                <a href="#"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 18 15">
  <path fill="currentColor" d="M17.64 2.6a7.33 7.33 0 01-1.75 1.82c0 .05 0 .13.02.23l.02.23a9.97 9.97 0 01-1.69 5.54c-.57.85-1.24 1.62-2.02 2.28a9.09 9.09 0 01-2.82 1.6 10.23 10.23 0 01-8.9-.98c.34.02.61.04.83.04 1.64 0 3.1-.5 4.38-1.5a3.6 3.6 0 01-3.3-2.45A2.91 2.91 0 004 9.35a3.47 3.47 0 01-2.02-1.21 3.37 3.37 0 01-.8-2.22v-.03c.46.24.98.37 1.58.4a3.45 3.45 0 01-1.54-2.9c0-.61.14-1.2.45-1.79a9.68 9.68 0 003.2 2.6 10 10 0 004.08 1.07 3 3 0 01-.13-.8c0-.97.34-1.8 1.03-2.48A3.45 3.45 0 0112.4.96a3.49 3.49 0 012.54 1.1c.8-.15 1.54-.44 2.23-.85a3.4 3.4 0 01-1.54 1.94c.74-.1 1.4-.28 2.01-.54z">
</svg>
<span class="visually-hidden">Twitter</span>
                                                                </a>
                                                            </li><li>
                                                                <a href="#"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewBox="0 0 18 18">
  <path fill="currentColor" d="M16.42.61c.27 0 .5.1.69.28.19.2.28.42.28.7v15.44c0 .27-.1.5-.28.69a.94.94 0 01-.7.28h-4.39v-6.7h2.25l.31-2.65h-2.56v-1.7c0-.4.1-.72.28-.93.18-.2.5-.32 1-.32h1.37V3.35c-.6-.06-1.27-.1-2.01-.1-1.01 0-1.83.3-2.45.9-.62.6-.93 1.44-.93 2.53v1.97H7.04v2.65h2.24V18H.98c-.28 0-.5-.1-.7-.28a.94.94 0 01-.28-.7V1.59c0-.27.1-.5.28-.69a.94.94 0 01.7-.28h15.44z">
</svg>
<span class="visually-hidden">Facebook</span>
                                                                </a>
                                                            </li><li>
                                                                <a href="#"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pinterest" viewBox="0 0 17 18">
  <path fill="currentColor" d="M8.48.58a8.42 8.42 0 015.9 2.45 8.42 8.42 0 011.33 10.08 8.28 8.28 0 01-7.23 4.16 8.5 8.5 0 01-2.37-.32c.42-.68.7-1.29.85-1.8l.59-2.29c.14.28.41.52.8.73.4.2.8.31 1.24.31.87 0 1.65-.25 2.34-.75a4.87 4.87 0 001.6-2.05 7.3 7.3 0 00.56-2.93c0-1.3-.5-2.41-1.49-3.36a5.27 5.27 0 00-3.8-1.43c-.93 0-1.8.16-2.58.48A5.23 5.23 0 002.85 8.6c0 .75.14 1.41.43 1.98.28.56.7.96 1.27 1.2.1.04.19.04.26 0 .07-.03.12-.1.15-.2l.18-.68c.05-.15.02-.3-.11-.45a2.35 2.35 0 01-.57-1.63A3.96 3.96 0 018.6 4.8c1.09 0 1.94.3 2.54.89.61.6.92 1.37.92 2.32 0 .8-.11 1.54-.33 2.21a3.97 3.97 0 01-.93 1.62c-.4.4-.87.6-1.4.6-.43 0-.78-.15-1.06-.47-.27-.32-.36-.7-.26-1.13a111.14 111.14 0 01.47-1.6l.18-.73c.06-.26.09-.47.09-.65 0-.36-.1-.66-.28-.89-.2-.23-.47-.35-.83-.35-.45 0-.83.2-1.13.62-.3.41-.46.93-.46 1.56a4.1 4.1 0 00.18 1.15l.06.15c-.6 2.58-.95 4.1-1.08 4.54-.12.55-.16 1.2-.13 1.94a8.4 8.4 0 01-5-7.65c0-2.3.81-4.28 2.44-5.9A8.04 8.04 0 018.48.57z">
</svg>
<span class="visually-hidden">Pinterest</span>
                                                                </a>
                                                            </li><li>
                                                                <a href="#"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram" viewBox="0 0 18 18">
  <path fill="currentColor" d="M8.77 1.58c2.34 0 2.62.01 3.54.05.86.04 1.32.18 1.63.3.41.17.7.35 1.01.66.3.3.5.6.65 1 .12.32.27.78.3 1.64.05.92.06 1.2.06 3.54s-.01 2.62-.05 3.54a4.79 4.79 0 01-.3 1.63c-.17.41-.35.7-.66 1.01-.3.3-.6.5-1.01.66-.31.12-.77.26-1.63.3-.92.04-1.2.05-3.54.05s-2.62 0-3.55-.05a4.79 4.79 0 01-1.62-.3c-.42-.16-.7-.35-1.01-.66-.31-.3-.5-.6-.66-1a4.87 4.87 0 01-.3-1.64c-.04-.92-.05-1.2-.05-3.54s0-2.62.05-3.54c.04-.86.18-1.32.3-1.63.16-.41.35-.7.66-1.01.3-.3.6-.5 1-.65.32-.12.78-.27 1.63-.3.93-.05 1.2-.06 3.55-.06zm0-1.58C6.39 0 6.09.01 5.15.05c-.93.04-1.57.2-2.13.4-.57.23-1.06.54-1.55 1.02C1 1.96.7 2.45.46 3.02c-.22.56-.37 1.2-.4 2.13C0 6.1 0 6.4 0 8.77s.01 2.68.05 3.61c.04.94.2 1.57.4 2.13.23.58.54 1.07 1.02 1.56.49.48.98.78 1.55 1.01.56.22 1.2.37 2.13.4.94.05 1.24.06 3.62.06 2.39 0 2.68-.01 3.62-.05.93-.04 1.57-.2 2.13-.41a4.27 4.27 0 001.55-1.01c.49-.49.79-.98 1.01-1.56.22-.55.37-1.19.41-2.13.04-.93.05-1.23.05-3.61 0-2.39 0-2.68-.05-3.62a6.47 6.47 0 00-.4-2.13 4.27 4.27 0 00-1.02-1.55A4.35 4.35 0 0014.52.46a6.43 6.43 0 00-2.13-.41A69 69 0 008.77 0z"/>
  <path fill="currentColor" d="M8.8 4a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm0 7.43a2.92 2.92 0 110-5.85 2.92 2.92 0 010 5.85zM13.43 5a1.05 1.05 0 100-2.1 1.05 1.05 0 000 2.1z">
</svg>
<span class="visually-hidden">Instagram</span>
                                                                </a>
                                                            </li></ul></ul>
                                        </div></div><div class="footer-block col-md-3 col-12" ><h5 data-toggle="collapse" data-target="#wb-Categories" class="toggle collapsed">categories</h5><ul class="wbfootcont collapse footer-collapse list-unstyled" id="wb-Categories"><li>
                                                <a href="/collections/frontpage" class="">Featured Product</a>
                                            </li><li>
                                                <a href="/collections/laptop" class="">Laptop</a>
                                            </li><li>
                                                <a href="/collections/phone" class="">Phone</a>
                                            </li><li>
                                                <a href="/collections/speakers" class="">speakers</a>
                                            </li><li>
                                                <a href="/collections/television" class="">Television</a>
                                            </li></ul></div><div class="footer-block col-md-3 col-12" ><h5 data-toggle="collapse" data-target="#wb-Service" class="toggle collapsed">service</h5><ul class="wbfootcont collapse footer-collapse list-unstyled" id="wb-Service"><li>
                                                <a href="/pages/about-us" class="">About us</a>
                                            </li><li>
                                                <a href="/pages/contact-us" class="">Contact Us</a>
                                            </li><li>
                                                <a href="/pages/information" class="">information</a>
                                            </li><li>
                                                <a href="/pages/privacy-policy" class="">Privacy & Policy</a>
                                            </li><li>
                                                <a href="/pages/terms-conditions" class="">Terms & Conditions</a>
                                            </li></ul></div><div class="footer-block col-md-3 col-12" ><h5 data-toggle="collapse" data-target="#wb-Extras" class="toggle collapsed">extras</h5><ul class="wbfootcont collapse footer-collapse list-unstyled" id="wb-Extras"><li>
                                                <a href="/pages/information" class="">information</a>
                                            </li><li>
                                                <a href="/pages/wishlist" class=" list-menu__item--active">wishlist</a>
                                            </li><li>
                                                <a href="/search" class="">Search</a>
                                            </li><li>
                                                <a href="/collections" class="">All Collections</a>
                                            </li></ul></div></div></div>
                <div class="col-lg-3 col-12 newsltr">
                   <div class="newsl text-center">
                    <div class="news-icon">
                        <svg viewBox="0 0 512 512">
	<polygon style="fill:#FFDC40;" points="512,502 0,502 0,177.697 88.036,122.538 423.962,122.536 512,177.697 "></polygon>
  <polygon style="fill:#FFAB15;" points="423.962,122.536 256,122.537 256,502 512,502 512,177.697  "></polygon>
  <polygon style="fill:#FFAB15;" points="423.962,122.536 88.036,122.538 0,177.697 255.989,433.708 512,177.697   "></polygon>
<polygon style="fill:#FF9400;" points="256,433.697 512,177.697 423.962,122.536 256,122.537 "></polygon>
<polygon style="fill:#E6F9FF;" points="86,263.704 255.989,433.708 426,263.697 426,10 86,10 "></polygon>
<polygon style="fill:#CCEFFF;" points="256,10 256,433.697 426,263.697 426,10 "></polygon>
<path style="fill:#FFEA84;" d="M442,502L298.426,358.426c-23.431-23.431-61.421-23.431-84.853,0L70,502H442z"></path>
<path style="fill:#FFDC40;" d="M256,502h186L298.426,358.426C286.71,346.71,271.355,340.852,256,340.852V502z"></path>
  <rect x="140" y="85" style="fill:#7D8AFF;" width="230" height="30"></rect>
  <rect x="140" y="145" style="fill:#7D8AFF;" width="230" height="30"></rect>
  <rect x="141" y="205" style="fill:#7D8AFF;" width="170" height="30"></rect>
  <rect x="256" y="85" style="fill:#6E76E5;" width="114" height="30"></rect>
  <rect x="256" y="145" style="fill:#6E76E5;" width="114" height="30"></rect>
  <rect x="256" y="205" style="fill:#6E76E5;" width="55" height="30"></rect>
</svg>
                    </div><h4>Newsletter</h4><p class="subnews">Subscribe to our newsletter and get 10% off your first purchase</p><form method="post" action="/contact#ContactFooter" id="ContactFooter" accept-charset="UTF-8" class="footer__newsletter newsletter-form"><input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="?" /><input type="hidden" name="contact[tags]" value="newsletter">
                        <div class="newsletter-form__field-wrapper">
                            <div class="field">
                                <input
                                id="NewsletterForm--footer"
                                type="email"
                                pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$"
                                name="contact[email]"
                                class="field__input"
                                value=""
                                aria-required="true"
                                autocorrect="off"
                                autocapitalize="off"
                                autocomplete="email"
                                
                                placeholder="Email"
                                required >
                                <label class="field__label" for="NewsletterForm--footer">
                                Email
                                </label>
                                <button type="submit" class="newsletter-form__button btn-primary btn" name="commit" id="Subscribe" aria-label="Subscribe"><span>Subscribe</span><i class="fa fa-send"></i></button>
                            </div></div></form></div> 
                </div>
            </div>

        </div></div>

<div class="footcustomlink">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <div class="footblink">
                    <div class="tag-top">
                        <h3 class="tag-b">Furniture:</h3>
                        
                        <p><a href="/collections/bestseller" title="Bestseller">sofa</a></p><p><a href="/collections/featured-product" title="Featured product">Chair</a></p><p><a href="/collections" title="All collections">dining table</a></p><p><a href="/collections/onsale" title="Onsale">living room</a></p><p><a href="/pages/contact-us" title="Contact us">table lamp</a></p><p><a href="/pages/information-2" title="Information">night stand</a></p><p><a href="/products/proin-ac-nisi-in-augue-viverra-tempus-vel-ac-nulla" title="Proin ac nisi in augue viverra tempus vel ac nulla">computer desk</a></p><p><a href="/products/copy-of-sed-id-tellus-non-quam-sodales-interdum-vitae" title="Suspendisse potent sodales interdum vitae">bar table</a></p><p><a href="/collections/frontpage" title="New product">pillow</a></p><p><a href="/collections/onsale" title="Onsale">radio</a></p><p><a href="/products/class-aptent-taciti-sociosqu-ad-litora-torquent" title="Class aptent taciti sociosqu ad litora torquent">clock</a></p><p><a href="/products/curabitur-elementum-gravida-libero" title="Curabitur elementum gravida libero">bad room</a></p><p><a href="/products/proin-ac-nisi-in-augue-viverra-tempus-vel-ac-nulla" title="Proin ac nisi in augue viverra tempus vel ac nulla">stool</a></p><p><a href="/products/scelerisque-vel-viverra-a-tincidunt-nec-libero" title="scelerisque vel viverra a, tincidunt nec libero">television</a></p><p><a href="/collections/featured-product" title="Featured product">Chair</a></p><p><a href="/products/etiam-viverra-leo-mauris-vitae-cursus-sem" title="Etiam viverra leo mauris vitae cursus sem">dining table</a></p><p><a href="/collections/onsale" title="Onsale">living room</a></p><p><a href="/pages/contact-us" title="Contact us">table lamp</a></p><p><a href="/pages/information-2" title="Information">night stand</a></p><p><a href="/products/proin-ac-nisi-in-augue-viverra-tempus-vel-ac-nulla" title="Proin ac nisi in augue viverra tempus vel ac nulla">computer desk</a></p><p><a href="/products/copy-of-sed-id-tellus-non-quam-sodales-interdum-vitae" title="Suspendisse potent sodales interdum vitae">bar table</a></p><p><a href="/collections/frontpage" title="New product">pillow</a></p>
                        
                    </div>
                    <div class="tag-top">
                        <h3 class="tag-b">Organic:</h3>
                        
                        <p><a href="/collections/bestseller" title="Bestseller">sofa</a></p><p><a href="/collections/featured-product" title="Featured product">Chair</a></p><p><a href="/products/etiam-viverra-leo-mauris-vitae-cursus-sem" title="Etiam viverra leo mauris vitae cursus sem">dining table</a></p><p><a href="/collections/onsale" title="Onsale">living room</a></p><p><a href="/pages/contact-us" title="Contact us">table lamp</a></p><p><a href="/pages/information-2" title="Information">night stand</a></p><p><a href="/products/proin-ac-nisi-in-augue-viverra-tempus-vel-ac-nulla" title="Proin ac nisi in augue viverra tempus vel ac nulla">computer desk</a></p><p><a href="/products/copy-of-sed-id-tellus-non-quam-sodales-interdum-vitae" title="Suspendisse potent sodales interdum vitae">bar table</a></p><p><a href="/collections/frontpage" title="New product">pillow</a></p><p><a href="/collections/onsale" title="Onsale">radio</a></p><p><a href="/products/class-aptent-taciti-sociosqu-ad-litora-torquent" title="Class aptent taciti sociosqu ad litora torquent">clock</a></p><p><a href="/products/curabitur-elementum-gravida-libero" title="Curabitur elementum gravida libero">bad room</a></p><p><a href="/products/proin-ac-nisi-in-augue-viverra-tempus-vel-ac-nulla" title="Proin ac nisi in augue viverra tempus vel ac nulla">stool</a></p><p><a href="/products/scelerisque-vel-viverra-a-tincidunt-nec-libero" title="scelerisque vel viverra a, tincidunt nec libero">television</a></p><p><a href="/collections/featured-product" title="Featured product">Chair</a></p><p><a href="/products/etiam-viverra-leo-mauris-vitae-cursus-sem" title="Etiam viverra leo mauris vitae cursus sem">dining table</a></p><p><a href="/collections/onsale" title="Onsale">living room</a></p><p><a href="/pages/contact-us" title="Contact us">table lamp</a></p><p><a href="/pages/information-2" title="Information">night stand</a></p><p><a href="/products/proin-ac-nisi-in-augue-viverra-tempus-vel-ac-nulla" title="Proin ac nisi in augue viverra tempus vel ac nulla">computer desk</a></p><p><a href="/products/copy-of-sed-id-tellus-non-quam-sodales-interdum-vitae" title="Suspendisse potent sodales interdum vitae">bar table</a></p><p><a href="/collections/frontpage" title="New product">pillow</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="" id="scroll" style="display: block;" title="Scroll to top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
</footer>
<div class="footer__content-bottom text-center" style="background-color: #000000;">
    <div class="container">
        <div class="row align-items-center">
            <div class="footer__copyright text-left col-md-6 col-12">
                <span class="copyright__content">&copy; 2023, <a href="/" title="">storego-demo</a></span> 
                <span class="copyright__content"><a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify</a></span>
            </div><div class="footer__payment text-right col-md-6 col-12">
                    <span class="visually-hidden">Payment methods</span>
                    <ul class="list list-payment" role="list"><li class="list-payment__item">
                              <svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa"><title id="pi-visa">Visa</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"/></svg>
                            </li><li class="list-payment__item">
                              <svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master"><title id="pi-master">Mastercard</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><circle fill="#EB001B" cx="15" cy="12" r="7"/><circle fill="#F79E1B" cx="23" cy="12" r="7"/><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"/></svg>
                            </li><li class="list-payment__item">
                              <svg class="icon icon--full-color" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express"><title id="pi-american_express">American Express</title><g fill="none"><path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"/><path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"/><path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"/></g></svg>

                            </li><li class="list-payment__item">
                              <svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal"><title id="pi-paypal">PayPal</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z"/><path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z"/><path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z"/></svg>
                            </li><li class="list-payment__item">
                              <svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-diners_club"><title id="pi-diners_club">Diners Club</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"/><path d="M12 12v3.7c0 .3-.2.3-.5.2-1.9-.8-3-3.3-2.3-5.4.4-1.1 1.2-2 2.3-2.4.4-.2.5-.1.5.2V12zm2 0V8.3c0-.3 0-.3.3-.2 2.1.8 3.2 3.3 2.4 5.4-.4 1.1-1.2 2-2.3 2.4-.4.2-.4.1-.4-.2V12zm7.2-7H13c3.8 0 6.8 3.1 6.8 7s-3 7-6.8 7h8.2c3.8 0 6.8-3.1 6.8-7s-3-7-6.8-7z" fill="#3086C8"/></svg>
                            </li><li class="list-payment__item">
                              <svg class="icon icon--full-color" viewBox="0 0 38 24" width="38" height="24" role="img" aria-labelledby="pi-discover" fill="none" xmlns="http://www.w3.org/2000/svg"><title id="pi-discover">Discover</title><path fill="#000" opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"/><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32z" fill="#fff"/><path d="M3.57 7.16H2v5.5h1.57c.83 0 1.43-.2 1.96-.63.63-.52 1-1.3 1-2.11-.01-1.63-1.22-2.76-2.96-2.76zm1.26 4.14c-.34.3-.77.44-1.47.44h-.29V8.1h.29c.69 0 1.11.12 1.47.44.37.33.59.84.59 1.37 0 .53-.22 1.06-.59 1.39zm2.19-4.14h1.07v5.5H7.02v-5.5zm3.69 2.11c-.64-.24-.83-.4-.83-.69 0-.35.34-.61.8-.61.32 0 .59.13.86.45l.56-.73c-.46-.4-1.01-.61-1.62-.61-.97 0-1.72.68-1.72 1.58 0 .76.35 1.15 1.35 1.51.42.15.63.25.74.31.21.14.32.34.32.57 0 .45-.35.78-.83.78-.51 0-.92-.26-1.17-.73l-.69.67c.49.73 1.09 1.05 1.9 1.05 1.11 0 1.9-.74 1.9-1.81.02-.89-.35-1.29-1.57-1.74zm1.92.65c0 1.62 1.27 2.87 2.9 2.87.46 0 .86-.09 1.34-.32v-1.26c-.43.43-.81.6-1.29.6-1.08 0-1.85-.78-1.85-1.9 0-1.06.79-1.89 1.8-1.89.51 0 .9.18 1.34.62V7.38c-.47-.24-.86-.34-1.32-.34-1.61 0-2.92 1.28-2.92 2.88zm12.76.94l-1.47-3.7h-1.17l2.33 5.64h.58l2.37-5.64h-1.16l-1.48 3.7zm3.13 1.8h3.04v-.93h-1.97v-1.48h1.9v-.93h-1.9V8.1h1.97v-.94h-3.04v5.5zm7.29-3.87c0-1.03-.71-1.62-1.95-1.62h-1.59v5.5h1.07v-2.21h.14l1.48 2.21h1.32l-1.73-2.32c.81-.17 1.26-.72 1.26-1.56zm-2.16.91h-.31V8.03h.33c.67 0 1.03.28 1.03.82 0 .55-.36.85-1.05.85z" fill="#231F20"/><path d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z" fill="url(#pi-paint0_linear)"/><path opacity=".65" d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z" fill="url(#pi-paint1_linear)"/><path d="M36.57 7.506c0-.1-.07-.15-.18-.15h-.16v.48h.12v-.19l.14.19h.14l-.16-.2c.06-.01.1-.06.1-.13zm-.2.07h-.02v-.13h.02c.06 0 .09.02.09.06 0 .05-.03.07-.09.07z" fill="#231F20"/><path d="M36.41 7.176c-.23 0-.42.19-.42.42 0 .23.19.42.42.42.23 0 .42-.19.42-.42 0-.23-.19-.42-.42-.42zm0 .77c-.18 0-.34-.15-.34-.35 0-.19.15-.35.34-.35.18 0 .33.16.33.35 0 .19-.15.35-.33.35z" fill="#231F20"/><path d="M37 12.984S27.09 19.873 8.976 23h26.023a2 2 0 002-1.984l.024-3.02L37 12.985z" fill="#F48120"/><defs><linearGradient id="pi-paint0_linear" x1="21.657" y1="12.275" x2="19.632" y2="9.104" gradientUnits="userSpaceOnUse"><stop stop-color="#F89F20"/><stop offset=".25" stop-color="#F79A20"/><stop offset=".533" stop-color="#F68D20"/><stop offset=".62" stop-color="#F58720"/><stop offset=".723" stop-color="#F48120"/><stop offset="1" stop-color="#F37521"/></linearGradient><linearGradient id="pi-paint1_linear" x1="21.338" y1="12.232" x2="18.378" y2="6.446" gradientUnits="userSpaceOnUse"><stop stop-color="#F58720"/><stop offset=".359" stop-color="#E16F27"/><stop offset=".703" stop-color="#D4602C"/><stop offset=".982" stop-color="#D05B2E"/></linearGradient></defs></svg>
                            </li></ul>
                </div></div>
    </div>
</div>


</div>
    </div>
    <ul hidden>
      <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
    </ul>

    <div id="wbquickview" class="js-wbquickview"></div> 

    <script>
      window.shopUrl = 'https://storego-demo.myshopify.com';
      window.routes = {
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_update_url: '/cart/update',
        predictive_search_url: '/search/suggest'
      };

      window.cartStrings = {
        error: `There was an error while updating your cart. Please try again.`,
        quantityError: `You can only add [quantity] of this item to your cart.`
      }

      window.variantStrings = {
        addToCart: `Add to cart`,
        soldOut: `Sold out`,
        unavailable: `Unavailable`,
      }

      window.accessibilityStrings = {
        imageAvailable: `Image [index] is now available in gallery view`,
        shareSuccess: `Link copied to clipboard`,
        pauseSlideshow: `Pause slideshow`,
        playSlideshow: `Play slideshow`,
      }
    </script><script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/predictive-search.js?v=31278710863581584031645685344" defer="defer"></script>
    <script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/jquery.min.js?v=133494139889153862371645685339"></script>
    <script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/jquery.fancybox.min.js?v=183759526812225689971664955086"></script>
    <script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/popper.min.js?v=8772223469220370781645685343"></script>
    <script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/bootstrap.min.js?v=137179542109231419321645685317"></script>
    <script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/slick.min.js?v=176075258916855992601645685353"></script>
    <script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/wbcustom.js?v=86962768351543741881679119141"></script>
    <script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/countdown.min.js?v=183628871504181764921645685331" defer="defer"></script>
    <script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/wbcartdropdown.js?v=168107083126735237411664959099" ></script>

    <script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/wbquickview.js?v=54369889994486737371664959130" async></script>

    
    

    
      <script src="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/wishlist.js?v=101716988321907518701645685358" type="text/javascript"></script>  
     
    
    
    <div class="wballcor">
        <div class="wbopen-closeclr wbclrdisable"><a href="javascript:void(0)" title="Colors"></a></div>
        <div class="wbcolor_box">
            <h3>Live Settings</h3>
            <p>Theme Color</p>
            <ul class="wbinnerclr">
                <li><a href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/wbcolor1.css?v=42940662033267957241645685354" class="wbclr1" title="Colors"></a></li>
                <li><a href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/wbcolor2.css?v=26657159098469064011645685355" class="wbclr2" title="Colors"></a></li>
                <li><a href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/wbcolor3.css?v=138991146916581698221645685355" class="wbclr3" title="Colors"></a></li>
                <li><a href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/wbcolor4.css?v=91534309534796916741645685356" class="wbclr4" title="Colors"></a></li>
                <li><a href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/wbcolor5.css?v=72855007157309648571645685356" class="wbclr5" title="Colors"></a></li>
                <li><a href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/wbcolor6.css?v=107356696884502060021645685357" class="wbclr6" title="Colors"></a></li>
            </ul>
            <div class="clearfix"></div>
            <hr>
            <h5>Box Layout</h5>
            <ul class="wbsitebox">
                <li class="wbboxdemo">box</li>
                <li class="wbwidedemo">Full</li>
            </ul>
            <hr>
            <h5>Mode</h5>
            <ul class="wbrtlmode">
                <li><a href="https://cdn.shopify.com/s/files/1/0257/0492/3199/t/5/assets/wbrtl.css?v=128362092573715842351648442315" class="wbrtlinner">RTL</a></li>
                <li><a href="#" class="wbltrinner">LTR</a></li>
            </ul>
        </div>
    </div>
    
    

  </body>
</html>
