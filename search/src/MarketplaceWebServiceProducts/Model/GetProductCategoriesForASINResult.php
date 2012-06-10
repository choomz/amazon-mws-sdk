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
 * MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Self: MarketplaceWebServiceProducts_Model_Categories</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResult extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResult
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Self: MarketplaceWebServiceProducts_Model_Categories</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Self' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_Categories')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Self.
     * 
     * @return array of Categories Self
     */
    public function getSelf() 
    {
        return $this->_fields['Self']['FieldValue'];
    }

    /**
     * Sets the value of the Self.
     * 
     * @param mixed Categories or an array of Categories Self
     * @return this instance
     */
    public function setSelf($self) 
    {
        if (!$this->_isNumericArray($self)) {
            $self =  array ($self);    
        }
        $this->_fields['Self']['FieldValue'] = $self;
        return $this;
    }


    /**
     * Sets single or multiple values of Self list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withSelf($self1, $self2)</code>
     * 
     * @param Categories  $categoriesArgs one or more Self
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResult  instance
     */
    public function withSelf($categoriesArgs)
    {
        foreach (func_get_args() as $self) {
            $this->_fields['Self']['FieldValue'][] = $self;
        }
        return $this;
    }   



    /**
     * Checks if Self list is non-empty
     * 
     * @return bool true if Self list is non-empty
     */
    public function isSetSelf()
    {
        return count ($this->_fields['Self']['FieldValue']) > 0;
    }




}