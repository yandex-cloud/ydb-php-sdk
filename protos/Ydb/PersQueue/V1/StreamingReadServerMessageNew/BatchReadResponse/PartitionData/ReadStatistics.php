<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1\StreamingReadServerMessageNew\BatchReadResponse\PartitionData;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.PersQueue.V1.StreamingReadServerMessageNew.BatchReadResponse.PartitionData.ReadStatistics</code>
 */
class ReadStatistics extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 blobs_from_cache = 1;</code>
     */
    protected $blobs_from_cache = 0;
    /**
     * Generated from protobuf field <code>int64 blobs_from_disk = 2;</code>
     */
    protected $blobs_from_disk = 0;
    /**
     * Generated from protobuf field <code>int64 bytes_from_head = 3;</code>
     */
    protected $bytes_from_head = 0;
    /**
     * Generated from protobuf field <code>int64 bytes_from_cache = 4;</code>
     */
    protected $bytes_from_cache = 0;
    /**
     * Generated from protobuf field <code>int64 bytes_from_disk = 5;</code>
     */
    protected $bytes_from_disk = 0;
    /**
     * Generated from protobuf field <code>int64 repack_duration_ms = 6;</code>
     */
    protected $repack_duration_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $blobs_from_cache
     *     @type int|string $blobs_from_disk
     *     @type int|string $bytes_from_head
     *     @type int|string $bytes_from_cache
     *     @type int|string $bytes_from_disk
     *     @type int|string $repack_duration_ms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 blobs_from_cache = 1;</code>
     * @return int|string
     */
    public function getBlobsFromCache()
    {
        return $this->blobs_from_cache;
    }

    /**
     * Generated from protobuf field <code>int64 blobs_from_cache = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBlobsFromCache($var)
    {
        GPBUtil::checkInt64($var);
        $this->blobs_from_cache = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 blobs_from_disk = 2;</code>
     * @return int|string
     */
    public function getBlobsFromDisk()
    {
        return $this->blobs_from_disk;
    }

    /**
     * Generated from protobuf field <code>int64 blobs_from_disk = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBlobsFromDisk($var)
    {
        GPBUtil::checkInt64($var);
        $this->blobs_from_disk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 bytes_from_head = 3;</code>
     * @return int|string
     */
    public function getBytesFromHead()
    {
        return $this->bytes_from_head;
    }

    /**
     * Generated from protobuf field <code>int64 bytes_from_head = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytesFromHead($var)
    {
        GPBUtil::checkInt64($var);
        $this->bytes_from_head = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 bytes_from_cache = 4;</code>
     * @return int|string
     */
    public function getBytesFromCache()
    {
        return $this->bytes_from_cache;
    }

    /**
     * Generated from protobuf field <code>int64 bytes_from_cache = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytesFromCache($var)
    {
        GPBUtil::checkInt64($var);
        $this->bytes_from_cache = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 bytes_from_disk = 5;</code>
     * @return int|string
     */
    public function getBytesFromDisk()
    {
        return $this->bytes_from_disk;
    }

    /**
     * Generated from protobuf field <code>int64 bytes_from_disk = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytesFromDisk($var)
    {
        GPBUtil::checkInt64($var);
        $this->bytes_from_disk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 repack_duration_ms = 6;</code>
     * @return int|string
     */
    public function getRepackDurationMs()
    {
        return $this->repack_duration_ms;
    }

    /**
     * Generated from protobuf field <code>int64 repack_duration_ms = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRepackDurationMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->repack_duration_ms = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReadStatistics::class, \Ydb\PersQueue\V1\StreamingReadServerMessageNew_BatchReadResponse_PartitionData_ReadStatistics::class);

