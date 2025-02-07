<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model.proto

namespace Google\Cloud\AIPlatform\V1\Probe;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GrpcAction checks the health of a container using a gRPC service.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Probe.GrpcAction</code>
 */
class GrpcAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Port number of the gRPC service. Number must be in the range 1 to 65535.
     *
     * Generated from protobuf field <code>int32 port = 1;</code>
     */
    protected $port = 0;
    /**
     * Service is the name of the service to place in the gRPC
     * HealthCheckRequest (see
     * https://github.com/grpc/grpc/blob/master/doc/health-checking.md).
     * If this is not specified, the default behavior is defined by gRPC.
     *
     * Generated from protobuf field <code>string service = 2;</code>
     */
    protected $service = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $port
     *           Port number of the gRPC service. Number must be in the range 1 to 65535.
     *     @type string $service
     *           Service is the name of the service to place in the gRPC
     *           HealthCheckRequest (see
     *           https://github.com/grpc/grpc/blob/master/doc/health-checking.md).
     *           If this is not specified, the default behavior is defined by gRPC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Model::initOnce();
        parent::__construct($data);
    }

    /**
     * Port number of the gRPC service. Number must be in the range 1 to 65535.
     *
     * Generated from protobuf field <code>int32 port = 1;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Port number of the gRPC service. Number must be in the range 1 to 65535.
     *
     * Generated from protobuf field <code>int32 port = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Service is the name of the service to place in the gRPC
     * HealthCheckRequest (see
     * https://github.com/grpc/grpc/blob/master/doc/health-checking.md).
     * If this is not specified, the default behavior is defined by gRPC.
     *
     * Generated from protobuf field <code>string service = 2;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Service is the name of the service to place in the gRPC
     * HealthCheckRequest (see
     * https://github.com/grpc/grpc/blob/master/doc/health-checking.md).
     * If this is not specified, the default behavior is defined by gRPC.
     *
     * Generated from protobuf field <code>string service = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

}


