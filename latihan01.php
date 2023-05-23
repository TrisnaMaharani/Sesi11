<?php
    $dta["NAMA"] = "Trisna";
    $dta["TGL_LAHIR"] = "2004-08-31";
    $dta["JKEL"] = "P";
    $dta["HOBBY"] = "Menari";
    $dta["JURUSAN"] = "TI-KAB";

    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);