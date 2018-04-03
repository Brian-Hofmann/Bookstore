<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author codyh
 */
class Customer {
   var $customerID;
   var $firstName;
   var $lastName;
   
   function getCustomerID() {
      return $this->customerID;
   }

   function getFirstName() {
      return $this->firstName;
   }

   function getLastName() {
      return $this->lastName;
   }

   function setCustomerID($customerID) {
      $this->customerID = $customerID;
   }

   function setFirstName($firstName) {
      $this->firstName = $firstName;
   }

   function setLastName($lastName) {
      $this->lastName = $lastName;
   }


}
