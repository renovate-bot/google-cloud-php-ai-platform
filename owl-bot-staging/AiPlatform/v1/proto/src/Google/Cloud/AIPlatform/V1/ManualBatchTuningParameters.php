<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/manual_batch_tuning_parameters.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Manual batch tuning parameters.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ManualBatchTuningParameters</code>
 */
class ManualBatchTuningParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The number of the records (e.g. instances) of the operation given in
     * each batch to a machine replica. Machine type, and size of a single
     * record should be considered when setting this parameter, higher value
     * speeds up the batch operation's execution, but too high value will result
     * in a whole batch not fitting in a machine's memory, and the whole
     * operation will fail.
     * The default value is 4.
     *
     * Generated from protobuf field <code>int32 batch_size = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $batch_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $batch_size
     *           Immutable. The number of the records (e.g. instances) of the operation given in
     *           each batch to a machine replica. Machine type, and size of a single
     *           record should be considered when setting this parameter, higher value
     *           speeds up the batch operation's execution, but too high value will result
     *           in a whole batch not fitting in a machine's memory, and the whole
     *           operation will fail.
     *           The default value is 4.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ManualBatchTuningParameters::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The number of the records (e.g. instances) of the operation given in
     * each batch to a machine replica. Machine type, and size of a single
     * record should be considered when setting this parameter, higher value
     * speeds up the batch operation's execution, but too high value will result
     * in a whole batch not fitting in a machine's memory, and the whole
     * operation will fail.
     * The default value is 4.
     *
     * Generated from protobuf field <code>int32 batch_size = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getBatchSize()
    {
        return $this->batch_size;
    }

    /**
     * Immutable. The number of the records (e.g. instances) of the operation given in
     * each batch to a machine replica. Machine type, and size of a single
     * record should be considered when setting this parameter, higher value
     * speeds up the batch operation's execution, but too high value will result
     * in a whole batch not fitting in a machine's memory, and the whole
     * operation will fail.
     * The default value is 4.
     *
     * Generated from protobuf field <code>int32 batch_size = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setBatchSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->batch_size = $var;

        return $this;
    }

}

