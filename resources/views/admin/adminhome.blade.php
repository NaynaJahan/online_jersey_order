<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss");
  <title>Admin</title>
  
  </head>
  <body>
  <div class="container-scroller">
    
    @include("admin.navbar");

    <div style="position: relative; top: 60px; right:-150px">
            <table bgcolor="black" border="3px" >
                <tr>
                    <th style="padding: 30px"><h1>Admin Dashboard</h1></th>
                    
                </tr>
                
            </table>
            <br>
            <ul style="list-style-type:circle;">
                      <li style="padding: 30px">Users info</li>
                      <li style="padding: 30px">Jerseys</li>
                      <li style="padding: 30px">Categories</li>
                      <li style="padding: 30px">Orders</li>
                      <li style="padding: 30px">Cart History</li>

                </ul>
    </div>
    </div>
    @include("admin.adminscript");



  </body>
</html>