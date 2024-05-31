<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_group.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Vertex AI Feature Group.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeatureGroup</code>
 */
class FeatureGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Name of the FeatureGroup. Format:
     * `projects/{project}/locations/{location}/featureGroups/{featureGroup}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    private $name = '';
    /**
     * Output only. Timestamp when this FeatureGroup was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Timestamp when this FeatureGroup was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. Used to perform consistent read-modify-write updates. If not set,
     * a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';
    /**
     * Optional. The labels with user-defined metadata to organize your
     * FeatureGroup.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * No more than 64 user labels can be associated with one
     * FeatureGroup(System labels are excluded)." System reserved label keys
     * are prefixed with "aiplatform.googleapis.com/" and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Description of the FeatureGroup.
     *
     * Generated from protobuf field <code>string description = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\FeatureGroup\BigQuery $big_query
     *           Indicates that features for this group come from BigQuery Table/View.
     *           By default treats the source as a sparse time series source. The BigQuery
     *           source table or view must have at least one entity ID column and a column
     *           named `feature_timestamp`.
     *     @type string $name
     *           Identifier. Name of the FeatureGroup. Format:
     *           `projects/{project}/locations/{location}/featureGroups/{featureGroup}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this FeatureGroup was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this FeatureGroup was last updated.
     *     @type string $etag
     *           Optional. Used to perform consistent read-modify-write updates. If not set,
     *           a blind "overwrite" update happens.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata to organize your
     *           FeatureGroup.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           See https://goo.gl/xmQnxf for more information on and examples of labels.
     *           No more than 64 user labels can be associated with one
     *           FeatureGroup(System labels are excluded)." System reserved label keys
     *           are prefixed with "aiplatform.googleapis.com/" and are immutable.
     *     @type string $description
     *           Optional. Description of the FeatureGroup.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates that features for this group come from BigQuery Table/View.
     * By default treats the source as a sparse time series source. The BigQuery
     * source table or view must have at least one entity ID column and a column
     * named `feature_timestamp`.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureGroup.BigQuery big_query = 7;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureGroup\BigQuery|null
     */
    public function getBigQuery()
    {
        return $this->readOneof(7);
    }

    public function hasBigQuery()
    {
        return $this->hasOneof(7);
    }

    /**
     * Indicates that features for this group come from BigQuery Table/View.
     * By default treats the source as a sparse time series source. The BigQuery
     * source table or view must have at least one entity ID column and a column
     * named `feature_timestamp`.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureGroup.BigQuery big_query = 7;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureGroup\BigQuery $var
     * @return $this
     */
    public function setBigQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureGroup\BigQuery::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Identifier. Name of the FeatureGroup. Format:
     * `projects/{project}/locations/{location}/featureGroups/{featureGroup}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Name of the FeatureGroup. Format:
     * `projects/{project}/locations/{location}/featureGroups/{featureGroup}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Output only. Timestamp when this FeatureGroup was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this FeatureGroup was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this FeatureGroup was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this FeatureGroup was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Generated from protobuf field <code>string etag = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Generated from protobuf field <code>string etag = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The labels with user-defined metadata to organize your
     * FeatureGroup.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * No more than 64 user labels can be associated with one
     * FeatureGroup(System labels are excluded)." System reserved label keys
     * are prefixed with "aiplatform.googleapis.com/" and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels with user-defined metadata to organize your
     * FeatureGroup.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * No more than 64 user labels can be associated with one
     * FeatureGroup(System labels are excluded)." System reserved label keys
     * are prefixed with "aiplatform.googleapis.com/" and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Description of the FeatureGroup.
     *
     * Generated from protobuf field <code>string description = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the FeatureGroup.
     *
     * Generated from protobuf field <code>string description = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

