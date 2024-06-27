# useless-facts-api-client

## Requirements
- PHP >= 7.2.5

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