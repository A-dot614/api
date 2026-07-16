# Issues Found

## Issue 1 (Critical — Blocks All API Requests on Hosting)

**File:** `config/database.php:4`

**Problem:** Invalid class import `use Pdo\Mysql;` — the class `Pdo\Mysql` does not exist in PHP. This import is used on line 63 as `Mysql::ATTR_SSL_CA`.

```php
use Pdo\Mysql;

// ...

'options' => extension_loaded('pdo_mysql') ? array_filter([
    Mysql::ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
]) : [],
```

**Why it works on localhost:** The `.env.example` defaults to `DB_CONNECTION=sqlite`. With SQLite, `extension_loaded('pdo_mysql')` returns `false`, so the ternary returns `[]` and the `Mysql::ATTR_SSL_CA` expression is never evaluated — no error occurs.

**Why it fails on hosting:** On hosting, a MySQL database is typically used. `extension_loaded('pdo_mysql')` returns `true`, so PHP attempts to resolve `Mysql::ATTR_SSL_CA` (i.e., `Pdo\Mysql::ATTR_SSL_CA`). Since the class `Pdo\Mysql` does not exist, this throws a **Fatal Error: Class "Pdo\Mysql" not found**, causing a 500 error on every request.

**Fix applied:** Removed the `use Pdo\Mysql;` import and replaced both occurrences of `Mysql::ATTR_SSL_CA` with `PDO::MYSQL_ATTR_SSL_CA` in `config/database.php`.

---

## Issue 2 (CORS — Blocks `/api/movies/{id}` on Cross-Origin Requests)

**File:** `config/cors.php:18`

**Problem:** The `paths` config only listed `'api/movies'`, which matches `/api/movies` exactly but **does not** match `/api/movies/{id}` (the `show` route). Laravel's CORS middleware uses `Str::is()` for path matching, and without a wildcard `*`, only the literal path is matched.

```php
// Before
'paths' => ['api/movies'],
```

Routes defined in `routes/api.php`:
| Method | Path | CORS works? |
|--------|------|-------------|
| GET | `/api/movies` | Yes |
| POST | `/api/movies` | Yes |
| GET | `/api/movies/{id}` | **No** |

**Why it works on localhost:** Same-origin requests (e.g., Postman, or a frontend served from the same origin) do not require CORS headers.

**Why it fails on hosting:** If the frontend is served from a different origin (e.g., `https://abdullahbinmumtaz.com` making requests to an API at a different domain), the browser will block `GET /api/movies/{id}` because the response lacks CORS headers, resulting in a CORS error.

**Fix applied:** Changed the paths config to include the wildcard route:

```php
// After
'paths' => ['api/movies', 'api/movies/*'],
```
