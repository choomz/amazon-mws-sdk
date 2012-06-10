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
 * MarketplaceWebServiceProducts_Model_SalesRankType
 * 
 * Properties:
 * <ul>
 * 
 * <li>ProductCategoryId: string</li>
 * <li>Rank: int</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_SalesRankType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_SalesRankType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ProductCategoryId: string</li>
     * <li>Rank: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ProductCategoryId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Rank' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ProductCategoryId property.
     * 
     * @return string ProductCategoryId
     */
    public function getProductCategoryId() 
    {
        return $this->_fields['ProductCategoryId']['FieldValue'];
    }

    /**
     * Sets the value of the ProductCategoryId property.
     * 
     * @param string ProductCategoryId
     * @return this instance
     */
    public function setProductCategoryId($value) 
    {
        $this->_fields['ProductCategoryId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ProductCategoryId and returns this instance
     * 
     * @param string $value ProductCategoryId
     * @return MarketplaceWebServiceProducts_Model_SalesRankType instance
     */
    public function withProductCategoryId($value)
    {
        $this->setProductCategoryId($value);
        return $this;
    }


    /**
     * Checks if ProductCategoryId is set
     * 
     * @return bool true if ProductCategoryId  is set
     */
    public function isSetProductCategoryId()
    {
        return !is_null($this->_fields['ProductCategoryId']['FieldValue']);
    }

    /**
     * Gets the value of the Rank property.
     * 
     * @return int Rank
     */
    public function getRank() 
    {
        return $this->_fields['Rank']['FieldValue'];
    }

    /**
     * Sets the value of the Rank property.
     * 
     * @param int Rank
     * @return this instance
     */
    public function setRank($value) 
    {
        $this->_fields['Rank']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Rank and returns this instance
     * 
     * @param int $value Rank
     * @return MarketplaceWebServiceProducts_Model_SalesRankType instance
     */
    public function withRank($value)
    {
        $this->setRank($value);
        return $this;
    }


    /**
     * Checks if Rank is set
     * 
     * @return bool true if Rank  is set
     */
    public function isSetRank()
    {
        return !is_null($this->_fields['Rank']['FieldValue']);
    }




}