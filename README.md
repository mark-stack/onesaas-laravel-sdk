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
