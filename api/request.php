<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API TO ACCESS FARM PRODUCE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 30px;
            padding: 20px;
        }

        h1 {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input[type="text"] {
            padding: 10px;
            width: 200px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #dataContainer {
            margin-top: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .error-message {
            color: #f44336;
            margin-top: 20px;
            padding: 10px;
            background-color: #ffebee;
            border: 1px solid #f44336;
        }
    </style>
</head>
<body>
    <h1>Access Farm Produce and I am Restaurent </h1>
    <p>Enter your Business ID to access farm produce. Nicole has set your ID to <span style="background-color: yellow;">1</span>.</p>
    <label for="userIdInput">Enter your Business ID:</label>
    <input type="text" id="userIdInput">
    <button onclick="getData()">Get Data</button>
    <div id="dataContainer"></div>

    <script>
        function getData() {
            // Get user ID entered by the user
            var userId = document.getElementById('userIdInput').value;

            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure the request
            xhr.open('GET', 'https://photohub-be8962501b72.herokuapp.com/api.php/photoapp/api.php?user=' + userId, true);

            // Define the callback function to handle the response
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    // Parse the JSON response
                    var data = JSON.parse(xhr.responseText);

                    // Handle data received from API
                    if (data.error) {
                        // Display error message
                        document.getElementById('dataContainer').innerHTML = '<div class="error-message">' + data.error + '</div>';
                    } else {
                        // Display data in table
                        displayData(data);
                    }
                } else {
                    displayError();
                }
            };

            // Send the request
            xhr.send();
        }

        // Function to display data in a table
        function displayData(data) {
            // Construct HTML for table
            var html = '<table>';
            html += '<tr><th>Product ID</th><th>Product</th><th>Quantity</th><th>Price per Unit</th></tr>';
            data.forEach(item => {
                html += '<tr>' +
                        '<td>' + item.ProduceID + '</td>' +
                        '<td>' + item.Name + '</td>' +
                        '<td>' + item.Quantity + '</td>' +
                        '<td>' + item.Price + '</td>' +
                        '</tr>';
            });
            html += '</table>';

            // Display table in the container
            document.getElementById('dataContainer').innerHTML = html;
        }

        function displayError() {
            var html = '<div class="error-message">Check with the farm, your ID is not valid. Thank you!</div>';
            document.getElementById('dataContainer').innerHTML = html;
        }
    </script>
</body>
</html>
