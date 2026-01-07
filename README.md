# PHP CRUD with MVC Architecture

This project is a basic CRUD (Create, Read, Update, Delete) application developed in PHP using the MVC (Model-View-Controller) architecture and Object-Oriented Programming principles. It includes server-side pagination and demonstrates a clean separation of concerns between data access, business logic, and presentation.

The application allows users to:
- Create new records
- View a paginated list of users
- Update existing records
- Delete records

Each operation is reflected immediately in the interface, maintaining a simple and functional user experience.

## Technologies & Concepts
- PHP (OOP)
- MVC architecture
- MySQL
- Server-side pagination
- Basic CRUD operations
- HTML / CSS
- Apache / Linux environment

## Database setup

To run this project, create the database and table using the SQL script provided in `create data base.sql`, or execute the following query:

```sql
CREATE TABLE pruebas.datos_usuarios (
  Id INT NOT NULL AUTO_INCREMENT,
  Nombre VARCHAR(30) NOT NULL,
  Apellido VARCHAR(30) NOT NULL,
  Direccion VARCHAR(50) NOT NULL,
  PRIMARY KEY (Id)
) ENGINE = InnoDB;
```
## Pagination configuration

To change the number of records displayed per page:

1. Open `model/paginacion.php`
2. Modify the value of `$reg_por_pag` (line 9)

```php
$reg_por_pag = 2;
```
## Live demo

CRUD MVC
[View online demo](https://crud.mvc.pablogaray.com.ar/index.php)

## Author

Pablo Garay  
[Personal website](https://pablogaray.com.ar)
