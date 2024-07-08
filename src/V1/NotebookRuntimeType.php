<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/notebook_runtime.proto

namespace Google\Cloud\AIPlatform\V1;

use UnexpectedValueException;

/**
 * Represents a notebook runtime type.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.NotebookRuntimeType</code>
 */
class NotebookRuntimeType
{
    /**
     * Unspecified notebook runtime type, NotebookRuntimeType will default to
     * USER_DEFINED.
     *
     * Generated from protobuf enum <code>NOTEBOOK_RUNTIME_TYPE_UNSPECIFIED = 0;</code>
     */
    const NOTEBOOK_RUNTIME_TYPE_UNSPECIFIED = 0;
    /**
     * runtime or template with coustomized configurations from user.
     *
     * Generated from protobuf enum <code>USER_DEFINED = 1;</code>
     */
    const USER_DEFINED = 1;
    /**
     * runtime or template with system defined configurations.
     *
     * Generated from protobuf enum <code>ONE_CLICK = 2;</code>
     */
    const ONE_CLICK = 2;

    private static $valueToName = [
        self::NOTEBOOK_RUNTIME_TYPE_UNSPECIFIED => 'NOTEBOOK_RUNTIME_TYPE_UNSPECIFIED',
        self::USER_DEFINED => 'USER_DEFINED',
        self::ONE_CLICK => 'ONE_CLICK',
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
