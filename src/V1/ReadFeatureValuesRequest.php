<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_online_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [FeaturestoreOnlineServingService.ReadFeatureValues][google.cloud.aiplatform.v1.FeaturestoreOnlineServingService.ReadFeatureValues].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ReadFeatureValuesRequest</code>
 */
class ReadFeatureValuesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the EntityType for the entity being read.
     * Value format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`.
     * For example, for a machine learning model predicting user clicks on a
     * website, an EntityType ID could be `user`.
     *
     * Generated from protobuf field <code>string entity_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $entity_type = '';
    /**
     * Required. ID for a specific entity. For example,
     * for a machine learning model predicting user clicks on a website, an entity
     * ID could be `user_123`.
     *
     * Generated from protobuf field <code>string entity_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $entity_id = '';
    /**
     * Required. Selector choosing Features of the target EntityType.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureSelector feature_selector = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $feature_selector = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entity_type
     *           Required. The resource name of the EntityType for the entity being read.
     *           Value format:
     *           `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`.
     *           For example, for a machine learning model predicting user clicks on a
     *           website, an EntityType ID could be `user`.
     *     @type string $entity_id
     *           Required. ID for a specific entity. For example,
     *           for a machine learning model predicting user clicks on a website, an entity
     *           ID could be `user_123`.
     *     @type \Google\Cloud\AIPlatform\V1\FeatureSelector $feature_selector
     *           Required. Selector choosing Features of the target EntityType.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreOnlineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the EntityType for the entity being read.
     * Value format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`.
     * For example, for a machine learning model predicting user clicks on a
     * website, an EntityType ID could be `user`.
     *
     * Generated from protobuf field <code>string entity_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * Required. The resource name of the EntityType for the entity being read.
     * Value format:
     * `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entityType}`.
     * For example, for a machine learning model predicting user clicks on a
     * website, an EntityType ID could be `user`.
     *
     * Generated from protobuf field <code>string entity_type = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * Required. ID for a specific entity. For example,
     * for a machine learning model predicting user clicks on a website, an entity
     * ID could be `user_123`.
     *
     * Generated from protobuf field <code>string entity_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * Required. ID for a specific entity. For example,
     * for a machine learning model predicting user clicks on a website, an entity
     * ID could be `user_123`.
     *
     * Generated from protobuf field <code>string entity_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_id = $var;

        return $this;
    }

    /**
     * Required. Selector choosing Features of the target EntityType.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureSelector feature_selector = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureSelector|null
     */
    public function getFeatureSelector()
    {
        return $this->feature_selector;
    }

    public function hasFeatureSelector()
    {
        return isset($this->feature_selector);
    }

    public function clearFeatureSelector()
    {
        unset($this->feature_selector);
    }

    /**
     * Required. Selector choosing Features of the target EntityType.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureSelector feature_selector = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureSelector $var
     * @return $this
     */
    public function setFeatureSelector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureSelector::class);
        $this->feature_selector = $var;

        return $this;
    }

}

