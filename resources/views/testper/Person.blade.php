<html>
    <h1>Daftar Person record</h1>
    <table class="table" border="1">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">address</th>
                <th scope="col">gender</th>
                <th scope="col">birthday</th>
                <th scope="col">bloodtype</th>
                <th scope="col">phone</th>
                <th scope="col">religion</th>
                <th scope="col">nik</th>
            </tr>
        </thead>
        <tbody>
            @foreach($person as $per)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$per->name}}</td>
                <td>{{$per->address}}</td>
                <td>{{$per->gender}}</td>
                <td>{{$per->birthday}}</td>
                <td>{{$per->bloodtype}}</td>
                <td>{{$per->phone}}</td>
                <td>{{$per->religion}}</td>
                <td>{{$per->nik}}</td>
                <td><a href="{{action('PersonController@edit', $per['id'])}}"><button type="submit">Edit</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
    <a href="/testper/createPerson"><button type="submit" name="btn_add" name="add" value="add">Tambah Data</button></a>
</html>