# Cloudflare Turnstile Demo Application

This is a simple demo application written with PHP that demonstrates how to use the Cloudflare Turnstile to protect your application from abuse.

## Requirements

- Docker

## Running locally

1. Clone this repository

```bash
git clone git@github.com:NotMixu/cloudflare-turnstile-demo-php.git
```

2. Copy the contents of the `config.example.php` file to a new file called `config.php` and fill in the values

```bash
cp config.example.php config.php
```

3. Run the application with docker compose

```bash
docker compose up
```

4. Open your browser and navigate to http://localhost:8000
