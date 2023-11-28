<?php 

class Production{
  public $title;
  public $language;
  public $rating;

  public function setRating($rating){
    if((is_numeric($rating) > 0 && is_numeric($rating) <= 5) ){
      $this->rating = intval($rating);
    }
    else{
      var_dump('Il parametro inserito non é valido');
    }
  }
  public function getRating(){
    return $this->rating;
  }
}

?>