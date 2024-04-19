<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating a finding's state.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.SetFindingStateRequest</code>
 */
class SetFindingStateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name)
     * of the finding. If no location is specified, finding is assumed to be in
     * global. The following list shows some examples:
     * +
     * `organizations/{organization_id}/sources/{source_id}/findings/{finding_id}`
     * +
     * `organizations/{organization_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     * + `folders/{folder_id}/sources/{source_id}/findings/{finding_id}`
     * +
     * `folders/{folder_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     * + `projects/{project_id}/sources/{source_id}/findings/{finding_id}`
     * +
     * `projects/{project_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The desired State of the finding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Finding.State state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $state = 0;

    /**
     * @param string $name  Required. The [relative resource
     *                      name](https://cloud.google.com/apis/design/resource_names#relative_resource_name)
     *                      of the finding. If no location is specified, finding is assumed to be in
     *                      global. The following list shows some examples:
     *
     *                      +
     *                      `organizations/{organization_id}/sources/{source_id}/findings/{finding_id}`
     *                      +
     *                      `organizations/{organization_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     *                      + `folders/{folder_id}/sources/{source_id}/findings/{finding_id}`
     *                      +
     *                      `folders/{folder_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     *                      + `projects/{project_id}/sources/{source_id}/findings/{finding_id}`
     *                      +
     *                      `projects/{project_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     *                      Please see {@see SecurityCenterClient::findingName()} for help formatting this field.
     * @param int    $state Required. The desired State of the finding.
     *                      For allowed values, use constants defined on {@see \Google\Cloud\SecurityCenter\V2\Finding\State}
     *
     * @return \Google\Cloud\SecurityCenter\V2\SetFindingStateRequest
     *
     * @experimental
     */
    public static function build(string $name, int $state): self
    {
        return (new self())
            ->setName($name)
            ->setState($state);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The [relative resource
     *           name](https://cloud.google.com/apis/design/resource_names#relative_resource_name)
     *           of the finding. If no location is specified, finding is assumed to be in
     *           global. The following list shows some examples:
     *           +
     *           `organizations/{organization_id}/sources/{source_id}/findings/{finding_id}`
     *           +
     *           `organizations/{organization_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     *           + `folders/{folder_id}/sources/{source_id}/findings/{finding_id}`
     *           +
     *           `folders/{folder_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     *           + `projects/{project_id}/sources/{source_id}/findings/{finding_id}`
     *           +
     *           `projects/{project_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     *     @type int $state
     *           Required. The desired State of the finding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name)
     * of the finding. If no location is specified, finding is assumed to be in
     * global. The following list shows some examples:
     * +
     * `organizations/{organization_id}/sources/{source_id}/findings/{finding_id}`
     * +
     * `organizations/{organization_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     * + `folders/{folder_id}/sources/{source_id}/findings/{finding_id}`
     * +
     * `folders/{folder_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     * + `projects/{project_id}/sources/{source_id}/findings/{finding_id}`
     * +
     * `projects/{project_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The [relative resource
     * name](https://cloud.google.com/apis/design/resource_names#relative_resource_name)
     * of the finding. If no location is specified, finding is assumed to be in
     * global. The following list shows some examples:
     * +
     * `organizations/{organization_id}/sources/{source_id}/findings/{finding_id}`
     * +
     * `organizations/{organization_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     * + `folders/{folder_id}/sources/{source_id}/findings/{finding_id}`
     * +
     * `folders/{folder_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
     * + `projects/{project_id}/sources/{source_id}/findings/{finding_id}`
     * +
     * `projects/{project_id}/sources/{source_id}/locations/{location_id}/findings/{finding_id}`
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

    /**
     * Required. The desired State of the finding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Finding.State state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Required. The desired State of the finding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Finding.State state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V2\Finding\State::class);
        $this->state = $var;

        return $this;
    }

}
