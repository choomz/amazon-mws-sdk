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
 * MarketplaceWebServiceProducts_Model_LowestOfferListingType
 * 
 * Properties:
 * <ul>
 * 
 * <li>Qualifiers: MarketplaceWebServiceProducts_Model_QualifiersType</li>
 * <li>NumberOfOfferListingsConsidered: int</li>
 * <li>SellerFeedbackCount: int</li>
 * <li>Price: MarketplaceWebServiceProducts_Model_PriceType</li>
 * <li>MultipleOffersAtLowestPrice: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_LowestOfferListingType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_LowestOfferListingType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Qualifiers: MarketplaceWebServiceProducts_Model_QualifiersType</li>
     * <li>NumberOfOfferListingsConsidered: int</li>
     * <li>SellerFeedbackCount: int</li>
     * <li>Price: MarketplaceWebServiceProducts_Model_PriceType</li>
     * <li>MultipleOffersAtLowestPrice: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (

        'Qualifiers' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_QualifiersType'),

        'NumberOfOfferListingsConsidered' => array('FieldValue' => null, 'FieldType' => 'int'),
        'SellerFeedbackCount' => array('FieldValue' => null, 'FieldType' => 'int'),

        'Price' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_PriceType'),

        'MultipleOffersAtLowestPrice' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Qualifiers.
     * 
     * @return QualifiersType Qualifiers
     */
    public function getQualifiers() 
    {
        return $this->_fields['Qualifiers']['FieldValue'];
    }

    /**
     * Sets the value of the Qualifiers.
     * 
     * @param QualifiersType Qualifiers
     * @return void
     */
    public function setQualifiers($value) 
    {
        $this->_fields['Qualifiers']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Qualifiers  and returns this instance
     * 
     * @param QualifiersType $value Qualifiers
     * @return MarketplaceWebServiceProducts_Model_LowestOfferListingType instance
     */
    public function withQualifiers($value)
    {
        $this->setQualifiers($value);
        return $this;
    }


    /**
     * Checks if Qualifiers  is set
     * 
     * @return bool true if Qualifiers property is set
     */
    public function isSetQualifiers()
    {
        return !is_null($this->_fields['Qualifiers']['FieldValue']);

    }

    /**
     * Gets the value of the NumberOfOfferListingsConsidered property.
     * 
     * @return int NumberOfOfferListingsConsidered
     */
    public function getNumberOfOfferListingsConsidered() 
    {
        return $this->_fields['NumberOfOfferListingsConsidered']['FieldValue'];
    }

    /**
     * Sets the value of the NumberOfOfferListingsConsidered property.
     * 
     * @param int NumberOfOfferListingsConsidered
     * @return this instance
     */
    public function setNumberOfOfferListingsConsidered($value) 
    {
        $this->_fields['NumberOfOfferListingsConsidered']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the NumberOfOfferListingsConsidered and returns this instance
     * 
     * @param int $value NumberOfOfferListingsConsidered
     * @return MarketplaceWebServiceProducts_Model_LowestOfferListingType instance
     */
    public function withNumberOfOfferListingsConsidered($value)
    {
        $this->setNumberOfOfferListingsConsidered($value);
        return $this;
    }


    /**
     * Checks if NumberOfOfferListingsConsidered is set
     * 
     * @return bool true if NumberOfOfferListingsConsidered  is set
     */
    public function isSetNumberOfOfferListingsConsidered()
    {
        return !is_null($this->_fields['NumberOfOfferListingsConsidered']['FieldValue']);
    }

    /**
     * Gets the value of the SellerFeedbackCount property.
     * 
     * @return int SellerFeedbackCount
     */
    public function getSellerFeedbackCount() 
    {
        return $this->_fields['SellerFeedbackCount']['FieldValue'];
    }

    /**
     * Sets the value of the SellerFeedbackCount property.
     * 
     * @param int SellerFeedbackCount
     * @return this instance
     */
    public function setSellerFeedbackCount($value) 
    {
        $this->_fields['SellerFeedbackCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SellerFeedbackCount and returns this instance
     * 
     * @param int $value SellerFeedbackCount
     * @return MarketplaceWebServiceProducts_Model_LowestOfferListingType instance
     */
    public function withSellerFeedbackCount($value)
    {
        $this->setSellerFeedbackCount($value);
        return $this;
    }


    /**
     * Checks if SellerFeedbackCount is set
     * 
     * @return bool true if SellerFeedbackCount  is set
     */
    public function isSetSellerFeedbackCount()
    {
        return !is_null($this->_fields['SellerFeedbackCount']['FieldValue']);
    }

    /**
     * Gets the value of the Price.
     * 
     * @return PriceType Price
     */
    public function getPrice() 
    {
        return $this->_fields['Price']['FieldValue'];
    }

    /**
     * Sets the value of the Price.
     * 
     * @param PriceType Price
     * @return void
     */
    public function setPrice($value) 
    {
        $this->_fields['Price']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Price  and returns this instance
     * 
     * @param PriceType $value Price
     * @return MarketplaceWebServiceProducts_Model_LowestOfferListingType instance
     */
    public function withPrice($value)
    {
        $this->setPrice($value);
        return $this;
    }


    /**
     * Checks if Price  is set
     * 
     * @return bool true if Price property is set
     */
    public function isSetPrice()
    {
        return !is_null($this->_fields['Price']['FieldValue']);

    }

    /**
     * Gets the value of the MultipleOffersAtLowestPrice property.
     * 
     * @return string MultipleOffersAtLowestPrice
     */
    public function getMultipleOffersAtLowestPrice() 
    {
        return $this->_fields['MultipleOffersAtLowestPrice']['FieldValue'];
    }

    /**
     * Sets the value of the MultipleOffersAtLowestPrice property.
     * 
     * @param string MultipleOffersAtLowestPrice
     * @return this instance
     */
    public function setMultipleOffersAtLowestPrice($value) 
    {
        $this->_fields['MultipleOffersAtLowestPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MultipleOffersAtLowestPrice and returns this instance
     * 
     * @param string $value MultipleOffersAtLowestPrice
     * @return MarketplaceWebServiceProducts_Model_LowestOfferListingType instance
     */
    public function withMultipleOffersAtLowestPrice($value)
    {
        $this->setMultipleOffersAtLowestPrice($value);
        return $this;
    }


    /**
     * Checks if MultipleOffersAtLowestPrice is set
     * 
     * @return bool true if MultipleOffersAtLowestPrice  is set
     */
    public function isSetMultipleOffersAtLowestPrice()
    {
        return !is_null($this->_fields['MultipleOffersAtLowestPrice']['FieldValue']);
    }




}