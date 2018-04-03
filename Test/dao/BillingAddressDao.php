<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Billing_AddressDao
 *
 * @author codyh
 */
class Billing_AddressDao {
   function create($ba) {
        //connect to db
       $dbh = new PDO("mysql:host=cs.cofo.edu;dbname=bookstore;charset=utf8", "team1dev", "Dios");
       
       $n=0;
       $stmt = $dbh->prepare("call usp_CreateBillingAddress(?,?,?,?)");
       $stmt->bindValue(++$n, $ba->city);
       $stmt->bindValue(++$n, $ba->state);
       $stmt->bindValue(++$n, $ba->street);
       $stmt->bindValue(++$n, $ba->zipCode);
       $stmt->execute();
       $myrow = $stmt->fetch();
       $ba->CustomerID = $myrow["CustomerID"];
       unset($stmt);
    }
}
