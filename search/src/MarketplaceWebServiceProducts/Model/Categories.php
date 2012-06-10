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
 * MarketplaceWebServiceProducts_Model_Categories
 * 
 * Properties:
 * <ul>
 * 
 * <li>ProductCategoryId: string</li>
 * <li>ProductCategoryName: string</li>
 * <li>Parent: MarketplaceWebServiceProducts_Model_Categories</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_Categories extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_Categories
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ProductCategoryId: string</li>
     * <li>ProductCategoryName: string</li>
     * <li>Parent: MarketplaceWebServiceProducts_Model_Categories</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ProductCategoryId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ProductCategoryName' => array('FieldValue' => null, 'FieldType' => 'string'),

        'Parent' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_Categories'),

        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ProductCategoryId property.
     * 
     * @return string ProductCategoryId
     */
    public function getProductCategoryId() 
    {
        return $this->_fields['ProductCategoryId']['FieldValue'];
    }

    /**
     * Sets the value of the ProductCategoryId property.
     * 
     * @param string ProductCategoryId
     * @return this instance
     */
    public function setProductCategoryId($value) 
    {
        $this->_fields['ProductCategoryId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ProductCategoryId and returns this instance
     * 
     * @param string $value ProductCategoryId
     * @return MarketplaceWebServiceProducts_Model_Categories instance
     */
    public function withProductCategoryId($value)
    {
        $this->setProductCategoryId($value);
        return $this;
    }


    /**
     * Checks if ProductCategoryId is set
     * 
     * @return bool true if ProductCategoryId  is set
     */
    public function isSetProductCategoryId()
    {
        return !is_null($this->_fields['ProductCategoryId']['FieldValue']);
    }

    /**
     * Gets the value of the ProductCategoryName property.
     * 
     * @return string ProductCategoryName
     */
    public function getProductCategoryName() 
    {
        return $this->_fields['ProductCategoryName']['FieldValue'];
    }

    /**
     * Sets the value of the ProductCategoryName property.
     * 
     * @param string ProductCategoryName
     * @return this instance
     */
    public function setProductCategoryName($value) 
    {
        $this->_fields['ProductCategoryName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ProductCategoryName and returns this instance
     * 
     * @param string $value ProductCategoryName
     * @return MarketplaceWebServiceProducts_Model_Categories instance
     */
    public function withProductCategoryName($value)
    {
        $this->setProductCategoryName($value);
        return $this;
    }


    /**
     * Checks if ProductCategoryName is set
     * 
     * @return bool true if ProductCategoryName  is set
     */
    public function isSetProductCategoryName()
    {
        return !is_null($this->_fields['ProductCategoryName']['FieldValue']);
    }

    /**
     * Gets the value of the Parent.
     * 
     * @return Categories Parent
     */
    public function getParent() 
    {
        return $this->_fields['Parent']['FieldValue'];
    }

    /**
     * Sets the value of the Parent.
     * 
     * @param Categories Parent
     * @return void
     */
    public function setParent($value) 
    {
        $this->_fields['Parent']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Parent  and returns this instance
     * 
     * @param Categories $value Parent
     * @return MarketplaceWebServiceProducts_Model_Categories instance
     */
    public function withParent($value)
    {
        $this->setParent($value);
        return $this;
    }


    /**
     * Checks if Parent  is set
     * 
     * @return bool true if Parent property is set
     */
    public function isSetParent()
    {
        return !is_null($this->_fields['Parent']['FieldValue']);

    }




}