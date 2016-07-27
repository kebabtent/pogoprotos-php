<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Settings\Master\Pokemon {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // message POGOProtos.Settings.Master.Pokemon.EncounterAttributes
  final class EncounterAttributes extends ProtobufMessage {

    private $_unknown;
    private $baseCaptureRate = 0; // optional float base_capture_rate = 1
    private $baseFleeRate = 0; // optional float base_flee_rate = 2
    private $collisionRadiusM = 0; // optional float collision_radius_m = 3
    private $collisionHeightM = 0; // optional float collision_height_m = 4
    private $collisionHeadRadiusM = 0; // optional float collision_head_radius_m = 5
    private $movementType = \POGOProtos\Enums\PokemonMovementType::MOVEMENT_STATIC; // optional .POGOProtos.Enums.PokemonMovementType movement_type = 6
    private $movementTimerS = 0; // optional float movement_timer_s = 7
    private $jumpTimeS = 0; // optional float jump_time_s = 8
    private $attackTimerS = 0; // optional float attack_timer_s = 9

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
          case 1: // optional float base_capture_rate = 1
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->baseCaptureRate = $tmp;

            break;
          case 2: // optional float base_flee_rate = 2
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->baseFleeRate = $tmp;

            break;
          case 3: // optional float collision_radius_m = 3
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->collisionRadiusM = $tmp;

            break;
          case 4: // optional float collision_height_m = 4
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->collisionHeightM = $tmp;

            break;
          case 5: // optional float collision_head_radius_m = 5
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->collisionHeadRadiusM = $tmp;

            break;
          case 6: // optional .POGOProtos.Enums.PokemonMovementType movement_type = 6
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->movementType = $tmp;

            break;
          case 7: // optional float movement_timer_s = 7
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->movementTimerS = $tmp;

            break;
          case 8: // optional float jump_time_s = 8
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->jumpTimeS = $tmp;

            break;
          case 9: // optional float attack_timer_s = 9
            if($wire !== 5) {
              throw new \Exception("Incorrect wire format for field $field, expected: 5 got: $wire");
            }
            $tmp = Protobuf::read_float($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_float returned false');
            $this->attackTimerS = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->baseCaptureRate !== 0) {
        fwrite($fp, "\x0d", 1);
        Protobuf::write_float($fp, $this->baseCaptureRate);
      }
      if ($this->baseFleeRate !== 0) {
        fwrite($fp, "\x15", 1);
        Protobuf::write_float($fp, $this->baseFleeRate);
      }
      if ($this->collisionRadiusM !== 0) {
        fwrite($fp, "\x1d", 1);
        Protobuf::write_float($fp, $this->collisionRadiusM);
      }
      if ($this->collisionHeightM !== 0) {
        fwrite($fp, "%", 1);
        Protobuf::write_float($fp, $this->collisionHeightM);
      }
      if ($this->collisionHeadRadiusM !== 0) {
        fwrite($fp, "-", 1);
        Protobuf::write_float($fp, $this->collisionHeadRadiusM);
      }
      if ($this->movementType !== \POGOProtos\Enums\PokemonMovementType::MOVEMENT_STATIC) {
        fwrite($fp, "0", 1);
        Protobuf::write_varint($fp, $this->movementType);
      }
      if ($this->movementTimerS !== 0) {
        fwrite($fp, "=", 1);
        Protobuf::write_float($fp, $this->movementTimerS);
      }
      if ($this->jumpTimeS !== 0) {
        fwrite($fp, "E", 1);
        Protobuf::write_float($fp, $this->jumpTimeS);
      }
      if ($this->attackTimerS !== 0) {
        fwrite($fp, "M", 1);
        Protobuf::write_float($fp, $this->attackTimerS);
      }
    }

    public function size() {
      $size = 0;
      if ($this->baseCaptureRate !== 0) {
        $size += 5;
      }
      if ($this->baseFleeRate !== 0) {
        $size += 5;
      }
      if ($this->collisionRadiusM !== 0) {
        $size += 5;
      }
      if ($this->collisionHeightM !== 0) {
        $size += 5;
      }
      if ($this->collisionHeadRadiusM !== 0) {
        $size += 5;
      }
      if ($this->movementType !== \POGOProtos\Enums\PokemonMovementType::MOVEMENT_STATIC) {
        $size += 1 + Protobuf::size_varint($this->movementType);
      }
      if ($this->movementTimerS !== 0) {
        $size += 5;
      }
      if ($this->jumpTimeS !== 0) {
        $size += 5;
      }
      if ($this->attackTimerS !== 0) {
        $size += 5;
      }
      return $size;
    }

    public function clearBaseCaptureRate() { $this->baseCaptureRate = 0; }
    public function getBaseCaptureRate() { return $this->baseCaptureRate;}
    public function setBaseCaptureRate($value) { $this->baseCaptureRate = $value; }

    public function clearBaseFleeRate() { $this->baseFleeRate = 0; }
    public function getBaseFleeRate() { return $this->baseFleeRate;}
    public function setBaseFleeRate($value) { $this->baseFleeRate = $value; }

    public function clearCollisionRadiusM() { $this->collisionRadiusM = 0; }
    public function getCollisionRadiusM() { return $this->collisionRadiusM;}
    public function setCollisionRadiusM($value) { $this->collisionRadiusM = $value; }

    public function clearCollisionHeightM() { $this->collisionHeightM = 0; }
    public function getCollisionHeightM() { return $this->collisionHeightM;}
    public function setCollisionHeightM($value) { $this->collisionHeightM = $value; }

    public function clearCollisionHeadRadiusM() { $this->collisionHeadRadiusM = 0; }
    public function getCollisionHeadRadiusM() { return $this->collisionHeadRadiusM;}
    public function setCollisionHeadRadiusM($value) { $this->collisionHeadRadiusM = $value; }

    public function clearMovementType() { $this->movementType = \POGOProtos\Enums\PokemonMovementType::MOVEMENT_STATIC; }
    public function getMovementType() { return $this->movementType;}
    public function setMovementType($value) { $this->movementType = $value; }

    public function clearMovementTimerS() { $this->movementTimerS = 0; }
    public function getMovementTimerS() { return $this->movementTimerS;}
    public function setMovementTimerS($value) { $this->movementTimerS = $value; }

    public function clearJumpTimeS() { $this->jumpTimeS = 0; }
    public function getJumpTimeS() { return $this->jumpTimeS;}
    public function setJumpTimeS($value) { $this->jumpTimeS = $value; }

    public function clearAttackTimerS() { $this->attackTimerS = 0; }
    public function getAttackTimerS() { return $this->attackTimerS;}
    public function setAttackTimerS($value) { $this->attackTimerS = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('base_capture_rate', $this->baseCaptureRate, 0)
           . Protobuf::toString('base_flee_rate', $this->baseFleeRate, 0)
           . Protobuf::toString('collision_radius_m', $this->collisionRadiusM, 0)
           . Protobuf::toString('collision_height_m', $this->collisionHeightM, 0)
           . Protobuf::toString('collision_head_radius_m', $this->collisionHeadRadiusM, 0)
           . Protobuf::toString('movement_type', $this->movementType, \POGOProtos\Enums\PokemonMovementType::MOVEMENT_STATIC)
           . Protobuf::toString('movement_timer_s', $this->movementTimerS, 0)
           . Protobuf::toString('jump_time_s', $this->jumpTimeS, 0)
           . Protobuf::toString('attack_timer_s', $this->attackTimerS, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.Pokemon.EncounterAttributes)
  }

}