<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/publisher_model.proto

namespace Google\Cloud\AIPlatform\V1\PublisherModel\CallToAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Model metadata that is needed for UploadModel or
 * DeployModel/CreateEndpoint requests.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PublisherModel.CallToAction.Deploy</code>
 */
class Deploy extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Default model display name.
     *
     * Generated from protobuf field <code>string model_display_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $model_display_name = '';
    /**
     * Optional. Large model reference. When this is set, model_artifact_spec
     * is not needed.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.LargeModelReference large_model_reference = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $large_model_reference = null;
    /**
     * Optional. The specification of the container that is to be used when
     * deploying this Model in Vertex AI. Not present for Large Models.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelContainerSpec container_spec = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $container_spec = null;
    /**
     * Optional. The path to the directory containing the Model artifact and
     * any of its supporting files.
     *
     * Generated from protobuf field <code>string artifact_uri = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $artifact_uri = '';
    /**
     * Optional. The name of the deploy task (e.g., "text to image
     * generation").
     *
     * Generated from protobuf field <code>optional string deploy_task_name = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $deploy_task_name = null;
    /**
     * Required. The title of the regional resource reference.
     *
     * Generated from protobuf field <code>string title = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $title = '';
    /**
     * Optional. The signed URI for ephemeral Cloud Storage access to model
     * artifact.
     *
     * Generated from protobuf field <code>string public_artifact_uri = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $public_artifact_uri = '';
    protected $prediction_resources;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\DedicatedResources $dedicated_resources
     *           A description of resources that are dedicated to the DeployedModel,
     *           and that need a higher degree of manual configuration.
     *     @type \Google\Cloud\AIPlatform\V1\AutomaticResources $automatic_resources
     *           A description of resources that to large degree are decided by Vertex
     *           AI, and require only a modest additional configuration.
     *     @type string $shared_resources
     *           The resource name of the shared DeploymentResourcePool to deploy on.
     *           Format:
     *           `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *     @type string $model_display_name
     *           Optional. Default model display name.
     *     @type \Google\Cloud\AIPlatform\V1\LargeModelReference $large_model_reference
     *           Optional. Large model reference. When this is set, model_artifact_spec
     *           is not needed.
     *     @type \Google\Cloud\AIPlatform\V1\ModelContainerSpec $container_spec
     *           Optional. The specification of the container that is to be used when
     *           deploying this Model in Vertex AI. Not present for Large Models.
     *     @type string $artifact_uri
     *           Optional. The path to the directory containing the Model artifact and
     *           any of its supporting files.
     *     @type string $deploy_task_name
     *           Optional. The name of the deploy task (e.g., "text to image
     *           generation").
     *     @type string $title
     *           Required. The title of the regional resource reference.
     *     @type string $public_artifact_uri
     *           Optional. The signed URI for ephemeral Cloud Storage access to model
     *           artifact.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PublisherModel::initOnce();
        parent::__construct($data);
    }

    /**
     * A description of resources that are dedicated to the DeployedModel,
     * and that need a higher degree of manual configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DedicatedResources dedicated_resources = 5;</code>
     * @return \Google\Cloud\AIPlatform\V1\DedicatedResources|null
     */
    public function getDedicatedResources()
    {
        return $this->readOneof(5);
    }

    public function hasDedicatedResources()
    {
        return $this->hasOneof(5);
    }

    /**
     * A description of resources that are dedicated to the DeployedModel,
     * and that need a higher degree of manual configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DedicatedResources dedicated_resources = 5;</code>
     * @param \Google\Cloud\AIPlatform\V1\DedicatedResources $var
     * @return $this
     */
    public function setDedicatedResources($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DedicatedResources::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * A description of resources that to large degree are decided by Vertex
     * AI, and require only a modest additional configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AutomaticResources automatic_resources = 6;</code>
     * @return \Google\Cloud\AIPlatform\V1\AutomaticResources|null
     */
    public function getAutomaticResources()
    {
        return $this->readOneof(6);
    }

    public function hasAutomaticResources()
    {
        return $this->hasOneof(6);
    }

    /**
     * A description of resources that to large degree are decided by Vertex
     * AI, and require only a modest additional configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AutomaticResources automatic_resources = 6;</code>
     * @param \Google\Cloud\AIPlatform\V1\AutomaticResources $var
     * @return $this
     */
    public function setAutomaticResources($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\AutomaticResources::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * The resource name of the shared DeploymentResourcePool to deploy on.
     * Format:
     * `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *
     * Generated from protobuf field <code>string shared_resources = 7;</code>
     * @return string
     */
    public function getSharedResources()
    {
        return $this->readOneof(7);
    }

    public function hasSharedResources()
    {
        return $this->hasOneof(7);
    }

    /**
     * The resource name of the shared DeploymentResourcePool to deploy on.
     * Format:
     * `projects/{project}/locations/{location}/deploymentResourcePools/{deployment_resource_pool}`
     *
     * Generated from protobuf field <code>string shared_resources = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSharedResources($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Optional. Default model display name.
     *
     * Generated from protobuf field <code>string model_display_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getModelDisplayName()
    {
        return $this->model_display_name;
    }

    /**
     * Optional. Default model display name.
     *
     * Generated from protobuf field <code>string model_display_name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setModelDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_display_name = $var;

        return $this;
    }

    /**
     * Optional. Large model reference. When this is set, model_artifact_spec
     * is not needed.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.LargeModelReference large_model_reference = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\LargeModelReference|null
     */
    public function getLargeModelReference()
    {
        return $this->large_model_reference;
    }

    public function hasLargeModelReference()
    {
        return isset($this->large_model_reference);
    }

    public function clearLargeModelReference()
    {
        unset($this->large_model_reference);
    }

    /**
     * Optional. Large model reference. When this is set, model_artifact_spec
     * is not needed.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.LargeModelReference large_model_reference = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\LargeModelReference $var
     * @return $this
     */
    public function setLargeModelReference($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\LargeModelReference::class);
        $this->large_model_reference = $var;

        return $this;
    }

    /**
     * Optional. The specification of the container that is to be used when
     * deploying this Model in Vertex AI. Not present for Large Models.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelContainerSpec container_spec = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\ModelContainerSpec|null
     */
    public function getContainerSpec()
    {
        return $this->container_spec;
    }

    public function hasContainerSpec()
    {
        return isset($this->container_spec);
    }

    public function clearContainerSpec()
    {
        unset($this->container_spec);
    }

    /**
     * Optional. The specification of the container that is to be used when
     * deploying this Model in Vertex AI. Not present for Large Models.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelContainerSpec container_spec = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\ModelContainerSpec $var
     * @return $this
     */
    public function setContainerSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ModelContainerSpec::class);
        $this->container_spec = $var;

        return $this;
    }

    /**
     * Optional. The path to the directory containing the Model artifact and
     * any of its supporting files.
     *
     * Generated from protobuf field <code>string artifact_uri = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getArtifactUri()
    {
        return $this->artifact_uri;
    }

    /**
     * Optional. The path to the directory containing the Model artifact and
     * any of its supporting files.
     *
     * Generated from protobuf field <code>string artifact_uri = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setArtifactUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->artifact_uri = $var;

        return $this;
    }

    /**
     * Optional. The name of the deploy task (e.g., "text to image
     * generation").
     *
     * Generated from protobuf field <code>optional string deploy_task_name = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDeployTaskName()
    {
        return isset($this->deploy_task_name) ? $this->deploy_task_name : '';
    }

    public function hasDeployTaskName()
    {
        return isset($this->deploy_task_name);
    }

    public function clearDeployTaskName()
    {
        unset($this->deploy_task_name);
    }

    /**
     * Optional. The name of the deploy task (e.g., "text to image
     * generation").
     *
     * Generated from protobuf field <code>optional string deploy_task_name = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDeployTaskName($var)
    {
        GPBUtil::checkString($var, True);
        $this->deploy_task_name = $var;

        return $this;
    }

    /**
     * Required. The title of the regional resource reference.
     *
     * Generated from protobuf field <code>string title = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Required. The title of the regional resource reference.
     *
     * Generated from protobuf field <code>string title = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Optional. The signed URI for ephemeral Cloud Storage access to model
     * artifact.
     *
     * Generated from protobuf field <code>string public_artifact_uri = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPublicArtifactUri()
    {
        return $this->public_artifact_uri;
    }

    /**
     * Optional. The signed URI for ephemeral Cloud Storage access to model
     * artifact.
     *
     * Generated from protobuf field <code>string public_artifact_uri = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPublicArtifactUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_artifact_uri = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getPredictionResources()
    {
        return $this->whichOneof("prediction_resources");
    }

}


