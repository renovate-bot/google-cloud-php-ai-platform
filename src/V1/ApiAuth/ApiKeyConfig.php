<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/api_auth.proto

namespace Google\Cloud\AIPlatform\V1\ApiAuth;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The API secret.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ApiAuth.ApiKeyConfig</code>
 */
class ApiKeyConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The SecretManager secret version resource name storing API key.
     * e.g. projects/{project}/secrets/{secret}/versions/{version}
     *
     * Generated from protobuf field <code>string api_key_secret_version = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $api_key_secret_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $api_key_secret_version
     *           Required. The SecretManager secret version resource name storing API key.
     *           e.g. projects/{project}/secrets/{secret}/versions/{version}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ApiAuth::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The SecretManager secret version resource name storing API key.
     * e.g. projects/{project}/secrets/{secret}/versions/{version}
     *
     * Generated from protobuf field <code>string api_key_secret_version = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getApiKeySecretVersion()
    {
        return $this->api_key_secret_version;
    }

    /**
     * Required. The SecretManager secret version resource name storing API key.
     * e.g. projects/{project}/secrets/{secret}/versions/{version}
     *
     * Generated from protobuf field <code>string api_key_secret_version = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setApiKeySecretVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_key_secret_version = $var;

        return $this;
    }

}

