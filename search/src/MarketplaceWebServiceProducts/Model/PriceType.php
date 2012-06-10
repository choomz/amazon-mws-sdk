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
 * MarketplaceWebServiceProducts_Model_PriceType
 * 
 * Properties:
 * <ul>
 * 
 * <li>LandedPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>ListingPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>Shipping: MarketplaceWebServiceProducts_Model_MoneyType</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_PriceType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_PriceType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>LandedPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
     * <li>ListingPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
     * <li>Shipping: MarketplaceWebServiceProducts_Model_MoneyType</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (

        'LandedPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),


        'ListingPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),


        'Shipping' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),

        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the LandedPrice.
     * 
     * @return MoneyType LandedPrice
     */
    public function getLandedPrice() 
    {
        return $this->_fields['LandedPrice']['FieldValue'];
    }

    /**
     * Sets the value of the LandedPrice.
     * 
     * @param MoneyType LandedPrice
     * @return void
     */
    public function setLandedPrice($value) 
    {
        $this->_fields['LandedPrice']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the LandedPrice  and returns this instance
     * 
     * @param MoneyType $value LandedPrice
     * @return MarketplaceWebServiceProducts_Model_PriceType instance
     */
    public function withLandedPrice($value)
    {
        $this->setLandedPrice($value);
        return $this;
    }


    /**
     * Checks if LandedPrice  is set
     * 
     * @return bool true if LandedPrice property is set
     */
    public function isSetLandedPrice()
    {
        return !is_null($this->_fields['LandedPrice']['FieldValue']);

    }

    /**
     * Gets the value of the ListingPrice.
     * 
     * @return MoneyType ListingPrice
     */
    public function getListingPrice() 
    {
        return $this->_fields['ListingPrice']['FieldValue'];
    }

    /**
     * Sets the value of the ListingPrice.
     * 
     * @param MoneyType ListingPrice
     * @return void
     */
    public function setListingPrice($value) 
    {
        $this->_fields['ListingPrice']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ListingPrice  and returns this instance
     * 
     * @param MoneyType $value ListingPrice
     * @return MarketplaceWebServiceProducts_Model_PriceType instance
     */
    public function withListingPrice($value)
    {
        $this->setListingPrice($value);
        return $this;
    }


    /**
     * Checks if ListingPrice  is set
     * 
     * @return bool true if ListingPrice property is set
     */
    public function isSetListingPrice()
    {
        return !is_null($this->_fields['ListingPrice']['FieldValue']);

    }

    /**
     * Gets the value of the Shipping.
     * 
     * @return MoneyType Shipping
     */
    public function getShipping() 
    {
        return $this->_fields['Shipping']['FieldValue'];
    }

    /**
     * Sets the value of the Shipping.
     * 
     * @param MoneyType Shipping
     * @return void
     */
    public function setShipping($value) 
    {
        $this->_fields['Shipping']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Shipping  and returns this instance
     * 
     * @param MoneyType $value Shipping
     * @return MarketplaceWebServiceProducts_Model_PriceType instance
     */
    public function withShipping($value)
    {
        $this->setShipping($value);
        return $this;
    }


    /**
     * Checks if Shipping  is set
     * 
     * @return bool true if Shipping property is set
     */
    public function isSetShipping()
    {
        return !is_null($this->_fields['Shipping']['FieldValue']);

    }




}