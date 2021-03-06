<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Redeem/RedeemedItem.proto
 */


namespace POGOProtos\Data\Redeem;

/**
 * Protobuf message : POGOProtos.Data.Redeem.RedeemedItem
 */
class RedeemedItem extends \Protobuf\AbstractMessage
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
     * item optional enum = 1
     *
     * @var \POGOProtos\Inventory\Item\ItemId
     */
    protected $item = null;

    /**
     * item_count optional int32 = 2
     *
     * @var int
     */
    protected $item_count = null;

    /**
     * Check if 'item' has a value
     *
     * @return bool
     */
    public function hasItem()
    {
        return $this->item !== null;
    }

    /**
     * Get 'item' value
     *
     * @return \POGOProtos\Inventory\Item\ItemId
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set 'item' value
     *
     * @param \POGOProtos\Inventory\Item\ItemId $value
     */
    public function setItem(\POGOProtos\Inventory\Item\ItemId $value = null)
    {
        $this->item = $value;
    }

    /**
     * Check if 'item_count' has a value
     *
     * @return bool
     */
    public function hasItemCount()
    {
        return $this->item_count !== null;
    }

    /**
     * Get 'item_count' value
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->item_count;
    }

    /**
     * Set 'item_count' value
     *
     * @param int $value
     */
    public function setItemCount($value = null)
    {
        $this->item_count = $value;
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
            'item' => null,
            'item_count' => null
        ], $values);

        $message->setItem($values['item']);
        $message->setItemCount($values['item_count']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'RedeemedItem',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'item',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Inventory.Item.ItemId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'item_count',
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

        if ($this->item !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->item->value());
        }

        if ($this->item_count !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->item_count);
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

                $this->item = \POGOProtos\Inventory\Item\ItemId::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->item_count = $reader->readVarint($stream);

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

        if ($this->item !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->item->value());
        }

        if ($this->item_count !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->item_count);
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
        $this->item = null;
        $this->item_count = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Redeem\RedeemedItem) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->item = ($message->item !== null) ? $message->item : $this->item;
        $this->item_count = ($message->item_count !== null) ? $message->item_count : $this->item_count;
    }


}

