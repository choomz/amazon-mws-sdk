<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebServiceProducts
 *  @copyright   Copyright 2008-2012 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2011-10-01
 */
/******************************************************************************* 
 * 
 *  Marketplace Web Service Products PHP5 Library
 * 
 */

/**
 *  @see MarketplaceWebServiceProducts_Model
 */
require_once ('MarketplaceWebServiceProducts/Model.php');  

    

/**
 * MarketplaceWebServiceProducts_Model_CompetitivePriceType
 * 
 * Properties:
 * <ul>
 * 
 * <li>CompetitivePriceId: string</li>
 * <li>Price: MarketplaceWebServiceProducts_Model_PriceType</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_CompetitivePriceType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_CompetitivePriceType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CompetitivePriceId: string</li>
     * <li>Price: MarketplaceWebServiceProducts_Model_PriceType</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'CompetitivePriceId' => array('FieldValue' => null, 'FieldType' => 'string'),

        'Price' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_PriceType'),

       'condition' => array('FieldValue' => null, 'FieldType' => 'string'),
       'subcondition' => array('FieldValue' => null, 'FieldType' => 'string'),
       'belongsToRequester' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the CompetitivePriceId property.
     * 
     * @return string CompetitivePriceId
     */
    public function getCompetitivePriceId() 
    {
        return $this->_fields['CompetitivePriceId']['FieldValue'];
    }

    /**
     * Sets the value of the CompetitivePriceId property.
     * 
     * @param string CompetitivePriceId
     * @return this instance
     */
    public function setCompetitivePriceId($value) 
    {
        $this->_fields['CompetitivePriceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CompetitivePriceId and returns this instance
     * 
     * @param string $value CompetitivePriceId
     * @return MarketplaceWebServiceProducts_Model_CompetitivePriceType instance
     */
    public function withCompetitivePriceId($value)
    {
        $this->setCompetitivePriceId($value);
        return $this;
    }


    /**
     * Checks if CompetitivePriceId is set
     * 
     * @return bool true if CompetitivePriceId  is set
     */
    public function isSetCompetitivePriceId()
    {
        return !is_null($this->_fields['CompetitivePriceId']['FieldValue']);
    }

    /**
     * Gets the value of the Price.
     * 
     * @return PriceType Price
     */
    public function getPrice() 
    {
        return $this->_fields['Price']['FieldValue'];
    }

    /**
     * Sets the value of the Price.
     * 
     * @param PriceType Price
     * @return void
     */
    public function setPrice($value) 
    {
        $this->_fields['Price']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Price  and returns this instance
     * 
     * @param PriceType $value Price
     * @return MarketplaceWebServiceProducts_Model_CompetitivePriceType instance
     */
    public function withPrice($value)
    {
        $this->setPrice($value);
        return $this;
    }


    /**
     * Checks if Price  is set
     * 
     * @return bool true if Price property is set
     */
    public function isSetPrice()
    {
        return !is_null($this->_fields['Price']['FieldValue']);

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
       * @return MarketplaceWebServiceProducts_Model_CompetitivePriceType instance
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
       * Gets the value of the subcondition attribute.
       * 
       * @return string subcondition
       */
      public function getsubcondition() 
      {
          return $this->_fields['subcondition']['FieldValue'];
      }

      /**
       * Sets the value of the subcondition property.
       * 
       * @param string subcondition
       * @return this instance
       */
      public function setsubcondition($value) 
      {
          $this->_fields['subcondition']['FieldValue'] = $value;
          return $this;
      }

      /**
       * Sets the value of the subcondition and returns this instance
       * 
       * @param string $value subcondition
       * @return MarketplaceWebServiceProducts_Model_CompetitivePriceType instance
       */
      public function withsubcondition($value)
      {
          $this->setsubcondition($value);
          return $this;
      }


      /**
       * Checks if subcondition is set
       * 
       * @return bool true if subcondition  is set
       */
      public function isSetsubcondition()
      {
          return !is_null($this->_fields['subcondition']['FieldValue']);
      }
      /**
       * Gets the value of the belongsToRequester attribute.
       * 
       * @return string belongsToRequester
       */
      public function getbelongsToRequester() 
      {
          return $this->_fields['belongsToRequester']['FieldValue'];
      }

      /**
       * Sets the value of the belongsToRequester property.
       * 
       * @param string belongsToRequester
       * @return this instance
       */
      public function setbelongsToRequester($value) 
      {
          $this->_fields['belongsToRequester']['FieldValue'] = $value;
          return $this;
      }

      /**
       * Sets the value of the belongsToRequester and returns this instance
       * 
       * @param string $value belongsToRequester
       * @return MarketplaceWebServiceProducts_Model_CompetitivePriceType instance
       */
      public function withbelongsToRequester($value)
      {
          $this->setbelongsToRequester($value);
          return $this;
      }


      /**
       * Checks if belongsToRequester is set
       * 
       * @return bool true if belongsToRequester  is set
       */
      public function isSetbelongsToRequester()
      {
          return !is_null($this->_fields['belongsToRequester']['FieldValue']);
      }


}