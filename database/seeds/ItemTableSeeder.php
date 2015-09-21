<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Item;

class ItemTableSeeder extends Seeder {

  public function run()
  {
    Item::create(
      array(
        'title' => 'Item #1',
        'description' => 'Description for Item #1.'
      )
    );

    Item::create(
      array(
        'title' => 'Item #2',
        'description' => 'Description for Item #2.'
      )
    );
    
    Item::create(
      array(
        'title' => 'Item #3',
        'description' => 'Description for Item #3.'
      )
    );
  }
}
