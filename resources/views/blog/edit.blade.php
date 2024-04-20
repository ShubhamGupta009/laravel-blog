<x-app-layout>
    <div>
        <div class="container">
            <h2>Update Blog</h2>
            <form action="{{ route('blog.update',$blog)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" value="{{$blog->title}}">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description"
                        >{{$blog->description}}</textarea>
                </div>
                <button type="submit" class="form-btn">Update Blog</button>
            </form>
            <br>
            <a href="{{ route('blog.index') }}" class="action-link view-link">Back</a>
        </div>
    </div>
</x-app-layout>