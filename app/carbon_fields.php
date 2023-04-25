<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action("carbon_fields_register_fields", function () {
    $parent_options = Container::make(
        "theme_options",
        __("Theme Options")
    )->add_fields([
        Field::make("textarea", "address", __("Address ")),
        // Field::make("text", "charitynumber", __("Charity number")),
        // Field::make("text", "companynumber", __("Company number")),
        Field::make("text", "companyemail", __("Contact email")),
        Field::make("text", "companyphone", __("Contact phone")),
    ]);

    Container::make("theme_options", __("Homepage"))
        ->set_page_parent($parent_options) // reference to a top level container
        ->add_fields([
            Field::make("separator", "hero_separator", __("Hero")),
            Field::make("text", "home_hero_title", __("Title")),
            Field::make("text", "home_hero_subtitle", __("Subtitle")),
            Field::make("text", "home_hero_url", __("URL")),
            Field::make("media_gallery", "hero_images", __("Hero images")),
            Field::make(
                "separator",
                "announcement_separator",
                __("Announcement")
            ),
            Field::make("checkbox", "home_message_enabled", __("Enabled?")),
            Field::make("image", "home_message_image", __("Image")),
            Field::make("text", "home_message_title", __("Title")),
            Field::make("text", "home_message_body", __("Body")),
            Field::make("text", "home_message_link_text", __("Link text")),
            Field::make("text", "home_message_link_url", __("Link URL")),
        ]);

    Container::make("theme_options", __("Newsletter signup"))
        ->set_page_parent($parent_options) // reference to a top level container
        ->add_fields([
            Field::make("image", "newsletter_image", __("Image")),
            Field::make("text", "newsletter_title", __("Title")),
            Field::make("text", "newsletter_subtitle", __("Subtitle")),
            Field::make("text", "newsletter_button_text", __("Button text")),
            Field::make("text", "newsletter_url", __("URL")),
        ]);

    Container::make("theme_options", __("Footer"))
        ->set_page_parent($parent_options) // reference to a top level container
        ->add_fields([
            Field::make(
                "textarea",
                "footer_text_left",
                __("Footer Text (left)")
            ),
            Field::make(
                "textarea",
                "footer_text_right",
                __("Footer Text (right)")
            ),
        ]);

    Container::make("theme_options", __("Social Links"))
        ->set_page_parent($parent_options) // reference to a top level container
        ->add_fields([
            Field::make("text", "facebook", __("Facebook Link")),
            Field::make("text", "twitter", __("Twitter Link")),
            Field::make("text", "instagram", __("Instagram Link")),
            Field::make("text", "linkedin", __("LinkedIn Link")),
            Field::make("text", "youtube", __("YouTube Link")),
            Field::make("text", "vimeo", __("Vimeo Link")),
        ]);

    Container::make("theme_options", __("Analytics"))
        ->set_page_parent($parent_options) // reference to a top level container
        ->add_fields([
            Field::make("text", "google_analytics", __("Google Analytics")),
        ]);

    Container::make("user_meta", "Role")->add_fields([
        Field::make("text", "user_role", "User role"),
    ]);
});

add_action("after_setup_theme", function () {
    require_once get_template_directory() . "/vendor/autoload.php";
    \Carbon_Fields\Carbon_Fields::boot();
});
