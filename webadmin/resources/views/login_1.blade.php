<h1>Login form</h1>
<form action="{{ url('checklogin')}}" method="post">
@csrf
<input type="text" name="email" placeholder="user"><br><br>
<input type="password" name="password" placeholder="password"><br><br>
<input type="submit" name="submit" value="Submit">

 </form>
