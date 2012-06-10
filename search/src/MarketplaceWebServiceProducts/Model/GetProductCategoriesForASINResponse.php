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
 * MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetProductCategoriesForASINResult: MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResult</li>
 * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetProductCategoriesForASINResult: MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResult</li>
     * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (

        'GetProductCategoriesForASINResult' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResult'),


        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ResponseMetadata'),

        );
        parent::__construct($data);
    }

       
    /**
     * Construct MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonservices.com/schema/Products/2011-10-01');
        $response = $xpath->query('//a:GetProductCategoriesForASINResponse');
        if ($response->length == 1) {
            return new MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse from provided XML. 
                                  Make sure that GetProductCategoriesForASINResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetProductCategoriesForASINResult.
     * 
     * @return GetProductCategoriesForASINResult GetProductCategoriesForASINResult
     */
    public function getGetProductCategoriesForASINResult() 
    {
        return $this->_fields['GetProductCategoriesForASINResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetProductCategoriesForASINResult.
     * 
     * @param GetProductCategoriesForASINResult GetProductCategoriesForASINResult
     * @return void
     */
    public function setGetProductCategoriesForASINResult($value) 
    {
        $this->_fields['GetProductCategoriesForASINResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetProductCategoriesForASINResult  and returns this instance
     * 
     * @param GetProductCategoriesForASINResult $value GetProductCategoriesForASINResult
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse instance
     */
    public function withGetProductCategoriesForASINResult($value)
    {
        $this->setGetProductCategoriesForASINResult($value);
        return $this;
    }


    /**
     * Checks if GetProductCategoriesForASINResult  is set
     * 
     * @return bool true if GetProductCategoriesForASINResult property is set
     */
    public function isSetGetProductCategoriesForASINResult()
    {
        return !is_null($this->_fields['GetProductCategoriesForASINResult']['FieldValue']);

    }

    /**
     * Gets the value of the ResponseMetadata.
     * 
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata() 
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     * 
     * @param ResponseMetadata ResponseMetadata
     * @return void
     */
    public function setResponseMetadata($value) 
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ResponseMetadata  and returns this instance
     * 
     * @param ResponseMetadata $value ResponseMetadata
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }


    /**
     * Checks if ResponseMetadata  is set
     * 
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);

    }



    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<GetProductCategoriesForASINResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetProductCategoriesForASINResponse>";
        return $xml;
    }

    private $_responseHeaderMetadata = null;

    public function getResponseHeaderMetadata() {
        return $this->_responseHeaderMetadata;
    }

    public function setResponseHeaderMetadata($responseHeaderMetadata) {
        return $this->_responseHeaderMetadata = $responseHeaderMetadata;
    }

}