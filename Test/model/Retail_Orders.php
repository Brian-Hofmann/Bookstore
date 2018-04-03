<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Retail_Orders
 *
 * @author codyh
 */
class Retail_Orders {
   var $orderNumber;
   var $orderDate;
   var $orderTotal;
   
   function getOrderNumber() {
      return $this->orderNumber;
   }

   function getOrderDate() {
      return $this->orderDate;
   }

   function getOrderTotal() {
      return $this->orderTotal;
   }

   function setOrderNumber($orderNumber) {
      $this->orderNumber = $orderNumber;
   }

   function setOrderDate($orderDate) {
      $this->orderDate = $orderDate;
   }

   function setOrderTotal($orderTotal) {
      $this->orderTotal = $orderTotal;
   }


}
