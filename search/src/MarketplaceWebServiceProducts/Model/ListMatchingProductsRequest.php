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
 * MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>SellerId: string</li>
 * <li>MarketplaceId: string</li>
 * <li>Query: string</li>
 * <li>QueryContextId: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SellerId: string</li>
     * <li>MarketplaceId: string</li>
     * <li>Query: string</li>
     * <li>QueryContextId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Query' => array('FieldValue' => null, 'FieldType' => 'string'),
        'QueryContextId' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest instance
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
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest instance
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
     * Gets the value of the Query property.
     * 
     * @return string Query
     */
    public function getQuery() 
    {
        return $this->_fields['Query']['FieldValue'];
    }

    /**
     * Sets the value of the Query property.
     * 
     * @param string Query
     * @return this instance
     */
    public function setQuery($value) 
    {
        $this->_fields['Query']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Query and returns this instance
     * 
     * @param string $value Query
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest instance
     */
    public function withQuery($value)
    {
        $this->setQuery($value);
        return $this;
    }


    /**
     * Checks if Query is set
     * 
     * @return bool true if Query  is set
     */
    public function isSetQuery()
    {
        return !is_null($this->_fields['Query']['FieldValue']);
    }

    /**
     * Gets the value of the QueryContextId property.
     * 
     * @return string QueryContextId
     */
    public function getQueryContextId() 
    {
        return $this->_fields['QueryContextId']['FieldValue'];
    }

    /**
     * Sets the value of the QueryContextId property.
     * 
     * @param string QueryContextId
     * @return this instance
     */
    public function setQueryContextId($value) 
    {
        $this->_fields['QueryContextId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the QueryContextId and returns this instance
     * 
     * @param string $value QueryContextId
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest instance
     */
    public function withQueryContextId($value)
    {
        $this->setQueryContextId($value);
        return $this;
    }


    /**
     * Checks if QueryContextId is set
     * 
     * @return bool true if QueryContextId  is set
     */
    public function isSetQueryContextId()
    {
        return !is_null($this->_fields['QueryContextId']['FieldValue']);
    }




}