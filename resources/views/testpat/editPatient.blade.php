<html>
    <h1>Form edit record</h1>
    <form method="POST" action="{{action('PatientController@update', $id)}}"> 
        @method('patch') 
        @csrf       
        <label for="person_id">Person id</label>
        <input type="number" name="person_id" id="person_id" value="">
        <br><br>
        <label for="register">register</label>
        <input type="datetime-local" name="register" id="register" value="">
        <br><br>
        <label for="guardian">guardian</label>
        <input type="text" name="guardian" id="guardian" value="">
        <br><br>
        <label for="guardianphone">guardian phone</label>
        <input type="tel" name="guardianphone" id="guardianphone" value="">
        <br><br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</html>