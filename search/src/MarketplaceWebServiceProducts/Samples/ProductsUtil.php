<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebServiceProducts
 *  @copyright   Copyright 2008-2009 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2011-10-01
 */
/******************************************************************************* 
 * 
 *  Marketplace Web Service Products PHP5 Library 
 * 
 */

 function prettyPrint($nodeList)
 {    
      foreach ($nodeList as $domNode){
         $domDocument =  new DOMDocument();
         $domDocument->preserveWhiteSpace = false;
         $domDocument->formatOutput = true;
         $nodeStr = $domDocument->saveXML($domDocument->importNode($domNode,true));
         echo($nodeStr."\n");
     }
 } 
