## Converting Html To Pdf Using barryvdh/laravel-snappy Package

Laravel Snappy package uses <a href="https://wkhtmltopdf.org/" target="_black">Wkhtmltopdf</a> to convert html to pdf. The performance of this package is way better then some other pdf generating library which is wriiten in php like :- dompdf, mpdf, tcpdf etc. As laravel snappy uses <a href="https://wkhtmltopdf.org/" target="_black">Wkhtmltopdf</a>, it can generate pdf of large amount of data withing a very short time. On the other hand, dompdf, mpdf and tcpdf fails dealing with large amount of data.

## Installation Process

1. At first cd to the project directory and run the following command :- 
<br>composer install 
2. Create a database on your database management system :- 'your_database'.
3. In .env file change the following line:- 
<br>DB_DATABASE=your_database
<br>DB_USERNAME=your_database_username
<br>DB_PASSWORD=your_database_password
4. Then cd to the project directory and run the following command:-
<br>php artisan migrate 
5. For users table seed run the following command:-
<br>php artisan db:seed

This will complete the installation process.

## Generating Pdf

Cd to the project directory and write the following command :-
<br>php artisan serve
This will starts a server at <http://127.0.0.1:8000>. <br> 
After that hit this end point :- <br>
http://127.0.0.1:8000/api/v1.0.0/users <br>
and you will get a pdf file with all users information which is stored in your migrated users table of your database. 

## Demonstration
Demonstration of 'Converting Html To Pdf Using barryvdh/laravel-snappy Package' will be written soon.
