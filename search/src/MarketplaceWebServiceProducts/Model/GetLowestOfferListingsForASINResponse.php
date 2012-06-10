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
 * MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetLowestOfferListingsForASINResult: MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResult</li>
 * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetLowestOfferListingsForASINResult: MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResult</li>
     * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GetLowestOfferListingsForASINResult' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResult')),

        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ResponseMetadata'),

        );
        parent::__construct($data);
    }

       
    /**
     * Construct MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonservices.com/schema/Products/2011-10-01');
        $response = $xpath->query('//a:GetLowestOfferListingsForASINResponse');
        if ($response->length == 1) {
            return new MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse from provided XML. 
                                  Make sure that GetLowestOfferListingsForASINResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetLowestOfferListingsForASINResult.
     * 
     * @return array of GetLowestOfferListingsForASINResult GetLowestOfferListingsForASINResult
     */
    public function getGetLowestOfferListingsForASINResult() 
    {
        return $this->_fields['GetLowestOfferListingsForASINResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetLowestOfferListingsForASINResult.
     * 
     * @param mixed GetLowestOfferListingsForASINResult or an array of GetLowestOfferListingsForASINResult GetLowestOfferListingsForASINResult
     * @return this instance
     */
    public function setGetLowestOfferListingsForASINResult($getLowestOfferListingsForASINResult) 
    {
        if (!$this->_isNumericArray($getLowestOfferListingsForASINResult)) {
            $getLowestOfferListingsForASINResult =  array ($getLowestOfferListingsForASINResult);    
        }
        $this->_fields['GetLowestOfferListingsForASINResult']['FieldValue'] = $getLowestOfferListingsForASINResult;
        return $this;
    }


    /**
     * Sets single or multiple values of GetLowestOfferListingsForASINResult list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withGetLowestOfferListingsForASINResult($getLowestOfferListingsForASINResult1, $getLowestOfferListingsForASINResult2)</code>
     * 
     * @param GetLowestOfferListingsForASINResult  $getLowestOfferListingsForASINResultArgs one or more GetLowestOfferListingsForASINResult
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse  instance
     */
    public function withGetLowestOfferListingsForASINResult($getLowestOfferListingsForASINResultArgs)
    {
        foreach (func_get_args() as $getLowestOfferListingsForASINResult) {
            $this->_fields['GetLowestOfferListingsForASINResult']['FieldValue'][] = $getLowestOfferListingsForASINResult;
        }
        return $this;
    }   



    /**
     * Checks if GetLowestOfferListingsForASINResult list is non-empty
     * 
     * @return bool true if GetLowestOfferListingsForASINResult list is non-empty
     */
    public function isSetGetLowestOfferListingsForASINResult()
    {
        return count ($this->_fields['GetLowestOfferListingsForASINResult']['FieldValue']) > 0;
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
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse instance
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
        $xml .= "<GetLowestOfferListingsForASINResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetLowestOfferListingsForASINResponse>";
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