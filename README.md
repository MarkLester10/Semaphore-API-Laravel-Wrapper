# SEMAPHORE SMS API

A Laravel wrapper for SEMAPHORE SMS API


## Installation

Require package

```bash
  composer require marklestermorta/semaphoreapi-laravel
```

Publish Configuration file

```bash
  php artisan vendor:publish --provider="MarkLesterMorta\Semaphore\SemaphoreApiServiceProvider"
```

Add ENV variables

```bash
  SEMAPHORE_API_KEY=
  SEMAPHORE_SENDER_NAME=
```


## Usage/Examples
### Send SMS

```php
  return SemaphoreApi::send('09*********', "Your Message");
```

### After each HTTP POST request, you will receive a JSON response containing the following parameters for each message:
[SEMAPHORE API Documentation](https://semaphore.co/docs)


