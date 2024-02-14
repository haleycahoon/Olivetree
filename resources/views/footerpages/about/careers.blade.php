@extends('layouts.app')

@section('content')
<div class="containerCareers">
    <h1>Careers</h1>
    <p>
        Join our team and be part of an exciting and innovative company. Explore
        the available career opportunities below.
    </p>
    <div class="job-listing">
        <h2>Software Engineer</h2>
        <p><strong>Location:</strong> San Francisco, CA</p>
        <p><strong>Type:</strong> Full-time</p>
        <p>
            <strong>Description:</strong> We are seeking a talented software
            engineer to join our development team...
        </p>
    </div>
    <div class="job-listing">
        <h2>Marketing Specialist</h2>
        <p><strong>Location:</strong> New York, NY</p>
        <p><strong>Type:</strong> Part-time</p>
        <p>
            <strong>Description:</strong> Join our marketing team and help drive
            our brand forward...
        </p>
    </div>
</div>
@endsection

<style scoped>
    .containerCareers {
        max-width: 800px;
        margin: 20px auto;
        padding: 50px 20px;
    }

    h1 {
        font-size: 36px;
        padding-bottom: 30px;
        color: #333;
        text-align: center;
    }

    .job-listing {
        margin-bottom: 30px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 20px;
    }

    .job-listing h2 {
        padding-bottom: 10px;
        color: #555;
    }

    .job-listing p {
        color: #777;
    }

    p {
        padding-bottom: 30px;
    }
</style>