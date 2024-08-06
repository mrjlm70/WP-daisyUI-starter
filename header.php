<!DOCTYPE html>
<html data-theme="light" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="bg-red-700">
        <div class="max-w-4xl mx-auto mb-5 px-4">
            <h1 class="text-2xl py-5"><a href="<?php echo get_home_url(); ?>" class="hover:text-blue-500">
                    IT <span class="text-blue-400">BLOG</span>
                </a></h1>
            <?php get_search_form(); ?>
        </div>
        <button class="btn">Button</button>
        <button class="btn btn-accent">Accent</button>


    </div>