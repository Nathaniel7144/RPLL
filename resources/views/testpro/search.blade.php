<html>
    <h1>Form Search Product</h1>
    <form method="POST" action="/testpro/search"> 
        @csrf       
        <label for="id">Id</label>
        <input type="text" name="id" id="id" value="">
        <br><br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="">
        <br><br>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</html>