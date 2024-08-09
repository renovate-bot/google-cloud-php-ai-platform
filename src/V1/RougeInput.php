<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input for rouge metric.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.RougeInput</code>
 */
class RougeInput extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Spec for rouge score metric.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.RougeSpec metric_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $metric_spec = null;
    /**
     * Required. Repeated rouge instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.RougeInstance instances = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instances;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\RougeSpec $metric_spec
     *           Required. Spec for rouge score metric.
     *     @type array<\Google\Cloud\AIPlatform\V1\RougeInstance>|\Google\Protobuf\Internal\RepeatedField $instances
     *           Required. Repeated rouge instances.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Spec for rouge score metric.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.RougeSpec metric_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\RougeSpec|null
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
     * Required. Spec for rouge score metric.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.RougeSpec metric_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\RougeSpec $var
     * @return $this
     */
    public function setMetricSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\RougeSpec::class);
        $this->metric_spec = $var;

        return $this;
    }

    /**
     * Required. Repeated rouge instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.RougeInstance instances = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * Required. Repeated rouge instances.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.RougeInstance instances = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\RougeInstance>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\RougeInstance::class);
        $this->instances = $arr;

        return $this;
    }

}

