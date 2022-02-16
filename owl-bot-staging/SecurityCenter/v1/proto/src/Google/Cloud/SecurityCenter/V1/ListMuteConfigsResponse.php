<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for listing mute configs.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ListMuteConfigsResponse</code>
 */
class ListMuteConfigsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The mute configs from the specified parent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.MuteConfig mute_configs = 1;</code>
     */
    private $mute_configs;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V1\MuteConfig[]|\Google\Protobuf\Internal\RepeatedField $mute_configs
     *           The mute configs from the specified parent.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The mute configs from the specified parent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.MuteConfig mute_configs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMuteConfigs()
    {
        return $this->mute_configs;
    }

    /**
     * The mute configs from the specified parent.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.MuteConfig mute_configs = 1;</code>
     * @param \Google\Cloud\SecurityCenter\V1\MuteConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMuteConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\MuteConfig::class);
        $this->mute_configs = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

