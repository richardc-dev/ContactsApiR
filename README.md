<h1 align="center" >ContactApiR</h1>

# Description
_**API for personal contact management, where users can register, log in and manage their own contacts individually. Each user has a private space to add, edit, delete and list their contacts**_
# main features
### 1. User Management:
Users can register, log in, and manage their own contacts in a secure and isolated environment.

### 2. Contact CRUD Operations:
Provides full operations (Create, Read, Update, Delete) for efficiently managing contacts.

### 3. Secure Authentication:
Utilizes Laravel Sanctum for secure, token-based authentication, ensuring privacy and data protection.

### 4. RESTful Architecture:
Adheres to REST conventions with clear and consistent endpoints for API interaction.

### 5. Scalability and Extensibility:
Built with Laravel, allowing easy maintenance, scalability, and the addition of new features like advanced search or system integration.

# Technologies Used
**This API was built using the following technologies:**

* Laravel: PHP framework for building web applications and APIs.
* MySQL: Relational database for storing user and contact data.
* Sanctum: Lightweight authentication system for APIs.
* PHP: Backend programming language.
* Composer: Dependency manager for PHP.
* Thunder Client: Visual Studio Code extension for testing and interacting with the API during development.

# Requirements

To run this project, you need to meet the following requirements:

1. **PHP**  
   The API is developed in PHP. It is recommended to use version 8.0 or higher.

2. **Composer**  
   Composer is required to manage the project's dependencies. You can install it from [here](https://getcomposer.org/download/).

3. **Database**  
   The API requires a MySQL or MariaDB database. Make sure you have a database configured and accessible from the `.env` file.

4. **Web server**  
   You will need a web server to run the project, such as Apache or Nginx. However, for development, you can use Laravel's built-in development server by running `php artisan serve`.

5. **Thunder Client**  
   To test the API, you can use Thunder Client in Visual Studio Code, a lightweight and easy-to-use API client to make HTTP requests.

  
# **How to Install and Run the Project**

Follow these steps to download and start the API:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your_username/your_repository.git
   cd your_repository
2. **Install dependencies:**
   ```bash
   composer install
3. **Set up the environment:**
   * Create the .env file by copying the example file:
   ```bash
   cp .env.example .env
4. **Generate the application key:**
   ```bash
   php artisan key:generate
5. **Set up the database:**
   * Ensure you have a database configured as specified in the .env file.
   * Run migrations to create the required tables (optional):
   ```bash
   php artisan migrate
6. **Start the development server:**
   ```bash
   php artisan serve
7. **Test API**
   * Use Thunder Client in Visual Studio Code to make requests to the API endpoints.
# License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
