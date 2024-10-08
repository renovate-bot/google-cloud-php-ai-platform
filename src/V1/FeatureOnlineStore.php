<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_online_store.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Vertex AI Feature Online Store provides a centralized repository for serving
 * ML features and embedding indexes at low latency. The Feature Online Store is
 * a top-level container.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeatureOnlineStore</code>
 */
class FeatureOnlineStore extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Name of the FeatureOnlineStore. Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{featureOnlineStore}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. Timestamp when this FeatureOnlineStore was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Timestamp when this FeatureOnlineStore was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. Used to perform consistent read-modify-write updates. If not set,
     * a blind "overwrite" update happens.
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';
    /**
     * Optional. The labels with user-defined metadata to organize your
     * FeatureOnlineStore.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * No more than 64 user labels can be associated with one
     * FeatureOnlineStore(System labels are excluded)." System reserved label keys
     * are prefixed with "aiplatform.googleapis.com/" and are immutable.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Output only. State of the featureOnlineStore.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Optional. The dedicated serving endpoint for this FeatureOnlineStore, which
     * is different from common Vertex service endpoint.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.DedicatedServingEndpoint dedicated_serving_endpoint = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $dedicated_serving_endpoint = null;
    /**
     * Optional. Customer-managed encryption key spec for data storage. If set,
     * online store will be secured by this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $encryption_spec = null;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzs = false;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzi = false;
    protected $storage_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Bigtable $bigtable
     *           Contains settings for the Cloud Bigtable instance that will be created
     *           to serve featureValues for all FeatureViews under this
     *           FeatureOnlineStore.
     *     @type \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Optimized $optimized
     *           Contains settings for the Optimized store that will be created
     *           to serve featureValues for all FeatureViews under this
     *           FeatureOnlineStore. When choose Optimized storage type, need to set
     *           [PrivateServiceConnectConfig.enable_private_service_connect][google.cloud.aiplatform.v1.PrivateServiceConnectConfig.enable_private_service_connect]
     *           to use private endpoint. Otherwise will use public endpoint by default.
     *     @type string $name
     *           Identifier. Name of the FeatureOnlineStore. Format:
     *           `projects/{project}/locations/{location}/featureOnlineStores/{featureOnlineStore}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this FeatureOnlineStore was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this FeatureOnlineStore was last updated.
     *     @type string $etag
     *           Optional. Used to perform consistent read-modify-write updates. If not set,
     *           a blind "overwrite" update happens.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata to organize your
     *           FeatureOnlineStore.
     *           Label keys and values can be no longer than 64 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           See https://goo.gl/xmQnxf for more information on and examples of labels.
     *           No more than 64 user labels can be associated with one
     *           FeatureOnlineStore(System labels are excluded)." System reserved label keys
     *           are prefixed with "aiplatform.googleapis.com/" and are immutable.
     *     @type int $state
     *           Output only. State of the featureOnlineStore.
     *     @type \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\DedicatedServingEndpoint $dedicated_serving_endpoint
     *           Optional. The dedicated serving endpoint for this FeatureOnlineStore, which
     *           is different from common Vertex service endpoint.
     *     @type \Google\Cloud\AIPlatform\V1\EncryptionSpec $encryption_spec
     *           Optional. Customer-managed encryption key spec for data storage. If set,
     *           online store will be secured by this key.
     *     @type bool $satisfies_pzs
     *           Output only. Reserved for future use.
     *     @type bool $satisfies_pzi
     *           Output only. Reserved for future use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureOnlineStore::initOnce();
        parent::__construct($data);
    }

    /**
     * Contains settings for the Cloud Bigtable instance that will be created
     * to serve featureValues for all FeatureViews under this
     * FeatureOnlineStore.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.Bigtable bigtable = 8;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Bigtable|null
     */
    public function getBigtable()
    {
        return $this->readOneof(8);
    }

    public function hasBigtable()
    {
        return $this->hasOneof(8);
    }

    /**
     * Contains settings for the Cloud Bigtable instance that will be created
     * to serve featureValues for all FeatureViews under this
     * FeatureOnlineStore.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.Bigtable bigtable = 8;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Bigtable $var
     * @return $this
     */
    public function setBigtable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Bigtable::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Contains settings for the Optimized store that will be created
     * to serve featureValues for all FeatureViews under this
     * FeatureOnlineStore. When choose Optimized storage type, need to set
     * [PrivateServiceConnectConfig.enable_private_service_connect][google.cloud.aiplatform.v1.PrivateServiceConnectConfig.enable_private_service_connect]
     * to use private endpoint. Otherwise will use public endpoint by default.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.Optimized optimized = 12;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Optimized|null
     */
    public function getOptimized()
    {
        return $this->readOneof(12);
    }

    public function hasOptimized()
    {
        return $this->hasOneof(12);
    }

    /**
     * Contains settings for the Optimized store that will be created
     * to serve featureValues for all FeatureViews under this
     * FeatureOnlineStore. When choose Optimized storage type, need to set
     * [PrivateServiceConnectConfig.enable_private_service_connect][google.cloud.aiplatform.v1.PrivateServiceConnectConfig.enable_private_service_connect]
     * to use private endpoint. Otherwise will use public endpoint by default.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.Optimized optimized = 12;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Optimized $var
     * @return $this
     */
    public function setOptimized($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\Optimized::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Identifier. Name of the FeatureOnlineStore. Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{featureOnlineStore}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Name of the FeatureOnlineStore. Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{featureOnlineStore}`
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
     * Output only. Timestamp when this FeatureOnlineStore was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this FeatureOnlineStore was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this FeatureOnlineStore was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this FeatureOnlineStore was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * FeatureOnlineStore.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * No more than 64 user labels can be associated with one
     * FeatureOnlineStore(System labels are excluded)." System reserved label keys
     * are prefixed with "aiplatform.googleapis.com/" and are immutable.
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
     * FeatureOnlineStore.
     * Label keys and values can be no longer than 64 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     * No more than 64 user labels can be associated with one
     * FeatureOnlineStore(System labels are excluded)." System reserved label keys
     * are prefixed with "aiplatform.googleapis.com/" and are immutable.
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

    /**
     * Output only. State of the featureOnlineStore.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the featureOnlineStore.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. The dedicated serving endpoint for this FeatureOnlineStore, which
     * is different from common Vertex service endpoint.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.DedicatedServingEndpoint dedicated_serving_endpoint = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\DedicatedServingEndpoint|null
     */
    public function getDedicatedServingEndpoint()
    {
        return $this->dedicated_serving_endpoint;
    }

    public function hasDedicatedServingEndpoint()
    {
        return isset($this->dedicated_serving_endpoint);
    }

    public function clearDedicatedServingEndpoint()
    {
        unset($this->dedicated_serving_endpoint);
    }

    /**
     * Optional. The dedicated serving endpoint for this FeatureOnlineStore, which
     * is different from common Vertex service endpoint.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore.DedicatedServingEndpoint dedicated_serving_endpoint = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\DedicatedServingEndpoint $var
     * @return $this
     */
    public function setDedicatedServingEndpoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureOnlineStore\DedicatedServingEndpoint::class);
        $this->dedicated_serving_endpoint = $var;

        return $this;
    }

    /**
     * Optional. Customer-managed encryption key spec for data storage. If set,
     * online store will be secured by this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\EncryptionSpec|null
     */
    public function getEncryptionSpec()
    {
        return $this->encryption_spec;
    }

    public function hasEncryptionSpec()
    {
        return isset($this->encryption_spec);
    }

    public function clearEncryptionSpec()
    {
        unset($this->encryption_spec);
    }

    /**
     * Optional. Customer-managed encryption key spec for data storage. If set,
     * online store will be secured by this key.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.EncryptionSpec encryption_spec = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\EncryptionSpec $var
     * @return $this
     */
    public function setEncryptionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\EncryptionSpec::class);
        $this->encryption_spec = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzs()
    {
        return $this->satisfies_pzs;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzi()
    {
        return $this->satisfies_pzi;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzi = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzi($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzi = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getStorageType()
    {
        return $this->whichOneof("storage_type");
    }

}

