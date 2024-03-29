<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\asset;

include "PostTypes/Publication.php";
include "PostTypes/Page.php";
include "PostTypes/Post.php";

add_action("wp_head", function () {
    $description = get_the_excerpt()
        ? get_the_excerpt()
        : get_bloginfo("description"); ?>
        <meta name="description" content="<?php echo $description; ?>" />
    <?php
});

add_theme_support("soil", [
    "clean-up",
    // 'disable-rest-api',
    "disable-asset-versioning",
    "disable-trackbacks",
    "google-analytics" => "UA-12833905-1",
    "js-to-footer",
    "nav-walker",
    "nice-search",
    "relative-urls",
]);

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action(
    "wp_enqueue_scripts",
    function () {
        wp_enqueue_script(
            "sage/vendor.js",
            asset("scripts/vendor.js")->uri(),
            [],
            null,
            true
        );
        wp_enqueue_script(
            "sage/app.js",
            asset("scripts/app.js")->uri(),
            ["sage/vendor.js"],
            null,
            true
        );

        wp_localize_script("sage/app.js", "directory_uri", [
            "stylesheet_directory_uri" => get_stylesheet_directory_uri(),
        ]);

        wp_add_inline_script(
            "sage/vendor.js",
            asset("scripts/manifest.js")->contents(),
            "before"
        );

        if (
            !is_admin() &&
            !is_customize_preview() &&
            !in_array(
                $GLOBALS["pagenow"],
                ["wp-login.php", "wp-register.php"],
                true
            )
        ) {
            wp_deregister_script("jquery");
            wp_deregister_script("wp-embed");
        }

        if (is_single() && comments_open() && get_option("thread_comments")) {
            wp_enqueue_script("comment-reply");
        }

        wp_enqueue_style(
            "sage/app.css",
            asset("styles/app.css")->uri(),
            false,
            null
        );
    },
    100
);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action(
    "enqueue_block_editor_assets",
    function () {
        if ($manifest = asset("scripts/manifest.asset.php")->load()) {
            wp_enqueue_script(
                "sage/vendor.js",
                asset("scripts/vendor.js")->uri(),
                ...array_values($manifest)
            );
            wp_enqueue_script(
                "sage/editor.js",
                asset("scripts/editor.js")->uri(),
                ["sage/vendor.js"],
                null,
                true
            );

            wp_add_inline_script(
                "sage/vendor.js",
                asset("scripts/manifest.js")->contents(),
                "before"
            );
        }

        wp_enqueue_style(
            "sage/editor.css",
            asset("styles/editor.css")->uri(),
            false,
            null
        );
    },
    100
);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action(
    "after_setup_theme",
    function () {
        add_action("init", function () {
            register_post_status("archive", [
                "label" => _x("Archive", "post"),
                "public" => false,
                "exclude_from_search" => true,
                "show_in_admin_all_list" => false,
                "show_in_admin_status_list" => true,
                "label_count" => _n_noop(
                    'Archive <span class="count">(%s)</span>',
                    'Archive <span class="count">(%s)</span>'
                ),
            ]);

            add_filter("lzb/show_admin_menu", "__return_false");
        });

        /**
         * Enable features from the Soil plugin if activated.
         * @link https://roots.io/plugins/soil/
         */
        add_theme_support("soil", [
            "clean-up",
            "nav-walker",
            "nice-search",
            "relative-urls",
        ]);

        /**
         * Register the navigation menus.
         * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
         */
        register_nav_menus([
            "primary_navigation" => __("Primary Navigation", "sage"),
            "secondary_navigation" => __("Secondary Navigation", "sage"),
            "tertiary_navigation" => __("Tertiary Navigation", "sage"),
        ]);

        /**
         * Register the editor color palette.
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
         */
        // add_theme_support('editor-color-palette', [
        //     [
        //         'name' => esc_attr__( 'Orange', 'themeLangDomain' ),
        //         'slug' => 'orange',
        //         'color' => '#E78C38'
        //     ],
        //     [
        //         'name' => esc_attr__( 'Light orange', 'themeLangDomain' ),
        //         'slug' => 'light-orange',
        //         'color' => '#eac399'
        //     ],
        //     [
        //         'name' => esc_attr__( 'Purple', 'themeLangDomain' ),
        //         'slug' => 'purple',
        //         'color' => '#2d1458'
        //     ],
        //     [
        //         'name' => esc_attr__( 'Light purple', 'themeLangDomain' ),
        //         'slug' => 'light-purple',
        //         'color' => '#e5dbf6'
        //     ]
        // ]);

        /**
         * Register the editor color gradient presets.
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-gradient-presets
         */
        add_theme_support("editor-gradient-presets", []);

        /**
         * Register the editor font sizes.
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-font-sizes
         */
        add_theme_support("editor-font-sizes", []);

        /**
         * Register relative length units in the editor.
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#support-custom-units
         */
        add_theme_support("custom-units");

        /**
         * Enable support for custom line heights in the editor.
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#supporting-custom-line-heights
         */
        // add_theme_support('custom-line-height');

        /**
         * Enable support for custom block spacing control in the editor.
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#spacing-control
         */
        add_theme_support("custom-spacing");

        /**
         * Disable custom colors in the editor.
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-colors-in-block-color-palettes
         */
        add_theme_support("disable-custom-colors");

        /**
         * Disable custom color gradients in the editor.
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-gradients
         */
        add_theme_support("disable-custom-gradients");

        /**
         * Disable custom font sizes in the editor.
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-custom-font-sizes
         */
        add_theme_support("disable-custom-font-sizes");

        /**
         * Disable the default block patterns.
         * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
         */
        remove_theme_support("core-block-patterns");

        /**
         * Enable plugins to manage the document title.
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
         */
        add_theme_support("title-tag");

        /**
         * Enable post thumbnail support.
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support("post-thumbnails");

        /**
         * Enable wide alignment support.
         * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment
         */
        add_theme_support("align-wide");

        /**
         * Enable responsive embed support.
         * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
         */
        add_theme_support("responsive-embeds");

        /**
         * Enable HTML5 markup support.
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
         */
        add_theme_support("html5", [
            "caption",
            "comment-form",
            "comment-list",
            "gallery",
            "search-form",
            "script",
            "style",
        ]);

        /**
         * Enable selective refresh for widgets in customizer.
         * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
         */
        add_theme_support("customize-selective-refresh-widgets");

        add_theme_support("wp-block-styles");
    },
    20
);

