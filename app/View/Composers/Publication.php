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
        "partials.content-single-publication",
        "partials.publication-header",
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
                    "order" => "ASC",
                    "orderby" => "menu_order",
                    "hide_empty" => false,
                    "numberposts" => -1,
                ]),
                "publication_files" => rwmb_get_value(
                    "file_advanced",
                    null,
                    null,
                    false
                ),
                "publication_types" => get_the_terms($post->ID, "resourcetype"),
                "publication_what_we_dos" => \MB_Relationships_API::get_connected(
                    [
                        "id" => "publications_to_what_we_do",
                        "from" => get_the_ID(),
                    ]
                ),
                "publication_areas_of_focus" => \MB_Relationships_API::get_connected(
                    [
                        "id" => "publications_to_areas_of_focus",
                        "from" => get_the_ID(),
                    ]
                ),
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
                    "order" => "ASC",
                    "orderby" => "menu_order",
                ]),
            ];

            // "keylearnings" => get_terms([
            //     "taxonomy" => "resourcekeylearning",
            //     "hide_empty" => true,
            // ]),
        }
    }
}
