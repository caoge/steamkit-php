<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMEnumeratePublishedFilesByUserActionResponse;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientUCMEnumeratePublishedFilesByUserActionResponse.PublishedFileId
 */
class PublishedFileId extends \Protobuf\AbstractMessage
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
     * published_file_id optional fixed64 = 1
     *
     * @var int
     */
    protected $published_file_id = null;

    /**
     * rtime_time_stamp optional fixed32 = 2
     *
     * @var int
     */
    protected $rtime_time_stamp = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->rtime_time_stamp = '0';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'published_file_id' has a value
     *
     * @return bool
     */
    public function hasPublishedFileId()
    {
        return $this->published_file_id !== null;
    }

    /**
     * Get 'published_file_id' value
     *
     * @return int
     */
    public function getPublishedFileId()
    {
        return $this->published_file_id;
    }

    /**
     * Set 'published_file_id' value
     *
     * @param int $value
     */
    public function setPublishedFileId($value = null)
    {
        $this->published_file_id = $value;
    }

    /**
     * Check if 'rtime_time_stamp' has a value
     *
     * @return bool
     */
    public function hasRtimeTimeStamp()
    {
        return $this->rtime_time_stamp !== null;
    }

    /**
     * Get 'rtime_time_stamp' value
     *
     * @return int
     */
    public function getRtimeTimeStamp()
    {
        return $this->rtime_time_stamp;
    }

    /**
     * Set 'rtime_time_stamp' value
     *
     * @param int $value
     */
    public function setRtimeTimeStamp($value = null)
    {
        $this->rtime_time_stamp = $value;
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
            'published_file_id' => null,
            'rtime_time_stamp' => '0'
        ], $values);

        $message->setPublishedFileId($values['published_file_id']);
        $message->setRtimeTimeStamp($values['rtime_time_stamp']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PublishedFileId',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'published_file_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'rtime_time_stamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
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

        if ($this->published_file_id !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->published_file_id);
        }

        if ($this->rtime_time_stamp !== null) {
            $writer->writeVarint($stream, 21);
            $writer->writeFixed32($stream, $this->rtime_time_stamp);
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
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->published_file_id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->rtime_time_stamp = $reader->readFixed32($stream);

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

        if ($this->published_file_id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->rtime_time_stamp !== null) {
            $size += 1;
            $size += 4;
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
        $this->published_file_id = null;
        $this->rtime_time_stamp = '0';
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientUCMEnumeratePublishedFilesByUserActionResponse\PublishedFileId) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->published_file_id = ($message->published_file_id !== null) ? $message->published_file_id : $this->published_file_id;
        $this->rtime_time_stamp = ($message->rtime_time_stamp !== null) ? $message->rtime_time_stamp : $this->rtime_time_stamp;
    }


}

