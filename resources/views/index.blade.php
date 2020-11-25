<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>input</title>

        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('app.css')}}">
    </head>
    <body >
       
        <div class="table-users">
            <div class="header">
                
                    <a href="/input">
                      <button type="button" class="btn btn-light">
                      Add New User
                      </button>
                    </a>
                  
            </div>
            
            <table cellspacing="0">
               <tr>
                  <th>id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>address</th>
                  <td>edit</td>
                  <td>delete</td>
               </tr>
               
               @foreach ($users as $user)
                   <tr>
                     <td>{{$user->id}}</td>
                     <td>{{$user->name}}</td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->phone}}</td>
                     <td>{{$user->address}}</td>
                     <td><a href="/user/{{ $user->id }}">edit</a></td>
                     <td><a href = 'delete/{{ $user->id }}'>Delete</a></td>
                  </tr>
               @endforeach
               
         
               
               
               
            </table>
         </div>
        
    </body>
</html>
