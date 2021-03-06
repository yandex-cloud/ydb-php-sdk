<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_cluster_discovery.proto

namespace Ydb\PersQueue\ClusterDiscovery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.PersQueue.ClusterDiscovery.DiscoverClustersRequest</code>
 */
class DiscoverClustersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     */
    protected $operation_params = null;
    /**
     * Clusters will be discovered separately for each element of the list.
     *
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.ClusterDiscovery.WriteSessionParams write_sessions = 2;</code>
     */
    private $write_sessions;
    /**
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.ClusterDiscovery.ReadSessionParams read_sessions = 3;</code>
     */
    private $read_sessions;
    /**
     * Latest clusters status version known to the client application. Use 0 by default.
     *
     * Generated from protobuf field <code>int64 minimal_version = 4;</code>
     */
    protected $minimal_version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Operations\OperationParams $operation_params
     *     @type \Ydb\PersQueue\ClusterDiscovery\WriteSessionParams[]|\Google\Protobuf\Internal\RepeatedField $write_sessions
     *           Clusters will be discovered separately for each element of the list.
     *     @type \Ydb\PersQueue\ClusterDiscovery\ReadSessionParams[]|\Google\Protobuf\Internal\RepeatedField $read_sessions
     *     @type int|string $minimal_version
     *           Latest clusters status version known to the client application. Use 0 by default.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueClusterDiscovery::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     * @return \Ydb\Operations\OperationParams
     */
    public function getOperationParams()
    {
        return isset($this->operation_params) ? $this->operation_params : null;
    }

    public function hasOperationParams()
    {
        return isset($this->operation_params);
    }

    public function clearOperationParams()
    {
        unset($this->operation_params);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     * @param \Ydb\Operations\OperationParams $var
     * @return $this
     */
    public function setOperationParams($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Operations\OperationParams::class);
        $this->operation_params = $var;

        return $this;
    }

    /**
     * Clusters will be discovered separately for each element of the list.
     *
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.ClusterDiscovery.WriteSessionParams write_sessions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWriteSessions()
    {
        return $this->write_sessions;
    }

    /**
     * Clusters will be discovered separately for each element of the list.
     *
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.ClusterDiscovery.WriteSessionParams write_sessions = 2;</code>
     * @param \Ydb\PersQueue\ClusterDiscovery\WriteSessionParams[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWriteSessions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\PersQueue\ClusterDiscovery\WriteSessionParams::class);
        $this->write_sessions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.ClusterDiscovery.ReadSessionParams read_sessions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReadSessions()
    {
        return $this->read_sessions;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.ClusterDiscovery.ReadSessionParams read_sessions = 3;</code>
     * @param \Ydb\PersQueue\ClusterDiscovery\ReadSessionParams[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReadSessions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\PersQueue\ClusterDiscovery\ReadSessionParams::class);
        $this->read_sessions = $arr;

        return $this;
    }

    /**
     * Latest clusters status version known to the client application. Use 0 by default.
     *
     * Generated from protobuf field <code>int64 minimal_version = 4;</code>
     * @return int|string
     */
    public function getMinimalVersion()
    {
        return $this->minimal_version;
    }

    /**
     * Latest clusters status version known to the client application. Use 0 by default.
     *
     * Generated from protobuf field <code>int64 minimal_version = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinimalVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->minimal_version = $var;

        return $this;
    }

}

