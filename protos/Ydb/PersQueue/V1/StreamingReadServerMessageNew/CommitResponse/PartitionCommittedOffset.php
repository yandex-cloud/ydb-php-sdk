<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1\StreamingReadServerMessageNew\CommitResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Per-partition commit representation.
 *
 * Generated from protobuf message <code>Ydb.PersQueue.V1.StreamingReadServerMessageNew.CommitResponse.PartitionCommittedOffset</code>
 */
class PartitionCommittedOffset extends \Google\Protobuf\Internal\Message
{
    /**
     * Partition partition stream identifier.
     *
     * Generated from protobuf field <code>int64 partition_stream_id = 1;</code>
     */
    protected $partition_stream_id = 0;
    /**
     * Last committed offset.
     *
     * Generated from protobuf field <code>int64 committed_offset = 2;</code>
     */
    protected $committed_offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $partition_stream_id
     *           Partition partition stream identifier.
     *     @type int|string $committed_offset
     *           Last committed offset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Partition partition stream identifier.
     *
     * Generated from protobuf field <code>int64 partition_stream_id = 1;</code>
     * @return int|string
     */
    public function getPartitionStreamId()
    {
        return $this->partition_stream_id;
    }

    /**
     * Partition partition stream identifier.
     *
     * Generated from protobuf field <code>int64 partition_stream_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartitionStreamId($var)
    {
        GPBUtil::checkInt64($var);
        $this->partition_stream_id = $var;

        return $this;
    }

    /**
     * Last committed offset.
     *
     * Generated from protobuf field <code>int64 committed_offset = 2;</code>
     * @return int|string
     */
    public function getCommittedOffset()
    {
        return $this->committed_offset;
    }

    /**
     * Last committed offset.
     *
     * Generated from protobuf field <code>int64 committed_offset = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommittedOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->committed_offset = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartitionCommittedOffset::class, \Ydb\PersQueue\V1\StreamingReadServerMessageNew_CommitResponse_PartitionCommittedOffset::class);

