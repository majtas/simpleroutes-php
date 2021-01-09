# simpleroutes-php
A small library that allows you to get a route from the url and then execute for the address of a specific action.

## How to use
Below is an example of using the library in code.

```diff
  <?php

  use Majtas\Routes\Routes;

  require_once("Routes/Routes.php");

  Routes::get('/', function() {
    echo "Hello world!";
  });

  Routes::post('/', function() {
    echo "Thank you for completing the form";
  });

  Routes::run();
```

## Important
You must use the run method in order to start routing.
