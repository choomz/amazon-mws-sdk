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
 * Get My Price For ASIN  Sample
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
 * sample for Get My Price For ASIN Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest
 $request = new MarketplaceWebServiceProducts_Model_GetMyPriceForASINRequest();
 $request->setSellerId(MERCHANT_ID);
 // object or array of parameters
 invokeGetMyPriceForASIN($service, $request);

                                                        
/**
  * Get My Price For ASIN Action Sample
  * Get my price
  *   
  * @param MarketplaceWebServiceProducts_Interface $service instance of MarketplaceWebServiceProducts_Interface
  * @param mixed $request MarketplaceWebServiceProducts_Model_GetMyPriceForASIN or array of parameters
  */
  function invokeGetMyPriceForASIN(MarketplaceWebServiceProducts_Interface $service, $request) 
  {
      try {
              $response = $service->getMyPriceForASIN($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        GetMyPriceForASINResponse\n");
                $getMyPriceForASINResultList = $response->getGetMyPriceForASINResult();
                foreach ($getMyPriceForASINResultList as $getMyPriceForASINResult) {
                    echo("            GetMyPriceForASINResult\n");
                if ($getMyPriceForASINResult->isSetASIN()) {
                    echo("        ASIN");
                    echo("\n");
                    echo("                " . $getMyPriceForASINResult->getASIN() . "\n");
                } 
                if ($getMyPriceForASINResult->isSetStatus()) {
                    echo("        status");
                    echo("\n");
                    echo("                " . $getMyPriceForASINResult->getStatus() . "\n");
                } 
                    if ($getMyPriceForASINResult->isSetProduct()) { 
                        echo("                Product\n");
                        $product = $getMyPriceForASINResult->getProduct();
                        if ($product->isSetIdentifiers()) { 
                            echo("                    Identifiers\n");
                            $identifiers = $product->getIdentifiers();
                            if ($identifiers->isSetMarketplaceASIN()) { 
                                echo("                        MarketplaceASIN\n");
                                $marketplaceASIN = $identifiers->getMarketplaceASIN();
                                if ($marketplaceASIN->isSetMarketplaceId()) 
                                {
                                    echo("                            MarketplaceId\n");
                                    echo("                                " . $marketplaceASIN->getMarketplaceId() . "\n");
                                }
                                if ($marketplaceASIN->isSetASIN()) 
                                {
                                    echo("                            ASIN\n");
                                    echo("                                " . $marketplaceASIN->getASIN() . "\n");
                                }
                            } 
                            if ($identifiers->isSetSKUIdentifier()) { 
                                echo("                        SKUIdentifier\n");
                                $SKUIdentifier = $identifiers->getSKUIdentifier();
                                if ($SKUIdentifier->isSetMarketplaceId()) 
                                {
                                    echo("                            MarketplaceId\n");
                                    echo("                                " . $SKUIdentifier->getMarketplaceId() . "\n");
                                }
                                if ($SKUIdentifier->isSetSellerId()) 
                                {
                                    echo("                            SellerId\n");
                                    echo("                                " . $SKUIdentifier->getSellerId() . "\n");
                                }
                                if ($SKUIdentifier->isSetSellerSKU()) 
                                {
                                    echo("                            SellerSKU\n");
                                    echo("                                " . $SKUIdentifier->getSellerSKU() . "\n");
                                }
                            } 
                        } 
                        if ($product->isSetCompetitivePricing()) { 
                            echo("                    CompetitivePricing\n");
                            $competitivePricing = $product->getCompetitivePricing();
                            if ($competitivePricing->isSetCompetitivePrices()) { 
                                echo("                        CompetitivePrices\n");
                                $competitivePrices = $competitivePricing->getCompetitivePrices();
                                $competitivePriceList = $competitivePrices->getCompetitivePrice();
                                foreach ($competitivePriceList as $competitivePrice) {
                                    echo("                            CompetitivePrice\n");
                                if ($competitivePrice->isSetCondition()) {
                                    echo("                        condition");
                                    echo("\n");
                                    echo("                                " . $competitivePrice->getCondition() . "\n");
                                } 
                                if ($competitivePrice->isSetSubcondition()) {
                                    echo("                        subcondition");
                                    echo("\n");
                                    echo("                                " . $competitivePrice->getSubcondition() . "\n");
                                } 
                                if ($competitivePrice->isSetBelongsToRequester()) {
                                    echo("                        belongsToRequester");
                                    echo("\n");
                                    echo("                                " . $competitivePrice->getBelongsToRequester() . "\n");
                                } 
                                    if ($competitivePrice->isSetCompetitivePriceId()) 
                                    {
                                        echo("                                CompetitivePriceId\n");
                                        echo("                                    " . $competitivePrice->getCompetitivePriceId() . "\n");
                                    }
                                    if ($competitivePrice->isSetPrice()) { 
                                        echo("                                Price\n");
                                        $price = $competitivePrice->getPrice();
                                        if ($price->isSetLandedPrice()) { 
                                            echo("                                    LandedPrice\n");
                                            $landedPrice = $price->getLandedPrice();
                                            if ($landedPrice->isSetCurrencyCode()) 
                                            {
                                                echo("                                        CurrencyCode\n");
                                                echo("                                            " . $landedPrice->getCurrencyCode() . "\n");
                                            }
                                            if ($landedPrice->isSetAmount()) 
                                            {
                                                echo("                                        Amount\n");
                                                echo("                                            " . $landedPrice->getAmount() . "\n");
                                            }
                                        } 
                                        if ($price->isSetListingPrice()) { 
                                            echo("                                    ListingPrice\n");
                                            $listingPrice = $price->getListingPrice();
                                            if ($listingPrice->isSetCurrencyCode()) 
                                            {
                                                echo("                                        CurrencyCode\n");
                                                echo("                                            " . $listingPrice->getCurrencyCode() . "\n");
                                            }
                                            if ($listingPrice->isSetAmount()) 
                                            {
                                                echo("                                        Amount\n");
                                                echo("                                            " . $listingPrice->getAmount() . "\n");
                                            }
                                        } 
                                        if ($price->isSetShipping()) { 
                                            echo("                                    Shipping\n");
                                            $shipping = $price->getShipping();
                                            if ($shipping->isSetCurrencyCode()) 
                                            {
                                                echo("                                        CurrencyCode\n");
                                                echo("                                            " . $shipping->getCurrencyCode() . "\n");
                                            }
                                            if ($shipping->isSetAmount()) 
                                            {
                                                echo("                                        Amount\n");
                                                echo("                                            " . $shipping->getAmount() . "\n");
                                            }
                                        } 
                                    } 
                                }
                            } 
                            if ($competitivePricing->isSetNumberOfOfferListings()) { 
                                echo("                        NumberOfOfferListings\n");
                                $numberOfOfferListings = $competitivePricing->getNumberOfOfferListings();
                                $offerListingCountList = $numberOfOfferListings->getOfferListingCount();
                                foreach ($offerListingCountList as $offerListingCount) {
                                    echo("                            OfferListingCount\n");
                                if ($offerListingCount->isSetCondition()) {
                                    echo("                        condition");
                                    echo("\n");
                                    echo("                                " . $offerListingCount->getCondition() . "\n");
                                } 
                                if ($offerListingCount->isSetValue()) {
                                    echo("                        Value");
                                    echo("\n");
                                    echo("                                " . $offerListingCount->getValue() . "\n");
                                } 
                                }
                            } 
                            if ($competitivePricing->isSetTradeInValue()) { 
                                echo("                        TradeInValue\n");
                                $tradeInValue = $competitivePricing->getTradeInValue();
                                if ($tradeInValue->isSetCurrencyCode()) 
                                {
                                    echo("                            CurrencyCode\n");
                                    echo("                                " . $tradeInValue->getCurrencyCode() . "\n");
                                }
                                if ($tradeInValue->isSetAmount()) 
                                {
                                    echo("                            Amount\n");
                                    echo("                                " . $tradeInValue->getAmount() . "\n");
                                }
                            } 
                        } 
                        if ($product->isSetSalesRankings()) { 
                            echo("                    SalesRankings\n");
                            $salesRankings = $product->getSalesRankings();
                            $salesRankList = $salesRankings->getSalesRank();
                            foreach ($salesRankList as $salesRank) {
                                echo("                        SalesRank\n");
                                if ($salesRank->isSetProductCategoryId()) 
                                {
                                    echo("                            ProductCategoryId\n");
                                    echo("                                " . $salesRank->getProductCategoryId() . "\n");
                                }
                                if ($salesRank->isSetRank()) 
                                {
                                    echo("                            Rank\n");
                                    echo("                                " . $salesRank->getRank() . "\n");
                                }
                            }
                        } 
                        if ($product->isSetLowestOfferListings()) { 
                            echo("                    LowestOfferListings\n");
                            $lowestOfferListings = $product->getLowestOfferListings();
                            $lowestOfferListingList = $lowestOfferListings->getLowestOfferListing();
                            foreach ($lowestOfferListingList as $lowestOfferListing) {
                                echo("                        LowestOfferListing\n");
                                if ($lowestOfferListing->isSetQualifiers()) { 
                                    echo("                            Qualifiers\n");
                                    $qualifiers = $lowestOfferListing->getQualifiers();
                                    if ($qualifiers->isSetItemCondition()) 
                                    {
                                        echo("                                ItemCondition\n");
                                        echo("                                    " . $qualifiers->getItemCondition() . "\n");
                                    }
                                    if ($qualifiers->isSetItemSubcondition()) 
                                    {
                                        echo("                                ItemSubcondition\n");
                                        echo("                                    " . $qualifiers->getItemSubcondition() . "\n");
                                    }
                                    if ($qualifiers->isSetFulfillmentChannel()) 
                                    {
                                        echo("                                FulfillmentChannel\n");
                                        echo("                                    " . $qualifiers->getFulfillmentChannel() . "\n");
                                    }
                                    if ($qualifiers->isSetShipsDomestically()) 
                                    {
                                        echo("                                ShipsDomestically\n");
                                        echo("                                    " . $qualifiers->getShipsDomestically() . "\n");
                                    }
                                    if ($qualifiers->isSetShippingTime()) { 
                                        echo("                                ShippingTime\n");
                                        $shippingTime = $qualifiers->getShippingTime();
                                        if ($shippingTime->isSetMax()) 
                                        {
                                            echo("                                    Max\n");
                                            echo("                                        " . $shippingTime->getMax() . "\n");
                                        }
                                    } 
                                    if ($qualifiers->isSetSellerPositiveFeedbackRating()) 
                                    {
                                        echo("                                SellerPositiveFeedbackRating\n");
                                        echo("                                    " . $qualifiers->getSellerPositiveFeedbackRating() . "\n");
                                    }
                                } 
                                if ($lowestOfferListing->isSetNumberOfOfferListingsConsidered()) 
                                {
                                    echo("                            NumberOfOfferListingsConsidered\n");
                                    echo("                                " . $lowestOfferListing->getNumberOfOfferListingsConsidered() . "\n");
                                }
                                if ($lowestOfferListing->isSetSellerFeedbackCount()) 
                                {
                                    echo("                            SellerFeedbackCount\n");
                                    echo("                                " . $lowestOfferListing->getSellerFeedbackCount() . "\n");
                                }
                                if ($lowestOfferListing->isSetPrice()) { 
                                    echo("                            Price\n");
                                    $price1 = $lowestOfferListing->getPrice();
                                    if ($price1->isSetLandedPrice()) { 
                                        echo("                                LandedPrice\n");
                                        $landedPrice1 = $price1->getLandedPrice();
                                        if ($landedPrice1->isSetCurrencyCode()) 
                                        {
                                            echo("                                    CurrencyCode\n");
                                            echo("                                        " . $landedPrice1->getCurrencyCode() . "\n");
                                        }
                                        if ($landedPrice1->isSetAmount()) 
                                        {
                                            echo("                                    Amount\n");
                                            echo("                                        " . $landedPrice1->getAmount() . "\n");
                                        }
                                    } 
                                    if ($price1->isSetListingPrice()) { 
                                        echo("                                ListingPrice\n");
                                        $listingPrice1 = $price1->getListingPrice();
                                        if ($listingPrice1->isSetCurrencyCode()) 
                                        {
                                            echo("                                    CurrencyCode\n");
                                            echo("                                        " . $listingPrice1->getCurrencyCode() . "\n");
                                        }
                                        if ($listingPrice1->isSetAmount()) 
                                        {
                                            echo("                                    Amount\n");
                                            echo("                                        " . $listingPrice1->getAmount() . "\n");
                                        }
                                    } 
                                    if ($price1->isSetShipping()) { 
                                        echo("                                Shipping\n");
                                        $shipping1 = $price1->getShipping();
                                        if ($shipping1->isSetCurrencyCode()) 
                                        {
                                            echo("                                    CurrencyCode\n");
                                            echo("                                        " . $shipping1->getCurrencyCode() . "\n");
                                        }
                                        if ($shipping1->isSetAmount()) 
                                        {
                                            echo("                                    Amount\n");
                                            echo("                                        " . $shipping1->getAmount() . "\n");
                                        }
                                    } 
                                } 
                                if ($lowestOfferListing->isSetMultipleOffersAtLowestPrice()) 
                                {
                                    echo("                            MultipleOffersAtLowestPrice\n");
                                    echo("                                " . $lowestOfferListing->getMultipleOffersAtLowestPrice() . "\n");
                                }
                            }
                        } 
                        if ($product->isSetOffers()) { 
                            echo("                    Offers\n");
                            $offers = $product->getOffers();
                            $offerList = $offers->getOffer();
                            foreach ($offerList as $offer) {
                                echo("                        Offer\n");
                                if ($offer->isSetBuyingPrice()) { 
                                    echo("                            BuyingPrice\n");
                                    $buyingPrice = $offer->getBuyingPrice();
                                    if ($buyingPrice->isSetLandedPrice()) { 
                                        echo("                                LandedPrice\n");
                                        $landedPrice2 = $buyingPrice->getLandedPrice();
                                        if ($landedPrice2->isSetCurrencyCode()) 
                                        {
                                            echo("                                    CurrencyCode\n");
                                            echo("                                        " . $landedPrice2->getCurrencyCode() . "\n");
                                        }
                                        if ($landedPrice2->isSetAmount()) 
                                        {
                                            echo("                                    Amount\n");
                                            echo("                                        " . $landedPrice2->getAmount() . "\n");
                                        }
                                    } 
                                    if ($buyingPrice->isSetListingPrice()) { 
                                        echo("                                ListingPrice\n");
                                        $listingPrice2 = $buyingPrice->getListingPrice();
                                        if ($listingPrice2->isSetCurrencyCode()) 
                                        {
                                            echo("                                    CurrencyCode\n");
                                            echo("                                        " . $listingPrice2->getCurrencyCode() . "\n");
                                        }
                                        if ($listingPrice2->isSetAmount()) 
                                        {
                                            echo("                                    Amount\n");
                                            echo("                                        " . $listingPrice2->getAmount() . "\n");
                                        }
                                    } 
                                    if ($buyingPrice->isSetShipping()) { 
                                        echo("                                Shipping\n");
                                        $shipping2 = $buyingPrice->getShipping();
                                        if ($shipping2->isSetCurrencyCode()) 
                                        {
                                            echo("                                    CurrencyCode\n");
                                            echo("                                        " . $shipping2->getCurrencyCode() . "\n");
                                        }
                                        if ($shipping2->isSetAmount()) 
                                        {
                                            echo("                                    Amount\n");
                                            echo("                                        " . $shipping2->getAmount() . "\n");
                                        }
                                    } 
                                } 
                                if ($offer->isSetRegularPrice()) { 
                                    echo("                            RegularPrice\n");
                                    $regularPrice = $offer->getRegularPrice();
                                    if ($regularPrice->isSetCurrencyCode()) 
                                    {
                                        echo("                                CurrencyCode\n");
                                        echo("                                    " . $regularPrice->getCurrencyCode() . "\n");
                                    }
                                    if ($regularPrice->isSetAmount()) 
                                    {
                                        echo("                                Amount\n");
                                        echo("                                    " . $regularPrice->getAmount() . "\n");
                                    }
                                } 
                                if ($offer->isSetFulfillmentChannel()) 
                                {
                                    echo("                            FulfillmentChannel\n");
                                    echo("                                " . $offer->getFulfillmentChannel() . "\n");
                                }
                                if ($offer->isSetItemCondition()) 
                                {
                                    echo("                            ItemCondition\n");
                                    echo("                                " . $offer->getItemCondition() . "\n");
                                }
                                if ($offer->isSetItemSubCondition()) 
                                {
                                    echo("                            ItemSubCondition\n");
                                    echo("                                " . $offer->getItemSubCondition() . "\n");
                                }
                                if ($offer->isSetSellerId()) 
                                {
                                    echo("                            SellerId\n");
                                    echo("                                " . $offer->getSellerId() . "\n");
                                }
                                if ($offer->isSetSellerSKU()) 
                                {
                                    echo("                            SellerSKU\n");
                                    echo("                                " . $offer->getSellerSKU() . "\n");
                                }
                            }
                        } 
                    } 
                    if ($getMyPriceForASINResult->isSetError()) { 
                        echo("                Error\n");
                        $error = $getMyPriceForASINResult->getError();
                        if ($error->isSetType()) 
                        {
                            echo("                    Type\n");
                            echo("                        " . $error->getType() . "\n");
                        }
                        if ($error->isSetCode()) 
                        {
                            echo("                    Code\n");
                            echo("                        " . $error->getCode() . "\n");
                        }
                        if ($error->isSetMessage()) 
                        {
                            echo("                    Message\n");
                            echo("                        " . $error->getMessage() . "\n");
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
            