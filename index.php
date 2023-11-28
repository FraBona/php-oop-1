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

  function __construct($_title, $_language, $_rating){
    $this->title = $_title;
    $this->language = $_language;
    $this->setRating($_rating);
  }
}

$firstFilm = new Production('Rocky','Italiano',4);
/*$firstFilm->title = 'Rocky';
$firstFilm->language = 'italiano';
$firstFilm->setRating(4);*/

echo 'Il film si chiama: '.$firstFilm->title.'<br> la lingua é: '.$firstFilm->language.'<br> con valutazione di: '.$firstFilm->getRating().'<br>';

$secondFilm = new Production('Stranger Things','francese',5);
/*$secondFilm->title = 'Stranger things';
$secondFilm->language = 'inglese';
$secondFilm->setRating(2);*/

echo 'Il film si chiama: '.$secondFilm->title.'<br> la lingua é: '.$secondFilm->language.'<br> con valutazione di: '.$secondFilm->getRating();


?>