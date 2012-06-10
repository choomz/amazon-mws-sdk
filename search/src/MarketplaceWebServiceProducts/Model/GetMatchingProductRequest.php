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
 * MarketplaceWebServiceProducts_Model_GetMatchingProductRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MarketplaceId: string</li>
 * <li>ASINList: MarketplaceWebServiceProducts_Model_ASINListType</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_GetMatchingProductRequest extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_GetMatchingProductRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SellerId: string</li>
     * <li>MarketplaceId: string</li>
     * <li>ASINList: MarketplaceWebServiceProducts_Model_ASINListType</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),

        'ASINList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ASINListType'),

        );
        parent::__construct($data);
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
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductRequest instance
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
     * Gets the value of the MarketplaceId property.
     * 
     * @return string MarketplaceId
     */
    public function getMarketplaceId() 
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Sets the value of the MarketplaceId property.
     * 
     * @param string MarketplaceId
     * @return this instance
     */
    public function setMarketplaceId($value) 
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MarketplaceId and returns this instance
     * 
     * @param string $value MarketplaceId
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductRequest instance
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }


    /**
     * Checks if MarketplaceId is set
     * 
     * @return bool true if MarketplaceId  is set
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }

    /**
     * Gets the value of the ASINList.
     * 
     * @return ASINListType ASINList
     */
    public function getASINList() 
    {
        return $this->_fields['ASINList']['FieldValue'];
    }

    /**
     * Sets the value of the ASINList.
     * 
     * @param ASINListType ASINList
     * @return void
     */
    public function setASINList($value) 
    {
        $this->_fields['ASINList']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ASINList  and returns this instance
     * 
     * @param ASINListType $value ASINList
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductRequest instance
     */
    public function withASINList($value)
    {
        $this->setASINList($value);
        return $this;
    }


    /**
     * Checks if ASINList  is set
     * 
     * @return bool true if ASINList property is set
     */
    public function isSetASINList()
    {
        return !is_null($this->_fields['ASINList']['FieldValue']);

    }




}