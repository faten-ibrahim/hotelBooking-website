1- system documentation
installation guide:
- download project
- run composer install
- run php atrisan key:generate
- create mysql database
- create .env file
- cofigure database in .env file and set variable DB_CONNECTION=mysql
  and other database configration.
- run php artisan migrate
- run php artisan db:seed
- run php artisan:serve  ,run application into the browser
- npm run dev
- client can register an account
- if you want to use admin account , you can use this account to login (email: admin@gmail.com , password: adminPassword@123)

2. Time Estimate: git commits dates show time estimations

3. risk assesment :
  a. this paragraph wasn't clear enough to me becuse I used web routes not api for the website , so
   to make it easier I used seeder data and php unit test for authentication.
   =================================================================
   Create a PHP-based API server responsible for mocking authentication of the employee and
   the clients, and for serving mock data, via REST API.
   
  b. I faced some chalenges like incompatable versions like (php, nodejs, npm issues) to be updated with laravel 11 and laravel breeze


  finally I wish Mة work gets your approval .
  thanks



  
