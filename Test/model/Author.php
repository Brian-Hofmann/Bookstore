<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Author
 *
 * @author codyh
 */
class Author {
   var $AuthorID;
   var $FirstName;
   var $LastName;
   
   function getAuthorID() {
      return $this->AuthorID;
   }

   function getFirstName() {
      return $this->FirstName;
   }

   function getLastName() {
      return $this->LastName;
   }

   function setAuthorID($AuthorID) {
      $this->AuthorID = $AuthorID;
   }

   function setFirstName($FirstName) {
      $this->FirstName = $FirstName;
   }

   function setLastName($LastName) {
      $this->LastName = $LastName;
   }
  

}
