##	Bacod
Bacod (Bagi Code) merupakan aplikasi code sharing yang bertujuan untuk saling berbagi code, aplikasi ini sudah dilengkapi dengan fitur syntax highlighting.

##	Installasi
1.	Pindahkan folder `bacod` ke dalam folder htdocs anda

		/opt/lampp/htdocs/bacod

2.	Buka terminal dan arahkan ke direktori `bacod`

		cd /opt/lampp/htdocs/bacod

3.	Install library yang dibutuhkan menggunakan `Composer`

		./composer.phar install

4.	Buka file `/app/config/app.php`, rubah `url` menjadi URL aplikasi anda

		'url' => 'bacod.dev',

5.	Buka file `/app/config/database.php`, sesuaikan data database mysql anda

		'host' => '127.0.0.1', 'database' => 'bacod', 'username' => 'root', 'password' => ''

6.	Import file `bacod.sql` melalui PHPMyAdmin atau dengan perintah artisan

		php artisan migrate --seed

7.	Upload semua file & folder pada folder `public` ke server dalam direktori `public_html`

8.	Upload semua file & folder lainnya di luar direktori `public_html`

9.	Rubah path `public` pada file `/bootstrap/paths.php` menjadi `public_html`

		'public' => __DIR__.'/../public_html',

