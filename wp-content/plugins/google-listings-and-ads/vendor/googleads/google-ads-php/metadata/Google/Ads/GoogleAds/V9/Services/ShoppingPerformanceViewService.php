<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/shopping_performance_view_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Services;

class ShoppingPerformanceViewService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Agoogle/ads/googleads/v9/resources/shopping_performance_view.proto!google.ads.googleads.v9.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
ShoppingPerformanceViewO
resource_name (	B8�A�A2
0googleads.googleapis.com/ShoppingPerformanceView:f�Ac
0googleads.googleapis.com/ShoppingPerformanceView/customers/{customer_id}/shoppingPerformanceViewB�
%com.google.ads.googleads.v9.resourcesBShoppingPerformanceViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3
�
Hgoogle/ads/googleads/v9/services/shopping_performance_view_service.proto google.ads.googleads.v9.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"t
!GetShoppingPerformanceViewRequestO
resource_name (	B8�A�A2
0googleads.googleapis.com/ShoppingPerformanceView2�
ShoppingPerformanceViewService�
GetShoppingPerformanceViewC.google.ads.googleads.v9.services.GetShoppingPerformanceViewRequest:.google.ads.googleads.v9.resources.ShoppingPerformanceView"O���97/v9/{resource_name=customers/*/shoppingPerformanceView}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v9.servicesB#ShoppingPerformanceViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v9/services;services�GAA� Google.Ads.GoogleAds.V9.Services� Google\\Ads\\GoogleAds\\V9\\Services�$Google::Ads::GoogleAds::V9::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

