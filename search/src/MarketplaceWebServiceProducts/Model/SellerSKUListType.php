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
 * MarketplaceWebServiceProducts_Model_SellerSKUListType
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerSKU: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_SellerSKUListType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_SellerSKUListType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SellerSKU: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SellerSKU' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SellerSKU .
     * 
     * @return array of string SellerSKU
     */
    public function getSellerSKU() 
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Sets the value of the SellerSKU.
     * 
     * @param string or an array of string SellerSKU
     * @return this instance
     */
    public function setSellerSKU($sellerSKU) 
    {
        if (!$this->_isNumericArray($sellerSKU)) {
            $sellerSKU =  array ($sellerSKU);    
        }
        $this->_fields['SellerSKU']['FieldValue'] = $sellerSKU;
        return $this;
    }
  

    /**
     * Sets single or multiple values of SellerSKU list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSellerSKU($sellerSKU1, $sellerSKU2)</code>
     * 
     * @param string  $stringArgs one or more SellerSKU
     * @return MarketplaceWebServiceProducts_Model_SellerSKUListType  instance
     */
    public function withSellerSKU($stringArgs)
    {
        foreach (func_get_args() as $sellerSKU) {
            $this->_fields['SellerSKU']['FieldValue'][] = $sellerSKU;
        }
        return $this;
    }  
      

    /**
     * Checks if SellerSKU list is non-empty
     * 
     * @return bool true if SellerSKU list is non-empty
     */
    public function isSetSellerSKU()
    {
        return count ($this->_fields['SellerSKU']['FieldValue']) > 0;
    }




}