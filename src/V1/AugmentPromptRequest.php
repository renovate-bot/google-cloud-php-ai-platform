<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for AugmentPrompt.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.AugmentPromptRequest</code>
 */
class AugmentPromptRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location from which to augment prompt.
     * The users must have permission to make a call in the project.
     * Format:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Input content to augment, only text format is supported for now.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Content contents = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $contents;
    /**
     * Optional. Metadata of the backend deployed model.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AugmentPromptRequest.Model model = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $model = null;
    protected $data_source;

    /**
     * @param string                                                 $parent         Required. The resource name of the Location from which to augment prompt.
     *                                                                               The users must have permission to make a call in the project.
     *                                                                               Format:
     *                                                                               `projects/{project}/locations/{location}`. Please see
     *                                                                               {@see VertexRagServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\AugmentPromptRequest\Model $model          Optional. Metadata of the backend deployed model.
     * @param \Google\Cloud\AIPlatform\V1\VertexRagStore             $vertexRagStore Optional. Retrieves contexts from the Vertex RagStore.
     *
     * @return \Google\Cloud\AIPlatform\V1\AugmentPromptRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AIPlatform\V1\AugmentPromptRequest\Model $model, \Google\Cloud\AIPlatform\V1\VertexRagStore $vertexRagStore): self
    {
        return (new self())
            ->setParent($parent)
            ->setModel($model)
            ->setVertexRagStore($vertexRagStore);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\VertexRagStore $vertex_rag_store
     *           Optional. Retrieves contexts from the Vertex RagStore.
     *     @type string $parent
     *           Required. The resource name of the Location from which to augment prompt.
     *           The users must have permission to make a call in the project.
     *           Format:
     *           `projects/{project}/locations/{location}`.
     *     @type array<\Google\Cloud\AIPlatform\V1\Content>|\Google\Protobuf\Internal\RepeatedField $contents
     *           Optional. Input content to augment, only text format is supported for now.
     *     @type \Google\Cloud\AIPlatform\V1\AugmentPromptRequest\Model $model
     *           Optional. Metadata of the backend deployed model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VertexRagService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Retrieves contexts from the Vertex RagStore.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.VertexRagStore vertex_rag_store = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\VertexRagStore|null
     */
    public function getVertexRagStore()
    {
        return $this->readOneof(4);
    }

    public function hasVertexRagStore()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. Retrieves contexts from the Vertex RagStore.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.VertexRagStore vertex_rag_store = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\VertexRagStore $var
     * @return $this
     */
    public function setVertexRagStore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\VertexRagStore::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Required. The resource name of the Location from which to augment prompt.
     * The users must have permission to make a call in the project.
     * Format:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location from which to augment prompt.
     * The users must have permission to make a call in the project.
     * Format:
     * `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. Input content to augment, only text format is supported for now.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Content contents = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Optional. Input content to augment, only text format is supported for now.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Content contents = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\Content>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Content::class);
        $this->contents = $arr;

        return $this;
    }

    /**
     * Optional. Metadata of the backend deployed model.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AugmentPromptRequest.Model model = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\AugmentPromptRequest\Model|null
     */
    public function getModel()
    {
        return $this->model;
    }

    public function hasModel()
    {
        return isset($this->model);
    }

    public function clearModel()
    {
        unset($this->model);
    }

    /**
     * Optional. Metadata of the backend deployed model.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AugmentPromptRequest.Model model = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\AugmentPromptRequest\Model $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\AugmentPromptRequest\Model::class);
        $this->model = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataSource()
    {
        return $this->whichOneof("data_source");
    }

}
