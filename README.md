<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



# Тестовая задача.
1): git clone https://github.com/Muhammadislom/laravel_api.loc.git <br/>
2): cd FolderName<br />
3): composer install <br />
4): copy .env.example .env <br />
5): Настройка .env файла для своей базы данных <br />
6): php artisan key:generate <br />
7): php artisan serve

Model Role
Параметр: 'title' Тип varchar Уникальное значения. 

* `GET api/v1/role`, Для получения списка ролей;
* `GET api/v1/role/n`, Для получения определённого роля по id;
* `POST api/v1/role`, Для создания новой роли;
* `PUT api/v1/role/n`, Для изменения;
* `DELETE api/v10/role/n`, Для удаления;

Model User
Параметр: 'nick_name' Тип varchar Уникальное значения
Параметр: 'email' Тип varchar Уникальное значения
Параметр: 'first_name' Тип varchar
Параметр: 'last_name' Тип varchar
Параметр: 'password' Тип varchar
Параметр: 'role_id' Тип integer

* `GET api/v1/user`, Для получения списка пользователей;
* `GET api/v1/user/n`, Для получения определённого пользователя по id;
* `POST api/v1/user`, Для создания нового пользователя;
* `PUT api/v1/user/n`, Для изменения;
* `DELETE api/v1/user/n`, Для удаления;


Model Category
Параметр: 'title' Тип varchar Уникальное значения
Параметр: 'parent_category_id' Тип integer


* `GET api/v1/category`, Для получения списка категории;
* `GET api/v1/category/n`, Для получения определённого категории по id;
* `POST api/v1/category`, Для создания новой категории;
* `PUT api/v1/category/n`, Для изменения;
* `DELETE api/v1/category/n`, Для удаления;


Model Product
Параметр: 'title' Тип varchar
Параметр: 'img' Тип varchar 
Параметр: 'category_id' Тип integer


* `GET api/v1/product`, Для получения списка продукта;
* `GET api/v1/product/n`, Для получения определённого продукта по id;
* `POST api/v1/product`, Для создания нового продукта;
* `PUT api/v1/product/n`, Для изменения;
* `DELETE api/v1/product/n`, Для удаления;


Для проверки подлиности пользователя.

* `GET api/v1/authenticate`, email и password параметры обязательны
