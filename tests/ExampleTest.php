<?php

it('can test', function () {
    \Pest\Laravel\artisan('lw-bits')
        ->expectsOutput('All done')
        ->assertExitCode(0);
});
