# PHP Deprecated mysql_* Functions

This repository demonstrates a common error in PHP code: the use of deprecated `mysql_*` functions.  These functions were removed in PHP 7.0+ and are no longer supported. This example shows how to identify and resolve this issue by migrating to either MySQLi or PDO.

## Bug Description:

The `bug.php` file contains PHP code that utilizes the outdated `mysql_*` functions to connect to a MySQL database, execute queries and fetch results.  This leads to errors and warnings in newer PHP versions.

## Solution:

The `bugSolution.php` file offers a corrected version using the MySQLi extension.  This approach provides a safer and more reliable method for interacting with MySQL databases in PHP.

## How to reproduce

1. Clone or download this repository
2. Set up a local MySQL server and create a database with a table named `mytable` (with fields `id` and `name`)
3. Update the credentials (username, password, database name) in both `bug.php` and `bugSolution.php` to reflect your server's settings.
4. Run `bug.php` to see the deprecated function error.
5. Run `bugSolution.php` to see the corrected functionality.

## Contributing:

Contributions are welcome! Please feel free to open issues or submit pull requests.