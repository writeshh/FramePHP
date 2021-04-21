<?php

class IndexModel
{
    public function getPosts()
    {
        $posts = [
            ["title" => "Blog Post 1", "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis elementum dolor, et lacinia risus luctus et. Quisque in finibus lectus, vel tristique neque. Maecenas maximus, nunc ut porta gravida, erat velit finibus leo, id pellentesque sem enim et eros."],
            ["title" => "Blog Post 2", "description" => "Quisque eget venenatis risus. Donec interdum dictum eleifend. Nullam hendrerit, mi sed mattis placerat, justo turpis auctor leo, eu faucibus urna dui tempor ipsum."],
            ["title" => "Blog Post 3", "description" => "Vestibulum efficitur diam sed ante porta, non scelerisque ex interdum. Donec tristique turpis id nisi sollicitudin, a sodales ligula bibendum."],
            ["title" => "Blog Post 4", "description" => "Pellentesque mi erat, ornare a augue vel, suscipit pretium sem. Morbi pulvinar turpis dolor, eu rutrum metus imperdiet vel. Nulla a ante hendrerit, ultrices nibh sed, porttitor augue. "],
            ["title" => "Blog Post 5", "description" => "Nullam tempus lacinia mauris, a aliquam ligula aliquam sit amet. Integer tincidunt turpis lacus, eget sagittis nisl elementum accumsan."],
            ["title" => "Blog Post 6", "description" => "Nam sagittis leo lorem, ut ornare lorem laoreet in. Nam sagittis molestie cursus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean non molestie nulla, in porttitor odio. Quisque posuere bibendum consectetur."],
        ];
        return $posts;
    }
}
