@extends('admin-layout')
@section('admin-content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Update sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    @foreach($edit_product as $key => $edit_value)
                    <form role="form" action="{{URL::to('/update-product/'.$edit_value->product_id)}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <?php
                        //Lấy message
                        $message =Session::get('message');
                        
                        if($message){
                            echo '<span class="text-alert">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" value="{{$edit_value->product_name}}" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" data-validation="number" value="{{$edit_value->product_price}}" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Nhập giá sản phẩm">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                            
                            <img src="{{URL::to('public/uploads/product/'.$edit_value->product_image)}}" height="100" width="100" class="image-form-control" style="margin-top:16px;">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea style="resize:none" rows="8" type="text" name="product_desc" class="form-control" id="exampleInputPassword1">{{$edit_value->product_desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                            <textarea style="resize:none" rows="8" type="text" name="product_content" class="form-control" id="exampleInputPassword1">{{$edit_value->product_content}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                            <select name="product_cate" class="form-control m-bot15">
                                @foreach($cate_product as $key => $cate)
                                    @if($cate -> category_id == $edit_value -> category_id)
                                        <option selected value="{{$cate -> category_id}}">{{$cate -> category_name}}</option>
                                    @else
                                        <option value="{{$cate -> category_id}}">{{$cate -> category_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Thương hiệu</label>
                            <select name="product_brand" class="form-control m-bot15">
                                @foreach($brand_product as $key => $brand)
                                    @if($brand -> brand_id == $edit_value -> brand_id)
                                        <option selected value="{{$brand -> brand_id}}">{{$brand -> brand_name}}</option>
                                    @else
                                        <option value="{{$brand -> brand_id}}">{{$brand -> brand_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" name="update_product" class="btn btn-info">Update sản phẩm</button>
                    </form>
                    @endforeach
                </div>

            </div>
        </section>

    </div>


</div>

@endsection