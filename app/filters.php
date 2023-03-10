<?php

/**
 * Theme filters.
 */

namespace App;

add_filter("wp_insert_post_data", function ($post_data) {
    $post_data["post_title"] = wp_strip_all_tags($post_data["post_title"]);
    return $post_data;
});

add_filter(
    "gettext",
    function ($translation, $original) {
        if ("Excerpt" == $original) {
            return "Summary";
        } else {
            $pos = strpos($original, "Excerpts are optional");
            if ($pos !== false) {
                return null;
            }
        }
        return $translation;
    },
    10,
    2
);

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter("excerpt_more", function () {
    return sprintf("&hellip;");
});

add_filter("excerpt_length", function () {
    return 27;
});

add_filter("body_class", function ($classes) {
    return array_merge($classes, ["text-gray-700", "bg-white"]);
});

add_filter("parse_query", function ($query) {
    if (is_admin()) {
        return $query;
    }

    // Used by the 'view all posts related to this project' link from single project pages.
    if ($query->is_main_query() && isset($_GET["postProjectID"])) {
        $query->set("meta_query", [
            [
                "key" => "related_project",
                "value" => '"' . $_GET["postProjectID"] . '"',
                "compare" => "LIKE",
            ],
        ]);
    }

    if ($query->is_main_query() && isset($_GET["resourceProjectID"])) {
        $query->set("meta_query", [
            [
                "key" => "project",
                "value" => '"' . $_GET["resourceProjectID"] . '"',
                "compare" => "LIKE",
            ],
        ]);
    }

    if ($query->is_search) {
        // Used to allow searching to a specific type of post
        if (isset($_GET["post_type"])) {
            $query->set("post_type", [$_GET["post_type"]]);
        }

        // Used to restrict search results to a specific resource type (this is a taxonomy)
        if (isset($_GET["post_resourcetype"]) && $_GET["post_resourcetype"]) {
            $query->set("tax_query", [
                [
                    "taxonomy" => "resourcetype",
                    "field" => "term_id",
                    "terms" => [intval($_GET["post_resourcetype"])],
                    "operator" => "IN",
                ],
            ]);
        }

        // Used to restrict search results to a specific area of focus (this is an MB relationship)
        if (isset($_GET["post_areaoffocus"]) && $_GET["post_areaoffocus"]) {
            $query->set("relationship", [
                "id" => "publications_to_areas_of_focus",
                "to" => intval($_GET["post_areaoffocus"]),
            ]);
            $query->set("nopaging", true);
        }
    }

    return $query;
});

add_filter(
    "post_type_link",
    function ($url, $post, $leavename) {
        return wp_make_link_relative($url);
    },
    10,
    3
);

add_filter(
    "page_link",
    function ($url, $post, $leavename) {
        return wp_make_link_relative($url);
    },
    10,
    3
);