add_post_type_support("page", "excerpt");

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action("widgets_init", function () {
    $config = [
        "before_widget" => '<section class="widget %1$s %2$s">',
        "after_widget" => "</section>",
        "before_title" => "<h3>",
        "after_title" => "</h3>",
    ];

    register_sidebar(
        [
            "name" => __("Primary", "sage"),
            "id" => "sidebar-primary",
        ] + $config
    );

    register_sidebar(
        [
            "name" => __("Footer", "sage"),
            "id" => "sidebar-footer",
        ] + $config
    );
});

/*
 *
 * Register custom taxonomies
 *
 */

add_action("admin_head", function () {
    ?>
	<style type="text/css">
        .wrap.carbon-theme-options .postbox ,
        .post-type-publication .wrap .postbox {
            padding-top: 0;
            padding-left: 0;
        }
        .wrap.carbon-theme-options .postbox  .inside,
        .post-type-publication .wrap .postbox .inside {
            padding: 0 12px 12px;
        }

        #newresource_keylearning_parent,
        #resource_keylearning-tabs,
		#newresource_type_parent,
        #resource_type-tabs {
			display: none;
		}
        #resource_keylearning-all,
        #resource_type-all {
            border: none !important;
            padding: 0 !important;
        }

    .is-side .acf-relationship .selection .values, .is-side .acf-relationship .selection .choices {
        width: initial;
        float: none;
    }
    .is-side .acf-relationship .selection .values-list::before {
        content: 'Selected:';
        display: block;
        font-weight: 600;
        padding: 5px;
        line-height: inherit;
    }

    .media-frame .unsplash-browser .attachments, .media-frame .unsplash-browser .no-media, .media-frame .unsplash-browser .unsplash-error {
        bottom: 0 !important;
        overflow-y: auto !important;
    }
	</style>
	<?php
});

add_image_size("16by9-xl", 1600, 900, true);
add_image_size("16by9-l", 1200, 675, true);
add_image_size("16by9", 630, 354, true);
add_image_size("16by9-s", 400, 225, true);
add_image_size("16by9-xs", 240, 135, true);

// add_image_size("twothirds-2xl", 1500, 1000, true);
// add_image_size("twothirds-xl", 1200, 800, true);
// add_image_size("twothirds-l", 900, 600, true);
// add_image_size("twothirds", 640, 420, true);
// add_image_size("twothirds-s", 450, 300, true);
// add_image_size("twothirds-xs", 240, 160, true);

add_image_size("square-xl", 1200, 1200, true);
add_image_size("square-l", 960, 960, true);
add_image_size("square", 800, 800, true);
add_image_size("square-s", 640, 640, true);
add_image_size("square-xs", 320, 320, true);

add_action("pre_get_posts", function ($query) {
    if (
        !$query->get("s") &&
        isset($query->query["post_type"]) &&
        $query->query["post_type"] == "publication"
    ) {
        $query->set("orderby", "post_date");
    }

    //     if ($query->is_search && !is_admin()) {
    //         $terms = explode(" ", $query->get("s"));
    //         // $query->set("tax_query", [
    //         //     "relation" => "OR",
    //         //     [
    //         //         "taxonomy" => "post_tag",
    //         //         "field" => "slug",
    //         //         "terms" => $terms,
    //         //         "operator" => "IN",
    //         //     ],
    //         // ]);
    //         // $query->tax_query->relation = "OR";

    //         $tax_query = [
    //             "relation" => "OR",
    //             "taxonomy" => "post_tag",
    //             "field" => "slug",
    //             "terms" => $terms,
    //         ];
    //         // $query->tax_query->queries[] = $tax_query;
    //         // $query->query_vars["tax_query"] = $query->tax_query->queries;

    //         // dd($query);
    //         // $query->tax_query = new \WP_Tax_Query([
    //         //     "relation" => "OR",
    //         //     [
    //         //         "taxonomy" => "post_tag",
    //         //         "field" => "slug",
    //         //         "terms" => $terms,
    //         //     ],
    //         // ]);
    //     }
});

// add_filter(
//     "posts_orderby",
//     function ($orderby, $query) {
//         global $wpdb;

//         if (!$query->is_admin && $query->is_search) {

//             $orderby =
//                 $wpdb->prefix .
//                 "posts.post_type ASC, {$wpdb->prefix}posts.post_date DESC";
//         }

//         return $orderby;
//     },
//     10,
//     2
// );
