<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/PlayerBadge.proto
 */


namespace POGOProtos\Data;

/**
 * Protobuf message : POGOProtos.Data.PlayerBadge
 */
class PlayerBadge extends \Protobuf\AbstractMessage
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
     * badge_type optional enum = 1
     *
     * @var \POGOProtos\Enums\BadgeType
     */
    protected $badge_type = null;

    /**
     * rank optional int32 = 2
     *
     * @var int
     */
    protected $rank = null;

    /**
     * start_value optional int32 = 3
     *
     * @var int
     */
    protected $start_value = null;

    /**
     * end_value optional int32 = 4
     *
     * @var int
     */
    protected $end_value = null;

    /**
     * current_value optional double = 5
     *
     * @var float
     */
    protected $current_value = null;

    /**
     * Check if 'badge_type' has a value
     *
     * @return bool
     */
    public function hasBadgeType()
    {
        return $this->badge_type !== null;
    }

    /**
     * Get 'badge_type' value
     *
     * @return \POGOProtos\Enums\BadgeType
     */
    public function getBadgeType()
    {
        return $this->badge_type;
    }

    /**
     * Set 'badge_type' value
     *
     * @param \POGOProtos\Enums\BadgeType $value
     */
    public function setBadgeType(\POGOProtos\Enums\BadgeType $value = null)
    {
        $this->badge_type = $value;
    }

    /**
     * Check if 'rank' has a value
     *
     * @return bool
     */
    public function hasRank()
    {
        return $this->rank !== null;
    }

    /**
     * Get 'rank' value
     *
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set 'rank' value
     *
     * @param int $value
     */
    public function setRank($value = null)
    {
        $this->rank = $value;
    }

    /**
     * Check if 'start_value' has a value
     *
     * @return bool
     */
    public function hasStartValue()
    {
        return $this->start_value !== null;
    }

    /**
     * Get 'start_value' value
     *
     * @return int
     */
    public function getStartValue()
    {
        return $this->start_value;
    }

    /**
     * Set 'start_value' value
     *
     * @param int $value
     */
    public function setStartValue($value = null)
    {
        $this->start_value = $value;
    }

    /**
     * Check if 'end_value' has a value
     *
     * @return bool
     */
    public function hasEndValue()
    {
        return $this->end_value !== null;
    }

    /**
     * Get 'end_value' value
     *
     * @return int
     */
    public function getEndValue()
    {
        return $this->end_value;
    }

    /**
     * Set 'end_value' value
     *
     * @param int $value
     */
    public function setEndValue($value = null)
    {
        $this->end_value = $value;
    }

    /**
     * Check if 'current_value' has a value
     *
     * @return bool
     */
    public function hasCurrentValue()
    {
        return $this->current_value !== null;
    }

    /**
     * Get 'current_value' value
     *
     * @return float
     */
    public function getCurrentValue()
    {
        return $this->current_value;
    }

    /**
     * Set 'current_value' value
     *
     * @param float $value
     */
    public function setCurrentValue($value = null)
    {
        $this->current_value = $value;
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
            'badge_type' => null,
            'rank' => null,
            'start_value' => null,
            'end_value' => null,
            'current_value' => null
        ], $values);

        $message->setBadgeType($values['badge_type']);
        $message->setRank($values['rank']);
        $message->setStartValue($values['start_value']);
        $message->setEndValue($values['end_value']);
        $message->setCurrentValue($values['current_value']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PlayerBadge',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'badge_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.BadgeType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'rank',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'start_value',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'end_value',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'current_value',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
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

        if ($this->badge_type !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->badge_type->value());
        }

        if ($this->rank !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->rank);
        }

        if ($this->start_value !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->start_value);
        }

        if ($this->end_value !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->end_value);
        }

        if ($this->current_value !== null) {
            $writer->writeVarint($stream, 41);
            $writer->writeDouble($stream, $this->current_value);
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

                $this->badge_type = \POGOProtos\Enums\BadgeType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->rank = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->start_value = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->end_value = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->current_value = $reader->readDouble($stream);

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

        if ($this->badge_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->badge_type->value());
        }

        if ($this->rank !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->rank);
        }

        if ($this->start_value !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->start_value);
        }

        if ($this->end_value !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->end_value);
        }

        if ($this->current_value !== null) {
            $size += 1;
            $size += 8;
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
        $this->badge_type = null;
        $this->rank = null;
        $this->start_value = null;
        $this->end_value = null;
        $this->current_value = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\PlayerBadge) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->badge_type = ($message->badge_type !== null) ? $message->badge_type : $this->badge_type;
        $this->rank = ($message->rank !== null) ? $message->rank : $this->rank;
        $this->start_value = ($message->start_value !== null) ? $message->start_value : $this->start_value;
        $this->end_value = ($message->end_value !== null) ? $message->end_value : $this->end_value;
        $this->current_value = ($message->current_value !== null) ? $message->current_value : $this->current_value;
    }


}

