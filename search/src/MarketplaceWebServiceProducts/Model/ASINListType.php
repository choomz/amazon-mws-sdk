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
 * MarketplaceWebServiceProducts_Model_ASINListType
 * 
 * Properties:
 * <ul>
 * 
 * <li>ASIN: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_ASINListType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_ASINListType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ASIN: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'ASIN' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ASIN .
     * 
     * @return array of string ASIN
     */
    public function getASIN() 
    {
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Sets the value of the ASIN.
     * 
     * @param string or an array of string ASIN
     * @return this instance
     */
    public function setASIN($ASIN) 
    {
        if (!$this->_isNumericArray($ASIN)) {
            $ASIN =  array ($ASIN);    
        }
        $this->_fields['ASIN']['FieldValue'] = $ASIN;
        return $this;
    }
  

    /**
     * Sets single or multiple values of ASIN list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withASIN($ASIN1, $ASIN2)</code>
     * 
     * @param string  $stringArgs one or more ASIN
     * @return MarketplaceWebServiceProducts_Model_ASINListType  instance
     */
    public function withASIN($stringArgs)
    {
        foreach (func_get_args() as $ASIN) {
            $this->_fields['ASIN']['FieldValue'][] = $ASIN;
        }
        return $this;
    }  
      

    /**
     * Checks if ASIN list is non-empty
     * 
     * @return bool true if ASIN list is non-empty
     */
    public function isSetASIN()
    {
        return count ($this->_fields['ASIN']['FieldValue']) > 0;
    }




}