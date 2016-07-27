<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Settings\Master\Item {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // message POGOProtos.Settings.Master.Item.EggIncubatorAttributes
  final class EggIncubatorAttributes extends ProtobufMessage {

    private $_unknown;
    private $incubatorType = \POGOProtos\Inventory\EggIncubatorType::INCUBATOR_UNSET; // optional .POGOProtos.Inventory.EggIncubatorType incubator_type = 1
    private $uses = 0; // optional int32 uses = 2
    private $distanceMultiplier = 0; // optional float distance_multiplier = 3

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
          case 1: // optional .POGOProtos.Inventory.EggIncubatorType incubator_type = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->incubatorType = $tmp;

            break;
          case 2: // optional int32 uses = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->uses = $tmp;

            break;
          case 3: // optional float distance_multiplier = 3
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->distanceMultiplier = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->incubatorType !== \POGOProtos\Inventory\EggIncubatorType::INCUBATOR_UNSET) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->incubatorType);
      }
      if ($this->uses !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->uses);
      }
      if ($this->distanceMultiplier !== 0) {
        fwrite($fp, "\x1d", 1);
        Protobuf::write_float($fp, $this->distanceMultiplier);
      }
    }

    public function size() {
      $size = 0;
      if ($this->incubatorType !== \POGOProtos\Inventory\EggIncubatorType::INCUBATOR_UNSET) {
        $size += 1 + Protobuf::size_varint($this->incubatorType);
      }
      if ($this->uses !== 0) {
        $size += 1 + Protobuf::size_varint($this->uses);
      }
      if ($this->distanceMultiplier !== 0) {
        $size += 5;
      }
      return $size;
    }

    public function clearIncubatorType() { $this->incubatorType = \POGOProtos\Inventory\EggIncubatorType::INCUBATOR_UNSET; }
    public function getIncubatorType() { return $this->incubatorType;}
    public function setIncubatorType($value) { $this->incubatorType = $value; }

    public function clearUses() { $this->uses = 0; }
    public function getUses() { return $this->uses;}
    public function setUses($value) { $this->uses = $value; }

    public function clearDistanceMultiplier() { $this->distanceMultiplier = 0; }
    public function getDistanceMultiplier() { return $this->distanceMultiplier;}
    public function setDistanceMultiplier($value) { $this->distanceMultiplier = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('incubator_type', $this->incubatorType, \POGOProtos\Inventory\EggIncubatorType::INCUBATOR_UNSET)
           . Protobuf::toString('uses', $this->uses, 0)
           . Protobuf::toString('distance_multiplier', $this->distanceMultiplier, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.Item.EggIncubatorAttributes)
  }

}