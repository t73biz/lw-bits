# Livewire Bits

## Introduction

Livewire Bits is a collection of Livewire components that you can use in your Laravel projects. 
The components are designed to be simple, easy to use, and customizable. There is a set of HTML5 components that are the
core of the package.

## Installation

You can install the package via composer:

```bash
composer require t73biz/lw-bits
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lw-bits-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="lw-bits-views"
```

## Testing

```bash
composer test
```
## HTML5 Components
[HTML5 Components](html5-components.md)
