<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/4ndev/blog-wiber/blob/main/public/img/wiber.png?raw=true" width="400" alt="Laravel Logo"></a></p>
<p align="center">Prueba técnica para Wiber</p>
<p align="center">Este proyecto está hecho bajo windows 11 con WSL2 y docker.</p>

## Instalación con docker

#### 1. Clonar el proyecto
```bash
git clone https://github.com/4ndev/blog-wiber.git
```

#### 2. Ejecutar `composer install`

#### 3. Copiar `.env.example` en `.env`
```bash
cp .env.example .env
```

#### 4. Arrancar el proyecto

```bash
./vendor/bin/sail up -d
```
A partir de ahora, cada vez que desee ejecutar el comando artasian, debe hacerlo desde el contenedor. <br>
Acceso al contenedor
```bash
./vendor/bin/sail bash
```

#### 5. Establecer encryption key

```bash
php artisan key:generate --ansi
```
#### 6. Ejecutar las migraciones

```bash
php artisan migrate
```
#### 7. Instalar las dependencias
```bash
npm install
npm run dev
```


