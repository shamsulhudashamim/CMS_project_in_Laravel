@extends ('layouts.app')
@section('content')


<div class="d-flex justify-content-end mb-2">
	<a href=" {{route('posts.create')}} " class="btn btn-success">Add Post</a>
	
</div>

<div class="card card-default">
	<div class="card-header">
		Posts
	</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<th>Image</th>
				<th>Title</th>
				
			</thead>
			<tbody>
				@foreach($posts as $post)
				
				<tr>
					<td> <img src="{{ asset($post->image) }}" alt="image" /> </td>
					<td>
						{{$post->title}}
					</td>
					<td>
						<a href=""class="btn btn-info btn-sm">Edit</a>
					</td>

					<td>
						<form action="{{ route('posts.destroy', $post->id) }}" method = "POST">
							@csrf
							@method("DELETE")
							<button type="submit" class="btn btn-danger btn-sm">Trash</a>
						</form>
						
					</td>
				</tr>


				@endforeach
			</tbody>
		</table>
		
	</div>
</div>


@endsection