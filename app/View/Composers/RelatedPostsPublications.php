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
        "partials.related-posts",
        "partials.related-publications",
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

        if (get_page_template_slug() == "template-whatwedo.blade.php") {
            return array_slice(
                \MB_Relationships_API::get_connected([
                    "id" => "posts_to_what_we_do",
                    "to" => $post->ID,
                ]),
                0,
                3
            );
        }

        if (get_page_template_slug() == "template-areaoffocus.blade.php") {
            return array_slice(
                \MB_Relationships_API::get_connected([
                    "id" => "posts_to_areas_of_focus",
                    "to" => $post->ID,
                ]),
                0,
                3
            );
        }
    }

    public function publications()
    {
        global $post;

        if (get_page_template_slug() == "template-whatwedo.blade.php") {
            return array_slice(
                \MB_Relationships_API::get_connected([
                    "id" => "publications_to_what_we_do",
                    "to" => $post->ID,
                ]),
                0,
                5
            );
        }

        if (get_page_template_slug() == "template-areaoffocus.blade.php") {
            return array_slice(
                \MB_Relationships_API::get_connected([
                    "id" => "publications_to_areas_of_focus",
                    "to" => $post->ID,
                ]),
                0,
                5
            );
        }
    }
}
