<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_parental.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgParental;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgParental.CParental_ValidatePassword_Request
 */
class CParental_ValidatePassword_Request extends \Protobuf\AbstractMessage
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
     * password optional string = 1
     *
     * @var string
     */
    protected $password = null;

    /**
     * session optional string = 2
     *
     * @var string
     */
    protected $session = null;

    /**
     * send_unlock_on_success optional bool = 3
     *
     * @var bool
     */
    protected $send_unlock_on_success = null;

    /**
     * Check if 'password' has a value
     *
     * @return bool
     */
    public function hasPassword()
    {
        return $this->password !== null;
    }

    /**
     * Get 'password' value
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set 'password' value
     *
     * @param string $value
     */
    public function setPassword($value = null)
    {
        $this->password = $value;
    }

    /**
     * Check if 'session' has a value
     *
     * @return bool
     */
    public function hasSession()
    {
        return $this->session !== null;
    }

    /**
     * Get 'session' value
     *
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set 'session' value
     *
     * @param string $value
     */
    public function setSession($value = null)
    {
        $this->session = $value;
    }

    /**
     * Check if 'send_unlock_on_success' has a value
     *
     * @return bool
     */
    public function hasSendUnlockOnSuccess()
    {
        return $this->send_unlock_on_success !== null;
    }

    /**
     * Get 'send_unlock_on_success' value
     *
     * @return bool
     */
    public function getSendUnlockOnSuccess()
    {
        return $this->send_unlock_on_success;
    }

    /**
     * Set 'send_unlock_on_success' value
     *
     * @param bool $value
     */
    public function setSendUnlockOnSuccess($value = null)
    {
        $this->send_unlock_on_success = $value;
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
            'password' => null,
            'session' => null,
            'send_unlock_on_success' => null
        ], $values);

        $message->setPassword($values['password']);
        $message->setSession($values['session']);
        $message->setSendUnlockOnSuccess($values['send_unlock_on_success']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CParental_ValidatePassword_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'password',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'session',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'send_unlock_on_success',
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

        if ($this->password !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->password);
        }

        if ($this->session !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->session);
        }

        if ($this->send_unlock_on_success !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->send_unlock_on_success);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->password = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->session = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->send_unlock_on_success = $reader->readBool($stream);

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

        if ($this->password !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->password);
        }

        if ($this->session !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->session);
        }

        if ($this->send_unlock_on_success !== null) {
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
        $this->password = null;
        $this->session = null;
        $this->send_unlock_on_success = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgParental\CParental_ValidatePassword_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->password = ($message->password !== null) ? $message->password : $this->password;
        $this->session = ($message->session !== null) ? $message->session : $this->session;
        $this->send_unlock_on_success = ($message->send_unlock_on_success !== null) ? $message->send_unlock_on_success : $this->send_unlock_on_success;
    }


}

