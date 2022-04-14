<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/batch_prediction_job.proto

namespace Google\Cloud\AIPlatform\V1\BatchPredictionJob;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Further describes this job's output.
 * Supplements [output_config][google.cloud.aiplatform.v1.BatchPredictionJob.output_config].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchPredictionJob.OutputInfo</code>
 */
class OutputInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the BigQuery table created, in
     * `predictions_<timestamp>`
     * format, into which the prediction output is written.
     * Can be used by UI to generate the BigQuery output path, for example.
     *
     * Generated from protobuf field <code>string bigquery_output_table = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $bigquery_output_table = '';
    protected $output_location;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gcs_output_directory
     *           Output only. The full path of the Cloud Storage directory created, into which
     *           the prediction output is written.
     *     @type string $bigquery_output_dataset
     *           Output only. The path of the BigQuery dataset created, in
     *           `bq://projectId.bqDatasetId`
     *           format, into which the prediction output is written.
     *     @type string $bigquery_output_table
     *           Output only. The name of the BigQuery table created, in
     *           `predictions_<timestamp>`
     *           format, into which the prediction output is written.
     *           Can be used by UI to generate the BigQuery output path, for example.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\BatchPredictionJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The full path of the Cloud Storage directory created, into which
     * the prediction output is written.
     *
     * Generated from protobuf field <code>string gcs_output_directory = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getGcsOutputDirectory()
    {
        return $this->readOneof(1);
    }

    public function hasGcsOutputDirectory()
    {
        return $this->hasOneof(1);
    }

    /**
     * Output only. The full path of the Cloud Storage directory created, into which
     * the prediction output is written.
     *
     * Generated from protobuf field <code>string gcs_output_directory = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setGcsOutputDirectory($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Output only. The path of the BigQuery dataset created, in
     * `bq://projectId.bqDatasetId`
     * format, into which the prediction output is written.
     *
     * Generated from protobuf field <code>string bigquery_output_dataset = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getBigqueryOutputDataset()
    {
        return $this->readOneof(2);
    }

    public function hasBigqueryOutputDataset()
    {
        return $this->hasOneof(2);
    }

    /**
     * Output only. The path of the BigQuery dataset created, in
     * `bq://projectId.bqDatasetId`
     * format, into which the prediction output is written.
     *
     * Generated from protobuf field <code>string bigquery_output_dataset = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setBigqueryOutputDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Output only. The name of the BigQuery table created, in
     * `predictions_<timestamp>`
     * format, into which the prediction output is written.
     * Can be used by UI to generate the BigQuery output path, for example.
     *
     * Generated from protobuf field <code>string bigquery_output_table = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getBigqueryOutputTable()
    {
        return $this->bigquery_output_table;
    }

    /**
     * Output only. The name of the BigQuery table created, in
     * `predictions_<timestamp>`
     * format, into which the prediction output is written.
     * Can be used by UI to generate the BigQuery output path, for example.
     *
     * Generated from protobuf field <code>string bigquery_output_table = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setBigqueryOutputTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->bigquery_output_table = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getOutputLocation()
    {
        return $this->whichOneof("output_location");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OutputInfo::class, \Google\Cloud\AIPlatform\V1\BatchPredictionJob_OutputInfo::class);

