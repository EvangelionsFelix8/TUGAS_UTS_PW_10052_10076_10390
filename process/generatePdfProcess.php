<?php
    ob_start();
    include '../component/sidebar.php';

    require('fpdf.php');
    $pdf = new FPDF('p','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    // $nama = mysqli_query($con, "SELECT * FROM users WHERE id='$userId'");
    // $tampilNama = mysqli_fetch_array($nama);
    $pdf->Cell(90,7,'MY WISHLIST',0,1,'C');
    // $pdf->Cell(100,7,$tampilnama['name'],0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(30,6,'NOMOR',1,0);
    $pdf->Cell(80,6,'NAMA BARANG',1,0);
    $pdf->Cell(80,6,'HARGA BARANG',1,1);
    $pdf->SetFont('Arial','',10);
    $query = mysqli_query($con, "SELECT * FROM wishlist WHERE id=$userId");
    $no = 1;
    while ($data = mysqli_fetch_array($query)){
        $pdf->Cell(30,6,$no,1,0);
        $pdf->Cell(80,6,$data['namaBarangWhis'],1,0);
        $pdf->Cell(80,6,$data['hargaBarangWhis'],1,1);
        $no++;
    }
    // ob_end_clean();
    $pdf->Output();
    ob_end_flush();
?>