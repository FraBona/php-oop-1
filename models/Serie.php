<?php 

require_once __DIR__ . "/Production.php";

class Serie extends Production{
  public $season;

  public function setSeason($season){
    if(is_numeric($season) && $season > 0){
      intval($season);
    }
  }

  public function getSeason(){
    return $this->season;
  }


  function __construct($_title, $_language, $_rating, $_season){
    $this->title = $_title;
    $this->language = $_language;
    $this->setRating($_rating);
    $this->setSeason($_season);
  }

  public function returnData(){
    return "Titolo: $this->title <br> Lingua: $this->language <br> Rating: ". $this->getRating(). " <br> Season: ". $this->getSeason(). " <br>";
  }

}