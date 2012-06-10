<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebServiceProducts
 *  @copyright   Copyright 2008-2009 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2011-10-01
 */
/******************************************************************************* 
 * 
 *  Marketplace Web Service Products PHP5 Library
 *  Generated: Tue Jan 10 21:43:53 GMT 2012
 * 
 */

/**
 *  @see MarketplaceWebServiceProducts_Model
 */
require_once ('MarketplaceWebServiceProducts/Model.php');  

    

/**
 * MarketplaceWebServiceProducts_Model_NumberOfOfferListingsType
 * 
 * Properties:
 * <ul>
 * 
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_NumberOfOfferListingsType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_NumberOfOfferListingsType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
       'Value' => array('FieldValue' => null, 'FieldType' => 'string'),
       'condition' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    
      /**
       * Gets the value of the condition attribute.
       * 
       * @return string condition
       */
      public function getcondition() 
      {
          return $this->_fields['condition']['FieldValue'];
      }

      /**
       * Sets the value of the condition property.
       * 
       * @param string condition
       * @return this instance
       */
      public function setcondition($value) 
      {
          $this->_fields['condition']['FieldValue'] = $value;
          return $this;
      }

      /**
       * Sets the value of the condition and returns this instance
       * 
       * @param string $value condition
       * @return MarketplaceWebServiceProducts_Model_NumberOfOfferListingsType instance
       */
      public function withcondition($value)
      {
          $this->setcondition($value);
          return $this;
      }


      /**
       * Checks if condition is set
       * 
       * @return bool true if condition  is set
       */
      public function isSetcondition()
      {
          return !is_null($this->_fields['condition']['FieldValue']);
      }
      /**
       * Gets the value of the Value attribute.
       * 
       * @return string Value
       */
      public function getValue() 
      {
          return $this->_fields['Value']['FieldValue'];
      }

      /**
       * Sets the value of the Value property.
       * 
       * @param string Value
       * @return this instance
       */
      public function setValue($value) 
      {
          $this->_fields['Value']['FieldValue'] = $value;
          return $this;
      }

      /**
       * Sets the value of the Value and returns this instance
       * 
       * @param string $value Value
       * @return MarketplaceWebServiceProducts_Model_NumberOfOfferListingsType instance
       */
      public function withValue($value)
      {
          $this->setValue($value);
          return $this;
      }


      /**
       * Checks if Value is set
       * 
       * @return bool true if Value  is set
       */
      public function isSetValue()
      {
          return !is_null($this->_fields['Value']['FieldValue']);
      }


}