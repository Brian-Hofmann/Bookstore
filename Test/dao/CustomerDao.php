<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomerDao
 *
 * @author codyh
 */
class CustomerDao {
   function create($customer) {
        //connect to db
       $dbh = new PDO("mysql:host=cs.cofo.edu;dbname=bookstore;charset=utf8", "team1dev", "Dios");
       
       $n=0;
       $stmt = $dbh->prepare("call usp_CreateCustomer(?,?)");
       $stmt->bindValue(++$n, $customer->firstName);
       $stmt->bindValue(++$n, $customer->lastName);
       $stmt->execute();
       $myrow = $stmt->fetch();
       $customer->customerID = $myrow["CustomerID"];
       unset($stmt);
    }
}
