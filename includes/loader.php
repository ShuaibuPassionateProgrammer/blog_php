<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog PHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .loader {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #82930b;
        }
    </style>
</head>
<body>
    <div class="loader">
        <div class="loading">
            <div class="load">
                <h1>Loading...</h1>
            </div>
        </div>
    </div>
    <script>
        var loader = document.querySelector(".loader");
        
        setTimeout(() => {
            loader.style.display = "none";
        }, 8000);
    </script>
</body>
</html>