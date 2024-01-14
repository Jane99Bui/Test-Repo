
<div class="container">
    <div class="row justify-content-center">
                 <div class="card-body">                    
                    <table class="table-responsive" style="width: 100%">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Mô tả</th>
                            <th>Giá</th>
                        </thead>
                        <tbody>
                            @foreach($product as $product)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->mota }}</td>
                                <td>{{ $product->gia }}</td>
                                <td>
                                   
                                <img src="{{ asset('uploads/students/'.$product->image) }}" style="height: 50px;width:100px;">
                                   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  
                </div>
          
    </div>
</div>