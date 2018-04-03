<?php
require("../model/Author.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AuthorDao
 *
 * @author Brian Hofmann
 */

class AuthorDao {
     function getAll(){
       
       //connect to db
       $dbh = new PDO("mysql:host=127.0.0.1;port=3306;dbname=bookstoredb", "root", "Connect2DB@ETS");
       
       //$n
       //$stmt = $dbh->prepare("call usp_getAllAuthors(?,?)");
       $stmt = $dbh->prepare("call usp_getAllAuthors()");
       //$stmt->bindValue(++$n, $PersonID);
       //$stmt->bindValue(++$n, $EventDate);
       try { 
          $stmt->execute();
       } catch (PDOException $e) {
           die("AuthorDAO crashed attempting to execute usp_GetAllAuthors");
       } 
       $myAuthors = $stmt->fetchAll();
       unset($stmt);
       $returnValue = array();
       foreach($myAuthors as $rsAuthor) {      
          $myAuthor = new Author();
          $myAuthor->authorID = $rsAuthor["AuthorID"];
          $myAuthor->firstName = $rsAuthor["FirstName"];
          $myAuthor->lastName = $rsAuthor["LastName"];
          //fill all fields in the table to the class, not just these two
          
          array_push($returnValue,$myAuthor); 
       }
       return $returnValue;
    }
    function create($author) {
        //connect to db
       //$dbh = new PDO("mysql:host=cs.cofo.edu;dbname=bookstore;charset=utf8", "team1dev", "Dios");
       $dbh = new PDO("mysql:host=127.0.0.1;port=3306;dbname=bookstoredb", "root", "Connect2DB@ETS");
       
       $n=0;
       $stmt = $dbh->prepare("call usp_CreateAuthor(?,?)");
       $stmt->bindValue(++$n, $author->firstName);
       $stmt->bindValue(++$n, $author->lastName);
       $stmt->execute();
       $myrow = $stmt->fetch();
       $author->authorID = $myrow["AuthorID"];
       unset($stmt);
    }
    
        function delete($author) {
        //connect to db
       $dbh = new PDO("mysql:host=cs.cofo.edu;dbname=bookstore;charset=utf8", "team1dev", "Dios");
       
       $n=0;
       $stmt = $dbh->prepare("call usp_DeleteAuthor(?)");
       $stmt->bindValue(++$n, $author->authorID);
       $stmt->execute();
       unset($stmt);
    }
    
     function update($author) {
        //connect to db
       $dbh = new PDO("mysql:host=cs.cofo.edu;dbname=bookstore;charset=utf8", "team1dev", "Dios");
       
       $n=0;
       $stmt = $dbh->prepare("call usp_UpdateAuthor(?,?,?)");
       $stmt->bindValue(++$n, $author->authorID);
       $stmt->bindValue(++$n, $author->firstName);
       $stmt->bindValue(++$n, $author->lastName);
       $stmt->execute();
       unset($stmt);
    }
}
