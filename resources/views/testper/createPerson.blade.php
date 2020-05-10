<html>
    <h1>Form add Person record</h1>
    <form method="POST" action="/testper/Person"> 
        @csrf       
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="">
        <br><br>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="">
        <br><br>
        <label for="gender">Gender</label>
        <input type="number" name="gender" id="gender" value="">
        <br><br>
        <label for="birthday">Birth day</label>
        <input type="date" name="birthday" id="birthday" value="">
        <br><br>
        <label for="bloodtype">Bloodtype</label>
        <input type="text" name="bloodtype" id="bloodtype" value="">
        <br><br>
        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone" value="">
        <br><br>
        <label for="religion">Religion</label>
        <input type="text" name="religion" id="religion" value="">
        <br><br>
        <label for="nik">NIK</label>
        <input type="number" name="nik" id="nik" value="">
        <br><br>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</html>