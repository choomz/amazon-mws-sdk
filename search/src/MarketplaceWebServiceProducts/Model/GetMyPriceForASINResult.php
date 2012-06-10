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
 * MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Product: MarketplaceWebServiceProducts_Model_Product</li>
 * <li>Error: MarketplaceWebServiceProducts_Model_Error</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Product: MarketplaceWebServiceProducts_Model_Product</li>
     * <li>Error: MarketplaceWebServiceProducts_Model_Error</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (

        'Product' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_Product'),


        'Error' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_Error'),

       'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'),
       'status' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Product.
     * 
     * @return Product Product
     */
    public function getProduct() 
    {
        return $this->_fields['Product']['FieldValue'];
    }

    /**
     * Sets the value of the Product.
     * 
     * @param Product Product
     * @return void
     */
    public function setProduct($value) 
    {
        $this->_fields['Product']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Product  and returns this instance
     * 
     * @param Product $value Product
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult instance
     */
    public function withProduct($value)
    {
        $this->setProduct($value);
        return $this;
    }


    /**
     * Checks if Product  is set
     * 
     * @return bool true if Product property is set
     */
    public function isSetProduct()
    {
        return !is_null($this->_fields['Product']['FieldValue']);

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
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult instance
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
       * Gets the value of the ASIN attribute.
       * 
       * @return string ASIN
       */
      public function getASIN() 
      {
          return $this->_fields['ASIN']['FieldValue'];
      }

      /**
       * Sets the value of the ASIN property.
       * 
       * @param string ASIN
       * @return this instance
       */
      public function setASIN($value) 
      {
          $this->_fields['ASIN']['FieldValue'] = $value;
          return $this;
      }

      /**
       * Sets the value of the ASIN and returns this instance
       * 
       * @param string $value ASIN
       * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult instance
       */
      public function withASIN($value)
      {
          $this->setASIN($value);
          return $this;
      }


      /**
       * Checks if ASIN is set
       * 
       * @return bool true if ASIN  is set
       */
      public function isSetASIN()
      {
          return !is_null($this->_fields['ASIN']['FieldValue']);
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
       * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult instance
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