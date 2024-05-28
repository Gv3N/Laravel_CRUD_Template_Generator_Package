# Laravel CRUD Template Generator
[![Continuous Integration](https://github.com/gv3n/laravel_crud_template_generator/workflows/Continuous%20Integration/badge.svg?branch=main)](https://github.com/gv3n/laravel_crud_template_generator/actions) [![Total Downloads](https://img.shields.io/packagist/dt/gv3n/laravel_crud_template_generator.svg)](https://packagist.org/packages/gv3n/laravel_crud_template_generator) [![Latest Stable Version](https://poser.pugx.org/gv3n/laravel_crud_template_generator/v/stable)](https://packagist.org/packages/gv3n/laravel_crud_template_generator) [![License](https://poser.pugx.org/gv3n/laravel_crud_template_generator/license)](https://packagist.org/packages/gv3n/laravel_crud_template_generator)

A Laravel package to generate CRUD operations based on templates. Initially created for my personal use, it is now available for anyone to use and fork. Feel free to customize it to suit your needs and share your version with me. Contact me with any suggestions for improvements or to report any issues.

## Installation 
You can install the package via Composer: 

    composer require gv3n/laravel_crud_template_generator

## Requirements

-   PHP ^8.0
-   Laravel Support ^11.0

## Usage

To use the CRUD template generator, follow these steps:

Run the following Artisan command:

    php artisan make:crud {ModelName}

> Replace `{ModelName}` with the name of your model.

This command will generate the following files using stub templates:

-   **Controller:** `Http/Controllers/{ModelName}Controller.php`
-   **Model:** `Models/{ModelName}.php`
-   **Views:**
    -   `views/{ModelName}/index.blade.php`
    -   `views/{ModelName}/create.blade.php`
    -   `views/{ModelName}/edit.blade.php`
    -   `views/{ModelName}/show.blade.php`
   
Additionally, the `web.php` route file will be updated with the following resource route:

    Route::resource("{ModelName}", '{ModelName}Controller');

By following these steps, you will have a skeleton for a functional CRUD interface for your model.


## Contributing

Contributions are welcome! Please feel free to submit a Pull Request on [GitHub](https://github.com/Gv3N/laravel_crud_template_generator).

## License

This package is open-sourced software licensed under the MIT license.

## Author

-   Gv3N baktajivan@gmail.com
