<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_service.proto

namespace Google\Cloud\AIPlatform\V1\NearestNeighborSearchOperationMetadata\RecordError;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata.RecordError.RecordErrorType</code>
 */
class RecordErrorType
{
    /**
     * Default, shall not be used.
     *
     * Generated from protobuf enum <code>ERROR_TYPE_UNSPECIFIED = 0;</code>
     */
    const ERROR_TYPE_UNSPECIFIED = 0;
    /**
     * The record is empty.
     *
     * Generated from protobuf enum <code>EMPTY_LINE = 1;</code>
     */
    const EMPTY_LINE = 1;
    /**
     * Invalid json format.
     *
     * Generated from protobuf enum <code>INVALID_JSON_SYNTAX = 2;</code>
     */
    const INVALID_JSON_SYNTAX = 2;
    /**
     * Invalid csv format.
     *
     * Generated from protobuf enum <code>INVALID_CSV_SYNTAX = 3;</code>
     */
    const INVALID_CSV_SYNTAX = 3;
    /**
     * Invalid avro format.
     *
     * Generated from protobuf enum <code>INVALID_AVRO_SYNTAX = 4;</code>
     */
    const INVALID_AVRO_SYNTAX = 4;
    /**
     * The embedding id is not valid.
     *
     * Generated from protobuf enum <code>INVALID_EMBEDDING_ID = 5;</code>
     */
    const INVALID_EMBEDDING_ID = 5;
    /**
     * The size of the embedding vectors does not match with the specified
     * dimension.
     *
     * Generated from protobuf enum <code>EMBEDDING_SIZE_MISMATCH = 6;</code>
     */
    const EMBEDDING_SIZE_MISMATCH = 6;
    /**
     * The `namespace` field is missing.
     *
     * Generated from protobuf enum <code>NAMESPACE_MISSING = 7;</code>
     */
    const NAMESPACE_MISSING = 7;
    /**
     * Generic catch-all error. Only used for validation failure where the
     * root cause cannot be easily retrieved programmatically.
     *
     * Generated from protobuf enum <code>PARSING_ERROR = 8;</code>
     */
    const PARSING_ERROR = 8;
    /**
     * There are multiple restricts with the same `namespace` value.
     *
     * Generated from protobuf enum <code>DUPLICATE_NAMESPACE = 9;</code>
     */
    const DUPLICATE_NAMESPACE = 9;
    /**
     * Numeric restrict has operator specified in datapoint.
     *
     * Generated from protobuf enum <code>OP_IN_DATAPOINT = 10;</code>
     */
    const OP_IN_DATAPOINT = 10;
    /**
     * Numeric restrict has multiple values specified.
     *
     * Generated from protobuf enum <code>MULTIPLE_VALUES = 11;</code>
     */
    const MULTIPLE_VALUES = 11;
    /**
     * Numeric restrict has invalid numeric value specified.
     *
     * Generated from protobuf enum <code>INVALID_NUMERIC_VALUE = 12;</code>
     */
    const INVALID_NUMERIC_VALUE = 12;
    /**
     * File is not in UTF_8 format.
     *
     * Generated from protobuf enum <code>INVALID_ENCODING = 13;</code>
     */
    const INVALID_ENCODING = 13;
    /**
     * Token restrict value is invalid.
     *
     * Generated from protobuf enum <code>INVALID_TOKEN_VALUE = 15;</code>
     */
    const INVALID_TOKEN_VALUE = 15;

    private static $valueToName = [
        self::ERROR_TYPE_UNSPECIFIED => 'ERROR_TYPE_UNSPECIFIED',
        self::EMPTY_LINE => 'EMPTY_LINE',
        self::INVALID_JSON_SYNTAX => 'INVALID_JSON_SYNTAX',
        self::INVALID_CSV_SYNTAX => 'INVALID_CSV_SYNTAX',
        self::INVALID_AVRO_SYNTAX => 'INVALID_AVRO_SYNTAX',
        self::INVALID_EMBEDDING_ID => 'INVALID_EMBEDDING_ID',
        self::EMBEDDING_SIZE_MISMATCH => 'EMBEDDING_SIZE_MISMATCH',
        self::NAMESPACE_MISSING => 'NAMESPACE_MISSING',
        self::PARSING_ERROR => 'PARSING_ERROR',
        self::DUPLICATE_NAMESPACE => 'DUPLICATE_NAMESPACE',
        self::OP_IN_DATAPOINT => 'OP_IN_DATAPOINT',
        self::MULTIPLE_VALUES => 'MULTIPLE_VALUES',
        self::INVALID_NUMERIC_VALUE => 'INVALID_NUMERIC_VALUE',
        self::INVALID_ENCODING => 'INVALID_ENCODING',
        self::INVALID_TOKEN_VALUE => 'INVALID_TOKEN_VALUE',
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


