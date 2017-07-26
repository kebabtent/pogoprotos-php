<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/GymDeployResponse.proto
 */


namespace POGOProtos\Networking\Responses\GymDeployResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.GymDeployResponse.Result
 */
class Result extends \Protobuf\Enum
{

    /**
     * NO_RESULT_SET = 0
     */
    const NO_RESULT_SET_VALUE = 0;

    /**
     * SUCCESS = 1
     */
    const SUCCESS_VALUE = 1;

    /**
     * ERROR_ALREADY_HAS_POKEMON_ON_FORT = 2
     */
    const ERROR_ALREADY_HAS_POKEMON_ON_FORT_VALUE = 2;

    /**
     * ERROR_OPPOSING_TEAM_OWNS_FORT = 3
     */
    const ERROR_OPPOSING_TEAM_OWNS_FORT_VALUE = 3;

    /**
     * ERROR_FORT_IS_FULL = 4
     */
    const ERROR_FORT_IS_FULL_VALUE = 4;

    /**
     * ERROR_NOT_IN_RANGE = 5
     */
    const ERROR_NOT_IN_RANGE_VALUE = 5;

    /**
     * ERROR_PLAYER_HAS_NO_TEAM = 6
     */
    const ERROR_PLAYER_HAS_NO_TEAM_VALUE = 6;

    /**
     * ERROR_POKEMON_NOT_FULL_HP = 7
     */
    const ERROR_POKEMON_NOT_FULL_HP_VALUE = 7;

    /**
     * ERROR_PLAYER_BELOW_MINIMUM_LEVEL = 8
     */
    const ERROR_PLAYER_BELOW_MINIMUM_LEVEL_VALUE = 8;

    /**
     * ERROR_POKEMON_IS_BUDDY = 9
     */
    const ERROR_POKEMON_IS_BUDDY_VALUE = 9;

    /**
     * ERROR_FORT_DEPLOY_LOCKOUT = 10
     */
    const ERROR_FORT_DEPLOY_LOCKOUT_VALUE = 10;

    /**
     * ERROR_PLAYER_HAS_NO_NICKNAME = 11
     */
    const ERROR_PLAYER_HAS_NO_NICKNAME_VALUE = 11;

    /**
     * ERROR_POI_INACCESSIBLE = 12
     */
    const ERROR_POI_INACCESSIBLE_VALUE = 12;

    /**
     * ERROR_NOT_A_POKEMON = 13
     */
    const ERROR_NOT_A_POKEMON_VALUE = 13;

    /**
     * ERROR_TOO_MANY_OF_SAME_KIND = 14
     */
    const ERROR_TOO_MANY_OF_SAME_KIND_VALUE = 14;

    /**
     * ERROR_TOO_MANY_DEPLOYED = 15
     */
    const ERROR_TOO_MANY_DEPLOYED_VALUE = 15;

    /**
     * ERROR_TEAM_DEPLOY_LOCKOUT = 16
     */
    const ERROR_TEAM_DEPLOY_LOCKOUT_VALUE = 16;

    /**
     * ERROR_LEGENDARY_POKEMON = 17
     */
    const ERROR_LEGENDARY_POKEMON_VALUE = 17;

    /**
     * ERROR_INVALID_POKEMON = 18
     */
    const ERROR_INVALID_POKEMON_VALUE = 18;

    /**
     * ERROR_RAID_ACTIVE = 19
     */
    const ERROR_RAID_ACTIVE_VALUE = 19;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $NO_RESULT_SET = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_ALREADY_HAS_POKEMON_ON_FORT = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_OPPOSING_TEAM_OWNS_FORT = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_FORT_IS_FULL = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_NOT_IN_RANGE = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_PLAYER_HAS_NO_TEAM = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_POKEMON_NOT_FULL_HP = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_PLAYER_BELOW_MINIMUM_LEVEL = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_POKEMON_IS_BUDDY = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_FORT_DEPLOY_LOCKOUT = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_PLAYER_HAS_NO_NICKNAME = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_POI_INACCESSIBLE = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_NOT_A_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_TOO_MANY_OF_SAME_KIND = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_TOO_MANY_DEPLOYED = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_TEAM_DEPLOY_LOCKOUT = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_LEGENDARY_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_INVALID_POKEMON = null;

