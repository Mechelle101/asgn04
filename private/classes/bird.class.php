<?php

class Bird {

  public $common_name;
  public $habitat;
  public $food;
  public $nest_placement;
  public $behavior;
  public $conservation_id = 1;
  public $backyard_tips;

  protected const CONSERVATION_OPTIONS = [
    1 => 'Low Concern',
    2 => 'Moderate Concern',
    3 => 'High Concern',
    4 => 'Extreme Concern'
  ];

  public function __construct($args=[]) {
    $this->common_name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nest_placement = $args['nest_placement'] ?? '';
    $this->behavior = $args['behavior'] ?? '';
    $this->conservation_id = $args['conservation_id'] ?? 1;
    $this->backyard_tips = $args['backyard_tips'] ?? '';
  }

// BUT SO I NEED THIS BECAUSE I SET IT TO PUBLIC ABOVE???
  public function conservation() {
    if($this->conservation_id > 0) {
      return self::CONSERVATION_OPTIONS[$this->conservation_id];
    } else {
      return "Unknown";
    }
  }

}

?>
