<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/custom_job.proto

namespace Google\Cloud\AIPlatform\V1\Scheduling;

use UnexpectedValueException;

/**
 * Optional. This determines which type of scheduling strategy to use. Right
 * now users have two options such as STANDARD which will use regular on
 * demand resources to schedule the job, the other is SPOT which would
 * leverage spot resources alongwith regular resources to schedule
 * the job.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.Scheduling.Strategy</code>
 */
class Strategy
{
    /**
     * Strategy will default to STANDARD.
     *
     * Generated from protobuf enum <code>STRATEGY_UNSPECIFIED = 0;</code>
     */
    const STRATEGY_UNSPECIFIED = 0;
    /**
     * Regular on-demand provisioning strategy.
     *
     * Generated from protobuf enum <code>ON_DEMAND = 1 [deprecated = true];</code>
     */
    const ON_DEMAND = 1;
    /**
     * Low cost by making potential use of spot resources.
     *
     * Generated from protobuf enum <code>LOW_COST = 2 [deprecated = true];</code>
     */
    const LOW_COST = 2;
    /**
     * Standard provisioning strategy uses regular on-demand resources.
     *
     * Generated from protobuf enum <code>STANDARD = 3;</code>
     */
    const STANDARD = 3;
    /**
     * Spot provisioning strategy uses spot resources.
     *
     * Generated from protobuf enum <code>SPOT = 4;</code>
     */
    const SPOT = 4;

    private static $valueToName = [
        self::STRATEGY_UNSPECIFIED => 'STRATEGY_UNSPECIFIED',
        self::ON_DEMAND => 'ON_DEMAND',
        self::LOW_COST => 'LOW_COST',
        self::STANDARD => 'STANDARD',
        self::SPOT => 'SPOT',
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


