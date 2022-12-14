<?php

use database\DBController;

require ('database/DBController.php');
require ('database/product.php');

$db = new DBController();

$product = new product($db);