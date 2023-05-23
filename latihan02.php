<?php
    $dta[0]["NAMA"] = "Trisna";
    $dta[0]["TGL_LAHIR"] = "2004-08-31";
    $dta[0]["JKEL"] = "P";
    $dta[0]["HOBBY"] = "Menari";
    $dta[0]["JURUSAN"] = "TI-KAB";

    $dta[1]["NAMA"] = "Maharani";
    $dta[1]["TGL_LAHIR"] = "2004-06-13";
    $dta[1]["JKEL"] = "L";
    $dta[1]["HOBBY"] = "Lari";
    $dta[1]["JURUSAN"] = "SK";

    $dta[2]["NAMA"] = "Dian";
    $dta[2]["TGL_LAHIR"] = "2007-11-10";
    $dta[2]["JKEL"] = "P";
    $dta[2]["HOBBY"] = "Mewarnai";
    $dta[2]["JURUSAN"] = "TI-MTI";

    $dta[3]["NAMA"] = "Agus";
    $dta[3]["TGL_LAHIR"] = "2004-02-06";
    $dta[3]["JKEL"] = "L";
    $dta[3]["HOBBY"] = "Sepak Bola";
    $dta[3]["JURUSAN"] = "TI-KAB";

    $dta[4]["NAMA"] = "Permana";
    $dta[4]["TGL_LAHIR"] = "2006-09-29";
    $dta[4]["JKEL"] = "P";
    $dta[4]["HOBBY"] = "Menggambar";
    $dta[4]["JURUSAN"] = "SK";



    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);