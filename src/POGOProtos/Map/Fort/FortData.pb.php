<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Map/Fort/FortData.proto

namespace POGOProtos\Map\Fort;

require_once('POGOProtos/Enums/PokemonId.pb.php');
require_once('POGOProtos/Enums/TeamColor.pb.php');
require_once('POGOProtos/Inventory/Item/ItemId.pb.php');
require_once('POGOProtos/Map/Fort/FortType.pb.php');
require_once('POGOProtos/Map/Fort/FortSponsor.pb.php');
require_once('POGOProtos/Map/Fort/FortRenderingType.pb.php');
require_once('POGOProtos/Map/Fort/FortLureInfo.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class FortData extends \Google\Protobuf\Internal\Message
{
    private $id = '';
    private $last_modified_timestamp_ms = 0;
    private $latitude = 0.0;
    private $longitude = 0.0;
    private $enabled = false;
    private $type = 0;
    private $owned_by_team = 0;
    private $guard_pokemon_id = 0;
    private $guard_pokemon_cp = 0;
    private $gym_points = 0;
    private $is_in_battle = false;
    private $active_fort_modifier;
    private $lure_info = null;
    private $cooldown_complete_timestamp_ms = 0;
    private $sponsor = 0;
    private $rendering_type = 0;

    public function getId()
    {
        return $this->id;
    }

    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    public function getLastModifiedTimestampMs()
    {
        return $this->last_modified_timestamp_ms;
    }

    public function setLastModifiedTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_modified_timestamp_ms = $var;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->latitude = $var;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->longitude = $var;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Map\Fort\FortType::class);
        $this->type = $var;
    }

    public function getOwnedByTeam()
    {
        return $this->owned_by_team;
    }

    public function setOwnedByTeam($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\TeamColor::class);
        $this->owned_by_team = $var;
    }

    public function getGuardPokemonId()
    {
        return $this->guard_pokemon_id;
    }

    public function setGuardPokemonId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Enums\PokemonId::class);
        $this->guard_pokemon_id = $var;
    }

    public function getGuardPokemonCp()
    {
        return $this->guard_pokemon_cp;
    }

    public function setGuardPokemonCp($var)
    {
        GPBUtil::checkInt32($var);
        $this->guard_pokemon_cp = $var;
    }

    public function getGymPoints()
    {
        return $this->gym_points;
    }

    public function setGymPoints($var)
    {
        GPBUtil::checkInt64($var);
        $this->gym_points = $var;
    }

    public function getIsInBattle()
    {
        return $this->is_in_battle;
    }

    public function setIsInBattle($var)
    {
        GPBUtil::checkBool($var);
        $this->is_in_battle = $var;
    }

    public function getActiveFortModifier()
    {
        return $this->active_fort_modifier;
    }

    public function setActiveFortModifier(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::ENUM, POGOProtos\Inventory\Item\ItemId::class);
        $this->active_fort_modifier = $var;
    }

    public function getLureInfo()
    {
        return $this->lure_info;
    }

    public function setLureInfo(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Map\Fort\FortLureInfo::class);
        $this->lure_info = $var;
    }

    public function getCooldownCompleteTimestampMs()
    {
        return $this->cooldown_complete_timestamp_ms;
    }

    public function setCooldownCompleteTimestampMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->cooldown_complete_timestamp_ms = $var;
    }

    public function getSponsor()
    {
        return $this->sponsor;
    }

    public function setSponsor($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Map\Fort\FortSponsor::class);
        $this->sponsor = $var;
    }

    public function getRenderingType()
    {
        return $this->rendering_type;
    }

    public function setRenderingType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Map\Fort\FortRenderingType::class);
        $this->rendering_type = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aae070a22504f474f50726f746f732f4d61702f466f72742f466f727444" .
    "6174612e70726f746f1213504f474f50726f746f732e4d61702e466f7274" .
    "1a20504f474f50726f746f732f456e756d732f506f6b656d6f6e49642e70" .
    "726f746f1a20504f474f50726f746f732f456e756d732f5465616d436f6c" .
    "6f722e70726f746f1a26504f474f50726f746f732f496e76656e746f7279" .
    "2f4974656d2f4974656d49642e70726f746f1a22504f474f50726f746f73" .
    "2f4d61702f466f72742f466f7274547970652e70726f746f1a25504f474f" .
    "50726f746f732f4d61702f466f72742f466f727453706f6e736f722e7072" .
    "6f746f1a2b504f474f50726f746f732f4d61702f466f72742f466f727452" .
    "656e646572696e67547970652e70726f746f1a26504f474f50726f746f73" .
    "2f4d61702f466f72742f466f72744c757265496e666f2e70726f746f22de" .
    "040a08466f727444617461120a0a02696418012001280912220a1a6c6173" .
    "745f6d6f6469666965645f74696d657374616d705f6d7318022001280312" .
    "100a086c6174697475646518032001280112110a096c6f6e676974756465" .
    "180420012801120f0a07656e61626c6564180820012808122b0a04747970" .
    "6518092001280e321d2e504f474f50726f746f732e4d61702e466f72742e" .
    "466f72745479706512320a0d6f776e65645f62795f7465616d1805200128" .
    "0e321b2e504f474f50726f746f732e456e756d732e5465616d436f6c6f72" .
    "12350a1067756172645f706f6b656d6f6e5f696418062001280e321b2e50" .
    "4f474f50726f746f732e456e756d732e506f6b656d6f6e496412180a1067" .
    "756172645f706f6b656d6f6e5f637018072001280512120a0a67796d5f70" .
    "6f696e7473180a2001280312140a0c69735f696e5f626174746c65180b20" .
    "012808123f0a146163746976655f666f72745f6d6f646966696572180c20" .
    "03280e32212e504f474f50726f746f732e496e76656e746f72792e497465" .
    "6d2e4974656d496412340a096c7572655f696e666f180d2001280b32212e" .
    "504f474f50726f746f732e4d61702e466f72742e466f72744c757265496e" .
    "666f12260a1e636f6f6c646f776e5f636f6d706c6574655f74696d657374" .
    "616d705f6d73180e2001280312310a0773706f6e736f72180f2001280e32" .
    "202e504f474f50726f746f732e4d61702e466f72742e466f727453706f6e" .
    "736f72123e0a0e72656e646572696e675f7479706518102001280e32262e" .
    "504f474f50726f746f732e4d61702e466f72742e466f727452656e646572" .
    "696e6754797065620670726f746f33"
));
