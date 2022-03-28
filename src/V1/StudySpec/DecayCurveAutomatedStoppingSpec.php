<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/study.proto

namespace Google\Cloud\AIPlatform\V1\StudySpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The decay curve automated stopping rule builds a Gaussian Process
 * Regressor to predict the final objective value of a Trial based on the
 * already completed Trials and the intermediate measurements of the current
 * Trial. Early stopping is requested for the current Trial if there is very
 * low probability to exceed the optimal value found so far.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.StudySpec.DecayCurveAutomatedStoppingSpec</code>
 */
class DecayCurveAutomatedStoppingSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * True if [Measurement.elapsed_duration][google.cloud.aiplatform.v1.Measurement.elapsed_duration] is used as the x-axis of each
     * Trials Decay Curve. Otherwise, [Measurement.step_count][google.cloud.aiplatform.v1.Measurement.step_count] will be used
     * as the x-axis.
     *
     * Generated from protobuf field <code>bool use_elapsed_duration = 1;</code>
     */
    private $use_elapsed_duration = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $use_elapsed_duration
     *           True if [Measurement.elapsed_duration][google.cloud.aiplatform.v1.Measurement.elapsed_duration] is used as the x-axis of each
     *           Trials Decay Curve. Otherwise, [Measurement.step_count][google.cloud.aiplatform.v1.Measurement.step_count] will be used
     *           as the x-axis.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Study::initOnce();
        parent::__construct($data);
    }

    /**
     * True if [Measurement.elapsed_duration][google.cloud.aiplatform.v1.Measurement.elapsed_duration] is used as the x-axis of each
     * Trials Decay Curve. Otherwise, [Measurement.step_count][google.cloud.aiplatform.v1.Measurement.step_count] will be used
     * as the x-axis.
     *
     * Generated from protobuf field <code>bool use_elapsed_duration = 1;</code>
     * @return bool
     */
    public function getUseElapsedDuration()
    {
        return $this->use_elapsed_duration;
    }

    /**
     * True if [Measurement.elapsed_duration][google.cloud.aiplatform.v1.Measurement.elapsed_duration] is used as the x-axis of each
     * Trials Decay Curve. Otherwise, [Measurement.step_count][google.cloud.aiplatform.v1.Measurement.step_count] will be used
     * as the x-axis.
     *
     * Generated from protobuf field <code>bool use_elapsed_duration = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseElapsedDuration($var)
    {
        GPBUtil::checkBool($var);
        $this->use_elapsed_duration = $var;

        return $this;
    }

}


