<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_online_store_admin_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [FeatureOnlineStoreAdminService.DeleteFeatureViews][].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeleteFeatureViewRequest</code>
 */
class DeleteFeatureViewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the FeatureView to be deleted.
     * Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The name of the FeatureView to be deleted.
     *                     Format:
     *                     `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}`
     *                     Please see {@see FeatureOnlineStoreAdminServiceClient::featureViewName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\DeleteFeatureViewRequest
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
     *           Required. The name of the FeatureView to be deleted.
     *           Format:
     *           `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureOnlineStoreAdminService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the FeatureView to be deleted.
     * Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the FeatureView to be deleted.
     * Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}`
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

}

