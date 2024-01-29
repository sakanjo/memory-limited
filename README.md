<h1 align="center">Memory limited</h1>

<p align="center">
    <a href="https://php.net"><img alt="PHP 8.0" src="https://img.shields.io/badge/PHP-8.0-777BB4?style=for-the-badge&logo=php"></a>
</p>

<p align="center">Don't eat my memory please</p>

> ✨ Help support the maintenance of this package by [sponsoring me](https://github.com/sponsors/sakanjo).

Table of contents
=================

* [Install](#install)
* [Usage](#usage)
* [Support the development](#support-the-development)
* [Credits](#credits)
* [License](#license)

## 📦 Install

```
composer require --dev sakanjo/memory-limited
```

## 🦄 Usage

```php
use function Sakanjo\MemoryLimited\run_memory_limited;

function memoryEater(): mixed
{
    return memoryEater();
}

run_memory_limited(mb: 20, callback: function() {
    memoryEater(); // It will throw FATAL when reaching 20M of memory, instead of hanging the system
});
```

Voila, that's it!

> Pay attention that this package is only used in **development** mode for testing purposes,
> it will throw **Fatal error** when the memory limit is reached.

## 💖 Support the development

**Do you like this project? Support it by donating**

Click the ["💖 Sponsor"](https://github.com/sponsors/sakanjo) at the top of this repo.

## ©️ Credits

- [Salah Kanjo](https://github.com/sakanjo)
- [All Contributors](../../contributors)

## 📄 License

[MIT License](https://github.com/sakanjo/sakanjo/memory-limited/blob/master/LICENSE) © 2023-PRESENT [Salah Kanjo](https://github.com/sakanjo)

