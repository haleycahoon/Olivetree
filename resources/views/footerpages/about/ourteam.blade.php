@extends('layouts.app')

@section('content')
<div class="our-team-container">
    <h1>Meet Our Team</h1>
    <div class="our-team-content">
        <div class="team-member">
            <img src="https://via.placeholder.com/200x200" alt="John Doe" class="team-member-photo" />
            <div class="team-member-details">
                <h2>John Doe</h2>
                <p class="position">CEO</p>
                <p class="bio">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="team-member">
            <img src="https://via.placeholder.com/200x200" alt="Jane Smith" class="team-member-photo" />
            <div class="team-member-details">
                <h2>Jane Smith</h2>
                <p class="position">Creative Director</p>
                <p class="bio">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

<style scoped>
    .our-team-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 50px 20px;
        background-color: #f9f9f9;
    }

    h1 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #333;
        padding-bottom: 30px;
    }

    .our-team-content {
        max-width: 800px;
    }

    .team-member {
        display: flex;
        margin-bottom: 60px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px #5c642e;
        transition: transform 0.3s ease-in-out;
    }

    .team-member:hover {
        transform: scale(1.05);
    }

    .team-member-photo {
        object-fit: cover;
        margin-right: 20px;
    }

    .team-member-details {
        flex: 1;
    }

    h2 {
        font-size: 24px;
        color: #333;
        padding-top: 20px;
        padding-bottom: 30px;
    }

    .position {
        font-size: 16px;
        color: #666;
        margin-bottom: 10px;
    }

    .bio {
        font-size: 16px;
        line-height: 1.6;
        color: #444;
    }
</style>