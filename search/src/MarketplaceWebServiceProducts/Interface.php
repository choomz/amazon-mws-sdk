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
 * This is the Products API section of the Marketplace Web Service.
 * 
 */

interface  MarketplaceWebServiceProducts_Interface 
{
    

            
    /**
     * Get Matching Product 
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetMatchingProduct.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMatchingProductRequest request
     * or MarketplaceWebServiceProducts_Model_GetMatchingProductRequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetMatchingProductRequest
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductResponse MarketplaceWebServiceProducts_Model_GetMatchingProductResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMatchingProduct($request);


            
    /**
     * Get Lowest Offer Listings For ASIN 
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetLowestOfferListingsForASIN.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest request
     * or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINRequest
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestOfferListingsForASIN($request);


            
    /**
     * Get Service Status 
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetServiceStatus.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetServiceStatusRequest request
     * or MarketplaceWebServiceProducts_Model_GetServiceStatusRequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetServiceStatusRequest
     * @return MarketplaceWebServiceProducts_Model_GetServiceStatusResponse MarketplaceWebServiceProducts_Model_GetServiceStatusResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getServiceStatus($request);


            
    /**
     * Get My Price For SKU 
     * Get my price
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetMyPriceForSKU.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest request
     * or MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForSKURequest
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyPriceForSKU($request);


            
    /**
     * List Matching Products 
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}ListMatchingProducts.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest request
     * or MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest object itself
     * @see MarketplaceWebServiceProducts_Model_ListMatchingProductsRequest
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function listMatchingProducts($request);


            
    /**
     * Get Competitive Pricing For SKU 
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetCompetitivePricingForSKU.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest request
     * or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKURequest
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getCompetitivePricingForSKU($request);


            
    /**
     * Get Competitive Pricing For ASIN 
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetCompetitivePricingForASIN.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest request
     * or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINRequest
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getCompetitivePricingForASIN($request);


            
    /**
     * Get Product Categories For SKU 
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetProductCategoriesForSKU.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest request
     * or MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKURequest
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getProductCategoriesForSKU($request);


            
    /**
     * Get My Price For ASIN 
     * Get my price
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetMyPriceForASIN.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest request
     * or MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyPriceForASIN($request);


            
    /**
     * Get Lowest Offer Listings For SKU 
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetLowestOfferListingsForSKU.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest request
     * or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKURequest
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestOfferListingsForSKU($request);


            
    /**
     * Get Product Categories For ASIN 
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetProductCategoriesForASIN.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest request
     * or MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest object itself
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINRequest
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getProductCategoriesForASIN($request);

}