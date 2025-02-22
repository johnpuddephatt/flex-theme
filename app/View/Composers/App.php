<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Log1x\Navi\Navi;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = ["*"];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            "title" => $this->title(),
            "siteName" => $this->siteName(),
            "post" => $this->post(),
            "primaryNavigation" => $this->getNavigation("primary_navigation"),
            "secondaryNavigation" => $this->getNavigation(
                "secondary_navigation"
            ),
            "footerNavigation" => $this->getNavigation("tertiary_navigation"),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */

    public function post()
    {
        return get_queried_object();
    }

    public function siteName()
    {
        return get_bloginfo("name", "display");
    }

    public function title()
    {
        if ($this->view->name() == "index") {
            return get_the_title(
                isset($this->post->ID) ? $this->post->ID : null
            );
        }

        if (is_home()) {
            if ($home = get_option("page_for_posts", true)) {
                return get_the_title($home);
            }

            return __("Latest Posts", "sage");
        }

        if (is_archive()) {
            return post_type_archive_title("", false);
        }

        if (is_search()) {
            /* translators: %s is replaced with the search query */
            return sprintf(
                __("Search Results for %s", "sage"),
                get_search_query()
            );
        }

        if (is_404()) {
            return __("Not Found", "sage");
        }

        return get_the_title();
    }

    public function getNavigation($name)
    {
        $navigation = (new Navi())->build($name);

        if ($navigation->isEmpty()) {
            return;
        }

        return $navigation->toArray();
    }
}
