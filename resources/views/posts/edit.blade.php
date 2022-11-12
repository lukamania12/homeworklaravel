<form action="">
        <div class="mb-3">
            <label for="edittitle" class="form-label">Title</label>
            <input type="text" value="{{ $post->title ?? '' }}" name="title" class="form-control" id="edittitle" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="editauthor" class="form-label">Author</label>
            <input type="text" value="{{ $post->author ?? '' }}" name="author" class="form-control" id="editauthor" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="editactive" class="form-label">Active</label>
            <input type="text" value="{{ $post->active ?? '' }}" name="active" class="form-control" id="exampleFormControlInput1" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="editbody" class="form-label">Body</label>
            <textarea name="body" class="form-control" id="editbody" rows="3">
                {{ $post->body ?? '' }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>