<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/notebook_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [NotebookService.CreateNotebookRuntimeTemplate][google.cloud.aiplatform.v1.NotebookService.CreateNotebookRuntimeTemplate].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateNotebookRuntimeTemplateRequest</code>
 */
class CreateNotebookRuntimeTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to create the
     * NotebookRuntimeTemplate. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The NotebookRuntimeTemplate to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.NotebookRuntimeTemplate notebook_runtime_template = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $notebook_runtime_template = null;
    /**
     * Optional. User specified ID for the notebook runtime template.
     *
     * Generated from protobuf field <code>string notebook_runtime_template_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $notebook_runtime_template_id = '';

    /**
     * @param string                                              $parent                    Required. The resource name of the Location to create the
     *                                                                                       NotebookRuntimeTemplate. Format: `projects/{project}/locations/{location}`
     *                                                                                       Please see {@see NotebookServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\NotebookRuntimeTemplate $notebookRuntimeTemplate   Required. The NotebookRuntimeTemplate to create.
     * @param string                                              $notebookRuntimeTemplateId Optional. User specified ID for the notebook runtime template.
     *
     * @return \Google\Cloud\AIPlatform\V1\CreateNotebookRuntimeTemplateRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AIPlatform\V1\NotebookRuntimeTemplate $notebookRuntimeTemplate, string $notebookRuntimeTemplateId): self
    {
        return (new self())
            ->setParent($parent)
            ->setNotebookRuntimeTemplate($notebookRuntimeTemplate)
            ->setNotebookRuntimeTemplateId($notebookRuntimeTemplateId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to create the
     *           NotebookRuntimeTemplate. Format: `projects/{project}/locations/{location}`
     *     @type \Google\Cloud\AIPlatform\V1\NotebookRuntimeTemplate $notebook_runtime_template
     *           Required. The NotebookRuntimeTemplate to create.
     *     @type string $notebook_runtime_template_id
     *           Optional. User specified ID for the notebook runtime template.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\NotebookService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to create the
     * NotebookRuntimeTemplate. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to create the
     * NotebookRuntimeTemplate. Format: `projects/{project}/locations/{location}`
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
     * Required. The NotebookRuntimeTemplate to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.NotebookRuntimeTemplate notebook_runtime_template = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\NotebookRuntimeTemplate|null
     */
    public function getNotebookRuntimeTemplate()
    {
        return $this->notebook_runtime_template;
    }

    public function hasNotebookRuntimeTemplate()
    {
        return isset($this->notebook_runtime_template);
    }

    public function clearNotebookRuntimeTemplate()
    {
        unset($this->notebook_runtime_template);
    }

    /**
     * Required. The NotebookRuntimeTemplate to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.NotebookRuntimeTemplate notebook_runtime_template = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\NotebookRuntimeTemplate $var
     * @return $this
     */
    public function setNotebookRuntimeTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\NotebookRuntimeTemplate::class);
        $this->notebook_runtime_template = $var;

        return $this;
    }

    /**
     * Optional. User specified ID for the notebook runtime template.
     *
     * Generated from protobuf field <code>string notebook_runtime_template_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNotebookRuntimeTemplateId()
    {
        return $this->notebook_runtime_template_id;
    }

    /**
     * Optional. User specified ID for the notebook runtime template.
     *
     * Generated from protobuf field <code>string notebook_runtime_template_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNotebookRuntimeTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->notebook_runtime_template_id = $var;

        return $this;
    }

}

