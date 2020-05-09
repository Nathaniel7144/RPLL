<html>
    <h1>Form add medical record</h1>
    <form method="POST" action="/testmed/MedicalRecord"> 
        @csrf       
        <label for="problem">Problem</label>
        <input type="text" name="problem" id="problem" value="">
        <br><br>
        <label for="treatment">Treatment</label>
        <input type="text" name="treatment" id="treatmen" value="">
        <br><br>
        <label for="diagnosis">Diagnosis</label>
        <input type="text" name="diagnosis" id="diagnosis" value="">
        <br><br>
        <label for="patient">Patient id</label>
        <input type="text" name="patient_id" id="patient" value="">
        <br><br>
        <label for="physician">Physician Id</label>
        <input type="text" name="physician_id" id="physician" value="">
        <br><br>
        <label for="patvist_id">Patient Visit Id</label>
        <input type="text" name="patvist_id" id="patvist_id" value="">
        <br><br>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</html>