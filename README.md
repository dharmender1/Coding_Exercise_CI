
# Coding Exercise using codeigniter - 3

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