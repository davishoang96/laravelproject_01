<form class="" action="{{route('postfile')}}" method="post" enctype="multipart/form-data">
  <input type="file" name="myfile" value="">
  <input type="submit" name="" value="Submit">

  
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
