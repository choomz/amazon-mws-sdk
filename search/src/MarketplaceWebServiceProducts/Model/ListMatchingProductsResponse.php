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
 * MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>ListMatchingProductsResult: MarketplaceWebServiceProducts_Model_ListMatchingProductsResult</li>
 * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>ListMatchingProductsResult: MarketplaceWebServiceProducts_Model_ListMatchingProductsResult</li>
     * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (

        'ListMatchingProductsResult' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ListMatchingProductsResult'),


        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ResponseMetadata'),

        );
        parent::__construct($data);
    }

       
    /**
     * Construct MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonservices.com/schema/Products/2011-10-01');
        $response = $xpath->query('//a:ListMatchingProductsResponse');
        if ($response->length == 1) {
            return new MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse from provided XML. 
                                  Make sure that ListMatchingProductsResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the ListMatchingProductsResult.
     * 
     * @return ListMatchingProductsResult ListMatchingProductsResult
     */
    public function getListMatchingProductsResult() 
    {
        return $this->_fields['ListMatchingProductsResult']['FieldValue'];
    }

    /**
     * Sets the value of the ListMatchingProductsResult.
     * 
     * @param ListMatchingProductsResult ListMatchingProductsResult
     * @return void
     */
    public function setListMatchingProductsResult($value) 
    {
        $this->_fields['ListMatchingProductsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ListMatchingProductsResult  and returns this instance
     * 
     * @param ListMatchingProductsResult $value ListMatchingProductsResult
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse instance
     */
    public function withListMatchingProductsResult($value)
    {
        $this->setListMatchingProductsResult($value);
        return $this;
    }


    /**
     * Checks if ListMatchingProductsResult  is set
     * 
     * @return bool true if ListMatchingProductsResult property is set
     */
    public function isSetListMatchingProductsResult()
    {
        return !is_null($this->_fields['ListMatchingProductsResult']['FieldValue']);

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
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse instance
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
        $xml .= "<ListMatchingProductsResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListMatchingProductsResponse>";
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