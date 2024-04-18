<x-layout>
    <div>
    <div class="container">
            <a href="#" class="create-blog-button">Create New Blog</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sample Title</td>
                            <td>Sample Description</td>
                            <td>2024-03-02 11:04:22</td>
                            <td class="action-buttons">
                                <a href="#" class="action-link view-link">View</a>
                                <a href="#" class="action-link edit-link">Edit</a>
                                <button onclick="return confirm('Are you sure want to delete?')"
                                    class="action-link delete-link">Delete</button>
                            </td>
                        </tr>
                </tbody>
            </table>
            <div class="pagination">

            </div>
        </div>
    </div>
</x-layout>
