<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Log1x\Navi\Navi;

class RelatedPostsPublications extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        "partials.area-of-focus-posts",
        "partials.area-of-focus-publications",
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            "posts" => $this->posts(),
            "publications" => $this->publications(),
        ];
    }

    public function posts()
    {
        global $post;
        return \MB_Relationships_API::get_connected([
            "id" => "posts_to_areas_of_focus",
            "to" => $post->ID,
        ]);
    }

    public function publications()
    {
        global $post;
        return \MB_Relationships_API::get_connected([
            "id" => "publications_to_areas_of_focus",
            "to" => $post->ID,
        ]);
    }
}
