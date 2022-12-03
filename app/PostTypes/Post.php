<?php

add_action("mb_relationships_init", function () {
    $post_id = empty($_GET["post"]) ? null : sanitize_key($_GET["post"]);

    if (
        !$post_id ||
        get_post_type($post_id) == "post" ||
        get_post_meta($post_id, "_wp_page_template", true) ==
            "template-whatwedo.blade.php"
    ) {
        MB_Relationships_API::register([
            "id" => "posts_to_what_we_do",
            "from" => [
                "object_type" => "post",
                "post_type" => "post",
                "meta_box" => [
                    "title" => "What we do",
                ],
            ],
            "to" => [
                "object_type" => "post",
                "post_type" => "page",
                "meta_box" => [
                    "title" => "Posts",
                    "class" => "asdfasdf",
                ],
                "query_args" => [
                    "meta_key" => "_wp_page_template",
                    "meta_value" => "template-whatwedo.blade.php",
                ],
            ],
        ]);
    }

    if (
        !$post_id ||
        get_post_type($post_id) == "post" ||
        get_post_meta($post_id, "_wp_page_template", true) ==
            "template-areaoffocus.blade.php"
    ) {
        MB_Relationships_API::register([
            "id" => "posts_to_areas_of_focus",
            "from" => [
                "object_type" => "post",
                "post_type" => "post",
                "meta_box" => [
                    "title" => "Areas of focus",
                ],
            ],
            "to" => [
                "object_type" => "post",
                "post_type" => "page",
                "meta_box" => [
                    "title" => "Posts",
                    "class" => "asdfasdf",
                ],
                "query_args" => [
                    "meta_key" => "_wp_page_template",
                    "meta_value" => "template-areaoffocus.blade.php",
                ],
            ],
        ]);
    }
});
