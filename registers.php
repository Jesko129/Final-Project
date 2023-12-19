<?php

if (empty($_user["name"])) {
    die("Name Is Required");
}

if ( ! filter_var($_user["email"]. FILTER_VALIDATE_EMAIL)) {
    die("Valid Email Is Required");
}
if (strlen($_user["password"]) < 😎 {
    die("Password Must Be At Least 8 Characters");
}
if ( ! preg_match("/[a-z]/i", $_user["password"])) {
    die("Password Must Contain At Least One Letter");
}
if ( ! preg_match("/[0-9]/", $_user["password"])) {
    die("Password Must Contain At Least One Number");
}
if ($_user["password"] !== $_user["confirmpassword"]) {
    die("Password Must Match");
}

print_r($_user);