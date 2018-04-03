<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profile
 *
 * @author codyh
 */
class Profile {
   var $customerID;
   var $password;
   
   function getCustomerID() {
      return $this->customerID;
   }

   function getPassword() {
      return $this->password;
   }

   function setCustomerID($customerID) {
      $this->customerID = $customerID;
   }

   function setPassword($password) {
      $this->password = $password;
   }


}
