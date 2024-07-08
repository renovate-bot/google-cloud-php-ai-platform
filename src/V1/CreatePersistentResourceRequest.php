<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/persistent_resource_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [PersistentResourceService.CreatePersistentResource][google.cloud.aiplatform.v1.PersistentResourceService.CreatePersistentResource].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreatePersistentResourceRequest</code>
 */
class CreatePersistentResourceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to create the
     * PersistentResource in. Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The PersistentResource to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PersistentResource persistent_resource = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $persistent_resource = null;
    /**
     * Required. The ID to use for the PersistentResource, which become the final
     * component of the PersistentResource's resource name.
     * The maximum length is 63 characters, and valid characters
     * are `/^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$/`.
     *
     * Generated from protobuf field <code>string persistent_resource_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $persistent_resource_id = '';

    /**
     * @param string                                         $parent               Required. The resource name of the Location to create the
     *                                                                             PersistentResource in. Format: `projects/{project}/locations/{location}`
     *                                                                             Please see {@see PersistentResourceServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\PersistentResource $persistentResource   Required. The PersistentResource to create.
     * @param string                                         $persistentResourceId Required. The ID to use for the PersistentResource, which become the final
     *                                                                             component of the PersistentResource's resource name.
     *
     *                                                                             The maximum length is 63 characters, and valid characters
     *                                                                             are `/^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$/`.
     *
     * @return \Google\Cloud\AIPlatform\V1\CreatePersistentResourceRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AIPlatform\V1\PersistentResource $persistentResource, string $persistentResourceId): self
    {
        return (new self())
            ->setParent($parent)
            ->setPersistentResource($persistentResource)
            ->setPersistentResourceId($persistentResourceId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to create the
     *           PersistentResource in. Format: `projects/{project}/locations/{location}`
     *     @type \Google\Cloud\AIPlatform\V1\PersistentResource $persistent_resource
     *           Required. The PersistentResource to create.
     *     @type string $persistent_resource_id
     *           Required. The ID to use for the PersistentResource, which become the final
     *           component of the PersistentResource's resource name.
     *           The maximum length is 63 characters, and valid characters
     *           are `/^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$/`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PersistentResourceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to create the
     * PersistentResource in. Format: `projects/{project}/locations/{location}`
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
     * PersistentResource in. Format: `projects/{project}/locations/{location}`
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
     * Required. The PersistentResource to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PersistentResource persistent_resource = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\PersistentResource|null
     */
    public function getPersistentResource()
    {
        return $this->persistent_resource;
    }

    public function hasPersistentResource()
    {
        return isset($this->persistent_resource);
    }

    public function clearPersistentResource()
    {
        unset($this->persistent_resource);
    }

    /**
     * Required. The PersistentResource to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.PersistentResource persistent_resource = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\PersistentResource $var
     * @return $this
     */
    public function setPersistentResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\PersistentResource::class);
        $this->persistent_resource = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the PersistentResource, which become the final
     * component of the PersistentResource's resource name.
     * The maximum length is 63 characters, and valid characters
     * are `/^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$/`.
     *
     * Generated from protobuf field <code>string persistent_resource_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPersistentResourceId()
    {
        return $this->persistent_resource_id;
    }

    /**
     * Required. The ID to use for the PersistentResource, which become the final
     * component of the PersistentResource's resource name.
     * The maximum length is 63 characters, and valid characters
     * are `/^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$/`.
     *
     * Generated from protobuf field <code>string persistent_resource_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPersistentResourceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->persistent_resource_id = $var;

        return $this;
    }

}
