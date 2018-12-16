#FINAL PROJECT
To run the FAQ project:

git clone https://github.com/SurabhiChaudhari/finals/commits/master
CD into FAQ and run composer install
cp .env.example to .env
run: php artisan key:generate
setup database / with sqlite or other https://laravel.com/docs/5.6/database
Run: php artisan migrate
Run: unit tests: phpunit
Run: seeds php artisan migrate:refresh --seed

EPIC STORY:
As a Developer of project I want to test whether all the functionalities are working correctly and there isn't any bug in the code so that I can perform checks and gain insights if each and every feature works as per the project requirement.
The Dusk Test Cases and their user stories are as following:
1. User Registration
2. User Login
3. Create a Question on the FAQ homepage
4. View a Question on the FAQ homepage
5. Edit and Update a Question on the FAQ homepage
6. Delete a Question on the FAQ homepage
7. Create an Answer on the FAQ homepage
8. View answers on the FAQ homepage
9. Edit my answers on the FAQ homepage
10.Delete my answers on the FAQ homepage
11. Create, view , edit/update profile

1. User Registration: As a developer I want to give users UI where they can put their email Id, password and reconfirm their password and the system should be able to successfully register them and save their credentials in database so that next time when the user wants to login, he/she is able to do so successfully.This I have tested with dusk test and this functionality works in the FAQ project.

2.User Login: Already registered user should be able to login into the system, (we are also using factory method to generate 50 fake users and we get those by seeding (php artisan migrate:refresh --seed) just to understand and implement this feature and get the real on job project experience of the system performs when there are 50 users in the database).

3. Create a Question on the FAQ homepage:A user can create a question on the FAQ project, we make use of model, factory, database table to save the questions then we make controllers, route and views.

4. View a Question on the FAQ homepage: A user should be able to view already created question can be done by addind button, href and routes. 

5. Edit a Question on the FAQ homepage: A user should be able to edit already created question can be done by addind button and href and routes.

6. Delete a Question on the FAQ homepage: A user should be able to delete already created question can be done by addind button and href and routes.

7. Create an Answer on the FAQ homepage: A user can create an answer for a question on the FAQ project, we make use of model, factory, database table to save the answers then we make controllers, route and views.

8. View answers on the FAQ homepage: A user should be able to view already created answers can be done by addind button, href and routes.

9. Edit my answers on the FAQ homepage:A user should be able to edit already created answers can be done by addind button and href and routes.

10.Delete my answers on the FAQ homepage:A user should be able to delete already created answer can be done by addind button and href and routes.

11. Create, view , edit/update profile: A user should be able to create, view and update profile and this can be achieved by creating model, factory, database table to save the answers then we make controllers, routes,views, addind button its href and routes.


I have written 11 dusk tests . All of them are working without failures. I have commited the code. These tests can be found in my github repository.	Works Perfectly. I have sent the Screenshot of my dusktests and full user stories to Professor.

