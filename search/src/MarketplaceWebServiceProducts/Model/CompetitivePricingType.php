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
 * MarketplaceWebServiceProducts_Model_CompetitivePricingType
 * 
 * Properties:
 * <ul>
 * 
 * <li>CompetitivePrices: MarketplaceWebServiceProducts_Model_CompetitivePriceList</li>
 * <li>NumberOfOfferListings: MarketplaceWebServiceProducts_Model_NumberOfOfferListingsList</li>
 * <li>TradeInValue: MarketplaceWebServiceProducts_Model_MoneyType</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_CompetitivePricingType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_CompetitivePricingType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CompetitivePrices: MarketplaceWebServiceProducts_Model_CompetitivePriceList</li>
     * <li>NumberOfOfferListings: MarketplaceWebServiceProducts_Model_NumberOfOfferListingsList</li>
     * <li>TradeInValue: MarketplaceWebServiceProducts_Model_MoneyType</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (

        'CompetitivePrices' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_CompetitivePriceList'),


        'NumberOfOfferListings' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_NumberOfOfferListingsList'),


        'TradeInValue' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),

        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the CompetitivePrices.
     * 
     * @return CompetitivePriceList CompetitivePrices
     */
    public function getCompetitivePrices() 
    {
        return $this->_fields['CompetitivePrices']['FieldValue'];
    }

    /**
     * Sets the value of the CompetitivePrices.
     * 
     * @param CompetitivePriceList CompetitivePrices
     * @return void
     */
    public function setCompetitivePrices($value) 
    {
        $this->_fields['CompetitivePrices']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the CompetitivePrices  and returns this instance
     * 
     * @param CompetitivePriceList $value CompetitivePrices
     * @return MarketplaceWebServiceProducts_Model_CompetitivePricingType instance
     */
    public function withCompetitivePrices($value)
    {
        $this->setCompetitivePrices($value);
        return $this;
    }


    /**
     * Checks if CompetitivePrices  is set
     * 
     * @return bool true if CompetitivePrices property is set
     */
    public function isSetCompetitivePrices()
    {
        return !is_null($this->_fields['CompetitivePrices']['FieldValue']);

    }

    /**
     * Gets the value of the NumberOfOfferListings.
     * 
     * @return NumberOfOfferListingsList NumberOfOfferListings
     */
    public function getNumberOfOfferListings() 
    {
        return $this->_fields['NumberOfOfferListings']['FieldValue'];
    }

    /**
     * Sets the value of the NumberOfOfferListings.
     * 
     * @param NumberOfOfferListingsList NumberOfOfferListings
     * @return void
     */
    public function setNumberOfOfferListings($value) 
    {
        $this->_fields['NumberOfOfferListings']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the NumberOfOfferListings  and returns this instance
     * 
     * @param NumberOfOfferListingsList $value NumberOfOfferListings
     * @return MarketplaceWebServiceProducts_Model_CompetitivePricingType instance
     */
    public function withNumberOfOfferListings($value)
    {
        $this->setNumberOfOfferListings($value);
        return $this;
    }


    /**
     * Checks if NumberOfOfferListings  is set
     * 
     * @return bool true if NumberOfOfferListings property is set
     */
    public function isSetNumberOfOfferListings()
    {
        return !is_null($this->_fields['NumberOfOfferListings']['FieldValue']);

    }

    /**
     * Gets the value of the TradeInValue.
     * 
     * @return MoneyType TradeInValue
     */
    public function getTradeInValue() 
    {
        return $this->_fields['TradeInValue']['FieldValue'];
    }

    /**
     * Sets the value of the TradeInValue.
     * 
     * @param MoneyType TradeInValue
     * @return void
     */
    public function setTradeInValue($value) 
    {
        $this->_fields['TradeInValue']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the TradeInValue  and returns this instance
     * 
     * @param MoneyType $value TradeInValue
     * @return MarketplaceWebServiceProducts_Model_CompetitivePricingType instance
     */
    public function withTradeInValue($value)
    {
        $this->setTradeInValue($value);
        return $this;
    }


    /**
     * Checks if TradeInValue  is set
     * 
     * @return bool true if TradeInValue property is set
     */
    public function isSetTradeInValue()
    {
        return !is_null($this->_fields['TradeInValue']['FieldValue']);

    }




}