let mix = require('laravel-mix')

mix.setPublicPath('trunk').version()

mix.options({ manifest: false })

// build the plugin files in trunk.
mix.copy('vendor', 'build/trunk/vendor')
mix.copy('languages', 'build/trunk/languages')
mix.copy('src', 'build/trunk/src')

mix.copy([
    'index.php',
    'LICENSE',
    'readme.txt',
    'shortcode-options.php',
], 'build/trunk/')
