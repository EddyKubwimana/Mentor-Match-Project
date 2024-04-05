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
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .error {
            color: red;
            font-size: 16px;
            margin-top: 10px;
            text-align: center;
        }

        span.highlight {
            background-color: yellow;
            padding: 2px 6px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    
    <h1>Eddy Kubwimana & Nicole Ineza</h1>
    <h2>We have 4 people, you can enter id  <span class="highlight">1,2,3,4</span> to fetch their respective orders</h2>
    <h2> If the id is not correct, you receive an error message</h2>
    <label for="userIdInput">Enter your Business Id:</label>
    <input type="text" id="userIdInput">
    <button onclick="getData()">Get Data</button>
    <div id="dataContainer"></div>

    <script>
        function getData() {
            var userId = document.getElementById('userIdInput').value;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'https://mentormatch-d34df610255f.herokuapp.com/api/accessdata.php?user=' + userId, true);
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    var data = JSON.parse(xhr.responseText);
                    if (data.error) {
                        displayError(data.error);
                    } else {
                        displayData(data);
                    }
                } else {
                    displayError('Your id is not registered with us, please contact us on + 233599346543');
                }
            };
            xhr.send();
        }

        function displayData(data) {
            var html = '<table>';
            html += '<tr><th>First Name</th><th>Last Name</th><th>Ingredient</th><th>Created At</th><th>Status</th><th>Quantity</th></tr>';
            data.forEach(item => {
                html += '<tr>' +
                        '<td>' + item.firstname + '</td>' +
                        '<td>' + item.lastname + '</td>' +
                        '<td>' + item.name + '</td>' +
                        '<td>' + item.createdat + '</td>' +
                        '<td>' + item.status + '</td>' +
                        '<td>' + item.quantity + '</td>' +
                        '</tr>';
            });
            html += '</table>';
            document.getElementById('dataContainer').innerHTML = html;
        }

        function displayError(message) {
            var html = '<div><p class="error">' + message + '</p></d>';
            document.getElementById('dataContainer').innerHTML = html;
        }
    </script>
</body>
</html>
