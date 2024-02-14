@extends('layouts.app')

@section('content')
<div class="track-order-container">
    <h1>Track Your Order</h1>
    <div class="track-order-content">
        <p>
            To track your order, please enter your order number and email address
            below.
        </p>
        <div class="track-order-form">
            <label for="orderNumber">Order Number:</label>
            <input type="text" id="orderNumber" name="orderNumber" placeholder="Enter your order number" />
            
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" />
        </div>
        <button @click="trackOrder">Track Order</button>

    </div>
</div>
@endsection

<style scoped>
    .track-order-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 50px 20px;
    }

    h1 {
        font-size: 36px;
        padding-bottom: 30px;
        text-align: center;
    }

    .track-order-content {
        max-width: 600px;
    }

    p {
        font-size: 16px;
        line-height: 1.6;
        padding-bottom: 20px;
        text-align: center;
    }

    .track-order-form {
        margin-bottom: 40px;
    }

    label {
        display: block;
        margin-bottom: 15px;
        margin-top: 50px;
        font-size: 18px;
        color: #555;
        text-align: center;
    }

    input {
        width: 100%;
        padding: 15px;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        background-color: #93a04a;
        color: white;
        padding: 15px 30px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #494f25;
    }
</style>
