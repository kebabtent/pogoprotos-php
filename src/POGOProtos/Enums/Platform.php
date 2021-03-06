<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Enums/Platform.proto
 */


namespace POGOProtos\Enums;

/**
 * Protobuf enum : POGOProtos.Enums.Platform
 */
class Platform extends \Protobuf\Enum
{

    /**
     * UNSET = 0
     */
    const UNSET_VALUE = 0;

    /**
     * IOS = 1
     */
    const IOS_VALUE = 1;

    /**
     * ANDROID = 2
     */
    const ANDROID_VALUE = 2;

    /**
     * OSX = 3
     */
    const OSX_VALUE = 3;

    /**
     * WINDOWS = 4
     */
    const WINDOWS_VALUE = 4;

    /**
     * APPLE_WATCH = 5
     */
    const APPLE_WATCH_VALUE = 5;

    /**
     * @var \POGOProtos\Enums\Platform
     */
    protected static $UNSET = null;

    /**
     * @var \POGOProtos\Enums\Platform
     */
    protected static $IOS = null;

    /**
     * @var \POGOProtos\Enums\Platform
     */
    protected static $ANDROID = null;

    /**
     * @var \POGOProtos\Enums\Platform
     */
    protected static $OSX = null;

    /**
     * @var \POGOProtos\Enums\Platform
     */
    protected static $WINDOWS = null;

    /**
     * @var \POGOProtos\Enums\Platform
     */
    protected static $APPLE_WATCH = null;

    /**
     * @return \POGOProtos\Enums\Platform
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\Platform
     */
    public static function IOS()
    {
        if (self::$IOS !== null) {
            return self::$IOS;
        }

        return self::$IOS = new self('IOS', self::IOS_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\Platform
     */
    public static function ANDROID()
    {
        if (self::$ANDROID !== null) {
            return self::$ANDROID;
        }

        return self::$ANDROID = new self('ANDROID', self::ANDROID_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\Platform
     */
    public static function OSX()
    {
        if (self::$OSX !== null) {
            return self::$OSX;
        }

        return self::$OSX = new self('OSX', self::OSX_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\Platform
     */
    public static function WINDOWS()
    {
        if (self::$WINDOWS !== null) {
            return self::$WINDOWS;
        }

        return self::$WINDOWS = new self('WINDOWS', self::WINDOWS_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\Platform
     */
    public static function APPLE_WATCH()
    {
        if (self::$APPLE_WATCH !== null) {
            return self::$APPLE_WATCH;
        }

        return self::$APPLE_WATCH = new self('APPLE_WATCH', self::APPLE_WATCH_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Enums\Platform
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::IOS();
            case 2: return self::ANDROID();
            case 3: return self::OSX();
            case 4: return self::WINDOWS();
            case 5: return self::APPLE_WATCH();
            default: return null;
        }
    }


}

