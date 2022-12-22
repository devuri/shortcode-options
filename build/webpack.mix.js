let mix = require('laravel-mix')

mix.setPublicPath('trunk').version()

mix.options({ manifest: false })

// build the plugin files in trunk.
mix.copy('vendor', 'trunk/vendor')
mix.copy('languages', 'trunk/languages')
mix.copy('src', 'trunk/src')

mix.copy([
    'index.php',
    'LICENSE',
    'readme.txt',
    'shortcode-options.php',
], 'trunk/')
