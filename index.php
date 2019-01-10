<?php
require_once 'autoloader.php';

require_once "classes/View.php";
require_once "classes/Controller.php";

/*  VISTE */
ZRoute::get("/", function (){
  $weekWin = Controller::getWeekWin();
  $mouthWin = Controller::getMouthWin();
  View::getView("home", "", ['weekWin' => $weekWin, 'mouthWin' => $mouthWin]);
});
ZRoute::get("/home", function (){
  $weekWin = Controller::getWeekWin();
  $mouthWin = Controller::getMouthWin();
  View::getView("home", "", ['weekWin' => $weekWin, 'mouthWin' => $mouthWin]);
}, "homepage");
ZRoute::get("/scommetti", function (){
  View::getView("scommetti", "");
}, "scommetti");
ZRoute::get("/login", function (){
  View::getView("home", "");
}, "login");
ZRoute::get("/logout", function (){
  View::getView("home", "");
}, "logout");
ZRoute::get("/register", function (){
  View::getView("home", "");
}, "register");

/*  FUNZIONI  */
ZRoute::post("/addScommessa", function (){

});


ZRoute::post("/login", function (){

});

/*  AJAX  */
ZRoute::post("/show_my_profile", function (){
  //Qui ci va lo script che deve essere esguito quando si fa una chiamata AJAX per mostrare il mio profilo
}, "my_profile");




ZRoute::listen();

?>
