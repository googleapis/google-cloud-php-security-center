<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/indicator.proto

namespace Google\Cloud\SecurityCenter\V2\Indicator\ProcessSignature;

use UnexpectedValueException;

/**
 * Possible resource types to be associated with a signature.
 *
 * Protobuf type <code>google.cloud.securitycenter.v2.Indicator.ProcessSignature.SignatureType</code>
 */
class SignatureType
{
    /**
     * The default signature type.
     *
     * Generated from protobuf enum <code>SIGNATURE_TYPE_UNSPECIFIED = 0;</code>
     */
    const SIGNATURE_TYPE_UNSPECIFIED = 0;
    /**
     * Used for signatures concerning processes.
     *
     * Generated from protobuf enum <code>SIGNATURE_TYPE_PROCESS = 1;</code>
     */
    const SIGNATURE_TYPE_PROCESS = 1;
    /**
     * Used for signatures concerning disks.
     *
     * Generated from protobuf enum <code>SIGNATURE_TYPE_FILE = 2;</code>
     */
    const SIGNATURE_TYPE_FILE = 2;

    private static $valueToName = [
        self::SIGNATURE_TYPE_UNSPECIFIED => 'SIGNATURE_TYPE_UNSPECIFIED',
        self::SIGNATURE_TYPE_PROCESS => 'SIGNATURE_TYPE_PROCESS',
        self::SIGNATURE_TYPE_FILE => 'SIGNATURE_TYPE_FILE',
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


