# biostats

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/andrewhood125/biostats?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Setup
=====
  - Homestead
  - `mv .env.example .env`
  - Copy `Homestead.yaml.example` into your local homestead config.
  - Add `192.168.10.10 biostats.dev` to /etc/hosts


Droplet info
============
IP = 45.55.177.112 if you need to password get in contact with David C
offline




Errors
======
If you run into the following error:
````
PHP Fatal error:  Call to undefined method Illuminate\Foundation\Application::getCachedCompilePath()
````
Run `rm vendor/compiled.php`
