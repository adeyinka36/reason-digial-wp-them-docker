<?php

function event_post_types() {
    register_post_type('event', [
        'show_in_rest'=> true,
        'public' => true,
        'supports' => ['title', 'editor'],
        'has_archive'=> true,
        'rewrite' => ['slug' => 'events'],
        'menu_icon' => 'dashicons-calendar',
        'labels' => [
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_item' => 'Event'
        ]
        ]);
}


add_action('init', 'event_post_types');