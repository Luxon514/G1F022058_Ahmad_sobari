<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$ahmad = new Person("Ahmad", "Curup");

// tambahkan value nama di object
$ahmad->nama = "Ahmad";

// panggil function sayHelloNull dengan parameter
$ahmad->sayHelloNull("All");

// buat object dari kelas person
$sobari = new Person("Sobari", "Bengko");

// tambahkan value nama di object
$sobari->nama = "Sobari";

// panggil function sayHelloNull dengan parameter null
$sobari->sayHelloNull(null);
