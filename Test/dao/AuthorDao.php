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
       $dbh = new PDO("mysql:host=cs.cofo.edu;dbname=bookstore;charset=utf8", "team1dev", "Dios");
       
       //$n
       //$stmt = $dbh->prepare("call usp_getAllAuthors(?,?)");
       $stmt = $dbh->prepare("call usp_getAllAuthors()");
       //$stmt->bindValue(++$n, $PersonID);
       //$stmt->bindValue(++$n, $EventDate);
       $stmt->execute();
       $myAuthors = $stmt->fetchAll();
       unset($stmt);
       $returnValue = array();
       foreach($myAuthors as $rsAuthor) {
          $myAuthor = new Author();
          $myAuthor->AuthorID = $rsAuthor["AuthorID"];
          $myAuthor->FirstName = $rsAuthor["FirstName"];
          $myAuthor->LastName = $rsAuthor["LastName"];
          //fill all fields in the table to the class, not just these two
          
          array_push($returnValue,$myAuthor); 
       }
       return $returnValue;
    }
    function create($author) {
        //connect to db
       $dbh = new PDO("mysql:host=cs.cofo.edu;dbname=bookstore;charset=utf8", "team1dev", "Dios");
       
       $n=0;
       $stmt = $dbh->prepare("call usp_CreateAuthor(?,?)");
       $stmt->bindValue(++$n, $author->FirstName);
       $stmt->bindValue(++$n, $author->LastName);
       $stmt->execute();
       $myrow = $stmt->fetch();
       $author->AuthorID = $myrow["AuthorID"];
       unset($stmt);
    }
}
