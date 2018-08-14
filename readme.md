## Prerequisites
<ul>
<li>After cloning this repository, go to the root folder, run the following command/s,
<pre>
    composer install
    composer update</pre>
</li>
<li>Laravel manages the frontend tools like vue using NPM. So run<code>npm install</code> to get all the required dependencies.</li>
<li>Rename .env.example to .env and provide your database details there.</li>
<li>It needs a database table to perform Create, Read and Delete operations on it.</li>
<li>Import the sql file (impression.sql) located at <code>/resources/assets</code> directory.</li>
<li>Run <pre>php artisan key:generate</pre> </li>
<li>Run migrations <pre>php artisan migrate</pre> </li>
<li>Run seeders (from XML) <pre>php artisan db:seed</pre> </li>
</ul>


