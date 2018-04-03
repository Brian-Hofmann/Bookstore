<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BookDao
 *
 * @author codyh
 */
class BookDao {
   function create($book) {
        //connect to db
       $dbh = new PDO("mysql:host=cs.cofo.edu;dbname=bookstore;charset=utf8", "team1dev", "Dios");
       
       $n=0;
       $stmt = $dbh->prepare("call usp_CreateBook(?,?,?,?,?,?)");
       $stmt->bindValue(++$n, $book->isbn);
       $stmt->bindValue(++$n, $book->copyrightDate);
       $stmt->bindValue(++$n, $book->title);
       $stmt->bindValue(++$n, $book->language);
       $stmt->bindValue(++$n, $book->price);
       $stmt->bindValue(++$n, $book->availability);
       $stmt->execute();
       unset($stmt);
    }
}
