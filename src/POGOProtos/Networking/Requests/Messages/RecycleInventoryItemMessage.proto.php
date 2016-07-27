<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Networking\Requests\Messages {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // message POGOProtos.Networking.Requests.Messages.RecycleInventoryItemMessage
  final class RecycleInventoryItemMessage extends ProtobufMessage {

    private $_unknown;
    private $itemId = \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN; // optional .POGOProtos.Inventory.Item.ItemId item_id = 1
    private $count = 0; // optional int32 count = 2

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
          case 1: // optional .POGOProtos.Inventory.Item.ItemId item_id = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->itemId = $tmp;

            break;
          case 2: // optional int32 count = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->count = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->itemId !== \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->itemId);
      }
      if ($this->count !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->count);
      }
    }

    public function size() {
      $size = 0;
      if ($this->itemId !== \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN) {
        $size += 1 + Protobuf::size_varint($this->itemId);
      }
      if ($this->count !== 0) {
        $size += 1 + Protobuf::size_varint($this->count);
      }
      return $size;
    }

    public function clearItemId() { $this->itemId = \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN; }
    public function getItemId() { return $this->itemId;}
    public function setItemId($value) { $this->itemId = $value; }

    public function clearCount() { $this->count = 0; }
    public function getCount() { return $this->count;}
    public function setCount($value) { $this->count = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('item_id', $this->itemId, \POGOProtos\Inventory\Item\ItemId::ITEM_UNKNOWN)
           . Protobuf::toString('count', $this->count, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Requests.Messages.RecycleInventoryItemMessage)
  }

}