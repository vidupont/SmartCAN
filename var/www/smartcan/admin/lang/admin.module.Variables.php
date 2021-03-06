<?php
// PHP Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Messages
   // EN
$msg["VARIABLES"]["AdminFirstUse"]["en"] = "First Setup Successful!";
$msg["VARIABLES"]["PageName"]["en"] = "Manage Variables";
$msg["VARIABLES"]["ERROREmptyAlias"]["en"] = "Error: Alias may not be empty!";
$msg["VARIABLES"]["ERRORbadFormatAlias"]["en"] = "Error: Alias may only contain letters, numbers and underscore!";
$msg["VARIABLES"]["ERRORpasswdTooShort"]["en"] = "Error: Your Password shoudl be at least 6 charaters!!";
$msg["VARIABLES"]["ERRORpasswdUserDiff"]["en"] = "Error: Your password should be different from Username!!";
$msg["VARIABLES"]["ERRORpasswdOneNumber"]["en"] = "Error: Your password should contain at least one number! (0-9)!";
$msg["VARIABLES"]["ERRORpasswdOneLower"]["en"] = "Error: Your password should contain at least one lowercase! (a-z)!";
$msg["VARIABLES"]["ERRORpasswdOneUpper"]["en"] = "Error: Your password should contain at least one Uppercase! (A-Z)!";
$msg["VARIABLES"]["ERRORpasswdEmpty"]["en"] = "Error: Password empty or NOT confirmed!";
$msg["VARIABLES"]["ERRORpasswdSpecials"]["en"] = "Error: Please DON'T use ! here.";
$msg["VARIABLES"]["ServerSecu"]["en"] = "Server Security:";
$msg["VARIABLES"]["ConsoleAccess"]["en"] = "Console and SSH Access:";
$msg["VARIABLES"]["RootPiPasswd"]["en"] = "<b>pi (and root)</b> Password";
$msg["VARIABLES"]["RootPasswd"]["en"] = "<b>root</b> Password";
$msg["VARIABLES"]["SMBAccess"]["en"] = "Windows File Sharing:";
$msg["VARIABLES"]["SQLAccess"]["en"] = "<b>MySQL root</b> Password";
$msg["VARIABLES"]["AdminAccount"]["en"] = "<b>Administrator</b> Account";
$msg["VARIABLES"]["UserAccount"]["en"] = "<b>User</b> Account";
$msg["VARIABLES"]["LocalAuthentication"]["en"] = "Authenticate Local Access?";
$msg["VARIABLES"]["redirectPage"]["en"] = "Redirection Page?";
$msg["VARIABLES"]["LocalInterface"]["en"] = "Interface:";
$msg["VARIABLES"]["InterfaceLight"]["en"] = "Light";
$msg["VARIABLES"]["InterfaceThermostat"]["en"] = "Thermostat";
$msg["VARIABLES"]["InterfaceVibes"]["en"] = "Vibes";
$msg["VARIABLES"]["InterfaceWeather"]["en"] = "Weather";
$msg["VARIABLES"]["InterfaceSurveillance"]["en"] = "Surveillance";
$msg["VARIABLES"]["InterfaceMisc"]["en"] = "Misc";
$msg["VARIABLES"]["DefaultPage"]["en"] = "Default Page";

   // FR
$msg["VARIABLES"]["AdminFirstUse"]["fr"] = "Premi&egrave;re mise en place R&eacute;ussie!";
$msg["VARIABLES"]["PageName"]["fr"] = "G&eacute;rer les Variables"; 
$msg["VARIABLES"]["ERROREmptyAlias"]["fr"] = "Erreur: l'Alias ne peut \xEAtre vide!";
$msg["VARIABLES"]["ERRORbadFormatAlias"]["fr"] = "Erreur: Votre alias ne peut contenir que les letrres, chiffres et underscore!";
$msg["VARIABLES"]["ERRORpasswdTooShort"]["fr"] = "Erreur: Votre mot de passe doit contenir au minimum 6 caract\xE8res!!";
$msg["VARIABLES"]["ERRORpasswdUserDiff"]["fr"] = "Erreur: Votre mot de passe doit \xEAtre diff\xE9rent de nom de l'utilisateur!!";
$msg["VARIABLES"]["ERRORpasswdOneNumber"]["fr"] = "Erreur: Votre mot de passe doit contenir au moins un chiffre! (0-9)!";
$msg["VARIABLES"]["ERRORpasswdOneLower"]["fr"] = "Erreur: Votre mot de passe doit contenir au moins une minuscule! (a-z)!";
$msg["VARIABLES"]["ERRORpasswdOneUpper"]["fr"] = "Erreur: Votre mot de passe doit contenir dau moins une majuscule! (A-Z)!";
$msg["VARIABLES"]["ERRORpasswdEmpty"]["fr"] = "Erreur: mot de passe vide ou pas confirm\xE9!";
$msg["VARIABLES"]["ERRORpasswdSpecials"]["fr"] = "Erreur: n'utilisez pas de ! ici.";
$msg["VARIABLES"]["ServerSecu"]["fr"] = "S&eacute;curit&eacute; Serveur:";
$msg["VARIABLES"]["ConsoleAccess"]["fr"] = "Acc&egrave;s Console et SSH:";
$msg["VARIABLES"]["RootPiPasswd"]["fr"] = "Mot de passe <b>pi (et root)</b>";
$msg["VARIABLES"]["RootPasswd"]["fr"] = "Mot de passe <b>root</b>";
$msg["VARIABLES"]["SMBAccess"]["fr"] = "Windows File Sharing:";
$msg["VARIABLES"]["SQLAccess"]["fr"] = "Mot de passe <b>root MySQL</b>";
$msg["VARIABLES"]["AdminAccount"]["fr"] = "Compte <b>Administrateur</b>";
$msg["VARIABLES"]["UserAccount"]["fr"] = "Compte <b>Utilisateur</b>";
$msg["VARIABLES"]["LocalAuthentication"]["fr"] = "Authentifier en local?";
$msg["VARIABLES"]["redirectPage"]["fr"] = "Page de redirection?";
$msg["VARIABLES"]["LocalInterface"]["fr"] = "Interface:";
$msg["VARIABLES"]["DefaultPage"]["fr"] = "Page par d&eacute;faut";
$msg["VARIABLES"]["InterfaceLight"]["fr"] = "Lumi&egrave;res";
$msg["VARIABLES"]["InterfaceThermostat"]["fr"] = "Thermostat";
$msg["VARIABLES"]["InterfaceVibes"]["fr"] = "Ambiances";
$msg["VARIABLES"]["InterfaceWeather"]["fr"] = "M&eacute;t&eacute;o";
$msg["VARIABLES"]["InterfaceSurveillance"]["fr"] = "Surveillance";
$msg["VARIABLES"]["InterfaceMisc"]["fr"] = "Divers";

   // NL
