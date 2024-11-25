<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_data_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [VertexRagDataService.CreateRagCorpus][google.cloud.aiplatform.v1.VertexRagDataService.CreateRagCorpus].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateRagCorpusRequest</code>
 */
class CreateRagCorpusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to create the RagCorpus in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The RagCorpus to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.RagCorpus rag_corpus = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $rag_corpus = null;

    /**
     * @param string                                $parent    Required. The resource name of the Location to create the RagCorpus in.
     *                                                         Format: `projects/{project}/locations/{location}`
     *                                                         Please see {@see VertexRagDataServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\RagCorpus $ragCorpus Required. The RagCorpus to create.
     *
     * @return \Google\Cloud\AIPlatform\V1\CreateRagCorpusRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AIPlatform\V1\RagCorpus $ragCorpus): self
    {
        return (new self())
            ->setParent($parent)
            ->setRagCorpus($ragCorpus);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to create the RagCorpus in.
     *           Format: `projects/{project}/locations/{location}`
     *     @type \Google\Cloud\AIPlatform\V1\RagCorpus $rag_corpus
     *           Required. The RagCorpus to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VertexRagDataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to create the RagCorpus in.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to create the RagCorpus in.
     * Format: `projects/{project}/locations/{location}`
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
     * Required. The RagCorpus to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.RagCorpus rag_corpus = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\RagCorpus|null
     */
    public function getRagCorpus()
    {
        return $this->rag_corpus;
    }

    public function hasRagCorpus()
    {
        return isset($this->rag_corpus);
    }

    public function clearRagCorpus()
    {
        unset($this->rag_corpus);
    }

    /**
     * Required. The RagCorpus to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.RagCorpus rag_corpus = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\RagCorpus $var
     * @return $this
     */
    public function setRagCorpus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\RagCorpus::class);
        $this->rag_corpus = $var;

        return $this;
    }

}

