<?php 

require_once __DIR__ . '/models/Production.php';

$firstFilm = new Production('Rocky','Italiano',4);
$secondFilm = new Production('Silvester','francese',5);
$thirdFilm = new Production('Titanic','italiano',3);
$fourthFilm = new Production('Casino','francese',5);
$fifthFilm = new Production('Bronx','italiano',2);

$firstSeries = new Production('Stranger Things','italiano',2);
$secondSeries = new Production('Silicon Valley','francese',4);
$thirdSeries = new Production('The 100','italiano',3);
$fourthSeries = new Production('Breaking Bad','spagnolo',2);
$fifthSeries = new Production('Prison Break','inglese',5);

$items = [
  $firstFilm,
  $secondFilm,
  $thirdFilm,
  $fourthFilm,
  $fifthFilm,
  $firstSeries,
  $secondSeries,
  $thirdSeries,
  $fourthSeries,
  $fifthSeries
];

foreach($items as $item){
  echo "Titolo: $item->title <br> Lingua: $item->language <br> Rating: ". $item->getRating(). " <br>";
}

//echo 'Il film si chiama: '.$firstFilm->title.'<br> la lingua é: '.$firstFilm->language.'<br> con valutazione di: '.$firstFilm->getRating().'<br>';
/*$secondFilm->title = 'Stranger things';
$secondFilm->language = 'inglese';
$secondFilm->setRating(2);*/

//echo 'Il film si chiama: '.$secondFilm->title.'<br> la lingua é: '.$secondFilm->language.'<br> con valutazione di: '.$secondFilm->getRating();


?>