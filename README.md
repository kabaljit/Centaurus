
1. Create database
php bin/console doctrine:database:create


Creating the Database Tables/Schema
php bin/console make:migration
php bin/console doctrine:migrations:migrate

2. Create/Update the schema
php bin/console doctrine:schema:create
php bin/console doctrine:schema:update --force

3. To mock up users
php bin/console doctrine:fixtures:load


To run the server
php bin/console server:start


Create entity
php bin/console make:entity


Run a query
php bin/console doctrine:query:sql 'SELECT * FROM users'
