# lumen7-backend-product
Back End Product Lumen 7

> https://blog.cacan.id/back-end-product-lumen-7


# Cara Penggunaan:

## Clone dari GitHub:
git clone https://github.com/blogcacanid/lumen7-backend-product.git

## Lalu masuk ke direktori project:
cd lumen7-backend-product

## Selanjutnya jalankan perintah berikut secara berurutan:
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan jwt:secret
- php artisan migrate

# Testing
Jalankan Lumen 7 dengan menggunakan perintah berikut:
- php artisan serve

Lalu buka browser dan ketikkan URL http://localhost:8000



## Testing via Postman
Untuk testing kita akan menggunakan Postman.
### GET 
GET : digunakan untuk mengambil data dari server
#### All Record
Buka postman lalu pilih method GET kemudian ketikkkan URL http://localhost:8000/api/products
![002](https://user-images.githubusercontent.com/51890752/84715836-da91c780-af9b-11ea-87bc-a472fefbce19.jpg)


#### Pagination Record
Buka postman lalu pilih method GET kemudian ketikkkan URL http://localhost:8000/api/products_page
![003](https://user-images.githubusercontent.com/51890752/84715860-f006f180-af9b-11ea-8b1f-19cbb1b33240.jpg)


#### Get berdasarkan ID
Buka postman lalu pilih method GET kemudian ketikkkan URL http://localhost:8000/api/product/19
![004](https://user-images.githubusercontent.com/51890752/84715875-fbf2b380-af9b-11ea-8d6e-c0d9f8840769.jpg)


### Post
POST : digunakan untuk menambah data
Buka postman lalu pilih method POST kemudian ketikkkan URL http://localhost:8000/api/products
Selanjutnya kita akan mencoba menambahkan data product.
Pada bagian param isikan data berikut:
- product_name : Kao Attack Softener Fresh Up Dazzling Lilac 800+100Ml
- product_price : 34000
![005](https://user-images.githubusercontent.com/51890752/84715905-0d3bc000-af9c-11ea-8283-a2a2afd7b19c.jpg)


### Put
PUT : digunakan untuk mengupdate data
Buka postman lalu pilih method PUT kemudian ketikkkan URL http://localhost:8000/api/products/7
Selanjutnya pada bagian param isikan data berikut:
- product_name : SO KLIN RAPIKA Pelicin Pakaian 400ml	
- product_price : 6100
![006](https://user-images.githubusercontent.com/51890752/84715924-188eeb80-af9c-11ea-8b40-05fb28cbcc13.jpg)


### Delete
DELETE : digunakan untuk menghapus data
Buka postman lalu pilih method DELETE dan ketikkkan URL http://localhost:8000/api/products/17
![007](https://user-images.githubusercontent.com/51890752/84715956-28a6cb00-af9c-11ea-8700-b417e47fc16d.jpg)

Untuk melihat daftar route anda bisa menggunakan perintah berikut dari command prompt:
- php artisan route:list
![008](https://user-images.githubusercontent.com/51890752/84715995-34928d00-af9c-11ea-85d2-43fce3da1b5d.jpg)


# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
