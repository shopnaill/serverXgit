@php
    $account = '';
@endphp
@servers(['root' => 'root@153.92.209.141'])
@setup
    $account = 'root';
@endsetup

@task('deploy', ['on' => 'root'])
    ls
@endtask