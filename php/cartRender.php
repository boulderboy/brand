<?php
session_start();

$goodId = $_POST['id'];

if(isset($_SESSION[$goodId])){
    $_SESSION[$goodId]['quantity'] = $_SESSION[$goodId]['quantity'] + 1;
}
else {
    $link = mysqli_connect("host-2", "root", "", "brand");
    $query = "select * from goods where id = $goodId";
    $data = mysqli_query($link, $query);
    $good = [];

    while ($data = mysqli_fetch_assoc($data)) {
        $good['name'] = $data['name'];
        $good['price'] = $data['price'];
        $good['rating'] = $data['rating'];
        $good['quantity'] = 1;
    };
    $_SESSION[$goodId] = $good;
}


function cartRender(){
    if(!isset($_SESSION["goods"])){
        echo "<span>Your cart is empty</span>";
    } else  {
        foreach ($_SESSION[goods] as $prodInfo){
            foreach ($prodInfo as $a => $info){
                print_r($info);
            }
        }
    }
}
