<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [MetadataService.UpdateArtifact][google.cloud.aiplatform.v1.MetadataService.UpdateArtifact].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateArtifactRequest</code>
 */
class UpdateArtifactRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Artifact containing updates.
     * The Artifact's [Artifact.name][google.cloud.aiplatform.v1.Artifact.name] field is used to identify the Artifact to
     * be updated.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Artifact artifact = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $artifact = null;
    /**
     * Required. A FieldMask indicating which fields should be updated.
     * Functionality of this field is not yet supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * If set to true, and the [Artifact][google.cloud.aiplatform.v1.Artifact] is not found, a new [Artifact][google.cloud.aiplatform.v1.Artifact] is
     * created.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     */
    private $allow_missing = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Artifact $artifact
     *           Required. The Artifact containing updates.
     *           The Artifact's [Artifact.name][google.cloud.aiplatform.v1.Artifact.name] field is used to identify the Artifact to
     *           be updated.
     *           Format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. A FieldMask indicating which fields should be updated.
     *           Functionality of this field is not yet supported.
     *     @type bool $allow_missing
     *           If set to true, and the [Artifact][google.cloud.aiplatform.v1.Artifact] is not found, a new [Artifact][google.cloud.aiplatform.v1.Artifact] is
     *           created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Artifact containing updates.
     * The Artifact's [Artifact.name][google.cloud.aiplatform.v1.Artifact.name] field is used to identify the Artifact to
     * be updated.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Artifact artifact = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\Artifact|null
     */
    public function getArtifact()
    {
        return $this->artifact;
    }

    public function hasArtifact()
    {
        return isset($this->artifact);
    }

    public function clearArtifact()
    {
        unset($this->artifact);
    }

    /**
     * Required. The Artifact containing updates.
     * The Artifact's [Artifact.name][google.cloud.aiplatform.v1.Artifact.name] field is used to identify the Artifact to
     * be updated.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/artifacts/{artifact}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Artifact artifact = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\Artifact $var
     * @return $this
     */
    public function setArtifact($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Artifact::class);
        $this->artifact = $var;

        return $this;
    }

    /**
     * Required. A FieldMask indicating which fields should be updated.
     * Functionality of this field is not yet supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. A FieldMask indicating which fields should be updated.
     * Functionality of this field is not yet supported.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * If set to true, and the [Artifact][google.cloud.aiplatform.v1.Artifact] is not found, a new [Artifact][google.cloud.aiplatform.v1.Artifact] is
     * created.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and the [Artifact][google.cloud.aiplatform.v1.Artifact] is not found, a new [Artifact][google.cloud.aiplatform.v1.Artifact] is
     * created.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

}

