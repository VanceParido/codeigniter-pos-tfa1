# CodeIgniter POS Foundation

A four-page Point-of-Sale foundation application created using CodeIgniter 4.

## Pages

- `/` - Landing page
- `/about` - About page
- `/customers` - Customer Accounts
- `/users` - User Accounts

## Requirements

- PHP 8.2 or newer
- CodeIgniter 4
- Composer
- Apache or another PHP web server

## How to Run

1. Clone this repository.
2. Run `composer install`.
3. Copy `env` to `.env`.
4. Configure `app.baseURL`.
5. Start Apache or run `php spark serve`.
6. Open the application in a browser.

## Data

Customer and user records currently use static PHP arrays. No database is used in this activity.