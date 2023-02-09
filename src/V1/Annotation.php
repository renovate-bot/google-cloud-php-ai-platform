<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/annotation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Used to assign specific AnnotationSpec to a particular area of a DataItem or
 * the whole part of the DataItem.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Annotation</code>
 */
class Annotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the Annotation.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. Google Cloud Storage URI points to a YAML file describing
     * [payload][google.cloud.aiplatform.v1.Annotation.payload]. The schema is
     * defined as an [OpenAPI 3.0.2 Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * The schema files that can be used here are found in
     * gs://google-cloud-aiplatform/schema/dataset/annotation/, note that the
     * chosen schema must be consistent with the parent Dataset's
     * [metadata][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri].
     *
     * Generated from protobuf field <code>string payload_schema_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $payload_schema_uri = '';
    /**
     * Required. The schema of the payload can be found in
     * [payload_schema][google.cloud.aiplatform.v1.Annotation.payload_schema_uri].
     *
     * Generated from protobuf field <code>.google.protobuf.Value payload = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $payload = null;
    /**
     * Output only. Timestamp when this Annotation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Timestamp when this Annotation was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. Used to perform consistent read-modify-write updates. If not set,
     * a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';
    /**
     * Output only. The source of the Annotation.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.UserActionReference annotation_source = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $annotation_source = null;
    /**
     * Optional. The labels with user-defined metadata to organize your
     * Annotations.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * No more than 64 user labels can be associated with one Annotation(System
     * labels are excluded).
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable. Following system labels exist for each Annotation:
     * * "aiplatform.googleapis.com/annotation_set_name":
     *   optional, name of the UI's annotation set this Annotation belongs to.
     *   If not set, the Annotation is not visible in the UI.
     * * "aiplatform.googleapis.com/payload_schema":
     *   output only, its value is the
     *   [payload_schema's][google.cloud.aiplatform.v1.Annotation.payload_schema_uri]
     *   title.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the Annotation.
     *     @type string $payload_schema_uri
     *           Required. Google Cloud Storage URI points to a YAML file describing
     *           [payload][google.cloud.aiplatform.v1.Annotation.payload]. The schema is
     *           defined as an [OpenAPI 3.0.2 Schema
     *           Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     *           The schema files that can be used here are found in
     *           gs://google-cloud-aiplatform/schema/dataset/annotation/, note that the
     *           chosen schema must be consistent with the parent Dataset's
     *           [metadata][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri].
     *     @type \Google\Protobuf\Value $payload
     *           Required. The schema of the payload can be found in
     *           [payload_schema][google.cloud.aiplatform.v1.Annotation.payload_schema_uri].
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this Annotation was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this Annotation was last updated.
     *     @type string $etag
     *           Optional. Used to perform consistent read-modify-write updates. If not set,
     *           a blind "overwrite" update happens.
     *     @type \Google\Cloud\AIPlatform\V1\UserActionReference $annotation_source
     *           Output only. The source of the Annotation.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata to organize your
     *           Annotations.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           No more than 64 user labels can be associated with one Annotation(System
     *           labels are excluded).
     *           See https://goo.gl/xmQnxf for more information and examples of labels.
     *           System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     *           and are immutable. Following system labels exist for each Annotation:
     *           * "aiplatform.googleapis.com/annotation_set_name":
     *             optional, name of the UI's annotation set this Annotation belongs to.
     *             If not set, the Annotation is not visible in the UI.
     *           * "aiplatform.googleapis.com/payload_schema":
     *             output only, its value is the
     *             [payload_schema's][google.cloud.aiplatform.v1.Annotation.payload_schema_uri]
     *             title.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Annotation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the Annotation.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the Annotation.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Google Cloud Storage URI points to a YAML file describing
     * [payload][google.cloud.aiplatform.v1.Annotation.payload]. The schema is
     * defined as an [OpenAPI 3.0.2 Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * The schema files that can be used here are found in
     * gs://google-cloud-aiplatform/schema/dataset/annotation/, note that the
     * chosen schema must be consistent with the parent Dataset's
     * [metadata][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri].
     *
     * Generated from protobuf field <code>string payload_schema_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPayloadSchemaUri()
    {
        return $this->payload_schema_uri;
    }

    /**
     * Required. Google Cloud Storage URI points to a YAML file describing
     * [payload][google.cloud.aiplatform.v1.Annotation.payload]. The schema is
     * defined as an [OpenAPI 3.0.2 Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * The schema files that can be used here are found in
     * gs://google-cloud-aiplatform/schema/dataset/annotation/, note that the
     * chosen schema must be consistent with the parent Dataset's
     * [metadata][google.cloud.aiplatform.v1.Dataset.metadata_schema_uri].
     *
     * Generated from protobuf field <code>string payload_schema_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPayloadSchemaUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->payload_schema_uri = $var;

        return $this;
    }

    /**
     * Required. The schema of the payload can be found in
     * [payload_schema][google.cloud.aiplatform.v1.Annotation.payload_schema_uri].
     *
     * Generated from protobuf field <code>.google.protobuf.Value payload = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getPayload()
    {
        return $this->payload;
    }

    public function hasPayload()
    {
        return isset($this->payload);
    }

    public function clearPayload()
    {
        unset($this->payload);
    }

    /**
     * Required. The schema of the payload can be found in
     * [payload_schema][google.cloud.aiplatform.v1.Annotation.payload_schema_uri].
     *
     * Generated from protobuf field <code>.google.protobuf.Value payload = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->payload = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this Annotation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Timestamp when this Annotation was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this Annotation was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Timestamp when this Annotation was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Used to perform consistent read-modify-write updates. If not set,
     * a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. Used to perform consistent read-modify-write updates. If not set,
     * a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Output only. The source of the Annotation.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.UserActionReference annotation_source = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\UserActionReference|null
     */
    public function getAnnotationSource()
    {
        return $this->annotation_source;
    }

    public function hasAnnotationSource()
    {
        return isset($this->annotation_source);
    }

    public function clearAnnotationSource()
    {
        unset($this->annotation_source);
    }

    /**
     * Output only. The source of the Annotation.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.UserActionReference annotation_source = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\UserActionReference $var
     * @return $this
     */
    public function setAnnotationSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\UserActionReference::class);
        $this->annotation_source = $var;

        return $this;
    }

    /**
     * Optional. The labels with user-defined metadata to organize your
     * Annotations.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * No more than 64 user labels can be associated with one Annotation(System
     * labels are excluded).
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable. Following system labels exist for each Annotation:
     * * "aiplatform.googleapis.com/annotation_set_name":
     *   optional, name of the UI's annotation set this Annotation belongs to.
     *   If not set, the Annotation is not visible in the UI.
     * * "aiplatform.googleapis.com/payload_schema":
     *   output only, its value is the
     *   [payload_schema's][google.cloud.aiplatform.v1.Annotation.payload_schema_uri]
     *   title.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels with user-defined metadata to organize your
     * Annotations.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * No more than 64 user labels can be associated with one Annotation(System
     * labels are excluded).
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     * System reserved label keys are prefixed with "aiplatform.googleapis.com/"
     * and are immutable. Following system labels exist for each Annotation:
     * * "aiplatform.googleapis.com/annotation_set_name":
     *   optional, name of the UI's annotation set this Annotation belongs to.
     *   If not set, the Annotation is not visible in the UI.
     * * "aiplatform.googleapis.com/payload_schema":
     *   output only, its value is the
     *   [payload_schema's][google.cloud.aiplatform.v1.Annotation.payload_schema_uri]
     *   title.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

