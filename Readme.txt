create project laravel
- composer create-project laravel/laravel {name-app}

install jenssegers
- composer require jenssegers/mongodb

create model & controller
- php artisan make:model Kelas --resource
- php artisan make:model Siswa --resource
- php artisan make:model Pelajaran --resource

add configure jenssegers di config/app & config/database

endpoint yang ada :
Methode     URL                         Ket 
get         'kelas'                     get all data kelas
get         'kelas/{id}'                get data kelas by id dan siswa didalamnya
post        'kelas'                     create data kelas
put         'kelas/{id}'                update data kelas by id
get         'siswa'                     get all data siswa
get         'siswa/{id}'                get data siswa by id berserta nilai mata pelajaran
get         'nilai/{pelajaran}',        get data nilai per mata pelajaran
post        'nilai'                     create nilai mata pelajaran
