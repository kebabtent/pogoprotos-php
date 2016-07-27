<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Data\Player {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // message POGOProtos.Data.Player.EquippedBadge
  final class EquippedBadge extends ProtobufMessage {

    private $_unknown;
    private $badgeType = \POGOProtos\Enums\BadgeType::BADGE_UNSET; // optional .POGOProtos.Enums.BadgeType badge_type = 1
    private $level = 0; // optional int32 level = 2
    private $nextEquipChangeAllowedTimestampMs = 0; // optional int64 next_equip_change_allowed_timestamp_ms = 3

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional .POGOProtos.Enums.BadgeType badge_type = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->badgeType = $tmp;

            break;
          case 2: // optional int32 level = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->level = $tmp;

            break;
          case 3: // optional int64 next_equip_change_allowed_timestamp_ms = 3
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->nextEquipChangeAllowedTimestampMs = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->badgeType !== \POGOProtos\Enums\BadgeType::BADGE_UNSET) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->badgeType);
      }
      if ($this->level !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->level);
      }
      if ($this->nextEquipChangeAllowedTimestampMs !== 0) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $this->nextEquipChangeAllowedTimestampMs);
      }
    }

    public function size() {
      $size = 0;
      if ($this->badgeType !== \POGOProtos\Enums\BadgeType::BADGE_UNSET) {
        $size += 1 + Protobuf::size_varint($this->badgeType);
      }
      if ($this->level !== 0) {
        $size += 1 + Protobuf::size_varint($this->level);
      }
      if ($this->nextEquipChangeAllowedTimestampMs !== 0) {
        $size += 1 + Protobuf::size_varint($this->nextEquipChangeAllowedTimestampMs);
      }
      return $size;
    }

    public function clearBadgeType() { $this->badgeType = \POGOProtos\Enums\BadgeType::BADGE_UNSET; }
    public function getBadgeType() { return $this->badgeType;}
    public function setBadgeType($value) { $this->badgeType = $value; }

    public function clearLevel() { $this->level = 0; }
    public function getLevel() { return $this->level;}
    public function setLevel($value) { $this->level = $value; }

    public function clearNextEquipChangeAllowedTimestampMs() { $this->nextEquipChangeAllowedTimestampMs = 0; }
    public function getNextEquipChangeAllowedTimestampMs() { return $this->nextEquipChangeAllowedTimestampMs;}
    public function setNextEquipChangeAllowedTimestampMs($value) { $this->nextEquipChangeAllowedTimestampMs = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('badge_type', $this->badgeType, \POGOProtos\Enums\BadgeType::BADGE_UNSET)
           . Protobuf::toString('level', $this->level, 0)
           . Protobuf::toString('next_equip_change_allowed_timestamp_ms', $this->nextEquipChangeAllowedTimestampMs, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Data.Player.EquippedBadge)
  }

}