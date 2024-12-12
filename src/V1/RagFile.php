<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_data.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A RagFile contains user data for chunking, embedding and indexing.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.RagFile</code>
 */
class RagFile extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the RagFile.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. The display name of the RagFile.
     * The name can be up to 128 characters long and can consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Optional. The description of the RagFile.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. Timestamp when this RagFile was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Timestamp when this RagFile was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. State of the RagFile.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FileStatus file_status = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $file_status = null;
    protected $rag_file_source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\GcsSource $gcs_source
     *           Output only. Google Cloud Storage location of the RagFile.
     *           It does not support wildcards in the Cloud Storage uri for now.
     *     @type \Google\Cloud\AIPlatform\V1\GoogleDriveSource $google_drive_source
     *           Output only. Google Drive location. Supports importing individual files
     *           as well as Google Drive folders.
     *     @type \Google\Cloud\AIPlatform\V1\DirectUploadSource $direct_upload_source
     *           Output only. The RagFile is encapsulated and uploaded in the
     *           UploadRagFile request.
     *     @type \Google\Cloud\AIPlatform\V1\SlackSource $slack_source
     *           The RagFile is imported from a Slack channel.
     *     @type \Google\Cloud\AIPlatform\V1\JiraSource $jira_source
     *           The RagFile is imported from a Jira query.
     *     @type \Google\Cloud\AIPlatform\V1\SharePointSources $share_point_sources
     *           The RagFile is imported from a SharePoint source.
     *     @type string $name
     *           Output only. The resource name of the RagFile.
     *     @type string $display_name
     *           Required. The display name of the RagFile.
     *           The name can be up to 128 characters long and can consist of any UTF-8
     *           characters.
     *     @type string $description
     *           Optional. The description of the RagFile.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this RagFile was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when this RagFile was last updated.
     *     @type \Google\Cloud\AIPlatform\V1\FileStatus $file_status
     *           Output only. State of the RagFile.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VertexRagData::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Google Cloud Storage location of the RagFile.
     * It does not support wildcards in the Cloud Storage uri for now.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsSource gcs_source = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\GcsSource|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(8);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(8);
    }

    /**
     * Output only. Google Cloud Storage location of the RagFile.
     * It does not support wildcards in the Cloud Storage uri for now.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsSource gcs_source = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GcsSource::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Output only. Google Drive location. Supports importing individual files
     * as well as Google Drive folders.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GoogleDriveSource google_drive_source = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\GoogleDriveSource|null
     */
    public function getGoogleDriveSource()
    {
        return $this->readOneof(9);
    }

    public function hasGoogleDriveSource()
    {
        return $this->hasOneof(9);
    }

    /**
     * Output only. Google Drive location. Supports importing individual files
     * as well as Google Drive folders.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GoogleDriveSource google_drive_source = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\GoogleDriveSource $var
     * @return $this
     */
    public function setGoogleDriveSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GoogleDriveSource::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Output only. The RagFile is encapsulated and uploaded in the
     * UploadRagFile request.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DirectUploadSource direct_upload_source = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\DirectUploadSource|null
     */
    public function getDirectUploadSource()
    {
        return $this->readOneof(10);
    }

    public function hasDirectUploadSource()
    {
        return $this->hasOneof(10);
    }

    /**
     * Output only. The RagFile is encapsulated and uploaded in the
     * UploadRagFile request.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.DirectUploadSource direct_upload_source = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\DirectUploadSource $var
     * @return $this
     */
    public function setDirectUploadSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\DirectUploadSource::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * The RagFile is imported from a Slack channel.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SlackSource slack_source = 11;</code>
     * @return \Google\Cloud\AIPlatform\V1\SlackSource|null
     */
    public function getSlackSource()
    {
        return $this->readOneof(11);
    }

    public function hasSlackSource()
    {
        return $this->hasOneof(11);
    }

    /**
     * The RagFile is imported from a Slack channel.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SlackSource slack_source = 11;</code>
     * @param \Google\Cloud\AIPlatform\V1\SlackSource $var
     * @return $this
     */
    public function setSlackSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\SlackSource::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * The RagFile is imported from a Jira query.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.JiraSource jira_source = 12;</code>
     * @return \Google\Cloud\AIPlatform\V1\JiraSource|null
     */
    public function getJiraSource()
    {
        return $this->readOneof(12);
    }

    public function hasJiraSource()
    {
        return $this->hasOneof(12);
    }

    /**
     * The RagFile is imported from a Jira query.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.JiraSource jira_source = 12;</code>
     * @param \Google\Cloud\AIPlatform\V1\JiraSource $var
     * @return $this
     */
    public function setJiraSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\JiraSource::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * The RagFile is imported from a SharePoint source.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SharePointSources share_point_sources = 14;</code>
     * @return \Google\Cloud\AIPlatform\V1\SharePointSources|null
     */
    public function getSharePointSources()
    {
        return $this->readOneof(14);
    }

    public function hasSharePointSources()
    {
        return $this->hasOneof(14);
    }

    /**
     * The RagFile is imported from a SharePoint source.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SharePointSources share_point_sources = 14;</code>
     * @param \Google\Cloud\AIPlatform\V1\SharePointSources $var
     * @return $this
     */
    public function setSharePointSources($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\SharePointSources::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Output only. The resource name of the RagFile.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the RagFile.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. The display name of the RagFile.
     * The name can be up to 128 characters long and can consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the RagFile.
     * The name can be up to 128 characters long and can consist of any UTF-8
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. The description of the RagFile.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. The description of the RagFile.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this RagFile was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this RagFile was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when this RagFile was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Timestamp when this RagFile was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. State of the RagFile.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FileStatus file_status = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\FileStatus|null
     */
    public function getFileStatus()
    {
        return $this->file_status;
    }

    public function hasFileStatus()
    {
        return isset($this->file_status);
    }

    public function clearFileStatus()
    {
        unset($this->file_status);
    }

    /**
     * Output only. State of the RagFile.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FileStatus file_status = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\FileStatus $var
     * @return $this
     */
    public function setFileStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FileStatus::class);
        $this->file_status = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRagFileSource()
    {
        return $this->whichOneof("rag_file_source");
    }

}
