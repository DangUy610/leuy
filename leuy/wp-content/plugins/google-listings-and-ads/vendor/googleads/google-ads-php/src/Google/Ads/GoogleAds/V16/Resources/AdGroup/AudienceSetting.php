<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/ad_group.proto

namespace Google\Ads\GoogleAds\V16\Resources\AdGroup;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for the audience targeting.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.resources.AdGroup.AudienceSetting</code>
 */
class AudienceSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. If true, this ad group uses an Audience resource for audience
     * targeting. If false, this ad group may use audience segment criteria
     * instead.
     *
     * Generated from protobuf field <code>bool use_audience_grouped = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $use_audience_grouped = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $use_audience_grouped
     *           Immutable. If true, this ad group uses an Audience resource for audience
     *           targeting. If false, this ad group may use audience segment criteria
     *           instead.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Resources\AdGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. If true, this ad group uses an Audience resource for audience
     * targeting. If false, this ad group may use audience segment criteria
     * instead.
     *
     * Generated from protobuf field <code>bool use_audience_grouped = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return bool
     */
    public function getUseAudienceGrouped()
    {
        return $this->use_audience_grouped;
    }

    /**
     * Immutable. If true, this ad group uses an Audience resource for audience
     * targeting. If false, this ad group may use audience segment criteria
     * instead.
     *
     * Generated from protobuf field <code>bool use_audience_grouped = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param bool $var
     * @return $this
     */
    public function setUseAudienceGrouped($var)
    {
        GPBUtil::checkBool($var);
        $this->use_audience_grouped = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AudienceSetting::class, \Google\Ads\GoogleAds\V16\Resources\AdGroup_AudienceSetting::class);

