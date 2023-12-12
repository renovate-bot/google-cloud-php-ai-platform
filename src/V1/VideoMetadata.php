<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata describes the input video content.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.VideoMetadata</code>
 */
class VideoMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The start offset of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_offset = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $start_offset = null;
    /**
     * Optional. The end offset of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_offset = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $end_offset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $start_offset
     *           Optional. The start offset of the video.
     *     @type \Google\Protobuf\Duration $end_offset
     *           Optional. The end offset of the video.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The start offset of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_offset = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getStartOffset()
    {
        return $this->start_offset;
    }

    public function hasStartOffset()
    {
        return isset($this->start_offset);
    }

    public function clearStartOffset()
    {
        unset($this->start_offset);
    }

    /**
     * Optional. The start offset of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_offset = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_offset = $var;

        return $this;
    }

    /**
     * Optional. The end offset of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_offset = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getEndOffset()
    {
        return $this->end_offset;
    }

    public function hasEndOffset()
    {
        return isset($this->end_offset);
    }

    public function clearEndOffset()
    {
        unset($this->end_offset);
    }

    /**
     * Optional. The end offset of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_offset = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setEndOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->end_offset = $var;

        return $this;
    }

}

