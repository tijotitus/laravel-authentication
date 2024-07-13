# Laravel Role Permission Management System - Laravel 

A project which manage Role, Permissions and every actions of your Laravel application. admin can create new role and assign permission to do the task. in dashboard user can see all posts created in this system, user can view the post and if it is have issue he can report. the reported post will shown on admin side for verification

**Demo:** http://localhost:8000
```
Username - superadmin
password - 12345678
```

## Requirements:
- Laravel `11.x`
- Spatie role permission package  `^6.4`

## Project Setup
Install Laravel Dependencies -
```console
composer install
```

Create database called - `laravel_role`

Create `.env` file by copying `.env.example` file

Generate Artisan Key (If needed) -
```console
php artisan key:generate
```

Migrate Database with seeder -
```console
php artisan migrate --seed
```

Run Project -
```php
php artisan serve
```


So, You've got the project of Laravel Role & Permission Management on your http://localhost:8000

## How it works
1. Login using Super Admin Credential -
    1. Username - `superadmin`
    1. Password - `12345678`
2. Create User
3. Create Role
4. Assign Permission to Roles
5. Assign Multiple Role to an user
6. Check by login with the new credentials.
7. Assign create permission to user to create blog ( list, view ,create, edit, delete)
8. In dashboard users can see all posts and view them 
9. In view page user can report post



### Login & Dashboard Page
![alt text][adminLoginImage]
![alt text][dashboardImage]

### Role Pages
Role List
![alt text][roleListImage]
Role Create
![alt text][roleCreateImage]
Role Edit
![alt text][roleEditImage]

### Admin Pages
Admin List
![alt text][adminListImage]
Admin Create
![alt text][adminCreateImage]

### Other Pages
Custom Error Pages
![alt text][errorPageImage]
Dynamic Sidebar Manage
![alt text][sidebarDyanamic]
Blog Page
![alt text][bloglistingpage]



[dashboardImage]: https://i.ibb.co/WyxWFp7/1-Laravel-Role-Dashboard.png "Dashboard Page Laravel Role Management"
[roleListImage]: https://i.ibb.co/80jM3Q7/2-Laravel-Manage-Roles.png "2-Laravel-Manage-Roles"
[roleCreateImage]: https://i.ibb.co/kgM1ShW/3-Laravel-Role-Create.png "3-Laravel-Role-Create"
[roleEditImage]: https://i.ibb.co/b6jNPFr/4-Laravel-Role-Edit.png "4-Laravel-Role-Edit"
[adminListImage]: https://i.ibb.co/xY2N6Qd/5-Laravel-Admin-Manage.png "5-Laravel-Admin-Manage"
[adminCreateImage]: https://i.ibb.co/Drcn6Xn/6-Laravel-Admin-Create.png "6-Laravel-Admin-Create"
[adminLoginImage]: https://i.ibb.co/4g4vs4g/7-Login-Page.png "7-Login-Page"
[errorPageImage]: https://i.ibb.co/HYcvRH4/8-Error-Page-Handle.png "8 - Error Page Handling"
[sidebarDyanamic]: https://i.ibb.co/Jpq6X8x/9-Sidebar-Manage-Dynamically.png "9-Sidebar-Manage-Dynamically"
[bloglistingpage]: https://ibb.co/r5yB4sP "10 - Post listing page"

