<h1>Create New Post</h1>
<form action="{{ url('toshiba/insert') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Enter title"><br><br>
    <input type="text" name="price" placeholder="Enter price"><br><br>
<input type="text" name="shipping" placeholder="Enter shipping"><br><br>
<input type="text" name="seller" placeholder="Enter seller" ><br><br>
<input type="text" name="watch" placeholder="Enter watch" ><br><br>
<input type="text" name="location" placeholder="Enter location" ><br><br>
    <input type="text" name="img" placeholder="Enter image URL">
    <input type="file" name="img"><br><br>
    <button type="submit">Submit</button>
</form>


