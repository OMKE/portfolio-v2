<p align="center">
    <img src="https://user-images.githubusercontent.com/17277467/98308292-fab43880-1fc7-11eb-8c7a-73fef45e36ef.png" width="100">
</p>

## omaririskic.com - Source code

### How to run

#### Docker 🐬
```$ docker-compose build && docker-compose up -d```  

There are three services:
- nginx
- php
- mysql  


Rename or copy .env.example to .env

Generate APP_KEY with:   
```$ docker-compose exec php php artisan key:generate```

Link storage path with:  
```$ docker-compose exec php php artisan storage:link```

Run migrations and seed the database with:  
```$ docker-compose exec php php artisan migrate:fresh --seed```  

Generate JWT secret with:  
```$ docker-compose exec php php artisan jwt:secret```

Access an api on http://localhost:8088/api/v1  

Run tests with:   
```$ docker-compose exec php php artisan test --filter <testSuiteName \ methodName>```

#### Useful functions and aliases: 

artisan - function - shorthand for 'docker-compose exec php php artisan' or  
when current folder doesn't have docker-compose.yml file, it will just run php artisan with provided arguments  
```$xslt
    function artisan(){
        if test -f "docker-compose.yml"; then
            docker-compose exec php php artisan "$@"
        else
            php artisan "$@"
        fi
    }
```
PHPUnit with filter  
``alias pf="clear && phpunit --filter"``
  
artisan test with filter  
``alias at="clear && artisan test --filter"``

#### Without Docker
1. ```$ cp .env.example .env```
2. Change the data in .env file accordingly (mysql connection) 
3. Generate APP_KEY with:  
```$ php artisan key:generate```
4. Generate JWT_SECRET with: 
```$ php artisan jwt:secret```
4. Migrate the database and seed with data:  
```$ php artisan migrate:fresh --seed```  
5. Make a symlink to storage path:  
```$ php artisan storage:link```
6. Start the server:  
```$ php artisan serve```


## Documentation 📚

[omaririskic.com - API](https://documenter.getpostman.com/view/6089658/TVYQ3Ere#64651b17-3546-4d25-bc15-4136e47bc814)