<!DOCTYPE html>
<html>
<head>
    <title>Research Centre Management System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('About.jpg'); /* Replace with the path to your image */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: #fff; /* White text for better contrast */
            height: 100vh; /* Full viewport height */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
            background: rgba(0, 0, 0, 0.6); /* Add a semi-transparent background for better readability */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }

        .button {
            display: inline-block;
            margin: 10px;
            padding: 15px 25px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Research Centre Management System<br>PESITM, Shivamogga</h1>
        <a href="admin.php" class="button">Admin</a>
        <a href="viewer.php" class="button">Viewer</a>
    </div>
</body>
</html>
