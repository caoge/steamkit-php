<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver.proto
 */


namespace SteamKit\Base\SteamMsgClientServer;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer.CMsgClientP2PConnectionFailInfo
 */
class CMsgClientP2PConnectionFailInfo extends \Protobuf\AbstractMessage
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
     * steam_id_dest optional fixed64 = 1
     *
     * @var int
     */
    protected $steam_id_dest = null;

    /**
     * steam_id_src optional fixed64 = 2
     *
     * @var int
     */
    protected $steam_id_src = null;

    /**
     * app_id optional uint32 = 3
     *
     * @var int
     */
    protected $app_id = null;

    /**
     * ep2p_session_error optional uint32 = 4
     *
     * @var int
     */
    protected $ep2p_session_error = null;

    /**
     * Check if 'steam_id_dest' has a value
     *
     * @return bool
     */
    public function hasSteamIdDest()
    {
        return $this->steam_id_dest !== null;
    }

    /**
     * Get 'steam_id_dest' value
     *
     * @return int
     */
    public function getSteamIdDest()
    {
        return $this->steam_id_dest;
    }

    /**
     * Set 'steam_id_dest' value
     *
     * @param int $value
     */
    public function setSteamIdDest($value = null)
    {
        $this->steam_id_dest = $value;
    }

    /**
     * Check if 'steam_id_src' has a value
     *
     * @return bool
     */
    public function hasSteamIdSrc()
    {
        return $this->steam_id_src !== null;
    }

    /**
     * Get 'steam_id_src' value
     *
     * @return int
     */
    public function getSteamIdSrc()
    {
        return $this->steam_id_src;
    }

    /**
     * Set 'steam_id_src' value
     *
     * @param int $value
     */
    public function setSteamIdSrc($value = null)
    {
        $this->steam_id_src = $value;
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
     * Check if 'ep2p_session_error' has a value
     *
     * @return bool
     */
    public function hasEp2pSessionError()
    {
        return $this->ep2p_session_error !== null;
    }

    /**
     * Get 'ep2p_session_error' value
     *
     * @return int
     */
    public function getEp2pSessionError()
    {
        return $this->ep2p_session_error;
    }

    /**
     * Set 'ep2p_session_error' value
     *
     * @param int $value
     */
    public function setEp2pSessionError($value = null)
    {
        $this->ep2p_session_error = $value;
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
            'steam_id_dest' => null,
            'steam_id_src' => null,
            'app_id' => null,
            'ep2p_session_error' => null
        ], $values);

        $message->setSteamIdDest($values['steam_id_dest']);
        $message->setSteamIdSrc($values['steam_id_src']);
        $message->setAppId($values['app_id']);
        $message->setEp2pSessionError($values['ep2p_session_error']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientP2PConnectionFailInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'steam_id_dest',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'steam_id_src',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'app_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'ep2p_session_error',
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

        if ($this->steam_id_dest !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->steam_id_dest);
        }

        if ($this->steam_id_src !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeFixed64($stream, $this->steam_id_src);
        }

        if ($this->app_id !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->app_id);
        }

        if ($this->ep2p_session_error !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->ep2p_session_error);
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

                $this->steam_id_dest = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->steam_id_src = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->app_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->ep2p_session_error = $reader->readVarint($stream);

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

        if ($this->steam_id_dest !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->steam_id_src !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->app_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->app_id);
        }

        if ($this->ep2p_session_error !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->ep2p_session_error);
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
        $this->steam_id_dest = null;
        $this->steam_id_src = null;
        $this->app_id = null;
        $this->ep2p_session_error = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer\CMsgClientP2PConnectionFailInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->steam_id_dest = ($message->steam_id_dest !== null) ? $message->steam_id_dest : $this->steam_id_dest;
        $this->steam_id_src = ($message->steam_id_src !== null) ? $message->steam_id_src : $this->steam_id_src;
        $this->app_id = ($message->app_id !== null) ? $message->app_id : $this->app_id;
        $this->ep2p_session_error = ($message->ep2p_session_error !== null) ? $message->ep2p_session_error : $this->ep2p_session_error;
    }


}

