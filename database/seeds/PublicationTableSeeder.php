<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Publication;

class PublicationTableSeeder extends Seeder {

  public function run()
  {
    Publication::create(
      array(
        'title' => 'Publication #1',
        'text' => 'Text for Publication #1.'
      )
    );

    Publication::create(
      array(
        'title' => 'Publication #2',
        'text' => 'Text for Publication #2.'
      )
    );
    
    Publication::create(
      array(
        'title' => 'Publication #3',
        'text' => 'Text for Publication #3.'
      )
    );
  }
}
