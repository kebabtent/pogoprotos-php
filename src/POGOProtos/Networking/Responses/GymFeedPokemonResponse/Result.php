<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/GymFeedPokemonResponse.proto
 */


namespace POGOProtos\Networking\Responses\GymFeedPokemonResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.GymFeedPokemonResponse.Result
 */
class Result extends \Protobuf\Enum
{

    /**
     * UNSET = 0
     */
    const UNSET_VALUE = 0;

    /**
     * SUCCESS = 1
     */
    const SUCCESS_VALUE = 1;

    /**
     * ERROR_CANNOT_USE = 2
     */
    const ERROR_CANNOT_USE_VALUE = 2;

    /**
     * ERROR_NOT_IN_RANGE = 3
     */
    const ERROR_NOT_IN_RANGE_VALUE = 3;

    /**
     * ERROR_POKEMON_NOT_THERE = 4
     */
    const ERROR_POKEMON_NOT_THERE_VALUE = 4;

    /**
     * ERROR_POKEMON_FULL = 5
     */
    const ERROR_POKEMON_FULL_VALUE = 5;

    /**
     * ERROR_NO_BERRIES_LEFT = 6
     */
    const ERROR_NO_BERRIES_LEFT_VALUE = 6;

    /**
     * ERROR_WRONG_TEAM = 7
     */
    const ERROR_WRONG_TEAM_VALUE = 7;

    /**
     * ERROR_WRONG_COUNT = 8
     */
    const ERROR_WRONG_COUNT_VALUE = 8;

    /**
     * ERROR_TOO_FAST = 9
     */
    const ERROR_TOO_FAST_VALUE = 9;

    /**
     * ERROR_TOO_FREQUENT = 10
     */
    const ERROR_TOO_FREQUENT_VALUE = 10;

    /**
     * ERROR_GYM_BUSY = 11
     */
    const ERROR_GYM_BUSY_VALUE = 11;

    /**
     * ERROR_RAID_ACTIVE = 12
     */
    const ERROR_RAID_ACTIVE_VALUE = 12;

    /**
     * ERROR_GYM_CLOSED = 13
     */
    const ERROR_GYM_CLOSED_VALUE = 13;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $UNSET = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $ERROR_CANNOT_USE = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $ERROR_NOT_IN_RANGE = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $ERROR_POKEMON_NOT_THERE = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $ERROR_POKEMON_FULL = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $ERROR_NO_BERRIES_LEFT = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $ERROR_WRONG_TEAM = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $ERROR_WRONG_COUNT = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $ERROR_TOO_FAST = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $ERROR_TOO_FREQUENT = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $ERROR_GYM_BUSY = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $ERROR_RAID_ACTIVE = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    protected static $ERROR_GYM_CLOSED = null;

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function ERROR_CANNOT_USE()
    {
        if (self::$ERROR_CANNOT_USE !== null) {
            return self::$ERROR_CANNOT_USE;
        }

        return self::$ERROR_CANNOT_USE = new self('ERROR_CANNOT_USE', self::ERROR_CANNOT_USE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function ERROR_NOT_IN_RANGE()
    {
        if (self::$ERROR_NOT_IN_RANGE !== null) {
            return self::$ERROR_NOT_IN_RANGE;
        }

        return self::$ERROR_NOT_IN_RANGE = new self('ERROR_NOT_IN_RANGE', self::ERROR_NOT_IN_RANGE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function ERROR_POKEMON_NOT_THERE()
    {
        if (self::$ERROR_POKEMON_NOT_THERE !== null) {
            return self::$ERROR_POKEMON_NOT_THERE;
        }

        return self::$ERROR_POKEMON_NOT_THERE = new self('ERROR_POKEMON_NOT_THERE', self::ERROR_POKEMON_NOT_THERE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function ERROR_POKEMON_FULL()
    {
        if (self::$ERROR_POKEMON_FULL !== null) {
            return self::$ERROR_POKEMON_FULL;
        }

        return self::$ERROR_POKEMON_FULL = new self('ERROR_POKEMON_FULL', self::ERROR_POKEMON_FULL_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function ERROR_NO_BERRIES_LEFT()
    {
        if (self::$ERROR_NO_BERRIES_LEFT !== null) {
            return self::$ERROR_NO_BERRIES_LEFT;
        }

        return self::$ERROR_NO_BERRIES_LEFT = new self('ERROR_NO_BERRIES_LEFT', self::ERROR_NO_BERRIES_LEFT_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function ERROR_WRONG_TEAM()
    {
        if (self::$ERROR_WRONG_TEAM !== null) {
            return self::$ERROR_WRONG_TEAM;
        }

        return self::$ERROR_WRONG_TEAM = new self('ERROR_WRONG_TEAM', self::ERROR_WRONG_TEAM_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function ERROR_WRONG_COUNT()
    {
        if (self::$ERROR_WRONG_COUNT !== null) {
            return self::$ERROR_WRONG_COUNT;
        }

        return self::$ERROR_WRONG_COUNT = new self('ERROR_WRONG_COUNT', self::ERROR_WRONG_COUNT_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function ERROR_TOO_FAST()
    {
        if (self::$ERROR_TOO_FAST !== null) {
            return self::$ERROR_TOO_FAST;
        }

        return self::$ERROR_TOO_FAST = new self('ERROR_TOO_FAST', self::ERROR_TOO_FAST_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function ERROR_TOO_FREQUENT()
    {
        if (self::$ERROR_TOO_FREQUENT !== null) {
            return self::$ERROR_TOO_FREQUENT;
        }

        return self::$ERROR_TOO_FREQUENT = new self('ERROR_TOO_FREQUENT', self::ERROR_TOO_FREQUENT_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function ERROR_GYM_BUSY()
    {
        if (self::$ERROR_GYM_BUSY !== null) {
            return self::$ERROR_GYM_BUSY;
        }

        return self::$ERROR_GYM_BUSY = new self('ERROR_GYM_BUSY', self::ERROR_GYM_BUSY_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function ERROR_RAID_ACTIVE()
    {
        if (self::$ERROR_RAID_ACTIVE !== null) {
            return self::$ERROR_RAID_ACTIVE;
        }

        return self::$ERROR_RAID_ACTIVE = new self('ERROR_RAID_ACTIVE', self::ERROR_RAID_ACTIVE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function ERROR_GYM_CLOSED()
    {
        if (self::$ERROR_GYM_CLOSED !== null) {
            return self::$ERROR_GYM_CLOSED;
        }

        return self::$ERROR_GYM_CLOSED = new self('ERROR_GYM_CLOSED', self::ERROR_GYM_CLOSED_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\GymFeedPokemonResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::SUCCESS();
            case 2: return self::ERROR_CANNOT_USE();
            case 3: return self::ERROR_NOT_IN_RANGE();
            case 4: return self::ERROR_POKEMON_NOT_THERE();
            case 5: return self::ERROR_POKEMON_FULL();
            case 6: return self::ERROR_NO_BERRIES_LEFT();
            case 7: return self::ERROR_WRONG_TEAM();
            case 8: return self::ERROR_WRONG_COUNT();
            case 9: return self::ERROR_TOO_FAST();
            case 10: return self::ERROR_TOO_FREQUENT();
            case 11: return self::ERROR_GYM_BUSY();
            case 12: return self::ERROR_RAID_ACTIVE();
            case 13: return self::ERROR_GYM_CLOSED();
            default: return null;
        }
    }


}

