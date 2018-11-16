<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pelicula/{id}', 'PeliculasController@buscarPeliculaId');

Route::get(' /peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');


 Route::get('/peliculas', 'PeliculasController@retornoArray');



// Route::get('/peliculas', function () {
//     $myTitle = "<h2> Listado de Películas </h2>";
//     $peliculas = [
//                  ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
//                  ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
//                  ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
//                  ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
//                  ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
//                  ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
//                  ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
//                  ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
//                  ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
//                  ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
//                  ];
//     echo $myTitle;
//     echo '<ul>';
//     $li = '';
//     foreach ($peliculas as $key => $peli) {
//       $imgStyle = 'width="100" height="100"';
//       $img = '<img src ='.$peli['poster'].' '.$imgStyle.'>';
//       $li = $li.'<li><a href= "/pelicula/'.$peli['title'].'">'.$peli['title'].$img.'</a></li>';
//     }
//     echo $li;
//     echo '</ul>';
// });

Route::get('/pelicula/{titulo}', function ($titulo) {
  $peliculas = [
               ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
               ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
               ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
               ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
               ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
               ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
               ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
               ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
               ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
               ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
               ];
  foreach ($peliculas as $key => $peli) {
    $res = '<h2>Esa película no existe en la base de datos</h2>';
    if($titulo===$peli['title']){
      $res = '<h3>Info de la película: '.$peli['title'].'</h3>';
      $res =  $res.'<ul>';
      $li = '<li>'.$peli['genre'].'</li>';
      $li = $li.'<li>'.$peli['poster'].'</li>';
      $res= $res.$li;
      $res = $res.'</ul>';
      break;
    }
  }

    return $res;;
});
