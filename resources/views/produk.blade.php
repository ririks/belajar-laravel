<x-Template title="Produk">
    @slot('body')

    @if($message = Session::get('success'))
    <div class="alert alert-success mx-2" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    @if(Auth::user())
    @if(Auth::user()->level == 'admin' or Auth::user()->level == 'Admin')
    <a href="{{route('product.create')}}">
        <button class="btn btn-primary">Tambah Product</button>
    </a>
    @endif
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                @if(Auth::user())
                <th>Aksi</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $key =>$prd)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$prd->name}}</td>
                <td>Rp.{{$prd->harga}}</td>
                <td>{{$prd->stok}}</td>
                @if(Auth::user())
                @if(Auth::user()->level == 'admin' or Auth::user()->level == 'Admin')
                <td>
                    <a href="{{route('product.edit',$prd->id)}}">
                        <button class="btn btn-primary mx-2">Ubah</button>
                    </a>
                    <form action="{{route('product.delete',$prd->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger mx-2">Hapus</button>
                    </form>

                </td>
                @else
                <td>
                    <form action="{{route('keranjang.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$prd->id}}">
                        <input type="number" name="jumlah" class="form-control">
                        <button type="submit" class="btn btn-primary">Tambah keranjang</button>
                </td>
                @endif
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    @endslot
</x-Template>