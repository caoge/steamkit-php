<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_cloud.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgCloud;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgCloud.CCloud_BeginHTTPUpload_Request
 */
class CCloud_BeginHTTPUpload_Request extends \Protobuf\AbstractMessage
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
     * file_size optional uint32 = 2
     *
     * @var int
     */
    protected $file_size = null;

    /**
     * filename optional string = 3
     *
     * @var string
     */
    protected $filename = null;

    /**
     * file_sha optional string = 4
     *
     * @var string
     */
    protected $file_sha = null;

    /**
     * is_public optional bool = 5
     *
     * @var bool
     */
    protected $is_public = null;

    /**
     * platforms_to_sync repeated string = 6
     *
     * @var \Protobuf\Collection
     */
    protected $platforms_to_sync = null;

    /**
     * request_headers_names repeated string = 7
     *
     * @var \Protobuf\Collection
     */
    protected $request_headers_names = null;

    /**
     * request_headers_values repeated string = 8
     *
     * @var \Protobuf\Collection
     */
    protected $request_headers_values = null;

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
     * Check if 'file_size' has a value
     *
     * @return bool
     */
    public function hasFileSize()
    {
        return $this->file_size !== null;
    }

    /**
     * Get 'file_size' value
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->file_size;
    }

    /**
     * Set 'file_size' value
     *
     * @param int $value
     */
    public function setFileSize($value = null)
    {
        $this->file_size = $value;
    }

    /**
     * Check if 'filename' has a value
     *
     * @return bool
     */
    public function hasFilename()
    {
        return $this->filename !== null;
    }

    /**
     * Get 'filename' value
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set 'filename' value
     *
     * @param string $value
     */
    public function setFilename($value = null)
    {
        $this->filename = $value;
    }

    /**
     * Check if 'file_sha' has a value
     *
     * @return bool
     */
    public function hasFileSha()
    {
        return $this->file_sha !== null;
    }

    /**
     * Get 'file_sha' value
     *
     * @return string
     */
    public function getFileSha()
    {
        return $this->file_sha;
    }

    /**
     * Set 'file_sha' value
     *
     * @param string $value
     */
    public function setFileSha($value = null)
    {
        $this->file_sha = $value;
    }

    /**
     * Check if 'is_public' has a value
     *
     * @return bool
     */
    public function hasIsPublic()
    {
        return $this->is_public !== null;
    }

    /**
     * Get 'is_public' value
     *
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->is_public;
    }

    /**
     * Set 'is_public' value
     *
     * @param bool $value
     */
    public function setIsPublic($value = null)
    {
        $this->is_public = $value;
    }

    /**
     * Check if 'platforms_to_sync' has a value
     *
     * @return bool
     */
    public function hasPlatformsToSyncList()
    {
        return $this->platforms_to_sync !== null;
    }

    /**
     * Get 'platforms_to_sync' value
     *
     * @return \Protobuf\Collection
     */
    public function getPlatformsToSyncList()
    {
        return $this->platforms_to_sync;
    }

    /**
     * Set 'platforms_to_sync' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setPlatformsToSyncList(\Protobuf\Collection $value = null)
    {
        $this->platforms_to_sync = $value;
    }

    /**
     * Add a new element to 'platforms_to_sync'
     *
     * @param string $value
     */
    public function addPlatformsToSync($value)
    {
        if ($this->platforms_to_sync === null) {
            $this->platforms_to_sync = new \Protobuf\ScalarCollection();
        }

        $this->platforms_to_sync->add($value);
    }

    /**
     * Check if 'request_headers_names' has a value
     *
     * @return bool
     */
    public function hasRequestHeadersNamesList()
    {
        return $this->request_headers_names !== null;
    }

    /**
     * Get 'request_headers_names' value
     *
     * @return \Protobuf\Collection
     */
    public function getRequestHeadersNamesList()
    {
        return $this->request_headers_names;
    }

    /**
     * Set 'request_headers_names' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setRequestHeadersNamesList(\Protobuf\Collection $value = null)
    {
        $this->request_headers_names = $value;
    }

    /**
     * Add a new element to 'request_headers_names'
     *
     * @param string $value
     */
    public function addRequestHeadersNames($value)
    {
        if ($this->request_headers_names === null) {
            $this->request_headers_names = new \Protobuf\ScalarCollection();
        }

        $this->request_headers_names->add($value);
    }

    /**
     * Check if 'request_headers_values' has a value
     *
     * @return bool
     */
    public function hasRequestHeadersValuesList()
    {
        return $this->request_headers_values !== null;
    }

    /**
     * Get 'request_headers_values' value
     *
     * @return \Protobuf\Collection
     */
    public function getRequestHeadersValuesList()
    {
        return $this->request_headers_values;
    }

    /**
     * Set 'request_headers_values' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setRequestHeadersValuesList(\Protobuf\Collection $value = null)
    {
        $this->request_headers_values = $value;
    }

    /**
     * Add a new element to 'request_headers_values'
     *
     * @param string $value
     */
    public function addRequestHeadersValues($value)
    {
        if ($this->request_headers_values === null) {
            $this->request_headers_values = new \Protobuf\ScalarCollection();
        }

        $this->request_headers_values->add($value);
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
            'file_size' => null,
            'filename' => null,
            'file_sha' => null,
            'is_public' => null,
            'platforms_to_sync' => [],
            'request_headers_names' => [],
            'request_headers_values' => []
        ], $values);

        $message->setAppid($values['appid']);
        $message->setFileSize($values['file_size']);
        $message->setFilename($values['filename']);
        $message->setFileSha($values['file_sha']);
        $message->setIsPublic($values['is_public']);

        foreach ($values['platforms_to_sync'] as $item) {
            $message->addPlatformsToSync($item);
        }

        foreach ($values['request_headers_names'] as $item) {
            $message->addRequestHeadersNames($item);
        }

        foreach ($values['request_headers_values'] as $item) {
            $message->addRequestHeadersValues($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CCloud_BeginHTTPUpload_Request',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'appid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'file_size',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'filename',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'file_sha',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'is_public',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'platforms_to_sync',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'request_headers_names',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'request_headers_values',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
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

        if ($this->appid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->appid);
        }

        if ($this->file_size !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->file_size);
        }

        if ($this->filename !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->filename);
        }

        if ($this->file_sha !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->file_sha);
        }

        if ($this->is_public !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->is_public);
        }

        if ($this->platforms_to_sync !== null) {
            foreach ($this->platforms_to_sync as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->request_headers_names !== null) {
            foreach ($this->request_headers_names as $val) {
                $writer->writeVarint($stream, 58);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->request_headers_values !== null) {
            foreach ($this->request_headers_values as $val) {
                $writer->writeVarint($stream, 66);
                $writer->writeString($stream, $val);
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
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->appid = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->file_size = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->filename = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->file_sha = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_public = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->platforms_to_sync === null) {
                    $this->platforms_to_sync = new \Protobuf\ScalarCollection();
                }

                $this->platforms_to_sync->add($reader->readString($stream));

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->request_headers_names === null) {
                    $this->request_headers_names = new \Protobuf\ScalarCollection();
                }

                $this->request_headers_names->add($reader->readString($stream));

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->request_headers_values === null) {
                    $this->request_headers_values = new \Protobuf\ScalarCollection();
                }

                $this->request_headers_values->add($reader->readString($stream));

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

        if ($this->file_size !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->file_size);
        }

        if ($this->filename !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->filename);
        }

        if ($this->file_sha !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->file_sha);
        }

        if ($this->is_public !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->platforms_to_sync !== null) {
            foreach ($this->platforms_to_sync as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->request_headers_names !== null) {
            foreach ($this->request_headers_names as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->request_headers_values !== null) {
            foreach ($this->request_headers_values as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
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
        $this->file_size = null;
        $this->filename = null;
        $this->file_sha = null;
        $this->is_public = null;
        $this->platforms_to_sync = null;
        $this->request_headers_names = null;
        $this->request_headers_values = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgCloud\CCloud_BeginHTTPUpload_Request) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->appid = ($message->appid !== null) ? $message->appid : $this->appid;
        $this->file_size = ($message->file_size !== null) ? $message->file_size : $this->file_size;
        $this->filename = ($message->filename !== null) ? $message->filename : $this->filename;
        $this->file_sha = ($message->file_sha !== null) ? $message->file_sha : $this->file_sha;
        $this->is_public = ($message->is_public !== null) ? $message->is_public : $this->is_public;
        $this->platforms_to_sync = ($message->platforms_to_sync !== null) ? $message->platforms_to_sync : $this->platforms_to_sync;
        $this->request_headers_names = ($message->request_headers_names !== null) ? $message->request_headers_names : $this->request_headers_names;
        $this->request_headers_values = ($message->request_headers_values !== null) ? $message->request_headers_values : $this->request_headers_values;
    }


}

