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
 * MarketplaceWebServiceProducts_Model_AttributeSetList
 * 
 * Properties:
 * <ul>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_AttributeSetList extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_AttributeSetList
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Any' => array('FieldValue' => null, 'FieldType' => 'DOMNodeList'),
        );
        parent::__construct($data);
        
        $this->_fields['Any']['FieldValue'] = $data->childNodes;
    }
    
    /**
     * Gets the value of the Any.
     * 
     * @return ProductList Any
     */
    public function getAny() 
    {
        return $this->_fields['Any']['FieldValue'];
    }

    /**
     * Sets the value of the Any.
     * 
     * @param ProductList Any
     * @return void
     */
    public function setAny($value) 
    {
        $this->_fields['Any']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the Any and returns this instance
     * 
     * @param ProductList $value Any
     * @return MarketplaceWebServiceProducts_Model_AttributeSetList
     */
    public function withAny($value)
    {
        $this->setAny($value);
        return $this;
    }


    /**
     * Checks if Any  is set
     * 
     * @return bool true if Any property is set
     */
    public function isSetAny()
    {
        return !is_null($this->_fields['Any']['FieldValue']);

    }





}