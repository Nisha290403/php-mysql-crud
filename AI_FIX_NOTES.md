# AI Fix Notes

Session: seq-1777377168769-oresbectr
Repository: Nisha290403/php-mysql-crud

- [1] (critical) db.php: Hard-coded database credentials are stored directly in source code ('root' / 'password123'). This is a major security risk and makes credential rotation, environment separation, and secret management difficult. Move credentials to environment variables or a config file excluded from version control.
- [2] (critical) delete_task.php: SQL injection risk: raw GET parameter $id is directly inserted into the DELETE query. This is exploitable via a manipulated request. Use prepared statements and ensure the id is a validated integer.
- [3] (critical) edit.php: SQL injection risk: raw GET parameter $id is interpolated directly into the SELECT query without validation or prepared statements. An attacker can manipulate the query through the id parameter. Use a prepared statement and cast/validate the id as an integer.
- [4] (critical) edit.php: SQL injection risk: raw POST values ($title, $description) and GET parameter $id are directly interpolated into the UPDATE query. This allows arbitrary SQL execution through crafted form input. Use prepared statements with bound parameters and validate input server-side.
- [5] (critical) save_task.php: SQL injection vulnerability: user-controlled POST values ($title, $description) are interpolated directly into the SQL string. An attacker can modify the query, read/alter data, or drop tables. Use prepared statements with bound parameters instead of string concatenation.

