<?php    

function home(){
    return view("home");
}

function index(){
    $sql = "SELECT * FROM my";
    $query = mysqli_query($GLOBALS["conn"],$sql);
    
    $lists = [];
    while($row = mysqli_fetch_assoc($query)){
        $lists[] = $row;
    };
    view("list/index",["lists" => $lists]);
    return $lists;
}

function create(){
    view("list/create");
}

function store(){
    $name = $_POST["name"];
    $money = $_POST["money"];
    $sql = "INSERT INTO my (name,money) VALUES ('$name',$money)";
    mysqli_query($GLOBALS["conn"],$sql);
    header("LOCATION:".route("list"));
};

function delete(){
    $id = $_POST["id"];
    $sql = "DELETE FROM my WHERE id = $id";
    mysqli_query($GLOBALS["conn"],$sql);
    header("LOCATION:".route("list"));
}

function edit(){
    $id = $_GET["id"];
    $sql = "SELECT * FROM my WHERE id = $id";
    $query = mysqli_query($GLOBALS["conn"],$sql);   
    $lists = mysqli_fetch_assoc($query);
    view("list/update",["lists" => $lists]);
    return $lists;
}

function update(){
    $name = $_POST["name"];
    $money = $_POST["money"]; 
    $id = $_POST["id"];
    $sql = "UPDATE my SET name = '$name' ,money = $money WHERE id = $id ";
    mysqli_query($GLOBALS["conn"],$sql);
    header("LOCATION:".route("list"));
}

?>