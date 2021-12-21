## ROUTE DOCUMENTATION EXAMPLE


### 1. User Routes
---

| HTTP REQUEST| ROUTES | DESCRIPTION |
| :---        | :----   |          :--- |
| POST         | /signup       |To create new user and return token   |
| POST         | /signin        |To login with email & password and re-create a new token |
| POST        | /signout        |  To delete token|


### 2. Todo Routes [Public]
---

| HTTP REQUEST| ROUTES | DESCRIPTION |
| :---        | :----   |          :--- |
| GET         | /todos       |The route for get all todos   |
| GET         | /todos/{id}        |The route to get a todo by given id |
| POST        | /todos        |  The route to create a new todo |
| PUT         | /todos/{id}        | The route to update a todo by given id |
| DELETE      | /todos/{id}        | The route to delete a todo|





### 3. Post Routes [Private]
---

| HTTP REQUEST| ROUTES | DESCRIPTION |
| :---        | :----   |          :--- |
| GET         | /posts       |The route for get all posts   |
| GET         | /posts/{id}        |The route to get a post by given id |
| POST        | /posts        |  The route to create a new post |
| PUT         | /posts/{id}        | The route to update a post by given id |
| DELETE      | /posts/{id}        | The route to delete a post|