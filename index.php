<?php 

require_once __DIR__ . '/models/Production.php';
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/Serie.php';

$firstFilm = new Movie('Rocky','Italiano',4,1800,120);
$secondFilm = new Movie('Rocky','Italiano',4,1800,120);
$thirdFilm = new Movie('Rocky','Italiano',4,1800,120);
$fourthFilm = new Movie('Rocky','Italiano',4,1800,120);
$fifthFilm = new Movie('Rocky','Italiano',4,1800,120);

$firstSeries = new Serie('Stranger Things','italiano',2,2);
$secondSeries = new Serie('Silicon Valley','francese',4,1);
$thirdSeries = new Serie('The 100','italiano',3,5);
$fourthSeries = new Serie('Breaking Bad','spagnolo',2,3);
$fifthSeries = new Serie('Prison Break','inglese',5,5);

$film = new Movie('Rocky','Italiano',4,1800,120);
$serie = new Serie('str','it',5,2);


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
  $fifthSeries, 
];

foreach($items as $item){
  echo $item->returnData();
}

//echo 'Il film si chiama: '.$firstFilm->title.'<br> la lingua é: '.$firstFilm->language.'<br> con valutazione di: '.$firstFilm->getRating().'<br>';
/*$secondFilm->title = 'Stranger things';
$secondFilm->language = 'inglese';
$secondFilm->setRating(2);*/

//echo 'Il film si chiama: '.$secondFilm->title.'<br> la lingua é: '.$secondFilm->language.'<br> con valutazione di: '.$secondFilm->getRating();


?>