## Start
1. To prepare the <mark>.env</mark> file, just run `cp .env.example .env`.
2. Then run this command `docker-compose up -d` in the root dir.
3. Go to app container like `docker-compose exec app bash`.
    Then run this commands respectively: \
    `composer install` \
    `php artisan key:generate` \
    `php artisan migrate`
4. Finally, go to `http://localhost/users` in your browser.

## Routes/ Endpoints
`/users`
 - Can specify what number of users to generate
 - Can clean the users data

 `/users/report`
 - displays the user analysis for gender, age, continent
 - uses apexcharts

 `/users/report/continentData`
 - returns json for the calculation of users's continent

`/users/report/ageData`
- returns json for the calculation of users's age

`/users/report/sexData`
- returns json for the calculation of users's gender

## Additional Infos
- For the actual database data, please go to `http://localhost:8888/`, and check <mark>laravel_db</mark>
- To compare the speed of two different approach, laravel telescope is installed,
    we can check the below routes in `http://localhost/telescope/requests`:
    - `/users/report`
    - `/users/report?version=2`

