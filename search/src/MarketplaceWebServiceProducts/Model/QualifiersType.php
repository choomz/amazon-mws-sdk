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
 * MarketplaceWebServiceProducts_Model_QualifiersType
 * 
 * Properties:
 * <ul>
 * 
 * <li>ItemCondition: string</li>
 * <li>ItemSubcondition: string</li>
 * <li>FulfillmentChannel: string</li>
 * <li>ShipsDomestically: string</li>
 * <li>ShippingTime: MarketplaceWebServiceProducts_Model_ShippingTimeType</li>
 * <li>SellerPositiveFeedbackRating: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_QualifiersType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_QualifiersType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ItemCondition: string</li>
     * <li>ItemSubcondition: string</li>
     * <li>FulfillmentChannel: string</li>
     * <li>ShipsDomestically: string</li>
     * <li>ShippingTime: MarketplaceWebServiceProducts_Model_ShippingTimeType</li>
     * <li>SellerPositiveFeedbackRating: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ItemCondition' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ItemSubcondition' => array('FieldValue' => null, 'FieldType' => 'string'),
        'FulfillmentChannel' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ShipsDomestically' => array('FieldValue' => null, 'FieldType' => 'string'),

        'ShippingTime' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ShippingTimeType'),

        'SellerPositiveFeedbackRating' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
     * @return MarketplaceWebServiceProducts_Model_QualifiersType instance
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
     * Gets the value of the ItemSubcondition property.
     * 
     * @return string ItemSubcondition
     */
    public function getItemSubcondition() 
    {
        return $this->_fields['ItemSubcondition']['FieldValue'];
    }

    /**
     * Sets the value of the ItemSubcondition property.
     * 
     * @param string ItemSubcondition
     * @return this instance
     */
    public function setItemSubcondition($value) 
    {
        $this->_fields['ItemSubcondition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ItemSubcondition and returns this instance
     * 
     * @param string $value ItemSubcondition
     * @return MarketplaceWebServiceProducts_Model_QualifiersType instance
     */
    public function withItemSubcondition($value)
    {
        $this->setItemSubcondition($value);
        return $this;
    }


    /**
     * Checks if ItemSubcondition is set
     * 
     * @return bool true if ItemSubcondition  is set
     */
    public function isSetItemSubcondition()
    {
        return !is_null($this->_fields['ItemSubcondition']['FieldValue']);
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
     * @return MarketplaceWebServiceProducts_Model_QualifiersType instance
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
     * Gets the value of the ShipsDomestically property.
     * 
     * @return string ShipsDomestically
     */
    public function getShipsDomestically() 
    {
        return $this->_fields['ShipsDomestically']['FieldValue'];
    }

    /**
     * Sets the value of the ShipsDomestically property.
     * 
     * @param string ShipsDomestically
     * @return this instance
     */
    public function setShipsDomestically($value) 
    {
        $this->_fields['ShipsDomestically']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ShipsDomestically and returns this instance
     * 
     * @param string $value ShipsDomestically
     * @return MarketplaceWebServiceProducts_Model_QualifiersType instance
     */
    public function withShipsDomestically($value)
    {
        $this->setShipsDomestically($value);
        return $this;
    }


    /**
     * Checks if ShipsDomestically is set
     * 
     * @return bool true if ShipsDomestically  is set
     */
    public function isSetShipsDomestically()
    {
        return !is_null($this->_fields['ShipsDomestically']['FieldValue']);
    }

    /**
     * Gets the value of the ShippingTime.
     * 
     * @return ShippingTimeType ShippingTime
     */
    public function getShippingTime() 
    {
        return $this->_fields['ShippingTime']['FieldValue'];
    }

    /**
     * Sets the value of the ShippingTime.
     * 
     * @param ShippingTimeType ShippingTime
     * @return void
     */
    public function setShippingTime($value) 
    {
        $this->_fields['ShippingTime']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ShippingTime  and returns this instance
     * 
     * @param ShippingTimeType $value ShippingTime
     * @return MarketplaceWebServiceProducts_Model_QualifiersType instance
     */
    public function withShippingTime($value)
    {
        $this->setShippingTime($value);
        return $this;
    }


    /**
     * Checks if ShippingTime  is set
     * 
     * @return bool true if ShippingTime property is set
     */
    public function isSetShippingTime()
    {
        return !is_null($this->_fields['ShippingTime']['FieldValue']);

    }

    /**
     * Gets the value of the SellerPositiveFeedbackRating property.
     * 
     * @return string SellerPositiveFeedbackRating
     */
    public function getSellerPositiveFeedbackRating() 
    {
        return $this->_fields['SellerPositiveFeedbackRating']['FieldValue'];
    }

    /**
     * Sets the value of the SellerPositiveFeedbackRating property.
     * 
     * @param string SellerPositiveFeedbackRating
     * @return this instance
     */
    public function setSellerPositiveFeedbackRating($value) 
    {
        $this->_fields['SellerPositiveFeedbackRating']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SellerPositiveFeedbackRating and returns this instance
     * 
     * @param string $value SellerPositiveFeedbackRating
     * @return MarketplaceWebServiceProducts_Model_QualifiersType instance
     */
    public function withSellerPositiveFeedbackRating($value)
    {
        $this->setSellerPositiveFeedbackRating($value);
        return $this;
    }


    /**
     * Checks if SellerPositiveFeedbackRating is set
     * 
     * @return bool true if SellerPositiveFeedbackRating  is set
     */
    public function isSetSellerPositiveFeedbackRating()
    {
        return !is_null($this->_fields['SellerPositiveFeedbackRating']['FieldValue']);
    }




}