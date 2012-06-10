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
 * MarketplaceWebServiceProducts_Model_IdentifierType
 * 
 * Properties:
 * <ul>
 * 
 * <li>MarketplaceASIN: MarketplaceWebServiceProducts_Model_ASINIdentifier</li>
 * <li>SKUIdentifier: MarketplaceWebServiceProducts_Model_SellerSKUIdentifier</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_IdentifierType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_IdentifierType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>MarketplaceASIN: MarketplaceWebServiceProducts_Model_ASINIdentifier</li>
     * <li>SKUIdentifier: MarketplaceWebServiceProducts_Model_SellerSKUIdentifier</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (

        'MarketplaceASIN' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ASINIdentifier'),


        'SKUIdentifier' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_SellerSKUIdentifier'),

        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the MarketplaceASIN.
     * 
     * @return ASINIdentifier MarketplaceASIN
     */
    public function getMarketplaceASIN() 
    {
        return $this->_fields['MarketplaceASIN']['FieldValue'];
    }

    /**
     * Sets the value of the MarketplaceASIN.
     * 
     * @param ASINIdentifier MarketplaceASIN
     * @return void
     */
    public function setMarketplaceASIN($value) 
    {
        $this->_fields['MarketplaceASIN']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the MarketplaceASIN  and returns this instance
     * 
     * @param ASINIdentifier $value MarketplaceASIN
     * @return MarketplaceWebServiceProducts_Model_IdentifierType instance
     */
    public function withMarketplaceASIN($value)
    {
        $this->setMarketplaceASIN($value);
        return $this;
    }


    /**
     * Checks if MarketplaceASIN  is set
     * 
     * @return bool true if MarketplaceASIN property is set
     */
    public function isSetMarketplaceASIN()
    {
        return !is_null($this->_fields['MarketplaceASIN']['FieldValue']);

    }

    /**
     * Gets the value of the SKUIdentifier.
     * 
     * @return SellerSKUIdentifier SKUIdentifier
     */
    public function getSKUIdentifier() 
    {
        return $this->_fields['SKUIdentifier']['FieldValue'];
    }

    /**
     * Sets the value of the SKUIdentifier.
     * 
     * @param SellerSKUIdentifier SKUIdentifier
     * @return void
     */
    public function setSKUIdentifier($value) 
    {
        $this->_fields['SKUIdentifier']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the SKUIdentifier  and returns this instance
     * 
     * @param SellerSKUIdentifier $value SKUIdentifier
     * @return MarketplaceWebServiceProducts_Model_IdentifierType instance
     */
    public function withSKUIdentifier($value)
    {
        $this->setSKUIdentifier($value);
        return $this;
    }


    /**
     * Checks if SKUIdentifier  is set
     * 
     * @return bool true if SKUIdentifier property is set
     */
    public function isSetSKUIdentifier()
    {
        return !is_null($this->_fields['SKUIdentifier']['FieldValue']);

    }




}