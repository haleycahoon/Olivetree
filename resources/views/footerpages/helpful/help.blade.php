@extends('layouts.app')

@section('content')
<div class="containerHelp">
    <h1>Help Center</h1>
    <p>
        Welcome to our Help Center. If you need assistance, please refer to the
        information below or contact our support team.
    </p>
    <div class="help-section">
        <h2>Contact Information</h2>
        <p>Email: <a href="mailto:olivetreesupport@gmail.com">olivetreesupport@gmail.com</a></p>
        <p>Phone: <a href="tel:+1234567890">(123) 456-7890</a></p>
    </div>
    <div class="help-section">
        <h2>Common Issues</h2>
        <ul>
            <li><a href="#" onclick="showAlert('Forgot Password')">Forgot Password</a></li>
            <li><a href="#" onclick="showAlert('Payment Issues')">Payment Issues</a></li>
        </ul>
    </div>
</div>

<script>
    function showAlert(issue) {
        alert("For assistance with '" + issue + "', please contact our support team.");
    }
</script>
@endsection

<style scoped>
    .containerHelp {
        max-width: 800px;
        margin: 20px auto;
        padding: 50px 20px;
    }

    .help-section {
        margin-bottom: 40px;
    }

    .help-section h2 {
        margin-bottom: 20px;
    }

    .help-section ul {
        list-style-type: none;
        padding: 0;
    }

    .help-section li {
        margin-bottom: 10px;
    }

    h1 {
        padding-bottom: 30px;
        text-align: center
    }
</style>
