<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page with Search Bar</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .bg {
            /* The image used */
            background-image: url('your-image.jpg');

            /* Full height */
            height: 100%; 

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .content {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .search-bar {
            width: 50%;
            max-width: 600px;
        }

        .search-bar input[type="text"] {
            width: 80%;
            padding: 15px;
            border: none;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .search-bar button {
            width: 20%;
            padding: 15px;
            background: #333;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            outline: none;
        }

        .search-bar button:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="bg">
        <div class="content">
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button type="submit">Search</button>
            </div>
        </div>
    </div>
</body>
</html>