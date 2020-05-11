<html>
    <h1>Form update record</h1>
    <form method="POST" action="{{'action('PatientVisitController@update', $id)}}"> 
        @method('patch') 
        @csrf     
        <label for="istreated">istreated</label>
        <input type="number" name="istreated" id="istreated" value="">
        <br><br>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</html>