# ✅ Requisitos

Antes de começar, certifique-se de que você tenha os seguintes softwares instalados na sua máquina:

* [PHP](https://www.php.net/downloads.php) (recomenda-se versão 8.1 ou superior)
* [Composer](https://getcomposer.org/)
* [Node.js e npm](https://nodejs.org/)
* [Laravel](https://laravel.com/docs/installation) (instalado globalmente ou via `composer create-project`)

---

# 🚀 Como rodar o projeto

Siga os passos abaixo para configurar e executar o projeto em ambiente de desenvolvimento:

### 1. Instale as dependências do PHP

```bash
composer install
```

### 2. Instale as dependências do Node.js

```bash
npm install
```

### 3. Rode as migrações do banco de dados

```bash
php artisan migrate
```

### 4. Crie o link simbólico para o diretório de storage

```bash
php artisan storage:link
```

---

# ▶️ Executando o projeto

Agora, abra **dois terminais diferentes** na pasta do projeto e execute os comandos a seguir:

### Terminal 1 – Webpack (Vite ou Mix):

```bash
npm run dev
```

### Terminal 2 – Servidor Laravel:

```bash
php artisan serve
```

---

# 🌐 Acesse o projeto

Depois de iniciar os dois servidores, acesse o link gerado no terminal (geralmente `http://127.0.0.1:8000`) para ver o projeto rodando no navegador.

---
