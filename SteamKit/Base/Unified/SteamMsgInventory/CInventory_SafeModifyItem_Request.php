<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_inventory.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgInventory;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgInventory.CInventory_SafeModifyItem_Request
 */
class CInventory_SafeModifyItem_Request extends \Protobuf\AbstractMessage
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
     * acctid optional uint64 = 2
     *
     * @var int
     */
    protected $acctid = null;

    /**
     * itemid optional uint64 = 3
     *
     * @var int
     */
    protected $itemid = null;

    /**
     * itempropsjson optional string = 4
     *
     * @var string
     */
    protected $itempropsjson = null;

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
     * Check if 'acctid' has a value
     *
     * @return bool
     */
    public function hasAcctid()
    {
        return $this->acctid !== null;
    }

    /**
     * Get 'acctid' value
     *
     * @return int
     */
    public function getAcctid()
    {
        return $this->acctid;
    }

    /**
     * Set 'acctid' value
     *
     * @param int $value
     */
    public function setAcctid($value = null)
    {
        $this->acctid = $value;
    }

    /**
     * Check if 'itemid' has a value
     *
     * @return bool
     */
    public function hasItemid()
    {
        return $this->itemid !== null;
    }

    /**
     * Get 'itemid' value
     *
     * @return int
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set 'itemid' value
     *
     * @param int $value
     */
    public function setItemid($value = null)
    {
        $this->itemid = $value;
    }

    /**
     * Check if 'itempropsjson' has a value
     *
     * @return bool
     */
    public function hasItempropsjson()
    {
        return $this->itempropsjson !== null;
    }

    /**
     * Get 'itempropsjson' value
     *
     * @return string
     */
    public function getItempropsjson()
    {
        return $this->itempropsjson;
    }

    /**
     * Set 'itempropsjson' value
     *
     * @param string $value
     */
    public function setItempropsjson($value = null)
    {
        $this->itempropsjson = $value;
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
            'acctid' => null,
            'itemid' => null,
            'itempropsjson' => null
        ], $values);

        $message->setAppid($values['appid']);
        $message->setAcctid($values['acctid']);
        $message->setItemid($values['itemid']);
        $message->setItempropsjson($values['itempropsjson']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CInventory_SafeModifyItem_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'acctid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'itemid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'itempropsjson',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
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

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->acctid !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->acctid);
        }

        if ($this->itemid !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->itemid);
        }

        if ($this->itempropsjson !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->itempropsjson);
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->acctid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->itemid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->itempropsjson = $reader->readString($stream);

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

        if ($this->acctid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->acctid);
        }

        if ($this->itemid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->itemid);
        }

        if ($this->itempropsjson !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->itempropsjson);
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
        $this->acctid = null;
        $this->itemid = null;
        $this->itempropsjson = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgInventory\CInventory_SafeModifyItem_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->acctid = ($message->acctid !== null) ? $message->acctid : $this->acctid;
        $this->itemid = ($message->itemid !== null) ? $message->itemid : $this->itemid;
        $this->itempropsjson = ($message->itempropsjson !== null) ? $message->itempropsjson : $this->itempropsjson;
    }


}
