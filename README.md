# 124nagoya2018.kosen.cf
The official website of Kosen Conference in Nagoya 2018.

## Features
- Event instraction
- Participants management
  - Reception and canceling
  - Importing from connpass

## Requirements
- HTTP Static Server w/ PHP support
- PHP 7+
- MySQL 5.x or alternatives

## Installation
1. Clone this repository.
2. Create MySQL database and initialize using `init.sql`.
3. Open `inc/mysql.php` and fill the database information.
4. Set the directory as the document root.
5. Done!

### Setup Participants Management
1. On connpass, export the participants list of the event as a CSV file.
2. Open `/reception/` via your browser.
3. Import the CSV file.
4. Done!

## License
This website is released under the GPL License.
For details, refer [LICENSE.md](LICENSE.md).
