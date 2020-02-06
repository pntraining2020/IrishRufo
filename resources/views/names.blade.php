<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    input[type=text] {
        background: transparent;
        border: none;
        border-bottom: 1px solid #000000;
        color : black
    }
    label{
        color:black;
    }
</style>
<div class="container">                                    
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">names
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    @foreach($employees as $employee)
      <li><a href="/employee/{{$employee->id}}">{{$employee->firstname}} {{$employee->lastname}}</a></li>
    @endforeach
    <hr>
      <li><a href="#myModal" data-toggle="modal" data-target="#myModal">AddEmployee</a></li>
    </ul>
  </div>
</div>

<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p stle = 'color:black'>AddEmployee</p>
          <form action="{{route('createEmployee')}}" method='post'>
          @csrf
            <div class="form-group">
                <label for="firstname">Firstname:</label><br>
                <span class="error">
                    @if($errors->has('firstname'))
                        {{ $errors->first('firstname') }}
                    @endif
                </span>
                <input type="text" name="firstname" class="form form-control" >
            </div>
            <div class="form-group">
                <label for="middlename">middlename:</label><br>
                <span class="error">
                    @if($errors->has('middlename'))
                        {{ $errors->first('middlename') }}
                    @endif
                </span>
                <input type="middlename" name="middlename" class="form form-control" >
            </div>
            <div class="form-group">
                <label for="">lastname:</label><br>
                <span class="error">
                    @if($errors->has('lastname'))
                        {{ $errors->first('lastname') }}
                    @endif
                </span>
                <input type="lastname" name="lastname" class="form form-control" >
            </div>
            </div>
            <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value = 'add employee'>
            </div>
        </div>
      </form>

      
    </div>
  </div>
  
</div>

</body>
</html>