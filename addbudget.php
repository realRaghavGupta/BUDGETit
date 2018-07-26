<?php
class AddBudget
{
	
	function newbudget($category,$month,$uid,$amount)
	{
		try
		{
			  // $category = $_POST['category'];
			  // $month = $_POST['month'];
			  // $uid=$_POST['uid'];
			  // $amount = $_POST['amount'];

			  //$conn=$this->connection();
			  $dbcon = new DatabaseConnection;
			  $conn = $dbcon->connect(); 

			  $q = $conn->prepare("INSERT INTO budget_table(category_id, month, user_id, amount) VALUES(:cat_id, :month, :uid, :amount)");

			 						$q->bindParam("cat_id", $category, PDO::PARAM_STR);
									$q->bindParam("month", $month, PDO::PARAM_STR);
									$q->bindParam("uid", $uid, PDO::PARAM_STR);
									$q->bindParam("amount", $amount, PDO::PARAM_STR);

							if($q->execute())
	  						{
	  							        echo "New Budget value set successfully";
	  						}
								
							else{
										echo "Error: Cannot enter new Budget to database";
		   						}

		}
		catch(Exception $e)
		{
			echo 'Error in registering to database: ' .$e->getMessage();
		}

	}



}
$obj=new AddBudget;
?>