<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data from API</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        label {
            font-size: 18px;
            margin-bottom: 10px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            display: block;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #45a049;
        }

        #dataContainer {
            margin: 0 auto;
            max-width: 800px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .error {
            color: red;
            font-size: 16px;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <h1>API TO REQUEST Nicole's data, Nicole set my business id to 1</h1>
    <h2>Your Business ID is: <span style="background-color: yellow;">1</span></h2>
    <label for="userIdInput">Enter your Business ID:</label>
    <input type="text" id="userIdInput">
    <button onclick="getData()">Get Data</button>
    <div id="dataContainer"></div>

    <script>
        function getData() {
            var userId = document.getElementById('userIdInput').value;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'https://photohub-be8962501b72.herokuapp.com/api.php/photoapp/api.php?user='+userId, true);
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    var data = JSON.parse(xhr.responseText);
                    if (data.error) {
                        displayError(data.error);
                    } else {
                        displayData(data);
                    }
                } else {
                    displayError('Error fetching data. Please try again later.');
                }
            };
            xhr.send();
        }

        function displayData(data) {
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
            document.getElementById('dataContainer').innerHTML = html;
        }

        function displayError(message) {
            document.getElementById('dataContainer').innerHTML = '<p class="error">' + message + '</p>';
        }
    </script>
</body>
</html>
