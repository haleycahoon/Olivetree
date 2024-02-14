@extends('layouts.app')

@section('content')
<div class="contact-container">
  <div class="contact-content">
    <h1 class="contact-title">Contact Us</h1>
    <p>
      Have a question or need assistance? Our dedicated support team is here to help! Whether you have inquiries
      about our products, your order, or just want to share feedback, we're available to assist you. Feel free to
      reach out via live chat, phone, or email.
    </p>
    <p>
      Address: 123 Main Street, Cityville, Country
    </p>
    <p>
      Phone: <a href="tel:+1234567890">(123) 456-7890</a> | Email: <a href="mailto:olivetreesupport@gmail.com">olivetreesupport@gmail.com</a>
    </p>
  </div>
  <div class="contact-form">
    <h3>Contact Us Below</h3>
    <hr>
    <form action="#" method="post"> 
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Your Full Name" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Your Email Address" required />

      <label for="message">Message:</label>
      <textarea id="message" name="message" placeholder="How can we assist you?" rows="6" required></textarea>
      <hr>
      <div class="button-container">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection

<style scoped>
  .contact-container {
    display: flex;
    justify-content: center;
    align-items: center;
    color: #000000;
    background-color: #ffffff;
    padding: 50px 20px;
    text-align: center;
  }

  .contact-content {
    max-width: 600px;
  }

  .contact-title {
    font-size: 36px;
    margin-bottom: 20px;
  }

  .contact-form {
    max-width: 400px;
    text-align: left;
    margin-left: 40px;
    margin-bottom: 20px;
  }

  .button-container {
    text-align: center;
  }

  h3 {
    margin-bottom: 20px;
  }

  label {
    display: block;
    margin-top: 20px;
    margin-bottom: 10px;
    font-size: 14px;
    color: black;
  }

  input,
  textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    color: #333;
    background-color: #eee;
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