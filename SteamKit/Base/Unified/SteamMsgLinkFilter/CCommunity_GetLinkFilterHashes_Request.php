<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_linkfilter.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgLinkFilter;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgLinkFilter.CCommunity_GetLinkFilterHashes_Request
 */
class CCommunity_GetLinkFilterHashes_Request extends \Protobuf\AbstractMessage
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
     * hit_type optional uint32 = 1
     *
     * @var int
     */
    protected $hit_type = null;

    /**
     * count optional uint32 = 2
     *
     * @var int
     */
    protected $count = null;

    /**
     * start optional uint64 = 3
     *
     * @var int
     */
    protected $start = null;

    /**
     * Check if 'hit_type' has a value
     *
     * @return bool
     */
    public function hasHitType()
    {
        return $this->hit_type !== null;
    }

    /**
     * Get 'hit_type' value
     *
     * @return int
     */
    public function getHitType()
    {
        return $this->hit_type;
    }

    /**
     * Set 'hit_type' value
     *
     * @param int $value
     */
    public function setHitType($value = null)
    {
        $this->hit_type = $value;
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
     * Check if 'start' has a value
     *
     * @return bool
     */
    public function hasStart()
    {
        return $this->start !== null;
    }

    /**
     * Get 'start' value
     *
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set 'start' value
     *
     * @param int $value
     */
    public function setStart($value = null)
    {
        $this->start = $value;
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
            'hit_type' => null,
            'count' => null,
            'start' => null
        ], $values);

        $message->setHitType($values['hit_type']);
        $message->setCount($values['count']);
        $message->setStart($values['start']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CCommunity_GetLinkFilterHashes_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'hit_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'count',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'start',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
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

        if ($this->hit_type !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->hit_type);
        }

        if ($this->count !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->count);
        }

        if ($this->start !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->start);
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

                $this->hit_type = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->count = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->start = $reader->readVarint($stream);

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

        if ($this->hit_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->hit_type);
        }

        if ($this->count !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->count);
        }

        if ($this->start !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->start);
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
        $this->hit_type = null;
        $this->count = null;
        $this->start = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgLinkFilter\CCommunity_GetLinkFilterHashes_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->hit_type = ($message->hit_type !== null) ? $message->hit_type : $this->hit_type;
        $this->count = ($message->count !== null) ? $message->count : $this->count;
        $this->start = ($message->start !== null) ? $message->start : $this->start;
    }


}

