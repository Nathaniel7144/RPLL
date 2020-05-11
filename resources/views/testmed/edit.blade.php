<html>
    <h1>Form edit medical record</h1>
    <form method="POST" action="/testmed/{{$med->id}}">
        @method('patch') 
        @csrf       
        <label for="problem">Problem</label>
        <input type="text" name="problem" id="problem" value="{{$med->problem}}">
        <br><br>
        <label for="treatment">Treatment</label>
        <input type="text" name="treatment" id="treatmen" value="{{$med->treatment}}">
        <br><br>
        <label for="diagnosis">Diagnosis</label>
        <input type="text" name="diagnosis" id="diagnosis" value="{{$med->diagnosis}}">
        <br><br>
        <label for="patient">Patient id</label>
        <input type="text" name="patient_id" id="patient" value="{{$med->patient_id}}">
        <br><br>
        <label for="physician">Physician Id</label>
        <input type="text" name="physician_id" id="physician" value="{{$med->phisician_id}}">
        <br><br>
        <label for="patvist_id">Patient Visit Id</label>
        <input type="text" name="patvist_id" id="patvist_id" value="{{$med->patvist_id}}">
        <br><br>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
</html>