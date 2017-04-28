<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientUCMGetPublishedFilesForUser
 */
class CMsgClientUCMGetPublishedFilesForUser extends \Protobuf\AbstractMessage
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
     * creator_steam_id optional fixed64 = 2
     *
     * @var int
     */
    protected $creator_steam_id = null;

    /**
     * required_tags repeated string = 3
     *
     * @var \Protobuf\Collection
     */
    protected $required_tags = null;

    /**
     * excluded_tags repeated string = 4
     *
     * @var \Protobuf\Collection
     */
    protected $excluded_tags = null;

    /**
     * start_index optional uint32 = 5
     *
     * @var int
     */
    protected $start_index = null;

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
     * Check if 'creator_steam_id' has a value
     *
     * @return bool
     */
    public function hasCreatorSteamId()
    {
        return $this->creator_steam_id !== null;
    }

    /**
     * Get 'creator_steam_id' value
     *
     * @return int
     */
    public function getCreatorSteamId()
    {
        return $this->creator_steam_id;
    }

    /**
     * Set 'creator_steam_id' value
     *
     * @param int $value
     */
    public function setCreatorSteamId($value = null)
    {
        $this->creator_steam_id = $value;
    }

    /**
     * Check if 'required_tags' has a value
     *
     * @return bool
     */
    public function hasRequiredTagsList()
    {
        return $this->required_tags !== null;
    }

    /**
     * Get 'required_tags' value
     *
     * @return \Protobuf\Collection
     */
    public function getRequiredTagsList()
    {
        return $this->required_tags;
    }

    /**
     * Set 'required_tags' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setRequiredTagsList(\Protobuf\Collection $value = null)
    {
        $this->required_tags = $value;
    }

    /**
     * Add a new element to 'required_tags'
     *
     * @param string $value
     */
    public function addRequiredTags($value)
    {
        if ($this->required_tags === null) {
            $this->required_tags = new \Protobuf\ScalarCollection();
        }

        $this->required_tags->add($value);
    }

    /**
     * Check if 'excluded_tags' has a value
     *
     * @return bool
     */
    public function hasExcludedTagsList()
    {
        return $this->excluded_tags !== null;
    }

    /**
     * Get 'excluded_tags' value
     *
     * @return \Protobuf\Collection
     */
    public function getExcludedTagsList()
    {
        return $this->excluded_tags;
    }

    /**
     * Set 'excluded_tags' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setExcludedTagsList(\Protobuf\Collection $value = null)
    {
        $this->excluded_tags = $value;
    }

    /**
     * Add a new element to 'excluded_tags'
     *
     * @param string $value
     */
    public function addExcludedTags($value)
    {
        if ($this->excluded_tags === null) {
            $this->excluded_tags = new \Protobuf\ScalarCollection();
        }

        $this->excluded_tags->add($value);
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
            'creator_steam_id' => null,
            'required_tags' => [],
            'excluded_tags' => [],
            'start_index' => null
        ], $values);

        $message->setAppId($values['app_id']);
        $message->setCreatorSteamId($values['creator_steam_id']);
        $message->setStartIndex($values['start_index']);

        foreach ($values['required_tags'] as $item) {
            $message->addRequiredTags($item);
        }

        foreach ($values['excluded_tags'] as $item) {
            $message->addExcludedTags($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientUCMGetPublishedFilesForUser',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'creator_steam_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'required_tags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'excluded_tags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'start_index',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
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

        if ($this->app_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->app_id);
        }

        if ($this->creator_steam_id !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeFixed64($stream, $this->creator_steam_id);
        }

        if ($this->required_tags !== null) {
            foreach ($this->required_tags as $val) {
                $writer->writeVarint($stream, 26);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->excluded_tags !== null) {
            foreach ($this->excluded_tags as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->start_index !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->start_index);
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
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->creator_steam_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->required_tags === null) {
                    $this->required_tags = new \Protobuf\ScalarCollection();
                }

                $this->required_tags->add($reader->readString($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->excluded_tags === null) {
                    $this->excluded_tags = new \Protobuf\ScalarCollection();
                }

                $this->excluded_tags->add($reader->readString($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->start_index = $reader->readVarint($stream);

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

        if ($this->creator_steam_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->required_tags !== null) {
            foreach ($this->required_tags as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->excluded_tags !== null) {
            foreach ($this->excluded_tags as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->start_index !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->start_index);
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
        $this->creator_steam_id = null;
        $this->required_tags = null;
        $this->excluded_tags = null;
        $this->start_index = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMGetPublishedFilesForUser) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->app_id = ($message->app_id !== null) ? $message->app_id : $this->app_id;
        $this->creator_steam_id = ($message->creator_steam_id !== null) ? $message->creator_steam_id : $this->creator_steam_id;
        $this->required_tags = ($message->required_tags !== null) ? $message->required_tags : $this->required_tags;
        $this->excluded_tags = ($message->excluded_tags !== null) ? $message->excluded_tags : $this->excluded_tags;
        $this->start_index = ($message->start_index !== null) ? $message->start_index : $this->start_index;
    }


}
