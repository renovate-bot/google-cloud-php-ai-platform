<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_endpoint.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A deployment of an Index. IndexEndpoints contain one or more DeployedIndexes.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeployedIndex</code>
 */
class DeployedIndex extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The user specified ID of the DeployedIndex.
     * The ID can be up to 128 characters long and must start with a letter and
     * only contain letters, numbers, and underscores.
     * The ID must be unique within the project it is created in.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $id = '';
    /**
     * Required. The name of the Index this is the deployment of.
     * We may refer to this Index as the DeployedIndex's "original" Index.
     *
     * Generated from protobuf field <code>string index = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $index = '';
    /**
     * The display name of the DeployedIndex. If not provided upon creation,
     * the Index's display_name is used.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    protected $display_name = '';
    /**
     * Output only. Timestamp when the DeployedIndex was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Provides paths for users to send requests directly to the deployed index
     * services running on Cloud via private services access. This field is
     * populated if [network][google.cloud.aiplatform.v1.IndexEndpoint.network] is configured.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.IndexPrivateEndpoints private_endpoints = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $private_endpoints = null;
    /**
     * Output only. The DeployedIndex may depend on various data on its original Index.
     * Additionally when certain changes to the original Index are being done
     * (e.g. when what the Index contains is being changed) the DeployedIndex may
     * be asynchronously updated in the background to reflect this changes.
     * If this timestamp's value is at least the [Index.update_time][google.cloud.aiplatform.v1.Index.update_time] of the
     * original Index, it means that this DeployedIndex and the original Index are
     * in sync. If this timestamp is older, then to see which updates this
     * DeployedIndex already contains (and which not), one must
     * [list][Operations.ListOperations] [Operations][Operation]
     * [working][Operation.name] on the original Index. Only
     * the successfully completed Operations with
     * [Operations.metadata.generic_metadata.update_time]
     * [google.cloud.aiplatform.v1.GenericOperationMetadata.update_time]
     * equal or before this sync time are contained in this DeployedIndex.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp index_sync_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $index_sync_time = null;
    /**
     * Optional. A description of resources that the DeployedIndex uses, which to large
     * degree are decided by Vertex AI, and optionally allows only a modest
     * additional configuration.
     * If min_replica_count is not set, the default value is 2 (we don't provide
     * SLA when min_replica_count=1). If max_replica_count is not set, the
     * default value is min_replica_count. The max allowed replica count is
     * 1000.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AutomaticResources automatic_resources = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $automatic_resources = null;
    /**
     * Optional. A description of resources that are dedicated to the DeployedIndex, and
     * that need a higher degree of manual configuration.
     * If min_replica_count is not set, the default value is 2 (we don't provide
     * SLA when min_replica_count=1). If max_replica_count is not set, the
     * default value is min_replica_count. The max allowed replica count is
     * 1000.
     * Available machine types:
     * n1-standard-16
     * n1-standard-32
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DedicatedResources dedicated_resources = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $dedicated_resources = null;
    /**
     * Optional. If true, private endpoint's access logs are sent to StackDriver Logging.
     * These logs are like standard server access logs, containing
     * information like timestamp and latency for each MatchRequest.
     * Note that Stackdriver logs may incur a cost, especially if the deployed
     * index receives a high queries per second rate (QPS).
     * Estimate your costs before enabling this option.
     *
     * Generated from protobuf field <code>bool enable_access_logging = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enable_access_logging = false;
    /**
     * Optional. If set, the authentication is enabled for the private endpoint.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DeployedIndexAuthConfig deployed_index_auth_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $deployed_index_auth_config = null;
    /**
     * Optional. A list of reserved ip ranges under the VPC network that can be
     * used for this DeployedIndex.
     * If set, we will deploy the index within the provided ip ranges. Otherwise,
     * the index might be deployed to any ip ranges under the provided VPC
     * network.
     * The value sohuld be the name of the address
     * (https://cloud.google.com/compute/docs/reference/rest/v1/addresses)
     * Example: 'vertex-ai-ip-range'.
     *
     * Generated from protobuf field <code>repeated string reserved_ip_ranges = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $reserved_ip_ranges;
    /**
     * Optional. The deployment group can be no longer than 64 characters (eg:
     * 'test', 'prod'). If not set, we will use the 'default' deployment group.
     * Creating `deployment_groups` with `reserved_ip_ranges` is a recommended
     * practice when the peered network has multiple peering ranges. This creates
     * your deployments from predictable IP spaces for easier traffic
     * administration. Also, one deployment_group (except 'default') can only be
     * used with the same reserved_ip_ranges which means if the deployment_group
     * has been used with reserved_ip_ranges: [a, b, c], using it with [a, b] or
     * [d, e] is disallowed.
     * Note: we only support up to 5 deployment groups(not including 'default').
     *
     * Generated from protobuf field <code>string deployment_group = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $deployment_group = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Required. The user specified ID of the DeployedIndex.
     *           The ID can be up to 128 characters long and must start with a letter and
     *           only contain letters, numbers, and underscores.
     *           The ID must be unique within the project it is created in.
     *     @type string $index
     *           Required. The name of the Index this is the deployment of.
     *           We may refer to this Index as the DeployedIndex's "original" Index.
     *     @type string $display_name
     *           The display name of the DeployedIndex. If not provided upon creation,
     *           the Index's display_name is used.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when the DeployedIndex was created.
     *     @type \Google\Cloud\AIPlatform\V1\IndexPrivateEndpoints $private_endpoints
     *           Output only. Provides paths for users to send requests directly to the deployed index
     *           services running on Cloud via private services access. This field is
     *           populated if [network][google.cloud.aiplatform.v1.IndexEndpoint.network] is configured.
     *     @type \Google\Protobuf\Timestamp $index_sync_time
     *           Output only. The DeployedIndex may depend on various data on its original Index.
     *           Additionally when certain changes to the original Index are being done
     *           (e.g. when what the Index contains is being changed) the DeployedIndex may
     *           be asynchronously updated in the background to reflect this changes.
     *           If this timestamp's value is at least the [Index.update_time][google.cloud.aiplatform.v1.Index.update_time] of the
     *           original Index, it means that this DeployedIndex and the original Index are
     *           in sync. If this timestamp is older, then to see which updates this
     *           DeployedIndex already contains (and which not), one must
     *           [list][Operations.ListOperations] [Operations][Operation]
     *           [working][Operation.name] on the original Index. Only
     *           the successfully completed Operations with
     *           [Operations.metadata.generic_metadata.update_time]
     *           [google.cloud.aiplatform.v1.GenericOperationMetadata.update_time]
     *           equal or before this sync time are contained in this DeployedIndex.
     *     @type \Google\Cloud\AIPlatform\V1\AutomaticResources $automatic_resources
     *           Optional. A description of resources that the DeployedIndex uses, which to large
     *           degree are decided by Vertex AI, and optionally allows only a modest
     *           additional configuration.
     *           If min_replica_count is not set, the default value is 2 (we don't provide
     *           SLA when min_replica_count=1). If max_replica_count is not set, the
     *           default value is min_replica_count. The max allowed replica count is
     *           1000.
     *     @type \Google\Cloud\AIPlatform\V1\DedicatedResources $dedicated_resources
     *           Optional. A description of resources that are dedicated to the DeployedIndex, and
     *           that need a higher degree of manual configuration.
     *           If min_replica_count is not set, the default value is 2 (we don't provide
     *           SLA when min_replica_count=1). If max_replica_count is not set, the
     *           default value is min_replica_count. The max allowed replica count is
     *           1000.
     *           Available machine types:
     *           n1-standard-16
     *           n1-standard-32
     *     @type bool $enable_access_logging
     *           Optional. If true, private endpoint's access logs are sent to StackDriver Logging.
     *           These logs are like standard server access logs, containing
     *           information like timestamp and latency for each MatchRequest.
     *           Note that Stackdriver logs may incur a cost, especially if the deployed
     *           index receives a high queries per second rate (QPS).
     *           Estimate your costs before enabling this option.
     *     @type \Google\Cloud\AIPlatform\V1\DeployedIndexAuthConfig $deployed_index_auth_config
     *           Optional. If set, the authentication is enabled for the private endpoint.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $reserved_ip_ranges
     *           Optional. A list of reserved ip ranges under the VPC network that can be
     *           used for this DeployedIndex.
     *           If set, we will deploy the index within the provided ip ranges. Otherwise,
     *           the index might be deployed to any ip ranges under the provided VPC
     *           network.
     *           The value sohuld be the name of the address
     *           (https://cloud.google.com/compute/docs/reference/rest/v1/addresses)
     *           Example: 'vertex-ai-ip-range'.
     *     @type string $deployment_group
     *           Optional. The deployment group can be no longer than 64 characters (eg:
     *           'test', 'prod'). If not set, we will use the 'default' deployment group.
     *           Creating `deployment_groups` with `reserved_ip_ranges` is a recommended
     *           practice when the peered network has multiple peering ranges. This creates
     *           your deployments from predictable IP spaces for easier traffic
     *           administration. Also, one deployment_group (except 'default') can only be
     *           used with the same reserved_ip_ranges which means if the deployment_group
     *           has been used with reserved_ip_ranges: [a, b, c], using it with [a, b] or
     *           [d, e] is disallowed.
     *           Note: we only support up to 5 deployment groups(not including 'default').
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\IndexEndpoint::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The user specified ID of the DeployedIndex.
     * The ID can be up to 128 characters long and must start with a letter and
     * only contain letters, numbers, and underscores.
     * The ID must be unique within the project it is created in.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Required. The user specified ID of the DeployedIndex.
     * The ID can be up to 128 characters long and must start with a letter and
     * only contain letters, numbers, and underscores.
     * The ID must be unique within the project it is created in.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Required. The name of the Index this is the deployment of.
     * We may refer to this Index as the DeployedIndex's "original" Index.
     *
     * Generated from protobuf field <code>string index = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Required. The name of the Index this is the deployment of.
     * We may refer to this Index as the DeployedIndex's "original" Index.
     *
     * Generated from protobuf field <code>string index = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkString($var, True);
        $this->index = $var;

        return $this;
    }

    /**
     * The display name of the DeployedIndex. If not provided upon creation,
     * the Index's display_name is used.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name of the DeployedIndex. If not provided upon creation,
     * the Index's display_name is used.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
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
     * Output only. Timestamp when the DeployedIndex was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when the DeployedIndex was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Provides paths for users to send requests directly to the deployed index
     * services running on Cloud via private services access. This field is
     * populated if [network][google.cloud.aiplatform.v1.IndexEndpoint.network] is configured.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.IndexPrivateEndpoints private_endpoints = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\IndexPrivateEndpoints|null
     */
    public function getPrivateEndpoints()
    {
        return $this->private_endpoints;
    }

    public function hasPrivateEndpoints()
    {
        return isset($this->private_endpoints);
    }

    public function clearPrivateEndpoints()
    {
        unset($this->private_endpoints);
    }

    /**
     * Output only. Provides paths for users to send requests directly to the deployed index
     * services running on Cloud via private services access. This field is
     * populated if [network][google.cloud.aiplatform.v1.IndexEndpoint.network] is configured.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.IndexPrivateEndpoints private_endpoints = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\IndexPrivateEndpoints $var
     * @return $this
     */
    public function setPrivateEndpoints($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\IndexPrivateEndpoints::class);
        $this->private_endpoints = $var;

        return $this;
    }

    /**
     * Output only. The DeployedIndex may depend on various data on its original Index.
     * Additionally when certain changes to the original Index are being done
     * (e.g. when what the Index contains is being changed) the DeployedIndex may
     * be asynchronously updated in the background to reflect this changes.
     * If this timestamp's value is at least the [Index.update_time][google.cloud.aiplatform.v1.Index.update_time] of the
     * original Index, it means that this DeployedIndex and the original Index are
     * in sync. If this timestamp is older, then to see which updates this
     * DeployedIndex already contains (and which not), one must
     * [list][Operations.ListOperations] [Operations][Operation]
     * [working][Operation.name] on the original Index. Only
     * the successfully completed Operations with
     * [Operations.metadata.generic_metadata.update_time]
     * [google.cloud.aiplatform.v1.GenericOperationMetadata.update_time]
     * equal or before this sync time are contained in this DeployedIndex.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp index_sync_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getIndexSyncTime()
    {
        return $this->index_sync_time;
    }

    public function hasIndexSyncTime()
    {
        return isset($this->index_sync_time);
    }

    public function clearIndexSyncTime()
    {
        unset($this->index_sync_time);
    }

    /**
     * Output only. The DeployedIndex may depend on various data on its original Index.
     * Additionally when certain changes to the original Index are being done
     * (e.g. when what the Index contains is being changed) the DeployedIndex may
     * be asynchronously updated in the background to reflect this changes.
     * If this timestamp's value is at least the [Index.update_time][google.cloud.aiplatform.v1.Index.update_time] of the
     * original Index, it means that this DeployedIndex and the original Index are
     * in sync. If this timestamp is older, then to see which updates this
     * DeployedIndex already contains (and which not), one must
     * [list][Operations.ListOperations] [Operations][Operation]
     * [working][Operation.name] on the original Index. Only
     * the successfully completed Operations with
     * [Operations.metadata.generic_metadata.update_time]
     * [google.cloud.aiplatform.v1.GenericOperationMetadata.update_time]
     * equal or before this sync time are contained in this DeployedIndex.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp index_sync_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setIndexSyncTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->index_sync_time = $var;

        return $this;
    }

    /**
     * Optional. A description of resources that the DeployedIndex uses, which to large
     * degree are decided by Vertex AI, and optionally allows only a modest
     * additional configuration.
     * If min_replica_count is not set, the default value is 2 (we don't provide
     * SLA when min_replica_count=1). If max_replica_count is not set, the
     * default value is min_replica_count. The max allowed replica count is
     * 1000.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AutomaticResources automatic_resources = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\AutomaticResources|null
     */
    public function getAutomaticResources()
    {
        return $this->automatic_resources;
    }

    public function hasAutomaticResources()
    {
        return isset($this->automatic_resources);
    }

    public function clearAutomaticResources()
    {
        unset($this->automatic_resources);
    }

    /**
     * Optional. A description of resources that the DeployedIndex uses, which to large
     * degree are decided by Vertex AI, and optionally allows only a modest
     * additional configuration.
     * If min_replica_count is not set, the default value is 2 (we don't provide
     * SLA when min_replica_count=1). If max_replica_count is not set, the
     * default value is min_replica_count. The max allowed replica count is
     * 1000.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.AutomaticResources automatic_resources = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\AutomaticResources $var
     * @return $this
     */
    public function setAutomaticResources($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\AutomaticResources::class);
        $this->automatic_resources = $var;

        return $this;
    }

    /**
     * Optional. A description of resources that are dedicated to the DeployedIndex, and
     * that need a higher degree of manual configuration.
     * If min_replica_count is not set, the default value is 2 (we don't provide
     * SLA when min_replica_count=1). If max_replica_count is not set, the
     * default value is min_replica_count. The max allowed replica count is
     * 1000.
     * Available machine types:
     * n1-standard-16
     * n1-standard-32
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DedicatedResources dedicated_resources = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\DedicatedResources|null
     */
    public function getDedicatedResources()
    {
        return $this->dedicated_resources;
    }

    public function hasDedicatedResources()
    {
        return isset($this->dedicated_resources);
    }

    public function clearDedicatedResources()
    {
        unset($this->dedicated_resources);
    }

    /**
     * Optional. A description of resources that are dedicated to the DeployedIndex, and
     * that need a higher degree of manual configuration.
     * If min_replica_count is not set, the default value is 2 (we don't provide
     * SLA when min_replica_count=1). If max_replica_count is not set, the
     * default value is min_replica_count. The max allowed replica count is
     * 1000.
     * Available machine types:
     * n1-standard-16
     * n1-standard-32
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DedicatedResources dedicated_resources = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\DedicatedResources $var
     * @return $this
     */
    public function setDedicatedResources($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DedicatedResources::class);
        $this->dedicated_resources = $var;

        return $this;
    }

    /**
     * Optional. If true, private endpoint's access logs are sent to StackDriver Logging.
     * These logs are like standard server access logs, containing
     * information like timestamp and latency for each MatchRequest.
     * Note that Stackdriver logs may incur a cost, especially if the deployed
     * index receives a high queries per second rate (QPS).
     * Estimate your costs before enabling this option.
     *
     * Generated from protobuf field <code>bool enable_access_logging = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableAccessLogging()
    {
        return $this->enable_access_logging;
    }

    /**
     * Optional. If true, private endpoint's access logs are sent to StackDriver Logging.
     * These logs are like standard server access logs, containing
     * information like timestamp and latency for each MatchRequest.
     * Note that Stackdriver logs may incur a cost, especially if the deployed
     * index receives a high queries per second rate (QPS).
     * Estimate your costs before enabling this option.
     *
     * Generated from protobuf field <code>bool enable_access_logging = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableAccessLogging($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_access_logging = $var;

        return $this;
    }

    /**
     * Optional. If set, the authentication is enabled for the private endpoint.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DeployedIndexAuthConfig deployed_index_auth_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AIPlatform\V1\DeployedIndexAuthConfig|null
     */
    public function getDeployedIndexAuthConfig()
    {
        return $this->deployed_index_auth_config;
    }

    public function hasDeployedIndexAuthConfig()
    {
        return isset($this->deployed_index_auth_config);
    }

    public function clearDeployedIndexAuthConfig()
    {
        unset($this->deployed_index_auth_config);
    }

    /**
     * Optional. If set, the authentication is enabled for the private endpoint.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DeployedIndexAuthConfig deployed_index_auth_config = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AIPlatform\V1\DeployedIndexAuthConfig $var
     * @return $this
     */
    public function setDeployedIndexAuthConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DeployedIndexAuthConfig::class);
        $this->deployed_index_auth_config = $var;

        return $this;
    }

    /**
     * Optional. A list of reserved ip ranges under the VPC network that can be
     * used for this DeployedIndex.
     * If set, we will deploy the index within the provided ip ranges. Otherwise,
     * the index might be deployed to any ip ranges under the provided VPC
     * network.
     * The value sohuld be the name of the address
     * (https://cloud.google.com/compute/docs/reference/rest/v1/addresses)
     * Example: 'vertex-ai-ip-range'.
     *
     * Generated from protobuf field <code>repeated string reserved_ip_ranges = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReservedIpRanges()
    {
        return $this->reserved_ip_ranges;
    }

    /**
     * Optional. A list of reserved ip ranges under the VPC network that can be
     * used for this DeployedIndex.
     * If set, we will deploy the index within the provided ip ranges. Otherwise,
     * the index might be deployed to any ip ranges under the provided VPC
     * network.
     * The value sohuld be the name of the address
     * (https://cloud.google.com/compute/docs/reference/rest/v1/addresses)
     * Example: 'vertex-ai-ip-range'.
     *
     * Generated from protobuf field <code>repeated string reserved_ip_ranges = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReservedIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->reserved_ip_ranges = $arr;

        return $this;
    }

    /**
     * Optional. The deployment group can be no longer than 64 characters (eg:
     * 'test', 'prod'). If not set, we will use the 'default' deployment group.
     * Creating `deployment_groups` with `reserved_ip_ranges` is a recommended
     * practice when the peered network has multiple peering ranges. This creates
     * your deployments from predictable IP spaces for easier traffic
     * administration. Also, one deployment_group (except 'default') can only be
     * used with the same reserved_ip_ranges which means if the deployment_group
     * has been used with reserved_ip_ranges: [a, b, c], using it with [a, b] or
     * [d, e] is disallowed.
     * Note: we only support up to 5 deployment groups(not including 'default').
     *
     * Generated from protobuf field <code>string deployment_group = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDeploymentGroup()
    {
        return $this->deployment_group;
    }

    /**
     * Optional. The deployment group can be no longer than 64 characters (eg:
     * 'test', 'prod'). If not set, we will use the 'default' deployment group.
     * Creating `deployment_groups` with `reserved_ip_ranges` is a recommended
     * practice when the peered network has multiple peering ranges. This creates
     * your deployments from predictable IP spaces for easier traffic
     * administration. Also, one deployment_group (except 'default') can only be
     * used with the same reserved_ip_ranges which means if the deployment_group
     * has been used with reserved_ip_ranges: [a, b, c], using it with [a, b] or
     * [d, e] is disallowed.
     * Note: we only support up to 5 deployment groups(not including 'default').
     *
     * Generated from protobuf field <code>string deployment_group = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDeploymentGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployment_group = $var;

        return $this;
    }

}

