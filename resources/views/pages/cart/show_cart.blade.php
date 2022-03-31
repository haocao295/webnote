@extends('layout')
@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{URL::to('/trang-chu')}}">Home</a></li>
                <li class="active">Giỏ hàng của bạn</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <?php 
				$content = Cart::content();
				// echo '<pre>';
				// print_r($content);
				// echo '</pre>';
				?>
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Hình ảnh</td>
                        <td class="description">Mô tả</td>
                        <td class="price">Giá</td>
                        <td class="qty">Số lượng</td>
                        <td class="total">Tổng tiền</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($content as $value_content)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{URL::to('public/uploads/product/'.$value_content->options->image)}}"
                                    style="width:110px;height:110px;" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$value_content -> name}}</a></h4>
                            <p>Sản phẩm ID: {{$value_content -> id}}</p>
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($value_content -> price).' vnđ'}} </p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                    {{csrf_field()}}
                                    <input class="cart_quantity_input" type="number" name="cart_quantity"
                                        value="{{$value_content -> qty}}" size="2" style="width:60px;" min="1">
                                    <input type="hidden" value="{{$value_content -> rowId}}" name="rowId_cart"
                                        class="btn btn-default btn-sm">
                                    <input type="submit" value="Cập nhật" name="update_qty"
                                        class="btn btn-default btn-sm" style="margin-left:12px;">
                                </form>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">
                                <?php 
									$subtotal = ($value_content -> price) * ($value_content -> qty); // giá * số lượng
									echo number_format($subtotal).' '.'vnđ';
								?>
                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete"
                                onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này không?')"
                                href="{{URL::to('/delete-to-cart/'.$value_content -> rowId)}}"><i
                                    class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>Thanh toán</h3>
        </div>
        <div class="row">
            <!-- <div class="col-sm-6">
                <div class="chose_area">
                    <ul class="user_option">
                        <li>
                            <input type="checkbox">
                            <label>Use Coupon Code</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Use Gift Voucher</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Estimate Shipping & Taxes</label>
                        </li>
                    </ul>
                    <ul class="user_info">
                        <li class="single_field">
                            <label>Country:</label>
                            <select>
                                <option>United States</option>
                                <option>Bangladesh</option>
                                <option>UK</option>
                                <option>India</option>
                                <option>Pakistan</option>
                                <option>Ucrane</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>

                        </li>
                        <li class="single_field">
                            <label>Region / State:</label>
                            <select>
                                <option>Select</option>
                                <option>Dhaka</option>
                                <option>London</option>
                                <option>Dillih</option>
                                <option>Lahore</option>
                                <option>Alaska</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>

                        </li>
                        <li class="single_field zip-field">
                            <label>Zip Code:</label>
                            <input type="text">
                        </li>
                    </ul>
                    <a class="btn btn-default update" href="">Get Quotes</a>
                    <a class="btn btn-default check_out" href="">Continue</a>
                </div>
            </div> -->
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Tạm tím<span>{{Cart::priceTotal(0,',','.').' '.'VNĐ'}}</span></li>
                        <li>Thuế<span>{{Cart::tax(0,',','.').' '.'VNĐ'}}</span></li>
                        <li>Phí vận chuyển <span>Free</span></li>
                        <li>Tổng tiền<span>{{Cart::total(0,',','.').' '.'VNĐ'}}</span></li>
                        <!-- total (tổng = thuế + tạm tính) -->
                    </ul>
                    <!-- <a class="btn btn-default update" href="">Update</a> -->
                    <?php
                        $customer_id = Session::get('customer_id');
                        if($customer_id != NULL){ 
                    ?>

                    <a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Thanh toán</a>

                        <?php
                            }else{
                        ?>

                    <a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Thanh toán</a>
                        <?php 
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#do_action-->

@endsection