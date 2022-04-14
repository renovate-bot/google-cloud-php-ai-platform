<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [MetadataService.PurgeContexts][google.cloud.aiplatform.v1.MetadataService.PurgeContexts].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PurgeContextsResponse</code>
 */
class PurgeContextsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of Contexts that this request deleted (or, if `force` is false,
     * the number of Contexts that will be deleted). This can be an estimate.
     *
     * Generated from protobuf field <code>int64 purge_count = 1;</code>
     */
    protected $purge_count = 0;
    /**
     * A sample of the Context names that will be deleted.
     * Only populated if `force` is set to false. The maximum number of samples is
     * 100 (it is possible to return fewer).
     *
     * Generated from protobuf field <code>repeated string purge_sample = 2 [(.google.api.resource_reference) = {</code>
     */
    private $purge_sample;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $purge_count
     *           The number of Contexts that this request deleted (or, if `force` is false,
     *           the number of Contexts that will be deleted). This can be an estimate.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $purge_sample
     *           A sample of the Context names that will be deleted.
     *           Only populated if `force` is set to false. The maximum number of samples is
     *           100 (it is possible to return fewer).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of Contexts that this request deleted (or, if `force` is false,
     * the number of Contexts that will be deleted). This can be an estimate.
     *
     * Generated from protobuf field <code>int64 purge_count = 1;</code>
     * @return int|string
     */
    public function getPurgeCount()
    {
        return $this->purge_count;
    }

    /**
     * The number of Contexts that this request deleted (or, if `force` is false,
     * the number of Contexts that will be deleted). This can be an estimate.
     *
     * Generated from protobuf field <code>int64 purge_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPurgeCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->purge_count = $var;

        return $this;
    }

    /**
     * A sample of the Context names that will be deleted.
     * Only populated if `force` is set to false. The maximum number of samples is
     * 100 (it is possible to return fewer).
     *
     * Generated from protobuf field <code>repeated string purge_sample = 2 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPurgeSample()
    {
        return $this->purge_sample;
    }

    /**
     * A sample of the Context names that will be deleted.
     * Only populated if `force` is set to false. The maximum number of samples is
     * 100 (it is possible to return fewer).
     *
     * Generated from protobuf field <code>repeated string purge_sample = 2 [(.google.api.resource_reference) = {</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPurgeSample($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->purge_sample = $arr;

        return $this;
    }

}

