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
 * MarketplaceWebServiceProducts_Model_Product
 * 
 * Properties:
 * <ul>
 * 
 * <li>Identifiers: MarketplaceWebServiceProducts_Model_IdentifierType</li>
 * <li>AttributeSets: MarketplaceWebServiceProducts_Model_AttributeSetList</li>
 * <li>Relationships: MarketplaceWebServiceProducts_Model_RelationshipList</li>
 * <li>CompetitivePricing: MarketplaceWebServiceProducts_Model_CompetitivePricingType</li>
 * <li>SalesRankings: MarketplaceWebServiceProducts_Model_SalesRankList</li>
 * <li>LowestOfferListings: MarketplaceWebServiceProducts_Model_LowestOfferListingList</li>
 * <li>Offers: MarketplaceWebServiceProducts_Model_OffersList</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_Product extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_Product
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Identifiers: MarketplaceWebServiceProducts_Model_IdentifierType</li>
     * <li>AttributeSets: MarketplaceWebServiceProducts_Model_AttributeSetList</li>
     * <li>Relationships: MarketplaceWebServiceProducts_Model_RelationshipList</li>
     * <li>CompetitivePricing: MarketplaceWebServiceProducts_Model_CompetitivePricingType</li>
     * <li>SalesRankings: MarketplaceWebServiceProducts_Model_SalesRankList</li>
     * <li>LowestOfferListings: MarketplaceWebServiceProducts_Model_LowestOfferListingList</li>
     * <li>Offers: MarketplaceWebServiceProducts_Model_OffersList</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (

        'Identifiers' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_IdentifierType'),


        'AttributeSets' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_AttributeSetList'),


        'Relationships' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_RelationshipList'),


        'CompetitivePricing' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_CompetitivePricingType'),


        'SalesRankings' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_SalesRankList'),


        'LowestOfferListings' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_LowestOfferListingList'),


        'Offers' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_OffersList'),

        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Identifiers.
     * 
     * @return IdentifierType Identifiers
     */
    public function getIdentifiers() 
    {
        return $this->_fields['Identifiers']['FieldValue'];
    }

    /**
     * Sets the value of the Identifiers.
     * 
     * @param IdentifierType Identifiers
     * @return void
     */
    public function setIdentifiers($value) 
    {
        $this->_fields['Identifiers']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Identifiers  and returns this instance
     * 
     * @param IdentifierType $value Identifiers
     * @return MarketplaceWebServiceProducts_Model_Product instance
     */
    public function withIdentifiers($value)
    {
        $this->setIdentifiers($value);
        return $this;
    }


    /**
     * Checks if Identifiers  is set
     * 
     * @return bool true if Identifiers property is set
     */
    public function isSetIdentifiers()
    {
        return !is_null($this->_fields['Identifiers']['FieldValue']);

    }

    /**
     * Gets the value of the AttributeSets.
     * 
     * @return AttributeSetList AttributeSets
     */
    public function getAttributeSets() 
    {
        return $this->_fields['AttributeSets']['FieldValue'];
    }

    /**
     * Sets the value of the AttributeSets.
     * 
     * @param AttributeSetList AttributeSets
     * @return void
     */
    public function setAttributeSets($value) 
    {
        $this->_fields['AttributeSets']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the AttributeSets  and returns this instance
     * 
     * @param AttributeSetList $value AttributeSets
     * @return MarketplaceWebServiceProducts_Model_Product instance
     */
    public function withAttributeSets($value)
    {
        $this->setAttributeSets($value);
        return $this;
    }


    /**
     * Checks if AttributeSets  is set
     * 
     * @return bool true if AttributeSets property is set
     */
    public function isSetAttributeSets()
    {
        return !is_null($this->_fields['AttributeSets']['FieldValue']);

    }

    /**
     * Gets the value of the Relationships.
     * 
     * @return RelationshipList Relationships
     */
    public function getRelationships() 
    {
        return $this->_fields['Relationships']['FieldValue'];
    }

    /**
     * Sets the value of the Relationships.
     * 
     * @param RelationshipList Relationships
     * @return void
     */
    public function setRelationships($value) 
    {
        $this->_fields['Relationships']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Relationships  and returns this instance
     * 
     * @param RelationshipList $value Relationships
     * @return MarketplaceWebServiceProducts_Model_Product instance
     */
    public function withRelationships($value)
    {
        $this->setRelationships($value);
        return $this;
    }


    /**
     * Checks if Relationships  is set
     * 
     * @return bool true if Relationships property is set
     */
    public function isSetRelationships()
    {
        return !is_null($this->_fields['Relationships']['FieldValue']);

    }

    /**
     * Gets the value of the CompetitivePricing.
     * 
     * @return CompetitivePricingType CompetitivePricing
     */
    public function getCompetitivePricing() 
    {
        return $this->_fields['CompetitivePricing']['FieldValue'];
    }

    /**
     * Sets the value of the CompetitivePricing.
     * 
     * @param CompetitivePricingType CompetitivePricing
     * @return void
     */
    public function setCompetitivePricing($value) 
    {
        $this->_fields['CompetitivePricing']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the CompetitivePricing  and returns this instance
     * 
     * @param CompetitivePricingType $value CompetitivePricing
     * @return MarketplaceWebServiceProducts_Model_Product instance
     */
    public function withCompetitivePricing($value)
    {
        $this->setCompetitivePricing($value);
        return $this;
    }


    /**
     * Checks if CompetitivePricing  is set
     * 
     * @return bool true if CompetitivePricing property is set
     */
    public function isSetCompetitivePricing()
    {
        return !is_null($this->_fields['CompetitivePricing']['FieldValue']);

    }

    /**
     * Gets the value of the SalesRankings.
     * 
     * @return SalesRankList SalesRankings
     */
    public function getSalesRankings() 
    {
        return $this->_fields['SalesRankings']['FieldValue'];
    }

    /**
     * Sets the value of the SalesRankings.
     * 
     * @param SalesRankList SalesRankings
     * @return void
     */
    public function setSalesRankings($value) 
    {
        $this->_fields['SalesRankings']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the SalesRankings  and returns this instance
     * 
     * @param SalesRankList $value SalesRankings
     * @return MarketplaceWebServiceProducts_Model_Product instance
     */
    public function withSalesRankings($value)
    {
        $this->setSalesRankings($value);
        return $this;
    }


    /**
     * Checks if SalesRankings  is set
     * 
     * @return bool true if SalesRankings property is set
     */
    public function isSetSalesRankings()
    {
        return !is_null($this->_fields['SalesRankings']['FieldValue']);

    }

    /**
     * Gets the value of the LowestOfferListings.
     * 
     * @return LowestOfferListingList LowestOfferListings
     */
    public function getLowestOfferListings() 
    {
        return $this->_fields['LowestOfferListings']['FieldValue'];
    }

    /**
     * Sets the value of the LowestOfferListings.
     * 
     * @param LowestOfferListingList LowestOfferListings
     * @return void
     */
    public function setLowestOfferListings($value) 
    {
        $this->_fields['LowestOfferListings']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the LowestOfferListings  and returns this instance
     * 
     * @param LowestOfferListingList $value LowestOfferListings
     * @return MarketplaceWebServiceProducts_Model_Product instance
     */
    public function withLowestOfferListings($value)
    {
        $this->setLowestOfferListings($value);
        return $this;
    }


    /**
     * Checks if LowestOfferListings  is set
     * 
     * @return bool true if LowestOfferListings property is set
     */
    public function isSetLowestOfferListings()
    {
        return !is_null($this->_fields['LowestOfferListings']['FieldValue']);

    }

    /**
     * Gets the value of the Offers.
     * 
     * @return OffersList Offers
     */
    public function getOffers() 
    {
        return $this->_fields['Offers']['FieldValue'];
    }

    /**
     * Sets the value of the Offers.
     * 
     * @param OffersList Offers
     * @return void
     */
    public function setOffers($value) 
    {
        $this->_fields['Offers']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Offers  and returns this instance
     * 
     * @param OffersList $value Offers
     * @return MarketplaceWebServiceProducts_Model_Product instance
     */
    public function withOffers($value)
    {
        $this->setOffers($value);
        return $this;
    }


    /**
     * Checks if Offers  is set
     * 
     * @return bool true if Offers property is set
     */
    public function isSetOffers()
    {
        return !is_null($this->_fields['Offers']['FieldValue']);

    }




}