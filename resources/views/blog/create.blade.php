<x-layout>
    <div>
        <div class="container">
            <!-- @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            @endif -->
            <h2>Create Blog</h2>
            <form action="{{ route('blog.store') }}" method="Post">
                @csrf
                <div class="form-group">
                    <label for="title">Title :</label>
                    <input type="text" name="title" id="title" placeholder="Enter Title" value="{{ old('title')}}">
                    @error('title')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Description :</label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter Description">{{old('description')}}</textarea>
                    @error('description')
                        <div class="error">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="form-btn">Create Blog</button>
            </form>
            <br />
            <a href="{{ route('blog.index')}}" class="action-link view-link">Back</a>
        </div>
    </div>    
</x-layout>