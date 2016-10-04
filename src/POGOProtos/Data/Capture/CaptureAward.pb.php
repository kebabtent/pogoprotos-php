<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Data/Capture/CaptureAward.proto

namespace POGOProtos\Data\Capture;

require_once('POGOProtos/Enums/ActivityType.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class CaptureAward extends \Google\Protobuf\Internal\Message
{
    private $activity_type;
    private $xp;
    private $candy;
    private $stardust;

    public function getActivityType()
    {
        return $this->activity_type;
    }

    public function setActivityType(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::ENUM, POGOProtos\Enums\ActivityType::class);
        $this->activity_type = $var;
    }

    public function getXp()
    {
        return $this->xp;
    }

    public function setXp(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->xp = $var;
    }

    public function getCandy()
    {
        return $this->candy;
    }

    public function setCandy(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->candy = $var;
    }

    public function getStardust()
    {
        return $this->stardust;
    }

    public function setStardust(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->stardust = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af7010a2a504f474f50726f746f732f446174612f436170747572652f43" .
    "61707475726541776172642e70726f746f1217504f474f50726f746f732e" .
    "446174612e436170747572651a23504f474f50726f746f732f456e756d73" .
    "2f4163746976697479547970652e70726f746f2282010a0c436170747572" .
    "65417761726412390a0d61637469766974795f7479706518012003280e32" .
    "1e2e504f474f50726f746f732e456e756d732e4163746976697479547970" .
    "6542021001120e0a0278701802200328054202100112110a0563616e6479" .
    "1803200328054202100112140a0873746172647573741804200328054202" .
    "1001620670726f746f33"
));
