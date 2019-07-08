<?php
use App\Post;
use App\Category;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1= Category::create([
            'name'=>'News'

        ]);

        $author1 = User::create([
            'name'=>'john china',
            'email'=>'john@gmail.com',
            'password'=>Hash::make('password')

        ]);

        $author2 = User::create([
            'name'=>'johny ',
            'email'=>'johny@gmail.com',
            'password'=>Hash::make('password')

        ]);

        $category2= Category::create([
            'name'=>'Health'

        ]);
        $category3= Category::create([
            'name'=>'Politics'

        ]);
        $category4= Category::create([
            'name'=>'Science'

        ]);
        $post1 = $author1->posts()->create([
            'title'=>'We relocated our office to a new designed garage',
            'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            'content'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,'",
            'category_id' => $category1->id,
            'image'=>'posts/1.jpg',
            



        ]);

        $post2 = $author2->posts()->create([
            'title'=>'Top 5 brilliant content marketing strategies',
            'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            'content'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,'",
            'category_id' => $category2->id,
            'image'=>'posts/2.jpg'



        ]);
        $post3 = $author1->posts()->create([
            'title'=>'Best practices for minimalist design with example',
            'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            'content'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,'",
            'category_id' => $category3->id,
            'image'=>'posts/3.jpg'



        ]);
        $post4 = $author2->posts()->create([
            'title'=>"This is why it's time to ditch dress codes at work",
            'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            'content'=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,'",
            'category_id' => $category2->id,
            'image'=>'posts/4.jpg'



        ]);

        $tag1= Tag::create([
            'name'=>'record'

        ]);

        $tag2= Tag::create([
            'name'=>'job'

        ]);

        $tag3= Tag::create([
            'name'=>'customers'

        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag1->id, $tag3->id]);
        $post3->tags()->attach([$tag3->id, $tag2->id]);
        $post4->tags()->attach([$tag1->id, $tag2->id, $tag3->id]);

    }
}
