## SVG Generator
![PHP](https://img.shields.io/badge/PHP-8.3%2B-656BB4?style=for-the-badge&logo=php")
![Supabase](https://img.shields.io/badge/Supabase-PHP-3ECF8E?style=for-the-badge&logo=supabase)
![Latest Version](https://img.shields.io/packagist/v/supabase-php/supabase.svg?style=for-the-badge&logo=packagist)
![Total Downloads](https://img.shields.io/packagist/dt/supabase-php/supabase.svg?style=for-the-badge&logo=composer)
[![License](https://img.shields.io/packagist/l/supabase-php/supabase.svg?style=for-the-badge&logo=github)](LICENSE)

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
