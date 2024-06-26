<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Stats of the Index.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.IndexStats</code>
 */
class IndexStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The number of dense vectors in the Index.
     *
     * Generated from protobuf field <code>int64 vectors_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $vectors_count = 0;
    /**
     * Output only. The number of sparse vectors in the Index.
     *
     * Generated from protobuf field <code>int64 sparse_vectors_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $sparse_vectors_count = 0;
    /**
     * Output only. The number of shards in the Index.
     *
     * Generated from protobuf field <code>int32 shards_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $shards_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $vectors_count
     *           Output only. The number of dense vectors in the Index.
     *     @type int|string $sparse_vectors_count
     *           Output only. The number of sparse vectors in the Index.
     *     @type int $shards_count
     *           Output only. The number of shards in the Index.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Index::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The number of dense vectors in the Index.
     *
     * Generated from protobuf field <code>int64 vectors_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getVectorsCount()
    {
        return $this->vectors_count;
    }

    /**
     * Output only. The number of dense vectors in the Index.
     *
     * Generated from protobuf field <code>int64 vectors_count = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setVectorsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->vectors_count = $var;

        return $this;
    }

    /**
     * Output only. The number of sparse vectors in the Index.
     *
     * Generated from protobuf field <code>int64 sparse_vectors_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSparseVectorsCount()
    {
        return $this->sparse_vectors_count;
    }

    /**
     * Output only. The number of sparse vectors in the Index.
     *
     * Generated from protobuf field <code>int64 sparse_vectors_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSparseVectorsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->sparse_vectors_count = $var;

        return $this;
    }

    /**
     * Output only. The number of shards in the Index.
     *
     * Generated from protobuf field <code>int32 shards_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getShardsCount()
    {
        return $this->shards_count;
    }

    /**
     * Output only. The number of shards in the Index.
     *
     * Generated from protobuf field <code>int32 shards_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setShardsCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->shards_count = $var;

        return $this;
    }

}

