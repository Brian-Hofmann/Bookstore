<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer_Contact_Information
 *
 * @author codyh
 */
class Customer_Contact_Information {
   var $customerID;
   var $telephoneNumber;
   var $email;
   
   function getCustomerID() {
      return $this->customerID;
   }

   function getTelephoneNumber() {
      return $this->telephoneNumber;
   }

   function getEmail() {
      return $this->email;
   }

   function setCustomerID($customerID) {
      $this->customerID = $customerID;
   }

   function setTelephoneNumber($telephoneNumber) {
      $this->telephoneNumber = $telephoneNumber;
   }

   function setEmail($email) {
      $this->email = $email;
   }


}