$msg["VARIABLES"]["AdminFirstUse"]["nl"] = "Eerste Setup Succesvol!";
$msg["VARIABLES"]["PageName"]["nl"] = "Variabelen Beheer";
$msg["VARIABLES"]["ERROREmptyAlias"]["nl"] = "OVERTREDING: Alias mag niet leeg zijn!";
$msg["VARIABLES"]["ERRORbadFormatAlias"]["nl"] = "OVERTREDING: Alias mag allen uit letters, nummers en underscore bevatten!";
$msg["VARIABLES"]["ERRORpasswdTooShort"]["nl"] = "OVERTREDING: Je Wachtwoord moet minimum 6 charaters lang zijn!!";
$msg["VARIABLES"]["ERRORpasswdUserDiff"]["nl"] = "OVERTREDING: Je Wachtwoord moet verschillend zijn van je Username!!";
$msg["VARIABLES"]["ERRORpasswdOneNumber"]["nl"] = "OVERTREDING: Je Wachtwoord moet minimum 1 nummer bevatten! (0-9)";
$msg["VARIABLES"]["ERRORpasswdOneLower"]["nl"] = "OVERTREDING: Je Wachtwoord moet minimum 1 lowercase bevatten! (a-z)!";
$msg["VARIABLES"]["ERRORpasswdOneUpper"]["nl"] = "OVERTREDING: Je Wachtwoord moet minimum 1 Uppercase bevatten! (A-Z)!";
$msg["VARIABLES"]["ERRORpasswdEmpty"]["nl"] = "OVERTREDING: Leeg Wachtwoord of NIET bevestigd!";
$msg["VARIABLES"]["ERRORpasswdSpecials"]["nl"] = "OVERTREDING: U mag GEEN ! hier gebruiken.";
$msg["VARIABLES"]["ServerSecu"]["nl"] = "Server Veiligheid:";
$msg["VARIABLES"]["ConsoleAccess"]["nl"] = "Console en SSH Toegang:";
$msg["VARIABLES"]["RootPiPasswd"]["nl"] = "<b>pi (en root)</b> Wachtwoord";
$msg["VARIABLES"]["RootPasswd"]["nl"] = "<b>root</b> Wachtwoord";
$msg["VARIABLES"]["SMBAccess"]["nl"] = "Windows File Sharing:";
$msg["VARIABLES"]["SQLAccess"]["nl"] = "<b>MySQL root</b> Wachtwoord";
$msg["VARIABLES"]["AdminAccount"]["nl"] = "<b>Administrator</b> Account";
$msg["VARIABLES"]["UserAccount"]["nl"] = "<b>Gebruiker</b> Account";
$msg["VARIABLES"]["LocalAuthentication"]["nl"] = "Authenticeren Lokaal Toegang?";
$msg["VARIABLES"]["redirectPage"]["nl"] = "Redirection Page?";
$msg["VARIABLES"]["LocalInterface"]["nl"] = "Interface:";
$msg["VARIABLES"]["InterfaceLight"]["nl"] = "Licht";
$msg["VARIABLES"]["InterfaceThermostat"]["nl"] = "Thermostaat";
$msg["VARIABLES"]["InterfaceVibes"]["nl"] = "Sferen";
$msg["VARIABLES"]["InterfaceWeather"]["nl"] = "Weer";
$msg["VARIABLES"]["InterfaceSurveillance"]["nl"] = "Bewaking";
$msg["VARIABLES"]["InterfaceMisc"]["nl"] = "Diversen";
$msg["VARIABLES"]["DefaultPage"]["nl"] = "Default Page";





?>