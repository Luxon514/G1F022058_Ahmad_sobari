<?php

// import data/person.php
require_once "data/Person.php";

// buat define
define("APPLICATION", "PHP Pemrograman Berorientasi Object");

// buat const app version
const APP_VERSION = "2.0";

// tampilkan hasil
echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo Person::AUTHOR . PHP_EOL;
