<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for bulk findings update.
 * Note:
 * 1. If multiple bulk update requests match the same resource, the order in
 * which they get executed is not defined.
 * 2. Once a bulk operation is started, there is no way to stop it.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.BulkMuteFindingsRequest</code>
 */
class BulkMuteFindingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent, at which bulk action needs to be applied. Its format
     * is "organizations/[organization_id]", "folders/[folder_id]",
     * "projects/[project_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Expression that identifies findings that should be updated.
     * The expression is a list of zero or more restrictions combined
     * via logical operators `AND` and `OR`. Parentheses are supported, and `OR`
     * has higher precedence than `AND`.
     * Restrictions have the form `<field> <operator> <value>` and may have a
     * `-` character in front of them to indicate negation. The fields map to
     * those defined in the corresponding resource.
     * The supported operators are:
     * * `=` for all value types.
     * * `>`, `<`, `>=`, `<=` for integer values.
     * * `:`, meaning substring matching, for strings.
     * The supported value types are:
     * * string literals in quotes.
     * * integer literals without quotes.
     * * boolean literals `true` and `false` without quotes.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    protected $filter = '';
    /**
     * This can be a mute configuration name or any identifier for mute/unmute
     * of findings based on the filter.
     *
     * Generated from protobuf field <code>string mute_annotation = 3 [deprecated = true];</code>
     * @deprecated
     */
    protected $mute_annotation = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent, at which bulk action needs to be applied. Its format
     *           is "organizations/[organization_id]", "folders/[folder_id]",
     *           "projects/[project_id]".
     *     @type string $filter
     *           Expression that identifies findings that should be updated.
     *           The expression is a list of zero or more restrictions combined
     *           via logical operators `AND` and `OR`. Parentheses are supported, and `OR`
     *           has higher precedence than `AND`.
     *           Restrictions have the form `<field> <operator> <value>` and may have a
     *           `-` character in front of them to indicate negation. The fields map to
     *           those defined in the corresponding resource.
     *           The supported operators are:
     *           * `=` for all value types.
     *           * `>`, `<`, `>=`, `<=` for integer values.
     *           * `:`, meaning substring matching, for strings.
     *           The supported value types are:
     *           * string literals in quotes.
     *           * integer literals without quotes.
     *           * boolean literals `true` and `false` without quotes.
     *     @type string $mute_annotation
     *           This can be a mute configuration name or any identifier for mute/unmute
     *           of findings based on the filter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent, at which bulk action needs to be applied. Its format
     * is "organizations/[organization_id]", "folders/[folder_id]",
     * "projects/[project_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent, at which bulk action needs to be applied. Its format
     * is "organizations/[organization_id]", "folders/[folder_id]",
     * "projects/[project_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Expression that identifies findings that should be updated.
     * The expression is a list of zero or more restrictions combined
     * via logical operators `AND` and `OR`. Parentheses are supported, and `OR`
     * has higher precedence than `AND`.
     * Restrictions have the form `<field> <operator> <value>` and may have a
     * `-` character in front of them to indicate negation. The fields map to
     * those defined in the corresponding resource.
     * The supported operators are:
     * * `=` for all value types.
     * * `>`, `<`, `>=`, `<=` for integer values.
     * * `:`, meaning substring matching, for strings.
     * The supported value types are:
     * * string literals in quotes.
     * * integer literals without quotes.
     * * boolean literals `true` and `false` without quotes.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Expression that identifies findings that should be updated.
     * The expression is a list of zero or more restrictions combined
     * via logical operators `AND` and `OR`. Parentheses are supported, and `OR`
     * has higher precedence than `AND`.
     * Restrictions have the form `<field> <operator> <value>` and may have a
     * `-` character in front of them to indicate negation. The fields map to
     * those defined in the corresponding resource.
     * The supported operators are:
     * * `=` for all value types.
     * * `>`, `<`, `>=`, `<=` for integer values.
     * * `:`, meaning substring matching, for strings.
     * The supported value types are:
     * * string literals in quotes.
     * * integer literals without quotes.
     * * boolean literals `true` and `false` without quotes.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * This can be a mute configuration name or any identifier for mute/unmute
     * of findings based on the filter.
     *
     * Generated from protobuf field <code>string mute_annotation = 3 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getMuteAnnotation()
    {
        @trigger_error('mute_annotation is deprecated.', E_USER_DEPRECATED);
        return $this->mute_annotation;
    }

    /**
     * This can be a mute configuration name or any identifier for mute/unmute
     * of findings based on the filter.
     *
     * Generated from protobuf field <code>string mute_annotation = 3 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setMuteAnnotation($var)
    {
        @trigger_error('mute_annotation is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->mute_annotation = $var;

        return $this;
    }

}

