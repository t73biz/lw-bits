<?php

use Illuminate\Support\Facades\Validator;
use T73biz\LwBits\Rules\MediaQuery;

test('validates that the media query is valid', function () {
    $tests = [
        'all',
        'print',
        'screen',
        'screen and (min-width: 600px)',
        'print and (max-height: 800px)',
        'all and (orientation: landscape) and (min-resolution: 300dpi)',
        'screen and (min-width: )',
        'not screen and (color), print and (color)',
    ];
    foreach ($tests as $test) {
        $testData = ['media' => $test];
        assertValid($testData);
    }
});

test('tests that a validator fails for invalid media queries', function () {
    $testData = ['media' => 'foo'];
    $rule = ['media' => [new MediaQuery()]];
    $validator = Validator::make($testData, $rule);
    expect($validator->passes())->toBeFalse();
    $messages = $validator->messages()->toArray();
    expect($messages['media'][0])->toBe('The media attribute must be a valid media query.');
});

function assertValid($testData): void
{
    $rule = ['media' => [new MediaQuery()]];
    $validator = Validator::make($testData, $rule);
    expect($validator->passes())->toBeTrue();
}
