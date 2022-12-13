<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Publication extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // 'partials.page-header',
        // 'partials.content',
        "partials.content-single-resource",
        "partials.resource-header",
        "archive-publication",
        "partials.publication-sidebar",
        "taxonomy-resource",
    ];

    public function with()
    {
        if (is_singular()) {
            global $post;

            return [
                // "file_upload" => get_field("file_upload", $post->ID),
                // "file_oembed" => get_field("file_oembed", $post->ID),
                // "external_url" => get_field("external_url", $post->ID),
                // "resource_types" =>
                //     get_the_terms($post->ID, "resourcetype") ?? [],
                // "resource_keylearnings" =>
                //     get_the_terms($post->ID, "resourcekeylearning") ?? [],
                "types" => get_terms([
                    "taxonomy" => "resourcetype",
                    "hide_empty" => false,
                ]),
                "areas_of_focus" => get_posts([
                    "post_type" => "page",
                    "meta_key" => "_wp_page_template",
                    "meta_value" => "template-areaoffocus.blade.php",
                ]),
            ];
        } else {
            return [
                "post" => get_post(get_option("page_for_publications")),
                "types" => get_terms([
                    "taxonomy" => "resourcetype",
                    "hide_empty" => false,
                ]),
                "latest_publications" => get_posts([
                    "post_type" => "publication",
                    "numberposts" => 3,
                ]),
                "areas_of_focus" => get_posts([
                    "post_type" => "page",
                    "meta_key" => "_wp_page_template",
                    "meta_value" => "template-areaoffocus.blade.php",
                    "numberposts" => -1,
                ]),
            ];

            // "keylearnings" => get_terms([
            //     "taxonomy" => "resourcekeylearning",
            //     "hide_empty" => true,
            // ]),
        }
    }
}
