# Task Management System - Laravel Project

## Table of Contents
1. [Overview](#overview)
2. [Features](#features)
3. [Roles and Permissions](#roles-and-permissions)
4. [Project Setup](#project-setup)
    - [Requirements](#requirements)
    - [Installation](#installation)
    - [Environment Configuration](#environment-configuration)
    - [Database Setup](#database-setup)
5. [Docker Setup](#docker-setup)

---

## Overview

This **Task Management System** is a web application designed to support a Teacher-Student interaction model. Teachers can manage students, assign tasks created in LaTeX format, and evaluate their performance. Students can view tasks assigned to them and submit their responses. The application includes authentication and is containerized using Docker.

---

## Features

### Teacher Role
- **Student Management**: Add, edit, and delete students from the system.
- **Task Management**: Create, read, update, and delete tasks written in LaTeX, assign tasks to students.
- **Assessment**: Review and grade student submissions.

### Student Role
- **Task Access**: View assigned tasks.
- **Task Submission**: Submit responses to assigned tasks.

### Shared Features
- **Authentication**: Role-based login system (Teacher or Student).
- **Docker Integration**: Easily run the application using Docker for an isolated development environment.

---

## Roles and Permissions

The system has two roles:
1. **Teacher**: Can manage students and tasks, assign tasks, and assess student submissions.
2. **Student**: Can view and complete tasks assigned by the teacher.

---

## Project Setup

### Requirements
- **Laravel**: 8.x or later
- **Docker** (with Docker Compose)
- **MySQL**
- **PHP**: 8.0 or later
- **Composer**: for dependency management

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-repo/task-system.git
   cd task-system
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Generate the application key:
   ```bash
   php artisan key:generate
   ```

### Environment Configuration

1. Copy the `.env.example` to create a new `.env` file:
   ```bash
   cp .env.example .env
   ```

2. Update the `.env` file with database, mail, and other configurations as necessary.

### Database Setup

1. Set up your database in `.env` (e.g., `DB_DATABASE=task_system`, `DB_USERNAME=root`, `DB_PASSWORD=yourpassword`).
2. Run the migrations to set up the tables:
   ```bash
   php artisan migrate
   ```

---

## Docker Setup

This application includes a **Docker Compose** configuration to simplify setup.

1. Ensure Docker and Docker Compose are installed.
2. Build and start the Docker containers:
   ```bash
   docker-compose up -d
   ```
3. After the containers start, your application should be available at `http://localhost`.

The Docker Compose setup includes:
- **PHP**: Laravel runtime environment
- **MySQL**: Database service
- **phpMyAdmin**: Database management UI (access at `http://localhost:8080`)
