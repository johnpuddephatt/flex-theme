<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Home extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // 'partials.page-header',
        // 'partials.content',
        "template-home",
    ];

    public function with()
    {
        return [
            "hero_images" => $this->hero_images(),
            "home_posts" => $this->home_posts(),
            "areas_of_focus" => $this->areas_of_focus(),
            "latest_publications" => $this->latest_publications(),
            "home_blocks" => $this->home_blocks(),
        ];
    }

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
                //    "foo" => 'bar',
            ];
    }

    public function hero_images()
    {
        $image_ids = carbon_get_theme_option("hero_images");
        return array_map("wp_get_attachment_image", $image_ids);
    }

    public function home_posts()
    {
        return get_posts([
            "numberposts" => 3,
        ]);
    }

    public function areas_of_focus()
    {
        return get_posts([
            "numberposts" => -1,
            "post_type" => "page",
            "meta_key" => "_wp_page_template",
            "meta_value" => "template-areaoffocus.blade.php",
        ]);
    }

    public function latest_publications()
    {
        return get_posts([
            "post_type" => "publication",
            "numberposts" => 3,
        ]);
    }

    public function home_blocks()
    {
        return get_posts([
            "post_type" => "page",
            "post_parent" => 457,
            "numberposts" => 4,
            "order" => "ASC",
            "orderby" => "menu_order",
        ]);
    }
}
