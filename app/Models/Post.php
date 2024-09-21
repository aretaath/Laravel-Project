<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'article-1',
                'title' => 'Article 1',
                'author' => 'Author',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales aliquam nulla, eu tincidunt ligula convallis id. 
                Quisque vestibulum iaculis tellus, rutrum pretium erat pellentesque non. Nulla pellentesque, felis in aliquet commodo, erat diam semper magna, porttitor rhoncus nulla sem nec dolor. 
                Phasellus at lacus tristique, fringilla mauris ut, mattis nunc. Mauris ornare nisi lectus, in sodales nisi hendrerit nec. Proin ut scelerisque ligula. 
                Quisque blandit tellus nec aliquam tincidunt. Sed sed laoreet est. Donec id varius odio. Pellentesque gravida bibendum blandit. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. 
                Etiam imperdiet mauris quis vehicula vestibulum.',
            ],
            [
                'id' => 2,
                'slug' => 'article-2',
                'title' => 'Article 2',
                'author' => 'Author',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales aliquam nulla, eu tincidunt ligula convallis id. 
                Quisque vestibulum iaculis tellus, rutrum pretium erat pellentesque non. Nulla pellentesque, felis in aliquet commodo, erat diam semper magna, porttitor rhoncus nulla sem nec dolor. 
                Phasellus at lacus tristique, fringilla mauris ut, mattis nunc. Mauris ornare nisi lectus, in sodales nisi hendrerit nec. Proin ut scelerisque ligula. 
                Quisque blandit tellus nec aliquam tincidunt. Sed sed laoreet est. Donec id varius odio. Pellentesque gravida bibendum blandit. 
                Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. 
                Etiam imperdiet mauris quis vehicula vestibulum.',
            ],
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(!$post){
            abort(404);
        }

        return $post;
    }
}