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
 * MarketplaceWebServiceProducts_Model_ProductList
 * 
 * Properties:
 * <ul>
 * 
 * <li>Product: MarketplaceWebServiceProducts_Model_Product</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_ProductList extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_ProductList
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Product: MarketplaceWebServiceProducts_Model_Product</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Product' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_Product')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Product.
     * 
     * @return array of Product Product
     */
    public function getProduct() 
    {
        return $this->_fields['Product']['FieldValue'];
    }

    /**
     * Sets the value of the Product.
     * 
     * @param mixed Product or an array of Product Product
     * @return this instance
     */
    public function setProduct($product) 
    {
        if (!$this->_isNumericArray($product)) {
            $product =  array ($product);    
        }
        $this->_fields['Product']['FieldValue'] = $product;
        return $this;
    }


    /**
     * Sets single or multiple values of Product list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withProduct($product1, $product2)</code>
     * 
     * @param Product  $productArgs one or more Product
     * @return MarketplaceWebServiceProducts_Model_ProductList  instance
     */
    public function withProduct($productArgs)
    {
        foreach (func_get_args() as $product) {
            $this->_fields['Product']['FieldValue'][] = $product;
        }
        return $this;
    }   



    /**
     * Checks if Product list is non-empty
     * 
     * @return bool true if Product list is non-empty
     */
    public function isSetProduct()
    {
        return count ($this->_fields['Product']['FieldValue']) > 0;
    }




}