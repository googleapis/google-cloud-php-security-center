<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/group_membership.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains details about groups of which this finding is a member. A group is a
 * collection of findings that are related in some way.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.GroupMembership</code>
 */
class GroupMembership extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of group.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.GroupMembership.GroupType group_type = 1;</code>
     */
    private $group_type = 0;
    /**
     * ID of the group.
     *
     * Generated from protobuf field <code>string group_id = 2;</code>
     */
    private $group_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $group_type
     *           Type of group.
     *     @type string $group_id
     *           ID of the group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\GroupMembership::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of group.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.GroupMembership.GroupType group_type = 1;</code>
     * @return int
     */
    public function getGroupType()
    {
        return $this->group_type;
    }

    /**
     * Type of group.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.GroupMembership.GroupType group_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V2\GroupMembership\GroupType::class);
        $this->group_type = $var;

        return $this;
    }

    /**
     * ID of the group.
     *
     * Generated from protobuf field <code>string group_id = 2;</code>
     * @return string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * ID of the group.
     *
     * Generated from protobuf field <code>string group_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_id = $var;

        return $this;
    }

}
