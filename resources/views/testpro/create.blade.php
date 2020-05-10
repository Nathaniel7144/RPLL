<html>
    <h1>Form add Product</h1>
    <form method="POST" action="/testpro/Product"> 
        @csrf       
        <label for="id">Id</label>
        <input type="text" name="id" id="id" value="">
        <br><br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="">
        <br><br>
        <label for="stock">Stock</label>
        <input type="text" name="stock" id="stock" value="">
        <br><br>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
</html>