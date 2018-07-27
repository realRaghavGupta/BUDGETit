<?php

/**
 * Created by PhpStorm.
 * User: Sowmya Umesh
 * Date: 7/26/2018
 * Time: 5:54 PM
 */
class addExpenseOp
{

    public function getUser_id($username, $dbcon)
    {
        try {
            $stmt = $dbcon->prepare("select user_id from user_table WHERE email=?");
            $stmt->execute([$username]);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {
                $user_id = $row['user_id'];
            }
            return $user_id;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function insertAddExpense($category, $username, $amount)
    {
        try {
            require_once('./includes/connection.php');
            $con = new DatabaseConnection();
            $dbcon = $con->connect();
            $date = date("m");
            $expenseOp = new addExpenseOp();
            $user_id = $expenseOp->getUser_id($username, $dbcon);
            $query = "insert into expense_table (category_id,user_id,amount,date) values (?,?,?,?)";
            $stmt = $dbcon->prepare($query);
            $stmt->execute([$category, $user_id, $amount, $date]);
            return true;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }


}