<!DOCTYPE html>
<html>
<head>
    <title>update category</title>
</head>
<body>

<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
  @include("admin.admincss");
  
  </head>
  <body>
  <div class="container-scroller">
    
    @include("admin.navbar");

    <form action="{{url('/updatejerseycategory', $data->id)}}" method="post" enctype="multipart/form-data">

        @csrf

            <div>
                <label>Category</label>
                <input style="color:blue;" type="text" name="name" value="{{$data->name}}" required="">
            </div>
            <div>
                <label>Clubs Included</label>
                <input style="color:blue;" type="text" name="speciality" value="{{$data->speciality}}" required="">
            </div>
            

            <div>
                <label>old Image</label>
                <img height="200" width="200"  src="/categoryimage/{{$data->image}}">
            </div>

            <div>
                <label>New Image</label>
                <input type="file" name="image">
            </div>

            <br>


            <div>
                <input style="color: blue; padding: 5px;",  type="submit" value="Update Category" required="">
            </div>
        </form>


    </div>
    @include("admin.adminscript");

  </body>
</html>