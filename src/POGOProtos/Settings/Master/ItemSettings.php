<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Settings/Master/ItemSettings.proto
 */


namespace POGOProtos\Settings\Master;

/**
 * Protobuf message : POGOProtos.Settings.Master.ItemSettings
 */
class ItemSettings extends \Protobuf\AbstractMessage
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
     * item_id optional enum = 1
     *
     * @var \POGOProtos\Inventory\Item\ItemId
     */
    protected $item_id = null;

    /**
     * item_type optional enum = 2
     *
     * @var \POGOProtos\Inventory\Item\ItemType
     */
    protected $item_type = null;

    /**
     * category optional enum = 3
     *
     * @var \POGOProtos\Enums\ItemCategory
     */
    protected $category = null;

    /**
     * drop_freq optional float = 4
     *
     * @var float
     */
    protected $drop_freq = null;

    /**
     * drop_trainer_level optional int32 = 5
     *
     * @var int
     */
    protected $drop_trainer_level = null;

    /**
     * pokeball optional message = 6
     *
     * @var \POGOProtos\Settings\Master\Item\PokeballAttributes
     */
    protected $pokeball = null;

    /**
     * potion optional message = 7
     *
     * @var \POGOProtos\Settings\Master\Item\PotionAttributes
     */
    protected $potion = null;

    /**
     * revive optional message = 8
     *
     * @var \POGOProtos\Settings\Master\Item\ReviveAttributes
     */
    protected $revive = null;

    /**
     * battle optional message = 9
     *
     * @var \POGOProtos\Settings\Master\Item\BattleAttributes
     */
    protected $battle = null;

    /**
     * food optional message = 10
     *
     * @var \POGOProtos\Settings\Master\Item\FoodAttributes
     */
    protected $food = null;

    /**
     * inventory_upgrade optional message = 11
     *
     * @var \POGOProtos\Settings\Master\Item\InventoryUpgradeAttributes
     */
    protected $inventory_upgrade = null;

    /**
     * xp_boost optional message = 12
     *
     * @var \POGOProtos\Settings\Master\Item\ExperienceBoostAttributes
     */
    protected $xp_boost = null;

    /**
     * incense optional message = 13
     *
     * @var \POGOProtos\Settings\Master\Item\IncenseAttributes
     */
    protected $incense = null;

    /**
     * egg_incubator optional message = 14
     *
     * @var \POGOProtos\Settings\Master\Item\EggIncubatorAttributes
     */
    protected $egg_incubator = null;

    /**
     * fort_modifier optional message = 15
     *
     * @var \POGOProtos\Settings\Master\Item\FortModifierAttributes
     */
    protected $fort_modifier = null;

    /**
     * Check if 'item_id' has a value
     *
     * @return bool
     */
    public function hasItemId()
    {
        return $this->item_id !== null;
    }

    /**
     * Get 'item_id' value
     *
     * @return \POGOProtos\Inventory\Item\ItemId
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Set 'item_id' value
     *
     * @param \POGOProtos\Inventory\Item\ItemId $value
     */
    public function setItemId(\POGOProtos\Inventory\Item\ItemId $value = null)
    {
        $this->item_id = $value;
    }

    /**
     * Check if 'item_type' has a value
     *
     * @return bool
     */
    public function hasItemType()
    {
        return $this->item_type !== null;
    }

    /**
     * Get 'item_type' value
     *
     * @return \POGOProtos\Inventory\Item\ItemType
     */
    public function getItemType()
    {
        return $this->item_type;
    }

    /**
     * Set 'item_type' value
     *
     * @param \POGOProtos\Inventory\Item\ItemType $value
     */
    public function setItemType(\POGOProtos\Inventory\Item\ItemType $value = null)
    {
        $this->item_type = $value;
    }

    /**
     * Check if 'category' has a value
     *
     * @return bool
     */
    public function hasCategory()
    {
        return $this->category !== null;
    }

    /**
     * Get 'category' value
     *
     * @return \POGOProtos\Enums\ItemCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set 'category' value
     *
     * @param \POGOProtos\Enums\ItemCategory $value
     */
    public function setCategory(\POGOProtos\Enums\ItemCategory $value = null)
    {
        $this->category = $value;
    }

    /**
     * Check if 'drop_freq' has a value
     *
     * @return bool
     */
    public function hasDropFreq()
    {
        return $this->drop_freq !== null;
    }

    /**
     * Get 'drop_freq' value
     *
     * @return float
     */
    public function getDropFreq()
    {
        return $this->drop_freq;
    }

    /**
     * Set 'drop_freq' value
     *
     * @param float $value
     */
    public function setDropFreq($value = null)
    {
        $this->drop_freq = $value;
    }

    /**
     * Check if 'drop_trainer_level' has a value
     *
     * @return bool
     */
    public function hasDropTrainerLevel()
    {
        return $this->drop_trainer_level !== null;
    }

    /**
     * Get 'drop_trainer_level' value
     *
     * @return int
     */
    public function getDropTrainerLevel()
    {
        return $this->drop_trainer_level;
    }

    /**
     * Set 'drop_trainer_level' value
     *
     * @param int $value
     */
    public function setDropTrainerLevel($value = null)
    {
        $this->drop_trainer_level = $value;
    }

    /**
     * Check if 'pokeball' has a value
     *
     * @return bool
     */
    public function hasPokeball()
    {
        return $this->pokeball !== null;
    }

    /**
     * Get 'pokeball' value
     *
     * @return \POGOProtos\Settings\Master\Item\PokeballAttributes
     */
    public function getPokeball()
    {
        return $this->pokeball;
    }

    /**
     * Set 'pokeball' value
     *
     * @param \POGOProtos\Settings\Master\Item\PokeballAttributes $value
     */
    public function setPokeball(\POGOProtos\Settings\Master\Item\PokeballAttributes $value = null)
    {
        $this->pokeball = $value;
    }

    /**
     * Check if 'potion' has a value
     *
     * @return bool
     */
    public function hasPotion()
    {
        return $this->potion !== null;
    }

    /**
     * Get 'potion' value
     *
     * @return \POGOProtos\Settings\Master\Item\PotionAttributes
     */
    public function getPotion()
    {
        return $this->potion;
    }

    /**
     * Set 'potion' value
     *
     * @param \POGOProtos\Settings\Master\Item\PotionAttributes $value
     */
    public function setPotion(\POGOProtos\Settings\Master\Item\PotionAttributes $value = null)
    {
        $this->potion = $value;
    }

    /**
     * Check if 'revive' has a value
     *
     * @return bool
     */
    public function hasRevive()
    {
        return $this->revive !== null;
    }

    /**
     * Get 'revive' value
     *
     * @return \POGOProtos\Settings\Master\Item\ReviveAttributes
     */
    public function getRevive()
    {
        return $this->revive;
    }

    /**
     * Set 'revive' value
     *
     * @param \POGOProtos\Settings\Master\Item\ReviveAttributes $value
     */
    public function setRevive(\POGOProtos\Settings\Master\Item\ReviveAttributes $value = null)
    {
        $this->revive = $value;
    }

    /**
     * Check if 'battle' has a value
     *
     * @return bool
     */
    public function hasBattle()
    {
        return $this->battle !== null;
    }

    /**
     * Get 'battle' value
     *
     * @return \POGOProtos\Settings\Master\Item\BattleAttributes
     */
    public function getBattle()
    {
        return $this->battle;
    }

    /**
     * Set 'battle' value
     *
     * @param \POGOProtos\Settings\Master\Item\BattleAttributes $value
     */
    public function setBattle(\POGOProtos\Settings\Master\Item\BattleAttributes $value = null)
    {
        $this->battle = $value;
    }

    /**
     * Check if 'food' has a value
     *
     * @return bool
     */
    public function hasFood()
    {
        return $this->food !== null;
    }

    /**
     * Get 'food' value
     *
     * @return \POGOProtos\Settings\Master\Item\FoodAttributes
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * Set 'food' value
     *
     * @param \POGOProtos\Settings\Master\Item\FoodAttributes $value
     */
    public function setFood(\POGOProtos\Settings\Master\Item\FoodAttributes $value = null)
    {
        $this->food = $value;
    }

    /**
     * Check if 'inventory_upgrade' has a value
     *
     * @return bool
     */
    public function hasInventoryUpgrade()
    {
        return $this->inventory_upgrade !== null;
    }

    /**
     * Get 'inventory_upgrade' value
     *
     * @return \POGOProtos\Settings\Master\Item\InventoryUpgradeAttributes
     */
    public function getInventoryUpgrade()
    {
        return $this->inventory_upgrade;
    }

    /**
     * Set 'inventory_upgrade' value
     *
     * @param \POGOProtos\Settings\Master\Item\InventoryUpgradeAttributes $value
     */
    public function setInventoryUpgrade(\POGOProtos\Settings\Master\Item\InventoryUpgradeAttributes $value = null)
    {
        $this->inventory_upgrade = $value;
    }

    /**
     * Check if 'xp_boost' has a value
     *
     * @return bool
     */
    public function hasXpBoost()
    {
        return $this->xp_boost !== null;
    }

    /**
     * Get 'xp_boost' value
     *
     * @return \POGOProtos\Settings\Master\Item\ExperienceBoostAttributes
     */
    public function getXpBoost()
    {
        return $this->xp_boost;
    }

    /**
     * Set 'xp_boost' value
     *
     * @param \POGOProtos\Settings\Master\Item\ExperienceBoostAttributes $value
     */
    public function setXpBoost(\POGOProtos\Settings\Master\Item\ExperienceBoostAttributes $value = null)
    {
        $this->xp_boost = $value;
    }

    /**
     * Check if 'incense' has a value
     *
     * @return bool
     */
    public function hasIncense()
    {
        return $this->incense !== null;
    }

    /**
     * Get 'incense' value
     *
     * @return \POGOProtos\Settings\Master\Item\IncenseAttributes
     */
    public function getIncense()
    {
        return $this->incense;
    }

    /**
     * Set 'incense' value
     *
     * @param \POGOProtos\Settings\Master\Item\IncenseAttributes $value
     */
    public function setIncense(\POGOProtos\Settings\Master\Item\IncenseAttributes $value = null)
    {
        $this->incense = $value;
    }

    /**
     * Check if 'egg_incubator' has a value
     *
     * @return bool
     */
    public function hasEggIncubator()
    {
        return $this->egg_incubator !== null;
    }

    /**
     * Get 'egg_incubator' value
     *
     * @return \POGOProtos\Settings\Master\Item\EggIncubatorAttributes
     */
    public function getEggIncubator()
    {
        return $this->egg_incubator;
    }

    /**
     * Set 'egg_incubator' value
     *
     * @param \POGOProtos\Settings\Master\Item\EggIncubatorAttributes $value
     */
    public function setEggIncubator(\POGOProtos\Settings\Master\Item\EggIncubatorAttributes $value = null)
    {
        $this->egg_incubator = $value;
    }

    /**
     * Check if 'fort_modifier' has a value
     *
     * @return bool
     */
    public function hasFortModifier()
    {
        return $this->fort_modifier !== null;
    }

    /**
     * Get 'fort_modifier' value
     *
     * @return \POGOProtos\Settings\Master\Item\FortModifierAttributes
     */
    public function getFortModifier()
    {
        return $this->fort_modifier;
    }

    /**
     * Set 'fort_modifier' value
     *
     * @param \POGOProtos\Settings\Master\Item\FortModifierAttributes $value
     */
    public function setFortModifier(\POGOProtos\Settings\Master\Item\FortModifierAttributes $value = null)
    {
        $this->fort_modifier = $value;
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
            'item_id' => null,
            'item_type' => null,
            'category' => null,
            'drop_freq' => null,
            'drop_trainer_level' => null,
            'pokeball' => null,
            'potion' => null,
            'revive' => null,
            'battle' => null,
            'food' => null,
            'inventory_upgrade' => null,
            'xp_boost' => null,
            'incense' => null,
            'egg_incubator' => null,
            'fort_modifier' => null
        ], $values);

        $message->setItemId($values['item_id']);
        $message->setItemType($values['item_type']);
        $message->setCategory($values['category']);
        $message->setDropFreq($values['drop_freq']);
        $message->setDropTrainerLevel($values['drop_trainer_level']);
        $message->setPokeball($values['pokeball']);
        $message->setPotion($values['potion']);
        $message->setRevive($values['revive']);
        $message->setBattle($values['battle']);
        $message->setFood($values['food']);
        $message->setInventoryUpgrade($values['inventory_upgrade']);
        $message->setXpBoost($values['xp_boost']);
        $message->setIncense($values['incense']);
        $message->setEggIncubator($values['egg_incubator']);
        $message->setFortModifier($values['fort_modifier']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ItemSettings',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'item_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Inventory.Item.ItemId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'item_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Inventory.Item.ItemType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'category',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.ItemCategory'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'drop_freq',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'drop_trainer_level',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'pokeball',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Settings.Master.Item.PokeballAttributes'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'potion',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Settings.Master.Item.PotionAttributes'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'revive',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Settings.Master.Item.ReviveAttributes'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'battle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Settings.Master.Item.BattleAttributes'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'food',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Settings.Master.Item.FoodAttributes'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'inventory_upgrade',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Settings.Master.Item.InventoryUpgradeAttributes'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'xp_boost',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Settings.Master.Item.ExperienceBoostAttributes'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'incense',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Settings.Master.Item.IncenseAttributes'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'egg_incubator',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Settings.Master.Item.EggIncubatorAttributes'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'fort_modifier',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Settings.Master.Item.FortModifierAttributes'
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

        if ($this->item_id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->item_id->value());
        }

        if ($this->item_type !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->item_type->value());
        }

        if ($this->category !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->category->value());
        }

        if ($this->drop_freq !== null) {
            $writer->writeVarint($stream, 37);
            $writer->writeFloat($stream, $this->drop_freq);
        }

        if ($this->drop_trainer_level !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->drop_trainer_level);
        }

        if ($this->pokeball !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeVarint($stream, $this->pokeball->serializedSize($sizeContext));
            $this->pokeball->writeTo($context);
        }

        if ($this->potion !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeVarint($stream, $this->potion->serializedSize($sizeContext));
            $this->potion->writeTo($context);
        }

        if ($this->revive !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeVarint($stream, $this->revive->serializedSize($sizeContext));
            $this->revive->writeTo($context);
        }

        if ($this->battle !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeVarint($stream, $this->battle->serializedSize($sizeContext));
            $this->battle->writeTo($context);
        }

        if ($this->food !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeVarint($stream, $this->food->serializedSize($sizeContext));
            $this->food->writeTo($context);
        }

        if ($this->inventory_upgrade !== null) {
            $writer->writeVarint($stream, 90);
            $writer->writeVarint($stream, $this->inventory_upgrade->serializedSize($sizeContext));
            $this->inventory_upgrade->writeTo($context);
        }

        if ($this->xp_boost !== null) {
            $writer->writeVarint($stream, 98);
            $writer->writeVarint($stream, $this->xp_boost->serializedSize($sizeContext));
            $this->xp_boost->writeTo($context);
        }

        if ($this->incense !== null) {
            $writer->writeVarint($stream, 106);
            $writer->writeVarint($stream, $this->incense->serializedSize($sizeContext));
            $this->incense->writeTo($context);
        }

        if ($this->egg_incubator !== null) {
            $writer->writeVarint($stream, 114);
            $writer->writeVarint($stream, $this->egg_incubator->serializedSize($sizeContext));
            $this->egg_incubator->writeTo($context);
        }

        if ($this->fort_modifier !== null) {
            $writer->writeVarint($stream, 122);
            $writer->writeVarint($stream, $this->fort_modifier->serializedSize($sizeContext));
            $this->fort_modifier->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->item_id = \POGOProtos\Inventory\Item\ItemId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->item_type = \POGOProtos\Inventory\Item\ItemType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->category = \POGOProtos\Enums\ItemCategory::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->drop_freq = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->drop_trainer_level = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Settings\Master\Item\PokeballAttributes();

                $this->pokeball = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Settings\Master\Item\PotionAttributes();

                $this->potion = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Settings\Master\Item\ReviveAttributes();

                $this->revive = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Settings\Master\Item\BattleAttributes();

                $this->battle = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Settings\Master\Item\FoodAttributes();

                $this->food = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Settings\Master\Item\InventoryUpgradeAttributes();

                $this->inventory_upgrade = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Settings\Master\Item\ExperienceBoostAttributes();

                $this->xp_boost = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Settings\Master\Item\IncenseAttributes();

                $this->incense = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Settings\Master\Item\EggIncubatorAttributes();

                $this->egg_incubator = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Settings\Master\Item\FortModifierAttributes();

                $this->fort_modifier = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->item_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->item_id->value());
        }

        if ($this->item_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->item_type->value());
        }

        if ($this->category !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->category->value());
        }

        if ($this->drop_freq !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->drop_trainer_level !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->drop_trainer_level);
        }

        if ($this->pokeball !== null) {
            $innerSize = $this->pokeball->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->potion !== null) {
            $innerSize = $this->potion->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->revive !== null) {
            $innerSize = $this->revive->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->battle !== null) {
            $innerSize = $this->battle->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->food !== null) {
            $innerSize = $this->food->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->inventory_upgrade !== null) {
            $innerSize = $this->inventory_upgrade->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->xp_boost !== null) {
            $innerSize = $this->xp_boost->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->incense !== null) {
            $innerSize = $this->incense->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->egg_incubator !== null) {
            $innerSize = $this->egg_incubator->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->fort_modifier !== null) {
            $innerSize = $this->fort_modifier->serializedSize($context);

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
        $this->item_id = null;
        $this->item_type = null;
        $this->category = null;
        $this->drop_freq = null;
        $this->drop_trainer_level = null;
        $this->pokeball = null;
        $this->potion = null;
        $this->revive = null;
        $this->battle = null;
        $this->food = null;
        $this->inventory_upgrade = null;
        $this->xp_boost = null;
        $this->incense = null;
        $this->egg_incubator = null;
        $this->fort_modifier = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Settings\Master\ItemSettings) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->item_id = ($message->item_id !== null) ? $message->item_id : $this->item_id;
        $this->item_type = ($message->item_type !== null) ? $message->item_type : $this->item_type;
        $this->category = ($message->category !== null) ? $message->category : $this->category;
        $this->drop_freq = ($message->drop_freq !== null) ? $message->drop_freq : $this->drop_freq;
        $this->drop_trainer_level = ($message->drop_trainer_level !== null) ? $message->drop_trainer_level : $this->drop_trainer_level;
        $this->pokeball = ($message->pokeball !== null) ? $message->pokeball : $this->pokeball;
        $this->potion = ($message->potion !== null) ? $message->potion : $this->potion;
        $this->revive = ($message->revive !== null) ? $message->revive : $this->revive;
        $this->battle = ($message->battle !== null) ? $message->battle : $this->battle;
        $this->food = ($message->food !== null) ? $message->food : $this->food;
        $this->inventory_upgrade = ($message->inventory_upgrade !== null) ? $message->inventory_upgrade : $this->inventory_upgrade;
        $this->xp_boost = ($message->xp_boost !== null) ? $message->xp_boost : $this->xp_boost;
        $this->incense = ($message->incense !== null) ? $message->incense : $this->incense;
        $this->egg_incubator = ($message->egg_incubator !== null) ? $message->egg_incubator : $this->egg_incubator;
        $this->fort_modifier = ($message->fort_modifier !== null) ? $message->fort_modifier : $this->fort_modifier;
    }


}

