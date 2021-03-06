<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Envelopes/RequestEnvelope.proto
 */


namespace POGOProtos\Networking\Envelopes;

/**
 * Protobuf message : POGOProtos.Networking.Envelopes.RequestEnvelope
 */
class RequestEnvelope extends \Protobuf\AbstractMessage
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
     * status_code optional int32 = 1
     *
     * @var int
     */
    protected $status_code = null;

    /**
     * request_id optional uint64 = 3
     *
     * @var int
     */
    protected $request_id = null;

    /**
     * requests repeated message = 4
     *
     * @var \Protobuf\Collection<\POGOProtos\Networking\Requests\Request>
     */
    protected $requests = null;

    /**
     * platform_requests repeated message = 6
     *
     * @var \Protobuf\Collection<\POGOProtos\Networking\Envelopes\RequestEnvelope\PlatformRequest>
     */
    protected $platform_requests = null;

    /**
     * latitude optional double = 7
     *
     * @var float
     */
    protected $latitude = null;

    /**
     * longitude optional double = 8
     *
     * @var float
     */
    protected $longitude = null;

    /**
     * accuracy optional double = 9
     *
     * @var float
     */
    protected $accuracy = null;

    /**
     * auth_info optional message = 10
     *
     * @var \POGOProtos\Networking\Envelopes\RequestEnvelope\AuthInfo
     */
    protected $auth_info = null;

    /**
     * auth_ticket optional message = 11
     *
     * @var \POGOProtos\Networking\Envelopes\AuthTicket
     */
    protected $auth_ticket = null;

    /**
     * ms_since_last_locationfix optional int64 = 12
     *
     * @var int
     */
    protected $ms_since_last_locationfix = null;

    /**
     * Check if 'status_code' has a value
     *
     * @return bool
     */
    public function hasStatusCode()
    {
        return $this->status_code !== null;
    }

    /**
     * Get 'status_code' value
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * Set 'status_code' value
     *
     * @param int $value
     */
    public function setStatusCode($value = null)
    {
        $this->status_code = $value;
    }

    /**
     * Check if 'request_id' has a value
     *
     * @return bool
     */
    public function hasRequestId()
    {
        return $this->request_id !== null;
    }

    /**
     * Get 'request_id' value
     *
     * @return int
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Set 'request_id' value
     *
     * @param int $value
     */
    public function setRequestId($value = null)
    {
        $this->request_id = $value;
    }

    /**
     * Check if 'requests' has a value
     *
     * @return bool
     */
    public function hasRequestsList()
    {
        return $this->requests !== null;
    }

    /**
     * Get 'requests' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Networking\Requests\Request>
     */
    public function getRequestsList()
    {
        return $this->requests;
    }

    /**
     * Set 'requests' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Networking\Requests\Request> $value
     */
    public function setRequestsList(\Protobuf\Collection $value = null)
    {
        $this->requests = $value;
    }

    /**
     * Add a new element to 'requests'
     *
     * @param \POGOProtos\Networking\Requests\Request $value
     */
    public function addRequests(\POGOProtos\Networking\Requests\Request $value)
    {
        if ($this->requests === null) {
            $this->requests = new \Protobuf\MessageCollection();
        }

        $this->requests->add($value);
    }

    /**
     * Check if 'platform_requests' has a value
     *
     * @return bool
     */
    public function hasPlatformRequestsList()
    {
        return $this->platform_requests !== null;
    }

    /**
     * Get 'platform_requests' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Networking\Envelopes\RequestEnvelope\PlatformRequest>
     */
    public function getPlatformRequestsList()
    {
        return $this->platform_requests;
    }

    /**
     * Set 'platform_requests' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Networking\Envelopes\RequestEnvelope\PlatformRequest> $value
     */
    public function setPlatformRequestsList(\Protobuf\Collection $value = null)
    {
        $this->platform_requests = $value;
    }

    /**
     * Add a new element to 'platform_requests'
     *
     * @param \POGOProtos\Networking\Envelopes\RequestEnvelope\PlatformRequest $value
     */
    public function addPlatformRequests(\POGOProtos\Networking\Envelopes\RequestEnvelope\PlatformRequest $value)
    {
        if ($this->platform_requests === null) {
            $this->platform_requests = new \Protobuf\MessageCollection();
        }

        $this->platform_requests->add($value);
    }

    /**
     * Check if 'latitude' has a value
     *
     * @return bool
     */
    public function hasLatitude()
    {
        return $this->latitude !== null;
    }

    /**
     * Get 'latitude' value
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set 'latitude' value
     *
     * @param float $value
     */
    public function setLatitude($value = null)
    {
        $this->latitude = $value;
    }

    /**
     * Check if 'longitude' has a value
     *
     * @return bool
     */
    public function hasLongitude()
    {
        return $this->longitude !== null;
    }

    /**
     * Get 'longitude' value
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set 'longitude' value
     *
     * @param float $value
     */
    public function setLongitude($value = null)
    {
        $this->longitude = $value;
    }

    /**
     * Check if 'accuracy' has a value
     *
     * @return bool
     */
    public function hasAccuracy()
    {
        return $this->accuracy !== null;
    }

    /**
     * Get 'accuracy' value
     *
     * @return float
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * Set 'accuracy' value
     *
     * @param float $value
     */
    public function setAccuracy($value = null)
    {
        $this->accuracy = $value;
    }

    /**
     * Check if 'auth_info' has a value
     *
     * @return bool
     */
    public function hasAuthInfo()
    {
        return $this->auth_info !== null;
    }

    /**
     * Get 'auth_info' value
     *
     * @return \POGOProtos\Networking\Envelopes\RequestEnvelope\AuthInfo
     */
    public function getAuthInfo()
    {
        return $this->auth_info;
    }

    /**
     * Set 'auth_info' value
     *
     * @param \POGOProtos\Networking\Envelopes\RequestEnvelope\AuthInfo $value
     */
    public function setAuthInfo(\POGOProtos\Networking\Envelopes\RequestEnvelope\AuthInfo $value = null)
    {
        $this->auth_info = $value;
    }

    /**
     * Check if 'auth_ticket' has a value
     *
     * @return bool
     */
    public function hasAuthTicket()
    {
        return $this->auth_ticket !== null;
    }

    /**
     * Get 'auth_ticket' value
     *
     * @return \POGOProtos\Networking\Envelopes\AuthTicket
     */
    public function getAuthTicket()
    {
        return $this->auth_ticket;
    }

    /**
     * Set 'auth_ticket' value
     *
     * @param \POGOProtos\Networking\Envelopes\AuthTicket $value
     */
    public function setAuthTicket(\POGOProtos\Networking\Envelopes\AuthTicket $value = null)
    {
        $this->auth_ticket = $value;
    }

    /**
     * Check if 'ms_since_last_locationfix' has a value
     *
     * @return bool
     */
    public function hasMsSinceLastLocationfix()
    {
        return $this->ms_since_last_locationfix !== null;
    }

    /**
     * Get 'ms_since_last_locationfix' value
     *
     * @return int
     */
    public function getMsSinceLastLocationfix()
    {
        return $this->ms_since_last_locationfix;
    }

    /**
     * Set 'ms_since_last_locationfix' value
     *
     * @param int $value
     */
    public function setMsSinceLastLocationfix($value = null)
    {
        $this->ms_since_last_locationfix = $value;
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
            'status_code' => null,
            'request_id' => null,
            'requests' => [],
            'platform_requests' => [],
            'latitude' => null,
            'longitude' => null,
            'accuracy' => null,
            'auth_info' => null,
            'auth_ticket' => null,
            'ms_since_last_locationfix' => null
        ], $values);

        $message->setStatusCode($values['status_code']);
        $message->setRequestId($values['request_id']);
        $message->setLatitude($values['latitude']);
        $message->setLongitude($values['longitude']);
        $message->setAccuracy($values['accuracy']);
        $message->setAuthInfo($values['auth_info']);
        $message->setAuthTicket($values['auth_ticket']);
        $message->setMsSinceLastLocationfix($values['ms_since_last_locationfix']);

        foreach ($values['requests'] as $item) {
            $message->addRequests($item);
        }

        foreach ($values['platform_requests'] as $item) {
            $message->addPlatformRequests($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'RequestEnvelope',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'status_code',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'request_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'requests',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Networking.Requests.Request'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'platform_requests',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Networking.Envelopes.RequestEnvelope.PlatformRequest'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'latitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'longitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'accuracy',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'auth_info',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Envelopes.RequestEnvelope.AuthInfo'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'auth_ticket',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Envelopes.AuthTicket'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'ms_since_last_locationfix',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
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

        if ($this->status_code !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->status_code);
        }

        if ($this->request_id !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->request_id);
        }

        if ($this->requests !== null) {
            foreach ($this->requests as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->platform_requests !== null) {
            foreach ($this->platform_requests as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->latitude !== null) {
            $writer->writeVarint($stream, 57);
            $writer->writeDouble($stream, $this->latitude);
        }

        if ($this->longitude !== null) {
            $writer->writeVarint($stream, 65);
            $writer->writeDouble($stream, $this->longitude);
        }

        if ($this->accuracy !== null) {
            $writer->writeVarint($stream, 73);
            $writer->writeDouble($stream, $this->accuracy);
        }

        if ($this->auth_info !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeVarint($stream, $this->auth_info->serializedSize($sizeContext));
            $this->auth_info->writeTo($context);
        }

        if ($this->auth_ticket !== null) {
            $writer->writeVarint($stream, 90);
            $writer->writeVarint($stream, $this->auth_ticket->serializedSize($sizeContext));
            $this->auth_ticket->writeTo($context);
        }

        if ($this->ms_since_last_locationfix !== null) {
            $writer->writeVarint($stream, 96);
            $writer->writeVarint($stream, $this->ms_since_last_locationfix);
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
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->status_code = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->request_id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Networking\Requests\Request();

                if ($this->requests === null) {
                    $this->requests = new \Protobuf\MessageCollection();
                }

                $this->requests->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Networking\Envelopes\RequestEnvelope\PlatformRequest();

                if ($this->platform_requests === null) {
                    $this->platform_requests = new \Protobuf\MessageCollection();
                }

                $this->platform_requests->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->latitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->longitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->accuracy = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Networking\Envelopes\RequestEnvelope\AuthInfo();

                $this->auth_info = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Networking\Envelopes\AuthTicket();

                $this->auth_ticket = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->ms_since_last_locationfix = $reader->readVarint($stream);

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

        if ($this->status_code !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->status_code);
        }

        if ($this->request_id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->request_id);
        }

        if ($this->requests !== null) {
            foreach ($this->requests as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->platform_requests !== null) {
            foreach ($this->platform_requests as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->latitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->longitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->accuracy !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->auth_info !== null) {
            $innerSize = $this->auth_info->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->auth_ticket !== null) {
            $innerSize = $this->auth_ticket->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->ms_since_last_locationfix !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->ms_since_last_locationfix);
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
        $this->status_code = null;
        $this->request_id = null;
        $this->requests = null;
        $this->platform_requests = null;
        $this->latitude = null;
        $this->longitude = null;
        $this->accuracy = null;
        $this->auth_info = null;
        $this->auth_ticket = null;
        $this->ms_since_last_locationfix = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Envelopes\RequestEnvelope) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->status_code = ($message->status_code !== null) ? $message->status_code : $this->status_code;
        $this->request_id = ($message->request_id !== null) ? $message->request_id : $this->request_id;
        $this->requests = ($message->requests !== null) ? $message->requests : $this->requests;
        $this->platform_requests = ($message->platform_requests !== null) ? $message->platform_requests : $this->platform_requests;
        $this->latitude = ($message->latitude !== null) ? $message->latitude : $this->latitude;
        $this->longitude = ($message->longitude !== null) ? $message->longitude : $this->longitude;
        $this->accuracy = ($message->accuracy !== null) ? $message->accuracy : $this->accuracy;
        $this->auth_info = ($message->auth_info !== null) ? $message->auth_info : $this->auth_info;
        $this->auth_ticket = ($message->auth_ticket !== null) ? $message->auth_ticket : $this->auth_ticket;
        $this->ms_since_last_locationfix = ($message->ms_since_last_locationfix !== null) ? $message->ms_since_last_locationfix : $this->ms_since_last_locationfix;
    }


}

