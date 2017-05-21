<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    private static $tags = [
        'Спорт',
        'Юмор',
        'Музыка',
        'Политика',
        'Президент',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $this->createTags($faker);
        $this->createArticles($faker);
    }

    private function createTags(\Faker\Generator $faker)
    {
        $table = $this->getTable('tags');

        foreach(static::$tags as $tag){
            $table->insert([
                'name' => $tag,
                'slug' => str_slug($tag)
            ]);
        }
    }

    private function createArticles(\Faker\Generator $faker)
    {
        $table = $this->getTable('articles');
        factory(\App\Article::class, 100)->create();
    }

    /**
     * @param $name
     * @return \Illuminate\Database\Query\Builder
     */
    private function getTable($name)
    {
        $table = \DB::table($name);
        $table->truncate();

        return $table;
    }
}