    /**
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected static $ERROR_RAID_ACTIVE = null;

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function NO_RESULT_SET()
    {
        if (self::$NO_RESULT_SET !== null) {
            return self::$NO_RESULT_SET;
        }

        return self::$NO_RESULT_SET = new self('NO_RESULT_SET', self::NO_RESULT_SET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_ALREADY_HAS_POKEMON_ON_FORT()
    {
        if (self::$ERROR_ALREADY_HAS_POKEMON_ON_FORT !== null) {
            return self::$ERROR_ALREADY_HAS_POKEMON_ON_FORT;
        }

        return self::$ERROR_ALREADY_HAS_POKEMON_ON_FORT = new self('ERROR_ALREADY_HAS_POKEMON_ON_FORT', self::ERROR_ALREADY_HAS_POKEMON_ON_FORT_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_OPPOSING_TEAM_OWNS_FORT()
    {
        if (self::$ERROR_OPPOSING_TEAM_OWNS_FORT !== null) {
            return self::$ERROR_OPPOSING_TEAM_OWNS_FORT;
        }

        return self::$ERROR_OPPOSING_TEAM_OWNS_FORT = new self('ERROR_OPPOSING_TEAM_OWNS_FORT', self::ERROR_OPPOSING_TEAM_OWNS_FORT_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_FORT_IS_FULL()
    {
        if (self::$ERROR_FORT_IS_FULL !== null) {
            return self::$ERROR_FORT_IS_FULL;
        }

        return self::$ERROR_FORT_IS_FULL = new self('ERROR_FORT_IS_FULL', self::ERROR_FORT_IS_FULL_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_NOT_IN_RANGE()
    {
        if (self::$ERROR_NOT_IN_RANGE !== null) {
            return self::$ERROR_NOT_IN_RANGE;
        }

        return self::$ERROR_NOT_IN_RANGE = new self('ERROR_NOT_IN_RANGE', self::ERROR_NOT_IN_RANGE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_PLAYER_HAS_NO_TEAM()
    {
        if (self::$ERROR_PLAYER_HAS_NO_TEAM !== null) {
            return self::$ERROR_PLAYER_HAS_NO_TEAM;
        }

        return self::$ERROR_PLAYER_HAS_NO_TEAM = new self('ERROR_PLAYER_HAS_NO_TEAM', self::ERROR_PLAYER_HAS_NO_TEAM_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_POKEMON_NOT_FULL_HP()
    {
        if (self::$ERROR_POKEMON_NOT_FULL_HP !== null) {
            return self::$ERROR_POKEMON_NOT_FULL_HP;
        }

        return self::$ERROR_POKEMON_NOT_FULL_HP = new self('ERROR_POKEMON_NOT_FULL_HP', self::ERROR_POKEMON_NOT_FULL_HP_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_PLAYER_BELOW_MINIMUM_LEVEL()
    {
        if (self::$ERROR_PLAYER_BELOW_MINIMUM_LEVEL !== null) {
            return self::$ERROR_PLAYER_BELOW_MINIMUM_LEVEL;
        }

        return self::$ERROR_PLAYER_BELOW_MINIMUM_LEVEL = new self('ERROR_PLAYER_BELOW_MINIMUM_LEVEL', self::ERROR_PLAYER_BELOW_MINIMUM_LEVEL_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_POKEMON_IS_BUDDY()
    {
        if (self::$ERROR_POKEMON_IS_BUDDY !== null) {
            return self::$ERROR_POKEMON_IS_BUDDY;
        }

        return self::$ERROR_POKEMON_IS_BUDDY = new self('ERROR_POKEMON_IS_BUDDY', self::ERROR_POKEMON_IS_BUDDY_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_FORT_DEPLOY_LOCKOUT()
    {
        if (self::$ERROR_FORT_DEPLOY_LOCKOUT !== null) {
            return self::$ERROR_FORT_DEPLOY_LOCKOUT;
        }

        return self::$ERROR_FORT_DEPLOY_LOCKOUT = new self('ERROR_FORT_DEPLOY_LOCKOUT', self::ERROR_FORT_DEPLOY_LOCKOUT_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_PLAYER_HAS_NO_NICKNAME()
    {
        if (self::$ERROR_PLAYER_HAS_NO_NICKNAME !== null) {
            return self::$ERROR_PLAYER_HAS_NO_NICKNAME;
        }

        return self::$ERROR_PLAYER_HAS_NO_NICKNAME = new self('ERROR_PLAYER_HAS_NO_NICKNAME', self::ERROR_PLAYER_HAS_NO_NICKNAME_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_POI_INACCESSIBLE()
    {
        if (self::$ERROR_POI_INACCESSIBLE !== null) {
            return self::$ERROR_POI_INACCESSIBLE;
        }

        return self::$ERROR_POI_INACCESSIBLE = new self('ERROR_POI_INACCESSIBLE', self::ERROR_POI_INACCESSIBLE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_NOT_A_POKEMON()
    {
        if (self::$ERROR_NOT_A_POKEMON !== null) {
            return self::$ERROR_NOT_A_POKEMON;
        }

        return self::$ERROR_NOT_A_POKEMON = new self('ERROR_NOT_A_POKEMON', self::ERROR_NOT_A_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_TOO_MANY_OF_SAME_KIND()
    {
        if (self::$ERROR_TOO_MANY_OF_SAME_KIND !== null) {
            return self::$ERROR_TOO_MANY_OF_SAME_KIND;
        }

        return self::$ERROR_TOO_MANY_OF_SAME_KIND = new self('ERROR_TOO_MANY_OF_SAME_KIND', self::ERROR_TOO_MANY_OF_SAME_KIND_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_TOO_MANY_DEPLOYED()
    {
        if (self::$ERROR_TOO_MANY_DEPLOYED !== null) {
            return self::$ERROR_TOO_MANY_DEPLOYED;
        }

        return self::$ERROR_TOO_MANY_DEPLOYED = new self('ERROR_TOO_MANY_DEPLOYED', self::ERROR_TOO_MANY_DEPLOYED_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_TEAM_DEPLOY_LOCKOUT()
    {
        if (self::$ERROR_TEAM_DEPLOY_LOCKOUT !== null) {
            return self::$ERROR_TEAM_DEPLOY_LOCKOUT;
        }

        return self::$ERROR_TEAM_DEPLOY_LOCKOUT = new self('ERROR_TEAM_DEPLOY_LOCKOUT', self::ERROR_TEAM_DEPLOY_LOCKOUT_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_LEGENDARY_POKEMON()
    {
        if (self::$ERROR_LEGENDARY_POKEMON !== null) {
            return self::$ERROR_LEGENDARY_POKEMON;
        }

        return self::$ERROR_LEGENDARY_POKEMON = new self('ERROR_LEGENDARY_POKEMON', self::ERROR_LEGENDARY_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_INVALID_POKEMON()
    {
        if (self::$ERROR_INVALID_POKEMON !== null) {
            return self::$ERROR_INVALID_POKEMON;
        }

        return self::$ERROR_INVALID_POKEMON = new self('ERROR_INVALID_POKEMON', self::ERROR_INVALID_POKEMON_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function ERROR_RAID_ACTIVE()
    {
        if (self::$ERROR_RAID_ACTIVE !== null) {
            return self::$ERROR_RAID_ACTIVE;
        }

        return self::$ERROR_RAID_ACTIVE = new self('ERROR_RAID_ACTIVE', self::ERROR_RAID_ACTIVE_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::NO_RESULT_SET();
            case 1: return self::SUCCESS();
            case 2: return self::ERROR_ALREADY_HAS_POKEMON_ON_FORT();
            case 3: return self::ERROR_OPPOSING_TEAM_OWNS_FORT();
            case 4: return self::ERROR_FORT_IS_FULL();
            case 5: return self::ERROR_NOT_IN_RANGE();
            case 6: return self::ERROR_PLAYER_HAS_NO_TEAM();
            case 7: return self::ERROR_POKEMON_NOT_FULL_HP();
            case 8: return self::ERROR_PLAYER_BELOW_MINIMUM_LEVEL();
            case 9: return self::ERROR_POKEMON_IS_BUDDY();
            case 10: return self::ERROR_FORT_DEPLOY_LOCKOUT();
            case 11: return self::ERROR_PLAYER_HAS_NO_NICKNAME();
            case 12: return self::ERROR_POI_INACCESSIBLE();
            case 13: return self::ERROR_NOT_A_POKEMON();
            case 14: return self::ERROR_TOO_MANY_OF_SAME_KIND();
            case 15: return self::ERROR_TOO_MANY_DEPLOYED();
            case 16: return self::ERROR_TEAM_DEPLOY_LOCKOUT();
            case 17: return self::ERROR_LEGENDARY_POKEMON();
            case 18: return self::ERROR_INVALID_POKEMON();
            case 19: return self::ERROR_RAID_ACTIVE();
            default: return null;
        }
    }


}

