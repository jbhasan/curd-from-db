# Laravel CRUD generator from database schema

Laravel CRUD generator will help you to generate CRUD direct from database schema.

- [Laravel Custom DB Migrate](#laravel-custom-db-migrate)
    - [Installation](#installation)
        - [Laravel 5.5 and above](#laravel-55-and-above)
        - [Laravel 5.4 and older](#laravel-54-and-older)
    - [Usage](#usage)
        - [CRUD using specific model name](#crud-using-specific-model-name)
        - [CRUD useing specific connection name](#crud-using-specific-connection-name)
        - [CRUD with auth middleware](#crud-with-auth-middleware)
        - [CRUD with forcefully overwrite](#crud-with-forcefully-overwrite)
        - [CRUD skip some table](#crud-skip-some-table)
    - [Help](#crud-help)
    - [Credits](#credits)

## Installation

You can install the package via composer:

```shell
composer require sayeed/crud-from-db
```

### Laravel 5.5 and above

The package will automatically register itself, so you can start using it immediately.

### Laravel 5.4 and older

In Laravel version 5.4 and older, you have to add the service provider in `config/app.php` file manually:

```php
'providers' => [
    // ...
    Sayeed\CrudFromDb\CrudFromDbServiceProvider::class,
];
```

## Usage

After installing the package, you will now see a new ```php artisan crud:custom``` command.

### CRUD using specific model name

You can generate CRUD from a specific table using table model name:

```php artisan crud:custom -m article```

Alternatively, you can use the longform version:

```php artisan crud:custom --model=article```

### CRUD useing specific connection name

You can generate CRUD from specific database connection, default connection mysql:

```php artisan crud:custom -c mysql```

Alternatively, you can use the longform version:

```php artisan crud:custom --connection=mysql```

### CRUD with auth middleware

You can generate CRUD with auth middleware:

```php artisan crud:custom -a```

Alternatively, you can use the longform version:

```php artisan crud:custom --auth```

### CRUD with forcefully overwrite

You can generate CRUD with forcefully overwritten existing file:

```php artisan crud:custom -f```

Alternatively, you can use the longform version:

```php artisan crud:custom --force```

### CRUD skip some table

You can generate CRUD without some specific table:

```php artisan crud:custom -s table1,table2```

Alternatively, you can use the longform version:

```php artisan crud:custom --skip=table1,table2```

You can pass here table name or model name

### CRUD help

CRUD help:

```php artisan crud:custom -h```

Alternatively, you can use the longform version:

```php artisan crud:custom --help```


## Credits

- [Md. Hasan Sayeed](https://github.com/nilpahar)

 Thank you for using it.
