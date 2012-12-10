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
 * MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MarketplaceId: string</li>
 * <li>IdType: string</li>
 * <li>IdList: MarketplaceWebServiceProducts_Model_IdListType</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SellerId: string</li>
     * <li>MarketplaceId: string</li>
     * <li>IdType: string</li>
     * <li>IdList: MarketplaceWebServiceProducts_Model_IdListType</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'IdType' => array('FieldValue' => null, 'FieldType' => 'string'),

        'IdList' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_IdListType'),

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
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest instance
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
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest instance
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
     * Gets the value of the IdType property.
     * 
     * @return string IdType
     */
    public function getIdType() 
    {
        return $this->_fields['IdType']['FieldValue'];
    }

    /**
     * Sets the value of the IdType property.
     * 
     * @param string IdType
     * @return this instance
     */
    public function setIdType($value) 
    {
        $this->_fields['IdType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the IdType and returns this instance
     * 
     * @param string $value IdType
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest instance
     */
    public function withIdType($value)
    {
        $this->setIdType($value);
        return $this;
    }


    /**
     * Checks if IdType is set
     * 
     * @return bool true if IdType  is set
     */
    public function isSetIdType()
    {
        return !is_null($this->_fields['IdType']['FieldValue']);
    }

    /**
     * Gets the value of the IdList.
     * 
     * @return IdListType IdList
     */
    public function getIdList() 
    {
        return $this->_fields['IdList']['FieldValue'];
    }

    /**
     * Sets the value of the IdList.
     * 
     * @param IdListType IdList
     * @return void
     */
    public function setIdList($value) 
    {
        $this->_fields['IdList']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the IdList  and returns this instance
     * 
     * @param IdListType $value IdList
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdRequest instance
     */
    public function withIdList($value)
    {
        $this->setIdList($value);
        return $this;
    }


    /**
     * Checks if IdList  is set
     * 
     * @return bool true if IdList property is set
     */
    public function isSetIdList()
    {
        return !is_null($this->_fields['IdList']['FieldValue']);

    }




}