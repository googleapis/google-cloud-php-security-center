<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for retrieving a mute config. If no location is specified,
 * default is global.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.GetMuteConfigRequest</code>
 */
class GetMuteConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the mute config to retrieve. The following list shows
     * some examples of the format:
     * + `organizations/{organization}/muteConfigs/{config_id}`
     * +
     * `organizations/{organization}/locations/{location}/muteConfigs/{config_id}`
     * + `folders/{folder}/muteConfigs/{config_id}`
     * + `folders/{folder}/locations/{location}/muteConfigs/{config_id}`
     * + `projects/{project}/muteConfigs/{config_id}`
     * + `projects/{project}/locations/{location}/muteConfigs/{config_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. Name of the mute config to retrieve. The following list shows
     *                     some examples of the format:
     *
     *                     + `organizations/{organization}/muteConfigs/{config_id}`
     *                     +
     *                     `organizations/{organization}/locations/{location}/muteConfigs/{config_id}`
     *                     + `folders/{folder}/muteConfigs/{config_id}`
     *                     + `folders/{folder}/locations/{location}/muteConfigs/{config_id}`
     *                     + `projects/{project}/muteConfigs/{config_id}`
     *                     + `projects/{project}/locations/{location}/muteConfigs/{config_id}`
     *                     Please see {@see SecurityCenterClient::muteConfigName()} for help formatting this field.
     *
     * @return \Google\Cloud\SecurityCenter\V2\GetMuteConfigRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the mute config to retrieve. The following list shows
     *           some examples of the format:
     *           + `organizations/{organization}/muteConfigs/{config_id}`
     *           +
     *           `organizations/{organization}/locations/{location}/muteConfigs/{config_id}`
     *           + `folders/{folder}/muteConfigs/{config_id}`
     *           + `folders/{folder}/locations/{location}/muteConfigs/{config_id}`
     *           + `projects/{project}/muteConfigs/{config_id}`
     *           + `projects/{project}/locations/{location}/muteConfigs/{config_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the mute config to retrieve. The following list shows
     * some examples of the format:
     * + `organizations/{organization}/muteConfigs/{config_id}`
     * +
     * `organizations/{organization}/locations/{location}/muteConfigs/{config_id}`
     * + `folders/{folder}/muteConfigs/{config_id}`
     * + `folders/{folder}/locations/{location}/muteConfigs/{config_id}`
     * + `projects/{project}/muteConfigs/{config_id}`
     * + `projects/{project}/locations/{location}/muteConfigs/{config_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the mute config to retrieve. The following list shows
     * some examples of the format:
     * + `organizations/{organization}/muteConfigs/{config_id}`
     * +
     * `organizations/{organization}/locations/{location}/muteConfigs/{config_id}`
     * + `folders/{folder}/muteConfigs/{config_id}`
     * + `folders/{folder}/locations/{location}/muteConfigs/{config_id}`
     * + `projects/{project}/muteConfigs/{config_id}`
     * + `projects/{project}/locations/{location}/muteConfigs/{config_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
