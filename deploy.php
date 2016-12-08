<?php
namespace Deployer;
require 'recipe/common.php';

// Configuration

set('repository', 'git@bitbucket.org:CHANGE_REPO.git');
set('shared_files', []);
set('shared_dirs', []);
set('writable_dirs', []);

// Servers

server('production', 'CHANGE_IP', 22)
    ->user('CHANGE_USERNAME')
    ->password('CHANGE_PASS')
    ->set('branch', 'master')
    ->set('deploy_path', '/CHANGE/PATH/TO');


// Tasks

task('npm:install', function () {
     run('cd {{release_path}} && npm install');
 });
 task('npm:build', function () {
     run('cd {{release_path}} && npm run build');
 });
task('npm:forever', function () {
    run('cd {{release_path}} && forever stopall > /dev/null 2>&1 && nohup npm run production');
});
after('deploy:symlink', 'npm:forever');

desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    //'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    //'deploy:shared',
    //'deploy:writable',
    //'deploy:vendors',
    'npm:install',
    //'npm:build',
    'deploy:clean',
    'deploy:symlink',
    //'deploy:unlock',
    'cleanup',
    'success'
]);

after('deploy', 'success');
