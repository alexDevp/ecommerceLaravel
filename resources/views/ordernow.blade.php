@extends('master')
@section("content")
    <div class="custom-product container">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>{{$total}} €</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0 €</td>
                </tr>
                <tr>
                    <td>Delivery Charges</td>
                    <td>10€</td>
                </tr>
                <tr>
                    <td> Total Amount</td>
                    <td>{{$total + 10}} €</td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action ="/orderplace" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="address" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Payment Method</label><br>
                        <p><input type="radio" value="VISA" name="payment"><span>VISA</span></p>
                        <p><input type="radio" value="Payment on Delivery" name="payment"><span>Payment on Delivery</span></p>
                        <p><input type="radio" value="PAYPAL" name="payment"><span>PAYPAL</span></p>
                        <p><input type="radio" value="MBWAY" name="payment"><span>MBWAY</span></p>
                    </div>
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>
            </div>
        </div>
    </div>
@endsection
