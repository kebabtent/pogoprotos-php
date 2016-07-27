<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Networking\Requests\Messages {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // message POGOProtos.Networking.Requests.Messages.CatchPokemonMessage
  final class CatchPokemonMessage extends ProtobufMessage {

    private $_unknown;
    private $encounterId = 0; // optional fixed64 encounter_id = 1
    private $pokeball = \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN; // optional .POGOProtos.Inventory.Item.ItemId pokeball = 2
    private $normalizedReticleSize = 0; // optional double normalized_reticle_size = 3
    private $spawnPointId = ""; // optional string spawn_point_id = 4
    private $hitPokemon = false; // optional bool hit_pokemon = 5
    private $spinModifier = 0; // optional double spin_modifier = 6
    private $normalizedHitPosition = 0; // optional double normalized_hit_position = 7

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
          case 1: // optional fixed64 encounter_id = 1
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_uint64($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_unint64 returned false');
            $this->encounterId = $tmp;

            break;
          case 2: // optional .POGOProtos.Inventory.Item.ItemId pokeball = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->pokeball = $tmp;

            break;
          case 3: // optional double normalized_reticle_size = 3
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->normalizedReticleSize = $tmp;

            break;
          case 4: // optional string spawn_point_id = 4
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $tmp = Protobuf::read_bytes($fp, $len, $limit);
            if ($tmp === false) throw new \Exception("read_bytes($len) returned false");
            $this->spawnPointId = $tmp;

            break;
          case 5: // optional bool hit_pokemon = 5
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->hitPokemon = ($tmp > 0) ? true : false;

            break;
          case 6: // optional double spin_modifier = 6
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->spinModifier = $tmp;

            break;
          case 7: // optional double normalized_hit_position = 7
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_double($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_double returned false');
            $this->normalizedHitPosition = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->encounterId !== 0) {
        fwrite($fp, "\x09", 1);
        Protobuf::write_uint64($fp, $this->encounterId);
      }
      if ($this->pokeball !== \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->pokeball);
      }
      if ($this->normalizedReticleSize !== 0) {
        fwrite($fp, "\x19", 1);
        Protobuf::write_double($fp, $this->normalizedReticleSize);
      }
      if ($this->spawnPointId !== "") {
        fwrite($fp, "\"", 1);
        Protobuf::write_varint($fp, strlen($this->spawnPointId));
        fwrite($fp, $this->spawnPointId);
      }
      if ($this->hitPokemon !== false) {
        fwrite($fp, "(", 1);
        Protobuf::write_varint($fp, $this->hitPokemon ? 1 : 0);
      }
      if ($this->spinModifier !== 0) {
        fwrite($fp, "1", 1);
        Protobuf::write_double($fp, $this->spinModifier);
      }
      if ($this->normalizedHitPosition !== 0) {
        fwrite($fp, "9", 1);
        Protobuf::write_double($fp, $this->normalizedHitPosition);
      }
    }

    public function size() {
      $size = 0;
      if ($this->encounterId !== 0) {
        $size += 9;
      }
      if ($this->pokeball !== \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN) {
        $size += 1 + Protobuf::size_varint($this->pokeball);
      }
      if ($this->normalizedReticleSize !== 0) {
        $size += 9;
      }
      if ($this->spawnPointId !== "") {
        $l = strlen($this->spawnPointId);
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->hitPokemon !== false) {
        $size += 2;
      }
      if ($this->spinModifier !== 0) {
        $size += 9;
      }
      if ($this->normalizedHitPosition !== 0) {
        $size += 9;
      }
      return $size;
    }

    public function clearEncounterId() { $this->encounterId = 0; }
    public function getEncounterId() { return $this->encounterId;}
    public function setEncounterId($value) { $this->encounterId = $value; }

    public function clearPokeball() { $this->pokeball = \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN; }
    public function getPokeball() { return $this->pokeball;}
    public function setPokeball($value) { $this->pokeball = $value; }

    public function clearNormalizedReticleSize() { $this->normalizedReticleSize = 0; }
    public function getNormalizedReticleSize() { return $this->normalizedReticleSize;}
    public function setNormalizedReticleSize($value) { $this->normalizedReticleSize = $value; }

    public function clearSpawnPointId() { $this->spawnPointId = ""; }
    public function getSpawnPointId() { return $this->spawnPointId;}
    public function setSpawnPointId($value) { $this->spawnPointId = $value; }

    public function clearHitPokemon() { $this->hitPokemon = false; }
    public function getHitPokemon() { return $this->hitPokemon;}
    public function setHitPokemon($value) { $this->hitPokemon = $value; }

    public function clearSpinModifier() { $this->spinModifier = 0; }
    public function getSpinModifier() { return $this->spinModifier;}
    public function setSpinModifier($value) { $this->spinModifier = $value; }

    public function clearNormalizedHitPosition() { $this->normalizedHitPosition = 0; }
    public function getNormalizedHitPosition() { return $this->normalizedHitPosition;}
    public function setNormalizedHitPosition($value) { $this->normalizedHitPosition = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('encounter_id', $this->encounterId, 0)
           . Protobuf::toString('pokeball', $this->pokeball, \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN)
           . Protobuf::toString('normalized_reticle_size', $this->normalizedReticleSize, 0)
           . Protobuf::toString('spawn_point_id', $this->spawnPointId, "")
           . Protobuf::toString('hit_pokemon', $this->hitPokemon, false)
           . Protobuf::toString('spin_modifier', $this->spinModifier, 0)
           . Protobuf::toString('normalized_hit_position', $this->normalizedHitPosition, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Messages.CatchPokemonMessage)
  }

}