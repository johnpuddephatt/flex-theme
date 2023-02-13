<?php

echo \Roots\view("partials.children-block", [
    "children" => get_posts([
        "post_type" => "page",
        "post_parent" => get_the_ID(),
        "orderby" => "menu_order",
        "order" => "ASC",
        "numberposts" => -1,
    ]),
])->render();
?>
