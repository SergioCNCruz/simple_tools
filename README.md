PHP Simple Tools
================

Simple PHP tools

##Author
 - [Sérgio C. N. Cruz](https://github.com/SergioCNCruz)

##Usage
 - Date
```

<?php

include "../vendor/autoload.php";

use SimpleTools\Date;

$a = new Date();

var_dump($a->revertFormat("0000-00-00"));

```
 - Validate
```

```