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
   var $authorID;
   var $firstName;
   var $lastName;
   
   function getAuthorID() {
      return $this->authorID;
   }

   function getFirstName() {
      return $this->firstName;
   }

   function getLastName() {
      return $this->lastName;
   }

   function setAuthorID($authorID) {
      $this->authorID = $authorID;
   }

   function setFirstName($firstName) {
      $this->firstName = $firstName;
   }

   function setLastName($lastName) {
      $this->lastName = $lastName;
   }


}
