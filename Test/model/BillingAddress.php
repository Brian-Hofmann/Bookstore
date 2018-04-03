<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Billing_Address
 *
 * @author codyh
 */
class Billing_Address {
   var $customerID;
   var $city;
   var $state;
   var $street;
   var $zipCode;
   
   function getCustomerID() {
      return $this->customerID;
   }

   function getCity() {
      return $this->city;
   }

   function getState() {
      return $this->state;
   }

   function getStreet() {
      return $this->street;
   }

   function getZipCode() {
      return $this->zipCode;
   }

   function setCustomerID($customerID) {
      $this->customerID = $customerID;
   }

   function setCity($city) {
      $this->city = $city;
   }

   function setState($state) {
      $this->state = $state;
   }

   function setStreet($street) {
      $this->street = $street;
   }

   function setZipCode($zipCode) {
      $this->zipCode = $zipCode;
   }


   
}
