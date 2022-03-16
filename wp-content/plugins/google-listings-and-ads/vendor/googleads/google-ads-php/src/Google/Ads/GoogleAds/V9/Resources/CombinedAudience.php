<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/combined_audience.proto

namespace Google\Ads\GoogleAds\V9\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describe a resource for combined audiences which includes different
 * audiences.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.resources.CombinedAudience</code>
 */
class CombinedAudience extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the combined audience.
     * Combined audience names have the form:
     * `customers/{customer_id}/combinedAudience/{combined_audience_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. ID of the combined audience.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = 0;
    /**
     * Output only. Status of this combined audience. Indicates whether the combined audience
     * is enabled or removed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.CombinedAudienceStatusEnum.CombinedAudienceStatus status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Output only. Name of the combined audience. It should be unique across all combined
     * audiences.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Description of this combined audience.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the combined audience.
     *           Combined audience names have the form:
     *           `customers/{customer_id}/combinedAudience/{combined_audience_id}`
     *     @type int|string $id
     *           Output only. ID of the combined audience.
     *     @type int $status
     *           Output only. Status of this combined audience. Indicates whether the combined audience
     *           is enabled or removed.
     *     @type string $name
     *           Output only. Name of the combined audience. It should be unique across all combined
     *           audiences.
     *     @type string $description
     *           Output only. Description of this combined audience.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Resources\CombinedAudience::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the combined audience.
     * Combined audience names have the form:
     * `customers/{customer_id}/combinedAudience/{combined_audience_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the combined audience.
     * Combined audience names have the form:
     * `customers/{customer_id}/combinedAudience/{combined_audience_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. ID of the combined audience.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. ID of the combined audience.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Output only. Status of this combined audience. Indicates whether the combined audience
     * is enabled or removed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.CombinedAudienceStatusEnum.CombinedAudienceStatus status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of this combined audience. Indicates whether the combined audience
     * is enabled or removed.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.CombinedAudienceStatusEnum.CombinedAudienceStatus status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\CombinedAudienceStatusEnum\CombinedAudienceStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. Name of the combined audience. It should be unique across all combined
     * audiences.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of the combined audience. It should be unique across all combined
     * audiences.
     *
     * Generated from protobuf field <code>string name = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Description of this combined audience.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Output only. Description of this combined audience.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

