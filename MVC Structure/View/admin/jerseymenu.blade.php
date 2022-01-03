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
    <div style="position: relative; top:60px; right:-150px">
    <h1>Jersey Info</h1>
        <form action="{{url('/uploadjersey')}}" method="post" enctype="multipart/form-data">

        @csrf

            <div style="padding: 30px">
                <label>Title</label>
                <input style="color:blue;" type="text" name="title" placeholder="write a title" required>
            </div>
            <div style="padding: 30px">
                <label>Price</label>
                <input style="color:blue;" type="number" name="price" placeholder="price" required>
            </div>
            <div style="padding: 30px">
                <label>Image</label>
                <input type="file" name="image" required>
            </div>
            <div style="padding: 30px">
                <label>Description</label>
                <input style="color:blue;" type="text" name="description" placeholder="Description" required>
            </div>
            <br>
            <div style="padding: 30px">
                <input style="color: black; padding: 10px;" type="submit" value="Save">
            </div>
        </form>
        <div>
            <br>
            <table bgcolor="black">
                <tr>
                    <th style="padding: 30px">Jersey Title</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Description of Jersey</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">More</th>

                </tr>

                @foreach($data as $data)
                <tr align = "center">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height ="200" width="200" src="/jerseyimage/{{$data->image}}"></td>
                    <td><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
                    <td><a href="{{url('/updateview', $data->id)}}">Update</a></td>
                </tr>
                @endforeach


            </table>
        </div>


    </div>

</div>
    @include("admin.adminscript");

  </body>
</html>