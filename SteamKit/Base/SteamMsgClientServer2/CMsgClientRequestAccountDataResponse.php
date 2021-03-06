<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientRequestAccountDataResponse
 */
class CMsgClientRequestAccountDataResponse extends \Protobuf\AbstractMessage
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
     * action optional uint32 = 1
     *
     * @var int
     */
    protected $action = null;

    /**
     * eresult optional uint32 = 2
     *
     * @var int
     */
    protected $eresult = null;

    /**
     * account_name optional string = 3
     *
     * @var string
     */
    protected $account_name = null;

    /**
     * ct_matches optional uint32 = 4
     *
     * @var int
     */
    protected $ct_matches = null;

    /**
     * account_name_suggestion1 optional string = 5
     *
     * @var string
     */
    protected $account_name_suggestion1 = null;

    /**
     * account_name_suggestion2 optional string = 6
     *
     * @var string
     */
    protected $account_name_suggestion2 = null;

    /**
     * account_name_suggestion3 optional string = 7
     *
     * @var string
     */
    protected $account_name_suggestion3 = null;

    /**
     * Check if 'action' has a value
     *
     * @return bool
     */
    public function hasAction()
    {
        return $this->action !== null;
    }

    /**
     * Get 'action' value
     *
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set 'action' value
     *
     * @param int $value
     */
    public function setAction($value = null)
    {
        $this->action = $value;
    }

    /**
     * Check if 'eresult' has a value
     *
     * @return bool
     */
    public function hasEresult()
    {
        return $this->eresult !== null;
    }

    /**
     * Get 'eresult' value
     *
     * @return int
     */
    public function getEresult()
    {
        return $this->eresult;
    }

    /**
     * Set 'eresult' value
     *
     * @param int $value
     */
    public function setEresult($value = null)
    {
        $this->eresult = $value;
    }

    /**
     * Check if 'account_name' has a value
     *
     * @return bool
     */
    public function hasAccountName()
    {
        return $this->account_name !== null;
    }

    /**
     * Get 'account_name' value
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->account_name;
    }

    /**
     * Set 'account_name' value
     *
     * @param string $value
     */
    public function setAccountName($value = null)
    {
        $this->account_name = $value;
    }

    /**
     * Check if 'ct_matches' has a value
     *
     * @return bool
     */
    public function hasCtMatches()
    {
        return $this->ct_matches !== null;
    }

    /**
     * Get 'ct_matches' value
     *
     * @return int
     */
    public function getCtMatches()
    {
        return $this->ct_matches;
    }

    /**
     * Set 'ct_matches' value
     *
     * @param int $value
     */
    public function setCtMatches($value = null)
    {
        $this->ct_matches = $value;
    }

    /**
     * Check if 'account_name_suggestion1' has a value
     *
     * @return bool
     */
    public function hasAccountNameSuggestion1()
    {
        return $this->account_name_suggestion1 !== null;
    }

    /**
     * Get 'account_name_suggestion1' value
     *
     * @return string
     */
    public function getAccountNameSuggestion1()
    {
        return $this->account_name_suggestion1;
    }

    /**
     * Set 'account_name_suggestion1' value
     *
     * @param string $value
     */
    public function setAccountNameSuggestion1($value = null)
    {
        $this->account_name_suggestion1 = $value;
    }

    /**
     * Check if 'account_name_suggestion2' has a value
     *
     * @return bool
     */
    public function hasAccountNameSuggestion2()
    {
        return $this->account_name_suggestion2 !== null;
    }

    /**
     * Get 'account_name_suggestion2' value
     *
     * @return string
     */
    public function getAccountNameSuggestion2()
    {
        return $this->account_name_suggestion2;
    }

    /**
     * Set 'account_name_suggestion2' value
     *
     * @param string $value
     */
    public function setAccountNameSuggestion2($value = null)
    {
        $this->account_name_suggestion2 = $value;
    }

    /**
     * Check if 'account_name_suggestion3' has a value
     *
     * @return bool
     */
    public function hasAccountNameSuggestion3()
    {
        return $this->account_name_suggestion3 !== null;
    }

    /**
     * Get 'account_name_suggestion3' value
     *
     * @return string
     */
    public function getAccountNameSuggestion3()
    {
        return $this->account_name_suggestion3;
    }

    /**
     * Set 'account_name_suggestion3' value
     *
     * @param string $value
     */
    public function setAccountNameSuggestion3($value = null)
    {
        $this->account_name_suggestion3 = $value;
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
            'action' => null,
            'eresult' => null,
            'account_name' => null,
            'ct_matches' => null,
            'account_name_suggestion1' => null,
            'account_name_suggestion2' => null,
            'account_name_suggestion3' => null
        ], $values);

        $message->setAction($values['action']);
        $message->setEresult($values['eresult']);
        $message->setAccountName($values['account_name']);
        $message->setCtMatches($values['ct_matches']);
        $message->setAccountNameSuggestion1($values['account_name_suggestion1']);
        $message->setAccountNameSuggestion2($values['account_name_suggestion2']);
        $message->setAccountNameSuggestion3($values['account_name_suggestion3']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientRequestAccountDataResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'action',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'eresult',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'account_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'ct_matches',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'account_name_suggestion1',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'account_name_suggestion2',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'account_name_suggestion3',
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

        if ($this->action !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->action);
        }

        if ($this->eresult !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->eresult);
        }

        if ($this->account_name !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->account_name);
        }

        if ($this->ct_matches !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->ct_matches);
        }

        if ($this->account_name_suggestion1 !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->account_name_suggestion1);
        }

        if ($this->account_name_suggestion2 !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->account_name_suggestion2);
        }

        if ($this->account_name_suggestion3 !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->account_name_suggestion3);
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

                $this->action = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->eresult = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->account_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->ct_matches = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->account_name_suggestion1 = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->account_name_suggestion2 = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->account_name_suggestion3 = $reader->readString($stream);

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

        if ($this->action !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->action);
        }

        if ($this->eresult !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->eresult);
        }

        if ($this->account_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->account_name);
        }

        if ($this->ct_matches !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->ct_matches);
        }

        if ($this->account_name_suggestion1 !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->account_name_suggestion1);
        }

        if ($this->account_name_suggestion2 !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->account_name_suggestion2);
        }

        if ($this->account_name_suggestion3 !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->account_name_suggestion3);
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
        $this->action = null;
        $this->eresult = null;
        $this->account_name = null;
        $this->ct_matches = null;
        $this->account_name_suggestion1 = null;
        $this->account_name_suggestion2 = null;
        $this->account_name_suggestion3 = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientRequestAccountDataResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->action = ($message->action !== null) ? $message->action : $this->action;
        $this->eresult = ($message->eresult !== null) ? $message->eresult : $this->eresult;
        $this->account_name = ($message->account_name !== null) ? $message->account_name : $this->account_name;
        $this->ct_matches = ($message->ct_matches !== null) ? $message->ct_matches : $this->ct_matches;
        $this->account_name_suggestion1 = ($message->account_name_suggestion1 !== null) ? $message->account_name_suggestion1 : $this->account_name_suggestion1;
        $this->account_name_suggestion2 = ($message->account_name_suggestion2 !== null) ? $message->account_name_suggestion2 : $this->account_name_suggestion2;
        $this->account_name_suggestion3 = ($message->account_name_suggestion3 !== null) ? $message->account_name_suggestion3 : $this->account_name_suggestion3;
    }


}

