<?php

$post_id = empty($_GET["post"]) ? null : sanitize_key($_GET["post"]);

if (
    !$post_id ||
    (get_post_type($post_id) == "page" &&
        (get_post_meta($post_id, "_wp_page_template", true) ==
            "template-areaoffocus.blade.php" ||
            get_post_meta($post_id, "_wp_page_template", true) ==
            "template-whatwedo.blade.php"))
) {
    add_filter("rwmb_meta_boxes", function ($meta_boxes) {
        $meta_boxes[] = [
            "title" => "Show related",
            "post_types" => "page",
            "context" => "side",
            "fields" => [
                [
                    "name" => "Show related publications?",
                    "id" => "show_related_publications",
                    "type" => "switch",
                ],
                [
                    "name" => "Show related updates?",
                    "id" => "show_related_posts",
                    "type" => "switch",
                ],
            ],
        ];
        return $meta_boxes;
    });
}
