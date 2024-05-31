<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="container mt-5 pt-2">
        <h2>Add User</h2>
        <form id="addUserForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById('addUserForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);
            axios.post('/api/addusers',formData)
            .then(function (response) {
                if(response.data.status === 'success')
                {
                    alert('User added successfully!');
                    document.getElementById('addUserForm').reset();
                }
                else
                {
                    var errorText = JSON.stringify(response.data.message);
                    alert(errorText)
                }
               
            })
        });
    </script>
</body>
</html>
