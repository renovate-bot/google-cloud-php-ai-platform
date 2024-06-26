<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Content blob.
 * It's preferred to send as [text][google.cloud.aiplatform.v1.Part.text]
 * directly rather than raw bytes.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Blob</code>
 */
class Blob extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The IANA standard MIME type of the source data.
     *
     * Generated from protobuf field <code>string mime_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $mime_type = '';
    /**
     * Required. Raw bytes.
     *
     * Generated from protobuf field <code>bytes data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mime_type
     *           Required. The IANA standard MIME type of the source data.
     *     @type string $data
     *           Required. Raw bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The IANA standard MIME type of the source data.
     *
     * Generated from protobuf field <code>string mime_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Required. The IANA standard MIME type of the source data.
     *
     * Generated from protobuf field <code>string mime_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Required. Raw bytes.
     *
     * Generated from protobuf field <code>bytes data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Required. Raw bytes.
     *
     * Generated from protobuf field <code>bytes data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

