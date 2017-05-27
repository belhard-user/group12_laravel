<?php

use App\Article;
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
        'Обама',
        'Природа'
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
        $table->truncate();

        foreach(static::$tags as $tag){
            $table->insert([
                'name' => $tag,
                'slug' => str_slug($tag)
            ]);
        }
    }

    private function createArticles(\Faker\Generator $faker)
    {
        // $table = $this->getTable('articles');
        $tagList = \App\Tag::pluck('id');
        Article::truncate();

        for($i = 0; $i < 100; $i++){
            $title = $faker->sentence();
            $dateTime = $faker->dateTimeBetween();

            $table = Article::create([
                'title' => $title,
                'slug' => str_slug($title),
                'short_description' => $faker->text(),
                'body' => $faker->text(2000),
                'created_at' => $dateTime,
                'updated_at' => $dateTime,
                'user_id' => factory(App\User::class)->create()->id
            ]);

            $table->tags()->attach(
                $tagList->random( rand(1, $tagList->count()) )
            );
        }
        // factory(\App\Article::class, 100)->create();
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
