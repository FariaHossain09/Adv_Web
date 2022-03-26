
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  text-align: center;


  /* //background-color:black ; */
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 10px 12px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color:  black;
}
</style>
</head>
<body>
<center>
<div class="topnav">


  <a href="{{route('home')}} ">Home </a>
  <!-- <a href= "{{route('studentlist')}}">StudentList </a> -->
  <a href= "{{route('studentcreate')}}">Student Registration</a>
  <a  href= "{{route('teacherList')}}">TeacherList</a>
  <a href="{{route('file.upload')}}"> Upload</a>
  <a href="{{route('profile')}}"> Profile</a>
  <a href="{{route('adminDash')}}"> Admin</a>
  <a href="{{route('teacherDash')}}"> Teacher</a>
  <a href= "{{route('question')}}">Quiz </a>
  <a href="{{route('login')}}"> Login </a>

  

</div>
</center>


</body>
</html>
