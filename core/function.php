<?php 

function url($path = null){
    $url = isset($_SERVER["HTTPS"]) ? "https" : "http";
    $url .= "://";
    $url .= $_SERVER["HTTP_HOST"];
    if(isset($path)){
        $url .= "/";
        $url .= $path;
    }
    return $url;
}

function route($path,$data = null){
    $url = url($path);
    if(!is_null($data)){
      $url .="?". http_build_query($data);
    }
    return $url;
}

function view($view,$data = null){
    if(!is_null($data)){
        foreach($data as $key => $value){
            ${$key} = $value;
        }
    }
    require_once ViewDIr."/$view.view.php";
}

function controller($controllerName){
    $controller = explode("@",$controllerName);
    require_once ControllerDir."/$controller[0].controller.php";
    call_user_func($controller[1]);
}

function checkMethod ($methodName) {
    $result = false;
    $methodName = strtoupper($methodName);
    $RequestMethod = $_SERVER["REQUEST_METHOD"];
    if ( $methodName === "POST" && $RequestMethod === "POST"){
        $result = true;
    }elseif ($methodName === "PUT" && $RequestMethod === "POST" && !empty($_POST["_method"]) && strtoupper($_POST["_method"]) ){
        $result = true;
    }
    return $result;
}
