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
 * MarketplaceWebServiceProducts_Model_CompetitivePriceList
 * 
 * Properties:
 * <ul>
 * 
 * <li>CompetitivePrice: MarketplaceWebServiceProducts_Model_CompetitivePriceType</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_CompetitivePriceList extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_CompetitivePriceList
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CompetitivePrice: MarketplaceWebServiceProducts_Model_CompetitivePriceType</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'CompetitivePrice' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_CompetitivePriceType')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the CompetitivePrice.
     * 
     * @return array of CompetitivePriceType CompetitivePrice
     */
    public function getCompetitivePrice() 
    {
        return $this->_fields['CompetitivePrice']['FieldValue'];
    }

    /**
     * Sets the value of the CompetitivePrice.
     * 
     * @param mixed CompetitivePriceType or an array of CompetitivePriceType CompetitivePrice
     * @return this instance
     */
    public function setCompetitivePrice($competitivePrice) 
    {
        if (!$this->_isNumericArray($competitivePrice)) {
            $competitivePrice =  array ($competitivePrice);    
        }
        $this->_fields['CompetitivePrice']['FieldValue'] = $competitivePrice;
        return $this;
    }


    /**
     * Sets single or multiple values of CompetitivePrice list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withCompetitivePrice($competitivePrice1, $competitivePrice2)</code>
     * 
     * @param CompetitivePriceType  $competitivePriceTypeArgs one or more CompetitivePrice
     * @return MarketplaceWebServiceProducts_Model_CompetitivePriceList  instance
     */
    public function withCompetitivePrice($competitivePriceTypeArgs)
    {
        foreach (func_get_args() as $competitivePrice) {
            $this->_fields['CompetitivePrice']['FieldValue'][] = $competitivePrice;
        }
        return $this;
    }   



    /**
     * Checks if CompetitivePrice list is non-empty
     * 
     * @return bool true if CompetitivePrice list is non-empty
     */
    public function isSetCompetitivePrice()
    {
        return count ($this->_fields['CompetitivePrice']['FieldValue']) > 0;
    }




}