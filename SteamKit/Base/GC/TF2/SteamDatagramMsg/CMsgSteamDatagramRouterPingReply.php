<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/steamdatagram_messages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamDatagramMsg;

/**
 * Protobuf message :
 * SteamKit.Base.GC.TF2.SteamDatagramMsg.CMsgSteamDatagramRouterPingReply
 */
class CMsgSteamDatagramRouterPingReply extends \Protobuf\AbstractMessage
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
     * client_timestamp optional fixed32 = 1
     *
     * @var int
     */
    protected $client_timestamp = null;

    /**
     * latency_datacenter_ids repeated fixed32 = 2
     *
     * @var \Protobuf\Collection
     */
    protected $latency_datacenter_ids = null;

    /**
     * latency_ping_ms repeated uint32 = 3
     *
     * @var \Protobuf\Collection
     */
    protected $latency_ping_ms = null;

    /**
     * your_public_ip optional fixed32 = 4
     *
     * @var int
     */
    protected $your_public_ip = null;

    /**
     * server_time optional fixed32 = 5
     *
     * @var int
     */
    protected $server_time = null;

    /**
     * challenge optional fixed64 = 6
     *
     * @var int
     */
    protected $challenge = null;

    /**
     * seconds_until_shutdown optional uint32 = 7
     *
     * @var int
     */
    protected $seconds_until_shutdown = null;

    /**
     * client_cookie optional fixed32 = 8
     *
     * @var int
     */
    protected $client_cookie = null;

    /**
     * scoring_penalty_relay_cluster optional uint32 = 9
     *
     * @var int
     */
    protected $scoring_penalty_relay_cluster = null;

    /**
     * scoring_penalty_datacenter_ids repeated fixed32 = 10
     *
     * @var \Protobuf\Collection
     */
    protected $scoring_penalty_datacenter_ids = null;

    /**
     * scoring_penalty_values repeated uint32 = 11
     *
     * @var \Protobuf\Collection
     */
    protected $scoring_penalty_values = null;

    /**
     * Check if 'client_timestamp' has a value
     *
     * @return bool
     */
    public function hasClientTimestamp()
    {
        return $this->client_timestamp !== null;
    }

    /**
     * Get 'client_timestamp' value
     *
     * @return int
     */
    public function getClientTimestamp()
    {
        return $this->client_timestamp;
    }

    /**
     * Set 'client_timestamp' value
     *
     * @param int $value
     */
    public function setClientTimestamp($value = null)
    {
        $this->client_timestamp = $value;
    }

    /**
     * Check if 'latency_datacenter_ids' has a value
     *
     * @return bool
     */
    public function hasLatencyDatacenterIdsList()
    {
        return $this->latency_datacenter_ids !== null;
    }

    /**
     * Get 'latency_datacenter_ids' value
     *
     * @return \Protobuf\Collection
     */
    public function getLatencyDatacenterIdsList()
    {
        return $this->latency_datacenter_ids;
    }

    /**
     * Set 'latency_datacenter_ids' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setLatencyDatacenterIdsList(\Protobuf\Collection $value = null)
    {
        $this->latency_datacenter_ids = $value;
    }

    /**
     * Add a new element to 'latency_datacenter_ids'
     *
     * @param int $value
     */
    public function addLatencyDatacenterIds($value)
    {
        if ($this->latency_datacenter_ids === null) {
            $this->latency_datacenter_ids = new \Protobuf\ScalarCollection();
        }

        $this->latency_datacenter_ids->add($value);
    }

    /**
     * Check if 'latency_ping_ms' has a value
     *
     * @return bool
     */
    public function hasLatencyPingMsList()
    {
        return $this->latency_ping_ms !== null;
    }

    /**
     * Get 'latency_ping_ms' value
     *
     * @return \Protobuf\Collection
     */
    public function getLatencyPingMsList()
    {
        return $this->latency_ping_ms;
    }

    /**
     * Set 'latency_ping_ms' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setLatencyPingMsList(\Protobuf\Collection $value = null)
    {
        $this->latency_ping_ms = $value;
    }

    /**
     * Add a new element to 'latency_ping_ms'
     *
     * @param int $value
     */
    public function addLatencyPingMs($value)
    {
        if ($this->latency_ping_ms === null) {
            $this->latency_ping_ms = new \Protobuf\ScalarCollection();
        }

        $this->latency_ping_ms->add($value);
    }

    /**
     * Check if 'your_public_ip' has a value
     *
     * @return bool
     */
    public function hasYourPublicIp()
    {
        return $this->your_public_ip !== null;
    }

    /**
     * Get 'your_public_ip' value
     *
     * @return int
     */
    public function getYourPublicIp()
    {
        return $this->your_public_ip;
    }

    /**
     * Set 'your_public_ip' value
     *
     * @param int $value
     */
    public function setYourPublicIp($value = null)
    {
        $this->your_public_ip = $value;
    }

    /**
     * Check if 'server_time' has a value
     *
     * @return bool
     */
    public function hasServerTime()
    {
        return $this->server_time !== null;
    }

    /**
     * Get 'server_time' value
     *
     * @return int
     */
    public function getServerTime()
    {
        return $this->server_time;
    }

    /**
     * Set 'server_time' value
     *
     * @param int $value
     */
    public function setServerTime($value = null)
    {
        $this->server_time = $value;
    }

    /**
     * Check if 'challenge' has a value
     *
     * @return bool
     */
    public function hasChallenge()
    {
        return $this->challenge !== null;
    }

    /**
     * Get 'challenge' value
     *
     * @return int
     */
    public function getChallenge()
    {
        return $this->challenge;
    }

    /**
     * Set 'challenge' value
     *
     * @param int $value
     */
    public function setChallenge($value = null)
    {
        $this->challenge = $value;
    }

    /**
     * Check if 'seconds_until_shutdown' has a value
     *
     * @return bool
     */
    public function hasSecondsUntilShutdown()
    {
        return $this->seconds_until_shutdown !== null;
    }

    /**
     * Get 'seconds_until_shutdown' value
     *
     * @return int
     */
    public function getSecondsUntilShutdown()
    {
        return $this->seconds_until_shutdown;
    }

    /**
     * Set 'seconds_until_shutdown' value
     *
     * @param int $value
     */
    public function setSecondsUntilShutdown($value = null)
    {
        $this->seconds_until_shutdown = $value;
    }

    /**
     * Check if 'client_cookie' has a value
     *
     * @return bool
     */
    public function hasClientCookie()
    {
        return $this->client_cookie !== null;
    }

    /**
     * Get 'client_cookie' value
     *
     * @return int
     */
    public function getClientCookie()
    {
        return $this->client_cookie;
    }

    /**
     * Set 'client_cookie' value
     *
     * @param int $value
     */
    public function setClientCookie($value = null)
    {
        $this->client_cookie = $value;
    }

    /**
     * Check if 'scoring_penalty_relay_cluster' has a value
     *
     * @return bool
     */
    public function hasScoringPenaltyRelayCluster()
    {
        return $this->scoring_penalty_relay_cluster !== null;
    }

    /**
     * Get 'scoring_penalty_relay_cluster' value
     *
     * @return int
     */
    public function getScoringPenaltyRelayCluster()
    {
        return $this->scoring_penalty_relay_cluster;
    }

    /**
     * Set 'scoring_penalty_relay_cluster' value
     *
     * @param int $value
     */
    public function setScoringPenaltyRelayCluster($value = null)
    {
        $this->scoring_penalty_relay_cluster = $value;
    }

    /**
     * Check if 'scoring_penalty_datacenter_ids' has a value
     *
     * @return bool
     */
    public function hasScoringPenaltyDatacenterIdsList()
    {
        return $this->scoring_penalty_datacenter_ids !== null;
    }

    /**
     * Get 'scoring_penalty_datacenter_ids' value
     *
     * @return \Protobuf\Collection
     */
    public function getScoringPenaltyDatacenterIdsList()
    {
        return $this->scoring_penalty_datacenter_ids;
    }

    /**
     * Set 'scoring_penalty_datacenter_ids' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setScoringPenaltyDatacenterIdsList(\Protobuf\Collection $value = null)
    {
        $this->scoring_penalty_datacenter_ids = $value;
    }

    /**
     * Add a new element to 'scoring_penalty_datacenter_ids'
     *
     * @param int $value
     */
    public function addScoringPenaltyDatacenterIds($value)
    {
        if ($this->scoring_penalty_datacenter_ids === null) {
            $this->scoring_penalty_datacenter_ids = new \Protobuf\ScalarCollection();
        }

        $this->scoring_penalty_datacenter_ids->add($value);
    }

    /**
     * Check if 'scoring_penalty_values' has a value
     *
     * @return bool
     */
    public function hasScoringPenaltyValuesList()
    {
        return $this->scoring_penalty_values !== null;
    }

    /**
     * Get 'scoring_penalty_values' value
     *
     * @return \Protobuf\Collection
     */
    public function getScoringPenaltyValuesList()
    {
        return $this->scoring_penalty_values;
    }

    /**
     * Set 'scoring_penalty_values' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setScoringPenaltyValuesList(\Protobuf\Collection $value = null)
    {
        $this->scoring_penalty_values = $value;
    }

    /**
     * Add a new element to 'scoring_penalty_values'
     *
     * @param int $value
     */
    public function addScoringPenaltyValues($value)
    {
        if ($this->scoring_penalty_values === null) {
            $this->scoring_penalty_values = new \Protobuf\ScalarCollection();
        }

        $this->scoring_penalty_values->add($value);
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
            'client_timestamp' => null,
            'latency_datacenter_ids' => [],
            'latency_ping_ms' => [],
            'your_public_ip' => null,
            'server_time' => null,
            'challenge' => null,
            'seconds_until_shutdown' => null,
            'client_cookie' => null,
            'scoring_penalty_relay_cluster' => null,
            'scoring_penalty_datacenter_ids' => [],
            'scoring_penalty_values' => []
        ], $values);

        $message->setClientTimestamp($values['client_timestamp']);
        $message->setYourPublicIp($values['your_public_ip']);
        $message->setServerTime($values['server_time']);
        $message->setChallenge($values['challenge']);
        $message->setSecondsUntilShutdown($values['seconds_until_shutdown']);
        $message->setClientCookie($values['client_cookie']);
        $message->setScoringPenaltyRelayCluster($values['scoring_penalty_relay_cluster']);

        foreach ($values['latency_datacenter_ids'] as $item) {
            $message->addLatencyDatacenterIds($item);
        }

        foreach ($values['latency_ping_ms'] as $item) {
            $message->addLatencyPingMs($item);
        }

        foreach ($values['scoring_penalty_datacenter_ids'] as $item) {
            $message->addScoringPenaltyDatacenterIds($item);
        }

        foreach ($values['scoring_penalty_values'] as $item) {
            $message->addScoringPenaltyValues($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CMsgSteamDatagramRouterPingReply',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'client_timestamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'latency_datacenter_ids',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'latency_ping_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'your_public_ip',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'server_time',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'challenge',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'seconds_until_shutdown',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'client_cookie',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'scoring_penalty_relay_cluster',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'scoring_penalty_datacenter_ids',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'scoring_penalty_values',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->client_timestamp !== null) {
            $writer->writeVarint($stream, 13);
            $writer->writeFixed32($stream, $this->client_timestamp);
        }

        if ($this->latency_datacenter_ids !== null) {
            $innerSize   = 0;
            $calculator  = $sizeContext->getSizeCalculator();

            foreach ($this->latency_datacenter_ids as $val) {
                $innerSize += 4;
            }

            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $innerSize);

            foreach ($this->latency_datacenter_ids as $val) {
                $writer->writeFixed32($stream, $val);
            }
        }

        if ($this->latency_ping_ms !== null) {
            $innerSize   = 0;
            $calculator  = $sizeContext->getSizeCalculator();

            foreach ($this->latency_ping_ms as $val) {
                $innerSize += $calculator->computeVarintSize($val);
            }

            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $innerSize);

            foreach ($this->latency_ping_ms as $val) {
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->your_public_ip !== null) {
            $writer->writeVarint($stream, 37);
            $writer->writeFixed32($stream, $this->your_public_ip);
        }

        if ($this->server_time !== null) {
            $writer->writeVarint($stream, 45);
            $writer->writeFixed32($stream, $this->server_time);
        }

        if ($this->challenge !== null) {
            $writer->writeVarint($stream, 49);
            $writer->writeFixed64($stream, $this->challenge);
        }

        if ($this->seconds_until_shutdown !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->seconds_until_shutdown);
        }

        if ($this->client_cookie !== null) {
            $writer->writeVarint($stream, 69);
            $writer->writeFixed32($stream, $this->client_cookie);
        }

        if ($this->scoring_penalty_relay_cluster !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->scoring_penalty_relay_cluster);
        }

        if ($this->scoring_penalty_datacenter_ids !== null) {
            $innerSize   = 0;
            $calculator  = $sizeContext->getSizeCalculator();

            foreach ($this->scoring_penalty_datacenter_ids as $val) {
                $innerSize += 4;
            }

            $writer->writeVarint($stream, 82);
            $writer->writeVarint($stream, $innerSize);

            foreach ($this->scoring_penalty_datacenter_ids as $val) {
                $writer->writeFixed32($stream, $val);
            }
        }

        if ($this->scoring_penalty_values !== null) {
            $innerSize   = 0;
            $calculator  = $sizeContext->getSizeCalculator();

            foreach ($this->scoring_penalty_values as $val) {
                $innerSize += $calculator->computeVarintSize($val);
            }

            $writer->writeVarint($stream, 90);
            $writer->writeVarint($stream, $innerSize);

            foreach ($this->scoring_penalty_values as $val) {
                $writer->writeVarint($stream, $val);
            }
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
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->client_timestamp = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 2) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->latency_datacenter_ids === null) {
                    $this->latency_datacenter_ids = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->latency_datacenter_ids->add($reader->readFixed32($stream));
                }

                continue;
            }

            if ($tag === 3) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->latency_ping_ms === null) {
                    $this->latency_ping_ms = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->latency_ping_ms->add($reader->readVarint($stream));
                }

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->your_public_ip = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->server_time = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->challenge = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->seconds_until_shutdown = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 7);

                $this->client_cookie = $reader->readFixed32($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->scoring_penalty_relay_cluster = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->scoring_penalty_datacenter_ids === null) {
                    $this->scoring_penalty_datacenter_ids = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->scoring_penalty_datacenter_ids->add($reader->readFixed32($stream));
                }

                continue;
            }

            if ($tag === 11) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->scoring_penalty_values === null) {
                    $this->scoring_penalty_values = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->scoring_penalty_values->add($reader->readVarint($stream));
                }

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

        if ($this->client_timestamp !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->latency_datacenter_ids !== null) {
            $innerSize = 0;

            foreach ($this->latency_datacenter_ids as $val) {
                $innerSize += 4;
            }

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->latency_ping_ms !== null) {
            $innerSize = 0;

            foreach ($this->latency_ping_ms as $val) {
                $innerSize += $calculator->computeVarintSize($val);
            }

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->your_public_ip !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->server_time !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->challenge !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->seconds_until_shutdown !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->seconds_until_shutdown);
        }

        if ($this->client_cookie !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->scoring_penalty_relay_cluster !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->scoring_penalty_relay_cluster);
        }

        if ($this->scoring_penalty_datacenter_ids !== null) {
            $innerSize = 0;

            foreach ($this->scoring_penalty_datacenter_ids as $val) {
                $innerSize += 4;
            }

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->scoring_penalty_values !== null) {
            $innerSize = 0;

            foreach ($this->scoring_penalty_values as $val) {
                $innerSize += $calculator->computeVarintSize($val);
            }

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->client_timestamp = null;
        $this->latency_datacenter_ids = null;
        $this->latency_ping_ms = null;
        $this->your_public_ip = null;
        $this->server_time = null;
        $this->challenge = null;
        $this->seconds_until_shutdown = null;
        $this->client_cookie = null;
        $this->scoring_penalty_relay_cluster = null;
        $this->scoring_penalty_datacenter_ids = null;
        $this->scoring_penalty_values = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\TF2\SteamDatagramMsg\CMsgSteamDatagramRouterPingReply) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->client_timestamp = ($message->client_timestamp !== null) ? $message->client_timestamp : $this->client_timestamp;
        $this->latency_datacenter_ids = ($message->latency_datacenter_ids !== null) ? $message->latency_datacenter_ids : $this->latency_datacenter_ids;
        $this->latency_ping_ms = ($message->latency_ping_ms !== null) ? $message->latency_ping_ms : $this->latency_ping_ms;
        $this->your_public_ip = ($message->your_public_ip !== null) ? $message->your_public_ip : $this->your_public_ip;
        $this->server_time = ($message->server_time !== null) ? $message->server_time : $this->server_time;
        $this->challenge = ($message->challenge !== null) ? $message->challenge : $this->challenge;
        $this->seconds_until_shutdown = ($message->seconds_until_shutdown !== null) ? $message->seconds_until_shutdown : $this->seconds_until_shutdown;
        $this->client_cookie = ($message->client_cookie !== null) ? $message->client_cookie : $this->client_cookie;
        $this->scoring_penalty_relay_cluster = ($message->scoring_penalty_relay_cluster !== null) ? $message->scoring_penalty_relay_cluster : $this->scoring_penalty_relay_cluster;
        $this->scoring_penalty_datacenter_ids = ($message->scoring_penalty_datacenter_ids !== null) ? $message->scoring_penalty_datacenter_ids : $this->scoring_penalty_datacenter_ids;
        $this->scoring_penalty_values = ($message->scoring_penalty_values !== null) ? $message->scoring_penalty_values : $this->scoring_penalty_values;
    }


}

