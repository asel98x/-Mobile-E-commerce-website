<?php

use database\DBController;

require ('database/DBController.php');
require ('database/product.php');
require ('database/Cart.php');

$db = new DBController();

$product = new product($db);

$cart = new Cart($db);
//$arr = array(
//    "user_id"=>2,
//    "item_id"=>9
//);
//
//$cart->insertIntoCart($arr);
