# Date helpers for websites

## Installation

Add this to your `composer.json`

```
{
    "require": {
        "citripio/date": "^1.0"
    }
}

```

Then:

```
require_once "./vendor/autoload.php";

$date_utils = new Citripio\Date(
    array(
        "lang" => "es",
    )
);
```

## Methods

### is_today()

Receives a PHP Date `date("Y-m-d H:i:s")`. Returns `true` if it's today.

### is_yesterday()

Receives a PHP Date `date("Y-m-d H:i:s")`. Returns `true` if it's yesterday.

### month()

Receives an integer representing a month of the year, returns its name.

### day()

Receives an integer representing a day of the week, returns its name.