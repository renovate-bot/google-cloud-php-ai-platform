<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A representation of a collection of database items organized in a way that
 * allows for approximate nearest neighbor (a.k.a ANN) algorithms search.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Index</code>
 */
class Index extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the Index.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. The display name of the Index.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * The description of the Index.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Immutable. Points to a YAML file stored on Google Cloud Storage describing additional
     * information about the Index, that is specific to it. Unset if the Index
     * does not have any additional information.
     * The schema is defined as an OpenAPI 3.0.2 [Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * Note: The URI given on output will be immutable and probably different,
     * including the URI scheme, than the one given on input. The output URI will
     * point to a location where the user only has a read access.
     *
     * Generated from protobuf field <code>string metadata_schema_uri = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $metadata_schema_uri = '';
    /**
     * An additional information about the Index; the schema of the metadata can
     * be found in [metadata_schema][google.cloud.aiplatform.v1.Index.metadata_schema_uri].
     *
     * Generated from protobuf field <code>.google.protobuf.Value metadata = 6;</code>
     */
    private $metadata = null;
    /**
     * Output only. The pointers to DeployedIndexes created from this Index.
     * An Index can be only deleted if all its DeployedIndexes had been undeployed
     * first.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeployedIndexRef deployed_indexes = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $deployed_indexes;
    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 8;</code>
     */
    private $etag = '';
    /**
     * The labels with user-defined metadata to organize your Indexes.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9;</code>
     */
    private $labels;
    /**
     * Output only. Timestamp when this Index was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Timestamp when this Index was most recently updated.
     * This also includes any update to the contents of the Index.
     * Note that Operations working on this Index may have their
     * [Operations.metadata.generic_metadata.update_time]
     * [google.cloud.aiplatform.v1.GenericOperationMetadata.update_time] a little after the value of this
     * timestamp, yet that does not mean their results are not already reflected
     * in the Index. Result of any successfully completed Operation on the Index
     * is reflected in it.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. Stats of the index resource.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.IndexStats index_stats = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $index_stats = null;
    /**
     * Immutable. The update method to use with this Index. If not set, BATCH_UPDATE will be
     * used by default.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Index.IndexUpdateMethod index_update_method = 16 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $index_update_method = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the Index.
     *     @type string $display_name
     *           Required. The display name of the Index.
     *           The name can be up to 128 characters long and can be consist of any UTF-8
     *           characters.
     *     @type string $description
     *           The description of the Index.
     *     @type string $metadata_schema_uri
     *           Immutable. Points to a YAML file stored on Google Cloud Storage describing additional
     *           information about the Index, that is specific to it. Unset if the Index
     *           does not have any additional information.
     *           The schema is defined as an OpenAPI 3.0.2 [Schema
     *           Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     *           Note: The URI given on output will be immutable and probably different,
     *           including the URI scheme, than the one given on input. The output URI will
     *           point to a location where the user only has a read access.
     *     @type \Google\Protobuf\Value $metadata
     *           An additional information about the Index; the schema of the metadata can
     *           be found in [metadata_schema][google.cloud.aiplatform.v1.Index.metadata_schema_uri].
     *     @type array<\Google\Cloud\AIPlatform\V1\DeployedIndexRef>|\Google\Protobuf\Internal\RepeatedField $deployed_indexes
     *           Output only. The pointers to DeployedIndexes created from this Index.
     *           An Index can be only deleted if all its DeployedIndexes had been undeployed
     *           first.
     *     @type string $etag
     *           Used to perform consistent read-modify-write updates. If not set, a blind
     *           "overwrite" update happens.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels with user-defined metadata to organize your Indexes.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           See https://goo.gl/xmQnxf for more information and examples of labels.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this Index was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this Index was most recently updated.
     *           This also includes any update to the contents of the Index.
     *           Note that Operations working on this Index may have their
     *           [Operations.metadata.generic_metadata.update_time]
     *           [google.cloud.aiplatform.v1.GenericOperationMetadata.update_time] a little after the value of this
     *           timestamp, yet that does not mean their results are not already reflected
     *           in the Index. Result of any successfully completed Operation on the Index
     *           is reflected in it.
     *     @type \Google\Cloud\AIPlatform\V1\IndexStats $index_stats
     *           Output only. Stats of the index resource.
     *     @type int $index_update_method
     *           Immutable. The update method to use with this Index. If not set, BATCH_UPDATE will be
     *           used by default.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Index::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the Index.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the Index.
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
     * Required. The display name of the Index.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the Index.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The description of the Index.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the Index.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Immutable. Points to a YAML file stored on Google Cloud Storage describing additional
     * information about the Index, that is specific to it. Unset if the Index
     * does not have any additional information.
     * The schema is defined as an OpenAPI 3.0.2 [Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * Note: The URI given on output will be immutable and probably different,
     * including the URI scheme, than the one given on input. The output URI will
     * point to a location where the user only has a read access.
     *
     * Generated from protobuf field <code>string metadata_schema_uri = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getMetadataSchemaUri()
    {
        return $this->metadata_schema_uri;
    }

    /**
     * Immutable. Points to a YAML file stored on Google Cloud Storage describing additional
     * information about the Index, that is specific to it. Unset if the Index
     * does not have any additional information.
     * The schema is defined as an OpenAPI 3.0.2 [Schema
     * Object](https://github.com/OAI/OpenAPI-Specification/blob/main/versions/3.0.2.md#schemaObject).
     * Note: The URI given on output will be immutable and probably different,
     * including the URI scheme, than the one given on input. The output URI will
     * point to a location where the user only has a read access.
     *
     * Generated from protobuf field <code>string metadata_schema_uri = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setMetadataSchemaUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->metadata_schema_uri = $var;

        return $this;
    }

    /**
     * An additional information about the Index; the schema of the metadata can
     * be found in [metadata_schema][google.cloud.aiplatform.v1.Index.metadata_schema_uri].
     *
     * Generated from protobuf field <code>.google.protobuf.Value metadata = 6;</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * An additional information about the Index; the schema of the metadata can
     * be found in [metadata_schema][google.cloud.aiplatform.v1.Index.metadata_schema_uri].
     *
     * Generated from protobuf field <code>.google.protobuf.Value metadata = 6;</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Output only. The pointers to DeployedIndexes created from this Index.
     * An Index can be only deleted if all its DeployedIndexes had been undeployed
     * first.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeployedIndexRef deployed_indexes = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeployedIndexes()
    {
        return $this->deployed_indexes;
    }

    /**
     * Output only. The pointers to DeployedIndexes created from this Index.
     * An Index can be only deleted if all its DeployedIndexes had been undeployed
     * first.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DeployedIndexRef deployed_indexes = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\DeployedIndexRef>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeployedIndexes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\DeployedIndexRef::class);
        $this->deployed_indexes = $arr;

        return $this;
    }

    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 8;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Used to perform consistent read-modify-write updates. If not set, a blind
     * "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 8;</code>
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
     * The labels with user-defined metadata to organize your Indexes.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels with user-defined metadata to organize your Indexes.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 9;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. Timestamp when this Index was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Index was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Index was most recently updated.
     * This also includes any update to the contents of the Index.
     * Note that Operations working on this Index may have their
     * [Operations.metadata.generic_metadata.update_time]
     * [google.cloud.aiplatform.v1.GenericOperationMetadata.update_time] a little after the value of this
     * timestamp, yet that does not mean their results are not already reflected
     * in the Index. Result of any successfully completed Operation on the Index
     * is reflected in it.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this Index was most recently updated.
     * This also includes any update to the contents of the Index.
     * Note that Operations working on this Index may have their
     * [Operations.metadata.generic_metadata.update_time]
     * [google.cloud.aiplatform.v1.GenericOperationMetadata.update_time] a little after the value of this
     * timestamp, yet that does not mean their results are not already reflected
     * in the Index. Result of any successfully completed Operation on the Index
     * is reflected in it.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Stats of the index resource.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.IndexStats index_stats = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\IndexStats|null
     */
    public function getIndexStats()
    {
        return $this->index_stats;
    }

    public function hasIndexStats()
    {
        return isset($this->index_stats);
    }

    public function clearIndexStats()
    {
        unset($this->index_stats);
    }

    /**
     * Output only. Stats of the index resource.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.IndexStats index_stats = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\IndexStats $var
     * @return $this
     */
    public function setIndexStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\IndexStats::class);
        $this->index_stats = $var;

        return $this;
    }

    /**
     * Immutable. The update method to use with this Index. If not set, BATCH_UPDATE will be
     * used by default.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Index.IndexUpdateMethod index_update_method = 16 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getIndexUpdateMethod()
    {
        return $this->index_update_method;
    }

    /**
     * Immutable. The update method to use with this Index. If not set, BATCH_UPDATE will be
     * used by default.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Index.IndexUpdateMethod index_update_method = 16 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setIndexUpdateMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\Index\IndexUpdateMethod::class);
        $this->index_update_method = $var;

        return $this;
    }

}

