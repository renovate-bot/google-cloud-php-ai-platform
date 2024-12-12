<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_data_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [VertexRagDataService.ListRagCorpora][google.cloud.aiplatform.v1.VertexRagDataService.ListRagCorpora].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListRagCorporaResponse</code>
 */
class ListRagCorporaResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of RagCorpora in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.RagCorpus rag_corpora = 1;</code>
     */
    private $rag_corpora;
    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListRagCorporaRequest.page_token][google.cloud.aiplatform.v1.ListRagCorporaRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\RagCorpus>|\Google\Protobuf\Internal\RepeatedField $rag_corpora
     *           List of RagCorpora in the requested page.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     *           Pass to
     *           [ListRagCorporaRequest.page_token][google.cloud.aiplatform.v1.ListRagCorporaRequest.page_token]
     *           to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VertexRagDataService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of RagCorpora in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.RagCorpus rag_corpora = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRagCorpora()
    {
        return $this->rag_corpora;
    }

    /**
     * List of RagCorpora in the requested page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.RagCorpus rag_corpora = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\RagCorpus>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRagCorpora($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\RagCorpus::class);
        $this->rag_corpora = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListRagCorporaRequest.page_token][google.cloud.aiplatform.v1.ListRagCorporaRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     * Pass to
     * [ListRagCorporaRequest.page_token][google.cloud.aiplatform.v1.ListRagCorporaRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}
