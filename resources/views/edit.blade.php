<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>input</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('app.css')}}">
    </head>
    <body >
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="input-user">
            <div class="header">Thêm người dùng mới</div>
            <div class="input-form">
                <form method="POST"  >
                    @csrf
                  <div class="form-group col-md-8">
                    <label for="inputName">Name</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4" value="{{ $user->name }}" placeholder="Nhập tên người dùng" required>
                  </div>
                
                <div class="form-group col-md-8">
                  <label for="inputEmail4">email</label>
                  <input type="email" name="email" class="form-control" id="inputAddress" value="{{ $user->email }}" placeholder="Nhập địa chỉ email" required>
                </div>
                <div class="form-group col-md-8">
                  <label for="inputAddress2">Address </label>
                  <input type="text" class="form-control" name="address" id="inputAddress2" value="{{ $user->address }}" placeholder="Nhập địa chỉ thường trú">
                </div>
               
                  <div class="form-group col-md-8">
                    <label for="inputCity">Số điện thoại</label>
                    <input type="text" class="form-control" name="phone" id="inputCity" value="{{ $user->phone }}" placeholder="Nhập số địa thoại người dùng" required>
                  </div>
                <button class="btn btn-dark" style="margin-left: 10px"><a href="/index"> Back</a></button>
                <button  class="btn btn-dark" style="margin-left: 10px"  type="submit"> Save</button>
              </form>
            </div>
            
         </div>
        
    </body>
</html>
