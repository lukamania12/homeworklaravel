<a href="{{ route("posts.edit") }}">New Post</a>
<div><a href="/">Main Page</a></div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Title:</th>
        <th scope="col">Body:</th>
        <th scope="col">Author:</th>
        <th scope="col">Active:</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">
                    <a href="{{ route("posts.post", ["id" => $post->id]) }}">
                        {{$post->title}}
                    </a>
                </th>
                <td>{{$post->body}}</td>
                <td>{{$post->author}}</td>
                <td>{{$post->active}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route("posts.edit", ["post" => $post->id]) }}">
                        Edit
                    </a>
                    <a class="btn btn-danger" href="{{ route("posts.delete", ["post" => $post->id]) }}">
                        Delete
                    </a>
                </td>
            </tr>

        @endforeach