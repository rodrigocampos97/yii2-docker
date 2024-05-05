<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template with Docker, MySQL and PHPMyAdmin</h1>
    <br>
</p>

INSTALLATION
------------

Copy environment variables

~~~
cp .env-example .env
~~~

### Building

~~~
docker compose up -d --build
~~~

### Install dependencies

You can then access the application through the following URL:

~~~
docker compose exec app composer install
~~~

You can then access the application through the following URL:

    http://127.0.0.1:8000

You can then access the PHPMyAdmin through the following URL:

    http://127.0.0.1:8001

