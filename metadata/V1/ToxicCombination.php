<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/toxic_combination.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class ToxicCombination
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
6google/cloud/securitycenter/v1/toxic_combination.protogoogle.cloud.securitycenter.v1"K
ToxicCombination
attack_exposure_score (
related_findings (	B�
"com.google.cloud.securitycenter.v1BToxicCombinationProtoPZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

