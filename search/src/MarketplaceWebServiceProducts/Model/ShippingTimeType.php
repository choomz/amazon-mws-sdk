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
 * MarketplaceWebServiceProducts_Model_ShippingTimeType
 * 
 * Properties:
 * <ul>
 * 
 * <li>Max: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_ShippingTimeType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_ShippingTimeType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Max: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Max' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Max property.
     * 
     * @return string Max
     */
    public function getMax() 
    {
        return $this->_fields['Max']['FieldValue'];
    }

    /**
     * Sets the value of the Max property.
     * 
     * @param string Max
     * @return this instance
     */
    public function setMax($value) 
    {
        $this->_fields['Max']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Max and returns this instance
     * 
     * @param string $value Max
     * @return MarketplaceWebServiceProducts_Model_ShippingTimeType instance
     */
    public function withMax($value)
    {
        $this->setMax($value);
        return $this;
    }


    /**
     * Checks if Max is set
     * 
     * @return bool true if Max  is set
     */
    public function isSetMax()
    {
        return !is_null($this->_fields['Max']['FieldValue']);
    }




}