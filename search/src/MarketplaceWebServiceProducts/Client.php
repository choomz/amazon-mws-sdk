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
 *  @see MarketplaceWebServiceProducts_Interface
 */
require_once ('MarketplaceWebServiceProducts/Interface.php');

/**
 * This is the Products API section of the Marketplace Web Service.
 * 
 * MarketplaceWebServiceProducts_Client is an implementation of MarketplaceWebServiceProducts
 *
 */
class MarketplaceWebServiceProducts_Client implements MarketplaceWebServiceProducts_Interface
{

    const SERVICE_VERSION = '2011-10-01';
    const MWS_CLIENT_VERSION = '2012-05-15';

    /** @var string */
    private  $_awsAccessKeyId = null;

    /** @var string */
    private  $_awsSecretAccessKey = null;

    /** @var array */
    private  $_config = array ('ServiceURL' => null,
                               'UserAgent' => 'MarketplaceWebServiceProducts PHP5 Library',
                               'SignatureVersion' => 2,
                               'SignatureMethod' => 'HmacSHA256',
                               'ProxyHost' => null,
                               'ProxyPort' => -1,
                               'MaxErrorRetry' => 3
                               );

    /**
     * Construct new Client
     *
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array $config configuration options.
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct($awsAccessKeyId, $awsSecretAccessKey, $applicationName, $applicationVersion, $config = null)
    {
        iconv_set_encoding('output_encoding', 'UTF-8');
        iconv_set_encoding('input_encoding', 'UTF-8');
        iconv_set_encoding('internal_encoding', 'UTF-8');

        $this->_awsAccessKeyId = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (!is_null($config)) $this->_config = array_merge($this->_config, $config);
        $this->setUserAgentHeader($applicationName, $applicationVersion);
    }
    
    private function setUserAgentHeader(
    	$applicationName,
    	$applicationVersion,
    	$attributes = null) {

        if (is_null($attributes)) {
        	$attributes = array ();
        }
        
        $this->_config['UserAgent'] = 
        	$this->constructUserAgentHeader($applicationName, $applicationVersion, $attributes);
    }
    
    private function constructUserAgentHeader($applicationName, $applicationVersion, $attributes = null) {
    	if (is_null($applicationName) || $applicationName === "") {
    		throw new InvalidArgumentException('$applicationName cannot be null');
    	}
    	
    	if (is_null($applicationVersion) || $applicationVersion === "") {
    		throw new InvalidArgumentException('$applicationVersion cannot be null');
    	}
    	
    	$userAgent = 
    		$this->quoteApplicationName($applicationName)
    		. '/'
    		. $this->quoteApplicationVersion($applicationVersion);
    		
        $userAgent .= ' (';
        $userAgent .= 'Language=PHP/' . phpversion();
        $userAgent .= '; ';
        $userAgent .= 'Platform=' . php_uname('s') . '/' . php_uname('m') . '/' . php_uname('r');
        $userAgent .= '; ';
        $userAgent .= 'MWSClientVersion=' . self::MWS_CLIENT_VERSION;
        
        foreach ($attributes as $key => $value) {
        	if (empty($value)) {
        		throw new InvalidArgumentException("Value for $key cannot be null or empty.");
        	}
        	
        	$userAgent .= '; '
        	    . $this->quoteAttributeName($key)
        	    . '='
        	    . $this->quoteAttributeValue($value);
        }
        
        $userAgent .= ')';
        
        return $userAgent;
    }
    
   /**
    * Collapse multiple whitespace characters into a single ' ' character.
    * @param $s
    * @return string
    */
   private function collapseWhitespace($s) {
       return preg_replace('/ {2,}|\s/', ' ', $s);
   }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '/' characters from a string.
     * @param $s
     * @return string
     */
    private function quoteApplicationName($s) {
	    $quotedString = $this->collapseWhitespace($s);
	    $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
	    $quotedString = preg_replace('/\//', '\\/', $quotedString);
	
	    return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '(' characters from a string.
     *
     * @param $s
     * @return string
     */
    private function quoteApplicationVersion($s) {
	    $quotedString = $this->collapseWhitespace($s);
	    $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
	    $quotedString = preg_replace('/\\(/', '\\(', $quotedString);
	
	    return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '=' characters from a string.
     *
     * @param $s
     * @return unknown_type
     */
    private function quoteAttributeName($s) {
	    $quotedString = $this->collapseWhitespace($s);
	    $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
	    $quotedString = preg_replace('/\\=/', '\\=', $quotedString);
	
	    return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape ';', '\',
     * and ')' characters from a string.
     *
     * @param $s
     * @return unknown_type
     */
    private function quoteAttributeValue($s) {
	    $quotedString = $this->collapseWhitespace($s);
	    $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
	    $quotedString = preg_replace('/\\;/', '\\;', $quotedString);
	    $quotedString = preg_replace('/\\)/', '\\)', $quotedString);
	
	    return $quotedString;
	}

    // Public API ------------------------------------------------------------//


            
    /**
     * Get Matching Product 
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}GetMatchingProduct.html
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMatchingProductRequest request
     * or MarketplaceWebServiceProducts_Model_GetMatchingProductRequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetMatchingProduct
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductResponse MarketplaceWebServiceProducts_Model_GetMatchingProductResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMatchingProduct($request)
    {
        if (!$request instanceof MarketplaceWebServiceProducts_Model_GetMatchingProductRequest) {
            require_once ('MarketplaceWebServiceProducts/Model/GetMatchingProductRequest.php');
            $request = new MarketplaceWebServiceProducts_Model_GetMatchingProductRequest($request);
        }
        require_once ('MarketplaceWebServiceProducts/Model/GetMatchingProductResponse.php');
        $httpResponse = $this->_invoke($this->_convertGetMatchingProduct($request));
        $response = MarketplaceWebServiceProducts_Model_GetMatchingProductResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


            
    /**
     * Get Lowest Offer Listings For ASIN 
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}GetLowestOfferListingsForASIN.html
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest request
     * or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestOfferListingsForASIN($request)
    {
        if (!$request instanceof MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest) {
            require_once ('MarketplaceWebServiceProducts/Model/GetLowestOfferListingsForASINRequest.php');
            $request = new MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest($request);
        }
        require_once ('MarketplaceWebServiceProducts/Model/GetLowestOfferListingsForASINResponse.php');
        $httpResponse = $this->_invoke($this->_convertGetLowestOfferListingsForASIN($request));
        $response = MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


            
    /**
     * Get Service Status 
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}GetServiceStatus.html
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetServiceStatusRequest request
     * or MarketplaceWebServiceProducts_Model_GetServiceStatusRequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetServiceStatus
     * @return MarketplaceWebServiceProducts_Model_GetServiceStatusResponse MarketplaceWebServiceProducts_Model_GetServiceStatusResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getServiceStatus($request)
    {
        if (!$request instanceof MarketplaceWebServiceProducts_Model_GetServiceStatusRequest) {
            require_once ('MarketplaceWebServiceProducts/Model/GetServiceStatusRequest.php');
            $request = new MarketplaceWebServiceProducts_Model_GetServiceStatusRequest($request);
        }
        require_once ('MarketplaceWebServiceProducts/Model/GetServiceStatusResponse.php');
        $httpResponse = $this->_invoke($this->_convertGetServiceStatus($request));
        $response = MarketplaceWebServiceProducts_Model_GetServiceStatusResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


            
    /**
     * Get My Price For SKU 
     * Get my price
     * 
     * @see http://docs.amazonwebservices.com/${docPath}GetMyPriceForSKU.html
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest request
     * or MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForSKU
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyPriceForSKU($request)
    {
        if (!$request instanceof MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest) {
            require_once ('MarketplaceWebServiceProducts/Model/GetMyPriceForSKURequest.php');
            $request = new MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest($request);
        }
        require_once ('MarketplaceWebServiceProducts/Model/GetMyPriceForSKUResponse.php');
        $httpResponse = $this->_invoke($this->_convertGetMyPriceForSKU($request));
        $response = MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


            
    /**
     * List Matching Products 
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}ListMatchingProducts.html
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest request
     * or MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest object itself
     * @see MarketplaceWebServiceProducts_Model_ListMatchingProducts
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function listMatchingProducts($request)
    {
        if (!$request instanceof MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest) {
            require_once ('MarketplaceWebServiceProducts/Model/ListMatchingProductsRequest.php');
            $request = new MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest($request);
        }
        require_once ('MarketplaceWebServiceProducts/Model/ListMatchingProductsResponse.php');
        $httpResponse = $this->_invoke($this->_convertListMatchingProducts($request));
        $response = MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


            
    /**
     * Get Competitive Pricing For SKU 
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}GetCompetitivePricingForSKU.html
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest request
     * or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getCompetitivePricingForSKU($request)
    {
        if (!$request instanceof MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest) {
            require_once ('MarketplaceWebServiceProducts/Model/GetCompetitivePricingForSKURequest.php');
            $request = new MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest($request);
        }
        require_once ('MarketplaceWebServiceProducts/Model/GetCompetitivePricingForSKUResponse.php');
        $httpResponse = $this->_invoke($this->_convertGetCompetitivePricingForSKU($request));
        $response = MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


            
    /**
     * Get Competitive Pricing For ASIN 
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}GetCompetitivePricingForASIN.html
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest request
     * or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getCompetitivePricingForASIN($request)
    {
        if (!$request instanceof MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest) {
            require_once ('MarketplaceWebServiceProducts/Model/GetCompetitivePricingForASINRequest.php');
            $request = new MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest($request);
        }
        require_once ('MarketplaceWebServiceProducts/Model/GetCompetitivePricingForASINResponse.php');
        $httpResponse = $this->_invoke($this->_convertGetCompetitivePricingForASIN($request));
        $response = MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


            
    /**
     * Get Product Categories For SKU 
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}GetProductCategoriesForSKU.html
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest request
     * or MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getProductCategoriesForSKU($request)
    {
        if (!$request instanceof MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest) {
            require_once ('MarketplaceWebServiceProducts/Model/GetProductCategoriesForSKURequest.php');
            $request = new MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest($request);
        }
        require_once ('MarketplaceWebServiceProducts/Model/GetProductCategoriesForSKUResponse.php');
        $httpResponse = $this->_invoke($this->_convertGetProductCategoriesForSKU($request));
        $response = MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


            
    /**
     * Get My Price For ASIN 
     * Get my price
     * 
     * @see http://docs.amazonwebservices.com/${docPath}GetMyPriceForASIN.html
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest request
     * or MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForASIN
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyPriceForASIN($request)
    {
        if (!$request instanceof MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest) {
            require_once ('MarketplaceWebServiceProducts/Model/GetMyPriceForASINRequest.php');
            $request = new MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest($request);
        }
        require_once ('MarketplaceWebServiceProducts/Model/GetMyPriceForASINResponse.php');
        $httpResponse = $this->_invoke($this->_convertGetMyPriceForASIN($request));
        $response = MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


            
    /**
     * Get Lowest Offer Listings For SKU 
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}GetLowestOfferListingsForSKU.html
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest request
     * or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestOfferListingsForSKU($request)
    {
        if (!$request instanceof MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest) {
            require_once ('MarketplaceWebServiceProducts/Model/GetLowestOfferListingsForSKURequest.php');
            $request = new MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest($request);
        }
        require_once ('MarketplaceWebServiceProducts/Model/GetLowestOfferListingsForSKUResponse.php');
        $httpResponse = $this->_invoke($this->_convertGetLowestOfferListingsForSKU($request));
        $response = MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


            
    /**
     * Get Product Categories For ASIN 
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     * 
     * @see http://docs.amazonwebservices.com/${docPath}GetProductCategoriesForASIN.html
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest request
     * or MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getProductCategoriesForASIN($request)
    {
        if (!$request instanceof MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest) {
            require_once ('MarketplaceWebServiceProducts/Model/GetProductCategoriesForASINRequest.php');
            $request = new MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest($request);
        }
        require_once ('MarketplaceWebServiceProducts/Model/GetProductCategoriesForASINResponse.php');
        $httpResponse = $this->_invoke($this->_convertGetProductCategoriesForASIN($request));
        $response = MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

        // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     */
    private function _invoke(array $parameters)
    {
        $actionName = $parameters["Action"];
        $response = array();
        $responseBody = null;
        $statusCode = 200;

        /* Submit the request and read response body */
        try {
        	if (empty($this->_config['ServiceURL'])) {
        		throw new MarketplaceWebServiceProducts_Exception(
        			array ('ErrorCode' => 'InvalidServiceURL',
        				   'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."));
        	}

            /* Add required request parameters */
            $parameters = $this->_addRequiredParameters($parameters);

            $shouldRetry = true;
            $retries = 0;
            do {
                try {
                        $response = $this->_httpPost($parameters);
                        if ($response['Status'] === 200) {
                            $shouldRetry = false;
                        } else {
                            if ($response['Status'] === 500 || $response['Status'] === 503) {
                            	
                            	require_once('MarketplaceWebServiceProducts/Model/ErrorResponse.php');
                            	$errorResponse = MarketplaceWebServiceProducts_Model_ErrorResponse::fromXML($response['ResponseBody']);
                            	
                            	$errors = $errorResponse->getError();
                            	$shouldRetry = ($errors[0]->getCode() === 'RequestThrottled') ? false : true;
                            	
                            	if ($shouldRetry) {
                            		$this->_pauseOnRetry(++$retries, $response['Status']);
                            	} else {
                            		throw $this->_reportAnyErrors($response['ResponseBody'], $response['Status'], $response['ResponseHeaderMetadata']);
                            	}
                            } else {
                                throw $this->_reportAnyErrors($response['ResponseBody'], $response['Status'], $response['ResponseHeaderMetadata']);
                            }
                       }
                /* Rethrow on deserializer error */
                } catch (Exception $e) {
                    require_once ('MarketplaceWebServiceProducts/Exception.php');
                    if ($e instanceof MarketplaceWebServiceProducts_Exception) {
                        throw $e;
                    } else {
                        require_once ('MarketplaceWebServiceProducts/Exception.php');
                        throw new MarketplaceWebServiceProducts_Exception(array('Exception' => $e, 'Message' => $e->getMessage()));
                    }
                }

            } while ($shouldRetry);

        } catch (MarketplaceWebServiceProducts_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new MarketplaceWebServiceProducts_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }

        return array ('ResponseBody' => $response['ResponseBody'], 'ResponseHeaderMetadata' => $response['ResponseHeaderMetadata']);
    }

    /**
     * Look for additional error strings in the response and return formatted exception
     */
    private function _reportAnyErrors($responseBody, $status, $responseHeaderMetadata, Exception $e =  null)
    {
        $ex = null;
        if (!is_null($responseBody) && strpos($responseBody, '<') === 0) {
            if (preg_match('@<RequestId>(.*)</RequestId>.*<Error>.*<Code>(.*)</Code>.*<Message>(.*)</Message>.*</Error>.*(<Error>)?@mi',
                $responseBody, $errorMatcherOne)) {

                $requestId = $errorMatcherOne[1];
                $code = $errorMatcherOne[2];
                $message = $errorMatcherOne[3];

                require_once ('MarketplaceWebServiceProducts/Exception.php');
                $ex = new MarketplaceWebServiceProducts_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                           'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody,
                                                           'ResponseHeaderMetadata' => $responseHeaderMetadata));

            } elseif (preg_match('@<Error>.*<Code>(.*)</Code>.*<Message>(.*)</Message>.*</Error>.*(<Error>)?.*<RequestID>(.*)</RequestID>@mi',
                $responseBody, $errorMatcherTwo)) {

                $code = $errorMatcherTwo[1];
                $message = $errorMatcherTwo[2];
                $requestId = $errorMatcherTwo[4];
                require_once ('MarketplaceWebServiceProducts/Exception.php');
                $ex = new MarketplaceWebServiceProducts_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody,
                                                              'ResponseHeaderMetadata' => $responseHeaderMetadata));
            } elseif (preg_match('@<Error>.*<Type>(.*)</Type>.*<Code>(.*)</Code>.*<Message>(.*)</Message>.*</Error>.*(<Error>)?.*<RequestId>(.*)</RequestId>@mi',
                $responseBody, $errorMatcherThree)) {

                $type = $errorMatcherThree[1];
                $code = $errorMatcherThree[2];
                $message = $errorMatcherThree[3];
                $requestId = $errorMatcherThree[5];
                require_once ('MarketplaceWebServiceProducts/Exception.php');
                $ex = new MarketplaceWebServiceProducts_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => $type, 'RequestId' => $requestId, 'XML' => $responseBody,
                                                              'ResponseHeaderMetadata' => $responseHeaderMetadata));

            } else {
                require_once ('MarketplaceWebServiceProducts/Exception.php');
                $ex = new MarketplaceWebServiceProducts_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status, 'ResponseHeaderMetadata' => $responseHeaderMetadata));
            }
        } else {
            require_once ('MarketplaceWebServiceProducts/Exception.php');
            $ex = new MarketplaceWebServiceProducts_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status, 'ResponseHeaderMetadata' => $responseHeaderMetadata));
        }
        return $ex;
    }



    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     *
     */
    private function _httpPost(array $parameters)
    {

        $query = $this->_getParametersAsString($parameters);
        $url = parse_url ($this->_config['ServiceURL']);
	    $uri = array_key_exists('path', $url) ? $url['path'] : null;
        if (!isset ($uri)) {
                $uri = "/";
        }
        $post  = "POST " . $uri . " HTTP/1.0\r\n";
        $post .= "Host: " . $url['host'] . "\r\n";
        $post .= "Content-Type: application/x-www-form-urlencoded; charset=utf-8\r\n";
        $post .= "Content-Length: " . strlen($query) . "\r\n";
        $post .= "User-Agent: " . $this->_config['UserAgent'] . "\r\n";
        $post .= "\r\n";
        $post .= $query;
        $port = array_key_exists('port',$url) ? $url['port'] : null;
        $scheme = '';

        switch ($url['scheme']) {
            case 'https':
                $scheme = 'ssl://';
                $port = $port === null ? 443 : $port;
                break;
            default:
                $scheme = '';
                $port = $port === null ? 80 : $port;
        }
        
        $response = '';
        if ($socket = @fsockopen($scheme . $url['host'], $port, $errno, $errstr, 10)) {

            fwrite($socket, $post);

            while (!feof($socket)) {
                $response .= fgets($socket, 1160);
            }
            fclose($socket);
            list($other, $responseBody) = explode("\r\n\r\n", $response, 2);
            $other = preg_split("/\r\n|\n|\r/", $other);
            
            $headers = array();
            foreach ($other as $value) {
              if(!strpos($value, ':')) continue;
              list ($k, $v) = explode (': ', $value);
              if (array_key_exists($k, $headers)) {
                $headers[$k] = $headers[$k] . "," . $v;
              } else {
                $headers[$k] = $v;
              }
              
            }
            require_once('MarketplaceWebServiceProducts/Model/ResponseHeaderMetadata.php');
            $responseHeaderMetadata = new MarketplaceWebServiceProducts_Model_ResponseHeaderMetadata(
              $headers['x-mws-request-id'],
              $headers['x-mws-response-context'],
              $headers['x-mws-timestamp']);

            list($protocol, $code, $text) = explode(' ', trim(array_shift($other)), 3);
        } else {
            throw new Exception ("Unable to establish connection to host " . $url['host'] . " $errstr");
        }

        return array ('Status' => (int)$code, 'ResponseBody' => $responseBody, 'ResponseHeaderMetadata' => $responseHeaderMetadata);
    }

    /**
     * Exponential sleep on failed request
     * @param retries current retry
     * @throws MarketplaceWebServiceProducts_Exception if maximum number of retries has been reached
     */
    private function _pauseOnRetry($retries, $status)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000) ;
            usleep($delay);
        } else {
            require_once ('MarketplaceWebServiceProducts/Exception.php');
            throw new MarketplaceWebServiceProducts_Exception (array ('Message' => "Maximum number of retry attempts reached :  $retries", 'StatusCode' => $status));
        }
    }

    /**
     * Add authentication related and version parameters
     */
    private function _addRequiredParameters(array $parameters)
    {
        $parameters['AWSAccessKeyId'] = $this->_awsAccessKeyId;
        $parameters['Timestamp'] = $this->_getFormattedTimestamp();
        $parameters['Version'] = self::SERVICE_VERSION;
        $parameters['SignatureVersion'] = $this->_config['SignatureVersion'];
        if ($parameters['SignatureVersion'] > 1) {
            $parameters['SignatureMethod'] = $this->_config['SignatureMethod'];
        }
        $parameters['Signature'] = $this->_signParameters($parameters, $this->_awsSecretAccessKey);

        return $parameters;
    }

    /**
     * Convert paremeters to Url encoded query string
     */
    private function _getParametersAsString(array $parameters)
    {
        $queryParameters = array();
        foreach ($parameters as $key => $value) {
            $queryParameters[] = $key . '=' . $this->_urlencode($value);
        }
        return implode('&', $queryParameters);
    }


    /**
     * Computes RFC 2104-compliant HMAC signature for request parameters
     * Implements AWS Signature, as per following spec:
     *
     * If Signature Version is 0, it signs concatenated Action and Timestamp
     *
     * If Signature Version is 1, it performs the following:
     *
     * Sorts all  parameters (including SignatureVersion and excluding Signature,
     * the value of which is being created), ignoring case.
     *
     * Iterate over the sorted list and append the parameter name (in original case)
     * and then its value. It will not URL-encode the parameter values before
     * constructing this string. There are no separators.
     *
     * If Signature Version is 2, string to sign is based on following:
     *
     *    1. The HTTP Request Method followed by an ASCII newline (%0A)
     *    2. The HTTP Host header in the form of lowercase host, followed by an ASCII newline.
     *    3. The URL encoded HTTP absolute path component of the URI
     *       (up to but not including the query string parameters);
     *       if this is empty use a forward '/'. This parameter is followed by an ASCII newline.
     *    4. The concatenation of all query string components (names and values)
     *       as UTF-8 characters which are URL encoded as per RFC 3986
     *       (hex characters MUST be uppercase), sorted using lexicographic byte ordering.
     *       Parameter names are separated from their values by the '=' character
     *       (ASCII character 61), even if the value is empty.
     *       Pairs of parameter and values are separated by the '&' character (ASCII code 38).
     *
     */
    private function _signParameters(array $parameters, $key) {
        $signatureVersion = $parameters['SignatureVersion'];
        $algorithm = "HmacSHA1";
        $stringToSign = null;
        if (2 === $signatureVersion) {
            $algorithm = $this->_config['SignatureMethod'];
            $parameters['SignatureMethod'] = $algorithm;
            $stringToSign = $this->_calculateStringToSignV2($parameters);
        } else {
            throw new Exception("Invalid Signature Version specified");
        }
        return $this->_sign($stringToSign, $key, $algorithm);
    }

    /**
     * Calculate String to Sign for SignatureVersion 2
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV2(array $parameters) {
        $data = 'POST';
        $data .= "\n";
        $endpoint = parse_url ($this->_config['ServiceURL']);
        $data .= $endpoint['host'];
        $data .= "\n";
        $uri = array_key_exists('path', $endpoint) ? $endpoint['path'] : null;
        if (!isset ($uri)) {
        	$uri = "/";
        }
		$uriencoded = implode("/", array_map(array($this, "_urlencode"), explode("/", $uri)));
        $data .= $uriencoded;
        $data .= "\n";
        uksort($parameters, 'strcmp');
        $data .= $this->_getParametersAsString($parameters);
        return $data;
    }

    private function _urlencode($value) {
		return str_replace('%7E', '~', rawurlencode($value));
    }


    /**
     * Computes RFC 2104-compliant HMAC signature.
     */
    private function _sign($data, $key, $algorithm)
    {
        if ($algorithm === 'HmacSHA1') {
            $hash = 'sha1';
        } else if ($algorithm === 'HmacSHA256') {
            $hash = 'sha256';
        } else {
            throw new Exception ("Non-supported signing method specified");
        }
        return base64_encode(
            hash_hmac($hash, $data, $key, true)
        );
    }


    /**
     * Formats date as ISO 8601 timestamp
     */
    private function _getFormattedTimestamp()
    {
        return gmdate("Y-m-d\TH:i:s.\\0\\0\\0\\Z", time());
    }
    
    /**
     * Formats date as ISO 8601 timestamp
     */
    private function getFormattedTimestamp($dateTime)
    {
	    return $dateTime->format(DATE_ISO8601);
    }



                                                
    /**
     * Convert GetMatchingProductRequest to name value pairs
     */
    private function _convertGetMatchingProduct($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetMatchingProduct';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetASINList()) {
            $ASINListgetMatchingProductRequest = $request->getASINList();
            foreach  ($ASINListgetMatchingProductRequest->getASIN() as $ASINASINListIndex => $ASINASINList) {
                $parameters['ASINList' . '.' . 'ASIN' . '.'  . ($ASINASINListIndex + 1)] =  $ASINASINList;
            }
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert GetLowestOfferListingsForASINRequest to name value pairs
     */
    private function _convertGetLowestOfferListingsForASIN($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetLowestOfferListingsForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetASINList()) {
            $ASINListgetLowestOfferListingsForASINRequest = $request->getASINList();
            foreach  ($ASINListgetLowestOfferListingsForASINRequest->getASIN() as $ASINASINListIndex => $ASINASINList) {
                $parameters['ASINList' . '.' . 'ASIN' . '.'  . ($ASINASINListIndex + 1)] =  $ASINASINList;
            }
        }
        if ($request->isSetItemCondition()) {
            $parameters['ItemCondition'] =  $request->getItemCondition();
        }
        if ($request->isSetExcludeMe()) {
            $parameters['ExcludeMe'] =  $request->getExcludeMe() ? "true" : "false";
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert GetServiceStatusRequest to name value pairs
     */
    private function _convertGetServiceStatus($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetServiceStatus';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert GetMyPriceForSKURequest to name value pairs
     */
    private function _convertGetMyPriceForSKU($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetMyPriceForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKUList()) {
            $sellerSKUListgetMyPriceForSKURequest = $request->getSellerSKUList();
            foreach  ($sellerSKUListgetMyPriceForSKURequest->getSellerSKU() as $sellerSKUsellerSKUListIndex => $sellerSKUsellerSKUList) {
                $parameters['SellerSKUList' . '.' . 'SellerSKU' . '.'  . ($sellerSKUsellerSKUListIndex + 1)] =  $sellerSKUsellerSKUList;
            }
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert ListMatchingProductsRequest to name value pairs
     */
    private function _convertListMatchingProducts($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ListMatchingProducts';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetQuery()) {
            $parameters['Query'] =  $request->getQuery();
        }
        if ($request->isSetQueryContextId()) {
            $parameters['QueryContextId'] =  $request->getQueryContextId();
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert GetCompetitivePricingForSKURequest to name value pairs
     */
    private function _convertGetCompetitivePricingForSKU($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetCompetitivePricingForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKUList()) {
            $sellerSKUListgetCompetitivePricingForSKURequest = $request->getSellerSKUList();
            foreach  ($sellerSKUListgetCompetitivePricingForSKURequest->getSellerSKU() as $sellerSKUsellerSKUListIndex => $sellerSKUsellerSKUList) {
                $parameters['SellerSKUList' . '.' . 'SellerSKU' . '.'  . ($sellerSKUsellerSKUListIndex + 1)] =  $sellerSKUsellerSKUList;
            }
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert GetCompetitivePricingForASINRequest to name value pairs
     */
    private function _convertGetCompetitivePricingForASIN($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetCompetitivePricingForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetASINList()) {
            $ASINListgetCompetitivePricingForASINRequest = $request->getASINList();
            foreach  ($ASINListgetCompetitivePricingForASINRequest->getASIN() as $ASINASINListIndex => $ASINASINList) {
                $parameters['ASINList' . '.' . 'ASIN' . '.'  . ($ASINASINListIndex + 1)] =  $ASINASINList;
            }
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert GetProductCategoriesForSKURequest to name value pairs
     */
    private function _convertGetProductCategoriesForSKU($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetProductCategoriesForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKU()) {
            $parameters['SellerSKU'] =  $request->getSellerSKU();
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert GetMyPriceForASINRequest to name value pairs
     */
    private function _convertGetMyPriceForASIN($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetMyPriceForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetASINList()) {
            $ASINListgetMyPriceForASINRequest = $request->getASINList();
            foreach  ($ASINListgetMyPriceForASINRequest->getASIN() as $ASINASINListIndex => $ASINASINList) {
                $parameters['ASINList' . '.' . 'ASIN' . '.'  . ($ASINASINListIndex + 1)] =  $ASINASINList;
            }
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert GetLowestOfferListingsForSKURequest to name value pairs
     */
    private function _convertGetLowestOfferListingsForSKU($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetLowestOfferListingsForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKUList()) {
            $sellerSKUListgetLowestOfferListingsForSKURequest = $request->getSellerSKUList();
            foreach  ($sellerSKUListgetLowestOfferListingsForSKURequest->getSellerSKU() as $sellerSKUsellerSKUListIndex => $sellerSKUsellerSKUList) {
                $parameters['SellerSKUList' . '.' . 'SellerSKU' . '.'  . ($sellerSKUsellerSKUListIndex + 1)] =  $sellerSKUsellerSKUList;
            }
        }
        if ($request->isSetItemCondition()) {
            $parameters['ItemCondition'] =  $request->getItemCondition();
        }
        if ($request->isSetExcludeMe()) {
            $parameters['ExcludeMe'] =  $request->getExcludeMe() ? "true" : "false";
        }

        return $parameters;
    }
        
                                                
    /**
     * Convert GetProductCategoriesForASINRequest to name value pairs
     */
    private function _convertGetProductCategoriesForASIN($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetProductCategoriesForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetASIN()) {
            $parameters['ASIN'] =  $request->getASIN();
        }

        return $parameters;
    }
        
                                                                                                                                                                                                                                                        
}
