To run the server
php bin/console server:start

Create database
php bin/console doctrine:database:create

Create entity
php bin/console make:entity

Creating the Database Tables/Schema
php bin/console make:migration
php bin/console doctrine:migrations:migrate


Create/Update the schema
php bin/console doctrine:schema:create
php bin/console doctrine:schema:update --force

Run a query
php bin/console doctrine:query:sql 'SELECT * FROM users'

To mock up users
php bin/console doctrine:fixtures:load
