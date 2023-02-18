<?php

echo \Roots\view("partials.post-card", [
    "post" => get_post($attributes["post"]),
])->render(); ?>
