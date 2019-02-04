<?php

use Illuminate\Database\Seeder;
use App\Post;

class TextSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::insert([
          [
              'id'             => 1,
              'aboutustitle'   => 'Lorem Ipsum Dolor Sit Amet',
              'aboutustext'    => 'Lorem Ipsum Dolor Sit Amet Dolor Sit Amet Ipsum Dolor Amet',
              'icon1title'     => 'Lorem Ipsum Dolor Sit Amet',
              'icontext1'      => 'Lorem Ipsum Dolor Sit Amet Dolor Sit Amet Ipsum Dolor Amet',
              'icon2title'     => 'Lorem Ipsum Dolor Sit Amet',
              'icontext2'      => 'Lorem Ipsum Dolor Sit Amet Dolor Sit Amet Ipsum Dolor Amet',
              'icon3title'     => 'Lorem Ipsum Dolor Sit Amet',
              'icontext3'      => 'Lorem Ipsum Dolor Sit Amet Dolor Sit Amet Ipsum Dolor Amet',
          ],
        ]);
    }
}
