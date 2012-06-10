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
 * MarketplaceWebServiceProducts_Model_SalesRankList
 * 
 * Properties:
 * <ul>
 * 
 * <li>SalesRank: MarketplaceWebServiceProducts_Model_SalesRankType</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_SalesRankList extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_SalesRankList
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>SalesRank: MarketplaceWebServiceProducts_Model_SalesRankType</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'SalesRank' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_SalesRankType')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the SalesRank.
     * 
     * @return array of SalesRankType SalesRank
     */
    public function getSalesRank() 
    {
        return $this->_fields['SalesRank']['FieldValue'];
    }

    /**
     * Sets the value of the SalesRank.
     * 
     * @param mixed SalesRankType or an array of SalesRankType SalesRank
     * @return this instance
     */
    public function setSalesRank($salesRank) 
    {
        if (!$this->_isNumericArray($salesRank)) {
            $salesRank =  array ($salesRank);    
        }
        $this->_fields['SalesRank']['FieldValue'] = $salesRank;
        return $this;
    }


    /**
     * Sets single or multiple values of SalesRank list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSalesRank($salesRank1, $salesRank2)</code>
     * 
     * @param SalesRankType  $salesRankTypeArgs one or more SalesRank
     * @return MarketplaceWebServiceProducts_Model_SalesRankList  instance
     */
    public function withSalesRank($salesRankTypeArgs)
    {
        foreach (func_get_args() as $salesRank) {
            $this->_fields['SalesRank']['FieldValue'][] = $salesRank;
        }
        return $this;
    }   



    /**
     * Checks if SalesRank list is non-empty
     * 
     * @return bool true if SalesRank list is non-empty
     */
    public function isSetSalesRank()
    {
        return count ($this->_fields['SalesRank']['FieldValue']) > 0;
    }




}