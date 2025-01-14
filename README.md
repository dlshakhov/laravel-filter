## Laravel  filters


copy .env.example

```
cp .env.example .env
```

install laravel dependencies

```
composer install
```

run sail environment

```
./verdor/bin/sail up
```

set .env  DB_HOST

```
DB_HOST=127.0.0.1
```
install migrations and seeds

```
php artisan migrate:fresh --seed
```

change .env  DB_HOST

```
DB_HOST=mysql
```

filters string emample

```
http://0.0.0.0/?dog_name=Blanca

```

possible query params

```
firstname, lastname, age, location, dog_name, dog_age
```
