<?
class Cards {
    public $suit;
    public $value;
    function _construct($attributes) {
        $this->suit = $attributes["suit"];
        $this->value = $attributes["value"];
    }
}
?>