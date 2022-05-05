<?php
    Class Car {
    private $tank;

    public function setTank($gallons) {
        $this->tank = $gallons;
        return $this;
    }

    public function ride($kilometers){
        $this->tank -= ($kilometers/20);
        return $this;
    }

    public function getTank() {
        return $this->tank;
    }
}
?>
