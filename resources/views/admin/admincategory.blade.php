<!DOCTYPE html>
<html>
<head>
    <title>category</title>
</head>
<body>

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
   

    <form action="{{url('/uploadcategory')}}" method="Post" enctype="multipart/form-data">
        @csrf
    <div style="padding: 30px">
        <label>Name</label>
        <input style="color:blue;" type="text" name="name" required="" placeholder="Enter name">
    </div>

    <div style="padding: 30px">
        <label>Speciality</label>
        <input style="color:blue;" type="text" name="speciality" required="" placeholder="Enter Club names">
    </div>

    <div style="padding: 30px">

        <input type="file" name="image" required="">
    </div>
    <br>

    <div style="padding: 30px">
        <input style="color:blue; padding:10px;" type="submit" value="Save">
    </div>

    </form>

    <table bgcolor="black">
                <tr>
                    <th style="padding: 30px">Category Name</th>
                    <th style="padding: 30px">Clubs Included</th>
                    <th style="padding: 30px">Image</th>
                    <th style="padding: 30px">Action</th>
                    <th style="padding: 30px">Remove</th>

                </tr>

                @foreach($data as $data)
                <tr align = "center">
                    <td style="padding-right: 30px">{{$data->name}}</td>
                    <td style="padding-right: 30px">{{$data->speciality}}</td>
                    <td><img height ="200" width="200" src="/categoryimage/{{$data->image}}"></td>
                    <td><a href="{{url('/updatecategory', $data->id)}}">Update</a></td>
                    <td><a href="{{url('/deletecategory', $data->id)}}">Delete</a></td>
                </tr>
                @endforeach


            </table>


    </div>
    @include("admin.adminscript");

  </body>
</html>