<?php

echo \Roots\view("partials.publication-card", [
    "publication" => get_post($attributes["publication"]),
])->render(); ?>
