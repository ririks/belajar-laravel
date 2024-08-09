<x-Template title="Edit Product">
    @slot('body')
    <form action="{{route('product.update',$product->id)}}" method="post">
        @csrf
        @method('put')
        <div class="m-3">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{$product->name}}" id="nama">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{$product->harga}}" id="harga">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" value="{{$product->stok}}" id="stok">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </form>
    @endslot
</x-Template>