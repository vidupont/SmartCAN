<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=0.8; maximum-scale=0.8; user-scalable=no;"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<title>Nest Thermostat for DomoCAN - Original Source: http://homeautomategorilla.blogspot.be</title>

<style>

body, div {
  -moz-user-select: none;
  user-select: none;  
  -webkit-user-select: none;
  -webkit-tap-highlight-color: rgba(0,0,0,0);    
}

a img {		border: none;
  	  }
a {		color: #FFF;
  }

 /* Fontes utilis�es */  
@font-face {
    font-family: "N_E_B";
    src: url(N_E_B.TTF) format("truetype");
    }
	
@font-face {
    font-family: "MANDATOR";
    src: url(MANDATOR.TTF) format("truetype");
    }
	
.desc {
 position:relative;
 left:22;
 top:22;
 }
 /* Le grand cercle noir glossy */
.full-circle {
 position:relative;
 left:22;
 top:22;
 border: 3px solid #333;
 height: 350px;
 width: 350px;

 -moz-border-radius:350px;
 border-radius:350px;
 -webkit-border-radius: 350px;
 
  
 /* Permet de mettre un d�grad� sur le cercle en fonction de tous les navigateurs */
 background: #eaeaea; /* Old browsers */
 background: -webkit-radial-gradient(top left, ellipse cover, #eaeaea 0%,#eaeaea 11%,#0e0e0e 61%); /* Chrome10+,Safari5.1+ */
 background: -moz-radial-gradient(top left, ellipse cover,  #eaeaea 0%, #eaeaea 11%, #0e0e0e 61%); /* FF3.6+ */
 background: -webkit-gradient(radial, top left, 0px, top left, 100%, color-stop(0%,#eaeaea), color-stop(11%,#eaeaea), color-stop(61%,#0e0e0e)); /* Chrome,Safari4+ */
 background: -o-radial-gradient(top left, ellipse cover,  #eaeaea 0%,#eaeaea 11%,#0e0e0e 61%); /* Opera 12+ */
 background: -ms-radial-gradient(top left, ellipse cover,  #eaeaea 0%,#eaeaea 11%,#0e0e0e 61%); /* IE10+ */
 background: radial-gradient(top left, ellipse cover,  #eaeaea 0%,#eaeaea 11%,#0e0e0e 61%); /* W3C */
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eaeaea', endColorstr='#0e0e0e',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
 
 /* Permet de ne pas pouvoir �tre s�lectionn� */
 -webkit-touch-callout: none;
 -webkit-user-select: none;
 -khtml-user-select: none;
 -moz-user-select: none;
 -ms-user-select: none;
 user-select: none;
}

/* Fond chrom�, j'utilise ici une image d'un disque bross� */
.fond {
  position:relative;
  background-image: url(fond.png);
  background-repeat: no-repeat;
  width: 400px;
  height: 400px;
  /*left: 40%;
  /*top:20%;
  /* Permet de replir la totalit� de la zone */
  background-size:cover;
  /* Permet de ne pas pouvoir �tre s�lectionn� */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* La petite feuille nest, affich�e en cas d'�conomie d'�nergie, ici lorsqu'on baisse la t� ou le ventilo */
.feuille {
  position:relative;
  top:-220px;
  left:90px;
  background-image: url(feuille.png);
  background-repeat: no-repeat;
  width: 32px;
  height: 32px;
  z-index:auto;
  /* non affich�e par d�faut */
  opacity:0;
  /* Permet de ne pas pouvoir �tre s�lectionn� */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  /* Alignement */
  text-align: center;
}

/* La petite flamme, affich�e en cas de demande de chauffage imm�diate, disparait en cliquant desssus */
.fire {
  position:relative;
  top:-180px;
  left:90px;
  background-image: url(fire.png);
  background-repeat: no-repeat;
  width: 32px;
  height: 32px;
  z-index:auto;
  /* non affich�e par d�faut */
  opacity:0;
  /* Permet de ne pas pouvoir �tre s�lectionn� */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  text-align: center;
}

/* La valeur NEST affich�e, soit Temp�rature, soit % ventilo soit demande chauffage imm�diat */
.nestValue {
position:relative;
  top:-100;
  left:-10;
  font-family: "MANDATOR", Verdana, Tahoma;
  font-size:60px;
  color:#ffffff;
  /* Permet de ne pas pouvoir �tre s�lectionn� */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  text-align: center;
}

/* En cas de demande imm�diate de chauffage, dur�e de demande ici 2h  */
.hour {
  position:relative;
  top:-160;
  left:60;
  font-family: "MANDATOR", Verdana, Tahoma;
  font-size:20px;
  color:#ffffff;
  /* Permet de ne pas pouvoir �tre s�lectionn� */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

  opacity:0;
  z-index:500;
}

/* En cas de demande imm�diate de chauffage, dur�e de demande ici 4h  */
.hour2 {
  position:relative;
  top:-206;
  left:120;
  font-family: "MANDATOR", Verdana, Tahoma;
  font-size:20px;
  color:#ffffff;
  /* Permet de ne pas pouvoir �tre s�lectionn� */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

  opacity:0;
  z-index:500;
}

* En cas de demande imm�diate de chauffage, dur�e de demande ici 2h  */
.consigne {
  position:relative;
 
  font-family: "MANDATOR", Verdana, Tahoma;
  font-size:10px;
  color:#ffffff;
  /* Permet de ne pas pouvoir �tre s�lectionn� */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  display:none;
  opacity:0;
  z-index:500;
}

/* Mode Nest: Temp�rature, Fan, ou demande chauffage */
.nestMode {
position:relative;
  top:-30;
  left:-10;
  font-family: "MANDATOR", Verdana, Tahoma;
  font-size:20px;
  color:#ffffff;
  /* Permet de ne pas pouvoir �tre s�lectionn� */
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

  text-align: center;
}

/* Titre nest, en cliquant les fonctions apparaissent */
.nestTitle {
  position:relative;
  top:-60;
  left:85;
  font-family: "N_E_B", Verdana, Tahoma;
  font-size:30px;
  color:#ffffff;
  z-index:100;
}


/* Le cercle bleu interne */
.center-circle-cold{
 position:relative;
 left:65;
 top:35;
 border: 0px solid #333;
 height: 220px;
 width: 220px;
 -moz-border-radius:220px;
 border-radius:220px;
 -webkit-border-radius: 220px;

  
 /* D�grad� circulaire */
 background: #3e61a8; /* Old browsers */
 background: -webkit-radial-gradient(top left, ellipse cover, #fff9f9 10%,#0338ac 60%); /* Chrome10+,Safari5.1+ */
 background: -moz-radial-gradient(top left, ellipse cover,  #eaeaea 0%, #fff9f9 10%, #0338ac 60%); /* FF3.6+ */
 background: -webkit-gradient(radial, top left, 0px, top left, 100%, color-stop(0%,#eaeaea), color-stop(10%,#fff9f9), color-stop(60%,#0338ac)); /* Chrome,Safari4+ */
 background: -o-radial-gradient(top left, ellipse cover,  #eaeaea 0%,#fff9f9 10%,#0338ac 60%); /* Opera 12+ */
 background: -ms-radial-gradient(top left, ellipse cover,  #eaeaea 0%,#fff9f9 10%,#0338ac 60%); /* IE10+ */
 background: radial-gradient(top left, ellipse cover,  #eaeaea 0%,#fff9f9 10%,#0338ac 60%); /* W3C */
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eaeaea', endColorstr='#0338ac',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

 /* Permet de ne pas pouvoir �tre s�lectionn� */
 -webkit-touch-callout: none;
 -webkit-user-select: none;
 -khtml-user-select: none;
 -moz-user-select: none;
 -ms-user-select: none;
 user-select: none;
}

/*----------------------------
	Barres de progression color�es
-----------------------------*/


#bars{
    
	height: 212px;
	margin: 0 auto;
	position: relative;
	top: 10px;
	left: 2px;
	width: 228px;
	-webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
     user-select: none;
}

.colorBar{
	width:15px;
	height:1px;
	position:absolute;
	opacity:0;
	background-color : #F4F4F4;
	-moz-transition:1s;
	-webkit-transition:1s;
	-o-transition:1s;
	transition:1s;
	-webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.colorBar.active{
	opacity:1;
}



</style>







<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="jqueryRotate.js"></script>

<style type="text/css"></style>


<script type="text/javascript">
// Fonction permettant de dessiner les bars de progression
$(document).ready(function(){
	var rad2deg = 180/Math.PI;
	var deg = 0;
	var bars = $('#bars');
	var j=0;
	for(var i=-20;i<82;i++){
		deg = i*3;
		//console.log(deg);
		// Creation des barres
		mytop =(-Math.sin(deg/rad2deg)*95+100);
		myleft = Math.cos((180 - deg)/rad2deg)*95+100;
		// On ajoute ici 82 barres en indiquant � chacune l'angle de rotation
	$('<div id=barre' + j + ' name=barre' + j + ' class="colorBar" style="-webkit-transform: rotate(' + deg + 'deg) scale(1.25, 0.5); -moz-transform: rotate(' + deg + 'deg) scale(1.25, 0.5); -ms-transform: rotate(' + deg + 'deg) scale(1.25, 0.5);transform: rotate('+ deg +'deg) scale(1.25, 0.5);top: '+ mytop + '; left: ' + myleft+ ' ; color:red" >')
		.appendTo(bars);	
		j++;
	}
	var colorBars = bars.find('.colorBar');
	var numBars = 0, lastNum = -1;
	// ici on les d�sactive toutes en utilisant la css active sur les �l�ments de 0 � 0. donc rien.
    colorBars.removeClass('active').slice(0, 0).addClass('active');
})
</script>

<script type="text/javascript">  
$(document).ready(function(){    

$("body").on("touchmove", false);

// Fonction principale, ici un tableau de couleurs d�grad�es
var grad = [
		'243594','2c358f','373487','44337e','513174',
		'5c306c','6b2f62','792e58','892d4d','9e2b3d',
		'b4292e','c9271f','e0250e'];

// Dernier angle calcul�
var lastAngle=0;
// Savoir si le bouton de souris est press�.
var mouseDown="";
// temperature confort
var temperatureConfort=0;
// temperature mini
var temperatureMini=0;
// temperature Affichage LCD
var temperatureNest=0;
// temperature actuelle sondes
var temperatureActuelle=0;

// ratio utilis� pour synchroniser les barres et le mode temp�rature
var ratioTemperature=4;
// couleur de fond pour la temperature (par d�faut)
var couleurFondTemperature="#243594";
// couleur de fond pour autoaway
var couleurFondAutoAway="#000000";
// mode par d�faut ici TEMP
var currentMode="";
// Savoir si on est en mode Demande de chauffage Now
var heatNow = "";

var consigne=$('#consigne');

var readyToSensor="NOK";
var modeForce="";

refreshTemp();

// Une petite tache de fond lanc�e toutes les 15 secondes pour raffraichir les donn�es de puis le serveur
var refreshLoop = setInterval(function () {
    refreshTemp();
}, 15000);


//Une petite tache de fond pour faire disparaitre l'affichage et remettre la temperature actuelle (sondes)
var sensorLoop = setInterval(function () {
	if ( readyToSensor == "OK" )
		{
		$("#nestMode" ).slideDown();
		$("#nestValue" ).slideDown();
		$("#hour" ).slideDown();
		$("#hour2" ).slideDown();
		$("#consignee" ).slideDown();
		$( "#nestMode" ).html("Actuellement");
		 $( "#nestValue" ).html(temperatureActuelle);
		 $("#hour").css("opacity","0");
		  $("#hour2").css("opacity","0");
		  $( "#consigne" ).html("");
			$( "#consigne" ).css("opacity","0");
			$("#hour").css("opacity","0");
			$("#hour2").css("opacity","0");
			$('#feuille').css("opacity","0");
			poseConsigne(0,"");
			majBarres(0,ratioTemperature);
			temperatureNest=temperatureActuelle;
			setCouleurTemperature();
			majCouleurCercle(couleurFondTemperature);
			//console.log("Mode force " + modeForce);
			if ( modeForce == "" || modeForce == "false")
			{
			 $("#fire").css("opacity","0");
			} else{
		 $("#fire").css("opacity","1");
		}
		}
	if ( mouseDown != "ok" )
		{
		readyToSensor="OK";
		}else
			{
			readyToSensor="NOK";
			}
}, 5000);




// Calibrage des rotations, pour l'affichage uniquement, rien de fonctionnel
for(var i=0;i<3600;i++){
$('#full-circle').rotate(Math.round(i));  

}



function refreshTemp()
{
	//console.log("Refresh Temp");
	getTempMini();
	getTempConfort();
	getTempActuelle();
	getModeForce();
	setCouleurTemperature();
	
}
	
	
// Permet de positionner la temperature de consigne sur les barres
function poseConsigne(numBar,val)
{
        var rad2deg = 180/Math.PI;
		deg = numBar*3;
		//console.log(deg);
		// Creation des barres
		mytop =(-Math.sin(deg/rad2deg)*95+100);
		myleft = Math.cos((180 - deg)/rad2deg)*95+100;
		
		
		
		//console.log("myleft=" + Math.round(myleft));
		var colorbar = $('#barre' + numBar)
		
		if  ( colorbar != null )
		{
		var colorbarOffset = colorbar.offset();
		//console.log("LEFT: " + colorbar.left);
		if ( colorbarOffset != null )
		{
		consigne.css("position","absolute");
		consigne.css("left",colorbarOffset.left);
		consigne.css("top",colorbarOffset.top);
		//for(var i=0;i<102;i++){
		//var colorbarTmp = $('#barre' + i);
		//colorbarTmp.css("height",1);
		//}
		//colorbar.css("height",4);
		}
		//console.log("NUMBAR: " + numBar);
		}
		consigne.css("font-family","MANDATOR");
		consigne.html(val);
};


function setCouleurTemperature()
{
	
	// Choix de la couleur de fond en fonction de la temperature
	var temp=Math.round(temperatureNest);
	//console.log("temperature Nest " + temperatureNest);
	//console.log("temperature round " + temp);
	if ( temp < 12 )
	 {
		//console.log("IF 1");
	  couleurFondTemperature='#' + grad[0];
	 }
	if ( temp > 24 )
	 {
		//console.log("IF 2");
	  couleurFondTemperature='#' + grad[11];
	 }
	if (  (temp <= 24 ) && (temp >= 12) )
	  {
	  //console.log("IF 3");
	  couleurFondTemperature='#' + grad[temp - 12];
	  }	
	
	 //console.log("Fin setCouleurTemperature couleurFondTemperature=" + couleurFondTemperature);
}

// D�finition de la fonction pour gestion de temperature
function manageTemperature(e) {
    var offset = $('#full-circle').offset();
    var width=$('#full-circle').width();
    var height=$('#full-circle').height();
    var center_x = (offset.left) + (width/2);
    var center_y = (offset.top) + (height/2);
    var mouse_x = e.pageX; var mouse_y = e.pageY;
	var bars = $('#bars');
	var centerCircle = $('#center-circle-cold');
	var colorBars = bars.find('.colorBar');
	var feuille = $('#feuille');

	//console.log("width="+ width + " height="+height + " center_x=" + center_x + " center_y=" + center_y + " offsetLeft=" + offset.left + " this.offsetTop="+ offset.top);
	
	 setCouleurTemperature();
     // Arrondi au Dixi�me
     temperatureNest=Math.round(temperatureNest*10)/10;

	
     var radians = Math.atan2(mouse_x - center_x, mouse_y - center_y);
     degree = (radians * (180 / Math.PI) * -1) + 180; 
	 
	 // On regarde le dernier angle pour savoir si on est en mode + ou -
	 if ( degree - lastAngle > 0)
	 {
	   //console.log("lastAngle=" + lastAngle + " degree=" + degree + "+");
	   temperatureNest+=0.1;
	   
	   feuille.css("opacity","0");
	   $( "#nestMode" ).html(currentMode);
	 } else
	 {
	   //console.log("lastAngle=" + lastAngle + " degree=" + degree + "-");
	   temperatureNest-=0.1;
	   
       feuille.css("opacity","1");
	   $( "#nestMode" ).html(currentMode);
	 }
	 //temperatureNest=Math.round(temperature);
	 temperatureNest=Math.round(temperatureNest*10)/10;
	 majCouleurCercle(couleurFondTemperature);
	 poseConsigne(ratioTemperature*temperatureNest,temperatureNest);
	 majBarres(temperatureNest,ratioTemperature);
	 lastAngle=degree;
	
	 $( "#nestValue" ).html(temperatureNest );
	 
};


// Fonction mettant � jour les barresn en passant la valeur et le ratio
function majBarres(value,ratio)
{
var bars = $('#bars');
var colorBars = bars.find('.colorBar');
colorBars.removeClass('active').slice(0, Math.round(value*ratio)).addClass('active');

}

function getTempConfort()
{
// Pour rendre dynamique la recherche appliquer le m�me raisonnement que pour la fonction getTempActuelle
//DATAS Ici on r�cup�re un valeur al�atoire pour la d�mo, mais sinon en d�commentant en  dessous et positionnant votre 
	// url la temp�rature sera r�cup�r�e en AJAX
	//var requestTempConfort=$.ajax({
	//	  url: "ObjectAction?action=getTempConfort&objectName=Chauffage&objectClass=Manager",
	//	  dataType: "html",
	//	  async: true
	//	});
	//requestTempConfort.done(function(msg) {
	//	temperatureConfort=msg;
	//	});
}

function getTempActuelle()
{
    //DATAS Ici on r�cup�re un valeur al�atoire pour la d�mo, mais sinon en d�commentant en  dessous et positionnant votre 
	// url la temp�rature sera r�cup�r�e en AJAX
	temperatureActuelle=Math.floor((Math.random()*20)+1);
	//var requestTempActuelle=$.ajax({
	//	  url: "ObjectAction?action=getTempActuelle&objectName=Chauffage&objectClass=Manager",
	//	  dataType: "html",
	//	  async: true
	//	});
	//requestTempActuelle.done(function(msg) {
	//	temperatureActuelle=msg;
	//	});
}

function getModeForce()
{
    //DATAS Pour rendre dynamique la recherche appliquer le m�me raisonnement que pour la fonction getTempActuelle
	//var requestModeForce=$.ajax({
	//	  url: "ObjectAction?action=getModeForce&objectName=Chauffage&objectClass=Manager",
	//	  dataType: "html",
	//	  async: true
	//	});
	//requestModeForce.done(function(msg) {
	//	modeForce=msg;
	//	//console.log("Mode force = " + msg);
	//	
//	
//		
//		});
}

function setTempConfort()
{
    //DATA Fonction permettant d'envoyer au serveur le fait que la temperature confort est modifi�e
	// Pour la d�mo on ne fait rien, mais mettre ici votre url de type rest pour publier la nouvelle valeur
	//	var requestTempConfort=$.ajax({
	//		  url: "ObjectAction?action=setTempConfort&objectName=Chauffage&objectClass=Manager&arguments=" + temperatureConfort + ":Double",
	//		  dataType: "html",
	//		  async: true
	//		});
	}
	
function setTempMini()
{
	//DATA Fonction permettant d'envoyer au serveur le fait que la temperature mini est modifi�e
	// Pour la d�mo on ne fait rien, mais mettre ici votre url de type rest pour publier la nouvelle valeur
	//	var requestTempMini=$.ajax({
	//		  url: "ObjectAction?action=setTempMini&objectName=Chauffage&objectClass=Manager&arguments=" + temperatureMini + ":Double",
	//		  dataType: "html",
	//		  async: true
	//		});
	}

function getTempMini()
{
// Pour rendre dynamique la recherche appliquer le m�me raisonnement que pour la fonction getTempActuelle
//DATA Ici on r�cup�re un valeur al�atoire pour la d�mo, mais sinon en d�commentant en  dessous et positionnant votre 
	// url la temp�rature sera r�cup�r�e en AJAX
	//var requestTempMini=$.ajax({
	//	  url: "ObjectAction?action=getTempMini&objectName=Chauffage&objectClass=Manager",
	//	  dataType: "html",
	//	  async: true
	//	});
	//requestTempMini.done(function(msg) {
	//	temperatureMini=msg;
	//});
	
	
}
// Fonction mettant � jour le degrad� sur cercle central en passant la couleur de fond � obtenir
function majCouleurCercle(couleurFond)
{
	//console.log("maj couleur cercle " + couleurFond);
       var centerCircle = $('#center-circle-cold');
	   centerCircle.css("background", "-webkit-radial-gradient(top left, ellipse cover, #fcf7f7 10%," + couleurFond + " 60%)"); /* Chrome 10 */
	   centerCircle.css("background", "-moz-radial-gradient(top left, ellipse cover, #fcf7f7 10%," + couleurFond + " 60%)"); /* FF */
	   centerCircle.css("background", "-webkit-gradient(radial, top left, 0px, top left, 100%, color-stop(10%,fff9f9), color-stop(60%,"+ couleurFond +"))"); /* Safari */
	   centerCircle.css("background", "-o-radial-gradient(top left, ellipse cover, #fcf7f7 10%," + couleurFond + " 60%)"); /* Opera 12+ */
	   centerCircle.css("background", "-ms-radial-gradient(top left, ellipse cover, #fcf7f7 10%," + couleurFond + " 60%)"); /* IE10+ */
       centerCircle.css("background", "radial-gradient(top left, ellipse cover, #fcf7f7 10%," + couleurFond + " 60%)"); /* W3C */
}





$('#full-circle').mousedown(function(e){
  // Lorsqu'on appuie sur le bouton de gauche, on autorise le thermostat � bouger
  mouseDown="ok";
  
});

$('*').mousedown(function(e){
	readyToSensor="NOK";
	});

$('*').mouseup(function(e){
  // Lorsqu'on relache le bouton de gauche, on n'autorise plus le thermostat � bouger
  mouseDown="";
  //console.log("Relache");
  release();
  
});

function release()
{
	if ( currentMode == "TEMP CONFORT" )
		{
	temperatureConfort=temperatureNest;	
	setTempConfort();
		}
	if ( currentMode == "TEMP MINI" )
		{
		temperatureMini=temperatureNest;
		setTempMini();
		}
}

// Lorsque l'on clique sur l'icone 2h, on sauvegarde et on fait tout disparaitre
$('#hour').click(function(){ 
  $("#hour").css("opacity","0");
  $("#hour2").css("opacity","0");
  $("#fire").css("opacity","1");
  heatNow=2;
   $( "#nestValue" ).html("2h");
   var requestHeatFor2=$.ajax({
		  url: "ObjectAction?action=forceHeat&objectName=Chauffage&objectClass=Manager&arguments=2:Integer",
		  dataType: "html",
		  async: true
		});
});
// Lorsque l'on clique sur l'icone 4h, on sauvegarde et on fait tout disparaitre
$('#hour2').click(function(){ 
  $("#hour").css("opacity","0");
  $("#hour2").css("opacity","0");
  $("#fire").css("opacity","1");
  heatNow=4;
   $( "#nestValue" ).html("4h");
   var requestHeatFor4=$.ajax({
		  url: "ObjectAction?action=forceHeat&objectName=Chauffage&objectClass=Manager&arguments=4:Integer",
		  dataType: "html",
		  async: true
		});
});

// Lorsque l'on clique sur l'icone fire, le mode de demande imm�diate de chauffage disparait
$('#fire').click(function(){ 
$("#fire").css("opacity","0");
heatNow="";
// Appel a HomeAutomate pour arr�ter le mode forc�
//Mise en place des liste de sondes, actionneurs
var requestUnHeat=$.ajax({
			  url: "ObjectAction?action=unForceHeat&objectName=Chauffage&objectClass=Manager",
			  dataType: "html",
			  async: true
			});
});

// Lorsque l'on clique sur le texte nest, on switch d'un mode � l'autre
$('#nestTitle').click(function(){ 

  //console.log("clic" + " currentMode=" + currentMode);
  if ( currentMode == "Auto" )
   {
    currentMode="HEAT NOW";
	$( "#nestValue" ).html('for');
	setCouleurTemperature();
	majCouleurCercle(couleurFondTemperature);
	majBarres(0,ratioTemperature);
	$("#hour").css("opacity","1");
	$("#hour2").css("opacity","1");
	$( "#consigne" ).css("opacity","0");
	$('#feuille').css("opacity","0");
   } else if ( currentMode == "HEAT NOW" )
   {
    currentMode="TEMP MINI";
    temperatureNest=temperatureMini;
	$( "#nestValue" ).html(temperatureNest );
	setCouleurTemperature();
	majCouleurCercle(couleurFondTemperature);
	majBarres(temperatureNest,ratioTemperature);
	$( "#consigne" ).html("");
	$( "#consigne" ).css("opacity","1");
	$("#hour").css("opacity","0");
	$("#hour2").css("opacity","0");
	$('#feuille').css("opacity","0");
   }else if ( currentMode == "TEMP MINI"  )
   {
	   
	    currentMode="TEMP CONFORT";
	    temperatureNest=temperatureConfort;
		$( "#nestValue" ).html(temperatureNest );
		setCouleurTemperature();
		majCouleurCercle(couleurFondTemperature);
		majBarres(temperatureNest,ratioTemperature);
		$( "#consigne" ).html("");
		$( "#consigne" ).css("opacity","1");
		$("#hour").css("opacity","0");
		$("#hour2").css("opacity","0");
		$('#feuille').css("opacity","0");
	}else if ( currentMode == "TEMP CONFORT" || currentMode == "" )
   {
   currentMode="Auto";
	$( "#nestValue" ).html("AWAY");
	setCouleurTemperature();
	majCouleurCercle(couleurFondAutoAway);
	$( "#consigne" ).html("");
	$( "#consigne" ).css("opacity","0");
	$("#hour").css("opacity","0");
	$("#hour2").css("opacity","0");
	$('#feuille').css("opacity","1");
	majBarres(0,ratioTemperature);
   }
  
  
  $("#nestMode" ).slideUp();
  $( "#nestMode" ).html(currentMode)
  $("#nestMode" ).slideDown();
});



// En fonction du mode, on fait varier les couleurs et les barres diff�rement
$('#full-circle').mousemove(function(e){ 
  // Si on est autoris� � bouger	
  if ( mouseDown == "ok" )
   {
    if ( currentMode == "TEMP CONFORT" ||  currentMode == "TEMP MINI" )
	{
	manageTemperature(e);
    } 
   }
});


$('#full-circle').bind( "touchstart", function(e){
  // Lorsqu'on touche l'�cran, on autorise le thermostat � bouger
  mouseDown="ok";
  //console.log("touchstart");
});

$('*').bind( "touchend", function(e){
       // Lorsqu'on relache l'�cran, on n'autorise plus le thermostat � bouger
  mouseDown="";
  release();
  //console.log("touchend");
});

$('#full-circle').bind( "touchmove", function(e){
	readyToSensor="NOK";
    var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
  // Si on est autoris� � bouger   
  if ( mouseDown == "ok" )
   {
    if ( currentMode == "TEMP MINI" || currentMode == "TEMP CONFORT" )
   {
   manageTemperature(touch);
    } 
    
 }
});
});
</script>

<!-- DEBUT IMPORT DU MENU PRINCIPAL -->
<script type="text/javascript" src="javascript/interfaceFred.js"></script>
<LINK rel="stylesheet" type="text/css" href="css/dockMenu.css">

<!-- FIN IMPORT MENU PRINCIPAL -->


<script type="text/javascript">
//<![CDATA[
var gs_d=new Date,DoW=gs_d.getDay();gs_d.setDate(gs_d.getDate()-(DoW+6)%7+3);
var ms=gs_d.valueOf();gs_d.setMonth(0);gs_d.setDate(4);
var gs_r=(Math.round((ms-gs_d.valueOf())/6048E5)+1)*gs_d.getFullYear();
var gs_p = (("https:" == document.location.protocol) ? "https://" : "http://");
document.write(unescape("%3Cscript src='" + gs_p + "s.gstat.orange.fr/lib/gs.js?"+gs_r+"' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>
</head>
<body style="background: #000; color: #FFF;">	

<div id=menu></div>


<div class="fond">
	<div id="full-circle" class="full-circle">
		<div id="center-circle-cold" class="center-circle-cold">
			  <div id="bars">
	          <p id="nestTitle" class="nestTitle">nest</p>
			  <p name="nestMode" id="nestMode" class="nestMode"></p>
			  <p name="nestValue" id="nestValue" class="nestValue"></p>
			  <p name="hour" id="hour" class="hour">2H</p>
			  <p name="hour2" id="hour2" class="hour2">4H</p>
			
			  <div id="feuille" class="feuille"></div>
			  <div id="fire" class="fire"></div>
		</div>
	</div>
</div>

</div>



  <div id="consigne" name="consigne" ></div>

<script type="text/javascript">
//<![CDATA[
if (typeof _gstat != "undefined") _gstat.audience('','pagesperso-orange.fr');
//]]>
</script>
</body></html>