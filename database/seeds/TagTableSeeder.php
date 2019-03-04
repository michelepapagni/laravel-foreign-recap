<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Dev', 'Html', 'Css', 'Docker', 'React', 'Sviluppo', 'Boolean'];

        foreach ($tags as $tag)
        {
            $newTag = new Tag;
            $newTag->title = $tag;
            $newTag->slug = Str::slug($tag);

            $newTag->save();
        }
    }
}
