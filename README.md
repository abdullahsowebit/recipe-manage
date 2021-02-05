Recipe App
Steps to run the project
1. Create MYSQL Database
  :recipe
2. Update Env with Database credentials
3. Run

  :composer install
  
  :npm install
  
  :php artisan migrate
  
  :php artisan jwt:secret
  
  :npm run dev
  
  :php artisan serve
  

*API DOCUMENTATION*

**POST**

Login

http://127.0.0.1:8001/api/auth/login?email=abdullah@gmail.com&password=abdullah

Make things easier for your teammates with a complete request description.

Request Params

email

abdullah@gmail.com

password

abdullah

Bodyform-data

email

abdullah@gmail.com

password

abdullah

**POST**

create-ingredient

http://127.0.0.1:8001/api/create-ingredient

Make things easier for your teammates with a complete request description.

Authorization

Bearer Token

Token

<token>

Bodyform-data

name

Green Chilli

measure

pieces

supplier

Shaan

**GET**

Ingredients

http://127.0.0.1:8001/api/ingredients

Make things easier for your teammates with a complete request description.

Authorization

Bearer Token

Token

<token>

POST

delete-ingredient

http://127.0.0.1:8001/api/delete-ingredient

Make things easier for your teammates with a complete request description.

Authorization

Bearer Token

Token

<token>

Bodyform-data

id

1

**GET**

Boxes

http://127.0.0.1:8001/api/boxes

Make things easier for your teammates with a complete request description.

Authorization

Bearer Token

Token

<token>

**POST**

Create Box

http://127.0.0.1:8001/api/create-box

Make things easier for your teammates with a complete request description.

Authorization

Bearer Token

Token

<token>

Bodyform-data

recipe

Kabab
