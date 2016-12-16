<?php

namespace App\Service;

use \App\PRODUCT;
use DB;

class GenreService{
  public function getNovels()
  {
    $novels = PRODUCT::where('genre_id',1)
    ->limit(4)
    ->get();

    return $novels;
  }
  public function getMangas()
  {
    $mangas = PRODUCT::where('genre_id',2)
    ->limit(4)
    ->get();

    return $mangas;
  }
  public function getPicturebooks(){
    $picturebooks = PRODUCT::where('genre_id',4)
    ->limit(4)
    ->get();

    return $picturebooks;
  }
  public function getSpecialties()
  {
    $specialties = PRODUCT::where('genre_id',3)
    ->limit(4)
    ->get();

    return $specialties;
  }
}
