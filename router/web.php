<?php
 $uri =  $_SERVER["REQUEST_URI"];
 $gg = parse_url($uri);
$path = $gg["path"];
  const Route = [
    "/" => "list@home",
    "/list" => "list@index",
    "/list-create" => "list@create",
    "/list-store" => ["post","list@store"],
    "/list-delete" => ["delete","list@delete"],
    "/list-edit"  => "list@edit",
    "/list-update" =>["put","list@update"]
  ];

 if (array_key_exists($path,Route) && is_array(Route[$path]) && checkMethod(Route[$path][0]) ){
    controller(Route[$path][1]);
 }elseif (array_key_exists($path,Route) && !is_array(Route[$path])){
     controller(Route[$path]);
 }else{
     echo  "not found";
 }
?>