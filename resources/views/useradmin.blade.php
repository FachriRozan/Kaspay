<x-admin-layout>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        input {
            border: none;
            width: 100%;
        }

        .add-data {
            margin-bottom: 20px;
        }

        /* Button styling */
        .btn-purple {
            background-color: #8a2be2;
            /* Purple color */
            color: #fff;
            /* White text color */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-purple:hover {
            background-color: #6a1c9e;
            /* Darker purple color on hover */
        }

        /* Form styling */
        .form-container {
            max-width: 400px;
            /* Adjust the width as needed */
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Title styling */
        .form-title {
            text-align: center;
            font-size: 24px;
            color: #333;
            /* Adjust the color as needed */
            margin-bottom: 20px;
        }
    </style>
    <div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="table-body">
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td><input type="text" name="npm" value="{{ $user->npm }}"></td>
                        <td><input type="text" name="nama" value="{{ $user->nama }}"></td>
                        <td><input type="text" name="username" value="{{ $user->username }}"></td>
                        <td><input type="text" name="password" value="{{ $user->password }}"></td>
                        <td>
                            <button type="button" onclick="editRow(this)"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" onclick="deleteRow(this)"><i class="bi bi-trash3-fill"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
        <div class="form-container">
          <div class="form-title">TAMBAH USER</div>
      
          <form action="/add-user" method="POST">
              @csrf
            <div class="form-group">
                <label for="npm">NPM:</label>
                <input type="text" class="form-control" id="npm" name="npm" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
              <button type="submit" class="btn btn-purple">Tambah User</button>
          </form>
      </div>
        <script>
            function editRow(button) {
                var row = button.parentNode.parentNode;
                var inputs = row.querySelectorAll('input');
                var npm = inputs[0].value;
                var nama = inputs[1].value;
                var username = inputs[2].value;
                var password = inputs[3].value;

                // Send an AJAX request to update the user's data
                fetch('/update-user/' + npm, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add CSRF token
                    },
                    body: JSON.stringify({
                        nama: nama,
                        username: username,
                        password: password
                    })
                }).then(function(response) {
                    if (response.ok) {
                        // Update the row with the new values
                        console.log('User updated successfully');
                    } else {
                        console.error('Failed to update user data');
                    }
                });
            }


            function deleteRow(button) {
                var row = button.parentNode.parentNode;
                var npm = row.querySelector('td:nth-child(2) input').value;

                // Send an AJAX request to delete the user
                fetch('/delete-user/' + npm, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add CSRF token
                    },
                }).then(function(response) {
                    if (response.ok) {
                        // Remove the row from the table
                        row.parentNode.removeChild(row);
                        console.log('User deleted successfully');
                    } else {
                        console.error('Failed to delete user');
                    }
                });
            }
        </script>
    </div>
</x-admin-layout>
