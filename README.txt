Parancsok a gyors kezdéshez:
npm run dev
php artisan migrate

Adatbázis Dump mellékelve, de ezzel is fel lehet tölteni az adatbázist:
1.php artisan migrate
2.php artisan db:seed --class=UserSeeder 
(egy admin fiók és 4db random user)

Ezeket valósítottam meg:

-bejelentkezés
-regisztráció (csak user-eknek (nem adminoknak))
-kijelentkezés
-felhasználó törlése
A FUNKCIÓK A BEJELENTKEZÉS UTÁN A DASHBOARDON TALÁLHATÓAK
CSAK ADMINKÉNT ÉRHETŐ EL AZ ÖSSZES FUNKCIÓ
-felhasználó létrehozása (CreateUser.php) (csak admin tud felhasználót létrehozni, itt ki lehet választani, hogy admin, vagy felhasználó joggal hozzuk-e létre a felhasználót)
-felhasználók listázása (UserList.php)
-képek feltöltése (Photo.php) (A rendszerben csak admin joggal rendelkező (és nyilván csak bejelentkezett) felhasználók tölthetnek fel képeket)
-képek listázása (Photo.php)

Swagger bekötve (api/documentation)