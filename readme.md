<div align="center">

  <a href="https://github.com/fivefifteen/primer" target="_blank"><img src="./img/svg/logo.svg" width="100px" /></a>

  # Primer

  A WordPress theme boilerplate. The perfect starting point for your custom WordPress theme.

  [![packagist package version](https://img.shields.io/packagist/v/fivefifteen/primer.svg?style=flat-square)](https://packagist.org/packages/fivefifteen/primer)
  [![packagist package downloads](https://img.shields.io/packagist/dt/fivefifteen/primer.svg?style=flat-square)](https://packagist.org/packages/fivefifteen/primer)
  [![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/fivefifteen/primer?style=flat-square)](https://github.com/fivefifteen/primer)
  [![license](https://img.shields.io/github/license/fivefifteen/primer.svg?style=flat-square)](https://github.com/fivefifteen/primer/blob/main/license.md)

  <a href="https://fivefifteen.com" target="_blank"><img src="./img/svg/fivefifteen.svg" width="300px" /><br /><b>A Five Fifteen Project</b></a>

</div>


## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Usage](#usage)
- [Commands](#commands)
- [Related Projects](#related-projects)
- [License Information](#license-information)


## Features

- Front-end dependency management using [GitHub] & [npm] as repositories via [Fetcher]
- JavaScript & CSS/SCSS compilation/minification via [Piler]
- Boilerplate code for configuring custom post types, taxonomies, and user roles
- Some sensible plugin hooks:
    - [Gravity Forms]: Disable the built-in theme (so we can create a custom one)
    - [Updraft Plus]: Prevent backups being created for non-production environments
    - [Yoast SEO]: Custom breadcrumb separator when using the `yoast_breadcrumb` function


## Requirements

- [PHP] 8.1 or above
- [Composer]


## Usage

Run the following command (*replacing "my-new-theme" with your theme's slug*):

```sh
composer create-project fivefifteen/primer my-new-theme
```


## Commands

| Command | Description |
| --- | --- |
| `composer build` | Compiles/minifies JavaScript & CSS/SCSS files via [Piler] |
| `composer fetcher` | Displays a list of available [Fetcher] commands |
| `composer fetcher install [...dependencies]` | Installs dependencies from [GitHub] or [npm] |
| `composer setup` | Installs frontend dependencies and builds them |
| `composer watch` | Watches for changes to JavaScript & CSS/SCSS files and recompiles/minifies as needed |


## Related Projects

- [Basis] - A WordPress boilerplate. Get a local dockerized WordPress project up and running complete with secrets encryption, dependency management/compilation, and more by running a single command.
- [WordUp] - A WordPress Deployer Recipe.


## License Information

GPL-2.0 (See the [license.md file](license.md) for more info)


[Basis]: https://github.com/fivefifteen/basis
[Composer]: https://getcomposer.org
[Fetcher]: https://github.com/fivefifteen/fetcher
[GitHub]: https://github.com
[Gravity Forms]: https://gravityforms.com
[npm]: https://npmjs.com
[PHP]: https://php.net
[Piler]: https://github.com/fivefifteen/piler
[Updraft Plus]: https://updraftplus.com
[WordUp]: https://github.com/fivefifteen/wordup
[Yoast SEO]: https://yoast.com