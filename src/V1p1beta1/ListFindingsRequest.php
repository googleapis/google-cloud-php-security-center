<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for listing findings.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1p1beta1.ListFindingsRequest</code>
 */
class ListFindingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the source the findings belong to. Its format is
     * "organizations/[organization_id]/sources/[source_id]". To list across all
     * sources provide a source_id of `-`. For example:
     * organizations/{organization_id}/sources/-
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
     *  * source_properties.a_property
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
     * name: `=`
     * parent: `=`, `:`
     * resource_name: `=`, `:`
     * state: `=`, `:`
     * category: `=`, `:`
     * external_uri: `=`, `:`
     * event_time: `=`, `>`, `<`, `>=`, `<=`
     *   Usage: This should be milliseconds since epoch or an RFC3339 string.
     *   Examples:
     *     `event_time = "2019-06-10T16:07:18-07:00"`
     *     `event_time = 1560208038000`
     * security_marks.marks: `=`, `:`
     * source_properties: `=`, `:`, `>`, `<`, `>=`, `<=`
     * For example, `source_properties.size = 100` is a valid filter string.
     * Use a partial match on the empty string to filter based on a property
     * existing: `source_properties.my_property : ""`
     * Use a negated partial match on the empty string to filter based on a
     * property not existing: `-source_properties.my_property : ""`
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * Expression that defines what fields and order to use for sorting. The
     * string value should follow SQL syntax: comma separated list of fields. For
     * example: "name,resource_properties.a_property". The default sorting order
     * is ascending. To specify descending order for a field, a suffix " desc"
     * should be appended to the field name. For example: "name
     * desc,source_properties.a_property". Redundant space characters in the
     * syntax are insignificant. "name desc,source_properties.a_property" and "
     * name     desc  ,   source_properties.a_property  " are equivalent.
     * The following fields are supported:
     * name
     * parent
     * state
     * category
     * resource_name
     * event_time
     * source_properties
     * security_marks.marks
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     */
    private $order_by = '';
    /**
     * Time used as a reference point when filtering findings. The filter is
     * limited to findings existing at the supplied time and their values are
     * those at that specific time. Absence of this field will default to the
     * API's version of NOW.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     */
    private $read_time = null;
    /**
     * When compare_duration is set, the ListFindingsResult's "state_change"
     * attribute is updated to indicate whether the finding had its state changed,
     * the finding's state remained unchanged, or if the finding was added in any
     * state during the compare_duration period of time that precedes the
     * read_time. This is the time between (read_time - compare_duration) and
     * read_time.
     * The state_change value is derived based on the presence and state of the
     * finding at the two points in time. Intermediate state changes between the
     * two times don't affect the result. For example, the results aren't affected
     * if the finding is made inactive and then active again.
     * Possible "state_change" values when compare_duration is specified:
     * * "CHANGED":   indicates that the finding was present and matched the given
     *                  filter at the start of compare_duration, but changed its
     *                  state at read_time.
     * * "UNCHANGED": indicates that the finding was present and matched the given
     *                  filter at the start of compare_duration and did not change
     *                  state at read_time.
     * * "ADDED":     indicates that the finding did not match the given filter or
     *                  was not present at the start of compare_duration, but was
     *                  present at read_time.
     * * "REMOVED":   indicates that the finding was present and matched the
     *                  filter at the start of compare_duration, but did not match
     *                  the filter at read_time.
     * If compare_duration is not specified, then the only possible state_change
     * is "UNUSED", which will be the state_change set for all findings present at
     * read_time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration compare_duration = 5;</code>
     */
    private $compare_duration = null;
    /**
     * A field mask to specify the Finding fields to be listed in the response.
     * An empty field mask will list all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 7;</code>
     */
    private $field_mask = null;
    /**
     * The value returned by the last `ListFindingsResponse`; indicates
     * that this is a continuation of a prior `ListFindings` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 8;</code>
     */
    private $page_token = '';
    /**
     * The maximum number of results to return in a single response. Default is
     * 10, minimum is 1, maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 9;</code>
     */
    private $page_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the source the findings belong to. Its format is
     *           "organizations/[organization_id]/sources/[source_id]". To list across all
     *           sources provide a source_id of `-`. For example:
     *           organizations/{organization_id}/sources/-
     *     @type string $filter
     *           Expression that defines the filter to apply across findings.
     *           The expression is a list of one or more restrictions combined via logical
     *           operators `AND` and `OR`.
     *           Parentheses are supported, and `OR` has higher precedence than `AND`.
     *           Restrictions have the form `<field> <operator> <value>` and may have a `-`
     *           character in front of them to indicate negation. Examples include:
     *            * name
     *            * source_properties.a_property
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
     *           name: `=`
     *           parent: `=`, `:`
     *           resource_name: `=`, `:`
     *           state: `=`, `:`
     *           category: `=`, `:`
     *           external_uri: `=`, `:`
     *           event_time: `=`, `>`, `<`, `>=`, `<=`
     *             Usage: This should be milliseconds since epoch or an RFC3339 string.
     *             Examples:
     *               `event_time = "2019-06-10T16:07:18-07:00"`
     *               `event_time = 1560208038000`
     *           security_marks.marks: `=`, `:`
     *           source_properties: `=`, `:`, `>`, `<`, `>=`, `<=`
     *           For example, `source_properties.size = 100` is a valid filter string.
     *           Use a partial match on the empty string to filter based on a property
     *           existing: `source_properties.my_property : ""`
     *           Use a negated partial match on the empty string to filter based on a
     *           property not existing: `-source_properties.my_property : ""`
     *     @type string $order_by
     *           Expression that defines what fields and order to use for sorting. The
     *           string value should follow SQL syntax: comma separated list of fields. For
     *           example: "name,resource_properties.a_property". The default sorting order
     *           is ascending. To specify descending order for a field, a suffix " desc"
     *           should be appended to the field name. For example: "name
     *           desc,source_properties.a_property". Redundant space characters in the
     *           syntax are insignificant. "name desc,source_properties.a_property" and "
     *           name     desc  ,   source_properties.a_property  " are equivalent.
     *           The following fields are supported:
     *           name
     *           parent
     *           state
     *           category
     *           resource_name
     *           event_time
     *           source_properties
     *           security_marks.marks
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Time used as a reference point when filtering findings. The filter is
     *           limited to findings existing at the supplied time and their values are
     *           those at that specific time. Absence of this field will default to the
     *           API's version of NOW.
     *     @type \Google\Protobuf\Duration $compare_duration
     *           When compare_duration is set, the ListFindingsResult's "state_change"
     *           attribute is updated to indicate whether the finding had its state changed,
     *           the finding's state remained unchanged, or if the finding was added in any
     *           state during the compare_duration period of time that precedes the
     *           read_time. This is the time between (read_time - compare_duration) and
     *           read_time.
     *           The state_change value is derived based on the presence and state of the
     *           finding at the two points in time. Intermediate state changes between the
     *           two times don't affect the result. For example, the results aren't affected
     *           if the finding is made inactive and then active again.
     *           Possible "state_change" values when compare_duration is specified:
     *           * "CHANGED":   indicates that the finding was present and matched the given
     *                            filter at the start of compare_duration, but changed its
     *                            state at read_time.
     *           * "UNCHANGED": indicates that the finding was present and matched the given
     *                            filter at the start of compare_duration and did not change
     *                            state at read_time.
     *           * "ADDED":     indicates that the finding did not match the given filter or
     *                            was not present at the start of compare_duration, but was
     *                            present at read_time.
     *           * "REMOVED":   indicates that the finding was present and matched the
     *                            filter at the start of compare_duration, but did not match
     *                            the filter at read_time.
     *           If compare_duration is not specified, then the only possible state_change
     *           is "UNUSED", which will be the state_change set for all findings present at
     *           read_time.
     *     @type \Google\Protobuf\FieldMask $field_mask
     *           A field mask to specify the Finding fields to be listed in the response.
     *           An empty field mask will list all fields.
     *     @type string $page_token
     *           The value returned by the last `ListFindingsResponse`; indicates
     *           that this is a continuation of a prior `ListFindings` call, and
     *           that the system should return the next page of data.
     *     @type int $page_size
     *           The maximum number of results to return in a single response. Default is
     *           10, minimum is 1, maximum is 1000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the source the findings belong to. Its format is
     * "organizations/[organization_id]/sources/[source_id]". To list across all
     * sources provide a source_id of `-`. For example:
     * organizations/{organization_id}/sources/-
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the source the findings belong to. Its format is
     * "organizations/[organization_id]/sources/[source_id]". To list across all
     * sources provide a source_id of `-`. For example:
     * organizations/{organization_id}/sources/-
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
     *  * source_properties.a_property
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
     * name: `=`
     * parent: `=`, `:`
     * resource_name: `=`, `:`
     * state: `=`, `:`
     * category: `=`, `:`
     * external_uri: `=`, `:`
     * event_time: `=`, `>`, `<`, `>=`, `<=`
     *   Usage: This should be milliseconds since epoch or an RFC3339 string.
     *   Examples:
     *     `event_time = "2019-06-10T16:07:18-07:00"`
     *     `event_time = 1560208038000`
     * security_marks.marks: `=`, `:`
     * source_properties: `=`, `:`, `>`, `<`, `>=`, `<=`
     * For example, `source_properties.size = 100` is a valid filter string.
     * Use a partial match on the empty string to filter based on a property
     * existing: `source_properties.my_property : ""`
     * Use a negated partial match on the empty string to filter based on a
     * property not existing: `-source_properties.my_property : ""`
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
     *  * source_properties.a_property
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
     * name: `=`
     * parent: `=`, `:`
     * resource_name: `=`, `:`
     * state: `=`, `:`
     * category: `=`, `:`
     * external_uri: `=`, `:`
     * event_time: `=`, `>`, `<`, `>=`, `<=`
     *   Usage: This should be milliseconds since epoch or an RFC3339 string.
     *   Examples:
     *     `event_time = "2019-06-10T16:07:18-07:00"`
     *     `event_time = 1560208038000`
     * security_marks.marks: `=`, `:`
     * source_properties: `=`, `:`, `>`, `<`, `>=`, `<=`
     * For example, `source_properties.size = 100` is a valid filter string.
     * Use a partial match on the empty string to filter based on a property
     * existing: `source_properties.my_property : ""`
     * Use a negated partial match on the empty string to filter based on a
     * property not existing: `-source_properties.my_property : ""`
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
     * Expression that defines what fields and order to use for sorting. The
     * string value should follow SQL syntax: comma separated list of fields. For
     * example: "name,resource_properties.a_property". The default sorting order
     * is ascending. To specify descending order for a field, a suffix " desc"
     * should be appended to the field name. For example: "name
     * desc,source_properties.a_property". Redundant space characters in the
     * syntax are insignificant. "name desc,source_properties.a_property" and "
     * name     desc  ,   source_properties.a_property  " are equivalent.
     * The following fields are supported:
     * name
     * parent
     * state
     * category
     * resource_name
     * event_time
     * source_properties
     * security_marks.marks
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Expression that defines what fields and order to use for sorting. The
     * string value should follow SQL syntax: comma separated list of fields. For
     * example: "name,resource_properties.a_property". The default sorting order
     * is ascending. To specify descending order for a field, a suffix " desc"
     * should be appended to the field name. For example: "name
     * desc,source_properties.a_property". Redundant space characters in the
     * syntax are insignificant. "name desc,source_properties.a_property" and "
     * name     desc  ,   source_properties.a_property  " are equivalent.
     * The following fields are supported:
     * name
     * parent
     * state
     * category
     * resource_name
     * event_time
     * source_properties
     * security_marks.marks
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Time used as a reference point when filtering findings. The filter is
     * limited to findings existing at the supplied time and their values are
     * those at that specific time. Absence of this field will default to the
     * API's version of NOW.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getReadTime()
    {
        return $this->read_time;
    }

    /**
     * Time used as a reference point when filtering findings. The filter is
     * limited to findings existing at the supplied time and their values are
     * those at that specific time. Absence of this field will default to the
     * API's version of NOW.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

    /**
     * When compare_duration is set, the ListFindingsResult's "state_change"
     * attribute is updated to indicate whether the finding had its state changed,
     * the finding's state remained unchanged, or if the finding was added in any
     * state during the compare_duration period of time that precedes the
     * read_time. This is the time between (read_time - compare_duration) and
     * read_time.
     * The state_change value is derived based on the presence and state of the
     * finding at the two points in time. Intermediate state changes between the
     * two times don't affect the result. For example, the results aren't affected
     * if the finding is made inactive and then active again.
     * Possible "state_change" values when compare_duration is specified:
     * * "CHANGED":   indicates that the finding was present and matched the given
     *                  filter at the start of compare_duration, but changed its
     *                  state at read_time.
     * * "UNCHANGED": indicates that the finding was present and matched the given
     *                  filter at the start of compare_duration and did not change
     *                  state at read_time.
     * * "ADDED":     indicates that the finding did not match the given filter or
     *                  was not present at the start of compare_duration, but was
     *                  present at read_time.
     * * "REMOVED":   indicates that the finding was present and matched the
     *                  filter at the start of compare_duration, but did not match
     *                  the filter at read_time.
     * If compare_duration is not specified, then the only possible state_change
     * is "UNUSED", which will be the state_change set for all findings present at
     * read_time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration compare_duration = 5;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getCompareDuration()
    {
        return $this->compare_duration;
    }

    /**
     * When compare_duration is set, the ListFindingsResult's "state_change"
     * attribute is updated to indicate whether the finding had its state changed,
     * the finding's state remained unchanged, or if the finding was added in any
     * state during the compare_duration period of time that precedes the
     * read_time. This is the time between (read_time - compare_duration) and
     * read_time.
     * The state_change value is derived based on the presence and state of the
     * finding at the two points in time. Intermediate state changes between the
     * two times don't affect the result. For example, the results aren't affected
     * if the finding is made inactive and then active again.
     * Possible "state_change" values when compare_duration is specified:
     * * "CHANGED":   indicates that the finding was present and matched the given
     *                  filter at the start of compare_duration, but changed its
     *                  state at read_time.
     * * "UNCHANGED": indicates that the finding was present and matched the given
     *                  filter at the start of compare_duration and did not change
     *                  state at read_time.
     * * "ADDED":     indicates that the finding did not match the given filter or
     *                  was not present at the start of compare_duration, but was
     *                  present at read_time.
     * * "REMOVED":   indicates that the finding was present and matched the
     *                  filter at the start of compare_duration, but did not match
     *                  the filter at read_time.
     * If compare_duration is not specified, then the only possible state_change
     * is "UNUSED", which will be the state_change set for all findings present at
     * read_time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration compare_duration = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setCompareDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->compare_duration = $var;

        return $this;
    }

    /**
     * A field mask to specify the Finding fields to be listed in the response.
     * An empty field mask will list all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 7;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getFieldMask()
    {
        return $this->field_mask;
    }

    /**
     * A field mask to specify the Finding fields to be listed in the response.
     * An empty field mask will list all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 7;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setFieldMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->field_mask = $var;

        return $this;
    }

    /**
     * The value returned by the last `ListFindingsResponse`; indicates
     * that this is a continuation of a prior `ListFindings` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 8;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value returned by the last `ListFindingsResponse`; indicates
     * that this is a continuation of a prior `ListFindings` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 8;</code>
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
     * Generated from protobuf field <code>int32 page_size = 9;</code>
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
     * Generated from protobuf field <code>int32 page_size = 9;</code>
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

