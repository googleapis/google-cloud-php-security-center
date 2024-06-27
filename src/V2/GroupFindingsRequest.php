<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for grouping by findings.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.GroupFindingsRequest</code>
 */
class GroupFindingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the source to groupBy. If no location is specified,
     * finding is assumed to be in global.
     *  The following list shows some examples:
     * + `organizations/[organization_id]/sources/[source_id]`
     * +
     * `organizations/[organization_id]/sources/[source_id]/locations/[location_id]`
     * + `folders/[folder_id]/sources/[source_id]`
     * + `folders/[folder_id]/sources/[source_id]/locations/[location_id]`
     * + `projects/[project_id]/sources/[source_id]`
     * + `projects/[project_id]/sources/[source_id]/locations/[location_id]`
     * To groupBy across all sources provide a source_id of `-`. The following
     * list shows some examples:
     * + `organizations/{organization_id}/sources/-`
     * + `organizations/{organization_id}/sources/-/locations/[location_id]`
     * + `folders/{folder_id}/sources/-`
     * + `folders/{folder_id}/sources/-/locations/[location_id]`
     * + `projects/{project_id}/sources/-`
     * + `projects/{project_id}/sources/-/locations/[location_id]`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Expression that defines the filter to apply across findings.
     * The expression is a list of one or more restrictions combined via logical
     * operators `AND` and `OR`.
     * Parentheses are supported, and `OR` has higher precedence than `AND`.
     * Restrictions have the form `<field> <operator> <value>` and may have a `-`
     * character in front of them to indicate negation. Examples include:
     *  * name
     *  * security_marks.marks.marka
     * The supported operators are:
     * * `=` for all value types.
     * * `>`, `<`, `>=`, `<=` for integer values.
     * * `:`, meaning substring matching, for strings.
     * The supported value types are:
     * * string literals in quotes.
     * * integer literals without quotes.
     * * boolean literals `true` and `false` without quotes.
     * The following field and operator combinations are supported:
     * * name: `=`
     * * parent: `=`, `:`
     * * resource_name: `=`, `:`
     * * state: `=`, `:`
     * * category: `=`, `:`
     * * external_uri: `=`, `:`
     * * event_time: `=`, `>`, `<`, `>=`, `<=`
     *   Usage: This should be milliseconds since epoch or an RFC3339 string.
     *   Examples:
     *     `event_time = "2019-06-10T16:07:18-07:00"`
     *     `event_time = 1560208038000`
     * * severity: `=`, `:`
     * * security_marks.marks: `=`, `:`
     * * resource:
     *   * resource.name: `=`, `:`
     *   * resource.parent_name: `=`, `:`
     *   * resource.parent_display_name: `=`, `:`
     *   * resource.project_name: `=`, `:`
     *   * resource.project_display_name: `=`, `:`
     *   * resource.type: `=`, `:`
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * Required. Expression that defines what assets fields to use for grouping.
     * The string value should follow SQL syntax: comma separated list of fields.
     * For example: "parent,resource_name".
     *
     * Generated from protobuf field <code>string group_by = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $group_by = '';
    /**
     * The value returned by the last `GroupFindingsResponse`; indicates
     * that this is a continuation of a prior `GroupFindings` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 7;</code>
     */
    private $page_token = '';
    /**
     * The maximum number of results to return in a single response. Default is
     * 10, minimum is 1, maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 8;</code>
     */
    private $page_size = 0;

    /**
     * @param string $parent  Required. Name of the source to groupBy. If no location is specified,
     *                        finding is assumed to be in global.
     *                        The following list shows some examples:
     *
     *                        + `organizations/[organization_id]/sources/[source_id]`
     *                        +
     *                        `organizations/[organization_id]/sources/[source_id]/locations/[location_id]`
     *                        + `folders/[folder_id]/sources/[source_id]`
     *                        + `folders/[folder_id]/sources/[source_id]/locations/[location_id]`
     *                        + `projects/[project_id]/sources/[source_id]`
     *                        + `projects/[project_id]/sources/[source_id]/locations/[location_id]`
     *
     *                        To groupBy across all sources provide a source_id of `-`. The following
     *                        list shows some examples:
     *
     *                        + `organizations/{organization_id}/sources/-`
     *                        + `organizations/{organization_id}/sources/-/locations/[location_id]`
     *                        + `folders/{folder_id}/sources/-`
     *                        + `folders/{folder_id}/sources/-/locations/[location_id]`
     *                        + `projects/{project_id}/sources/-`
     *                        + `projects/{project_id}/sources/-/locations/[location_id]`
     *                        Please see {@see SecurityCenterClient::sourceName()} for help formatting this field.
     * @param string $groupBy Required. Expression that defines what assets fields to use for grouping.
     *                        The string value should follow SQL syntax: comma separated list of fields.
     *                        For example: "parent,resource_name".
     *
     * @return \Google\Cloud\SecurityCenter\V2\GroupFindingsRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $groupBy): self
    {
        return (new self())
            ->setParent($parent)
            ->setGroupBy($groupBy);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the source to groupBy. If no location is specified,
     *           finding is assumed to be in global.
     *            The following list shows some examples:
     *           + `organizations/[organization_id]/sources/[source_id]`
     *           +
     *           `organizations/[organization_id]/sources/[source_id]/locations/[location_id]`
     *           + `folders/[folder_id]/sources/[source_id]`
     *           + `folders/[folder_id]/sources/[source_id]/locations/[location_id]`
     *           + `projects/[project_id]/sources/[source_id]`
     *           + `projects/[project_id]/sources/[source_id]/locations/[location_id]`
     *           To groupBy across all sources provide a source_id of `-`. The following
     *           list shows some examples:
     *           + `organizations/{organization_id}/sources/-`
     *           + `organizations/{organization_id}/sources/-/locations/[location_id]`
     *           + `folders/{folder_id}/sources/-`
     *           + `folders/{folder_id}/sources/-/locations/[location_id]`
     *           + `projects/{project_id}/sources/-`
     *           + `projects/{project_id}/sources/-/locations/[location_id]`
     *     @type string $filter
     *           Expression that defines the filter to apply across findings.
     *           The expression is a list of one or more restrictions combined via logical
     *           operators `AND` and `OR`.
     *           Parentheses are supported, and `OR` has higher precedence than `AND`.
     *           Restrictions have the form `<field> <operator> <value>` and may have a `-`
     *           character in front of them to indicate negation. Examples include:
     *            * name
     *            * security_marks.marks.marka
     *           The supported operators are:
     *           * `=` for all value types.
     *           * `>`, `<`, `>=`, `<=` for integer values.
     *           * `:`, meaning substring matching, for strings.
     *           The supported value types are:
     *           * string literals in quotes.
     *           * integer literals without quotes.
     *           * boolean literals `true` and `false` without quotes.
     *           The following field and operator combinations are supported:
     *           * name: `=`
     *           * parent: `=`, `:`
     *           * resource_name: `=`, `:`
     *           * state: `=`, `:`
     *           * category: `=`, `:`
     *           * external_uri: `=`, `:`
     *           * event_time: `=`, `>`, `<`, `>=`, `<=`
     *             Usage: This should be milliseconds since epoch or an RFC3339 string.
     *             Examples:
     *               `event_time = "2019-06-10T16:07:18-07:00"`
     *               `event_time = 1560208038000`
     *           * severity: `=`, `:`
     *           * security_marks.marks: `=`, `:`
     *           * resource:
     *             * resource.name: `=`, `:`
     *             * resource.parent_name: `=`, `:`
     *             * resource.parent_display_name: `=`, `:`
     *             * resource.project_name: `=`, `:`
     *             * resource.project_display_name: `=`, `:`
     *             * resource.type: `=`, `:`
     *     @type string $group_by
     *           Required. Expression that defines what assets fields to use for grouping.
     *           The string value should follow SQL syntax: comma separated list of fields.
     *           For example: "parent,resource_name".
     *     @type string $page_token
     *           The value returned by the last `GroupFindingsResponse`; indicates
     *           that this is a continuation of a prior `GroupFindings` call, and
     *           that the system should return the next page of data.
     *     @type int $page_size
     *           The maximum number of results to return in a single response. Default is
     *           10, minimum is 1, maximum is 1000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the source to groupBy. If no location is specified,
     * finding is assumed to be in global.
     *  The following list shows some examples:
     * + `organizations/[organization_id]/sources/[source_id]`
     * +
     * `organizations/[organization_id]/sources/[source_id]/locations/[location_id]`
     * + `folders/[folder_id]/sources/[source_id]`
     * + `folders/[folder_id]/sources/[source_id]/locations/[location_id]`
     * + `projects/[project_id]/sources/[source_id]`
     * + `projects/[project_id]/sources/[source_id]/locations/[location_id]`
     * To groupBy across all sources provide a source_id of `-`. The following
     * list shows some examples:
     * + `organizations/{organization_id}/sources/-`
     * + `organizations/{organization_id}/sources/-/locations/[location_id]`
     * + `folders/{folder_id}/sources/-`
     * + `folders/{folder_id}/sources/-/locations/[location_id]`
     * + `projects/{project_id}/sources/-`
     * + `projects/{project_id}/sources/-/locations/[location_id]`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the source to groupBy. If no location is specified,
     * finding is assumed to be in global.
     *  The following list shows some examples:
     * + `organizations/[organization_id]/sources/[source_id]`
     * +
     * `organizations/[organization_id]/sources/[source_id]/locations/[location_id]`
     * + `folders/[folder_id]/sources/[source_id]`
     * + `folders/[folder_id]/sources/[source_id]/locations/[location_id]`
     * + `projects/[project_id]/sources/[source_id]`
     * + `projects/[project_id]/sources/[source_id]/locations/[location_id]`
     * To groupBy across all sources provide a source_id of `-`. The following
     * list shows some examples:
     * + `organizations/{organization_id}/sources/-`
     * + `organizations/{organization_id}/sources/-/locations/[location_id]`
     * + `folders/{folder_id}/sources/-`
     * + `folders/{folder_id}/sources/-/locations/[location_id]`
     * + `projects/{project_id}/sources/-`
     * + `projects/{project_id}/sources/-/locations/[location_id]`
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
     * Expression that defines the filter to apply across findings.
     * The expression is a list of one or more restrictions combined via logical
     * operators `AND` and `OR`.
     * Parentheses are supported, and `OR` has higher precedence than `AND`.
     * Restrictions have the form `<field> <operator> <value>` and may have a `-`
     * character in front of them to indicate negation. Examples include:
     *  * name
     *  * security_marks.marks.marka
     * The supported operators are:
     * * `=` for all value types.
     * * `>`, `<`, `>=`, `<=` for integer values.
     * * `:`, meaning substring matching, for strings.
     * The supported value types are:
     * * string literals in quotes.
     * * integer literals without quotes.
     * * boolean literals `true` and `false` without quotes.
     * The following field and operator combinations are supported:
     * * name: `=`
     * * parent: `=`, `:`
     * * resource_name: `=`, `:`
     * * state: `=`, `:`
     * * category: `=`, `:`
     * * external_uri: `=`, `:`
     * * event_time: `=`, `>`, `<`, `>=`, `<=`
     *   Usage: This should be milliseconds since epoch or an RFC3339 string.
     *   Examples:
     *     `event_time = "2019-06-10T16:07:18-07:00"`
     *     `event_time = 1560208038000`
     * * severity: `=`, `:`
     * * security_marks.marks: `=`, `:`
     * * resource:
     *   * resource.name: `=`, `:`
     *   * resource.parent_name: `=`, `:`
     *   * resource.parent_display_name: `=`, `:`
     *   * resource.project_name: `=`, `:`
     *   * resource.project_display_name: `=`, `:`
     *   * resource.type: `=`, `:`
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Expression that defines the filter to apply across findings.
     * The expression is a list of one or more restrictions combined via logical
     * operators `AND` and `OR`.
     * Parentheses are supported, and `OR` has higher precedence than `AND`.
     * Restrictions have the form `<field> <operator> <value>` and may have a `-`
     * character in front of them to indicate negation. Examples include:
     *  * name
     *  * security_marks.marks.marka
     * The supported operators are:
     * * `=` for all value types.
     * * `>`, `<`, `>=`, `<=` for integer values.
     * * `:`, meaning substring matching, for strings.
     * The supported value types are:
     * * string literals in quotes.
     * * integer literals without quotes.
     * * boolean literals `true` and `false` without quotes.
     * The following field and operator combinations are supported:
     * * name: `=`
     * * parent: `=`, `:`
     * * resource_name: `=`, `:`
     * * state: `=`, `:`
     * * category: `=`, `:`
     * * external_uri: `=`, `:`
     * * event_time: `=`, `>`, `<`, `>=`, `<=`
     *   Usage: This should be milliseconds since epoch or an RFC3339 string.
     *   Examples:
     *     `event_time = "2019-06-10T16:07:18-07:00"`
     *     `event_time = 1560208038000`
     * * severity: `=`, `:`
     * * security_marks.marks: `=`, `:`
     * * resource:
     *   * resource.name: `=`, `:`
     *   * resource.parent_name: `=`, `:`
     *   * resource.parent_display_name: `=`, `:`
     *   * resource.project_name: `=`, `:`
     *   * resource.project_display_name: `=`, `:`
     *   * resource.type: `=`, `:`
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
     * Required. Expression that defines what assets fields to use for grouping.
     * The string value should follow SQL syntax: comma separated list of fields.
     * For example: "parent,resource_name".
     *
     * Generated from protobuf field <code>string group_by = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getGroupBy()
    {
        return $this->group_by;
    }

    /**
     * Required. Expression that defines what assets fields to use for grouping.
     * The string value should follow SQL syntax: comma separated list of fields.
     * For example: "parent,resource_name".
     *
     * Generated from protobuf field <code>string group_by = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setGroupBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_by = $var;

        return $this;
    }

    /**
     * The value returned by the last `GroupFindingsResponse`; indicates
     * that this is a continuation of a prior `GroupFindings` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 7;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value returned by the last `GroupFindingsResponse`; indicates
     * that this is a continuation of a prior `GroupFindings` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * The maximum number of results to return in a single response. Default is
     * 10, minimum is 1, maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 8;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of results to return in a single response. Default is
     * 10, minimum is 1, maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

