<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Results for rouge metric.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.RougeResults</code>
 */
class RougeResults extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Rouge metric values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.RougeMetricValue rouge_metric_values = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $rouge_metric_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\RougeMetricValue>|\Google\Protobuf\Internal\RepeatedField $rouge_metric_values
     *           Output only. Rouge metric values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Rouge metric values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.RougeMetricValue rouge_metric_values = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRougeMetricValues()
    {
        return $this->rouge_metric_values;
    }

    /**
     * Output only. Rouge metric values.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.RougeMetricValue rouge_metric_values = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\RougeMetricValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRougeMetricValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\RougeMetricValue::class);
        $this->rouge_metric_values = $arr;

        return $this;
    }

}

