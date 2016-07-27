<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Networking\Responses {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // enum POGOProtos.Networking.Responses.UseIncenseResponse.Result
  abstract class UseIncenseResponse_Result extends ProtobufEnum {
    const UNKNOWN = 0;
    const SUCCESS = 1;
    const INCENSE_ALREADY_ACTIVE = 2;
    const NONE_IN_INVENTORY = 3;
    const LOCATION_UNSET = 4;

    public static $_values = array(
      0 => "UNKNOWN",
      1 => "SUCCESS",
      2 => "INCENSE_ALREADY_ACTIVE",
      3 => "NONE_IN_INVENTORY",
      4 => "LOCATION_UNSET",
    );

    public static function isValid($value) {
      return array_key_exists($value, self::$_values);
    }

    public static function toString($value) {
      checkArgument(is_int($value), 'value must be a integer');
      if (array_key_exists($value, self::$_values))
        return self::$_values[$value];
      return 'UNKNOWN';
    }
  }

  // message POGOProtos.Networking.Responses.UseIncenseResponse
  final class UseIncenseResponse extends ProtobufMessage {

    private $_unknown;
    private $result = \POGOProtos\Networking\Responses\UseIncenseResponse_Result::UNKNOWN; // optional .POGOProtos.Networking.Responses.UseIncenseResponse.Result result = 1
    private $appliedIncense = null; // optional .POGOProtos.Inventory.AppliedItem applied_incense = 2

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
          case 1: // optional .POGOProtos.Networking.Responses.UseIncenseResponse.Result result = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->result = $tmp;

            break;
          case 2: // optional .POGOProtos.Inventory.AppliedItem applied_incense = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->appliedIncense = new \POGOProtos\Inventory\AppliedItem($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Inventory\AppliedItem did not read the full length');

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->result !== \POGOProtos\Networking\Responses\UseIncenseResponse_Result::UNKNOWN) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->result);
      }
      if ($this->appliedIncense !== null) {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, $this->appliedIncense->size());
        $this->appliedIncense->write($fp);
      }
    }

    public function size() {
      $size = 0;
      if ($this->result !== \POGOProtos\Networking\Responses\UseIncenseResponse_Result::UNKNOWN) {
        $size += 1 + Protobuf::size_varint($this->result);
      }
      if ($this->appliedIncense !== null) {
        $l = $this->appliedIncense->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearResult() { $this->result = \POGOProtos\Networking\Responses\UseIncenseResponse_Result::UNKNOWN; }
    public function getResult() { return $this->result;}
    public function setResult($value) { $this->result = $value; }

    public function clearAppliedIncense() { $this->appliedIncense = null; }
    public function getAppliedIncense() { return $this->appliedIncense;}
    public function setAppliedIncense(\POGOProtos\Inventory\AppliedItem $value) { $this->appliedIncense = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('result', $this->result, \POGOProtos\Networking\Responses\UseIncenseResponse_Result::UNKNOWN)
           . Protobuf::toString('applied_incense', $this->appliedIncense, null);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Responses.UseIncenseResponse)
  }

}