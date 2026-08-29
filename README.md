## Lilac SVG Generator

Generate SVG Image, Icon, without left your PHP code.

---

### Installation 

```bash
composer require sushilk/svg
```

---

### Example

```php

use SVG\SVG;

$svg = SVG::generate()
            ->react(4, 4, 150, 150)
            ->fill('#00044F')
            ->get();
```

---
