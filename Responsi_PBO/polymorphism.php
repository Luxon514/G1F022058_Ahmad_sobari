<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Luxon");
var_dump($company);

$company->programmer = new BackendProgrammer("Squzi");
var_dump($company);

$company->programmer = new FrontendProgrammer("Ziu");
var_dump($company);

sayHelloProgrammer(new Programmer("Luxon"));
sayHelloProgrammer(new BackendProgrammer("Squzi"));
sayHelloProgrammer(new FrontendProgrammer("Ziu"));