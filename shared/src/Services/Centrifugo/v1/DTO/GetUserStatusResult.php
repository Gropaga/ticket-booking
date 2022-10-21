<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/centrifugo/v1/message.proto

namespace Spiral\Shared\Services\Centrifugo\v1\DTO;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.centrifugo.v1.dto.GetUserStatusResult</code>
 */
class GetUserStatusResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .api.centrifugo.v1.dto.UserStatus statuses = 1;</code>
     */
    private $statuses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Spiral\Shared\Services\Centrifugo\v1\DTO\UserStatus[]|\Google\Protobuf\Internal\RepeatedField $statuses
     * }
     */
    public function __construct($data = NULL) {
        \Spiral\Shared\Services\Centrifugo\v1\GPBMetadata\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .api.centrifugo.v1.dto.UserStatus statuses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatuses()
    {
        return $this->statuses;
    }

    /**
     * Generated from protobuf field <code>repeated .api.centrifugo.v1.dto.UserStatus statuses = 1;</code>
     * @param \Spiral\Shared\Services\Centrifugo\v1\DTO\UserStatus[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatuses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Spiral\Shared\Services\Centrifugo\v1\DTO\UserStatus::class);
        $this->statuses = $arr;

        return $this;
    }

}

