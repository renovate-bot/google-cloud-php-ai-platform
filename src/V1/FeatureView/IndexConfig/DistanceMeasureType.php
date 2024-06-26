<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_view.proto

namespace Google\Cloud\AIPlatform\V1\FeatureView\IndexConfig;

use UnexpectedValueException;

/**
 * The distance measure used in nearest neighbor search.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.FeatureView.IndexConfig.DistanceMeasureType</code>
 */
class DistanceMeasureType
{
    /**
     * Should not be set.
     *
     * Generated from protobuf enum <code>DISTANCE_MEASURE_TYPE_UNSPECIFIED = 0;</code>
     */
    const DISTANCE_MEASURE_TYPE_UNSPECIFIED = 0;
    /**
     * Euclidean (L_2) Distance.
     *
     * Generated from protobuf enum <code>SQUARED_L2_DISTANCE = 1;</code>
     */
    const SQUARED_L2_DISTANCE = 1;
    /**
     * Cosine Distance. Defined as 1 - cosine similarity.
     * We strongly suggest using DOT_PRODUCT_DISTANCE + UNIT_L2_NORM instead
     * of COSINE distance. Our algorithms have been more optimized for
     * DOT_PRODUCT distance which, when combined with UNIT_L2_NORM, is
     * mathematically equivalent to COSINE distance and results in the same
     * ranking.
     *
     * Generated from protobuf enum <code>COSINE_DISTANCE = 2;</code>
     */
    const COSINE_DISTANCE = 2;
    /**
     * Dot Product Distance. Defined as a negative of the dot product.
     *
     * Generated from protobuf enum <code>DOT_PRODUCT_DISTANCE = 3;</code>
     */
    const DOT_PRODUCT_DISTANCE = 3;

    private static $valueToName = [
        self::DISTANCE_MEASURE_TYPE_UNSPECIFIED => 'DISTANCE_MEASURE_TYPE_UNSPECIFIED',
        self::SQUARED_L2_DISTANCE => 'SQUARED_L2_DISTANCE',
        self::COSINE_DISTANCE => 'COSINE_DISTANCE',
        self::DOT_PRODUCT_DISTANCE => 'DOT_PRODUCT_DISTANCE',
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


