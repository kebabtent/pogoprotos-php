<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Enums/EncounterType.proto
 */


namespace POGOProtos\Enums;

/**
 * Protobuf enum : POGOProtos.Enums.EncounterType
 */
class EncounterType extends \Protobuf\Enum
{

    /**
     * SPAWN_POINT = 0
     */
    const SPAWN_POINT_VALUE = 0;

    /**
     * INCENSE = 1
     */
    const INCENSE_VALUE = 1;

    /**
     * DISK = 2
     */
    const DISK_VALUE = 2;

    /**
     * POST_RAID = 3
     */
    const POST_RAID_VALUE = 3;

    /**
     * @var \POGOProtos\Enums\EncounterType
     */
    protected static $SPAWN_POINT = null;

    /**
     * @var \POGOProtos\Enums\EncounterType
     */
    protected static $INCENSE = null;

    /**
     * @var \POGOProtos\Enums\EncounterType
     */
    protected static $DISK = null;

    /**
     * @var \POGOProtos\Enums\EncounterType
     */
    protected static $POST_RAID = null;

    /**
     * @return \POGOProtos\Enums\EncounterType
     */
    public static function SPAWN_POINT()
    {
        if (self::$SPAWN_POINT !== null) {
            return self::$SPAWN_POINT;
        }

        return self::$SPAWN_POINT = new self('SPAWN_POINT', self::SPAWN_POINT_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\EncounterType
     */
    public static function INCENSE()
    {
        if (self::$INCENSE !== null) {
            return self::$INCENSE;
        }

        return self::$INCENSE = new self('INCENSE', self::INCENSE_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\EncounterType
     */
    public static function DISK()
    {
        if (self::$DISK !== null) {
            return self::$DISK;
        }

        return self::$DISK = new self('DISK', self::DISK_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\EncounterType
     */
    public static function POST_RAID()
    {
        if (self::$POST_RAID !== null) {
            return self::$POST_RAID;
        }

        return self::$POST_RAID = new self('POST_RAID', self::POST_RAID_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Enums\EncounterType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::SPAWN_POINT();
            case 1: return self::INCENSE();
            case 2: return self::DISK();
            case 3: return self::POST_RAID();
            default: return null;
        }
    }


}

