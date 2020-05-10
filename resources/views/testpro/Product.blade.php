<html>
    <h1>Daftar Product</h1>
    <a href="/testpro/create"><button type="submit" name="btn_add" value="add">Tambah Data</button></a>
    <a href="/testpro/search"><button type="submit" name="btn_search" value="search">Search</button></a>
    <a href="/testpro/Product"><button type="submit" name="btn_refresh" value="refresh">Refresh</button></a>
    <br>
    <table class="table" border="1">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->stock}}</td>
                <td><a href="{{$product->id}}/edit"><button type="submit">Edit</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</html>