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
        .selecter_date {
            padding-top: 30px;
           
        }
        .table-rooms {
            padding-top: 30px;
            position: absolute;
            width: 80%;
            height: 1000px; 
            overflow: auto;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <h1>Rooms Manage</h1>
        </div>
        <form>
            <div class="selecter_date">
                <div class="row">
                    <div class="col-sm-4">
                        <p> Cheak In: <input type="text" id="check_in" name="check_in"></p>
                    </div>
                    <div class="col-sm-4">
                        <p> Cheak Out: <input type="text" id="check_out" name="check_out"></p>
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </div>
        </form>
        <div class="row">
            <div id="table_room" class="table-rooms">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Room</th>
                            <th scope="col">Room ID</th>
                            <th scope="col">Guest ID</th>
                            <th scope="col">Type</th>
                            <th scope="col">Price</th>
                            <th scope="col">ON/OFF</th>
                            <th scope="col">Check IN</th>
                            <th scope="col">Check Out</th>
                            <th scope="col">Add Reservation</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach(range(1,100) as $item)
                        <tr>
                            <th scope="row">{{$item}}</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><button type="button" disabled class="btn btn-primary">Add</button></td>
                        </tr>
                        @endforeach
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

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("table_room").style.top = "0";
        } else {
            document.getElementById("table_room").style.top = "-50px";
        }
    }
</script>