<?php
 
 require_once "data/Student.php";
// old version
define("PLATFORM", "E-Commerce Ndek-Ndekan");
// new version
const PLATFORM_VERSION = "V. Beta 2.1.0";

echo PLATFORM . PHP_EOL;
echo PLATFORM_VERSION . PHP_EOL;
// menampilkan constan yg ada di dalam kelas. 
// echo <NAMA_CLASS>::<NAMA_CONSTANT>;
echo Student::GRADE . PHP_EOL;