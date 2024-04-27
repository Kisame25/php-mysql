<?php 
    function IsUrl($value){
        return $_SERVER['REQUEST_URI'] === $value;
    }
?>