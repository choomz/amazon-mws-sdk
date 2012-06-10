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
 * MarketplaceWebServiceProducts_Model_OffersList
 * 
 * Properties:
 * <ul>
 * 
 * <li>Offer: MarketplaceWebServiceProducts_Model_OfferType</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_OffersList extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_OffersList
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Offer: MarketplaceWebServiceProducts_Model_OfferType</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Offer' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_OfferType')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Offer.
     * 
     * @return array of OfferType Offer
     */
    public function getOffer() 
    {
        return $this->_fields['Offer']['FieldValue'];
    }

    /**
     * Sets the value of the Offer.
     * 
     * @param mixed OfferType or an array of OfferType Offer
     * @return this instance
     */
    public function setOffer($offer) 
    {
        if (!$this->_isNumericArray($offer)) {
            $offer =  array ($offer);    
        }
        $this->_fields['Offer']['FieldValue'] = $offer;
        return $this;
    }


    /**
     * Sets single or multiple values of Offer list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withOffer($offer1, $offer2)</code>
     * 
     * @param OfferType  $offerTypeArgs one or more Offer
     * @return MarketplaceWebServiceProducts_Model_OffersList  instance
     */
    public function withOffer($offerTypeArgs)
    {
        foreach (func_get_args() as $offer) {
            $this->_fields['Offer']['FieldValue'][] = $offer;
        }
        return $this;
    }   



    /**
     * Checks if Offer list is non-empty
     * 
     * @return bool true if Offer list is non-empty
     */
    public function isSetOffer()
    {
        return count ($this->_fields['Offer']['FieldValue']) > 0;
    }




}