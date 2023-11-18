<?php
class animal{
    //property
    var $nama;
    var $legs;
    var $cold_blooded;
    function nama(){
        return "Nama : Sheep <br/>";
    }
    function legs(){
        return "legs : 4 <br/>";
    }
    function cold_blooded(){
        return "cold_blooded : no <br/>";
    } 
}
//instansiasi class animal
$animal = new animal();
 
echo $animal->nama();
echo $animal->legs();
echo $animal->cold_blooded();
