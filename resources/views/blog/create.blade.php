<x-layout>
    <div>
        <div class="container">
            <h2>Create Blog</h2>
            <form action="{{ route('blog.store') }}" method="Post">
                <div class="form-group">
                    <label for="title">Title :</label>
                    <input type="text" name="title" id="title" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="title">Description :</label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter Description"></textarea>
                </div>
                <button type="submit" class="form-btn">Create Blog</button>
            </form>
            <br />
            <a href="#" class="action-link view-link">Back</a>
        </div>
    </div>    
</x-layout>