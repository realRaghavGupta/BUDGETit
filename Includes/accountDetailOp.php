<?php

class AccountDetailsOp
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

    public function getSplitDetails($month, $username)
    {
        try {
            require_once 'connection.php';
            $con = new DatabaseConnection();
            $dbcon = $con->connect();
            $detils = new AccountDetailsOp();
            $user_id = $detils->getUser_id($username, $dbcon);
            $query = "select sum(owed_amount) AS total from project.split_details where user_id=? and month=?;";
            $stmt = $dbcon->prepare($query);
            $stmt->execute([$user_id, $month]);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {
                $sAmount = $row['total'];
            }
            return $sAmount;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}
