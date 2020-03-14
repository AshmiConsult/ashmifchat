<?php

namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'AshmifChat');

// Project repository
set('repository', 'git@github.com:AshmiConsult/ashmifchat.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// set composer setting for deploy:vendors task
env('composer_options', 'install --no-dev --verbose --prefer-dist --optimize-autoloader --no-progress --no-interaction --no-scripts');


// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts
host('ashmifconsult.com')
    ->user('root')
    // ->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/ashmifchat');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

// before('deploy:symlink', 'artisan:migrate');
