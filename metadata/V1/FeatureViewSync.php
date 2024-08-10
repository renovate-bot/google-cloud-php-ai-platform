<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_view_sync.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class FeatureViewSync
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Interval::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/cloud/aiplatform/v1/feature_view_sync.protogoogle.cloud.aiplatform.v1google/api/resource.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/type/interval.proto"�
FeatureViewSync
name (	B�A4
create_time (2.google.protobuf.TimestampB�A,
run_time (2.google.type.IntervalB�A-
final_status (2.google.rpc.StatusB�AR
sync_summary (27.google.cloud.aiplatform.v1.FeatureViewSync.SyncSummaryB�A
satisfies_pzs (B�A
satisfies_pzi (B�A?
SyncSummary

row_synced (B�A

total_slot (B�A:��A�
)aiplatform.googleapis.com/FeatureViewSync�projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}/featureViewSyncs/feature_view_syncB�
com.google.cloud.aiplatform.v1BFeatureViewSyncProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::Aiplatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

