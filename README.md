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
sudo git clone https://github.com/PushpenderIndia/SQLiWeb && sudo mv SQLiWeb/sqli_challenges /var/www/html && sudo rm -r SQLiWeb && sudo service apache2 start && sudo service mysql start && firefox http://127.0.0.1/sqli_challenges/setup.php &
```
2. Update MySQL Credentials in `db-creds.inc` file, present in `/var/www/html/SQLiWeb`
3. By Default `db-creds.inc` will have MYSQL Username: `root` & Password: ``
4. Run this command to setup Database: `firefox http://127.0.0.1/sqli_challenges/setup.php &` 
5. After Setting up the website, it will redirect you to `http://127.0.0.1/sqli_challenges/index.html`
