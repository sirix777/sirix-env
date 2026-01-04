# Sirix Env

A helper function to retrieve environment variables with type casting.

---

## Installation

Install this tool using [composer](https://getcomposer.org/).

    composer require sirix/sirix-env

## Usage

This library provides a global `env` function that allows you to retrieve environment variables and automatically cast them to their appropriate PHP types.

### Basic Usage

```php
use function Sirix\Env\env;

$value = env('MY_VAR');
$defaultValue = env('NON_EXISTENT', 'default');
```

### Type Casting

The `env` function automatically casts string values to the following types:

| Value | PHP Type | Result |
| --- | --- | --- |
| `'true'`, `'(true)'` | boolean | `true` |
| `'false'`, `'(false)'` | boolean | `false` |
| `'null'`, `'(null)'` | null | `null` |
| `'empty'`, `'(empty)'` | string | `''` |
| `'123'`, `'1.23'` | integer / float | `123` / `1.23` |
| Other values | string | Original string (trimmed) |

### Static usage

If you prefer not to use the global function, you can use the `EnvParser` class directly:

```php
use Sirix\Env\EnvParser;

$value = EnvParser::parse('true'); // true
```
