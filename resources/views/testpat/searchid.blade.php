<html>
    <h1>Form search</h1>
    <form method="POST" action="{{action('PatientController@searchperson')}}"> 
        @method('patch') 
        @csrf       
        <label for="name">name</label>
        <input type="text" name="name" id="name" value="">
        <br><br>
        <label for="gender">gender</label>
        <input type="number" name="gender" id="gender" value="">
        <br><br>
        <label for="address">address</label>
        <input type="text" name="address" id="address" value="">
        <br><br>
        <button type="submit" class="btn btn-primary">search</button>
    </form>
</html>