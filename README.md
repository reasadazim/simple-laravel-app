# Simple Laravel App

Project url: http://simplelaravelapp.reasadazim.com

This is a basic Laravel Application which stores **agents**, **customers** and **orders** information. 
 - [x] **Each order has 1 agent and 1 coustomer.**
 - [x] **Each customer has 1 agent.** 
 - [x] **Agents has many  customers.**
 - [x] **Orders** database table has cascade relation with **customers**.
 - [x] **Customers** database table has cascade relation with **agents**.
 - [x] Admin can add/view/edit/delete any agent, customer & order.
 - [x] Admin has to register and login in order to access the dashboard.
 - [x] File and Image upload option available.
 - [x] Login/register option is available.
## ER Diagram
![ER Diagram](https://reasadazim.com/wp-content/uploads/2023/02/simple-laravel-app.jpg)

## Framework
 - Laravel Framework 9.52.4 
## Dependencies
 - tailwindcss 3.2.7
 - tailwindcss/forms 0.5.2
 - alpinejs 3.4.2
 - autoprefixer 10.4.2
 - axios 1.1.2
 - laravel-vite-plugin 0.7.2 
 - lodash 4.17.19
 - postcss 8.4.6
 - vite 3.1.0
## Tested in
 - Node v16.18.0
 - Composer Composer version 2.1.8
 - PHP 8.0.19
 - MariaDB 10.4.24
 - PhpMyAdmin 5.2.0
   
## Instruction
 - Clone the repo.
 - A demo sql database is uploaded in ***/databases/sql/*** directory.
 - Import the database.
 - Admin Registration: http://YOUR_HOSTNAME/register
 - All demo images and files are uploaded in ***/storage/files/public*** direcotry.

## Troubleshoot
If images and styles are not loaded please run following commands:
```
>> php artisan storage:link
>> npm run build
>> php artisan cache:clear
```
## Screenshots
![Login](https://reasadazim.com/wp-content/uploads/2023/02/1.png)
![Dashboard](https://reasadazim.com/wp-content/uploads/2023/02/2.png)
![Agent List](https://reasadazim.com/wp-content/uploads/2023/02/3.png)
![Agent Details](https://reasadazim.com/wp-content/uploads/2023/02/4.png)
![Customer Details](https://reasadazim.com/wp-content/uploads/2023/02/6.png)
![Order Details](https://reasadazim.com/wp-content/uploads/2023/02/5.png)
![Add Customer](https://reasadazim.com/wp-content/uploads/2023/02/7.png)
