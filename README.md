# useless-facts-api-client

## Requirements
- PHP 8.2

## Installation

```bash
composer require udavikhin/useless-facts-api-client
```

## Usage
```php
$client = new UselessFactsApiClient();
$client->getTodaysFact();
$client->getRandomFact();
```