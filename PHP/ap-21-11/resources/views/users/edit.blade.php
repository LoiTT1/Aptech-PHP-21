
<form action="{{route('users.update',$user->id)}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_mothod" value="PUT">

<div>
   <label for="">Name</label>
   <input type="text" name="name" value="{{$user->name}}">
</div>
<div>
   <label for="">Email</label>
   <input type="email" name="email" value="{{$user->email}}">
</div>

<button type="submit">cap nhat mat khau</button>
</form> 