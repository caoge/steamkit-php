<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_clientserver_2.proto
 */


namespace SteamKit\Base\SteamMsgClientServer2;

/**
 * Protobuf message :
 * SteamKit.Base.SteamMsgClientServer2.CMsgClientUGSGetGlobalStats
 */
class CMsgClientUGSGetGlobalStats extends \Protobuf\AbstractMessage
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
     * gameid optional uint64 = 1
     *
     * @var int
     */
    protected $gameid = null;

    /**
     * history_days_requested optional uint32 = 2
     *
     * @var int
     */
    protected $history_days_requested = null;

    /**
     * time_last_requested optional fixed32 = 3
     *
     * @var int
     */
    protected $time_last_requested = null;

    /**
     * first_day_cached optional uint32 = 4
     *
     * @var int
     */
    protected $first_day_cached = null;

    /**
     * days_cached optional uint32 = 5
     *
     * @var int
     */
    protected $days_cached = null;

    /**
     * Check if 'gameid' has a value
     *
     * @return bool
     */
    public function hasGameid()
    {
        return $this->gameid !== null;
    }

    /**
     * Get 'gameid' value
     *
     * @return int
     */
    public function getGameid()
    {
        return $this->gameid;
    }

    /**
     * Set 'gameid' value
     *
     * @param int $value
     */
    public function setGameid($value = null)
    {
        $this->gameid = $value;
    }

    /**
     * Check if 'history_days_requested' has a value
     *
     * @return bool
     */
    public function hasHistoryDaysRequested()
    {
        return $this->history_days_requested !== null;
    }

    /**
     * Get 'history_days_requested' value
     *
     * @return int
     */
    public function getHistoryDaysRequested()
    {
        return $this->history_days_requested;
    }

    /**
     * Set 'history_days_requested' value
     *
     * @param int $value
     */
    public function setHistoryDaysRequested($value = null)
    {
        $this->history_days_requested = $value;
    }

    /**
     * Check if 'time_last_requested' has a value
     *
     * @return bool
     */
    public function hasTimeLastRequested()
    {
        return $this->time_last_requested !== null;
    }

    /**
     * Get 'time_last_requested' value
     *
     * @return int
     */
    public function getTimeLastRequested()
    {
        return $this->time_last_requested;
    }

    /**
     * Set 'time_last_requested' value
     *
     * @param int $value
     */
    public function setTimeLastRequested($value = null)
    {
        $this->time_last_requested = $value;
    }

    /**
     * Check if 'first_day_cached' has a value
     *
     * @return bool
     */
    public function hasFirstDayCached()
    {
        return $this->first_day_cached !== null;
    }

    /**
     * Get 'first_day_cached' value
     *
     * @return int
     */
    public function getFirstDayCached()
    {
        return $this->first_day_cached;
    }

    /**
     * Set 'first_day_cached' value
     *
     * @param int $value
     */
    public function setFirstDayCached($value = null)
    {
        $this->first_day_cached = $value;
    }

    /**
     * Check if 'days_cached' has a value
     *
     * @return bool
     */
    public function hasDaysCached()
    {
        return $this->days_cached !== null;
    }

    /**
     * Get 'days_cached' value
     *
     * @return int
     */
    public function getDaysCached()
    {
        return $this->days_cached;
    }

    /**
     * Set 'days_cached' value
     *
     * @param int $value
     */
    public function setDaysCached($value = null)
    {
        $this->days_cached = $value;
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
            'gameid' => null,
            'history_days_requested' => null,
            'time_last_requested' => null,
            'first_day_cached' => null,
            'days_cached' => null
        ], $values);

        $message->setGameid($values['gameid']);
        $message->setHistoryDaysRequested($values['history_days_requested']);
        $message->setTimeLastRequested($values['time_last_requested']);
        $message->setFirstDayCached($values['first_day_cached']);
        $message->setDaysCached($values['days_cached']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgClientUGSGetGlobalStats',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'gameid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'history_days_requested',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'time_last_requested',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'first_day_cached',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'days_cached',
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

        if ($this->gameid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->gameid);
        }

        if ($this->history_days_requested !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->history_days_requested);
        }

        if ($this->time_last_requested !== null) {
            $writer->writeVarint($stream, 29);
            $writer->writeFixed32($stream, $this->time_last_requested);
        }

        if ($this->first_day_cached !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->first_day_cached);
        }

        if ($this->days_cached !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->days_cached);
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
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->gameid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->history_days_requested = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->time_last_requested = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->first_day_cached = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->days_cached = $reader->readVarint($stream);

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

        if ($this->gameid !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->gameid);
        }

        if ($this->history_days_requested !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->history_days_requested);
        }

        if ($this->time_last_requested !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->first_day_cached !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->first_day_cached);
        }

        if ($this->days_cached !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->days_cached);
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
        $this->gameid = null;
        $this->history_days_requested = null;
        $this->time_last_requested = null;
        $this->first_day_cached = null;
        $this->days_cached = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\SteamMsgClientServer2\CMsgClientUGSGetGlobalStats) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->gameid = ($message->gameid !== null) ? $message->gameid : $this->gameid;
        $this->history_days_requested = ($message->history_days_requested !== null) ? $message->history_days_requested : $this->history_days_requested;
        $this->time_last_requested = ($message->time_last_requested !== null) ? $message->time_last_requested : $this->time_last_requested;
        $this->first_day_cached = ($message->first_day_cached !== null) ? $message->first_day_cached : $this->first_day_cached;
        $this->days_cached = ($message->days_cached !== null) ? $message->days_cached : $this->days_cached;
    }


}
