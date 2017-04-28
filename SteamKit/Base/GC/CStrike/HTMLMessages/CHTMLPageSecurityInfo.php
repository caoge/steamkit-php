<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : cstrike/htmlmessages.proto
 */


namespace SteamKit\Base\GC\CStrike\HTMLMessages;

/**
 * Protobuf message : SteamKit.Base.GC.CStrike.HTMLMessages.CHTMLPageSecurityInfo
 */
class CHTMLPageSecurityInfo extends \Protobuf\AbstractMessage
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
     * bIsSecure optional bool = 1
     *
     * @var bool
     */
    protected $bIsSecure = null;

    /**
     * bHasCertError optional bool = 2
     *
     * @var bool
     */
    protected $bHasCertError = null;

    /**
     * issuerName optional string = 3
     *
     * @var string
     */
    protected $issuerName = null;

    /**
     * certName optional string = 4
     *
     * @var string
     */
    protected $certName = null;

    /**
     * certExpiry optional int32 = 5
     *
     * @var int
     */
    protected $certExpiry = null;

    /**
     * nCertBits optional int32 = 6
     *
     * @var int
     */
    protected $nCertBits = null;

    /**
     * bIsEVCert optional bool = 7
     *
     * @var bool
     */
    protected $bIsEVCert = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->bIsSecure = false;
        $this->bHasCertError = false;
        $this->certExpiry = '0';
        $this->nCertBits = '0';
        $this->bIsEVCert = false;

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'bIsSecure' has a value
     *
     * @return bool
     */
    public function hasBIsSecure()
    {
        return $this->bIsSecure !== null;
    }

    /**
     * Get 'bIsSecure' value
     *
     * @return bool
     */
    public function getBIsSecure()
    {
        return $this->bIsSecure;
    }

    /**
     * Set 'bIsSecure' value
     *
     * @param bool $value
     */
    public function setBIsSecure($value = null)
    {
        $this->bIsSecure = $value;
    }

    /**
     * Check if 'bHasCertError' has a value
     *
     * @return bool
     */
    public function hasBHasCertError()
    {
        return $this->bHasCertError !== null;
    }

    /**
     * Get 'bHasCertError' value
     *
     * @return bool
     */
    public function getBHasCertError()
    {
        return $this->bHasCertError;
    }

    /**
     * Set 'bHasCertError' value
     *
     * @param bool $value
     */
    public function setBHasCertError($value = null)
    {
        $this->bHasCertError = $value;
    }

    /**
     * Check if 'issuerName' has a value
     *
     * @return bool
     */
    public function hasIssuerName()
    {
        return $this->issuerName !== null;
    }

    /**
     * Get 'issuerName' value
     *
     * @return string
     */
    public function getIssuerName()
    {
        return $this->issuerName;
    }

    /**
     * Set 'issuerName' value
     *
     * @param string $value
     */
    public function setIssuerName($value = null)
    {
        $this->issuerName = $value;
    }

    /**
     * Check if 'certName' has a value
     *
     * @return bool
     */
    public function hasCertName()
    {
        return $this->certName !== null;
    }

    /**
     * Get 'certName' value
     *
     * @return string
     */
    public function getCertName()
    {
        return $this->certName;
    }

    /**
     * Set 'certName' value
     *
     * @param string $value
     */
    public function setCertName($value = null)
    {
        $this->certName = $value;
    }

    /**
     * Check if 'certExpiry' has a value
     *
     * @return bool
     */
    public function hasCertExpiry()
    {
        return $this->certExpiry !== null;
    }

    /**
     * Get 'certExpiry' value
     *
     * @return int
     */
    public function getCertExpiry()
    {
        return $this->certExpiry;
    }

    /**
     * Set 'certExpiry' value
     *
     * @param int $value
     */
    public function setCertExpiry($value = null)
    {
        $this->certExpiry = $value;
    }

    /**
     * Check if 'nCertBits' has a value
     *
     * @return bool
     */
    public function hasNCertBits()
    {
        return $this->nCertBits !== null;
    }

    /**
     * Get 'nCertBits' value
     *
     * @return int
     */
    public function getNCertBits()
    {
        return $this->nCertBits;
    }

    /**
     * Set 'nCertBits' value
     *
     * @param int $value
     */
    public function setNCertBits($value = null)
    {
        $this->nCertBits = $value;
    }

    /**
     * Check if 'bIsEVCert' has a value
     *
     * @return bool
     */
    public function hasBIsEVCert()
    {
        return $this->bIsEVCert !== null;
    }

    /**
     * Get 'bIsEVCert' value
     *
     * @return bool
     */
    public function getBIsEVCert()
    {
        return $this->bIsEVCert;
    }

    /**
     * Set 'bIsEVCert' value
     *
     * @param bool $value
     */
    public function setBIsEVCert($value = null)
    {
        $this->bIsEVCert = $value;
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
            'bIsSecure' => false,
            'bHasCertError' => false,
            'issuerName' => null,
            'certName' => null,
            'certExpiry' => '0',
            'nCertBits' => '0',
            'bIsEVCert' => false
        ], $values);

        $message->setBIsSecure($values['bIsSecure']);
        $message->setBHasCertError($values['bHasCertError']);
        $message->setIssuerName($values['issuerName']);
        $message->setCertName($values['certName']);
        $message->setCertExpiry($values['certExpiry']);
        $message->setNCertBits($values['nCertBits']);
        $message->setBIsEVCert($values['bIsEVCert']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CHTMLPageSecurityInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'bIsSecure',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'bHasCertError',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'issuerName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'certName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'certExpiry',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'nCertBits',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'bIsEVCert',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
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

        if ($this->bIsSecure !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->bIsSecure);
        }

        if ($this->bHasCertError !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->bHasCertError);
        }

        if ($this->issuerName !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->issuerName);
        }

        if ($this->certName !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->certName);
        }

        if ($this->certExpiry !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->certExpiry);
        }

        if ($this->nCertBits !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->nCertBits);
        }

        if ($this->bIsEVCert !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeBool($stream, $this->bIsEVCert);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->bIsSecure = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->bHasCertError = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->issuerName = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->certName = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->certExpiry = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->nCertBits = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->bIsEVCert = $reader->readBool($stream);

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

        if ($this->bIsSecure !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->bHasCertError !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->issuerName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->issuerName);
        }

        if ($this->certName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->certName);
        }

        if ($this->certExpiry !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->certExpiry);
        }

        if ($this->nCertBits !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->nCertBits);
        }

        if ($this->bIsEVCert !== null) {
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
        $this->bIsSecure = false;
        $this->bHasCertError = false;
        $this->issuerName = null;
        $this->certName = null;
        $this->certExpiry = '0';
        $this->nCertBits = '0';
        $this->bIsEVCert = false;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CStrike\HTMLMessages\CHTMLPageSecurityInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->bIsSecure = ($message->bIsSecure !== null) ? $message->bIsSecure : $this->bIsSecure;
        $this->bHasCertError = ($message->bHasCertError !== null) ? $message->bHasCertError : $this->bHasCertError;
        $this->issuerName = ($message->issuerName !== null) ? $message->issuerName : $this->issuerName;
        $this->certName = ($message->certName !== null) ? $message->certName : $this->certName;
        $this->certExpiry = ($message->certExpiry !== null) ? $message->certExpiry : $this->certExpiry;
        $this->nCertBits = ($message->nCertBits !== null) ? $message->nCertBits : $this->nCertBits;
        $this->bIsEVCert = ($message->bIsEVCert !== null) ? $message->bIsEVCert : $this->bIsEVCert;
    }


}
