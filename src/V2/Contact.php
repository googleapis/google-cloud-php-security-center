<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/contact_details.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The email address of a contact.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.Contact</code>
 */
class Contact extends \Google\Protobuf\Internal\Message
{
    /**
     * An email address. For example, "`person123&#64;company.com`".
     *
     * Generated from protobuf field <code>string email = 1;</code>
     */
    private $email = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *           An email address. For example, "`person123&#64;company.com`".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\ContactDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * An email address. For example, "`person123&#64;company.com`".
     *
     * Generated from protobuf field <code>string email = 1;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * An email address. For example, "`person123&#64;company.com`".
     *
     * Generated from protobuf field <code>string email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

}

