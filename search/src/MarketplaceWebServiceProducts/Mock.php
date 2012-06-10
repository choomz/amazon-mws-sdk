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
 */
class  MarketplaceWebServiceProducts_Mock implements MarketplaceWebServiceProducts_Interface
{
    // Public API ------------------------------------------------------------//

            
    /**
     * Get Matching Product 
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetMatchingProduct.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMatchingProduct request or MarketplaceWebServiceProducts_Model_GetMatchingProduct object itself
     * @see MarketplaceWebServiceProducts_Model_GetMatchingProduct
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductResponse MarketplaceWebServiceProducts_Model_GetMatchingProductResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMatchingProduct($request) 
    {
        require_once ('MarketplaceWebServiceProducts/Model/GetMatchingProductResponse.php');
        return MarketplaceWebServiceProducts_Model_GetMatchingProductResponse::fromXML($this->_invoke('GetMatchingProduct'));
    }


            
    /**
     * Get Lowest Offer Listings For ASIN 
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetLowestOfferListingsForASIN.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN request or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN object itself
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestOfferListingsForASIN($request) 
    {
        require_once ('MarketplaceWebServiceProducts/Model/GetLowestOfferListingsForASINResponse.php');
        return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse::fromXML($this->_invoke('GetLowestOfferListingsForASIN'));
    }


            
    /**
     * Get Service Status 
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetServiceStatus.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetServiceStatus request or MarketplaceWebServiceProducts_Model_GetServiceStatus object itself
     * @see MarketplaceWebServiceProducts_Model_GetServiceStatus
     * @return MarketplaceWebServiceProducts_Model_GetServiceStatusResponse MarketplaceWebServiceProducts_Model_GetServiceStatusResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getServiceStatus($request) 
    {
        require_once ('MarketplaceWebServiceProducts/Model/GetServiceStatusResponse.php');
        return MarketplaceWebServiceProducts_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }


            
    /**
     * Get My Price For SKU 
     * Get my price
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetMyPriceForSKU.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForSKU request or MarketplaceWebServiceProducts_Model_GetMyPriceForSKU object itself
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForSKU
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyPriceForSKU($request) 
    {
        require_once ('MarketplaceWebServiceProducts/Model/GetMyPriceForSKUResponse.php');
        return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse::fromXML($this->_invoke('GetMyPriceForSKU'));
    }


            
    /**
     * List Matching Products 
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}ListMatchingProducts.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_ListMatchingProducts request or MarketplaceWebServiceProducts_Model_ListMatchingProducts object itself
     * @see MarketplaceWebServiceProducts_Model_ListMatchingProducts
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function listMatchingProducts($request) 
    {
        require_once ('MarketplaceWebServiceProducts/Model/ListMatchingProductsResponse.php');
        return MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse::fromXML($this->_invoke('ListMatchingProducts'));
    }


            
    /**
     * Get Competitive Pricing For SKU 
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetCompetitivePricingForSKU.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU request or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU object itself
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getCompetitivePricingForSKU($request) 
    {
        require_once ('MarketplaceWebServiceProducts/Model/GetCompetitivePricingForSKUResponse.php');
        return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse::fromXML($this->_invoke('GetCompetitivePricingForSKU'));
    }


            
    /**
     * Get Competitive Pricing For ASIN 
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetCompetitivePricingForASIN.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN request or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN object itself
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getCompetitivePricingForASIN($request) 
    {
        require_once ('MarketplaceWebServiceProducts/Model/GetCompetitivePricingForASINResponse.php');
        return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse::fromXML($this->_invoke('GetCompetitivePricingForASIN'));
    }


            
    /**
     * Get Product Categories For SKU 
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetProductCategoriesForSKU.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU request or MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU object itself
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getProductCategoriesForSKU($request) 
    {
        require_once ('MarketplaceWebServiceProducts/Model/GetProductCategoriesForSKUResponse.php');
        return MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse::fromXML($this->_invoke('GetProductCategoriesForSKU'));
    }


            
    /**
     * Get My Price For ASIN 
     * Get my price
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetMyPriceForASIN.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForASIN request or MarketplaceWebServiceProducts_Model_GetMyPriceForASIN object itself
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForASIN
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyPriceForASIN($request) 
    {
        require_once ('MarketplaceWebServiceProducts/Model/GetMyPriceForASINResponse.php');
        return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse::fromXML($this->_invoke('GetMyPriceForASIN'));
    }


            
    /**
     * Get Lowest Offer Listings For SKU 
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetLowestOfferListingsForSKU.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU request or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU object itself
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestOfferListingsForSKU($request) 
    {
        require_once ('MarketplaceWebServiceProducts/Model/GetLowestOfferListingsForSKUResponse.php');
        return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse::fromXML($this->_invoke('GetLowestOfferListingsForSKU'));
    }


            
    /**
     * Get Product Categories For ASIN 
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetProductCategoriesForASIN.html      
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN request or MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN object itself
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getProductCategoriesForASIN($request) 
    {
        require_once ('MarketplaceWebServiceProducts/Model/GetProductCategoriesForASINResponse.php');
        return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse::fromXML($this->_invoke('GetProductCategoriesForASIN'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents('MarketplaceWebServiceProducts/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}