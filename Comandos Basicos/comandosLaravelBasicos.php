LARAVEL COMIENZO 
Instalar composer-> 1.https://getcomposer.org/download/
2.https://getcomposer.org/doc/00-intro.md#globally
Instalar Laravel
1.composer create-project --prefer-dist laravel/laravel "blog"
2.abrir serve->  php artisan serve
3 .\vendor\bin\phpunit --> pruebas unitarias server
4. php .\artisan make:test UserModuleTest --> Crea una prueba Unitaria 
5. php .\artisan make:controller UserController --> Crea un controlador 
6. env ->cambio la configuracion de la BD
7. php artisan migrate -->crea por primera vez la BD 
8. php .\artisan migrate:reset -> permite actualizar informacion de la bd que se crea nuevamente (borra todas las tablas, es necesario colocar el punto 7)
9.php .\artisan migrate:refresh ->elimina la tabla y vuelve a cargar la bd con los cambios 
(borra todos la informacion )
10. php artisan make:migration "add_professions_to_users" -> crea la base un archivo para generar una nueva tabla
11. php artisan migrate: rollback --> Laravel regresará el último lote de migraciones ejecutado
12.php artisan migrate: fresh --> borra todas las tablas de la bd
13.php .\artisan make:seeder ProfessionSeeder --> Crea un archivo para cargar datos directo en la bd

14. php .\artisan db:seed --> ejecuta los Seeders
15. php artisan migrate:fresh --seed --> elimina la bd y carga la informacion de los campos
16. php .\artisan make:model Profession--> crear un Modelo de la BD
16. php artisan tinker -> me permite ver resultados directamente.
17. php artisan make:factory "ProfessionFactory"--> me permite el generar datos aleatorios en BD
18. php artisan make:factory ProfessionFactory --model=Profession --> permite crear la asociacion directamente desde el factory (desde consola se genera)
19. php artisan make:model Skill -mf --> genera el modelo, factory y migracion en bd
20. php artisan route:list --> ver las listas de urls que tengo en el sistema.
21. composer update -->actualiza la version de laravel
22. php artisan make:request CreateUserRequest -->crea los requerimientos base para llamarlos desde los controladores

23. php artisan make:controller Api\BlogController --resource ->crea la estructura basica para un controlador (index, show, delete)
24. php artisan make:model Institución --migration --factory ->crea la base de datos,app y el modelo necesario para conexion
25.php artisan make: resource-view categories -mrp --> crea la vista  o recurso de categoria 'm' crea el modelo, 'r' crea el controlador restfull, 'p' agrega una ruta al archivo 'Routes\web.php'

26.php artisan make:model Note -m crea el modelo y las migraciones


LARAVEL AUTENTIFICAR-LOGIN
1. php .\artisan make:auth --> me permite usar el login base de laravel para sesiones
2. php .\artisan make:middleware Admin ->crea los middleware
3. php .\artisan make:test UserTest --unit ->agrega una prueba en la carpeta unit
4. php .\artisan make:model Admin -fm -> crea un factory y un modelo
5. ->creamos directiva para que reconozca el blade en vista


INSTALAR TEMA 
1. npm install admin-lte@v3.0.0-alpha.2 --save -> instala admin por defecto



