<?php
class frog{
    //property
    var $nama;
    var $legs;
    var $cold_blooded;
    var $jump;
    function nama(){
        return "Nama : Buduk <br/>";
    }
    function legs(){
        return "legs : 4 <br/>";
    }
    function cold_blooded(){
        return "cold_blooded : no <br/>";
    } 
    function jump(){
        return "jump : Hop Hop <br/>";
    } 
}
//instansiasi class frog
$frog = new frog();
 
echo $frog->nama();
echo $frog->legs();
echo $frog->cold_blooded();
echo $frog->jump();