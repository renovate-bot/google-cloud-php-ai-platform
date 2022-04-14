<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [PredictionService.RawPredict][google.cloud.aiplatform.v1.PredictionService.RawPredict].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.RawPredictRequest</code>
 */
class RawPredictRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Endpoint requested to serve the prediction.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $endpoint = '';
    /**
     * The prediction input. Supports HTTP headers and arbitrary data payload.
     * A [DeployedModel][google.cloud.aiplatform.v1.DeployedModel] may have an upper limit on the number of instances it
     * supports per request. When this limit it is exceeded for an AutoML model,
     * the [RawPredict][google.cloud.aiplatform.v1.PredictionService.RawPredict] method returns an error.
     * When this limit is exceeded for a custom-trained model, the behavior varies
     * depending on the model.
     * You can specify the schema for each instance in the
     * [predict_schemata.instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri]
     * field when you create a [Model][google.cloud.aiplatform.v1.Model]. This schema applies when you deploy the
     * `Model` as a `DeployedModel` to an [Endpoint][google.cloud.aiplatform.v1.Endpoint] and use the `RawPredict`
     * method.
     *
     * Generated from protobuf field <code>.google.api.HttpBody http_body = 2;</code>
     */
    protected $http_body = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $endpoint
     *           Required. The name of the Endpoint requested to serve the prediction.
     *           Format:
     *           `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *     @type \Google\Api\HttpBody $http_body
     *           The prediction input. Supports HTTP headers and arbitrary data payload.
     *           A [DeployedModel][google.cloud.aiplatform.v1.DeployedModel] may have an upper limit on the number of instances it
     *           supports per request. When this limit it is exceeded for an AutoML model,
     *           the [RawPredict][google.cloud.aiplatform.v1.PredictionService.RawPredict] method returns an error.
     *           When this limit is exceeded for a custom-trained model, the behavior varies
     *           depending on the model.
     *           You can specify the schema for each instance in the
     *           [predict_schemata.instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri]
     *           field when you create a [Model][google.cloud.aiplatform.v1.Model]. This schema applies when you deploy the
     *           `Model` as a `DeployedModel` to an [Endpoint][google.cloud.aiplatform.v1.Endpoint] and use the `RawPredict`
     *           method.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Endpoint requested to serve the prediction.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Required. The name of the Endpoint requested to serve the prediction.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * The prediction input. Supports HTTP headers and arbitrary data payload.
     * A [DeployedModel][google.cloud.aiplatform.v1.DeployedModel] may have an upper limit on the number of instances it
     * supports per request. When this limit it is exceeded for an AutoML model,
     * the [RawPredict][google.cloud.aiplatform.v1.PredictionService.RawPredict] method returns an error.
     * When this limit is exceeded for a custom-trained model, the behavior varies
     * depending on the model.
     * You can specify the schema for each instance in the
     * [predict_schemata.instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri]
     * field when you create a [Model][google.cloud.aiplatform.v1.Model]. This schema applies when you deploy the
     * `Model` as a `DeployedModel` to an [Endpoint][google.cloud.aiplatform.v1.Endpoint] and use the `RawPredict`
     * method.
     *
     * Generated from protobuf field <code>.google.api.HttpBody http_body = 2;</code>
     * @return \Google\Api\HttpBody|null
     */
    public function getHttpBody()
    {
        return $this->http_body;
    }

    public function hasHttpBody()
    {
        return isset($this->http_body);
    }

    public function clearHttpBody()
    {
        unset($this->http_body);
    }

    /**
     * The prediction input. Supports HTTP headers and arbitrary data payload.
     * A [DeployedModel][google.cloud.aiplatform.v1.DeployedModel] may have an upper limit on the number of instances it
     * supports per request. When this limit it is exceeded for an AutoML model,
     * the [RawPredict][google.cloud.aiplatform.v1.PredictionService.RawPredict] method returns an error.
     * When this limit is exceeded for a custom-trained model, the behavior varies
     * depending on the model.
     * You can specify the schema for each instance in the
     * [predict_schemata.instance_schema_uri][google.cloud.aiplatform.v1.PredictSchemata.instance_schema_uri]
     * field when you create a [Model][google.cloud.aiplatform.v1.Model]. This schema applies when you deploy the
     * `Model` as a `DeployedModel` to an [Endpoint][google.cloud.aiplatform.v1.Endpoint] and use the `RawPredict`
     * method.
     *
     * Generated from protobuf field <code>.google.api.HttpBody http_body = 2;</code>
     * @param \Google\Api\HttpBody $var
     * @return $this
     */
    public function setHttpBody($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\HttpBody::class);
        $this->http_body = $var;

        return $this;
    }

}

