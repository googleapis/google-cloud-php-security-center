<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/valued_resource.proto

namespace Google\Cloud\SecurityCenter\V2\ValuedResource;

use UnexpectedValueException;

/**
 * How valuable the resource is.
 *
 * Protobuf type <code>google.cloud.securitycenter.v2.ValuedResource.ResourceValue</code>
 */
class ResourceValue
{
    /**
     * The resource value isn't specified.
     *
     * Generated from protobuf enum <code>RESOURCE_VALUE_UNSPECIFIED = 0;</code>
     */
    const RESOURCE_VALUE_UNSPECIFIED = 0;
    /**
     * This is a low-value resource.
     *
     * Generated from protobuf enum <code>RESOURCE_VALUE_LOW = 1;</code>
     */
    const RESOURCE_VALUE_LOW = 1;
    /**
     * This is a medium-value resource.
     *
     * Generated from protobuf enum <code>RESOURCE_VALUE_MEDIUM = 2;</code>
     */
    const RESOURCE_VALUE_MEDIUM = 2;
    /**
     * This is a high-value resource.
     *
     * Generated from protobuf enum <code>RESOURCE_VALUE_HIGH = 3;</code>
     */
    const RESOURCE_VALUE_HIGH = 3;

    private static $valueToName = [
        self::RESOURCE_VALUE_UNSPECIFIED => 'RESOURCE_VALUE_UNSPECIFIED',
        self::RESOURCE_VALUE_LOW => 'RESOURCE_VALUE_LOW',
        self::RESOURCE_VALUE_MEDIUM => 'RESOURCE_VALUE_MEDIUM',
        self::RESOURCE_VALUE_HIGH => 'RESOURCE_VALUE_HIGH',
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


