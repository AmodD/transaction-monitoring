Installation Instructions

1. Install PHP >= 8.1
2. Install latest npm
3. Git clode the code repository
4. composer install
5. composer clearcache
6. composer selfupdate
7. npm install
8. Type 'php artisan' in the root folder. If you see artisan commands, then everything is fine. If you see error, resolve it.
9. Generate key using command: "php artisan key:generate". A Base64 key will be automatically inserted in your .env file.
10. Update DB parameters for sqlite in .env file.
11. Update SMTP parameters in .env file.
12. php artisan migrate:refresh
13. php artisan serve
14. npm run dev
