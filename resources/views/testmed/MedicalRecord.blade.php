<html>
    <h1>Daftar Medical record</h1>
    <table class="table" border="1">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Problem</th>
                <th scope="col">Diagnosis</th>
                <th scope="col">Treatment</th>
                <th scope="col">Patient id</th>
                <th scope="col">Physician Id</th>
                <th scope="col">Patient Visit Id</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicalrecord as $med)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$med->problem}}</td>
                <td>{{$med->diagnosis}}</td>
                <td>{{$med->treatment}}</td>
                <td>{{$med->patient_id}}</td>
                <td>{{$med->physician_id}}</td>
                <td>{{$med->patvist_id}}</td>
                <td><a href="{{$med->id}}/edit"><button type="submit">Edit</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
    <a href="/testmed/createmedrec"><button type="submit" name="btn_add" name="add" value="add">Tambah Data</button></a>
</html>