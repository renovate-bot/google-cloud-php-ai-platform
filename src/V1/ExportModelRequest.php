<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ModelService.ExportModel][google.cloud.aiplatform.v1.ModelService.ExportModel].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExportModelRequest</code>
 */
class ExportModelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Model to export.
     * The resource name may contain version id or version alias to specify the
     * version, if no version is specified, the default version will be exported.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The desired output location and configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportModelRequest.OutputConfig output_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $output_config = null;

    /**
     * @param string                                                      $name         Required. The resource name of the Model to export.
     *                                                                                  The resource name may contain version id or version alias to specify the
     *                                                                                  version, if no version is specified, the default version will be exported. Please see
     *                                                                                  {@see ModelServiceClient::modelName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\ExportModelRequest\OutputConfig $outputConfig Required. The desired output location and configuration.
     *
     * @return \Google\Cloud\AIPlatform\V1\ExportModelRequest
     *
     * @experimental
     */
    public static function build(string $name, \Google\Cloud\AIPlatform\V1\ExportModelRequest\OutputConfig $outputConfig): self
    {
        return (new self())
            ->setName($name)
            ->setOutputConfig($outputConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the Model to export.
     *           The resource name may contain version id or version alias to specify the
     *           version, if no version is specified, the default version will be exported.
     *     @type \Google\Cloud\AIPlatform\V1\ExportModelRequest\OutputConfig $output_config
     *           Required. The desired output location and configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Model to export.
     * The resource name may contain version id or version alias to specify the
     * version, if no version is specified, the default version will be exported.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Model to export.
     * The resource name may contain version id or version alias to specify the
     * version, if no version is specified, the default version will be exported.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The desired output location and configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportModelRequest.OutputConfig output_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\ExportModelRequest\OutputConfig|null
     */
    public function getOutputConfig()
    {
        return $this->output_config;
    }

    public function hasOutputConfig()
    {
        return isset($this->output_config);
    }

    public function clearOutputConfig()
    {
        unset($this->output_config);
    }

    /**
     * Required. The desired output location and configuration.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ExportModelRequest.OutputConfig output_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\ExportModelRequest\OutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ExportModelRequest\OutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

}

