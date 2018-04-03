<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Orders
 *
 * @author codyh
 */
class Orders {
   var $orderID;
   var $orderStatus;
   var $isbn;
   var $customerID;
   var $quantity;
   var $price;
   
   function getOrderID() {
      return $this->orderID;
   }

   function getOrderStatus() {
      return $this->orderStatus;
   }

   function getIsbn() {
      return $this->isbn;
   }

   function getCustomerID() {
      return $this->customerID;
   }

   function getQuantity() {
      return $this->quantity;
   }

   function getPrice() {
      return $this->price;
   }

   function setOrderID($orderID) {
      $this->orderID = $orderID;
   }

   function setOrderStatus($orderStatus) {
      $this->orderStatus = $orderStatus;
   }

   function setIsbn($isbn) {
      $this->isbn = $isbn;
   }

   function setCustomerID($customerID) {
      $this->customerID = $customerID;
   }

   function setQuantity($quantity) {
      $this->quantity = $quantity;
   }

   function setPrice($price) {
      $this->price = $price;
   }


}
