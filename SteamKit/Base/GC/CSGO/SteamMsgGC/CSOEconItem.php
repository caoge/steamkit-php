<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/base_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGC;

/**
 * Protobuf message : SteamKit.Base.GC.CSGO.SteamMsgGC.CSOEconItem
 */
class CSOEconItem extends \Protobuf\AbstractMessage
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
     * id optional uint64 = 1
     *
     * @var int
     */
    protected $id = null;

    /**
     * account_id optional uint32 = 2
     *
     * @var int
     */
    protected $account_id = null;

    /**
     * inventory optional uint32 = 3
     *
     * @var int
     */
    protected $inventory = null;

    /**
     * def_index optional uint32 = 4
     *
     * @var int
     */
    protected $def_index = null;

    /**
     * quantity optional uint32 = 5
     *
     * @var int
     */
    protected $quantity = null;

    /**
     * level optional uint32 = 6
     *
     * @var int
     */
    protected $level = null;

    /**
     * quality optional uint32 = 7
     *
     * @var int
     */
    protected $quality = null;

    /**
     * flags optional uint32 = 8
     *
     * @var int
     */
    protected $flags = null;

    /**
     * origin optional uint32 = 9
     *
     * @var int
     */
    protected $origin = null;

    /**
     * custom_name optional string = 10
     *
     * @var string
     */
    protected $custom_name = null;

    /**
     * custom_desc optional string = 11
     *
     * @var string
     */
    protected $custom_desc = null;

    /**
     * attribute repeated message = 12
     *
     * @var \Protobuf\Collection<\SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemAttribute>
     */
    protected $attribute = null;

    /**
     * interior_item optional message = 13
     *
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItem
     */
    protected $interior_item = null;

    /**
     * in_use optional bool = 14
     *
     * @var bool
     */
    protected $in_use = null;

    /**
     * style optional uint32 = 15
     *
     * @var int
     */
    protected $style = null;

    /**
     * original_id optional uint64 = 16
     *
     * @var int
     */
    protected $original_id = null;

    /**
     * equipped_state repeated message = 18
     *
     * @var \Protobuf\Collection<\SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemEquipped>
     */
    protected $equipped_state = null;

    /**
     * rarity optional uint32 = 19
     *
     * @var int
     */
    protected $rarity = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->flags = '0';
        $this->in_use = false;
        $this->style = '0';
        $this->original_id = '0';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'id' has a value
     *
     * @return bool
     */
    public function hasId()
    {
        return $this->id !== null;
    }

    /**
     * Get 'id' value
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set 'id' value
     *
     * @param int $value
     */
    public function setId($value = null)
    {
        $this->id = $value;
    }

    /**
     * Check if 'account_id' has a value
     *
     * @return bool
     */
    public function hasAccountId()
    {
        return $this->account_id !== null;
    }

    /**
     * Get 'account_id' value
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Set 'account_id' value
     *
     * @param int $value
     */
    public function setAccountId($value = null)
    {
        $this->account_id = $value;
    }

    /**
     * Check if 'inventory' has a value
     *
     * @return bool
     */
    public function hasInventory()
    {
        return $this->inventory !== null;
    }

    /**
     * Get 'inventory' value
     *
     * @return int
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Set 'inventory' value
     *
     * @param int $value
     */
    public function setInventory($value = null)
    {
        $this->inventory = $value;
    }

    /**
     * Check if 'def_index' has a value
     *
     * @return bool
     */
    public function hasDefIndex()
    {
        return $this->def_index !== null;
    }

    /**
     * Get 'def_index' value
     *
     * @return int
     */
    public function getDefIndex()
    {
        return $this->def_index;
    }

    /**
     * Set 'def_index' value
     *
     * @param int $value
     */
    public function setDefIndex($value = null)
    {
        $this->def_index = $value;
    }

    /**
     * Check if 'quantity' has a value
     *
     * @return bool
     */
    public function hasQuantity()
    {
        return $this->quantity !== null;
    }

    /**
     * Get 'quantity' value
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set 'quantity' value
     *
     * @param int $value
     */
    public function setQuantity($value = null)
    {
        $this->quantity = $value;
    }

    /**
     * Check if 'level' has a value
     *
     * @return bool
     */
    public function hasLevel()
    {
        return $this->level !== null;
    }

    /**
     * Get 'level' value
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set 'level' value
     *
     * @param int $value
     */
    public function setLevel($value = null)
    {
        $this->level = $value;
    }

    /**
     * Check if 'quality' has a value
     *
     * @return bool
     */
    public function hasQuality()
    {
        return $this->quality !== null;
    }

    /**
     * Get 'quality' value
     *
     * @return int
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set 'quality' value
     *
     * @param int $value
     */
    public function setQuality($value = null)
    {
        $this->quality = $value;
    }

    /**
     * Check if 'flags' has a value
     *
     * @return bool
     */
    public function hasFlags()
    {
        return $this->flags !== null;
    }

    /**
     * Get 'flags' value
     *
     * @return int
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set 'flags' value
     *
     * @param int $value
     */
    public function setFlags($value = null)
    {
        $this->flags = $value;
    }

    /**
     * Check if 'origin' has a value
     *
     * @return bool
     */
    public function hasOrigin()
    {
        return $this->origin !== null;
    }

    /**
     * Get 'origin' value
     *
     * @return int
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set 'origin' value
     *
     * @param int $value
     */
    public function setOrigin($value = null)
    {
        $this->origin = $value;
    }

    /**
     * Check if 'custom_name' has a value
     *
     * @return bool
     */
    public function hasCustomName()
    {
        return $this->custom_name !== null;
    }

    /**
     * Get 'custom_name' value
     *
     * @return string
     */
    public function getCustomName()
    {
        return $this->custom_name;
    }

    /**
     * Set 'custom_name' value
     *
     * @param string $value
     */
    public function setCustomName($value = null)
    {
        $this->custom_name = $value;
    }

    /**
     * Check if 'custom_desc' has a value
     *
     * @return bool
     */
    public function hasCustomDesc()
    {
        return $this->custom_desc !== null;
    }

    /**
     * Get 'custom_desc' value
     *
     * @return string
     */
    public function getCustomDesc()
    {
        return $this->custom_desc;
    }

    /**
     * Set 'custom_desc' value
     *
     * @param string $value
     */
    public function setCustomDesc($value = null)
    {
        $this->custom_desc = $value;
    }

    /**
     * Check if 'attribute' has a value
     *
     * @return bool
     */
    public function hasAttributeList()
    {
        return $this->attribute !== null;
    }

    /**
     * Get 'attribute' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemAttribute>
     */
    public function getAttributeList()
    {
        return $this->attribute;
    }

    /**
     * Set 'attribute' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemAttribute> $value
     */
    public function setAttributeList(\Protobuf\Collection $value = null)
    {
        $this->attribute = $value;
    }

    /**
     * Add a new element to 'attribute'
     *
     * @param \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemAttribute $value
     */
    public function addAttribute(\SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemAttribute $value)
    {
        if ($this->attribute === null) {
            $this->attribute = new \Protobuf\MessageCollection();
        }

        $this->attribute->add($value);
    }

    /**
     * Check if 'interior_item' has a value
     *
     * @return bool
     */
    public function hasInteriorItem()
    {
        return $this->interior_item !== null;
    }

    /**
     * Get 'interior_item' value
     *
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItem
     */
    public function getInteriorItem()
    {
        return $this->interior_item;
    }

    /**
     * Set 'interior_item' value
     *
     * @param \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItem $value
     */
    public function setInteriorItem(\SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItem $value = null)
    {
        $this->interior_item = $value;
    }

    /**
     * Check if 'in_use' has a value
     *
     * @return bool
     */
    public function hasInUse()
    {
        return $this->in_use !== null;
    }

    /**
     * Get 'in_use' value
     *
     * @return bool
     */
    public function getInUse()
    {
        return $this->in_use;
    }

    /**
     * Set 'in_use' value
     *
     * @param bool $value
     */
    public function setInUse($value = null)
    {
        $this->in_use = $value;
    }

    /**
     * Check if 'style' has a value
     *
     * @return bool
     */
    public function hasStyle()
    {
        return $this->style !== null;
    }

    /**
     * Get 'style' value
     *
     * @return int
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set 'style' value
     *
     * @param int $value
     */
    public function setStyle($value = null)
    {
        $this->style = $value;
    }

    /**
     * Check if 'original_id' has a value
     *
     * @return bool
     */
    public function hasOriginalId()
    {
        return $this->original_id !== null;
    }

    /**
     * Get 'original_id' value
     *
     * @return int
     */
    public function getOriginalId()
    {
        return $this->original_id;
    }

    /**
     * Set 'original_id' value
     *
     * @param int $value
     */
    public function setOriginalId($value = null)
    {
        $this->original_id = $value;
    }

    /**
     * Check if 'equipped_state' has a value
     *
     * @return bool
     */
    public function hasEquippedStateList()
    {
        return $this->equipped_state !== null;
    }

    /**
     * Get 'equipped_state' value
     *
     * @return \Protobuf\Collection<\SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemEquipped>
     */
    public function getEquippedStateList()
    {
        return $this->equipped_state;
    }

    /**
     * Set 'equipped_state' value
     *
     * @param \Protobuf\Collection<\SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemEquipped> $value
     */
    public function setEquippedStateList(\Protobuf\Collection $value = null)
    {
        $this->equipped_state = $value;
    }

    /**
     * Add a new element to 'equipped_state'
     *
     * @param \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemEquipped $value
     */
    public function addEquippedState(\SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemEquipped $value)
    {
        if ($this->equipped_state === null) {
            $this->equipped_state = new \Protobuf\MessageCollection();
        }

        $this->equipped_state->add($value);
    }

    /**
     * Check if 'rarity' has a value
     *
     * @return bool
     */
    public function hasRarity()
    {
        return $this->rarity !== null;
    }

    /**
     * Get 'rarity' value
     *
     * @return int
     */
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * Set 'rarity' value
     *
     * @param int $value
     */
    public function setRarity($value = null)
    {
        $this->rarity = $value;
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
            'id' => null,
            'account_id' => null,
            'inventory' => null,
            'def_index' => null,
            'quantity' => null,
            'level' => null,
            'quality' => null,
            'flags' => '0',
            'origin' => null,
            'custom_name' => null,
            'custom_desc' => null,
            'attribute' => [],
            'interior_item' => null,
            'in_use' => false,
            'style' => '0',
            'original_id' => '0',
            'equipped_state' => [],
            'rarity' => null
        ], $values);

        $message->setId($values['id']);
        $message->setAccountId($values['account_id']);
        $message->setInventory($values['inventory']);
        $message->setDefIndex($values['def_index']);
        $message->setQuantity($values['quantity']);
        $message->setLevel($values['level']);
        $message->setQuality($values['quality']);
        $message->setFlags($values['flags']);
        $message->setOrigin($values['origin']);
        $message->setCustomName($values['custom_name']);
        $message->setCustomDesc($values['custom_desc']);
        $message->setInteriorItem($values['interior_item']);
        $message->setInUse($values['in_use']);
        $message->setStyle($values['style']);
        $message->setOriginalId($values['original_id']);
        $message->setRarity($values['rarity']);

        foreach ($values['attribute'] as $item) {
            $message->addAttribute($item);
        }

        foreach ($values['equipped_state'] as $item) {
            $message->addEquippedState($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CSOEconItem',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'account_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'inventory',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'def_index',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'quantity',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'level',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'quality',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'flags',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'origin',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'custom_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'custom_desc',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'attribute',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.GC.CSGO.SteamMsgGC.CSOEconItemAttribute'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'interior_item',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.SteamKit.Base.GC.CSGO.SteamMsgGC.CSOEconItem'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'in_use',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'style',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 16,
                    'name' => 'original_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '0'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 18,
                    'name' => 'equipped_state',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.SteamKit.Base.GC.CSGO.SteamMsgGC.CSOEconItemEquipped'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 19,
                    'name' => 'rarity',
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

        if ($this->id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->id);
        }

        if ($this->account_id !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->account_id);
        }

        if ($this->inventory !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->inventory);
        }

        if ($this->def_index !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->def_index);
        }

        if ($this->quantity !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->quantity);
        }

        if ($this->level !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->level);
        }

        if ($this->quality !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->quality);
        }

        if ($this->flags !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->flags);
        }

        if ($this->origin !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->origin);
        }

        if ($this->custom_name !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeString($stream, $this->custom_name);
        }

        if ($this->custom_desc !== null) {
            $writer->writeVarint($stream, 90);
            $writer->writeString($stream, $this->custom_desc);
        }

        if ($this->attribute !== null) {
            foreach ($this->attribute as $val) {
                $writer->writeVarint($stream, 98);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->interior_item !== null) {
            $writer->writeVarint($stream, 106);
            $writer->writeVarint($stream, $this->interior_item->serializedSize($sizeContext));
            $this->interior_item->writeTo($context);
        }

        if ($this->in_use !== null) {
            $writer->writeVarint($stream, 112);
            $writer->writeBool($stream, $this->in_use);
        }

        if ($this->style !== null) {
            $writer->writeVarint($stream, 120);
            $writer->writeVarint($stream, $this->style);
        }

        if ($this->original_id !== null) {
            $writer->writeVarint($stream, 128);
            $writer->writeVarint($stream, $this->original_id);
        }

        if ($this->equipped_state !== null) {
            foreach ($this->equipped_state as $val) {
                $writer->writeVarint($stream, 146);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->rarity !== null) {
            $writer->writeVarint($stream, 152);
            $writer->writeVarint($stream, $this->rarity);
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

                $this->id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->account_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->inventory = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->def_index = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->quantity = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->level = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->quality = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->flags = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->origin = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->custom_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->custom_desc = $reader->readString($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemAttribute();

                if ($this->attribute === null) {
                    $this->attribute = new \Protobuf\MessageCollection();
                }

                $this->attribute->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItem();

                $this->interior_item = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->in_use = $reader->readBool($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->style = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 16) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->original_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 18) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItemEquipped();

                if ($this->equipped_state === null) {
                    $this->equipped_state = new \Protobuf\MessageCollection();
                }

                $this->equipped_state->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 19) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->rarity = $reader->readVarint($stream);

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

        if ($this->id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->id);
        }

        if ($this->account_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->account_id);
        }

        if ($this->inventory !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->inventory);
        }

        if ($this->def_index !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->def_index);
        }

        if ($this->quantity !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->quantity);
        }

        if ($this->level !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->level);
        }

        if ($this->quality !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->quality);
        }

        if ($this->flags !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->flags);
        }

        if ($this->origin !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->origin);
        }

        if ($this->custom_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->custom_name);
        }

        if ($this->custom_desc !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->custom_desc);
        }

        if ($this->attribute !== null) {
            foreach ($this->attribute as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->interior_item !== null) {
            $innerSize = $this->interior_item->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->in_use !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->style !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->style);
        }

        if ($this->original_id !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->original_id);
        }

        if ($this->equipped_state !== null) {
            foreach ($this->equipped_state as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 2;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->rarity !== null) {
            $size += 2;
            $size += $calculator->computeVarintSize($this->rarity);
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
        $this->id = null;
        $this->account_id = null;
        $this->inventory = null;
        $this->def_index = null;
        $this->quantity = null;
        $this->level = null;
        $this->quality = null;
        $this->flags = '0';
        $this->origin = null;
        $this->custom_name = null;
        $this->custom_desc = null;
        $this->attribute = null;
        $this->interior_item = null;
        $this->in_use = false;
        $this->style = '0';
        $this->original_id = '0';
        $this->equipped_state = null;
        $this->rarity = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \SteamKit\Base\GC\CSGO\SteamMsgGC\CSOEconItem) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->account_id = ($message->account_id !== null) ? $message->account_id : $this->account_id;
        $this->inventory = ($message->inventory !== null) ? $message->inventory : $this->inventory;
        $this->def_index = ($message->def_index !== null) ? $message->def_index : $this->def_index;
        $this->quantity = ($message->quantity !== null) ? $message->quantity : $this->quantity;
        $this->level = ($message->level !== null) ? $message->level : $this->level;
        $this->quality = ($message->quality !== null) ? $message->quality : $this->quality;
        $this->flags = ($message->flags !== null) ? $message->flags : $this->flags;
        $this->origin = ($message->origin !== null) ? $message->origin : $this->origin;
        $this->custom_name = ($message->custom_name !== null) ? $message->custom_name : $this->custom_name;
        $this->custom_desc = ($message->custom_desc !== null) ? $message->custom_desc : $this->custom_desc;
        $this->attribute = ($message->attribute !== null) ? $message->attribute : $this->attribute;
        $this->interior_item = ($message->interior_item !== null) ? $message->interior_item : $this->interior_item;
        $this->in_use = ($message->in_use !== null) ? $message->in_use : $this->in_use;
        $this->style = ($message->style !== null) ? $message->style : $this->style;
        $this->original_id = ($message->original_id !== null) ? $message->original_id : $this->original_id;
        $this->equipped_state = ($message->equipped_state !== null) ? $message->equipped_state : $this->equipped_state;
        $this->rarity = ($message->rarity !== null) ? $message->rarity : $this->rarity;
    }


}

