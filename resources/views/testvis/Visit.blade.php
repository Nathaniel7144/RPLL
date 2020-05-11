<html>
    <h1>Daftar Person record</h1>
    <table class="table" border="1">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">starttime</th>
                <th scope="col">endtime</th>
                <th scope="col">patientid</th>
                <th scope="col">istreated</th>
            </tr>
        </thead>
        <tbody>
            @foreach($visit as $vis)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$vis->id}}</td>
                <td>{{$vis->starttime}}</td>
                <td>{{$vis->endtime}}</td>
                <td>{{$vis->patientid}}</td>
                <td>{{$vis->istreated}}</td>
                <td><a href="{{action('PatientVisitController@edit', $vis['id'])}}"><button type="submit">Edit</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>
    <a href="/testvis/createVisit"><button type="submit" name="btn_add" name="add" value="add">Tambah Data</button></a>
</html>