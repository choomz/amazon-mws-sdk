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
 * MarketplaceWebServiceProducts_Model_OfferType
 * 
 * Properties:
 * <ul>
 * 
 * <li>BuyingPrice: MarketplaceWebServiceProducts_Model_PriceType</li>
 * <li>RegularPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>FulfillmentChannel: string</li>
 * <li>ItemCondition: string</li>
 * <li>ItemSubCondition: string</li>
 * <li>SellerId: string</li>
 * <li>SellerSKU: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_OfferType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_OfferType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>BuyingPrice: MarketplaceWebServiceProducts_Model_PriceType</li>
     * <li>RegularPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
     * <li>FulfillmentChannel: string</li>
     * <li>ItemCondition: string</li>
     * <li>ItemSubCondition: string</li>
     * <li>SellerId: string</li>
     * <li>SellerSKU: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (

        'BuyingPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_PriceType'),


        'RegularPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),

        'FulfillmentChannel' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ItemCondition' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ItemSubCondition' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the BuyingPrice.
     * 
     * @return PriceType BuyingPrice
     */
    public function getBuyingPrice() 
    {
        return $this->_fields['BuyingPrice']['FieldValue'];
    }

    /**
     * Sets the value of the BuyingPrice.
     * 
     * @param PriceType BuyingPrice
     * @return void
     */
    public function setBuyingPrice($value) 
    {
        $this->_fields['BuyingPrice']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the BuyingPrice  and returns this instance
     * 
     * @param PriceType $value BuyingPrice
     * @return MarketplaceWebServiceProducts_Model_OfferType instance
     */
    public function withBuyingPrice($value)
    {
        $this->setBuyingPrice($value);
        return $this;
    }


    /**
     * Checks if BuyingPrice  is set
     * 
     * @return bool true if BuyingPrice property is set
     */
    public function isSetBuyingPrice()
    {
        return !is_null($this->_fields['BuyingPrice']['FieldValue']);

    }

    /**
     * Gets the value of the RegularPrice.
     * 
     * @return MoneyType RegularPrice
     */
    public function getRegularPrice() 
    {
        return $this->_fields['RegularPrice']['FieldValue'];
    }

    /**
     * Sets the value of the RegularPrice.
     * 
     * @param MoneyType RegularPrice
     * @return void
     */
    public function setRegularPrice($value) 
    {
        $this->_fields['RegularPrice']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the RegularPrice  and returns this instance
     * 
     * @param MoneyType $value RegularPrice
     * @return MarketplaceWebServiceProducts_Model_OfferType instance
     */
    public function withRegularPrice($value)
    {
        $this->setRegularPrice($value);
        return $this;
    }


    /**
     * Checks if RegularPrice  is set
     * 
     * @return bool true if RegularPrice property is set
     */
    public function isSetRegularPrice()
    {
        return !is_null($this->_fields['RegularPrice']['FieldValue']);

    }

    /**
     * Gets the value of the FulfillmentChannel property.
     * 
     * @return string FulfillmentChannel
     */
    public function getFulfillmentChannel() 
    {
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }

    /**
     * Sets the value of the FulfillmentChannel property.
     * 
     * @param string FulfillmentChannel
     * @return this instance
     */
    public function setFulfillmentChannel($value) 
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the FulfillmentChannel and returns this instance
     * 
     * @param string $value FulfillmentChannel
     * @return MarketplaceWebServiceProducts_Model_OfferType instance
     */
    public function withFulfillmentChannel($value)
    {
        $this->setFulfillmentChannel($value);
        return $this;
    }


    /**
     * Checks if FulfillmentChannel is set
     * 
     * @return bool true if FulfillmentChannel  is set
     */
    public function isSetFulfillmentChannel()
    {
        return !is_null($this->_fields['FulfillmentChannel']['FieldValue']);
    }

    /**
     * Gets the value of the ItemCondition property.
     * 
     * @return string ItemCondition
     */
    public function getItemCondition() 
    {
        return $this->_fields['ItemCondition']['FieldValue'];
    }

    /**
     * Sets the value of the ItemCondition property.
     * 
     * @param string ItemCondition
     * @return this instance
     */
    public function setItemCondition($value) 
    {
        $this->_fields['ItemCondition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ItemCondition and returns this instance
     * 
     * @param string $value ItemCondition
     * @return MarketplaceWebServiceProducts_Model_OfferType instance
     */
    public function withItemCondition($value)
    {
        $this->setItemCondition($value);
        return $this;
    }


    /**
     * Checks if ItemCondition is set
     * 
     * @return bool true if ItemCondition  is set
     */
    public function isSetItemCondition()
    {
        return !is_null($this->_fields['ItemCondition']['FieldValue']);
    }

    /**
     * Gets the value of the ItemSubCondition property.
     * 
     * @return string ItemSubCondition
     */
    public function getItemSubCondition() 
    {
        return $this->_fields['ItemSubCondition']['FieldValue'];
    }

    /**
     * Sets the value of the ItemSubCondition property.
     * 
     * @param string ItemSubCondition
     * @return this instance
     */
    public function setItemSubCondition($value) 
    {
        $this->_fields['ItemSubCondition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ItemSubCondition and returns this instance
     * 
     * @param string $value ItemSubCondition
     * @return MarketplaceWebServiceProducts_Model_OfferType instance
     */
    public function withItemSubCondition($value)
    {
        $this->setItemSubCondition($value);
        return $this;
    }


    /**
     * Checks if ItemSubCondition is set
     * 
     * @return bool true if ItemSubCondition  is set
     */
    public function isSetItemSubCondition()
    {
        return !is_null($this->_fields['ItemSubCondition']['FieldValue']);
    }

    /**
     * Gets the value of the SellerId property.
     * 
     * @return string SellerId
     */
    public function getSellerId() 
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Sets the value of the SellerId property.
     * 
     * @param string SellerId
     * @return this instance
     */
    public function setSellerId($value) 
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SellerId and returns this instance
     * 
     * @param string $value SellerId
     * @return MarketplaceWebServiceProducts_Model_OfferType instance
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }


    /**
     * Checks if SellerId is set
     * 
     * @return bool true if SellerId  is set
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }

    /**
     * Gets the value of the SellerSKU property.
     * 
     * @return string SellerSKU
     */
    public function getSellerSKU() 
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Sets the value of the SellerSKU property.
     * 
     * @param string SellerSKU
     * @return this instance
     */
    public function setSellerSKU($value) 
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SellerSKU and returns this instance
     * 
     * @param string $value SellerSKU
     * @return MarketplaceWebServiceProducts_Model_OfferType instance
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }


    /**
     * Checks if SellerSKU is set
     * 
     * @return bool true if SellerSKU  is set
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }




}