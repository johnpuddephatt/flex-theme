
<?php echo \Roots\view("partials.publications-block", [
    "publications" => get_posts([
        "post_type" => "publication",
        "posts_per_page" => 5,
        "tag__in" => [$attributes["tag"]],
    ]),
])->render();
?>
