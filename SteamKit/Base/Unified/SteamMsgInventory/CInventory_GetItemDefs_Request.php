<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_inventory.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgInventory;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgInventory.CInventory_GetItemDefs_Request
 */
class CInventory_GetItemDefs_Request extends \Protobuf\AbstractMessage
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
     * appid optional uint32 = 1
     *
     * @var int
     */
    protected $appid = null;

    /**
     * modifiedsince optional string = 2
     *
     * @var string
     */
    protected $modifiedsince = null;

    /**
     * itemdefids repeated uint64 = 4
     *
     * @var \Protobuf\Collection
     */
    protected $itemdefids = null;

    /**
     * workshopids repeated uint64 = 5
     *
     * @var \Protobuf\Collection
     */
    protected $workshopids = null;

    /**
     * cache_max_age_seconds optional uint32 = 7
     *
     * @var int
     */
    protected $cache_max_age_seconds = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->cache_max_age_seconds = '0';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'appid' has a value
     *
     * @return bool
     */
    public function hasAppid()
    {
        return $this->appid !== null;
    }

    /**
     * Get 'appid' value
     *
     * @return int
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set 'appid' value
     *
     * @param int $value
     */
    public function setAppid($value = null)
    {
        $this->appid = $value;
    }

    /**
     * Check if 'modifiedsince' has a value
     *
     * @return bool
     */
    public function hasModifiedsince()
    {
        return $this->modifiedsince !== null;
    }

    /**
     * Get 'modifiedsince' value
     *
     * @return string
     */
    public function getModifiedsince()
    {
        return $this->modifiedsince;
    }

    /**
     * Set 'modifiedsince' value
     *
     * @param string $value
     */
    public function setModifiedsince($value = null)
    {
        $this->modifiedsince = $value;
    }

    /**
     * Check if 'itemdefids' has a value
     *
     * @return bool
     */
    public function hasItemdefidsList()
    {
        return $this->itemdefids !== null;
    }

    /**
     * Get 'itemdefids' value
     *
     * @return \Protobuf\Collection
     */
    public function getItemdefidsList()
    {
        return $this->itemdefids;
    }

    /**
     * Set 'itemdefids' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setItemdefidsList(\Protobuf\Collection $value = null)
    {
        $this->itemdefids = $value;
    }

    /**
     * Add a new element to 'itemdefids'
     *
     * @param int $value
     */
    public function addItemdefids($value)
    {
        if ($this->itemdefids === null) {
            $this->itemdefids = new \Protobuf\ScalarCollection();
        }

        $this->itemdefids->add($value);
    }

    /**
     * Check if 'workshopids' has a value
     *
     * @return bool
     */
    public function hasWorkshopidsList()
    {
        return $this->workshopids !== null;
    }

    /**
     * Get 'workshopids' value
     *
     * @return \Protobuf\Collection
     */
    public function getWorkshopidsList()
    {
        return $this->workshopids;
    }

    /**
     * Set 'workshopids' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setWorkshopidsList(\Protobuf\Collection $value = null)
    {
        $this->workshopids = $value;
    }

    /**
     * Add a new element to 'workshopids'
     *
     * @param int $value
     */
    public function addWorkshopids($value)
    {
        if ($this->workshopids === null) {
            $this->workshopids = new \Protobuf\ScalarCollection();
        }

        $this->workshopids->add($value);
    }

    /**
     * Check if 'cache_max_age_seconds' has a value
     *
     * @return bool
     */
    public function hasCacheMaxAgeSeconds()
    {
        return $this->cache_max_age_seconds !== null;
    }

    /**
     * Get 'cache_max_age_seconds' value
     *
     * @return int
     */
    public function getCacheMaxAgeSeconds()
    {
        return $this->cache_max_age_seconds;
    }

    /**
     * Set 'cache_max_age_seconds' value
     *
     * @param int $value
     */
    public function setCacheMaxAgeSeconds($value = null)
    {
        $this->cache_max_age_seconds = $value;
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
            'appid' => null,
            'modifiedsince' => null,
            'itemdefids' => [],
            'workshopids' => [],
            'cache_max_age_seconds' => '0'
        ], $values);

        $message->setAppid($values['appid']);
        $message->setModifiedsince($values['modifiedsince']);
        $message->setCacheMaxAgeSeconds($values['cache_max_age_seconds']);

        foreach ($values['itemdefids'] as $item) {
            $message->addItemdefids($item);
        }

        foreach ($values['workshopids'] as $item) {
            $message->addWorkshopids($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CInventory_GetItemDefs_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'modifiedsince',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'itemdefids',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'workshopids',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'cache_max_age_seconds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0'
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

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->modifiedsince !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->modifiedsince);
        }

        if ($this->itemdefids !== null) {
            foreach ($this->itemdefids as $val) {
                $writer->writeVarint($stream, 32);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->workshopids !== null) {
            foreach ($this->workshopids as $val) {
                $writer->writeVarint($stream, 40);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->cache_max_age_seconds !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->cache_max_age_seconds);
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

                $this->appid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->modifiedsince = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                if ($this->itemdefids === null) {
                    $this->itemdefids = new \Protobuf\ScalarCollection();
                }

                $this->itemdefids->add($reader->readVarint($stream));

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                if ($this->workshopids === null) {
                    $this->workshopids = new \Protobuf\ScalarCollection();
                }

                $this->workshopids->add($reader->readVarint($stream));

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->cache_max_age_seconds = $reader->readVarint($stream);

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

        if ($this->appid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->appid);
        }

        if ($this->modifiedsince !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->modifiedsince);
        }

        if ($this->itemdefids !== null) {
            foreach ($this->itemdefids as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->workshopids !== null) {
            foreach ($this->workshopids as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->cache_max_age_seconds !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->cache_max_age_seconds);
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
        $this->appid = null;
        $this->modifiedsince = null;
        $this->itemdefids = null;
        $this->workshopids = null;
        $this->cache_max_age_seconds = '0';
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgInventory\CInventory_GetItemDefs_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->modifiedsince = ($message->modifiedsince !== null) ? $message->modifiedsince : $this->modifiedsince;
        $this->itemdefids = ($message->itemdefids !== null) ? $message->itemdefids : $this->itemdefids;
        $this->workshopids = ($message->workshopids !== null) ? $message->workshopids : $this->workshopids;
        $this->cache_max_age_seconds = ($message->cache_max_age_seconds !== null) ? $message->cache_max_age_seconds : $this->cache_max_age_seconds;
    }


}

