<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Political Party Manifesto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: url('/assets/images/manifesto_bg.png') no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-align: center;
        }

        .overlay {
            /* background-color: rgba(0, 0, 0, 0.5); */
            padding: 20px 20px;
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .btn-custom {
            margin: 10px;
            min-width: 200px;
            background-color: white;
            color: #0574F7;
            /* font-weight: 600; */
            transition: 0.3s;
            font-family: 'Montserrat', sans-serif;
        }

        .btn-custom:hover {
            background-color: #0574F7;
            color: white;
        }

        .logo-top {
            max-width: 70px;
            height: auto;
            margin: 20px 30px;
        }
    </style>
</head>

<body>
    <div class="text-start">
        <img src="{{ asset('assets/images/dpp_logo_2.png') }}" alt="Party Logo" class="logo-top mb-4">
    </div>
    <div class="overlay">
        <div class="container">
            <div class="text-center">
                <h1 class="mb-4">Download Our Manifesto</h1>
                <p class="lead">Select your preferred language to download the DPP manifesto:</p>

                <div class="d-flex flex-column flex-md-row justify-content-center mt-4">
                    <a href="{{ asset('pdfs/dpp_manifesto_2019.pdf') }}" class="btn btn-lg btn-custom" download>Download in English</a>
                    <a href="{{ asset('pdfs/dpp_manifesto_2019.pdf') }}" class="btn btn-lg btn-custom" download>Download in Chichewa</a>
                    <a href="{{ asset('pdfs/dpp_manifesto_2019.pdf') }}" class="btn btn-lg btn-custom" download>Download in Tumbuka</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>