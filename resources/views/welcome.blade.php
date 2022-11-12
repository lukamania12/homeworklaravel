
<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Author</th>
        <th scope="col">Active</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">
                    {{$post->title}}
                </th>
                <td>{{$post->body}}</td>
                <td>{{$post->author}}</td>
                <td>{{$post->active}}</td>
            </tr>
        @endforeach
<a href="/posts">See All</a>