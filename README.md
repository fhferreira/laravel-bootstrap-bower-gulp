# Laravel Bootstrap 3, Bower, Gulp with Environments

A starter [Laravel](https://github.com/laravel/laravel) app ready to go with asset management provided by [Gulp.js](https://github.com/gulpjs/gulp), Twitter [Bower](https://github.com/bower/bower) using [Bootstrap 3](https://github.com/twbs/bootstrap) and [Font Awesome 4](https://github.com/FortAwesome/Font-Awesome) with preconfigured [Laravel Environments](http://laravel.com/docs/configuration#environment-configuration).

## Get Started

### Command Line

  1. Clone this repo in your sites directory:
      * `git clone https://github.com/jhauraw/laravel-bootstrap-bower-gulp.git`
  2. `cd` into project directory
  3. `composer install`
  4. `npm install`
  5. `bower update`
  6. `gulp` (Ignore `jshint` warnings)
  7. `php artisan serve`

### View in Browser

  1. In browser go to: `http://localhost:8000`

### Edit

  1. Edit `app/assets/less/app-styles.less` as needed
  2. Run `gulp css:pub` to regenerate Less to CSS
  3. Refresh in browser to see changes
  4. Edit `app/assets/js/app.js` as needed
  5. Run `gulp js:pub` to regenerate JS
  6. Refresh in browser to see changes
  7. Rinse & Repeat :-)

### Optional - Local Laravel Environment Setup

By default, you will be in `production` environment. You probably want to be in `development` when working locally. To switch:

  1. `php artisan key:generate`. Copy key to `app.key` in `.env.development.php`
  2. Set an ENV variable for `APP_ENV` to `development`. You can do this in `php-fpm.conf`, `httpd.conf`, or your local shell ENV in `.bash_profile`.
  3. Edit settings in `.env.development.php` or which ever .env.*.php you want to use

__NOTE__: For `production`, be sure to change the "Acme" namespace in `app/Acme`, `app/config/auth.php`, and `composer.json`, to your own, then run `composer dumpautoload -o`

## TODO

  * Lessify css in `app-styles.less`
  * Gulp `watch` task

## Gulp Commands Reference

    npm install -g gulp

    npm install --save-dev gulp gulp-less gulp-autoprefixer gulp-minify-css gulp-minify-html gulp-jshint gulp-concat gulp-uglify gulp-imagemin gulp-clean gulp-notify gulp-rename gulp-watch gulp-cache

## Laravel Customizations Reference

  * `app/`

    * Created

        * Directory `assets` and subdirs `js`, `less` and `img` each with nested file `.gitkeep`. Used to store source `src` assets
        * Directory `build` and nested file `.gitignore`. Used when building assets with build tool such as Gulp
        * Directory `Acme`. Used for application namespace and domain logic

***

  * `app/config/`

    * Edited

        * Any file needing secure/safe Environment specific settings. Added `getenv()` with key from `.env.(*.?)php` environment file. See `env.template.php` for specifics
        * `auth.php`, changed `model` key to `Acme\User\User`
        * `cache.php`, changed `prefix` key to `el`

    * Added

        * Array key `options` to `database.php` `connections.mysql` array to support UTC tz in DB:
            * `'options'   => [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET time_zone = \'' . getenv('db.app.timezone') . '\'']
    )`

    * Created

        * Directories `development` and `staging` each with nested file `.gitkeep`. For Environment overriding
        * File `setting.php`. Stores app specific site settings/CONSTANTS

***

  * `app/start/global.php`

    * Commented Out

        * `ClassLoader::addDirectories` => `app_path().'/models',`

    * Edited

        * `Log::useFiles` name to `app.log`

***

  * `app/views/`

    * Deleted

        * `hello.php`

    * Created

        * Directories `layouts`, and `home`
        * Files `layouts/master.blade.php`, and `home/index.blade.php`

***

  * `app/lang/en/`

    * Created

        * File `footer.php`

***

  * `bootstrap/start.php`

    * Edited

        * `detectEnvironment` function to use SYSTEM/SERVER set value `getenv('APP_ENV')`

***

  * `public/`

    * Created

        * Directory `assets` and subdirs `js`, `css`, `fonts`, and `img` each with nested file `.gitkeep`. Used to store compiled/static assets

    * Deleted

        * File `.htaccess`. Using nginx server, not apache

***

  * `/`

    * Created

        * Files for environment config: `env.template.php`, `.env.development.php`, and `.env.php`
        * Files `.jscsrc`, `.jshintrc`, `bower.json`, `gulpfile.js`, `package.json`, and `README.md`
        * Directories `bower_components`, and `node_modules` for use with build tool

    * Edited

        * File `.gitignore` removed ignore of `composer.lock`, added ignores of extra items specific to project

***

  * `composer.json`

    * Edited
        * `"name"` and `"description"`
        * `"require.laravel/framework"` to latest version `"4.2.*"`

    * Added
        * `"psr-4"` for own app namespace

    * Deleted
        * `"app/models",` from `"autoload.classmap"`

## Reset Install

Delete the following project specific files before committing or sharing your generated source on GitHub if creating a new public repo (but not for your own production as they are needed!):

  * `/composer.lock`
  * `/bootstrap/compiled.php`
  * `/vendor` directory
