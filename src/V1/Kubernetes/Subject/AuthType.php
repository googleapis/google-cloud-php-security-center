<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/kubernetes.proto

namespace Google\Cloud\SecurityCenter\V1\Kubernetes\Subject;

use UnexpectedValueException;

/**
 * Auth types that can be used for the subject's kind field.
 *
 * Protobuf type <code>google.cloud.securitycenter.v1.Kubernetes.Subject.AuthType</code>
 */
class AuthType
{
    /**
     * Authentication is not specified.
     *
     * Generated from protobuf enum <code>AUTH_TYPE_UNSPECIFIED = 0;</code>
     */
    const AUTH_TYPE_UNSPECIFIED = 0;
    /**
     * User with valid certificate.
     *
     * Generated from protobuf enum <code>USER = 1;</code>
     */
    const USER = 1;
    /**
     * Users managed by Kubernetes API with credentials stored as secrets.
     *
     * Generated from protobuf enum <code>SERVICEACCOUNT = 2;</code>
     */
    const SERVICEACCOUNT = 2;
    /**
     * Collection of users.
     *
     * Generated from protobuf enum <code>GROUP = 3;</code>
     */
    const GROUP = 3;

    private static $valueToName = [
        self::AUTH_TYPE_UNSPECIFIED => 'AUTH_TYPE_UNSPECIFIED',
        self::USER => 'USER',
        self::SERVICEACCOUNT => 'SERVICEACCOUNT',
        self::GROUP => 'GROUP',
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
class_alias(AuthType::class, \Google\Cloud\SecurityCenter\V1\Kubernetes_Subject_AuthType::class);

