<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Inventory {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // message POGOProtos.Inventory.EggIncubator
  final class EggIncubator extends ProtobufMessage {

    private $_unknown;
    private $id = ""; // optional string id = 1
    private $itemId = \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN; // optional .POGOProtos.Inventory.Item.ItemId item_id = 2
    private $incubatorType = \POGOProtos\Inventory\EggIncubatorType::INCUBATOR_UNSET; // optional .POGOProtos.Inventory.EggIncubatorType incubator_type = 3
    private $usesRemaining = 0; // optional int32 uses_remaining = 4
    private $pokemonId = 0; // optional uint64 pokemon_id = 5
    private $startKmWalked = 0; // optional double start_km_walked = 6
    private $targetKmWalked = 0; // optional double target_km_walked = 7

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
          case 1: // optional string id = 1
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->id = $tmp;

            break;
          case 2: // optional .POGOProtos.Inventory.Item.ItemId item_id = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->itemId = $tmp;

            break;
          case 3: // optional .POGOProtos.Inventory.EggIncubatorType incubator_type = 3
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->incubatorType = $tmp;

            break;
          case 4: // optional int32 uses_remaining = 4
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->usesRemaining = $tmp;

            break;
          case 5: // optional uint64 pokemon_id = 5
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_UINT64 || $tmp > Protobuf::MAX_UINT64) throw new \Exception('uint64 out of range');$this->pokemonId = $tmp;

            break;
          case 6: // optional double start_km_walked = 6
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->startKmWalked = $tmp;

            break;
          case 7: // optional double target_km_walked = 7
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->targetKmWalked = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->id !== "") {
        fwrite($fp, "\x0a", 1);
        Protobuf::write_varint($fp, strlen($this->id));
        fwrite($fp, $this->id);
      }
      if ($this->itemId !== \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->itemId);
      }
      if ($this->incubatorType !== \POGOProtos\Inventory\EggIncubatorType::INCUBATOR_UNSET) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $this->incubatorType);
      }
      if ($this->usesRemaining !== 0) {
        fwrite($fp, " ", 1);
        Protobuf::write_varint($fp, $this->usesRemaining);
      }
      if ($this->pokemonId !== 0) {
        fwrite($fp, "(", 1);
        Protobuf::write_varint($fp, $this->pokemonId);
      }
      if ($this->startKmWalked !== 0) {
        fwrite($fp, "1", 1);
        Protobuf::write_double($fp, $this->startKmWalked);
      }
      if ($this->targetKmWalked !== 0) {
        fwrite($fp, "9", 1);
        Protobuf::write_double($fp, $this->targetKmWalked);
      }
    }

    public function size() {
      $size = 0;
      if ($this->id !== "") {
        $l = strlen($this->id);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->itemId !== \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN) {
        $size += 1 + Protobuf::size_varint($this->itemId);
      }
      if ($this->incubatorType !== \POGOProtos\Inventory\EggIncubatorType::INCUBATOR_UNSET) {
        $size += 1 + Protobuf::size_varint($this->incubatorType);
      }
      if ($this->usesRemaining !== 0) {
        $size += 1 + Protobuf::size_varint($this->usesRemaining);
      }
      if ($this->pokemonId !== 0) {
        $size += 1 + Protobuf::size_varint($this->pokemonId);
      }
      if ($this->startKmWalked !== 0) {
        $size += 9;
      }
      if ($this->targetKmWalked !== 0) {
        $size += 9;
      }
      return $size;
    }

    public function clearId() { $this->id = ""; }
    public function getId() { return $this->id;}
    public function setId($value) { $this->id = $value; }

    public function clearItemId() { $this->itemId = \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN; }
    public function getItemId() { return $this->itemId;}
    public function setItemId($value) { $this->itemId = $value; }

    public function clearIncubatorType() { $this->incubatorType = \POGOProtos\Inventory\EggIncubatorType::INCUBATOR_UNSET; }
    public function getIncubatorType() { return $this->incubatorType;}
    public function setIncubatorType($value) { $this->incubatorType = $value; }

    public function clearUsesRemaining() { $this->usesRemaining = 0; }
    public function getUsesRemaining() { return $this->usesRemaining;}
    public function setUsesRemaining($value) { $this->usesRemaining = $value; }

    public function clearPokemonId() { $this->pokemonId = 0; }
    public function getPokemonId() { return $this->pokemonId;}
    public function setPokemonId($value) { $this->pokemonId = $value; }

    public function clearStartKmWalked() { $this->startKmWalked = 0; }
    public function getStartKmWalked() { return $this->startKmWalked;}
    public function setStartKmWalked($value) { $this->startKmWalked = $value; }

    public function clearTargetKmWalked() { $this->targetKmWalked = 0; }
    public function getTargetKmWalked() { return $this->targetKmWalked;}
    public function setTargetKmWalked($value) { $this->targetKmWalked = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('id', $this->id, "")
           . Protobuf::toString('item_id', $this->itemId, \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN)
           . Protobuf::toString('incubator_type', $this->incubatorType, \POGOProtos\Inventory\EggIncubatorType::INCUBATOR_UNSET)
           . Protobuf::toString('uses_remaining', $this->usesRemaining, 0)
           . Protobuf::toString('pokemon_id', $this->pokemonId, 0)
           . Protobuf::toString('start_km_walked', $this->startKmWalked, 0)
           . Protobuf::toString('target_km_walked', $this->targetKmWalked, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Inventory.EggIncubator)
  }

}