<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Users</title>
</head>
<body>
    @if($users->count() <= 0)
        <h2>No users</h2>
    @else
        <h2>List Users</h2>
        <table>
            <thead>
                <tr>
                    <td>name</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>
                            <button onclick="deleteItem({{ $user->id }})">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function deleteItem(id) {
            swal({
                title: 'hapus?',
                buttons: true,
                dangerMode: true
            }).then((willDelete) => {
                return axios({
                    url: '{{ url("/users") }}/' + id,
                    method: 'DELETE'
                })
            }).then(() => {
                swal('item deleted').then(() => {
                    window.location.reload()
                })
            })
        }
    </script>
</body>
</html>
