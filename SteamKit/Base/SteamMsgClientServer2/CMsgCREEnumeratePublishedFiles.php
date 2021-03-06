<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgCREEnumeratePublishedFiles
 */
class CMsgCREEnumeratePublishedFiles extends \Protobuf\AbstractMessage
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
     * app_id optional uint32 = 1
     *
     * @var int
     */
    protected $app_id = null;

    /**
     * query_type optional int32 = 2
     *
     * @var int
     */
    protected $query_type = null;

    /**
     * start_index optional uint32 = 3
     *
     * @var int
     */
    protected $start_index = null;

    /**
     * days optional uint32 = 4
     *
     * @var int
     */
    protected $days = null;

    /**
     * count optional uint32 = 5
     *
     * @var int
     */
    protected $count = null;

    /**
     * tags repeated string = 6
     *
     * @var \Protobuf\Collection
     */
    protected $tags = null;

    /**
     * user_tags repeated string = 7
     *
     * @var \Protobuf\Collection
     */
    protected $user_tags = null;

    /**
     * matching_file_type optional uint32 = 8
     *
     * @var int
     */
    protected $matching_file_type = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->matching_file_type = '13';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'app_id' has a value
     *
     * @return bool
     */
    public function hasAppId()
    {
        return $this->app_id !== null;
    }

    /**
     * Get 'app_id' value
     *
     * @return int
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Set 'app_id' value
     *
     * @param int $value
     */
    public function setAppId($value = null)
    {
        $this->app_id = $value;
    }

    /**
     * Check if 'query_type' has a value
     *
     * @return bool
     */
    public function hasQueryType()
    {
        return $this->query_type !== null;
    }

    /**
     * Get 'query_type' value
     *
     * @return int
     */
    public function getQueryType()
    {
        return $this->query_type;
    }

    /**
     * Set 'query_type' value
     *
     * @param int $value
     */
    public function setQueryType($value = null)
    {
        $this->query_type = $value;
    }

    /**
     * Check if 'start_index' has a value
     *
     * @return bool
     */
    public function hasStartIndex()
    {
        return $this->start_index !== null;
    }

    /**
     * Get 'start_index' value
     *
     * @return int
     */
    public function getStartIndex()
    {
        return $this->start_index;
    }

    /**
     * Set 'start_index' value
     *
     * @param int $value
     */
    public function setStartIndex($value = null)
    {
        $this->start_index = $value;
    }

    /**
     * Check if 'days' has a value
     *
     * @return bool
     */
    public function hasDays()
    {
        return $this->days !== null;
    }

    /**
     * Get 'days' value
     *
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * Set 'days' value
     *
     * @param int $value
     */
    public function setDays($value = null)
    {
        $this->days = $value;
    }

    /**
     * Check if 'count' has a value
     *
     * @return bool
     */
    public function hasCount()
    {
        return $this->count !== null;
    }

    /**
     * Get 'count' value
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set 'count' value
     *
     * @param int $value
     */
    public function setCount($value = null)
    {
        $this->count = $value;
    }

    /**
     * Check if 'tags' has a value
     *
     * @return bool
     */
    public function hasTagsList()
    {
        return $this->tags !== null;
    }

    /**
     * Get 'tags' value
     *
     * @return \Protobuf\Collection
     */
    public function getTagsList()
    {
        return $this->tags;
    }

    /**
     * Set 'tags' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setTagsList(\Protobuf\Collection $value = null)
    {
        $this->tags = $value;
    }

    /**
     * Add a new element to 'tags'
     *
     * @param string $value
     */
    public function addTags($value)
    {
        if ($this->tags === null) {
            $this->tags = new \Protobuf\ScalarCollection();
        }

        $this->tags->add($value);
    }

    /**
     * Check if 'user_tags' has a value
     *
     * @return bool
     */
    public function hasUserTagsList()
    {
        return $this->user_tags !== null;
    }

    /**
     * Get 'user_tags' value
     *
     * @return \Protobuf\Collection
     */
    public function getUserTagsList()
    {
        return $this->user_tags;
    }

    /**
     * Set 'user_tags' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setUserTagsList(\Protobuf\Collection $value = null)
    {
        $this->user_tags = $value;
    }

    /**
     * Add a new element to 'user_tags'
     *
     * @param string $value
     */
    public function addUserTags($value)
    {
        if ($this->user_tags === null) {
            $this->user_tags = new \Protobuf\ScalarCollection();
        }

        $this->user_tags->add($value);
    }

    /**
     * Check if 'matching_file_type' has a value
     *
     * @return bool
     */
    public function hasMatchingFileType()
    {
        return $this->matching_file_type !== null;
    }

    /**
     * Get 'matching_file_type' value
     *
     * @return int
     */
    public function getMatchingFileType()
    {
        return $this->matching_file_type;
    }

    /**
     * Set 'matching_file_type' value
     *
     * @param int $value
     */
    public function setMatchingFileType($value = null)
    {
        $this->matching_file_type = $value;
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
            'app_id' => null,
            'query_type' => null,
            'start_index' => null,
            'days' => null,
            'count' => null,
            'tags' => [],
            'user_tags' => [],
            'matching_file_type' => '13'
        ], $values);

        $message->setAppId($values['app_id']);
        $message->setQueryType($values['query_type']);
        $message->setStartIndex($values['start_index']);
        $message->setDays($values['days']);
        $message->setCount($values['count']);
        $message->setMatchingFileType($values['matching_file_type']);

        foreach ($values['tags'] as $item) {
            $message->addTags($item);
        }

        foreach ($values['user_tags'] as $item) {
            $message->addUserTags($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgCREEnumeratePublishedFiles',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'query_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'start_index',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'days',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'count',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'tags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'user_tags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'matching_file_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '13'
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

        if ($this->app_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->app_id);
        }

        if ($this->query_type !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->query_type);
        }

        if ($this->start_index !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->start_index);
        }

        if ($this->days !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->days);
        }

        if ($this->count !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->count);
        }

        if ($this->tags !== null) {
            foreach ($this->tags as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->user_tags !== null) {
            foreach ($this->user_tags as $val) {
                $writer->writeVarint($stream, 58);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->matching_file_type !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->matching_file_type);
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
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->app_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->query_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->start_index = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->days = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->count = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->tags === null) {
                    $this->tags = new \Protobuf\ScalarCollection();
                }

                $this->tags->add($reader->readString($stream));

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->user_tags === null) {
                    $this->user_tags = new \Protobuf\ScalarCollection();
                }

                $this->user_tags->add($reader->readString($stream));

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->matching_file_type = $reader->readVarint($stream);

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

        if ($this->app_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->app_id);
        }

        if ($this->query_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->query_type);
        }

        if ($this->start_index !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->start_index);
        }

        if ($this->days !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->days);
        }

        if ($this->count !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->count);
        }

        if ($this->tags !== null) {
            foreach ($this->tags as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->user_tags !== null) {
            foreach ($this->user_tags as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->matching_file_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->matching_file_type);
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
        $this->app_id = null;
        $this->query_type = null;
        $this->start_index = null;
        $this->days = null;
        $this->count = null;
        $this->tags = null;
        $this->user_tags = null;
        $this->matching_file_type = '13';
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgCREEnumeratePublishedFiles) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->app_id = ($message->app_id !== null) ? $message->app_id : $this->app_id;
        $this->query_type = ($message->query_type !== null) ? $message->query_type : $this->query_type;
        $this->start_index = ($message->start_index !== null) ? $message->start_index : $this->start_index;
        $this->days = ($message->days !== null) ? $message->days : $this->days;
        $this->count = ($message->count !== null) ? $message->count : $this->count;
        $this->tags = ($message->tags !== null) ? $message->tags : $this->tags;
        $this->user_tags = ($message->user_tags !== null) ? $message->user_tags : $this->user_tags;
        $this->matching_file_type = ($message->matching_file_type !== null) ? $message->matching_file_type : $this->matching_file_type;
    }


}

