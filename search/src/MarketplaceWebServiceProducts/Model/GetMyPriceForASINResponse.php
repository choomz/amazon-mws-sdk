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
 * MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetMyPriceForASINResult: MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult</li>
 * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetMyPriceForASINResult: MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult</li>
     * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GetMyPriceForASINResult' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult')),

        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ResponseMetadata'),

        );
        parent::__construct($data);
    }

       
    /**
     * Construct MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonservices.com/schema/Products/2011-10-01');
        $response = $xpath->query('//a:GetMyPriceForASINResponse');
        if ($response->length == 1) {
            return new MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse from provided XML. 
                                  Make sure that GetMyPriceForASINResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetMyPriceForASINResult.
     * 
     * @return array of GetMyPriceForASINResult GetMyPriceForASINResult
     */
    public function getGetMyPriceForASINResult() 
    {
        return $this->_fields['GetMyPriceForASINResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetMyPriceForASINResult.
     * 
     * @param mixed GetMyPriceForASINResult or an array of GetMyPriceForASINResult GetMyPriceForASINResult
     * @return this instance
     */
    public function setGetMyPriceForASINResult($getMyPriceForASINResult) 
    {
        if (!$this->_isNumericArray($getMyPriceForASINResult)) {
            $getMyPriceForASINResult =  array ($getMyPriceForASINResult);    
        }
        $this->_fields['GetMyPriceForASINResult']['FieldValue'] = $getMyPriceForASINResult;
        return $this;
    }


    /**
     * Sets single or multiple values of GetMyPriceForASINResult list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withGetMyPriceForASINResult($getMyPriceForASINResult1, $getMyPriceForASINResult2)</code>
     * 
     * @param GetMyPriceForASINResult  $getMyPriceForASINResultArgs one or more GetMyPriceForASINResult
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse  instance
     */
    public function withGetMyPriceForASINResult($getMyPriceForASINResultArgs)
    {
        foreach (func_get_args() as $getMyPriceForASINResult) {
            $this->_fields['GetMyPriceForASINResult']['FieldValue'][] = $getMyPriceForASINResult;
        }
        return $this;
    }   



    /**
     * Checks if GetMyPriceForASINResult list is non-empty
     * 
     * @return bool true if GetMyPriceForASINResult list is non-empty
     */
    public function isSetGetMyPriceForASINResult()
    {
        return count ($this->_fields['GetMyPriceForASINResult']['FieldValue']) > 0;
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
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse instance
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
        $xml .= "<GetMyPriceForASINResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetMyPriceForASINResponse>";
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