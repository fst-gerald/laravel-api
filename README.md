## Start
1. Please run this command `docker-compose up -d` in the root dir.
2. Go to `http://localhost/users` in your browser.


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