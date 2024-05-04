# Office Goods Inventory System - Laravel 10.10

Inventory System, This application was created to simplify the procurement of office goods and is an application for the final bootcamp assignment (Bootcamp Batch 2 - 2023).

## Table of Contents

- [How to Install](#how-to-install)
  - [Clone Repository](#clone-repository)
  - [Install Packages](#install-packages)
  - [Configure](#configure)
  - [Migrate Data](#migrate-data)
  - [Public Disk](#public-disk)
  - [Running Application](#running-application)
- [Account](#account)
- [Screenshots](#screenshots)
  - [Dashboard](#dashboard)
  - [Kategori](#kategori)
  - [Stok Barang](#stok-barang)
  - [Barang Masuk](#barang-masuk)
  - [Barang Keluar](#barang-keluar)
- [License](#license)

## How to Install

### Clone Repository
open your terminal, go to the directory that you will install this project, then run the following command:

```bash
git clone https://github.com/de-yant/inventory-barang.git

cd inventory-barang 
```

### Install Packages
Install vendor using composer

```bash
composer update
```

Install node module using npm

```bash
npm install
```

### Configure
Copy .env.example file

```bash
cp .env.example .env
```

Then run the following command :

```php
php artisan key:generate
```

### Migrate Data
create an empty database with mysql 8.x version, then setup that fresh db at your .env file, then run the following command to generate all tables and seeding dummy data:

```php
php artisan migrate:fresh --seed
```
### Public Disk
To make these files accessible from the web, you should create a symbolic link from public/storage to storage/app/public.
To create the symbolic link, you may use the storage:link Artisan command:

```php
php artisan storage:link
```

### Running Application
To serve the laravel app, you need to run the following command in the project director (This will serve your app, and give you an adress with port number 8000 or etc)
- **Note: You need run the following command into new terminal tab**

```php
php artisan serve
```

Visit
```bash 
[http://127.0.0.1:8000]
```

## Account
  | admin@mail.com   | password |

## Screenshots

### Dashboard

![Dashboard](https://github.com/de-yant/inventory-barang/blob/main/public/assets/preview/dashboard.png?raw=true)

### Kategori

![Kategori](https://github.com/de-yant/inventory-barang/blob/main/public/assets/preview/kategori-brg.png?raw=true)

### Stok Barang

![Stok Barang](https://github.com/de-yant/inventory-barang/blob/main/public/assets/preview/stok-brg.png?raw=true)

### Barang Masuk

![Barang Masuk](https://github.com/de-yant/inventory-barang/blob/main/public/assets/preview/bm.png?raw=true)


### Barang Keluar

![Barang Keluar](https://github.com/de-yant/inventory-barang/blob/main/public/assets/preview/bk.png?raw=true)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
