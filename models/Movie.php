<?php 

require_once __DIR__ . "/Production.php";

class Movie extends Production{
  public $profit;
  public $duration;

  public function setProfit($profit){
    if(is_numeric($profit)){
      $this->profit = intval($profit);
    }
  }
  public function setDuration($duration){
    if(is_numeric($duration) && $duration > 0){
      $this->duration = intval($duration);
    }
  }

  public function getProfit(){
    return $this->profit;
  }

  public function getDuration(){
    return $this->duration;
  }

  function __construct($_title, $_language, $_rating, $_profit, $_duration){
    $this->title = $_title;
    $this->language = $_language;
    $this->setRating($_rating);
    $this->setProfit($_profit);
    $this->setDuration($_duration);
  }

  public function returnData(){
    return "Titolo: $this->title <br> Lingua: $this->language <br> Rating: ". $this->getRating(). " <br>". $this->getProfit(). " <br>". $this->getDuration(). " <br>";
  }
}