<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_publishedfile.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails;

/**
 * Protobuf message :
 * SteamKit.Base.Unified.SteamMsgPublishedFile.PublishedFileDetails.ForSaleData
 */
class ForSaleData extends \Protobuf\AbstractMessage
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
     * is_for_sale optional bool = 1
     *
     * @var bool
     */
    protected $is_for_sale = null;

    /**
     * price_category optional uint32 = 2
     *
     * @var int
     */
    protected $price_category = null;

    /**
     * estatus optional enum = 3
     *
     * @var \SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails\EPublishedFileForSaleStatus
     */
    protected $estatus = null;

    /**
     * price_category_floor optional uint32 = 4
     *
     * @var int
     */
    protected $price_category_floor = null;

    /**
     * price_is_pay_what_you_want optional bool = 5
     *
     * @var bool
     */
    protected $price_is_pay_what_you_want = null;

    /**
     * discount_percentage optional uint32 = 6
     *
     * @var int
     */
    protected $discount_percentage = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->estatus = \SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails\EPublishedFileForSaleStatus::k_PFFSS_NotForSale();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'is_for_sale' has a value
     *
     * @return bool
     */
    public function hasIsForSale()
    {
        return $this->is_for_sale !== null;
    }

    /**
     * Get 'is_for_sale' value
     *
     * @return bool
     */
    public function getIsForSale()
    {
        return $this->is_for_sale;
    }

    /**
     * Set 'is_for_sale' value
     *
     * @param bool $value
     */
    public function setIsForSale($value = null)
    {
        $this->is_for_sale = $value;
    }

    /**
     * Check if 'price_category' has a value
     *
     * @return bool
     */
    public function hasPriceCategory()
    {
        return $this->price_category !== null;
    }

    /**
     * Get 'price_category' value
     *
     * @return int
     */
    public function getPriceCategory()
    {
        return $this->price_category;
    }

    /**
     * Set 'price_category' value
     *
     * @param int $value
     */
    public function setPriceCategory($value = null)
    {
        $this->price_category = $value;
    }

    /**
     * Check if 'estatus' has a value
     *
     * @return bool
     */
    public function hasEstatus()
    {
        return $this->estatus !== null;
    }

    /**
     * Get 'estatus' value
     *
     * @return \SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails\EPublishedFileForSaleStatus
     */
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set 'estatus' value
     *
     * @param \SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails\EPublishedFileForSaleStatus $value
     */
    public function setEstatus(\SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails\EPublishedFileForSaleStatus $value = null)
    {
        $this->estatus = $value;
    }

    /**
     * Check if 'price_category_floor' has a value
     *
     * @return bool
     */
    public function hasPriceCategoryFloor()
    {
        return $this->price_category_floor !== null;
    }

    /**
     * Get 'price_category_floor' value
     *
     * @return int
     */
    public function getPriceCategoryFloor()
    {
        return $this->price_category_floor;
    }

    /**
     * Set 'price_category_floor' value
     *
     * @param int $value
     */
    public function setPriceCategoryFloor($value = null)
    {
        $this->price_category_floor = $value;
    }

    /**
     * Check if 'price_is_pay_what_you_want' has a value
     *
     * @return bool
     */
    public function hasPriceIsPayWhatYouWant()
    {
        return $this->price_is_pay_what_you_want !== null;
    }

    /**
     * Get 'price_is_pay_what_you_want' value
     *
     * @return bool
     */
    public function getPriceIsPayWhatYouWant()
    {
        return $this->price_is_pay_what_you_want;
    }

    /**
     * Set 'price_is_pay_what_you_want' value
     *
     * @param bool $value
     */
    public function setPriceIsPayWhatYouWant($value = null)
    {
        $this->price_is_pay_what_you_want = $value;
    }

    /**
     * Check if 'discount_percentage' has a value
     *
     * @return bool
     */
    public function hasDiscountPercentage()
    {
        return $this->discount_percentage !== null;
    }

    /**
     * Get 'discount_percentage' value
     *
     * @return int
     */
    public function getDiscountPercentage()
    {
        return $this->discount_percentage;
    }

    /**
     * Set 'discount_percentage' value
     *
     * @param int $value
     */
    public function setDiscountPercentage($value = null)
    {
        $this->discount_percentage = $value;
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
            'is_for_sale' => null,
            'price_category' => null,
            'estatus' => \SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails\EPublishedFileForSaleStatus::k_PFFSS_NotForSale(),
            'price_category_floor' => null,
            'price_is_pay_what_you_want' => null,
            'discount_percentage' => null
        ], $values);

        $message->setIsForSale($values['is_for_sale']);
        $message->setPriceCategory($values['price_category']);
        $message->setEstatus($values['estatus']);
        $message->setPriceCategoryFloor($values['price_category_floor']);
        $message->setPriceIsPayWhatYouWant($values['price_is_pay_what_you_want']);
        $message->setDiscountPercentage($values['discount_percentage']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ForSaleData',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'is_for_sale',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'price_category',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'estatus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.Unified.SteamMsgPublishedFile.PublishedFileDetails.EPublishedFileForSaleStatus',
                    'default_value' => \SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails\EPublishedFileForSaleStatus::k_PFFSS_NotForSale()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'price_category_floor',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'price_is_pay_what_you_want',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'discount_percentage',
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

        if ($this->is_for_sale !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->is_for_sale);
        }

        if ($this->price_category !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->price_category);
        }

        if ($this->estatus !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->estatus->value());
        }

        if ($this->price_category_floor !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->price_category_floor);
        }

        if ($this->price_is_pay_what_you_want !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->price_is_pay_what_you_want);
        }

        if ($this->discount_percentage !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->discount_percentage);
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

                $this->is_for_sale = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->price_category = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->estatus = \SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails\EPublishedFileForSaleStatus::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->price_category_floor = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->price_is_pay_what_you_want = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->discount_percentage = $reader->readVarint($stream);

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

        if ($this->is_for_sale !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->price_category !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->price_category);
        }

        if ($this->estatus !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->estatus->value());
        }

        if ($this->price_category_floor !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->price_category_floor);
        }

        if ($this->price_is_pay_what_you_want !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->discount_percentage !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->discount_percentage);
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
        $this->is_for_sale = null;
        $this->price_category = null;
        $this->estatus = \SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails\EPublishedFileForSaleStatus::k_PFFSS_NotForSale();
        $this->price_category_floor = null;
        $this->price_is_pay_what_you_want = null;
        $this->discount_percentage = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\Unified\SteamMsgPublishedFile\PublishedFileDetails\ForSaleData) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->is_for_sale = ($message->is_for_sale !== null) ? $message->is_for_sale : $this->is_for_sale;
        $this->price_category = ($message->price_category !== null) ? $message->price_category : $this->price_category;
        $this->estatus = ($message->estatus !== null) ? $message->estatus : $this->estatus;
        $this->price_category_floor = ($message->price_category_floor !== null) ? $message->price_category_floor : $this->price_category_floor;
        $this->price_is_pay_what_you_want = ($message->price_is_pay_what_you_want !== null) ? $message->price_is_pay_what_you_want : $this->price_is_pay_what_you_want;
        $this->discount_percentage = ($message->discount_percentage !== null) ? $message->discount_percentage : $this->discount_percentage;
    }


}
