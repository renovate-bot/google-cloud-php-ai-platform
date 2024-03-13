<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1\Candidate;

use UnexpectedValueException;

/**
 * The reason why the model stopped generating tokens.
 * If empty, the model has not stopped generating the tokens.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.Candidate.FinishReason</code>
 */
class FinishReason
{
    /**
     * The finish reason is unspecified.
     *
     * Generated from protobuf enum <code>FINISH_REASON_UNSPECIFIED = 0;</code>
     */
    const FINISH_REASON_UNSPECIFIED = 0;
    /**
     * Natural stop point of the model or provided stop sequence.
     *
     * Generated from protobuf enum <code>STOP = 1;</code>
     */
    const STOP = 1;
    /**
     * The maximum number of tokens as specified in the request was reached.
     *
     * Generated from protobuf enum <code>MAX_TOKENS = 2;</code>
     */
    const MAX_TOKENS = 2;
    /**
     * The token generation was stopped as the response was flagged for safety
     * reasons. NOTE: When streaming the Candidate.content will be empty if
     * content filters blocked the output.
     *
     * Generated from protobuf enum <code>SAFETY = 3;</code>
     */
    const SAFETY = 3;
    /**
     * The token generation was stopped as the response was flagged for
     * unauthorized citations.
     *
     * Generated from protobuf enum <code>RECITATION = 4;</code>
     */
    const RECITATION = 4;
    /**
     * All other reasons that stopped the token generation
     *
     * Generated from protobuf enum <code>OTHER = 5;</code>
     */
    const OTHER = 5;
    /**
     * The token generation was stopped as the response was flagged for the
     * terms which are included from the terminology blocklist.
     *
     * Generated from protobuf enum <code>BLOCKLIST = 6;</code>
     */
    const BLOCKLIST = 6;
    /**
     * The token generation was stopped as the response was flagged for
     * the prohibited contents.
     *
     * Generated from protobuf enum <code>PROHIBITED_CONTENT = 7;</code>
     */
    const PROHIBITED_CONTENT = 7;
    /**
     * The token generation was stopped as the response was flagged for
     * Sensitive Personally Identifiable Information (SPII) contents.
     *
     * Generated from protobuf enum <code>SPII = 8;</code>
     */
    const SPII = 8;

    private static $valueToName = [
        self::FINISH_REASON_UNSPECIFIED => 'FINISH_REASON_UNSPECIFIED',
        self::STOP => 'STOP',
        self::MAX_TOKENS => 'MAX_TOKENS',
        self::SAFETY => 'SAFETY',
        self::RECITATION => 'RECITATION',
        self::OTHER => 'OTHER',
        self::BLOCKLIST => 'BLOCKLIST',
        self::PROHIBITED_CONTENT => 'PROHIBITED_CONTENT',
        self::SPII => 'SPII',
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


