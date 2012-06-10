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
 * MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetCompetitivePricingForASINResult: MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResult</li>
 * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetCompetitivePricingForASINResult: MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResult</li>
     * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GetCompetitivePricingForASINResult' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResult')),

        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ResponseMetadata'),

        );
        parent::__construct($data);
    }

       
    /**
     * Construct MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonservices.com/schema/Products/2011-10-01');
        $response = $xpath->query('//a:GetCompetitivePricingForASINResponse');
        if ($response->length == 1) {
            return new MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse from provided XML. 
                                  Make sure that GetCompetitivePricingForASINResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetCompetitivePricingForASINResult.
     * 
     * @return array of GetCompetitivePricingForASINResult GetCompetitivePricingForASINResult
     */
    public function getGetCompetitivePricingForASINResult() 
    {
        return $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetCompetitivePricingForASINResult.
     * 
     * @param mixed GetCompetitivePricingForASINResult or an array of GetCompetitivePricingForASINResult GetCompetitivePricingForASINResult
     * @return this instance
     */
    public function setGetCompetitivePricingForASINResult($getCompetitivePricingForASINResult) 
    {
        if (!$this->_isNumericArray($getCompetitivePricingForASINResult)) {
            $getCompetitivePricingForASINResult =  array ($getCompetitivePricingForASINResult);    
        }
        $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'] = $getCompetitivePricingForASINResult;
        return $this;
    }


    /**
     * Sets single or multiple values of GetCompetitivePricingForASINResult list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withGetCompetitivePricingForASINResult($getCompetitivePricingForASINResult1, $getCompetitivePricingForASINResult2)</code>
     * 
     * @param GetCompetitivePricingForASINResult  $getCompetitivePricingForASINResultArgs one or more GetCompetitivePricingForASINResult
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse  instance
     */
    public function withGetCompetitivePricingForASINResult($getCompetitivePricingForASINResultArgs)
    {
        foreach (func_get_args() as $getCompetitivePricingForASINResult) {
            $this->_fields['GetCompetitivePricingForASINResult']['FieldValue'][] = $getCompetitivePricingForASINResult;
        }
        return $this;
    }   



    /**
     * Checks if GetCompetitivePricingForASINResult list is non-empty
     * 
     * @return bool true if GetCompetitivePricingForASINResult list is non-empty
     */
    public function isSetGetCompetitivePricingForASINResult()
    {
        return count ($this->_fields['GetCompetitivePricingForASINResult']['FieldValue']) > 0;
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
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse instance
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
        $xml .= "<GetCompetitivePricingForASINResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetCompetitivePricingForASINResponse>";
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