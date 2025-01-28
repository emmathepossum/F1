## F1 Library App

Preview available on: https://f1.emmathepossum.dev

Reads F1 API and displays all Drivers with some information

API Documentation: https://documenter.getpostman.com/view/11586746/SztEa7bL


### Setup

Start: `sail up -d` then available on http://localhost

Fresh DB: `sail artisan migrate:fresh --seed`

Install Admin Panel: `sail artisan voyager:install --with-dummy`

Login into http://localhost/admin with: 
> email: admin@admin.com  
> password: password


### TODO:
- filter
- tests
