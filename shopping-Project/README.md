# Fashion Store — PHP & MySQL E-Commerce Website

An online clothing and accessories store for **women, men and kids**, with a customer shop and a full **admin panel**.

## Features

**Customers**
- Sign up and log in (passwords stored as secure hashes)
- Browse 30+ category pages (eastern / western wear, shoes, khussa, rings, earrings, bags, watches, wallets, ties, toddler wear…)
- Add to cart, change quantities, remove items
- Checkout with delivery details, view "My Orders" with order status
- Product reviews and a contact form

**Admin panel** (`/admin`)
- Secure admin login; every admin page is protected
- Add, edit and delete products for men, women and kids, with image upload
- View and manage orders (pending → shipping → completed)
- Manage registered users, admins and contact messages
- Dashboard with totals

## Tech stack
PHP 8 · MySQL / MariaDB · Bootstrap 5 · HTML5 · CSS3 · JavaScript · XAMPP

## Security
- All database input is escaped and IDs are cast to integers (no SQL injection)
- Passwords hashed with `password_hash()` / `password_verify()`
- Admin pages require an admin session
- Image uploads are checked and saved with random names; scripts can't run from the upload folder
- Page output is HTML-escaped (no XSS from user input)

## Run it locally (XAMPP)
1. Copy this folder to `xampp/htdocs/shopping`.
2. Start **Apache** and **MySQL** in XAMPP.
3. Open phpMyAdmin (http://localhost/phpmyadmin), create a database called `ecommerece`, and import `database/fashion_store.sql`.
4. Copy `config.example.php` to `config.php` and check the database details.
5. Open http://localhost/shopping

Demo customer: `demo@fashionstore.local` / `Demo@12345`

## Author
Sadia Farooq · [GitHub](https://github.com/sadiafarooq-dev) · [LinkedIn](https://www.linkedin.com/in/sadia-farooq-16bb31374)
