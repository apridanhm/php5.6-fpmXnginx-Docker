# PHP 5.6 Legacy Environment (Nginx + PHP-FPM + Docker)

This repository provides a **containerized PHP 5.6 runtime** designed to run
**legacy PHP applications on modern operating systems** using Docker.

The purpose of this project is to **preserve and operate legacy systems**
without installing deprecated software directly on the host OS.

---

## Background

Many organizations (universities, enterprises, internal systems) still rely on
legacy PHP applications that:

- Cannot be easily upgraded
- Depend on deprecated PHP versions
- Must remain operational for business or academic continuity

Since PHP 5.6 is end-of-life and unsupported by modern Linux distributions,
Docker is used here to **isolate the legacy runtime** while keeping the host OS
secure and up to date.

---

## Architecture Overview

Client > Nginx (Container) > PHP-FPM 5.6 (Container)


- **Nginx** handles HTTP requests
- **PHP-FPM 5.6** executes the legacy PHP application
- The host OS runs only Docker (no legacy packages installed)

---

## Tech Stack

- PHP 5.6 (legacy runtime)
- PHP-FPM
- Nginx
- Docker
- Docker Compose

---

## Project Structure

 app/ # Legacy PHP application
 php56/ # PHP 5.6 Dockerfile
 docker-compose.yml # Docker Compose definition
 nginx.conf # Nginx configuration
 php.ini # PHP configuration
 README.md


---

## How to Run

Run the following commands from the directory containing `docker-compose.yml`:

```bash
docker compose build --no-cache
docker compose up -d

