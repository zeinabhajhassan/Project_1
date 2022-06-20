@extends('master')
@section("content")
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">

                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery </td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+10}}</td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="POST" >
                    @csrf
                    <div class="form-group">

                            <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>

                    </div>
                    <div class="form-group">
                       <div class="move">
                           <label for="pwd">Payment Method</label> <br> <br>
                           <input type="radio" value="cash" name="payment"> <span>Credit Card</span> <br> <br>
                           <input type="radio" value="cash" name="payment"> <span>Bank Transfers</span> <br><br>
                           <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

                       </div>
                    </div>
                   <div class="move">
                       <button type="submit" class="btn btn-info">Order Now</button>
            </div>
            </form>
            </div>
        </div>
    </div>
@endsection
