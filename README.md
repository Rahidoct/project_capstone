![preview img](/app/public/frontend/img/logo.png)

# Demo E-Commerce

<!-- ![preview img](/preview.png) -->

# Download Project

Clone the project

```bash
  git clone https://github.com/Rahidoct/project_capstone.git project-capstone
```

Go to the project directory

```bash
  cd project-capstone
```

-  Copy .env.example file to .env and edit database credentials there

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan migrate:fresh --seed
```

```bash
    php artisan storage:link
```

# Login
#### Admin
-   email = admin@mentor.com
-   password = 123

#### Users
-   email = users@mentor.com
-   password = 123
