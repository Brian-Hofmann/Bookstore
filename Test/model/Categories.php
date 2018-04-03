<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Book_Categories
 *
 * @author codyh
 */
class Book_Categories {
   var $categoryID;
   var $name;
   var $isbn;
   
   function getCategoryID() {
      return $this->categoryID;
   }

   function getName() {
      return $this->name;
   }

   function getIsbn() {
      return $this->isbn;
   }

   function setCategoryID($categoryID) {
      $this->categoryID = $categoryID;
   }

   function setName($name) {
      $this->name = $name;
   }

   function setIsbn($isbn) {
      $this->isbn = $isbn;
   }


}
