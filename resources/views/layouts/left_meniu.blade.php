
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>

    .sidenav {
      height: 100%;
      width: 250px;
      position: fixed;
      z-index: 1;
      top: 80px;
      float: right;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 20px;
      border: 1px solid #f5f5f5;
    }

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 20px;
      color: black;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      color: black;
    }
    .text_style
    {
      color:red;
    }

  </style>
</head>

<body>

  <div id="mySidenav" class="sidenav">
    <table>
      <tr>
        <td> <a href="{{route('loadPage', 'Dashboard')}}">Dashboard</a>
        <td>
          <td class="text_style">False</td>
          
      </tr>
      <tr>
        <td> <a href="{{route('loadPage', 'RoomsManager')}}">Rooms Manage</a>
        <td>
      </tr>
      <tr>
        <td> <a href="{{route('loadPage', 'GuestManager')}}">Guest Manage</a>
        <td>
      </tr>
      <tr>
        <td> <a href="{{route('loadPage', 'PriceManager')}}">Price Manage</a>
        <td>
      </tr>
      <tr>
        <td> <a href="{{route('loadPage', 'ReserManager')}}">Reser Manage</a>
        <td>
      </tr>
      <tr>
        <td> <a href="{{route('loadPage', 'FrontOffice')}}">Front Office</a>
        <td>
      </tr>
      <tr>
        <td> <a href="{{route('loadPage', 'PointOfSale')}}">Point Of Sale</a>
        <td>
      </tr>
      <tr>
        <td> <a href="{{route('loadPage', 'NightAuditor')}}">Night Auditor</a>
        <td>
      </tr>
      <tr>
        <td> <a href="{{route('loadPage', 'HouseKeeping')}}">House keeping</a>
        <td>
      </tr>
      <tr>
        <td> <a href="{{route('loadPage', 'Setting')}}">Setting</a>
        <td>
      </tr>
      <tr>
        <td><a href="{{route('loadPage', 'Security')}}">Security</a>
        <td>
      </tr>
      <tr>
        <td> <a href="{{route('loadPage', 'Help')}}">Help</a>
        <td>
      </tr>
    </table>
  </div>
</body>

</html>