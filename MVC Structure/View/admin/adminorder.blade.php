<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss");
  
  </head>
  <body>
  <div class="container-scroller">
    
    @include("admin.navbar");

    <h1>Orders</h1>

    <div style="position: relative; top:70px; right:-150;">
      <table bgcolor="grey" border="1px">
        <tr>
          <th style="padding: 30px;">Name</th>
          <th style="padding: 30px;">Email</th>
          <th style="padding: 30px;">Phone</th>
          <th style="padding: 30px;">Quantity</th>
          <th style="padding: 30px;">Date</th>
          <th style="padding: 30px;">Time</th>
          <th style="padding: 30px;">Product Details</th>
          <th style="padding: 30px;">House Address</th>
          <th style="padding: 30px;">Delivery Status</th>
        </tr>

        @foreach($data as $data)

        <tr align="center">
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->phone}}</td>
          <td>{{$data->quantity}}</td>
          <td>{{$data->date}}</td>
          <td>{{$data->time}}</td>
          <td style="padding-right: 20px;">{{$data->product}}</td>
          <td style="padding-left: 20px;">{{$data->address}}</td>
          <td>{{$data->status}}</td>


        </tr>
        @endforeach

      </table>
    </div>
    </div>
    @include("admin.adminscript");

  </body>
</html>