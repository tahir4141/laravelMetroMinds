<html lang = "en">
   <head>
      <!-- Meta tags -->
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
      
      <!-- Bootstrap CSS -->
      <link rel = "stylesheet" 
         href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
         integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
         crossorigin = "anonymous">
      
      <title>Bootstrap 4 Example</title>
   </head>
   
   <body> 
    @if(Session()->has('messages'))
    <div class="alert alert-success">
        toaster.success("{{session()->get('messages') }}")
    </div>
@endif
      
      <div class = "container pt-4">
     
       
         <a href="{{url('view')}}"><button type = "submit" style="float:right; " class = "btn btn-primary">View Data</button></a>
         <form method="post" action="{{url('update/'.$employees['id'])}}" enctype="multipart/form-data">
         {{ csrf_field() }}
         @method('PUT')
            <h2>Update Employee data</h2>
            
            <div class = "form-row">
               <div class = "form-group col-md-6">
                  <label for = "inputEmail4">First Name</label>
                  <input type = "text"  name="first_name" class =" form-control" value="{{$employees['first_name']}}"
                     id = "inputEmail4" placeholder = "First Name">
                     @error('first_name')
                {{ $message }}
                 @enderror
               </div>
                 
               
               <div class = "form-group col-md-6">
                  <label for = "inputPassword4">Last Name</label>
                  <input type = "text" name="last_name" class = "form-control" value="{{$employees['last_name']}}"
                     id = "inputPassword4" placeholder = "Last Name">
                     @error('last_name')
                {{ $message }}
                 @enderror
               </div>
               
            </div>
            <div class = "form-row">
               <div class = "form-group col-md-6">
                  <label for = "inputEmail4">Email</label>
                  <input type = "text"  name="email" class =" form-control" value="{{$employees['email']}}"
                     id = "inputEmail4" placeholder = "please enter email id"> @error('email')
                {{ $message }}
                 @enderror
               </div>
               
               <div class = "form-group col-md-6">
                  <label for = "inputPassword4">Age</label>
                  <input type = "text" name="age" class = "form-control" value="{{$employees['age']}}"
                     id = "inputPassword4" placeholder = "enter age">
                     @error('age')
                {{ $message }}
                 @enderror
               </div>
            </div>
           
            <div class = "form-row">
               <div class = "form-group col-md-6">
                  <label for = "inputCity">City</label>
                  <input type = "text" class = "form-control" name="city" placeholder = "City" value="{{$employees['city']}}"
                     id = "inputCity">@error('city')
                {{ $message }}
                 @enderror
               </div>
               
               <div class = "form-group col-md-4">
                  <label for = "inputState">State</label>
                  <select id = "inputState" name="state" class = "form-control" >
                     <option  >{{ $employees['state'] }}</option>
                     <option >Assam</option>
                     <option>Gujarat</option>
                     <option>Kerala</option>
                     <option>Bihar</option>
                     <option>karnataka</option>
                     <option>Chhattisgarh</option>
                     
                     
                  </select>
                  @error('state')
                {{ $message }}
                 @enderror
               </div>
               
               <div class = "form-group col-md-2">
                  <label for = "inputZip">Pin Code</label>
                  <input type = "text" name="pincode" class = "form-control" id = "inputZip" value="{{$employees['pincode']}}"
                     placeholder = "Pin Code">
               </div>
            </div>
            
           
            <button type = "submit" class = "btn btn-primary">Update</button>
         </form>

      </div>
      
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" 
         integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
         crossorigin = "anonymous">
      </script>
      
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
         integrity = "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
         crossorigin = "anonymous">
      </script>
      
      <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
         integrity = "sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
         crossorigin = "anonymous">
      </script>
      
   </body>
</html>