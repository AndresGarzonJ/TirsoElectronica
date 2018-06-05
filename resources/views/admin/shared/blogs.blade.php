@if(!$blogs->isEmpty())
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Creator</td>                
                <td>Status</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
        @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td><a href="{{ route('admin.blogs.show', $blog->id) }}">{{ $blog->name_blog }}</a></td>
                <td>{{ $blog->name_creator}}</td>               
                <td>@include('layouts.status', ['status' => $blog->status])</td>
                <td>
                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <div class="btn-group">
                             <a href="{{ route('front.get.blog', str_slug($blog->slug)) }}"  class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Ver</a>
                            <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif