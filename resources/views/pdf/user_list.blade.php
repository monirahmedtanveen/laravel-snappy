<!DOCTYPE html>
<html>
<head></head>
<body>
<div style="width:100%; text-align:center">
    <h1>User List</h1>
</div>

<div>
    <table border="1" style="text-align:center">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                    </tr>
                </thead>

                <tbody>
                    @if($users->isNotEmpty())
                        @php $i = 1; @endphp
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->mobile }}</td>
                                <td>{{ $user->address }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>

                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                    </tr>
                </thead>
    </table>
</div>

<div style="width:100%; text-align:center">
    <p>This is an auto generate list &copy; <?php echo date("Y"); ?> <a href="http://monirahmedtanveen.github.io/">Monir Ahmed Tanveen</a></p>
</div>

</body>
</html>
