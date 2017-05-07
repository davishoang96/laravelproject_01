<form class="" action="{{route('postForm')}}" method="post">
  <input type="text" name="first_name" value="" placeholder="Enter your first name">
  <input type="submit" name="" value="Submit">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
