<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Spec for pairwise metric result.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PairwiseMetricResult</code>
 */
class PairwiseMetricResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Pairwise metric choice.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PairwiseChoice pairwise_choice = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $pairwise_choice = 0;
    /**
     * Output only. Explanation for pairwise metric score.
     *
     * Generated from protobuf field <code>string explanation = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $explanation = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pairwise_choice
     *           Output only. Pairwise metric choice.
     *     @type string $explanation
     *           Output only. Explanation for pairwise metric score.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Pairwise metric choice.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PairwiseChoice pairwise_choice = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPairwiseChoice()
    {
        return $this->pairwise_choice;
    }

    /**
     * Output only. Pairwise metric choice.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PairwiseChoice pairwise_choice = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPairwiseChoice($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\PairwiseChoice::class);
        $this->pairwise_choice = $var;

        return $this;
    }

    /**
     * Output only. Explanation for pairwise metric score.
     *
     * Generated from protobuf field <code>string explanation = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * Output only. Explanation for pairwise metric score.
     *
     * Generated from protobuf field <code>string explanation = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setExplanation($var)
    {
        GPBUtil::checkString($var, True);
        $this->explanation = $var;

        return $this;
    }

}

