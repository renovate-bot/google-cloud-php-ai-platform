<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_garden_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ModelGardenService.GetPublisherModel][google.cloud.aiplatform.v1.ModelGardenService.GetPublisherModel]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GetPublisherModelRequest</code>
 */
class GetPublisherModelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the PublisherModel resource.
     * Format:
     * `publishers/{publisher}/models/{publisher_model}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. The IETF BCP-47 language code representing the language in which
     * the publisher model's text information should be written in.
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $language_code = '';
    /**
     * Optional. PublisherModel view specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PublisherModelView view = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $view = 0;
    /**
     * Optional. Boolean indicates whether the requested model is a Hugging Face
     * model.
     *
     * Generated from protobuf field <code>bool is_hugging_face_model = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $is_hugging_face_model = false;
    /**
     * Optional. Token used to access Hugging Face gated models.
     *
     * Generated from protobuf field <code>string hugging_face_token = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $hugging_face_token = '';

    /**
     * @param string $name Required. The name of the PublisherModel resource.
     *                     Format:
     *                     `publishers/{publisher}/models/{publisher_model}`
     *                     Please see {@see ModelGardenServiceClient::publisherModelName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\GetPublisherModelRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the PublisherModel resource.
     *           Format:
     *           `publishers/{publisher}/models/{publisher_model}`
     *     @type string $language_code
     *           Optional. The IETF BCP-47 language code representing the language in which
     *           the publisher model's text information should be written in.
     *     @type int $view
     *           Optional. PublisherModel view specifying which fields to read.
     *     @type bool $is_hugging_face_model
     *           Optional. Boolean indicates whether the requested model is a Hugging Face
     *           model.
     *     @type string $hugging_face_token
     *           Optional. Token used to access Hugging Face gated models.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelGardenService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the PublisherModel resource.
     * Format:
     * `publishers/{publisher}/models/{publisher_model}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the PublisherModel resource.
     * Format:
     * `publishers/{publisher}/models/{publisher_model}`
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
     * Optional. The IETF BCP-47 language code representing the language in which
     * the publisher model's text information should be written in.
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The IETF BCP-47 language code representing the language in which
     * the publisher model's text information should be written in.
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Optional. PublisherModel view specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PublisherModelView view = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Optional. PublisherModel view specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PublisherModelView view = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\PublisherModelView::class);
        $this->view = $var;

        return $this;
    }

    /**
     * Optional. Boolean indicates whether the requested model is a Hugging Face
     * model.
     *
     * Generated from protobuf field <code>bool is_hugging_face_model = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getIsHuggingFaceModel()
    {
        return $this->is_hugging_face_model;
    }

    /**
     * Optional. Boolean indicates whether the requested model is a Hugging Face
     * model.
     *
     * Generated from protobuf field <code>bool is_hugging_face_model = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setIsHuggingFaceModel($var)
    {
        GPBUtil::checkBool($var);
        $this->is_hugging_face_model = $var;

        return $this;
    }

    /**
     * Optional. Token used to access Hugging Face gated models.
     *
     * Generated from protobuf field <code>string hugging_face_token = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getHuggingFaceToken()
    {
        return $this->hugging_face_token;
    }

    /**
     * Optional. Token used to access Hugging Face gated models.
     *
     * Generated from protobuf field <code>string hugging_face_token = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setHuggingFaceToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->hugging_face_token = $var;

        return $this;
    }

}

