# Worship Music Academy

Entorno local para levantar la pagina WordPress y la app CodeIgniter en el mismo stack Docker.

## Servicios

- WordPress: `http://worshipmusicacademy.localhost:8080`
- CodeIgniter: `http://worshipmusicacademy.localhost:8080/app/`
- phpMyAdmin: `http://localhost:8081`
- MySQL: `localhost:3306`

## Primer arranque

```bash
cp .env.example .env
docker compose up -d --build
```

WordPress se instala en la carpeta `wordpress/` durante el primer arranque del contenedor.

## Base de datos

El entorno crea dos bases:

- `wma_wordpress` para WordPress
- `wma_app` para CodeIgniter

Credenciales locales por defecto:

- Usuario: `wma_user`
- Password: `wma_password`
- Root password: `root_password`

## Instalar CodeIgniter

Cuando toque crear la app, se puede instalar CodeIgniter dentro de la carpeta `app/` con:

```bash
docker compose run --rm app composer create-project codeigniter4/appstarter .
```

Luego revisaremos el archivo `.env` de CodeIgniter para confirmar:

```dotenv
app.baseURL = 'http://worshipmusicacademy.localhost:8080/app/'
database.default.hostname = db
database.default.database = wma_app
database.default.username = wma_user
database.default.password = wma_password
database.default.DBDriver = MySQLi
database.default.port = 3306
```

## Estructura

```text
.
├── app/                 # CodeIgniter
├── wordpress/           # WordPress
├── db_data/             # Datos locales de MySQL
├── docker/
│   ├── app/             # Imagen PHP para CodeIgniter
│   ├── mysql/           # Inicializacion de bases
│   └── nginx/           # Proxy local
└── docker-compose.yml
```
