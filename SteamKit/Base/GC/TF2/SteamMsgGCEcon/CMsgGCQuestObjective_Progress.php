<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/econ_gcmessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgGCEcon;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamMsgGCEcon.CMsgGCQuestObjective_Progress
 */
class CMsgGCQuestObjective_Progress extends \Protobuf\AbstractMessage
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
     * quest_item_id optional uint64 = 1
     *
     * @var int
     */
    protected $quest_item_id = null;

    /**
     * quest_attrib_index optional uint32 = 2
     *
     * @var int
     */
    protected $quest_attrib_index = null;

    /**
     * delta optional uint32 = 3
     *
     * @var int
     */
    protected $delta = null;

    /**
     * owner_steamid optional fixed64 = 4
     *
     * @var int
     */
    protected $owner_steamid = null;

    /**
     * Check if 'quest_item_id' has a value
     *
     * @return bool
     */
    public function hasQuestItemId()
    {
        return $this->quest_item_id !== null;
    }

    /**
     * Get 'quest_item_id' value
     *
     * @return int
     */
    public function getQuestItemId()
    {
        return $this->quest_item_id;
    }

    /**
     * Set 'quest_item_id' value
     *
     * @param int $value
     */
    public function setQuestItemId($value = null)
    {
        $this->quest_item_id = $value;
    }

    /**
     * Check if 'quest_attrib_index' has a value
     *
     * @return bool
     */
    public function hasQuestAttribIndex()
    {
        return $this->quest_attrib_index !== null;
    }

    /**
     * Get 'quest_attrib_index' value
     *
     * @return int
     */
    public function getQuestAttribIndex()
    {
        return $this->quest_attrib_index;
    }

    /**
     * Set 'quest_attrib_index' value
     *
     * @param int $value
     */
    public function setQuestAttribIndex($value = null)
    {
        $this->quest_attrib_index = $value;
    }

    /**
     * Check if 'delta' has a value
     *
     * @return bool
     */
    public function hasDelta()
    {
        return $this->delta !== null;
    }

    /**
     * Get 'delta' value
     *
     * @return int
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Set 'delta' value
     *
     * @param int $value
     */
    public function setDelta($value = null)
    {
        $this->delta = $value;
    }

    /**
     * Check if 'owner_steamid' has a value
     *
     * @return bool
     */
    public function hasOwnerSteamid()
    {
        return $this->owner_steamid !== null;
    }

    /**
     * Get 'owner_steamid' value
     *
     * @return int
     */
    public function getOwnerSteamid()
    {
        return $this->owner_steamid;
    }

    /**
     * Set 'owner_steamid' value
     *
     * @param int $value
     */
    public function setOwnerSteamid($value = null)
    {
        $this->owner_steamid = $value;
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
            'quest_item_id' => null,
            'quest_attrib_index' => null,
            'delta' => null,
            'owner_steamid' => null
        ], $values);

        $message->setQuestItemId($values['quest_item_id']);
        $message->setQuestAttribIndex($values['quest_attrib_index']);
        $message->setDelta($values['delta']);
        $message->setOwnerSteamid($values['owner_steamid']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGCQuestObjective_Progress',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'quest_item_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'quest_attrib_index',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'delta',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'owner_steamid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
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

        if ($this->quest_item_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->quest_item_id);
        }

        if ($this->quest_attrib_index !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->quest_attrib_index);
        }

        if ($this->delta !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->delta);
        }

        if ($this->owner_steamid !== null) {
            $writer->writeVarint($stream, 33);
            $writer->writeFixed64($stream, $this->owner_steamid);
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->quest_item_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->quest_attrib_index = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->delta = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->owner_steamid = $reader->readFixed64($stream);

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

        if ($this->quest_item_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->quest_item_id);
        }

        if ($this->quest_attrib_index !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->quest_attrib_index);
        }

        if ($this->delta !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->delta);
        }

        if ($this->owner_steamid !== null) {
            $size += 1;
            $size += 8;
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
        $this->quest_item_id = null;
        $this->quest_attrib_index = null;
        $this->delta = null;
        $this->owner_steamid = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgGCQuestObjective_Progress) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->quest_item_id = ($message->quest_item_id !== null) ? $message->quest_item_id : $this->quest_item_id;
        $this->quest_attrib_index = ($message->quest_attrib_index !== null) ? $message->quest_attrib_index : $this->quest_attrib_index;
        $this->delta = ($message->delta !== null) ? $message->delta : $this->delta;
        $this->owner_steamid = ($message->owner_steamid !== null) ? $message->owner_steamid : $this->owner_steamid;
    }


}

