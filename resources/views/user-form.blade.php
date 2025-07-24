<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Input Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        html {
            height: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .bg {
            background-image: url('https://wallpapercave.com/wp/Ex9MlTC.jpg');
            background-size: cover;
            background-position: center;
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.7;
        }

        .form-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form-card {
            /* background: rgba(255, 255, 255, 0.95); */
            padding: 30px;
            border-radius: 12px;
            /* box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); */
            width: 100%;
            max-width: 500px;
        }

        .form-card h1 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 32px;
            color: #333;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #484444;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
            transition: border-color 0.2s;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: cadetblue;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn:hover {
            background-color: rgb(135, 178, 179);
        }

        @media (max-width: 600px) {
            .form-card {
                padding: 20px;
            }

            .form-card h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

    <div class="bg"></div>

    <div class="form-wrapper">
        <div class="form-card">
            <h1>Input Form</h1>

            @if(session('success'))
            <div style="text-align: center; color: green; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
            @endif

            <form action="{{ url('adduser') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="fname">Full Name</label>
                    <input type="text" name="name" id="fname" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" placeholder="Enter your age" required>
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone No</label>
                    <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" required>
                </div>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>