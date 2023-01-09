<?php
echo \Roots\view("partials.posts-block", [
    "posts" => get_posts([
        "posts_per_page" => 5,
        "tag__in" => [$attributes["tag"]],
    ]),
])->render();
?>
