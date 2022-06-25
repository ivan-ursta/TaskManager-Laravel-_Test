This project implements adding, viewing, updating and deleting tasks and users.
It is also possible to search for tasks by status and by performer.

1. The main directory contains the database file task_manager.sql
2. Import this database
3. Fill the database with random data
4. Install Postman for testing

- To show the full list of tasks, select the Get method and insert the url: http://localhost:8000/api/task
- Search task by id: http://localhost:8000/api/task/{id} (example: http://localhost:8000/api/task/4)
- Search task by status: http://localhost:8000/api/taskStatus/{status} (example: new, in work, on inspection, completed)
- Search task by user: http://localhost:8000/api/taskUser/{user name} (example: http://localhost:8000/api/taskUser/Ivan)
- Create task, select the POST method: example: http://localhost:8000/api/task?Name=Demo&Description=Demo&Exec_status=Demo&User_id=Demo or enter parameters in the postman
- To update task, select PUT method end enter params: example: http://localhost:8000/api/task/5?Name=Demo 
- To delete task, select DELETE method: example: http://localhost:8000/api/task/{id}

- To show the full list of users, select the Get method and insert the url: http://localhost:8000/api/user
- Search user by id: http://localhost:8000/api/user/{id} (example: http://localhost:8000/api/user/4)
- Create user, select the POST method: example: http://localhost:8000/api/user?Name=Demo&Email=Demo&Passwd=Demo&Role=Demo or enter parameters in the postman
- To update user, select PUT method end enter params: example: http://localhost:8000/api/user/5?Name=Demo 
- To delete user, select DELETE method: example: http://localhost:8000/api/user/{id}
