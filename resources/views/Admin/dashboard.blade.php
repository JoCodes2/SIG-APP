@extends('Layouts.Base')

@section('content')
    <div class="maintenance-container">
        <div class="maintenance-content">
            <h1>Maintenance Mode</h1>
            <p>We're currently undergoing scheduled maintenance.</p>
            <p>Please check back later.</p>
            <div class="maintenance-icon">
                <i class="fas fa-tools"></i>
            </div>
            <div class="countdown">
                <p>Estimated time remaining:</p>
                <div id="timer" class="timer">00:30:00</div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Countdown timer script
        let timeLeft = 1800; // 30 minutes in seconds
        const timerElement = document.getElementById('timer');

        const countdown = setInterval(() => {
            if (timeLeft <= 0) {
                clearInterval(countdown);
                timerElement.innerHTML = "We're back!";
            } else {
                const hours = Math.floor(timeLeft / 3600);
                const minutes = Math.floor((timeLeft % 3600) / 60);
                const seconds = timeLeft % 60;

                timerElement.innerHTML =
                    `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
                timeLeft--;
            }
        }, 1000);
    </script>
@endsection

<style>
    .maintenance-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f8f9fa;
        text-align: center;
        font-family: Arial, sans-serif;
    }

    .maintenance-content {
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 2.5em;
        color: #333;
    }

    p {
        font-size: 1.2em;
        color: #666;
    }

    .maintenance-icon {
        font-size: 5em;
        color: #007bff;
        margin: 20px 0;
    }

    .countdown {
        margin-top: 20px;
        font-size: 1.5em;
        color: #333;
    }

    .timer {
        font-weight: bold;
        color: #e74c3c;
    }
</style>
