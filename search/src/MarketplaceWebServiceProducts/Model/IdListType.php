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
 * MarketplaceWebServiceProducts_Model_IdListType
 * 
 * Properties:
 * <ul>
 * 
 * <li>Id: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_IdListType extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_IdListType
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Id: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Id' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Id .
     * 
     * @return array of string Id
     */
    public function getId() 
    {
        return $this->_fields['Id']['FieldValue'];
    }

    /**
     * Sets the value of the Id.
     * 
     * @param string or an array of string Id
     * @return this instance
     */
    public function setId($id) 
    {
        if (!$this->_isNumericArray($id)) {
            $id =  array ($id);    
        }
        $this->_fields['Id']['FieldValue'] = $id;
        return $this;
    }
  

    /**
     * Sets single or multiple values of Id list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withId($id1, $id2)</code>
     * 
     * @param string  $stringArgs one or more Id
     * @return MarketplaceWebServiceProducts_Model_IdListType  instance
     */
    public function withId($stringArgs)
    {
        foreach (func_get_args() as $id) {
            $this->_fields['Id']['FieldValue'][] = $id;
        }
        return $this;
    }  
      

    /**
     * Checks if Id list is non-empty
     * 
     * @return bool true if Id list is non-empty
     */
    public function isSetId()
    {
        return count ($this->_fields['Id']['FieldValue']) > 0;
    }




}