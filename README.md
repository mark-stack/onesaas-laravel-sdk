# OneSaas Laravel SDK

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

The **OneSaas Laravel SDK** allows Laravel applications to integrate **OneSaas Single Sign-On (SSO)** quickly and securely. Vendors can implement SSO in minutes, letting users log in with their OneSaas accounts directly to your SaaS dashboard.

This SDK supports **Laravel 10, 11, and 12** and provides:

- A ready-to-use **SSO login route**
- **Test command** to generate local SSO links
- **Service provider** for auto-registration
- **Middleware for signature verification (optional)**
- Fully compatible with Laravel apps without extra setup

---

## Features

- ✅ Secure OneSaas SSO login route
- ✅ Quick installation and auto-discovery via Composer
- ✅ Works with Laravel 10, 11, and 12
- ✅ Test SSO URLs locally before going live
- ✅ Extensible and vendor-friendly

---

## Installation

### 1. Add the SDK repository

If testing locally:

```bash
composer config repositories.onesaas-sso '{"type": "path", "url": "/path/to/onesaas-laravel-sdk"}'
```

```bash
composer require markevans/onesaas-laravel-sdk:"dev-main"
```

```bash
ONESAAS_SECRET=your_shared_secret_here
```

```bash
https://yourapp.com/onesaas/login?email=user@example.com&name=John+Smith&onesaas_key=SHARED_SECRET
```

```bash
php artisan vendor:publish --tag=onesaas-php-sdk
```

### The SDK will:
- Validate the secret key
- Find or create the user
- Log them in
- Redirect them to your dashboard (or another location you specify)

### The package automatically registers:
GET /onesaas/login

### Example SSO URL
https://yourapp.com/onesaas/login?email=example@gmail.com&name=Bob+Down&onesaas_key=YOUR_SECRET

```bash
$response = Http::post('https://yourapp.com/api/onesaas/auth', [
    'onesaas_key' => config('services.onesaas.secret'),
    'email' => "example@gmail.com",
    'name' => "Bob Down",
]);

$data = $response->json();
```

### Security
- Validates all incoming secrets
- Rejects missing or incorrect keys
- Does not expose sensitive user data
- Easily extended (HMAC signing, timestamps, nonce, etc.)