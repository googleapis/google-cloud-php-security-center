<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating a SecurityMarks resource.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.UpdateSecurityMarksRequest</code>
 */
class UpdateSecurityMarksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The security marks resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.SecurityMarks security_marks = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $security_marks = null;
    /**
     * The FieldMask to use when updating the security marks resource.
     * The field mask must not contain duplicate fields.
     * If empty or set to "marks", all marks will be replaced.  Individual
     * marks can be updated using "marks.<mark_key>".
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\SecurityCenter\V2\SecurityMarks $securityMarks Required. The security marks resource to update.
     * @param \Google\Protobuf\FieldMask                    $updateMask    The FieldMask to use when updating the security marks resource.
     *
     *                                                                     The field mask must not contain duplicate fields.
     *                                                                     If empty or set to "marks", all marks will be replaced.  Individual
     *                                                                     marks can be updated using "marks.<mark_key>".
     *
     * @return \Google\Cloud\SecurityCenter\V2\UpdateSecurityMarksRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\SecurityCenter\V2\SecurityMarks $securityMarks, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setSecurityMarks($securityMarks)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V2\SecurityMarks $security_marks
     *           Required. The security marks resource to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The FieldMask to use when updating the security marks resource.
     *           The field mask must not contain duplicate fields.
     *           If empty or set to "marks", all marks will be replaced.  Individual
     *           marks can be updated using "marks.<mark_key>".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The security marks resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.SecurityMarks security_marks = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V2\SecurityMarks|null
     */
    public function getSecurityMarks()
    {
        return $this->security_marks;
    }

    public function hasSecurityMarks()
    {
        return isset($this->security_marks);
    }

    public function clearSecurityMarks()
    {
        unset($this->security_marks);
    }

    /**
     * Required. The security marks resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.SecurityMarks security_marks = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V2\SecurityMarks $var
     * @return $this
     */
    public function setSecurityMarks($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V2\SecurityMarks::class);
        $this->security_marks = $var;

        return $this;
    }

    /**
     * The FieldMask to use when updating the security marks resource.
     * The field mask must not contain duplicate fields.
     * If empty or set to "marks", all marks will be replaced.  Individual
     * marks can be updated using "marks.<mark_key>".
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The FieldMask to use when updating the security marks resource.
     * The field mask must not contain duplicate fields.
     * If empty or set to "marks", all marks will be replaced.  Individual
     * marks can be updated using "marks.<mark_key>".
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

