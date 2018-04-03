<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category_Book
 *
 * @author codyh
 */
class Category_Book {
   var $isbn;
   var $categoryID;
   
   function getIsbn() {
      return $this->isbn;
   }

   function getCategoryID() {
      return $this->categoryID;
   }

   function setIsbn($isbn) {
      $this->isbn = $isbn;
   }

   function setCategoryID($categoryID) {
      $this->categoryID = $categoryID;
   }

}
