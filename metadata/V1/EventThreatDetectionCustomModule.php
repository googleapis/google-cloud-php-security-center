<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/event_threat_detection_custom_module.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class EventThreatDetectionCustomModule
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

Igoogle/cloud/securitycenter/v1/event_threat_detection_custom_module.protogoogle.cloud.securitycenter.v1google/api/resource.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
 EventThreatDetectionCustomModule
name (	B�A\'
config (2.google.protobuf.Struct_
ancestor_module (	BF�A�A@
>securitycenter.googleapis.com/EventThreatDetectionCustomModulej
enablement_state (2P.google.cloud.securitycenter.v1.EventThreatDetectionCustomModule.EnablementState
type (	
display_name (	
description (	4
update_time (2.google.protobuf.TimestampB�A
last_editor	 (	B�A"]
EnablementState 
ENABLEMENT_STATE_UNSPECIFIED 
ENABLED
DISABLED
	INHERITED:��A�
>securitycenter.googleapis.com/EventThreatDetectionCustomModulePorganizations/{organization}/eventThreatDetectionSettings/customModules/{module}Dfolders/{folder}/eventThreatDetectionSettings/customModules/{module}Fprojects/{project}/eventThreatDetectionSettings/customModules/{module}B�
"com.google.cloud.securitycenter.v1B%EventThreatDetectionCustomModuleProtoPZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

