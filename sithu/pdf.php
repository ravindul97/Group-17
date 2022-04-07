<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$numb = $_POST['numb'];
	$currency = $_POST['currency'];
	$package = $_POST['package'];
	$gcount = $_POST['gcount'];
	$ccount = $_POST['ccount'];
	$acount = $_POST['acount'];
	$day = $_POST['day'];
	$time = $_POST['time'];
	$message = $_POST['message'];
	$advance = $_POST['advance'];
	
	
	require('fpdf/fpdf.php');
	
	class PDF extends FPDF {
	
	// Page header
	function Header() {
		//add a border to the page
		$this->Rect(5, 5, 200, 287, 'D');
		
		// Add logo to page
		$this->Image('logo.jpg',10,8,33);
		
		// Set font family to Arial bold
		$this->SetFont('Arial','B',16);
		
		// Move to the right
		$this->Cell(50);
		
		// Header
		$this->Cell(100,10,'Booking Confirmation',0,0,'C');
		
		// Line break
		$this->Ln(20);
	}

	// Page footer
	function Footer() {
		
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		
		// Arial italic 8
		$this->SetFont('Arial','I',8);
		
		// Page number
		$this->Cell(0,10,'Page ' .
			$this->PageNo() . '/{nb}',0,0,'C');
	}
}
	
	
	// Instantiation of FPDF class
	$pdf = new PDF();

	// Define alias for number of pages
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','',12);
	
	$pdf->cell(60,10,"Full Name ",0,0);
	$pdf->cell(10,10," : ",0,0);
	$pdf->Cell(40,10,$fname.$lname);
	$pdf->ln();
	
	$pdf->cell(60,10,"Email ",0,0);
	$pdf->cell(10,10," : ",0,0);
	$pdf->Cell(40,10,$email);
	$pdf->ln();
	
	$pdf->cell(60,10,"Phone Number ",0,0);
	$pdf->cell(10,10," : ",0,0);
	$pdf->Cell(40,10,$numb);
	$pdf->ln();
	
	$pdf->cell(60,10,"Selected Package ",0,0);
	$pdf->cell(10,10," : ",0,0);
	$pdf->Cell(40,10,$package);
	$pdf->ln();
	
	
	if($ccount != '0'){
		$pdf->cell(60,10,"Children Count ",0,0);
		$pdf->cell(10,10," : ",0,0);
		$pdf->Cell(40,10,$ccount);
		$pdf->ln();
		
		$pdf->cell(60,10,"Adults Count ",0,0);
		$pdf->cell(10,10," : ",0,0);
		$pdf->Cell(40,10,$acount);
		$pdf->ln();
		
		$pdf->cell(60,10,"Total Number of Guests ",0,0);
		$pdf->cell(10,10," : ",0,0);
		$pdf->Cell(40,10,$gcount);
		$pdf->ln();
	}
	/*else if($ccount != ""){
		$pdf->cell(50,10,"Children Count ",0,0);
		$pdf->cell(10,10," : ",0,0);
		$pdf->Cell(40,10,$ccount);
		$pdf->ln();
		
		$pdf->cell(50,10,"Adults Count ",0,0);
		$pdf->cell(10,10," : ",0,0);
		$pdf->Cell(40,10,$acount);
		$pdf->ln();
	}*/
	else{
		$pdf->cell(60,10,"Number of Guests ",0,0);
		$pdf->cell(10,10," : ",0,0);
		$pdf->Cell(40,10,$gcount);
		$pdf->ln();
	}
	
	$pdf->cell(60,10,"Check-in Date ",0,0);
	$pdf->cell(10,10," : ",0,0);
	$pdf->Cell(40,10,$day);
	$pdf->ln();
	
	$pdf->cell(60,10,"Time Arriving ",0,0);
	$pdf->cell(10,10," : ",0,0);
	$pdf->Cell(40,10,$time);
	$pdf->ln();
	
	if($message!=""){
		$pdf->cell(60,10,"Additional Requirements ",0,0);
		$pdf->cell(10,10," : ",0,0);
		$pdf->Cell(40,10,$message);
		$pdf->ln();
	}
	
	$pdf->cell(60,10,"Advance Amount ",0,0);
	$pdf->cell(10,10," : ",0,0);
	$pdf->Cell(40,10,$advance." ".$currency);
	$pdf->ln();
	
	$pdf->Output();
	
?>