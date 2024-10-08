<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input for question answering quality metric.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.QuestionAnsweringQualityInput</code>
 */
class QuestionAnsweringQualityInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Spec for question answering quality score metric.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.QuestionAnsweringQualitySpec metric_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $metric_spec = null;
    /**
     * Required. Question answering quality instance.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.QuestionAnsweringQualityInstance instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\QuestionAnsweringQualitySpec $metric_spec
     *           Required. Spec for question answering quality score metric.
     *     @type \Google\Cloud\AIPlatform\V1\QuestionAnsweringQualityInstance $instance
     *           Required. Question answering quality instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Spec for question answering quality score metric.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.QuestionAnsweringQualitySpec metric_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\QuestionAnsweringQualitySpec|null
     */
    public function getMetricSpec()
    {
        return $this->metric_spec;
    }

    public function hasMetricSpec()
    {
        return isset($this->metric_spec);
    }

    public function clearMetricSpec()
    {
        unset($this->metric_spec);
    }

    /**
     * Required. Spec for question answering quality score metric.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.QuestionAnsweringQualitySpec metric_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\QuestionAnsweringQualitySpec $var
     * @return $this
     */
    public function setMetricSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\QuestionAnsweringQualitySpec::class);
        $this->metric_spec = $var;

        return $this;
    }

    /**
     * Required. Question answering quality instance.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.QuestionAnsweringQualityInstance instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\QuestionAnsweringQualityInstance|null
     */
    public function getInstance()
    {
        return $this->instance;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Required. Question answering quality instance.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.QuestionAnsweringQualityInstance instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\QuestionAnsweringQualityInstance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\QuestionAnsweringQualityInstance::class);
        $this->instance = $var;

        return $this;
    }

}

