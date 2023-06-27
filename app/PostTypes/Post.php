<?php

add_action("generate_rewrite_rules", function ($wp_rewrite) {
    $new_rules = [
        'news/(.+?)/?$' =>
            "index.php?post_type=post&name=" . $wp_rewrite->preg_index(1),
    ];

    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
});

add_filter(
    "post_link",
    function ($post_link, $post) {
        if($post->post_status === 'draft') return $post_link;
        if($post->post_type !== 'post') return $post_link;
        return home_url("/news/" . $post->post_name . "/");
    },
    1,
    3
);

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
