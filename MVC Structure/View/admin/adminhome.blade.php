<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss");
  <div><h1>This is the admin panel</h1></div>
  
  </head>
  <body>
  <div class="container-scroller">
    
    
    @include("admin.navbar");
    </div>
    
    @include("admin.adminscript");

  </body>
</html>