<form action="/rest" method="POST">
  <table>
    @csrf
    <tr>
      <th>message: </th>
      <td><input type="text" name="message" value="{{old('message')}}"></td>
    </tr>
    <tr>
      <th>url: </th>
      <td><input type="text" name="url" value="{{old('url')}}"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>
  </table>
</form>