
# Coding Exercise using codeigniter - 3

A brief description of what this project does and who it's for


## Acknowledgements

 - [Awesome Readme Templates](https://awesomeopensource.com/project/elangosundar/awesome-README-templates)
 - [Awesome README](https://github.com/matiassingers/awesome-readme)
 - [How to write a Good readme](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)


## Appendix

Any additional information goes here


## Authors

- [@octokatherine](https://www.github.com/octokatherine)

## Color Reference

| Color             | Hex                                                                |
| ----------------- | ------------------------------------------------------------------ |
| Example Color | ![#0a192f](https://via.placeholder.com/10/0a192f?text=+) #0a192f |
| Example Color | ![#f8f8f8](https://via.placeholder.com/10/f8f8f8?text=+) #f8f8f8 |
| Example Color | ![#00b48a](https://via.placeholder.com/10/00b48a?text=+) #00b48a |
| Example Color | ![#00d1a0](https://via.placeholder.com/10/00b48a?text=+) #00d1a0 |


## API Reference
### Create/Register Users

Post http://localhost:8000/api/user/create

### Form Data
### username 
### useremail

#### Get all Users

```http
  GET http://localhost:8000/api/users
```
#### Get Perticular user

```http
  GET http://localhost:8000/api/user/find/2
```
#### Edit user record

put http://localhost:8000/api/user/update/2

{
    "name": "UPDATEUSER",
    "email": "updateemail@gmail.com"
}

### Delete User record
Delete http://localhost:8000/api/user/delete/2

### orders API
### Create Order 

Post http://localhost:8000/api/order/create
## customerID
## productName
## quantity

### Retrieve all orders 
Get http://localhost:8000/api/order

### Retrieve perticular order
Get http://localhost:8000/api/order/edit/2

## update order 
put http://localhost:8000/api/order/update/2

{
    "customerID": "1",
    "productName": "Paint",
    "quantity": "20",
    "order_date": "2021-12-17 18:46:16"
}

### Delete Perticular Order 

Delete http://localhost:8000/api/order/delete/3

### CMD commands 
## for application
php -S localhost:8000

## for migration
php index.php migrate