<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for creating a BigQuery export.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.CreateBigQueryExportRequest</code>
 */
class CreateBigQueryExportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the parent resource of the new BigQuery export. Its
     * format is "organizations/[organization_id]/locations/[location_id]",
     * "folders/[folder_id]/locations/[location_id]", or
     * "projects/[project_id]/locations/[location_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The BigQuery export being created.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.BigQueryExport big_query_export = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $big_query_export = null;
    /**
     * Required. Unique identifier provided by the client within the parent scope.
     * It must consist of only lowercase letters, numbers, and hyphens, must start
     * with a letter, must end with either a letter or a number, and must be 63
     * characters or less.
     *
     * Generated from protobuf field <code>string big_query_export_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $big_query_export_id = '';

    /**
     * @param string                                         $parent           Required. The name of the parent resource of the new BigQuery export. Its
     *                                                                         format is "organizations/[organization_id]/locations/[location_id]",
     *                                                                         "folders/[folder_id]/locations/[location_id]", or
     *                                                                         "projects/[project_id]/locations/[location_id]". Please see
     *                                                                         {@see SecurityCenterClient::organizationLocationName()} for help formatting this field.
     * @param \Google\Cloud\SecurityCenter\V2\BigQueryExport $bigQueryExport   Required. The BigQuery export being created.
     * @param string                                         $bigQueryExportId Required. Unique identifier provided by the client within the parent scope.
     *                                                                         It must consist of only lowercase letters, numbers, and hyphens, must start
     *                                                                         with a letter, must end with either a letter or a number, and must be 63
     *                                                                         characters or less.
     *
     * @return \Google\Cloud\SecurityCenter\V2\CreateBigQueryExportRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\SecurityCenter\V2\BigQueryExport $bigQueryExport, string $bigQueryExportId): self
    {
        return (new self())
            ->setParent($parent)
            ->setBigQueryExport($bigQueryExport)
            ->setBigQueryExportId($bigQueryExportId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the parent resource of the new BigQuery export. Its
     *           format is "organizations/[organization_id]/locations/[location_id]",
     *           "folders/[folder_id]/locations/[location_id]", or
     *           "projects/[project_id]/locations/[location_id]".
     *     @type \Google\Cloud\SecurityCenter\V2\BigQueryExport $big_query_export
     *           Required. The BigQuery export being created.
     *     @type string $big_query_export_id
     *           Required. Unique identifier provided by the client within the parent scope.
     *           It must consist of only lowercase letters, numbers, and hyphens, must start
     *           with a letter, must end with either a letter or a number, and must be 63
     *           characters or less.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the parent resource of the new BigQuery export. Its
     * format is "organizations/[organization_id]/locations/[location_id]",
     * "folders/[folder_id]/locations/[location_id]", or
     * "projects/[project_id]/locations/[location_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the parent resource of the new BigQuery export. Its
     * format is "organizations/[organization_id]/locations/[location_id]",
     * "folders/[folder_id]/locations/[location_id]", or
     * "projects/[project_id]/locations/[location_id]".
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
     * Required. The BigQuery export being created.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.BigQueryExport big_query_export = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V2\BigQueryExport|null
     */
    public function getBigQueryExport()
    {
        return $this->big_query_export;
    }

    public function hasBigQueryExport()
    {
        return isset($this->big_query_export);
    }

    public function clearBigQueryExport()
    {
        unset($this->big_query_export);
    }

    /**
     * Required. The BigQuery export being created.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.BigQueryExport big_query_export = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V2\BigQueryExport $var
     * @return $this
     */
    public function setBigQueryExport($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V2\BigQueryExport::class);
        $this->big_query_export = $var;

        return $this;
    }

    /**
     * Required. Unique identifier provided by the client within the parent scope.
     * It must consist of only lowercase letters, numbers, and hyphens, must start
     * with a letter, must end with either a letter or a number, and must be 63
     * characters or less.
     *
     * Generated from protobuf field <code>string big_query_export_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBigQueryExportId()
    {
        return $this->big_query_export_id;
    }

    /**
     * Required. Unique identifier provided by the client within the parent scope.
     * It must consist of only lowercase letters, numbers, and hyphens, must start
     * with a letter, must end with either a letter or a number, and must be 63
     * characters or less.
     *
     * Generated from protobuf field <code>string big_query_export_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBigQueryExportId($var)
    {
        GPBUtil::checkString($var, True);
        $this->big_query_export_id = $var;

        return $this;
    }

}

