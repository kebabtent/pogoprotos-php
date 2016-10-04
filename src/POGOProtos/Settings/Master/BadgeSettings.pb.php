<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/Master/BadgeSettings.proto

namespace POGOProtos\Settings\Master;

require_once('POGOProtos/Enums/BadgeType.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class BadgeSettings extends \Google\Protobuf\Internal\Message
{
    private $badge_type = 0;
    private $badge_rank = 0;
    private $targets;

    public function getBadgeType()
    {
        return $this->badge_type;
    }

    public function setBadgeType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\BadgeType::class);
        $this->badge_type = $var;
    }

    public function getBadgeRank()
    {
        return $this->badge_rank;
    }

    public function setBadgeRank($var)
    {
        GPBUtil::checkInt32($var);
        $this->badge_rank = $var;
    }

    public function getTargets()
    {
        return $this->targets;
    }

    public function setTargets(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->targets = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0add010a2e504f474f50726f746f732f53657474696e67732f4d61737465" .
    "722f426164676553657474696e67732e70726f746f121a504f474f50726f" .
    "746f732e53657474696e67732e4d61737465721a20504f474f50726f746f" .
    "732f456e756d732f4261646765547970652e70726f746f22650a0d426164" .
    "676553657474696e6773122f0a0a62616467655f7479706518012001280e" .
    "321b2e504f474f50726f746f732e456e756d732e42616467655479706512" .
    "120a0a62616467655f72616e6b180220012805120f0a0774617267657473" .
    "180320032805620670726f746f33"
));
