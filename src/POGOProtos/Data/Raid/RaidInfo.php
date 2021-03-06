<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Raid/RaidInfo.proto
 */


namespace POGOProtos\Data\Raid;

/**
 * Protobuf message : POGOProtos.Data.Raid.RaidInfo
 */
class RaidInfo extends \Protobuf\AbstractMessage
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
     * raid_seed optional int64 = 1
     *
     * @var int
     */
    protected $raid_seed = null;

    /**
     * raid_spawn_ms optional int64 = 2
     *
     * @var int
     */
    protected $raid_spawn_ms = null;

    /**
     * raid_battle_ms optional int64 = 3
     *
     * @var int
     */
    protected $raid_battle_ms = null;

    /**
     * raid_end_ms optional int64 = 4
     *
     * @var int
     */
    protected $raid_end_ms = null;

    /**
     * raid_pokemon optional message = 5
     *
     * @var \POGOProtos\Data\PokemonData
     */
    protected $raid_pokemon = null;

    /**
     * raid_level optional enum = 6
     *
     * @var \POGOProtos\Enums\RaidLevel
     */
    protected $raid_level = null;

    /**
     * complete optional bool = 7
     *
     * @var bool
     */
    protected $complete = null;

    /**
     * is_exclusive optional bool = 8
     *
     * @var bool
     */
    protected $is_exclusive = null;

    /**
     * is_raid_hidden optional bool = 9
     *
     * @var bool
     */
    protected $is_raid_hidden = null;

    /**
     * Check if 'raid_seed' has a value
     *
     * @return bool
     */
    public function hasRaidSeed()
    {
        return $this->raid_seed !== null;
    }

    /**
     * Get 'raid_seed' value
     *
     * @return int
     */
    public function getRaidSeed()
    {
        return $this->raid_seed;
    }

    /**
     * Set 'raid_seed' value
     *
     * @param int $value
     */
    public function setRaidSeed($value = null)
    {
        $this->raid_seed = $value;
    }

    /**
     * Check if 'raid_spawn_ms' has a value
     *
     * @return bool
     */
    public function hasRaidSpawnMs()
    {
        return $this->raid_spawn_ms !== null;
    }

    /**
     * Get 'raid_spawn_ms' value
     *
     * @return int
     */
    public function getRaidSpawnMs()
    {
        return $this->raid_spawn_ms;
    }

    /**
     * Set 'raid_spawn_ms' value
     *
     * @param int $value
     */
    public function setRaidSpawnMs($value = null)
    {
        $this->raid_spawn_ms = $value;
    }

    /**
     * Check if 'raid_battle_ms' has a value
     *
     * @return bool
     */
    public function hasRaidBattleMs()
    {
        return $this->raid_battle_ms !== null;
    }

    /**
     * Get 'raid_battle_ms' value
     *
     * @return int
     */
    public function getRaidBattleMs()
    {
        return $this->raid_battle_ms;
    }

    /**
     * Set 'raid_battle_ms' value
     *
     * @param int $value
     */
    public function setRaidBattleMs($value = null)
    {
        $this->raid_battle_ms = $value;
    }

    /**
     * Check if 'raid_end_ms' has a value
     *
     * @return bool
     */
    public function hasRaidEndMs()
    {
        return $this->raid_end_ms !== null;
    }

    /**
     * Get 'raid_end_ms' value
     *
     * @return int
     */
    public function getRaidEndMs()
    {
        return $this->raid_end_ms;
    }

    /**
     * Set 'raid_end_ms' value
     *
     * @param int $value
     */
    public function setRaidEndMs($value = null)
    {
        $this->raid_end_ms = $value;
    }

    /**
     * Check if 'raid_pokemon' has a value
     *
     * @return bool
     */
    public function hasRaidPokemon()
    {
        return $this->raid_pokemon !== null;
    }

    /**
     * Get 'raid_pokemon' value
     *
     * @return \POGOProtos\Data\PokemonData
     */
    public function getRaidPokemon()
    {
        return $this->raid_pokemon;
    }

    /**
     * Set 'raid_pokemon' value
     *
     * @param \POGOProtos\Data\PokemonData $value
     */
    public function setRaidPokemon(\POGOProtos\Data\PokemonData $value = null)
    {
        $this->raid_pokemon = $value;
    }

    /**
     * Check if 'raid_level' has a value
     *
     * @return bool
     */
    public function hasRaidLevel()
    {
        return $this->raid_level !== null;
    }

    /**
     * Get 'raid_level' value
     *
     * @return \POGOProtos\Enums\RaidLevel
     */
    public function getRaidLevel()
    {
        return $this->raid_level;
    }

    /**
     * Set 'raid_level' value
     *
     * @param \POGOProtos\Enums\RaidLevel $value
     */
    public function setRaidLevel(\POGOProtos\Enums\RaidLevel $value = null)
    {
        $this->raid_level = $value;
    }

    /**
     * Check if 'complete' has a value
     *
     * @return bool
     */
    public function hasComplete()
    {
        return $this->complete !== null;
    }

    /**
     * Get 'complete' value
     *
     * @return bool
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Set 'complete' value
     *
     * @param bool $value
     */
    public function setComplete($value = null)
    {
        $this->complete = $value;
    }

    /**
     * Check if 'is_exclusive' has a value
     *
     * @return bool
     */
    public function hasIsExclusive()
    {
        return $this->is_exclusive !== null;
    }

    /**
     * Get 'is_exclusive' value
     *
     * @return bool
     */
    public function getIsExclusive()
    {
        return $this->is_exclusive;
    }

    /**
     * Set 'is_exclusive' value
     *
     * @param bool $value
     */
    public function setIsExclusive($value = null)
    {
        $this->is_exclusive = $value;
    }

    /**
     * Check if 'is_raid_hidden' has a value
     *
     * @return bool
     */
    public function hasIsRaidHidden()
    {
        return $this->is_raid_hidden !== null;
    }

    /**
     * Get 'is_raid_hidden' value
     *
     * @return bool
     */
    public function getIsRaidHidden()
    {
        return $this->is_raid_hidden;
    }

    /**
     * Set 'is_raid_hidden' value
     *
     * @param bool $value
     */
    public function setIsRaidHidden($value = null)
    {
        $this->is_raid_hidden = $value;
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
            'raid_seed' => null,
            'raid_spawn_ms' => null,
            'raid_battle_ms' => null,
            'raid_end_ms' => null,
            'raid_pokemon' => null,
            'raid_level' => null,
            'complete' => null,
            'is_exclusive' => null,
            'is_raid_hidden' => null
        ], $values);

        $message->setRaidSeed($values['raid_seed']);
        $message->setRaidSpawnMs($values['raid_spawn_ms']);
        $message->setRaidBattleMs($values['raid_battle_ms']);
        $message->setRaidEndMs($values['raid_end_ms']);
        $message->setRaidPokemon($values['raid_pokemon']);
        $message->setRaidLevel($values['raid_level']);
        $message->setComplete($values['complete']);
        $message->setIsExclusive($values['is_exclusive']);
        $message->setIsRaidHidden($values['is_raid_hidden']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'RaidInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'raid_seed',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'raid_spawn_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'raid_battle_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'raid_end_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'raid_pokemon',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.PokemonData'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'raid_level',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.RaidLevel'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'complete',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'is_exclusive',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'is_raid_hidden',
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

        if ($this->raid_seed !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->raid_seed);
        }

        if ($this->raid_spawn_ms !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->raid_spawn_ms);
        }

        if ($this->raid_battle_ms !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->raid_battle_ms);
        }

        if ($this->raid_end_ms !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->raid_end_ms);
        }

        if ($this->raid_pokemon !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->raid_pokemon->serializedSize($sizeContext));
            $this->raid_pokemon->writeTo($context);
        }

        if ($this->raid_level !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->raid_level->value());
        }

        if ($this->complete !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeBool($stream, $this->complete);
        }

        if ($this->is_exclusive !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeBool($stream, $this->is_exclusive);
        }

        if ($this->is_raid_hidden !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeBool($stream, $this->is_raid_hidden);
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
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->raid_seed = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->raid_spawn_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->raid_battle_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->raid_end_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\PokemonData();

                $this->raid_pokemon = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->raid_level = \POGOProtos\Enums\RaidLevel::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->complete = $reader->readBool($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_exclusive = $reader->readBool($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_raid_hidden = $reader->readBool($stream);

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

        if ($this->raid_seed !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->raid_seed);
        }

        if ($this->raid_spawn_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->raid_spawn_ms);
        }

        if ($this->raid_battle_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->raid_battle_ms);
        }

        if ($this->raid_end_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->raid_end_ms);
        }

        if ($this->raid_pokemon !== null) {
            $innerSize = $this->raid_pokemon->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->raid_level !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->raid_level->value());
        }

        if ($this->complete !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->is_exclusive !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->is_raid_hidden !== null) {
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
        $this->raid_seed = null;
        $this->raid_spawn_ms = null;
        $this->raid_battle_ms = null;
        $this->raid_end_ms = null;
        $this->raid_pokemon = null;
        $this->raid_level = null;
        $this->complete = null;
        $this->is_exclusive = null;
        $this->is_raid_hidden = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Raid\RaidInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->raid_seed = ($message->raid_seed !== null) ? $message->raid_seed : $this->raid_seed;
        $this->raid_spawn_ms = ($message->raid_spawn_ms !== null) ? $message->raid_spawn_ms : $this->raid_spawn_ms;
        $this->raid_battle_ms = ($message->raid_battle_ms !== null) ? $message->raid_battle_ms : $this->raid_battle_ms;
        $this->raid_end_ms = ($message->raid_end_ms !== null) ? $message->raid_end_ms : $this->raid_end_ms;
        $this->raid_pokemon = ($message->raid_pokemon !== null) ? $message->raid_pokemon : $this->raid_pokemon;
        $this->raid_level = ($message->raid_level !== null) ? $message->raid_level : $this->raid_level;
        $this->complete = ($message->complete !== null) ? $message->complete : $this->complete;
        $this->is_exclusive = ($message->is_exclusive !== null) ? $message->is_exclusive : $this->is_exclusive;
        $this->is_raid_hidden = ($message->is_raid_hidden !== null) ? $message->is_raid_hidden : $this->is_raid_hidden;
    }


}

