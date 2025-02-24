<?php
function optiontwo_init_blocks()
{
    register_block_type(__DIR__ . '/build/main-nav');
}
add_action('init', 'optiontwo_init_blocks');
