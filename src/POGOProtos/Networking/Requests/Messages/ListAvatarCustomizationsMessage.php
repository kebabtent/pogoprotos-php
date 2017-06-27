<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Requests/Messages/ListAvatarCustomizationsMessage.proto
 */


namespace POGOProtos\Networking\Requests\Messages;

/**
 * Protobuf message :
 * POGOProtos.Networking.Requests.Messages.ListAvatarCustomizationsMessage
 */
class ListAvatarCustomizationsMessage extends \Protobuf\AbstractMessage
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
     * avatar_type optional enum = 1
     *
     * @var \POGOProtos\Data\Player\PlayerAvatarType
     */
    protected $avatar_type = null;

    /**
     * slot repeated enum = 2
     *
     * @var \Protobuf\Collection<\POGOProtos\Enums\Slot>
     */
    protected $slot = null;

    /**
     * filters repeated enum = 3
     *
     * @var \Protobuf\Collection<\POGOProtos\Enums\Filter>
     */
    protected $filters = null;

    /**
     * start optional int32 = 4
     *
     * @var int
     */
    protected $start = null;

    /**
     * limit optional int32 = 5
     *
     * @var int
     */
    protected $limit = null;

    /**
     * Check if 'avatar_type' has a value
     *
     * @return bool
     */
    public function hasAvatarType()
    {
        return $this->avatar_type !== null;
    }

    /**
     * Get 'avatar_type' value
     *
     * @return \POGOProtos\Data\Player\PlayerAvatarType
     */
    public function getAvatarType()
    {
        return $this->avatar_type;
    }

    /**
     * Set 'avatar_type' value
     *
     * @param \POGOProtos\Data\Player\PlayerAvatarType $value
     */
    public function setAvatarType(\POGOProtos\Data\Player\PlayerAvatarType $value = null)
    {
        $this->avatar_type = $value;
    }

    /**
     * Check if 'slot' has a value
     *
     * @return bool
     */
    public function hasSlotList()
    {
        return $this->slot !== null;
    }

    /**
     * Get 'slot' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Enums\Slot>
     */
    public function getSlotList()
    {
        return $this->slot;
    }

    /**
     * Set 'slot' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Enums\Slot> $value
     */
    public function setSlotList(\Protobuf\Collection $value = null)
    {
        $this->slot = $value;
    }

    /**
     * Add a new element to 'slot'
     *
     * @param \POGOProtos\Enums\Slot $value
     */
    public function addSlot(\POGOProtos\Enums\Slot $value)
    {
        if ($this->slot === null) {
            $this->slot = new \Protobuf\EnumCollection();
        }

        $this->slot->add($value);
    }

    /**
     * Check if 'filters' has a value
     *
     * @return bool
     */
    public function hasFiltersList()
    {
        return $this->filters !== null;
    }

    /**
     * Get 'filters' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Enums\Filter>
     */
    public function getFiltersList()
    {
        return $this->filters;
    }

    /**
     * Set 'filters' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Enums\Filter> $value
     */
    public function setFiltersList(\Protobuf\Collection $value = null)
    {
        $this->filters = $value;
    }

    /**
     * Add a new element to 'filters'
     *
     * @param \POGOProtos\Enums\Filter $value
     */
    public function addFilters(\POGOProtos\Enums\Filter $value)
    {
        if ($this->filters === null) {
            $this->filters = new \Protobuf\EnumCollection();
        }

        $this->filters->add($value);
    }

    /**
     * Check if 'start' has a value
     *
     * @return bool
     */
    public function hasStart()
    {
        return $this->start !== null;
    }

    /**
     * Get 'start' value
     *
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set 'start' value
     *
     * @param int $value
     */
    public function setStart($value = null)
    {
        $this->start = $value;
    }

    /**
     * Check if 'limit' has a value
     *
     * @return bool
     */
    public function hasLimit()
    {
        return $this->limit !== null;
    }

    /**
     * Get 'limit' value
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Set 'limit' value
     *
     * @param int $value
     */
    public function setLimit($value = null)
    {
        $this->limit = $value;
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
            'avatar_type' => null,
            'slot' => [],
            'filters' => [],
            'start' => null,
            'limit' => null
        ], $values);

        $message->setAvatarType($values['avatar_type']);
        $message->setStart($values['start']);
        $message->setLimit($values['limit']);

        foreach ($values['slot'] as $item) {
            $message->addSlot($item);
        }

        foreach ($values['filters'] as $item) {
            $message->addFilters($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ListAvatarCustomizationsMessage',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'avatar_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Player.PlayerAvatarType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'slot',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Enums.Slot'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'filters',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Enums.Filter'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'start',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'limit',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
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

        if ($this->avatar_type !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->avatar_type->value());
        }

        if ($this->slot !== null) {
            foreach ($this->slot as $val) {
                $writer->writeVarint($stream, 16);
                $writer->writeVarint($stream, $val->value());
            }
        }

        if ($this->filters !== null) {
            foreach ($this->filters as $val) {
                $writer->writeVarint($stream, 24);
                $writer->writeVarint($stream, $val->value());
            }
        }

        if ($this->start !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->start);
        }

        if ($this->limit !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->limit);
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

                $this->avatar_type = \POGOProtos\Data\Player\PlayerAvatarType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->slot === null) {
                    $this->slot = new \Protobuf\EnumCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->slot->add(\POGOProtos\Enums\Slot::valueOf($reader->readVarint($stream)));
                }

                continue;
            }

            if ($tag === 3) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->filters === null) {
                    $this->filters = new \Protobuf\EnumCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->filters->add(\POGOProtos\Enums\Filter::valueOf($reader->readVarint($stream)));
                }

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->start = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->limit = $reader->readVarint($stream);

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

        if ($this->avatar_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->avatar_type->value());
        }

        if ($this->slot !== null) {
            foreach ($this->slot as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val->value());
            }
        }

        if ($this->filters !== null) {
            foreach ($this->filters as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val->value());
            }
        }

        if ($this->start !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->start);
        }

        if ($this->limit !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->limit);
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
        $this->avatar_type = null;
        $this->slot = null;
        $this->filters = null;
        $this->start = null;
        $this->limit = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Requests\Messages\ListAvatarCustomizationsMessage) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->avatar_type = ($message->avatar_type !== null) ? $message->avatar_type : $this->avatar_type;
        $this->slot = ($message->slot !== null) ? $message->slot : $this->slot;
        $this->filters = ($message->filters !== null) ? $message->filters : $this->filters;
        $this->start = ($message->start !== null) ? $message->start : $this->start;
        $this->limit = ($message->limit !== null) ? $message->limit : $this->limit;
    }


}
