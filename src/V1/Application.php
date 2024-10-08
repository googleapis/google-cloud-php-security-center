<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/application.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an application associated with a finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Application</code>
 */
class Application extends \Google\Protobuf\Internal\Message
{
    /**
     * The base URI that identifies the network location of the application in
     * which the vulnerability was detected. For example, `http://example.com`.
     *
     * Generated from protobuf field <code>string base_uri = 1;</code>
     */
    protected $base_uri = '';
    /**
     * The full URI with payload that can be used to reproduce the
     * vulnerability. For example, `http://example.com?p=aMmYgI6H`.
     *
     * Generated from protobuf field <code>string full_uri = 2;</code>
     */
    protected $full_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $base_uri
     *           The base URI that identifies the network location of the application in
     *           which the vulnerability was detected. For example, `http://example.com`.
     *     @type string $full_uri
     *           The full URI with payload that can be used to reproduce the
     *           vulnerability. For example, `http://example.com?p=aMmYgI6H`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * The base URI that identifies the network location of the application in
     * which the vulnerability was detected. For example, `http://example.com`.
     *
     * Generated from protobuf field <code>string base_uri = 1;</code>
     * @return string
     */
    public function getBaseUri()
    {
        return $this->base_uri;
    }

    /**
     * The base URI that identifies the network location of the application in
     * which the vulnerability was detected. For example, `http://example.com`.
     *
     * Generated from protobuf field <code>string base_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_uri = $var;

        return $this;
    }

    /**
     * The full URI with payload that can be used to reproduce the
     * vulnerability. For example, `http://example.com?p=aMmYgI6H`.
     *
     * Generated from protobuf field <code>string full_uri = 2;</code>
     * @return string
     */
    public function getFullUri()
    {
        return $this->full_uri;
    }

    /**
     * The full URI with payload that can be used to reproduce the
     * vulnerability. For example, `http://example.com?p=aMmYgI6H`.
     *
     * Generated from protobuf field <code>string full_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFullUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_uri = $var;

        return $this;
    }

}

