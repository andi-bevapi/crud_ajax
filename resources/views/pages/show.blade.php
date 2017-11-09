<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Body</th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
      <tr id="data-row{{$post->id}}">
        <td>{{$post->id}}</td>
        <td>{{$post->name }}</td>
        <td>{{ $post->body }} <span>{{$post->id}}</span></td>
        <td>

        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" value="{{$post->id}}"  id="edit" >Edit</button>
        <button class="btn btn-danger"  value="{{$post->id}}"   id="delete">Delete</button>
        
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>