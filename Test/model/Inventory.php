<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inventory
 *
 * @author codyh
 */
class Inventory {
   var $isbn;
   var $booksOnHand;
   var $title;
   var $booksSold;
   var $wholesalePrice;
   
   function getIsbn() {
      return $this->isbn;
   }

   function getBooksOnHand() {
      return $this->booksOnHand;
   }

   function getTitle() {
      return $this->title;
   }

   function getBooksSold() {
      return $this->booksSold;
   }

   function getWholesalePrice() {
      return $this->wholesalePrice;
   }

   function setIsbn($isbn) {
      $this->isbn = $isbn;
   }

   function setBooksOnHand($booksOnHand) {
      $this->booksOnHand = $booksOnHand;
   }

   function setTitle($title) {
      $this->title = $title;
   }

   function setBooksSold($booksSold) {
      $this->booksSold = $booksSold;
   }

   function setWholesalePrice($wholesalePrice) {
      $this->wholesalePrice = $wholesalePrice;
   }



}
