[<img src="https://cdn.anychart.com/images/logo-transparent-segoe.png?2" width="234px" alt="AnyChart - Robust JavaScript/HTML5 Chart library for any project">](https://anychart.com)
# PHP basic template

This example shows how to use Anychart library with the PHP programming language and MySQL database.

## Running

To use this sample you must have PHP installed, if not, please, install it as described [here](http://php.net/manual/en/faq.installation.php);
MySQL installed and running, if not, please, check out [MySQL download page](https://dev.mysql.com/downloads/installer/) and follow [these instructions](http://dev.mysql.com/doc/refman/5.7/en/installing.html).

To check your installations, run the following command in the command line:
```
$ php -v
PHP 5.6.27-1+deb.sury.org~trusty+1 (cli)  # sample output
Copyright (c) 1997-2016 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies
    with Zend OPcache v7.0.6-dev, Copyright (c) 1999-2016, by Zend Technologies

$ mysql --version
mysql  Ver 14.14 Distrib 5.5.54, for debian-linux-gnu (x86_64) using readline 6.3 # sample output
```

To start this example run commands listed below.

Clone the repository from github.com:
```
$ git clone git@github.com:anychart-integrations/php-mysql-template.git
```

Navigate to the repository folder:
```
$ cd php-mysql-template
```

Ensure you have php-mysql being installed, run:
```
$ php -m
```
If there isn't `mysql` in the list install it:
```
$ sudo apt-get install php{your_php_version}-mysql # e.g. sudo apt-get install php5.6-mysql
```

Set up MySQL database, use `-u -p` flags to provide username and password:
```
$  mysql < database_backup.sql
```

Drop `index.php`, `data.php` and `css` folder to a folder where you serve your .php files and your server (e.g. Apache or Nginx) could get them.
Open browser at an appropriate url.

Now you can update MySQL database data, run (don't forget to use `-u -p` flags if you need):
```
$  mysql < database_backup.sql
```
The chart on web page will update automatically.

## Workspace
Your workspace should look like:
```
php-mysql-template/
    static/
        css/
            style.css		# css style
    index.php				# main PHP file including HTML template
    data.php				# PHP file which loads data from MySQL
    database_backup.sql     # MySQL database dump
    database_backup.sql		# MySQL script to update database data
    LICENSE
    README.md
```

## Technologies
Language - [PHP](http://php.net)<br />
Database - [MySQL](https://www.mysql.com/)<br />

## Further Learning
* [Documentation](https://docs.anychart.com)
* [JavaScript API Reference](https://api.anychart.com)
* [Code Playground](https://playground.anychart.com)
* [Technical Support](https://anychart.com/support)

## License
[© AnyChart.com - JavaScript charts](http://www.anychart.com). Released under the [Apache 2.0 License](https://github.com/anychart-integrations/php-mysql-template/blob/master/LICENSE).
