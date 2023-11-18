<?php
class ape{
    //property
    var $nama;
    var $legs;
    var $cold_blooded;
    var $yell;
    function nama(){
        return "Nama : Kera Sakti <br/>";
    }
    function legs(){
        return "legs : 2 <br/>";
    }
    function cold_blooded(){
        return "cold_blooded : no <br/>";
    } 
    function yell(){
        return "yell : Auuoooo <br/>";
    } 
}
//instansiasi class ape
$ape = new ape();
 
echo $ape->nama();
echo $ape->legs();
echo $ape->cold_blooded();
echo $ape->yell();