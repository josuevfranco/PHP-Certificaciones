<?php
include "fpdf/fpdf.php";

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","",16);

    //Capturar Nuevament el nombre del Cliente
    $nombre = $_POST['lname'];
    $dia = date("Y-m-d");

    $pdf->Image('image/Logo2.png', 15, 15, 50, 20);
    $pdf->Image('image/logojava.png', 150, 13, 50, 20);

    $pdf->Image('image/certificado.png', 62, 29, 90, 45);

    
    $pdf->SetY(70);
    $pdf->SetX(70);
    $pdf->CELL(10,10,"Este certificado acredita que");

    $pdf->SetY(82);
    $pdf->SetX(80);
    $pdf->CELL(7,10,"$nombre");

    $pdf->SetY(94);
    $pdf->SetX(60);
    $pdf->CELL(10,10,"ha realizado y aprobado con exito el");

    $pdf->SetY(106);
    $pdf->SetX(50);
    $pdf->CELL(10,10,"EXAMEN DE CERTIFICACION DE JAVA");

    $pdf->SetY(118);
    $pdf->SetX(50);
    $pdf->CELL(10,10,"mediante el simulador de examenes online");

    $pdf->SetY(130);
    $pdf->SetX(72);
    $pdf->CELL(10,10,"desarrollado por VJDEV");

    $pdf->SetY(145);
    $pdf->SetX(37);
    $pdf->CELL(10,10,"Y para que conste, hacemos entrega de este diploma");
    
    $pdf->SetY(158);
    $pdf->SetX(45);
    $pdf->CELL(10,10,"acreditativo el $dia");

    $pdf->Image('image/firma.png', 60, 180, 90, 50);
    
    $pdf->SetY(220);
    $pdf->SetX(75);
    $pdf->CELL(10,10,"CEO Ariana Grande");
    
    $pdf->SetY(230);
    $pdf->SetX(70);
    $pdf->CELL(10,10,"Filadelfia, Pensilvania, EEUU");

    $pdf->Image('image/slogan1.png', 50, 240, 110, 60);
    $pdf->output();
?>