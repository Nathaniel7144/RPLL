<html>
    <h1>Daftar Patient record</h1>
    <table class="table" border="1">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">person_id</th>
                <th scope="col">register</th>
                <th scope="col">guardian</th>
                <th scope="col">guardian phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patient as $pat)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$pat->person_id}}</td>
                <td>{{$pat->register}}</td>
                <td>{{$pat->guardian}}</td>
                <td>{{$pat->guardianphone}}</td>
                <td><a href="{{$pat->id}}/edit"><button type="submit">Edit</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
    <a href="/testpat/createPatient"><button type="submit" name="btn_add" name="add" value="add">Tambah Data</button></a>
</html>