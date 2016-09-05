# ScoCMF

ScoCMF是基于 Laravel 5.x 开发的一套内容管理框架(Content Management Framework)

##安装

```bash
$ composer create-project scolib/scocmf demo
$ cd demo
$ vim .env //编辑数据库、缓存配置等
$ php artisan migrate --seed
```

##将你的服务器根目录指向 public/

###Example:

####Apache
```bash
<VirtualHost *:80>
    DocumentRoot "/var/www/demo/public"
    ServerName scocmf.lo
    DirectoryIndex index.php
    <Directory "/var/www/demo/public">
        Options FollowSymLinks ExecCGI
        AllowOverride All
    </Directory>
</VirtualHost>
```
####Nginx
```bash
server {
    listen 80;
    server_name scocmf.lo;
    index index.php;
    root  /var/www/demo/public;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
    location ~ [^/]\.php(/|$) {
        fastcgi_pass  unix:/tmp/php-cgi.sock;
        astcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        
        fastcgi_split_path_info ^(.+?\.php)(/.*)$;
        set $path_info $fastcgi_path_info;
        fastcgi_param PATH_INFO       $path_info;
    }

    location ~ .*\.(gif|jpg|jpeg|png|bmp|swf)$ {
        expires      30d;
    }

    location ~ .*\.(js|css)?$ {
        expires      12h;
    }

    location ~ /\. {
            deny all;
    }
    access_log  /var/logs/scocmf.lo.log;
}
```
###登录
http://scocmf.lo/admin

- **用户名:** `admin@admin.com`
- **密码:** `123456`

**注意**
* 只有在redis或memcache作为缓存驱动的情况下，某些缓存才有效


### 鸣谢

- [Laravel](http://laravel.com)
- [ENTRUST](https://github.com/Zizaco/entrust)
- [Laravel Repositories](https://github.com/bosnadev/repository)
- [Laravel Breadcrumbs](https://github.com/davejamesmiller/laravel-breadcrumbs)
- [Laravel Captcha](https://github.com/mewebstudio/captcha)
- [Bootstrap](https://github.com/twbs/bootstrap)
- [AdminLTE](https://github.com/almasaeed2010/AdminLTE)
- [Font Awesome](http://fontawesome.io/)


## License

ScoCMF is licensed under [Apache-2.0](LICENSE).