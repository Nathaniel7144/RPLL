<html>
    <h1>Form edit medical record</h1>
    <form method="POST" action="/testpro/{{$product->id}}">
        @method('patch') 
        @csrf       
        <label for="id">Id</label>
        <input type="text" name="id" id="id" value="{{$product->id}}">
        <br><br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$product->name}}">
        <br><br>
        <label for="stock">Stock</label>
        <input type="text" name="stock" id="stock" value="{{$product->stock}}">
        <br><br>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>
</html>