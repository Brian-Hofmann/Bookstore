<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Book
 *
 * @author codyh
 */
class Book {
   var $isbn;
   var $copyrightDate;
   var $title;
   var $language;
   var $price;
   var $availability;
   var $authorID;
   
   function getIsbn() {
      return $this->isbn;
   }

   function getCopyrightDate() {
      return $this->copyrightDate;
   }

   function getTitle() {
      return $this->title;
   }

   function getLanguage() {
      return $this->language;
   }

   function getPrice() {
      return $this->price;
   }

   function getAvailability() {
      return $this->availability;
   }

   function getAuthorID() {
      return $this->authorID;
   }

   function setIsbn($isbn) {
      $this->isbn = $isbn;
   }

   function setCopyrightDate($copyrightDate) {
      $this->copyrightDate = $copyrightDate;
   }

   function setTitle($title) {
      $this->title = $title;
   }

   function setLanguage($language) {
      $this->language = $language;
   }

   function setPrice($price) {
      $this->price = $price;
   }

   function setAvailability($availability) {
      $this->availability = $availability;
   }

   function setAuthorID($authorID) {
      $this->authorID = $authorID;
   }



}
