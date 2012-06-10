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
 * MarketplaceWebServiceProducts_Model_ListMatchingProductsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Products: MarketplaceWebServiceProducts_Model_ProductList</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_ListMatchingProductsResult extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_ListMatchingProductsResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Products: MarketplaceWebServiceProducts_Model_ProductList</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (

        'Products' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ProductList'),

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
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsResult instance
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




}