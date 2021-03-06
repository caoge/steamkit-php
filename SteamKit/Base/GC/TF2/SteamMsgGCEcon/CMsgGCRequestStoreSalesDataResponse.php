<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/econ_gcmessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgGCEcon;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamMsgGCEcon.CMsgGCRequestStoreSalesDataResponse
 */
class CMsgGCRequestStoreSalesDataResponse extends \Protobuf\AbstractMessage
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
     * sale_price repeated message = 1
     *
     * @var \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgGCRequestStoreSalesDataResponse\Price>
     */
    protected $sale_price = null;

    /**
     * version optional uint32 = 2
     *
     * @var int
     */
    protected $version = null;

    /**
     * expiration_time optional uint32 = 3
     *
     * @var int
     */
    protected $expiration_time = null;

    /**
     * Check if 'sale_price' has a value
     *
     * @return bool
     */
    public function hasSalePriceList()
    {
        return $this->sale_price !== null;
    }

    /**
     * Get 'sale_price' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgGCRequestStoreSalesDataResponse\Price>
     */
    public function getSalePriceList()
    {
        return $this->sale_price;
    }

    /**
     * Set 'sale_price' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgGCRequestStoreSalesDataResponse\Price> $value
     */
    public function setSalePriceList(\Protobuf\Collection $value = null)
    {
        $this->sale_price = $value;
    }

    /**
     * Add a new element to 'sale_price'
     *
     * @param
     * \SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgGCRequestStoreSalesDataResponse\Price
     * $value
     */
    public function addSalePrice(\SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgGCRequestStoreSalesDataResponse\Price $value)
    {
        if ($this->sale_price === null) {
            $this->sale_price = new \Protobuf\MessageCollection();
        }

        $this->sale_price->add($value);
    }

    /**
     * Check if 'version' has a value
     *
     * @return bool
     */
    public function hasVersion()
    {
        return $this->version !== null;
    }

    /**
     * Get 'version' value
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set 'version' value
     *
     * @param int $value
     */
    public function setVersion($value = null)
    {
        $this->version = $value;
    }

    /**
     * Check if 'expiration_time' has a value
     *
     * @return bool
     */
    public function hasExpirationTime()
    {
        return $this->expiration_time !== null;
    }

    /**
     * Get 'expiration_time' value
     *
     * @return int
     */
    public function getExpirationTime()
    {
        return $this->expiration_time;
    }

    /**
     * Set 'expiration_time' value
     *
     * @param int $value
     */
    public function setExpirationTime($value = null)
    {
        $this->expiration_time = $value;
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
            'sale_price' => [],
            'version' => null,
            'expiration_time' => null
        ], $values);

        $message->setVersion($values['version']);
        $message->setExpirationTime($values['expiration_time']);

        foreach ($values['sale_price'] as $item) {
            $message->addSalePrice($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgGCRequestStoreSalesDataResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'sale_price',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.GC.TF2.SteamMsgGCEcon.CMsgGCRequestStoreSalesDataResponse.Price'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'expiration_time',
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

        if ($this->sale_price !== null) {
            foreach ($this->sale_price as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->version !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->version);
        }

        if ($this->expiration_time !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->expiration_time);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgGCRequestStoreSalesDataResponse\Price();

                if ($this->sale_price === null) {
                    $this->sale_price = new \Protobuf\MessageCollection();
                }

                $this->sale_price->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->version = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->expiration_time = $reader->readVarint($stream);

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

        if ($this->sale_price !== null) {
            foreach ($this->sale_price as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->version);
        }

        if ($this->expiration_time !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->expiration_time);
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
        $this->sale_price = null;
        $this->version = null;
        $this->expiration_time = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamMsgGCEcon\CMsgGCRequestStoreSalesDataResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->sale_price = ($message->sale_price !== null) ? $message->sale_price : $this->sale_price;
        $this->version = ($message->version !== null) ? $message->version : $this->version;
        $this->expiration_time = ($message->expiration_time !== null) ? $message->expiration_time : $this->expiration_time;
    }


}

