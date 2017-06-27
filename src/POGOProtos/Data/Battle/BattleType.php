<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Battle/BattleType.proto
 */


namespace POGOProtos\Data\Battle;

/**
 * Protobuf enum : POGOProtos.Data.Battle.BattleType
 */
class BattleType extends \Protobuf\Enum
{

    /**
     * BATTLE_TYPE_UNSET = 0
     */
    const BATTLE_TYPE_UNSET_VALUE = 0;

    /**
     * BATTLE_TYPE_NORMAL = 1
     */
    const BATTLE_TYPE_NORMAL_VALUE = 1;

    /**
     * BATTLE_TYPE_TRAINING = 2
     */
    const BATTLE_TYPE_TRAINING_VALUE = 2;

    /**
     * BATTLE_TYPE_RAID = 3
     */
    const BATTLE_TYPE_RAID_VALUE = 3;

    /**
     * @var \POGOProtos\Data\Battle\BattleType
     */
    protected static $BATTLE_TYPE_UNSET = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleType
     */
    protected static $BATTLE_TYPE_NORMAL = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleType
     */
    protected static $BATTLE_TYPE_TRAINING = null;

    /**
     * @var \POGOProtos\Data\Battle\BattleType
     */
    protected static $BATTLE_TYPE_RAID = null;

    /**
     * @return \POGOProtos\Data\Battle\BattleType
     */
    public static function BATTLE_TYPE_UNSET()
    {
        if (self::$BATTLE_TYPE_UNSET !== null) {
            return self::$BATTLE_TYPE_UNSET;
        }

        return self::$BATTLE_TYPE_UNSET = new self('BATTLE_TYPE_UNSET', self::BATTLE_TYPE_UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleType
     */
    public static function BATTLE_TYPE_NORMAL()
    {
        if (self::$BATTLE_TYPE_NORMAL !== null) {
            return self::$BATTLE_TYPE_NORMAL;
        }

        return self::$BATTLE_TYPE_NORMAL = new self('BATTLE_TYPE_NORMAL', self::BATTLE_TYPE_NORMAL_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleType
     */
    public static function BATTLE_TYPE_TRAINING()
    {
        if (self::$BATTLE_TYPE_TRAINING !== null) {
            return self::$BATTLE_TYPE_TRAINING;
        }

        return self::$BATTLE_TYPE_TRAINING = new self('BATTLE_TYPE_TRAINING', self::BATTLE_TYPE_TRAINING_VALUE);
    }

    /**
     * @return \POGOProtos\Data\Battle\BattleType
     */
    public static function BATTLE_TYPE_RAID()
    {
        if (self::$BATTLE_TYPE_RAID !== null) {
            return self::$BATTLE_TYPE_RAID;
        }

        return self::$BATTLE_TYPE_RAID = new self('BATTLE_TYPE_RAID', self::BATTLE_TYPE_RAID_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Data\Battle\BattleType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::BATTLE_TYPE_UNSET();
            case 1: return self::BATTLE_TYPE_NORMAL();
            case 2: return self::BATTLE_TYPE_TRAINING();
            case 3: return self::BATTLE_TYPE_RAID();
            default: return null;
        }
    }


}
