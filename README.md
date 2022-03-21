## cara menggunakan aplikasi


- install xampp dengan versi php 7.4
- install composer
- install git
- copy dari env.example menjadi .env (pake yang dibutuhin)
        DB_CONNECTION=mysql
        DB_HOST=host.docker.internal
        DB_PORT=3306
        DB_DATABASE=halto_bali
        DB_USERNAME=halto_bali
        DB_PASSWORD=halto_bali
- import sql dari saya
- setting php.ini
    jadi 
    upload_max_filesize = 900MB
    post_max_size = 906M
    memory_limit = 512M
    max_execution_time = 900
- run aplikasi
    -> di command promp
    - composer install
    - "php artisan storage:link"
    - "php artisan serve --host=0.0.0.0"



kalau di android studio
- install plugin flutter and dar
- clone repository android
- run android studio dengan virtual device
        -> kalau di android ganti alamat di kode jadi IP network tang dipakai

