<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/notebook_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class NotebookService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\NotebookExecutionJob::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\NotebookRuntime::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Operation::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�G
1google/cloud/aiplatform/v1/notebook_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto7google/cloud/aiplatform/v1/notebook_execution_job.proto1google/cloud/aiplatform/v1/notebook_runtime.proto*google/cloud/aiplatform/v1/operation.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
$CreateNotebookRuntimeTemplateRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location[
notebook_runtime_template (23.google.cloud.aiplatform.v1.NotebookRuntimeTemplateB�A)
notebook_runtime_template_id (	B�A"�
.CreateNotebookRuntimeTemplateOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"l
!GetNotebookRuntimeTemplateRequestG
name (	B9�A�A3
1aiplatform.googleapis.com/NotebookRuntimeTemplate"�
#ListNotebookRuntimeTemplatesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	B�A
	page_size (B�A

page_token (	B�A2
	read_mask (2.google.protobuf.FieldMaskB�A
order_by (	B�A"�
$ListNotebookRuntimeTemplatesResponseW
notebook_runtime_templates (23.google.cloud.aiplatform.v1.NotebookRuntimeTemplate
next_page_token (	"o
$DeleteNotebookRuntimeTemplateRequestG
name (	B9�A�A3
1aiplatform.googleapis.com/NotebookRuntimeTemplate"�
$UpdateNotebookRuntimeTemplateRequest[
notebook_runtime_template (23.google.cloud.aiplatform.v1.NotebookRuntimeTemplateB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
AssignNotebookRuntimeRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location\\
notebook_runtime_template (	B9�A�A3
1aiplatform.googleapis.com/NotebookRuntimeTemplateJ
notebook_runtime (2+.google.cloud.aiplatform.v1.NotebookRuntimeB�A 
notebook_runtime_id (	B�A"�
&AssignNotebookRuntimeOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata
progress_message (	"\\
GetNotebookRuntimeRequest?
name (	B1�A�A+
)aiplatform.googleapis.com/NotebookRuntime"�
ListNotebookRuntimesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	B�A
	page_size (B�A

page_token (	B�A2
	read_mask (2.google.protobuf.FieldMaskB�A
order_by (	B�A"
ListNotebookRuntimesResponseF
notebook_runtimes (2+.google.cloud.aiplatform.v1.NotebookRuntime
next_page_token (	"_
DeleteNotebookRuntimeRequest?
name (	B1�A�A+
)aiplatform.googleapis.com/NotebookRuntime"`
UpgradeNotebookRuntimeRequest?
name (	B1�A�A+
)aiplatform.googleapis.com/NotebookRuntime"�
\'UpgradeNotebookRuntimeOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata
progress_message (	" 
UpgradeNotebookRuntimeResponse"^
StartNotebookRuntimeRequest?
name (	B1�A�A+
)aiplatform.googleapis.com/NotebookRuntime"�
%StartNotebookRuntimeOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata
progress_message (	"
StartNotebookRuntimeResponse"]
StopNotebookRuntimeRequest?
name (	B1�A�A+
)aiplatform.googleapis.com/NotebookRuntime"v
$StopNotebookRuntimeOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"
StopNotebookRuntimeResponse"�
!CreateNotebookExecutionJobRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationU
notebook_execution_job (20.google.cloud.aiplatform.v1.NotebookExecutionJobB�A&
notebook_execution_job_id (	B�A"�
+CreateNotebookExecutionJobOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata
progress_message (	"�
GetNotebookExecutionJobRequestD
name (	B6�A�A0
.aiplatform.googleapis.com/NotebookExecutionJobG
view (24.google.cloud.aiplatform.v1.NotebookExecutionJobViewB�A"�
 ListNotebookExecutionJobsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
filter (	B�A
	page_size (B�A

page_token (	B�A
order_by (	B�AG
view (24.google.cloud.aiplatform.v1.NotebookExecutionJobViewB�A"�
!ListNotebookExecutionJobsResponseQ
notebook_execution_jobs (20.google.cloud.aiplatform.v1.NotebookExecutionJob
next_page_token (	"i
!DeleteNotebookExecutionJobRequestD
name (	B6�A�A0
.aiplatform.googleapis.com/NotebookExecutionJob*�
NotebookExecutionJobView+
\'NOTEBOOK_EXECUTION_JOB_VIEW_UNSPECIFIED %
!NOTEBOOK_EXECUTION_JOB_VIEW_BASIC$
 NOTEBOOK_EXECUTION_JOB_VIEW_FULL2�!
NotebookService�
CreateNotebookRuntimeTemplate@.google.cloud.aiplatform.v1.CreateNotebookRuntimeTemplateRequest.google.longrunning.Operation"��AI
NotebookRuntimeTemplate.CreateNotebookRuntimeTemplateOperationMetadata�A=parent,notebook_runtime_template,notebook_runtime_template_id���Y"</v1/{parent=projects/*/locations/*}/notebookRuntimeTemplates:notebook_runtime_template�
GetNotebookRuntimeTemplate=.google.cloud.aiplatform.v1.GetNotebookRuntimeTemplateRequest3.google.cloud.aiplatform.v1.NotebookRuntimeTemplate"K�Aname���></v1/{name=projects/*/locations/*/notebookRuntimeTemplates/*}�
ListNotebookRuntimeTemplates?.google.cloud.aiplatform.v1.ListNotebookRuntimeTemplatesRequest@.google.cloud.aiplatform.v1.ListNotebookRuntimeTemplatesResponse"M�Aparent���></v1/{parent=projects/*/locations/*}/notebookRuntimeTemplates�
DeleteNotebookRuntimeTemplate@.google.cloud.aiplatform.v1.DeleteNotebookRuntimeTemplateRequest.google.longrunning.Operation"~�A0
google.protobuf.EmptyDeleteOperationMetadata�Aname���>*</v1/{name=projects/*/locations/*/notebookRuntimeTemplates/*}�
UpdateNotebookRuntimeTemplate@.google.cloud.aiplatform.v1.UpdateNotebookRuntimeTemplateRequest3.google.cloud.aiplatform.v1.NotebookRuntimeTemplate"��A%notebook_runtime_template,update_mask���s2V/v1/{notebook_runtime_template.name=projects/*/locations/*/notebookRuntimeTemplates/*}:notebook_runtime_template�
AssignNotebookRuntime8.google.cloud.aiplatform.v1.AssignNotebookRuntimeRequest.google.longrunning.Operation"��A9
NotebookRuntime&AssignNotebookRuntimeOperationMetadata�AEparent,notebook_runtime_template,notebook_runtime,notebook_runtime_id���@";/v1/{parent=projects/*/locations/*}/notebookRuntimes:assign:*�
GetNotebookRuntime5.google.cloud.aiplatform.v1.GetNotebookRuntimeRequest+.google.cloud.aiplatform.v1.NotebookRuntime"C�Aname���64/v1/{name=projects/*/locations/*/notebookRuntimes/*}�
ListNotebookRuntimes7.google.cloud.aiplatform.v1.ListNotebookRuntimesRequest8.google.cloud.aiplatform.v1.ListNotebookRuntimesResponse"E�Aparent���64/v1/{parent=projects/*/locations/*}/notebookRuntimes�
DeleteNotebookRuntime8.google.cloud.aiplatform.v1.DeleteNotebookRuntimeRequest.google.longrunning.Operation"v�A0
google.protobuf.EmptyDeleteOperationMetadata�Aname���6*4/v1/{name=projects/*/locations/*/notebookRuntimes/*}�
UpgradeNotebookRuntime9.google.cloud.aiplatform.v1.UpgradeNotebookRuntimeRequest.google.longrunning.Operation"��AI
UpgradeNotebookRuntimeResponse\'UpgradeNotebookRuntimeOperationMetadata�Aname���A"</v1/{name=projects/*/locations/*/notebookRuntimes/*}:upgrade:*�
StartNotebookRuntime7.google.cloud.aiplatform.v1.StartNotebookRuntimeRequest.google.longrunning.Operation"��AE
StartNotebookRuntimeResponse%StartNotebookRuntimeOperationMetadata�Aname���?":/v1/{name=projects/*/locations/*/notebookRuntimes/*}:start:*�
StopNotebookRuntime6.google.cloud.aiplatform.v1.StopNotebookRuntimeRequest.google.longrunning.Operation"��AC
StopNotebookRuntimeResponse$StopNotebookRuntimeOperationMetadata�Aname���>"9/v1/{name=projects/*/locations/*/notebookRuntimes/*}:stop:*�
CreateNotebookExecutionJob=.google.cloud.aiplatform.v1.CreateNotebookExecutionJobRequest.google.longrunning.Operation"��AC
NotebookExecutionJob+CreateNotebookExecutionJobOperationMetadata�A7parent,notebook_execution_job,notebook_execution_job_id���S"9/v1/{parent=projects/*/locations/*}/notebookExecutionJobs:notebook_execution_job�
GetNotebookExecutionJob:.google.cloud.aiplatform.v1.GetNotebookExecutionJobRequest0.google.cloud.aiplatform.v1.NotebookExecutionJob"H�Aname���;9/v1/{name=projects/*/locations/*/notebookExecutionJobs/*}�
ListNotebookExecutionJobs<.google.cloud.aiplatform.v1.ListNotebookExecutionJobsRequest=.google.cloud.aiplatform.v1.ListNotebookExecutionJobsResponse"J�Aparent���;9/v1/{parent=projects/*/locations/*}/notebookExecutionJobs�
DeleteNotebookExecutionJob=.google.cloud.aiplatform.v1.DeleteNotebookExecutionJobRequest.google.longrunning.Operation"{�A0
google.protobuf.EmptyDeleteOperationMetadata�Aname���;*9/v1/{name=projects/*/locations/*/notebookExecutionJobs/*}M�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BNotebookServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

