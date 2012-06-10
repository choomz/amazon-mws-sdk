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
 * MarketplaceWebServiceProducts_Model_ASINIdentifier
 * 
 * Properties:
 * <ul>
 * 
 * <li>MarketplaceId: string</li>
 * <li>ASIN: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_ASINIdentifier extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_ASINIdentifier
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>MarketplaceId: string</li>
     * <li>ASIN: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ASIN' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
     * @return MarketplaceWebServiceProducts_Model_ASINIdentifier instance
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
     * Gets the value of the ASIN property.
     * 
     * @return string ASIN
     */
    public function getASIN() 
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Sets the value of the ASIN property.
     * 
     * @param string ASIN
     * @return this instance
     */
    public function setASIN($value) 
    {
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ASIN and returns this instance
     * 
     * @param string $value ASIN
     * @return MarketplaceWebServiceProducts_Model_ASINIdentifier instance
     */
    public function withASIN($value)
    {
        $this->setASIN($value);
        return $this;
    }


    /**
     * Checks if ASIN is set
     * 
     * @return bool true if ASIN  is set
     */
    public function isSetASIN()
    {
        return !is_null($this->_fields['ASIN']['FieldValue']);
    }




}