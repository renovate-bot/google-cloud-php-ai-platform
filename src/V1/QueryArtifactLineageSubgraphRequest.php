<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [MetadataService.QueryArtifactLineageSubgraph][google.cloud.aiplatform.v1.MetadataService.QueryArtifactLineageSubgraph].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.QueryArtifactLineageSubgraphRequest</code>
 */
class QueryArtifactLineageSubgraphRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Artifact whose Lineage needs to be
     * retrieved as a LineageSubgraph. Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     * The request may error with FAILED_PRECONDITION if the number of Artifacts,
     * the number of Executions, or the number of Events that would be returned
     * for the Context exceeds 1000.
     *
     * Generated from protobuf field <code>string artifact = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $artifact = '';
    /**
     * Specifies the size of the lineage graph in terms of number of hops from the
     * specified artifact.
     * Negative Value: INVALID_ARGUMENT error is returned
     * 0: Only input artifact is returned.
     * No value: Transitive closure is performed to return the complete graph.
     *
     * Generated from protobuf field <code>int32 max_hops = 2;</code>
     */
    private $max_hops = 0;
    /**
     * Filter specifying the boolean condition for the Artifacts to satisfy in
     * order to be part of the Lineage Subgraph.
     * The syntax to define filter query is based on https://google.aip.dev/160.
     * The supported set of filters include the following:
     * *  **Attribute filtering**:
     *    For example: `display_name = "test"`
     *    Supported fields include: `name`, `display_name`, `uri`, `state`,
     *    `schema_title`, `create_time`, and `update_time`.
     *    Time fields, such as `create_time` and `update_time`, require values
     *    specified in RFC-3339 format.
     *    For example: `create_time = "2020-11-19T11:30:00-04:00"`
     * *  **Metadata field**:
     *    To filter on metadata fields use traversal operation as follows:
     *    `metadata.<field_name>.<type_value>`.
     *    For example: `metadata.field_1.number_value = 10.0`
     * Each of the above supported filter types can be combined together using
     * logical operators (`AND` & `OR`). Maximum nested expression depth allowed
     * is 5.
     * For example: `display_name = "test" AND metadata.field1.bool_value = true`.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     */
    private $filter = '';

    /**
     * @param string $artifact Required. The resource name of the Artifact whose Lineage needs to be
     *                         retrieved as a LineageSubgraph. Format:
     *                         `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     *
     *                         The request may error with FAILED_PRECONDITION if the number of Artifacts,
     *                         the number of Executions, or the number of Events that would be returned
     *                         for the Context exceeds 1000. Please see
     *                         {@see MetadataServiceClient::artifactName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\QueryArtifactLineageSubgraphRequest
     *
     * @experimental
     */
    public static function build(string $artifact): self
    {
        return (new self())
            ->setArtifact($artifact);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $artifact
     *           Required. The resource name of the Artifact whose Lineage needs to be
     *           retrieved as a LineageSubgraph. Format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     *           The request may error with FAILED_PRECONDITION if the number of Artifacts,
     *           the number of Executions, or the number of Events that would be returned
     *           for the Context exceeds 1000.
     *     @type int $max_hops
     *           Specifies the size of the lineage graph in terms of number of hops from the
     *           specified artifact.
     *           Negative Value: INVALID_ARGUMENT error is returned
     *           0: Only input artifact is returned.
     *           No value: Transitive closure is performed to return the complete graph.
     *     @type string $filter
     *           Filter specifying the boolean condition for the Artifacts to satisfy in
     *           order to be part of the Lineage Subgraph.
     *           The syntax to define filter query is based on https://google.aip.dev/160.
     *           The supported set of filters include the following:
     *           *  **Attribute filtering**:
     *              For example: `display_name = "test"`
     *              Supported fields include: `name`, `display_name`, `uri`, `state`,
     *              `schema_title`, `create_time`, and `update_time`.
     *              Time fields, such as `create_time` and `update_time`, require values
     *              specified in RFC-3339 format.
     *              For example: `create_time = "2020-11-19T11:30:00-04:00"`
     *           *  **Metadata field**:
     *              To filter on metadata fields use traversal operation as follows:
     *              `metadata.<field_name>.<type_value>`.
     *              For example: `metadata.field_1.number_value = 10.0`
     *           Each of the above supported filter types can be combined together using
     *           logical operators (`AND` & `OR`). Maximum nested expression depth allowed
     *           is 5.
     *           For example: `display_name = "test" AND metadata.field1.bool_value = true`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Artifact whose Lineage needs to be
     * retrieved as a LineageSubgraph. Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     * The request may error with FAILED_PRECONDITION if the number of Artifacts,
     * the number of Executions, or the number of Events that would be returned
     * for the Context exceeds 1000.
     *
     * Generated from protobuf field <code>string artifact = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getArtifact()
    {
        return $this->artifact;
    }

    /**
     * Required. The resource name of the Artifact whose Lineage needs to be
     * retrieved as a LineageSubgraph. Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     * The request may error with FAILED_PRECONDITION if the number of Artifacts,
     * the number of Executions, or the number of Events that would be returned
     * for the Context exceeds 1000.
     *
     * Generated from protobuf field <code>string artifact = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setArtifact($var)
    {
        GPBUtil::checkString($var, True);
        $this->artifact = $var;

        return $this;
    }

    /**
     * Specifies the size of the lineage graph in terms of number of hops from the
     * specified artifact.
     * Negative Value: INVALID_ARGUMENT error is returned
     * 0: Only input artifact is returned.
     * No value: Transitive closure is performed to return the complete graph.
     *
     * Generated from protobuf field <code>int32 max_hops = 2;</code>
     * @return int
     */
    public function getMaxHops()
    {
        return $this->max_hops;
    }

    /**
     * Specifies the size of the lineage graph in terms of number of hops from the
     * specified artifact.
     * Negative Value: INVALID_ARGUMENT error is returned
     * 0: Only input artifact is returned.
     * No value: Transitive closure is performed to return the complete graph.
     *
     * Generated from protobuf field <code>int32 max_hops = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxHops($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_hops = $var;

        return $this;
    }

    /**
     * Filter specifying the boolean condition for the Artifacts to satisfy in
     * order to be part of the Lineage Subgraph.
     * The syntax to define filter query is based on https://google.aip.dev/160.
     * The supported set of filters include the following:
     * *  **Attribute filtering**:
     *    For example: `display_name = "test"`
     *    Supported fields include: `name`, `display_name`, `uri`, `state`,
     *    `schema_title`, `create_time`, and `update_time`.
     *    Time fields, such as `create_time` and `update_time`, require values
     *    specified in RFC-3339 format.
     *    For example: `create_time = "2020-11-19T11:30:00-04:00"`
     * *  **Metadata field**:
     *    To filter on metadata fields use traversal operation as follows:
     *    `metadata.<field_name>.<type_value>`.
     *    For example: `metadata.field_1.number_value = 10.0`
     * Each of the above supported filter types can be combined together using
     * logical operators (`AND` & `OR`). Maximum nested expression depth allowed
     * is 5.
     * For example: `display_name = "test" AND metadata.field1.bool_value = true`.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filter specifying the boolean condition for the Artifacts to satisfy in
     * order to be part of the Lineage Subgraph.
     * The syntax to define filter query is based on https://google.aip.dev/160.
     * The supported set of filters include the following:
     * *  **Attribute filtering**:
     *    For example: `display_name = "test"`
     *    Supported fields include: `name`, `display_name`, `uri`, `state`,
     *    `schema_title`, `create_time`, and `update_time`.
     *    Time fields, such as `create_time` and `update_time`, require values
     *    specified in RFC-3339 format.
     *    For example: `create_time = "2020-11-19T11:30:00-04:00"`
     * *  **Metadata field**:
     *    To filter on metadata fields use traversal operation as follows:
     *    `metadata.<field_name>.<type_value>`.
     *    For example: `metadata.field_1.number_value = 10.0`
     * Each of the above supported filter types can be combined together using
     * logical operators (`AND` & `OR`). Maximum nested expression depth allowed
     * is 5.
     * For example: `display_name = "test" AND metadata.field1.bool_value = true`.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

