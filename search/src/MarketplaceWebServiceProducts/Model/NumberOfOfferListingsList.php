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
 * MarketplaceWebServiceProducts_Model_NumberOfOfferListingsList
 * 
 * Properties:
 * <ul>
 * 
 * <li>OfferListingCount: MarketplaceWebServiceProducts_Model_OfferListingCountType</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_NumberOfOfferListingsList extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_NumberOfOfferListingsList
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>OfferListingCount: MarketplaceWebServiceProducts_Model_OfferListingCountType</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'OfferListingCount' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_OfferListingCountType')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the OfferListingCount.
     * 
     * @return array of OfferListingCountType OfferListingCount
     */
    public function getOfferListingCount() 
    {
        return $this->_fields['OfferListingCount']['FieldValue'];
    }

    /**
     * Sets the value of the OfferListingCount.
     * 
     * @param mixed OfferListingCountType or an array of OfferListingCountType OfferListingCount
     * @return this instance
     */
    public function setOfferListingCount($offerListingCount) 
    {
        if (!$this->_isNumericArray($offerListingCount)) {
            $offerListingCount =  array ($offerListingCount);    
        }
        $this->_fields['OfferListingCount']['FieldValue'] = $offerListingCount;
        return $this;
    }


    /**
     * Sets single or multiple values of OfferListingCount list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withOfferListingCount($offerListingCount1, $offerListingCount2)</code>
     * 
     * @param OfferListingCountType  $offerListingCountTypeArgs one or more OfferListingCount
     * @return MarketplaceWebServiceProducts_Model_NumberOfOfferListingsList  instance
     */
    public function withOfferListingCount($offerListingCountTypeArgs)
    {
        foreach (func_get_args() as $offerListingCount) {
            $this->_fields['OfferListingCount']['FieldValue'][] = $offerListingCount;
        }
        return $this;
    }   



    /**
     * Checks if OfferListingCount list is non-empty
     * 
     * @return bool true if OfferListingCount list is non-empty
     */
    public function isSetOfferListingCount()
    {
        return count ($this->_fields['OfferListingCount']['FieldValue']) > 0;
    }




}