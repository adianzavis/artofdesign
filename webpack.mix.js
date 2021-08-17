const mix = require('laravel-mix');

mix.copyDirectory("resources/css", "public/assets/css")
    .copyDirectory("resources/js", "public/assets/js")
    .copyDirectory("resources/images", "public/assets/img")
    .copyDirectory("resources/webfonts", "public/assets/webfonts")
    .copyDirectory("resources/sliders", "public/assets/sliders")
    .copyDirectory("resources/font", "public/assets/font")
    .copyDirectory("resources/flat-font", "public/assets/flat-font")
    .copyDirectory("resources/pdf", "public/assets/pdf")