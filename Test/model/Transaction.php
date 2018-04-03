<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transaction
 *
 * @author codyh
 */
class Transaction {
   var $transactionID;
   var $creditCardNumber;
   var $creditCardExpirationDate;
   var $cvv;
   var $creditCardType;
   var $total;
   
   function getTransactionID() {
      return $this->transactionID;
   }

   function getCreditCardNumber() {
      return $this->creditCardNumber;
   }

   function getCreditCardExpirationDate() {
      return $this->creditCardExpirationDate;
   }

   function getCvv() {
      return $this->cvv;
   }

   function getCreditCardType() {
      return $this->creditCardType;
   }

   function getTotal() {
      return $this->total;
   }

   function setTransactionID($transactionID) {
      $this->transactionID = $transactionID;
   }

   function setCreditCardNumber($creditCardNumber) {
      $this->creditCardNumber = $creditCardNumber;
   }

   function setCreditCardExpirationDate($creditCardExpirationDate) {
      $this->creditCardExpirationDate = $creditCardExpirationDate;
   }

   function setCvv($cvv) {
      $this->cvv = $cvv;
   }

   function setCreditCardType($creditCardType) {
      $this->creditCardType = $creditCardType;
   }

   function setTotal($total) {
      $this->total = $total;
   }


}
