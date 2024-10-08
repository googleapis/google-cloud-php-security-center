<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1\ListAssetsResponse\ListAssetsResult;

use UnexpectedValueException;

/**
 * The change in state of the asset.
 * When querying across two points in time this describes
 * the change between the two points: ADDED, REMOVED, or ACTIVE.
 * If there was no compare_duration supplied in the request the state change
 * will be: UNUSED
 *
 * Protobuf type <code>google.cloud.securitycenter.v1.ListAssetsResponse.ListAssetsResult.StateChange</code>
 */
class StateChange
{
    /**
     * State change is unused, this is the canonical default for this enum.
     *
     * Generated from protobuf enum <code>UNUSED = 0;</code>
     */
    const UNUSED = 0;
    /**
     * Asset was added between the points in time.
     *
     * Generated from protobuf enum <code>ADDED = 1;</code>
     */
    const ADDED = 1;
    /**
     * Asset was removed between the points in time.
     *
     * Generated from protobuf enum <code>REMOVED = 2;</code>
     */
    const REMOVED = 2;
    /**
     * Asset was present at both point(s) in time.
     *
     * Generated from protobuf enum <code>ACTIVE = 3;</code>
     */
    const ACTIVE = 3;

    private static $valueToName = [
        self::UNUSED => 'UNUSED',
        self::ADDED => 'ADDED',
        self::REMOVED => 'REMOVED',
        self::ACTIVE => 'ACTIVE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


