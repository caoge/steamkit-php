<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message : SteamKit.Base.SteamMsgClientServer.CMsgClientAppInfoUpdate
 */
class CMsgClientAppInfoUpdate extends \Protobuf\AbstractMessage
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
     * last_changenumber optional uint32 = 1
     *
     * @var int
     */
    protected $last_changenumber = null;

    /**
     * send_changelist optional bool = 2
     *
     * @var bool
     */
    protected $send_changelist = null;

    /**
     * Check if 'last_changenumber' has a value
     *
     * @return bool
     */
    public function hasLastChangenumber()
    {
        return $this->last_changenumber !== null;
    }

    /**
     * Get 'last_changenumber' value
     *
     * @return int
     */
    public function getLastChangenumber()
    {
        return $this->last_changenumber;
    }

    /**
     * Set 'last_changenumber' value
     *
     * @param int $value
     */
    public function setLastChangenumber($value = null)
    {
        $this->last_changenumber = $value;
    }

    /**
     * Check if 'send_changelist' has a value
     *
     * @return bool
     */
    public function hasSendChangelist()
    {
        return $this->send_changelist !== null;
    }

    /**
     * Get 'send_changelist' value
     *
     * @return bool
     */
    public function getSendChangelist()
    {
        return $this->send_changelist;
    }

    /**
     * Set 'send_changelist' value
     *
     * @param bool $value
     */
    public function setSendChangelist($value = null)
    {
        $this->send_changelist = $value;
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
            'last_changenumber' => null,
            'send_changelist' => null
        ], $values);

        $message->setLastChangenumber($values['last_changenumber']);
        $message->setSendChangelist($values['send_changelist']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientAppInfoUpdate',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'last_changenumber',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'send_changelist',
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

        if ($this->last_changenumber !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->last_changenumber);
        }

        if ($this->send_changelist !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->send_changelist);
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

                $this->last_changenumber = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->send_changelist = $reader->readBool($stream);

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

        if ($this->last_changenumber !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->last_changenumber);
        }

        if ($this->send_changelist !== null) {
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
        $this->last_changenumber = null;
        $this->send_changelist = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientAppInfoUpdate) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->last_changenumber = ($message->last_changenumber !== null) ? $message->last_changenumber : $this->last_changenumber;
        $this->send_changelist = ($message->send_changelist !== null) ? $message->send_changelist : $this->send_changelist;
    }


}

