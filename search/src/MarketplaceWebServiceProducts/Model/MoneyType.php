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
 * MarketplaceWebServiceProducts_Model_MoneyType
 * 
 * Properties:
 * <ul>
 * 
 * <li>CurrencyCode: string</li>
 * <li>Amount: int</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_MoneyType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_MoneyType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>CurrencyCode: string</li>
     * <li>Amount: int</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'CurrencyCode' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Amount' => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the CurrencyCode property.
     * 
     * @return string CurrencyCode
     */
    public function getCurrencyCode() 
    {
        return $this->_fields['CurrencyCode']['FieldValue'];
    }

    /**
     * Sets the value of the CurrencyCode property.
     * 
     * @param string CurrencyCode
     * @return this instance
     */
    public function setCurrencyCode($value) 
    {
        $this->_fields['CurrencyCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the CurrencyCode and returns this instance
     * 
     * @param string $value CurrencyCode
     * @return MarketplaceWebServiceProducts_Model_MoneyType instance
     */
    public function withCurrencyCode($value)
    {
        $this->setCurrencyCode($value);
        return $this;
    }


    /**
     * Checks if CurrencyCode is set
     * 
     * @return bool true if CurrencyCode  is set
     */
    public function isSetCurrencyCode()
    {
        return !is_null($this->_fields['CurrencyCode']['FieldValue']);
    }

    /**
     * Gets the value of the Amount property.
     * 
     * @return int Amount
     */
    public function getAmount() 
    {
        return $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Sets the value of the Amount property.
     * 
     * @param int Amount
     * @return this instance
     */
    public function setAmount($value) 
    {
        $this->_fields['Amount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Amount and returns this instance
     * 
     * @param int $value Amount
     * @return MarketplaceWebServiceProducts_Model_MoneyType instance
     */
    public function withAmount($value)
    {
        $this->setAmount($value);
        return $this;
    }


    /**
     * Checks if Amount is set
     * 
     * @return bool true if Amount  is set
     */
    public function isSetAmount()
    {
        return !is_null($this->_fields['Amount']['FieldValue']);
    }




}