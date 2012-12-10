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
 * MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Products: MarketplaceWebServiceProducts_Model_ProductList</li>
 * <li>Error: MarketplaceWebServiceProducts_Model_Error</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResult extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Products: MarketplaceWebServiceProducts_Model_ProductList</li>
     * <li>Error: MarketplaceWebServiceProducts_Model_Error</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (

        'Products' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ProductList'),


        'Error' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_Error'),

       'Id' => array('FieldValue' => null, 'FieldType' => 'string'),
       'IdType' => array('FieldValue' => null, 'FieldType' => 'string'),
       'status' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Products.
     * 
     * @return ProductList Products
     */
    public function getProducts() 
    {
        return $this->_fields['Products']['FieldValue'];
    }

    /**
     * Sets the value of the Products.
     * 
     * @param ProductList Products
     * @return void
     */
    public function setProducts($value) 
    {
        $this->_fields['Products']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Products  and returns this instance
     * 
     * @param ProductList $value Products
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResult instance
     */
    public function withProducts($value)
    {
        $this->setProducts($value);
        return $this;
    }


    /**
     * Checks if Products  is set
     * 
     * @return bool true if Products property is set
     */
    public function isSetProducts()
    {
        return !is_null($this->_fields['Products']['FieldValue']);

    }

    /**
     * Gets the value of the Error.
     * 
     * @return Error Error
     */
    public function getError() 
    {
        return $this->_fields['Error']['FieldValue'];
    }

    /**
     * Sets the value of the Error.
     * 
     * @param Error Error
     * @return void
     */
    public function setError($value) 
    {
        $this->_fields['Error']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Error  and returns this instance
     * 
     * @param Error $value Error
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResult instance
     */
    public function withError($value)
    {
        $this->setError($value);
        return $this;
    }


    /**
     * Checks if Error  is set
     * 
     * @return bool true if Error property is set
     */
    public function isSetError()
    {
        return !is_null($this->_fields['Error']['FieldValue']);

    }


      /**
       * Gets the value of the Id attribute.
       * 
       * @return string Id
       */
      public function getId() 
      {
          return $this->_fields['Id']['FieldValue'];
      }

      /**
       * Sets the value of the Id property.
       * 
       * @param string Id
       * @return this instance
       */
      public function setId($value) 
      {
          $this->_fields['Id']['FieldValue'] = $value;
          return $this;
      }

      /**
       * Sets the value of the Id and returns this instance
       * 
       * @param string $value Id
       * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResult instance
       */
      public function withId($value)
      {
          $this->setId($value);
          return $this;
      }


      /**
       * Checks if Id is set
       * 
       * @return bool true if Id  is set
       */
      public function isSetId()
      {
          return !is_null($this->_fields['Id']['FieldValue']);
      }
      /**
       * Gets the value of the IdType attribute.
       * 
       * @return string IdType
       */
      public function getIdType() 
      {
          return $this->_fields['IdType']['FieldValue'];
      }

      /**
       * Sets the value of the IdType property.
       * 
       * @param string IdType
       * @return this instance
       */
      public function setIdType($value) 
      {
          $this->_fields['IdType']['FieldValue'] = $value;
          return $this;
      }

      /**
       * Sets the value of the IdType and returns this instance
       * 
       * @param string $value IdType
       * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResult instance
       */
      public function withIdType($value)
      {
          $this->setIdType($value);
          return $this;
      }


      /**
       * Checks if IdType is set
       * 
       * @return bool true if IdType  is set
       */
      public function isSetIdType()
      {
          return !is_null($this->_fields['IdType']['FieldValue']);
      }
      /**
       * Gets the value of the status attribute.
       * 
       * @return string status
       */
      public function getstatus() 
      {
          return $this->_fields['status']['FieldValue'];
      }

      /**
       * Sets the value of the status property.
       * 
       * @param string status
       * @return this instance
       */
      public function setstatus($value) 
      {
          $this->_fields['status']['FieldValue'] = $value;
          return $this;
      }

      /**
       * Sets the value of the status and returns this instance
       * 
       * @param string $value status
       * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResult instance
       */
      public function withstatus($value)
      {
          $this->setstatus($value);
          return $this;
      }


      /**
       * Checks if status is set
       * 
       * @return bool true if status  is set
       */
      public function isSetstatus()
      {
          return !is_null($this->_fields['status']['FieldValue']);
      }


}