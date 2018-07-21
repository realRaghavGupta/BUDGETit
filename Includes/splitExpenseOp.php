<?php
class splitOperation
{

public function getUser_id($useremail,$dbcon)
{
  try {
    $stmt = $dbcon->prepare("select user_id from user_table WHERE email=?");
    $stmt->execute([$category]);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row){
        $category_id=$row['user_id'];
  }
    return $category_id;
  }
  catch (PDOException $e)
  {
      exit($e->getMessage());
  }
}

public function insertSplitExpense($category,$user_id,$splitAmount,$dbcon,$split_id)
{
  //get Transaction_id from expense table and update here
  $date = date("Y-m-d");
  $query = "insert into expense_table (category_id,user_id,amount,date) values (?,?,?,?)";
  $stmt= $dbcon->prepare($query);
  $stmt->execute([$category,5,$splitAmount,$date]);
  $transaction_id = $dbcon->lastInsertId();
   $query = "update split_table set transaction_id = '$transaction_id' where split_id = '$split_id' ";
   $stmt= $dbcon->prepare($query);
   $stmt->execute();
  return true;
}
public function splitAmount($email,$amount)
{
  $emails = explode(",",$email);
  $count = count($emails);
  $splitAmount = $amount/($count+1);
  return $splitAmount;
}
  public function insertSplitDetails($category,$amount,$email)
  {
    try {
      require 'connection.php';
      $con = new DatabaseConnection();
      $dbcon = $con->connect();
      $split = new splitOperation();
      $query = "insert into split_table (user_id,email,category_id) values (?,?,?)";
      $stmt= $dbcon->prepare($query);
      $stmt->execute([5, $email, $category]);
      $split_id = $dbcon->lastInsertId();
      //call splitAmount function
      $splitAmount = $split->splitAmount($email,$amount);
      //call insertSplitExpense function
      $split->insertSplitExpense($category,5,$splitAmount,$dbcon,$split_id);
      return true;
    }
    catch (PDOException $e)
    {
        exit($e->getMessage());
    }
  }

}
?>
