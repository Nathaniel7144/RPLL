<html>
    <h1>Form add Person record</h1>
    <form method="POST" action="/testvis/Visit"> 
        @csrf       
        <label for="starttime">starttime</label>
        <input type="datetime-local" name="starttime" id="starttime" value="">
        <br><br>
        <label for="endtime">endtime</label>
        <input type="datetime-local" name="endtime" id="endtime" value="">
        <br><br>
        <label for="patient_id">patient_id</label>
        <input type="number" name="patient_id" id="patient_id" value="">
        <br><br>
        <label for="istreated">istreated</label>
        <input type="number" name="istreated" id="istreated" value="">
        <br><br>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</html>