<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
/*
 *
 * Register 'Publication' post
 *
 */

add_action("init", function () {
    register_post_type("publication", [
        "labels" => [
            "name" => __("Publications"),
            "singular_name" => __("Publication"),
            "add_new_item" => __("Add New Publication"),
            "edit_item" => "Edit Publication",
        ],
        "taxonomies" => ["post_tag"],
        "public" => true,
        "publicly_queryable" => true,
        "has_archive" => true,
        "rewrite" => [
            "slug" => str_replace(
                "/",
                "",
                wp_make_link_relative(
                    get_permalink(get_option("page_for_publications"))
                )
            ),
        ],
        "menu_icon" => "dashicons-book-alt",
        "menu_position" => 4,
        "show_in_rest" => true,
        "supports" => ["title", "editor"],
    ]);
});

add_action("mb_relationships_init", function () {
    $post_id = empty($_GET["post"]) ? null : sanitize_key($_GET["post"]);

    if (
        !$post_id ||
        get_post_type($post_id) == "publication" ||
        get_post_meta($post_id, "_wp_page_template", true) ==
            "template-whatwedo.blade.php"
    ) {
        MB_Relationships_API::register([
            "id" => "publications_to_what_we_do",
            "from" => [
                "object_type" => "post",
                "post_type" => "publication",
                "meta_box" => [
                    "title" => "What we do",
                ],
            ],
            "to" => [
                "object_type" => "post",
                "post_type" => "page",
                "meta_box" => [
                    "title" => "Publications",
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
        get_post_type($post_id) == "publication" ||
        get_post_meta($post_id, "_wp_page_template", true) ==
            "template-areaoffocus.blade.php"
    ) {
        MB_Relationships_API::register([
            "id" => "publications_to_areas_of_focus",
            "from" => [
                "object_type" => "post",
                "post_type" => "publication",
                "meta_box" => [
                    "title" => "Areas of focus",
                ],
            ],
            "to" => [
                "object_type" => "post",
                "post_type" => "page",
                "meta_box" => [
                    "title" => "Publications",
                    "class" => "asdfasdf",
                ],
                "query_args" => [
                    "meta_key" => "_wp_page_template",
                    "meta_value" => "template-areaoffocus.blade.php",
                ],
            ],
        ]);
    }

    add_filter("rwmb_meta_boxes", function ($meta_boxes) {
        $meta_boxes[] = [
            "title" => esc_html__("Files", "online-generator"),
            "id" => "files",
            "post_types" => ["publication"],
            "context" => "normal",
            "fields" => [
                [
                    "type" => "file_advanced",
                    "name" => esc_html__("File Advanced", "online-generator"),
                    "id" => "file_advanced",
                ],
            ],
        ];

        // $meta_boxes[] = [
        //     "title" => esc_html__("Summary", "online-generator"),
        //     "id" => "summary",
        //     "post_types" => ["publication"],
        //     "context" => "normal",
        //     "fields" => [
        //         [
        //             "type" => "wysiwyg",
        //             "name" => esc_html__(
        //                 "Publication summary",
        //                 "online-generator"
        //             ),
        //             "id" => "summary-field",
        //         ],
        //     ],
        // ];

        return $meta_boxes;
    });
});

add_action(
    "init",
    function () {
        register_taxonomy("resourcetype", "publication", [
            "hierarchical" => false,
            "labels" => [
                "name" => "Types",
                "singular_name" => "Type",
                "add_new_item" => "Add new publication type",
                "search_items" => "Search publication types",
                "edit_item" => "Edit type",
            ],
            "meta_box_cb" => "post_categories_meta_box",
            "show_ui" => true,
            "show_admin_column" => true,
            "show_in_rest" => true,
            "query_var" => true,
            "public" => true,
            "rewrite" => [
                "slug" => "resource/type",
            ],
        ]);
    },
    10
);

add_action("carbon_fields_register_fields", function () {
    Container::make("term_meta", __("Publication type colours"))
        ->where("term_taxonomy", "=", "resourcetype")
        ->add_fields([
            Field::make(
                "color",
                "resourcetype_background",
                __("Background colour")
            ),
            Field::make("color", "resourcetype_spine", __("Spine colour")),
            Field::make("color", "resourcetype_text", __("Text colour")),
        ]);
});

add_action("after_setup_theme", function () {
    require_once get_template_directory() . "/vendor/autoload.php";
    \Carbon_Fields\Carbon_Fields::boot();
});

/**
 * Adds a custom field: "Publications page"; on the "Settings > Reading" page.
 */
add_action("admin_init", function () {
    $id = "page_for_publications";
    // add_settings_field( $id, $title, $callback, $page, $section = 'default', $args = array() )
    add_settings_field(
        $id,
        "Publications page:",
        "settings_field_page_for_publications",
        "reading",
        "default",
        [
            "label_for" => "field-" . $id, // A unique ID for the field. Optional.
            "class" => "row-" . $id, // A unique class for the TR. Optional.
        ]
    );
});

/**
 * Renders the custom "Publications page" field.
 *
 * @param array $args
 */
function settings_field_page_for_publications($args)
{
    $id = "page_for_publications";
    wp_dropdown_pages([
        "name" => $id,
        "show_option_none" => "&mdash; Select &mdash;",
        "option_none_value" => "0",
        "selected" => get_option($id),
    ]);
}

/**
 * Adds page_for_publications to the white-listed options, which are automatically
 * updated by WordPress.
 *
 * @param array $options
 */
add_filter("allowed_options", function ($options) {
    $options["reading"][] = "page_for_publications";
    return $options;
});
