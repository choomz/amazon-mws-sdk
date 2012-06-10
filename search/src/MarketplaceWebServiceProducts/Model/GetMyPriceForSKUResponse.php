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
 * MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse
 * 
 * Properties:
 * <ul>
 * 
 * <li>GetMyPriceForSKUResult: MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult</li>
 * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>GetMyPriceForSKUResult: MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult</li>
     * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'GetMyPriceForSKUResult' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult')),

        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ResponseMetadata'),

        );
        parent::__construct($data);
    }

       
    /**
     * Construct MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse from XML string
     * 
     * @param string $xml XML string to construct from
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse 
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonservices.com/schema/Products/2011-10-01');
        $response = $xpath->query('//a:GetMyPriceForSKUResponse');
        if ($response->length == 1) {
            return new MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse from provided XML. 
                                  Make sure that GetMyPriceForSKUResponse is a root element");
        }
          
    }
    
    /**
     * Gets the value of the GetMyPriceForSKUResult.
     * 
     * @return array of GetMyPriceForSKUResult GetMyPriceForSKUResult
     */
    public function getGetMyPriceForSKUResult() 
    {
        return $this->_fields['GetMyPriceForSKUResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetMyPriceForSKUResult.
     * 
     * @param mixed GetMyPriceForSKUResult or an array of GetMyPriceForSKUResult GetMyPriceForSKUResult
     * @return this instance
     */
    public function setGetMyPriceForSKUResult($getMyPriceForSKUResult) 
    {
        if (!$this->_isNumericArray($getMyPriceForSKUResult)) {
            $getMyPriceForSKUResult =  array ($getMyPriceForSKUResult);    
        }
        $this->_fields['GetMyPriceForSKUResult']['FieldValue'] = $getMyPriceForSKUResult;
        return $this;
    }


    /**
     * Sets single or multiple values of GetMyPriceForSKUResult list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withGetMyPriceForSKUResult($getMyPriceForSKUResult1, $getMyPriceForSKUResult2)</code>
     * 
     * @param GetMyPriceForSKUResult  $getMyPriceForSKUResultArgs one or more GetMyPriceForSKUResult
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse  instance
     */
    public function withGetMyPriceForSKUResult($getMyPriceForSKUResultArgs)
    {
        foreach (func_get_args() as $getMyPriceForSKUResult) {
            $this->_fields['GetMyPriceForSKUResult']['FieldValue'][] = $getMyPriceForSKUResult;
        }
        return $this;
    }   



    /**
     * Checks if GetMyPriceForSKUResult list is non-empty
     * 
     * @return bool true if GetMyPriceForSKUResult list is non-empty
     */
    public function isSetGetMyPriceForSKUResult()
    {
        return count ($this->_fields['GetMyPriceForSKUResult']['FieldValue']) > 0;
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
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse instance
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
        $xml .= "<GetMyPriceForSKUResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetMyPriceForSKUResponse>";
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