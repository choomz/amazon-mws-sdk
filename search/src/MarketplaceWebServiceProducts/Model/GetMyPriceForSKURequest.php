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
 * MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MarketplaceId: string</li>
 * <li>SellerSKUList: MarketplaceWebServiceProducts_Model_SellerSKUListType</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SellerId: string</li>
     * <li>MarketplaceId: string</li>
     * <li>SellerSKUList: MarketplaceWebServiceProducts_Model_SellerSKUListType</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),

        'SellerSKUList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_SellerSKUListType'),

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
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest instance
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
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest instance
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
     * Gets the value of the SellerSKUList.
     * 
     * @return SellerSKUListType SellerSKUList
     */
    public function getSellerSKUList() 
    {
        return $this->_fields['SellerSKUList']['FieldValue'];
    }

    /**
     * Sets the value of the SellerSKUList.
     * 
     * @param SellerSKUListType SellerSKUList
     * @return void
     */
    public function setSellerSKUList($value) 
    {
        $this->_fields['SellerSKUList']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the SellerSKUList  and returns this instance
     * 
     * @param SellerSKUListType $value SellerSKUList
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest instance
     */
    public function withSellerSKUList($value)
    {
        $this->setSellerSKUList($value);
        return $this;
    }


    /**
     * Checks if SellerSKUList  is set
     * 
     * @return bool true if SellerSKUList property is set
     */
    public function isSetSellerSKUList()
    {
        return !is_null($this->_fields['SellerSKUList']['FieldValue']);

    }




}