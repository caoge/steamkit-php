<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer.CMsgClientFriendsList
 */
class CMsgClientFriendsList extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * bincremental optional bool = 1
     *
     * @var bool
     */
    protected $bincremental = null;

    /**
     * friends repeated message = 2
     *
     * @var \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientFriendsList\Friend>
     */
    protected $friends = null;

    /**
     * max_friend_count optional uint32 = 3
     *
     * @var int
     */
    protected $max_friend_count = null;

    /**
     * active_friend_count optional uint32 = 4
     *
     * @var int
     */
    protected $active_friend_count = null;

    /**
     * friends_limit_hit optional bool = 5
     *
     * @var bool
     */
    protected $friends_limit_hit = null;

    /**
     * Check if 'bincremental' has a value
     *
     * @return bool
     */
    public function hasBincremental()
    {
        return $this->bincremental !== null;
    }

    /**
     * Get 'bincremental' value
     *
     * @return bool
     */
    public function getBincremental()
    {
        return $this->bincremental;
    }

    /**
     * Set 'bincremental' value
     *
     * @param bool $value
     */
    public function setBincremental($value = null)
    {
        $this->bincremental = $value;
    }

    /**
     * Check if 'friends' has a value
     *
     * @return bool
     */
    public function hasFriendsList()
    {
        return $this->friends !== null;
    }

    /**
     * Get 'friends' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientFriendsList\Friend>
     */
    public function getFriendsList()
    {
        return $this->friends;
    }

    /**
     * Set 'friends' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\SteamMsgClientServer\CMsgClientFriendsList\Friend> $value
     */
    public function setFriendsList(\Protobuf\Collection $value = null)
    {
        $this->friends = $value;
    }

    /**
     * Add a new element to 'friends'
     *
     * @param \SteamKit\Base\SteamMsgClientServer\CMsgClientFriendsList\Friend $value
     */
    public function addFriends(\SteamKit\Base\SteamMsgClientServer\CMsgClientFriendsList\Friend $value)
    {
        if ($this->friends === null) {
            $this->friends = new \Protobuf\MessageCollection();
        }

        $this->friends->add($value);
    }

    /**
     * Check if 'max_friend_count' has a value
     *
     * @return bool
     */
    public function hasMaxFriendCount()
    {
        return $this->max_friend_count !== null;
    }

    /**
     * Get 'max_friend_count' value
     *
     * @return int
     */
    public function getMaxFriendCount()
    {
        return $this->max_friend_count;
    }

    /**
     * Set 'max_friend_count' value
     *
     * @param int $value
     */
    public function setMaxFriendCount($value = null)
    {
        $this->max_friend_count = $value;
    }

    /**
     * Check if 'active_friend_count' has a value
     *
     * @return bool
     */
    public function hasActiveFriendCount()
    {
        return $this->active_friend_count !== null;
    }

    /**
     * Get 'active_friend_count' value
     *
     * @return int
     */
    public function getActiveFriendCount()
    {
        return $this->active_friend_count;
    }

    /**
     * Set 'active_friend_count' value
     *
     * @param int $value
     */
    public function setActiveFriendCount($value = null)
    {
        $this->active_friend_count = $value;
    }

    /**
     * Check if 'friends_limit_hit' has a value
     *
     * @return bool
     */
    public function hasFriendsLimitHit()
    {
        return $this->friends_limit_hit !== null;
    }

    /**
     * Get 'friends_limit_hit' value
     *
     * @return bool
     */
    public function getFriendsLimitHit()
    {
        return $this->friends_limit_hit;
    }

    /**
     * Set 'friends_limit_hit' value
     *
     * @param bool $value
     */
    public function setFriendsLimitHit($value = null)
    {
        $this->friends_limit_hit = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'bincremental' => null,
            'friends' => [],
            'max_friend_count' => null,
            'active_friend_count' => null,
            'friends_limit_hit' => null
        ], $values);

        $message->setBincremental($values['bincremental']);
        $message->setMaxFriendCount($values['max_friend_count']);
        $message->setActiveFriendCount($values['active_friend_count']);
        $message->setFriendsLimitHit($values['friends_limit_hit']);

        foreach ($values['friends'] as $item) {
            $message->addFriends($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientFriendsList',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'bincremental',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'friends',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.SteamMsgClientServer.CMsgClientFriendsList.Friend'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'max_friend_count',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'active_friend_count',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'friends_limit_hit',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->bincremental !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->bincremental);
        }

        if ($this->friends !== null) {
            foreach ($this->friends as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->max_friend_count !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->max_friend_count);
        }

        if ($this->active_friend_count !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->active_friend_count);
        }

        if ($this->friends_limit_hit !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->friends_limit_hit);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->bincremental = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\SteamMsgClientServer\CMsgClientFriendsList\Friend();

                if ($this->friends === null) {
                    $this->friends = new \Protobuf\MessageCollection();
                }

                $this->friends->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->max_friend_count = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->active_friend_count = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->friends_limit_hit = $reader->readBool($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->bincremental !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->friends !== null) {
            foreach ($this->friends as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->max_friend_count !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->max_friend_count);
        }

        if ($this->active_friend_count !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->active_friend_count);
        }

        if ($this->friends_limit_hit !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->bincremental = null;
        $this->friends = null;
        $this->max_friend_count = null;
        $this->active_friend_count = null;
        $this->friends_limit_hit = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientFriendsList) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->bincremental = ($message->bincremental !== null) ? $message->bincremental : $this->bincremental;
        $this->friends = ($message->friends !== null) ? $message->friends : $this->friends;
        $this->max_friend_count = ($message->max_friend_count !== null) ? $message->max_friend_count : $this->max_friend_count;
        $this->active_friend_count = ($message->active_friend_count !== null) ? $message->active_friend_count : $this->active_friend_count;
        $this->friends_limit_hit = ($message->friends_limit_hit !== null) ? $message->friends_limit_hit : $this->friends_limit_hit;
    }


}

