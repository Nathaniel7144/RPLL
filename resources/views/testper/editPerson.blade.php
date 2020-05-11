<html>
    <h1>Form add Person record</h1>
    <form method="POST" action="{{action('PersonController@update', $id)}}"> 
        @method('patch') 
        @csrf     
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$person->name}}">
        <br><br>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{$person->address}}">
        <br><br>
        <label for="gender">Gender</label>
        <input type="number" name="gender" id="gender" value="{{$person->gender}}">
        <br><br>
        <label for="birthday">Birth day</label>
        <input type="date" name="birthday" id="birthday" value="{{$person->birthday}}">
        <br><br>
        <label for="bloodtype">Bloodtype</label>
        <input type="text" name="bloodtype" id="bloodtype" value="{{$person->bloodtype}}">
        <br><br>
        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone" value="{{$person->phone}}">
        <br><br>
        <label for="religion">Religion</label>
        <input type="text" name="religion" id="religion" value="{{$person->religion}}">
        <br><br>
        <label for="nik">NIK</label>
        <input type="number" name="nik" id="nik" value="{{$person->nik}}">
        <br><br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</html>