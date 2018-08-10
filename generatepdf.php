<?php
session_start();
include_once("includes/database.php");
include_once('includes/pdf/libs/fpdf.php');
require_once('./includes/connection.php');
require './includes/addExpenseOp.php';

class PDF extends FPDF
{

function Header()
{
    // Logo
    $this->Image('includes/assets/images/logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Expense List',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$con = new DatabaseConnection();
$dbcon = $con->connect();


$db = new addExpenseOp();
$userid = $db->getUser_id($_SESSION['username'], $dbcon);


$display_heading = array('transaction_id'=>'ID', 'category_id'=> 'Category ID', 'user_id'=> 'User ID', 'amount'=> 'Amount','date'=> 'Date','split'=>'Is split');
//$display_heading = array('transaction_id'=>'ID', 'category_id'=> 'Category ID', 'amount'=> 'Amount','date'=> 'Date','split'=>'Is split');
$stmt = $dbcon->prepare("SELECT transaction_id, category_id, amount, date, split FROM expense_table WHERE user_id = '$userid'");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


$stmt1 = $dbcon->prepare("SHOW columns FROM project.expense_table");
$stmt1->execute();
$header = $stmt1->fetchAll(PDO::FETCH_ASSOC);


//$result = mysqli_query($dbcon, "SELECT transaction_id, category_id, amount, date, split FROM expense_table WHERE user_id = '$userid'") or die("database error:". mysqli_error($connString));
//$header = mysqli_query($connString, "SHOW columns FROM employee");
//$header = mysqli_query($dbcon, "SHOW columns");

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
//foreach($header as $heading) {
//$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
//}
 foreach($header as $heading) {
 	if ($heading['Field'] == 'user_id'){
 		continue;
}
else{
$abc = $display_heading[$heading['Field']];
$pdf->Cell(40,12,$abc,1);
}
}
foreach($rows as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}
$pdf->Output();

