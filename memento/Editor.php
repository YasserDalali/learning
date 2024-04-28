<?php
class PlayerStats {
    private $HP;
    private $inventory;
    private $level;

    public function __construct($HP, $inventory, $level) {
        $this->HP = $HP;
        $this->inventory = $inventory;
        $this->level = $level;
    }

    public function setHP($HP) {
        $this->HP = $HP;
    }
    public function setLevel ($level) {
        $this->level = $level;
    }
    public function setInventory ($inventory) {
        $this->inventory = $inventory;
    }

    public function save() {
        return new CheckPoint($this->HP, $this->inventory, $this->level);
    }

    public function restore(CheckPoint $checkpoint) {
        $this->HP = $checkpoint->getHP();
        $this->inventory = $checkpoint->getInventory();
        $this->level = $checkpoint->getLevel();
/*         return CheckPoint->getState();*/
    }

    public function DisplayStats() {
        echo "<h1>Player Stats:</h1>"; 
        echo "<ul> <li>Current HP: {$this->HP}/200 <br>
        <li>Current Inventory: ". implode(" | " , $this->inventory) . "<br>
        <li>Current Level: {$this->level} <br></ul>";
    }

}


class CheckPoint {    
    private $HP;
    private $inventory;
    private $level;

    public function __construct($HP, $inventory, $level) {
        $this->HP = $HP;
        $this->inventory = $inventory;
        $this->level = $level;

        MemoryCard::appendToCard($this);
    }
    public function getHP() {
        return $this->HP;
    }

    public function getInventory() {
        return $this->inventory;
    }

    public function getLevel() {
        return $this->level;
    }
}


class MemoryCard {
    private static $saves = [];

    public static function appendToCard(CheckPoint $checkPoint)
    {
        self::$saves[] = $checkPoint;
    }

    public static function popFromCard()
    {
        array_pop(self::$saves[]);
    }

    public static function get_LastCardSlot() {
        return self::$saves[count(self::$saves) -1];
    }
}
