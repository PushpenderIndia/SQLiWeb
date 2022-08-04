# SQLi Web
Website Containing Different Types of SQL Injection Vulnerabilities

## Different Types of SQLi Vulnerabilities Covered
- Error Based
- Union Based
- Double Query Based
- Blind Boolean Based
- Blind Time Based
- Time Based

## Injection Point of Vulnerabilities
- GET Based Parameter
- POST Based Parameter
- Header Based Parameter
- Cookies Based Parameter

## Lab Setup Instructions

1. Copy & Paste the Command in your linux System
```
sudo git clone https://github.com/PushpenderIndia/SQLiWeb && sudo mv SQLiWeb/sqli_challenges /var/www/html && sudo rm -r SQLiWeb && sudo service apache2 start && sudo service mysql start && firefox http://127.0.0.1/sqli_challenges/php/db/setup.php &
```

> If you have changed the MYSQL Credentials, You will get error in your browser, after running above command
> Follow below instructions for updating mysql creds

2. Update MySQL Credentials in `db_creds.php` file, present in `/var/www/html/sqli_challenges/php/db/`
```
<?php

// Update MySQL DB Credentials
$dbuser  = "root";
$dbpass  = "";

...
...

?>
```

3. By Default `db_creds.php` will have MYSQL Username: `root` & Password: "" (No Password)
4. Run this command to setup Database: `firefox http://127.0.0.1/sqli_challenges/php/db/setup.php &` or simply visit `http://127.0.0.1/sqli_challenges/php/db/setup.php` using web browser.
5. After Setting up the website, it will redirect you to `http://127.0.0.1/sqli_challenges/index.php`
6. Then whenever you want to start website, just run this command: 
```
sudo service apache2 start && sudo service mysql start && firefox http://127.0.0.1/sqli_challenges/index.php &
```

## Writeups
- [User-Agent Header Based - Blind SQLi in Sony: SQLi To RCE](https://hackerone.com/reports/1339430)


