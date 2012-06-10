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
 * MarketplaceWebServiceProducts_Model_LowestOfferListingList
 * 
 * Properties:
 * <ul>
 * 
 * <li>LowestOfferListing: MarketplaceWebServiceProducts_Model_LowestOfferListingType</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_LowestOfferListingList extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_LowestOfferListingList
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>LowestOfferListing: MarketplaceWebServiceProducts_Model_LowestOfferListingType</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'LowestOfferListing' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_LowestOfferListingType')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the LowestOfferListing.
     * 
     * @return array of LowestOfferListingType LowestOfferListing
     */
    public function getLowestOfferListing() 
    {
        return $this->_fields['LowestOfferListing']['FieldValue'];
    }

    /**
     * Sets the value of the LowestOfferListing.
     * 
     * @param mixed LowestOfferListingType or an array of LowestOfferListingType LowestOfferListing
     * @return this instance
     */
    public function setLowestOfferListing($lowestOfferListing) 
    {
        if (!$this->_isNumericArray($lowestOfferListing)) {
            $lowestOfferListing =  array ($lowestOfferListing);    
        }
        $this->_fields['LowestOfferListing']['FieldValue'] = $lowestOfferListing;
        return $this;
    }


    /**
     * Sets single or multiple values of LowestOfferListing list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withLowestOfferListing($lowestOfferListing1, $lowestOfferListing2)</code>
     * 
     * @param LowestOfferListingType  $lowestOfferListingTypeArgs one or more LowestOfferListing
     * @return MarketplaceWebServiceProducts_Model_LowestOfferListingList  instance
     */
    public function withLowestOfferListing($lowestOfferListingTypeArgs)
    {
        foreach (func_get_args() as $lowestOfferListing) {
            $this->_fields['LowestOfferListing']['FieldValue'][] = $lowestOfferListing;
        }
        return $this;
    }   



    /**
     * Checks if LowestOfferListing list is non-empty
     * 
     * @return bool true if LowestOfferListing list is non-empty
     */
    public function isSetLowestOfferListing()
    {
        return count ($this->_fields['LowestOfferListing']['FieldValue']) > 0;
    }




}