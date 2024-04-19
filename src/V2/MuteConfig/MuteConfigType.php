<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/mute_config.proto

namespace Google\Cloud\SecurityCenter\V2\MuteConfig;

use UnexpectedValueException;

/**
 * The type of MuteConfig.
 *
 * Protobuf type <code>google.cloud.securitycenter.v2.MuteConfig.MuteConfigType</code>
 */
class MuteConfigType
{
    /**
     * Unused.
     *
     * Generated from protobuf enum <code>MUTE_CONFIG_TYPE_UNSPECIFIED = 0;</code>
     */
    const MUTE_CONFIG_TYPE_UNSPECIFIED = 0;
    /**
     * A static mute config, which sets the static mute state of future matching
     * findings to muted. Once the static mute state has been set, finding or
     * config modifications will not affect the state.
     *
     * Generated from protobuf enum <code>STATIC = 1;</code>
     */
    const PBSTATIC = 1;

    private static $valueToName = [
        self::MUTE_CONFIG_TYPE_UNSPECIFIED => 'MUTE_CONFIG_TYPE_UNSPECIFIED',
        self::PBSTATIC => 'STATIC',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MuteConfigType::class, \Google\Cloud\SecurityCenter\V2\MuteConfig_MuteConfigType::class);
