<?php
$_POST = json_decode(file_get_contens("php://input"), true);
echo var_dump($_POST);