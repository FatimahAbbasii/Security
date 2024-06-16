<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# Testing


## Test Plan


### User Story 1
As a new user, I want to register on the platform so that I can access the services provided.

#### Acceptance Criteria:

**Given:** Register a new user.

##### Happy-Path 😊

**When:** The user provides a valid name, email, and password that meet the specified criteria.  

**Then:** The system registers the user successfully and redirects them to the home page.

**When:** A new user is successfully registered.

**Then:** The system saves the user data in the database securely.

##### Unhappy-Path ☹

**When:** The user provides invalid data, such as an invalid email or a password that does not meet the requirements.

**Then:** The system displays an error message indicating the specific validation errors and does not register the user.

### User Story 2
As a registered user, I want to log in to the platform so that I can access my account and use the available services.

#### Acceptance Criteria:

**Given:** Log in an existing user.

#### Happy-Path 😊

**When:** The user provides valid login credentials (email and password).

**Then:** The system logs the user in successfully and redirects them to the dashboard.

**When:** The user is successfully logged in.

**Then:** The system maintains the user's authenticated session and allows access to protected routes.

#### Unhappy-Path ☹

**When:** The user provides invalid login credentials.

**Then:** The system displays an error message indicating that the credentials are incorrect and does not log the user in.

## Applying the V-Model to Two User Stories
![applying the V-Model to Two User Stories](https://github.com/FatimahAbbasii/Security/assets/143887014/37ed194d-1b28-4ee2-926b-432ed957b658)

## Test result 
![Result of the completed tests](https://github.com/FatimahAbbasii/Security/assets/143887014/05ba4c3a-4787-4e3b-b258-4eb5998d81cc)

## Evaluation 
![Evalution](https://github.com/FatimahAbbasii/Security/assets/143887014/fe5d3c40-0517-46f8-a592-3a257be2cffe)




