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
 * Get Product Categories For ASIN  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of MarketplaceWebServiceProducts
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
// United States:
//$serviceUrl = "https://mws.amazonservices.com/Products/2011-10-01";
// Europe
//$serviceUrl = "https://mws-eu.amazonservices.com/Products/2011-10-01";
// Japan
//$serviceUrl = "https://mws.amazonservices.jp/Products/2011-10-01";
// China
//$serviceUrl = "https://mws.amazonservices.com.cn/Products/2011-10-01";
// Canada
//$serviceUrl = "https://mws.amazonservices.ca/Products/2011-10-01";

 $config = array (
   'ServiceURL' => $serviceUrl,
   'ProxyHost' => null,
   'ProxyPort' => -1,
   'MaxErrorRetry' => 3,
 );

 $service = new MarketplaceWebServiceProducts_Client(
        AWS_ACCESS_KEY_ID,
        AWS_SECRET_ACCESS_KEY,
        APPLICATION_NAME,
        APPLICATION_VERSION,
        $config);
 
 
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates MarketplaceWebServiceProducts
 * responses without calling MarketplaceWebServiceProducts service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under MarketplaceWebServiceProducts/Mock tree
 *
 ***********************************************************************/
 // $service = new MarketplaceWebServiceProducts_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Get Product Categories For ASIN Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest
 $request = new MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest();
 $request->setSellerId(MERCHANT_ID);
 // object or array of parameters
 invokeGetProductCategoriesForASIN($service, $request);

                                                                
/**
  * Get Product Categories For ASIN Action Sample
  * Gets categories information for a product identified by
  * the MarketplaceId and ASIN.
  *   
  * @param MarketplaceWebServiceProducts_Interface $service instance of MarketplaceWebServiceProducts_Interface
  * @param mixed $request MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN or array of parameters
  */
  function invokeGetProductCategoriesForASIN(MarketplaceWebServiceProducts_Interface $service, $request) 
  {
      try {
              $response = $service->getProductCategoriesForASIN($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetProductCategoriesForASINResponse\n");
                if ($response->isSetGetProductCategoriesForASINResult()) { 
                    echo("            GetProductCategoriesForASINResult\n");
                    $getProductCategoriesForASINResult = $response->getGetProductCategoriesForASINResult();
                    $selfList = $getProductCategoriesForASINResult->getSelf();
                    foreach ($selfList as $self) {
                        echo("                Self\n");
                        if ($self->isSetProductCategoryId()) 
                        {
                            echo("                    ProductCategoryId\n");
                            echo("                        " . $self->getProductCategoryId() . "\n");
                        }
                        if ($self->isSetProductCategoryName()) 
                        {
                            echo("                    ProductCategoryName\n");
                            echo("                        " . $self->getProductCategoryName() . "\n");
                        }
                    }
                } 
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

              echo("            ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");
     } catch (MarketplaceWebServiceProducts_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
         echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
     }
 }
    