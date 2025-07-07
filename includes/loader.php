<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Loading...</title>
    <style>
        /* Reset and basic styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .loader {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fff;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 9999;
        }

        .loading {
            padding: 20px 40px;
            border: 3px solid #282828;
            border-radius: 8px;
            font-size: 1.5rem;
            font-weight: bold;
            color: #282828;
            background-color: #eaeaea;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="loader" role="status" aria-live="polite" aria-label="Loading content">
        <div class="loading">Loading...</div>
    </div>

    <script>
        window.addEventListener('load', () => {
            const loader = document.querySelector(".loader");
            if(loader) {
                loader.style.display = "none";
            }
        });
    </script>
</body>
</html>