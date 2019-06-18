# LBForm
This is a form element pre-written with adminlte library of acacha.

# How to install

### Step 1: install

```php
composer require vietanh/lform
```

### Step 2: add service provider

In config/app.php, add following line to provider

```php
VietAnh\LForm\LFormServiceProvider::class
```

### Step 3: Publish 

```php
php artisan vendor:publish --tag=lform
```

### Step 4: Using:

```php
{!! Form::lbText("text-input-name", "value in text input name", "Label of text input") !!}
```