<?php

class Production{
  public $title;
  public $language;
  public $rating;

  public function setRating($rating){
    if((is_numeric($rating) && $rating > 0 && $rating <= 5) ){
      $this->rating = intval($rating);
    }
    else{
      var_dump('Il parametro inserito non é valido');
    }
  }
  public function getRating(){
    return $this->rating;
  }

  function __construct($_title, $_language, $_rating){
    $this->title = $_title;
    $this->language = $_language;
    $this->setRating($_rating);
  }
}