<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API TO ACCESS FARM PRODUCE</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
    <h1>I have to enter business id and Nicole set my id to <span style = 'background-color:yellow'>1</span></h1>
    <h1>I can only access the farm produce using my id, otherwise, it display message error</h1>
    <label for="userIdInput">Enter your Business Id:</label>
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
            xhr.open('GET', 'https://photohub-be8962501b72.herokuapp.com/api.php/photoapp/api.php?user='+userId, true);

            // Define the callback function to handle the response
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    // Parse the JSON response
                
                    var data = JSON.parse(xhr.responseText);

                    // Handle data received from API
                    if (data.error) {
                        // Display error message
                        document.getElementById('dataContainer').innerText = data.error;
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
            html += '<tr><th>Product Id</th><th>Product</th><th>Quantity</th><th>Price per Unit</th></tr>';
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

        function displayError(){

            var html = '<div><p> Check with the farm, your id is not valid, thanks !</p></d>'
            document.getElementById('dataContainer').innerHTML = html;

        }
    </script>
</body>
</html>