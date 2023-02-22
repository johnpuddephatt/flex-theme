<?php

echo \Roots\view("partials.post-card", [
    "post_id" => $attributes["post"],
])->render(); ?>
