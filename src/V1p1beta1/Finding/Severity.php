<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/finding.proto

namespace Google\Cloud\SecurityCenter\V1p1beta1\Finding;

use UnexpectedValueException;

/**
 * The severity of the finding.
 *
 * Protobuf type <code>google.cloud.securitycenter.v1p1beta1.Finding.Severity</code>
 */
class Severity
{
    /**
     * No severity specified. The default value.
     *
     * Generated from protobuf enum <code>SEVERITY_UNSPECIFIED = 0;</code>
     */
    const SEVERITY_UNSPECIFIED = 0;
    /**
     * Critical severity.
     *
     * Generated from protobuf enum <code>CRITICAL = 1;</code>
     */
    const CRITICAL = 1;
    /**
     * High severity.
     *
     * Generated from protobuf enum <code>HIGH = 2;</code>
     */
    const HIGH = 2;
    /**
     * Medium severity.
     *
     * Generated from protobuf enum <code>MEDIUM = 3;</code>
     */
    const MEDIUM = 3;
    /**
     * Low severity.
     *
     * Generated from protobuf enum <code>LOW = 4;</code>
     */
    const LOW = 4;

    private static $valueToName = [
        self::SEVERITY_UNSPECIFIED => 'SEVERITY_UNSPECIFIED',
        self::CRITICAL => 'CRITICAL',
        self::HIGH => 'HIGH',
        self::MEDIUM => 'MEDIUM',
        self::LOW => 'LOW',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Severity::class, \Google\Cloud\SecurityCenter\V1p1beta1\Finding_Severity::class);

