<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/access.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a geographical location for a given access.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Geolocation</code>
 */
class Geolocation extends \Google\Protobuf\Internal\Message
{
    /**
     * A CLDR.
     *
     * Generated from protobuf field <code>string region_code = 1;</code>
     */
    protected $region_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $region_code
     *           A CLDR.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Access::initOnce();
        parent::__construct($data);
    }

    /**
     * A CLDR.
     *
     * Generated from protobuf field <code>string region_code = 1;</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * A CLDR.
     *
     * Generated from protobuf field <code>string region_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

}

