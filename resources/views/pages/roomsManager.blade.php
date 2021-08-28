<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        .selecter_date
        {  
            padding-top:30px
        }
        .table-rooms
        {
            padding-top: 30px;
            width: 100%;
        }
    </style>
</head>

<body>
   
    <div class="container">
        <div class="row">
            <h1>Rooms Manage</h1>
        </div>
        <div class="selecter_date">
            <div class="row">
                <div class="col-sm-4">
                    <p> Cheak In: <input type="text" id="check_in" name="check_in"></p>
                </div>
                <div class="col-sm-4">
                    <p> Cheak Out: <input type="text" id="check_out" name="check_out"></p>
                </div>
                <div class="col-sm-4">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="table-rooms">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Room</th>
                            <th scope="col">Type</th>
                            <th scope="col">Price</th>
                            <th scope="col">ON/OFF</th>
                            <th scope="col">Numbers</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    $(function() {
        $("#check_in").datepicker();
    });
    $(function() {
        $("#check_out").datepicker();
    });
</script>