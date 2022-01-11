<!DOCTYPE html>
<html>
<head>
    <title>users</title>
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

   <h1 align="center">All Users basic info</h1>
   <hr>

        
            

                @foreach($data as $data)
                <tr align="center" >
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>

                    @if($data->usertype=="0")
                    <td><a href="{{url('/deleteuser', $data->id)}}">Delete</a></td>
                    @else
                    <td><a>Not allowed</a></td>
                    @endif

                </tr>
                @endforeach

            </table>
        </div>

    </div>

    @include("admin.adminscript");

  </body>
</html>
</body>
</html>