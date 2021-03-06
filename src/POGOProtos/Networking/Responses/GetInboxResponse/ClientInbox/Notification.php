<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/GetInboxResponse.proto
 */


namespace POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox;

/**
 * Protobuf message :
 * POGOProtos.Networking.Responses.GetInboxResponse.ClientInbox.Notification
 */
class Notification extends \Protobuf\AbstractMessage
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
     * notification_id optional string = 1
     *
     * @var string
     */
    protected $notification_id = null;

    /**
     * title_key optional string = 2
     *
     * @var string
     */
    protected $title_key = null;

    /**
     * category optional string = 3
     *
     * @var string
     */
    protected $category = null;

    /**
     * create_timestamp_ms optional int64 = 4
     *
     * @var int
     */
    protected $create_timestamp_ms = null;

    /**
     * variables repeated message = 5
     *
     * @var \Protobuf\Collection<\POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\TemplateVariable>
     */
    protected $variables = null;

    /**
     * labels repeated enum = 6
     *
     * @var \Protobuf\Collection<\POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\Notification\Label>
     */
    protected $labels = null;

    /**
     * Check if 'notification_id' has a value
     *
     * @return bool
     */
    public function hasNotificationId()
    {
        return $this->notification_id !== null;
    }

    /**
     * Get 'notification_id' value
     *
     * @return string
     */
    public function getNotificationId()
    {
        return $this->notification_id;
    }

    /**
     * Set 'notification_id' value
     *
     * @param string $value
     */
    public function setNotificationId($value = null)
    {
        $this->notification_id = $value;
    }

    /**
     * Check if 'title_key' has a value
     *
     * @return bool
     */
    public function hasTitleKey()
    {
        return $this->title_key !== null;
    }

    /**
     * Get 'title_key' value
     *
     * @return string
     */
    public function getTitleKey()
    {
        return $this->title_key;
    }

    /**
     * Set 'title_key' value
     *
     * @param string $value
     */
    public function setTitleKey($value = null)
    {
        $this->title_key = $value;
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
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set 'category' value
     *
     * @param string $value
     */
    public function setCategory($value = null)
    {
        $this->category = $value;
    }

    /**
     * Check if 'create_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasCreateTimestampMs()
    {
        return $this->create_timestamp_ms !== null;
    }

    /**
     * Get 'create_timestamp_ms' value
     *
     * @return int
     */
    public function getCreateTimestampMs()
    {
        return $this->create_timestamp_ms;
    }

    /**
     * Set 'create_timestamp_ms' value
     *
     * @param int $value
     */
    public function setCreateTimestampMs($value = null)
    {
        $this->create_timestamp_ms = $value;
    }

    /**
     * Check if 'variables' has a value
     *
     * @return bool
     */
    public function hasVariablesList()
    {
        return $this->variables !== null;
    }

    /**
     * Get 'variables' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\TemplateVariable>
     */
    public function getVariablesList()
    {
        return $this->variables;
    }

    /**
     * Set 'variables' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\TemplateVariable> $value
     */
    public function setVariablesList(\Protobuf\Collection $value = null)
    {
        $this->variables = $value;
    }

    /**
     * Add a new element to 'variables'
     *
     * @param
     * \POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\TemplateVariable
     * $value
     */
    public function addVariables(\POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\TemplateVariable $value)
    {
        if ($this->variables === null) {
            $this->variables = new \Protobuf\MessageCollection();
        }

        $this->variables->add($value);
    }

    /**
     * Check if 'labels' has a value
     *
     * @return bool
     */
    public function hasLabelsList()
    {
        return $this->labels !== null;
    }

    /**
     * Get 'labels' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\Notification\Label>
     */
    public function getLabelsList()
    {
        return $this->labels;
    }

    /**
     * Set 'labels' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\Notification\Label> $value
     */
    public function setLabelsList(\Protobuf\Collection $value = null)
    {
        $this->labels = $value;
    }

    /**
     * Add a new element to 'labels'
     *
     * @param
     * \POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\Notification\Label
     * $value
     */
    public function addLabels(\POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\Notification\Label $value)
    {
        if ($this->labels === null) {
            $this->labels = new \Protobuf\EnumCollection();
        }

        $this->labels->add($value);
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
            'notification_id' => null,
            'title_key' => null,
            'category' => null,
            'create_timestamp_ms' => null,
            'variables' => [],
            'labels' => []
        ], $values);

        $message->setNotificationId($values['notification_id']);
        $message->setTitleKey($values['title_key']);
        $message->setCategory($values['category']);
        $message->setCreateTimestampMs($values['create_timestamp_ms']);

        foreach ($values['variables'] as $item) {
            $message->addVariables($item);
        }

        foreach ($values['labels'] as $item) {
            $message->addLabels($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Notification',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'notification_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'title_key',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'category',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'create_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'variables',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Networking.Responses.GetInboxResponse.ClientInbox.TemplateVariable'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'labels',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Networking.Responses.GetInboxResponse.ClientInbox.Notification.Label'
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

        if ($this->notification_id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->notification_id);
        }

        if ($this->title_key !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->title_key);
        }

        if ($this->category !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->category);
        }

        if ($this->create_timestamp_ms !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->create_timestamp_ms);
        }

        if ($this->variables !== null) {
            foreach ($this->variables as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->labels !== null) {
            foreach ($this->labels as $val) {
                $writer->writeVarint($stream, 48);
                $writer->writeVarint($stream, $val->value());
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->notification_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->title_key = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->category = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->create_timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\TemplateVariable();

                if ($this->variables === null) {
                    $this->variables = new \Protobuf\MessageCollection();
                }

                $this->variables->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->labels === null) {
                    $this->labels = new \Protobuf\EnumCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->labels->add(\POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\Notification\Label::valueOf($reader->readVarint($stream)));
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

        if ($this->notification_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->notification_id);
        }

        if ($this->title_key !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->title_key);
        }

        if ($this->category !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->category);
        }

        if ($this->create_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->create_timestamp_ms);
        }

        if ($this->variables !== null) {
            foreach ($this->variables as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->labels !== null) {
            foreach ($this->labels as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val->value());
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
        $this->notification_id = null;
        $this->title_key = null;
        $this->category = null;
        $this->create_timestamp_ms = null;
        $this->variables = null;
        $this->labels = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Responses\GetInboxResponse\ClientInbox\Notification) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->notification_id = ($message->notification_id !== null) ? $message->notification_id : $this->notification_id;
        $this->title_key = ($message->title_key !== null) ? $message->title_key : $this->title_key;
        $this->category = ($message->category !== null) ? $message->category : $this->category;
        $this->create_timestamp_ms = ($message->create_timestamp_ms !== null) ? $message->create_timestamp_ms : $this->create_timestamp_ms;
        $this->variables = ($message->variables !== null) ? $message->variables : $this->variables;
        $this->labels = ($message->labels !== null) ? $message->labels : $this->labels;
    }


}

