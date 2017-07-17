@extends('layouts.admin')

@section('content')
<div class="mail-env">

	<!-- compose new email button -->
	{{-- <div class="mail-sidebar-row visible-xs">
		<a href="create" class="btn btn-success btn-icon btn-block">
			Compose New Post
			<i class="entypo-pencil"></i>
		</a>
	</div> --}}
	
	
	<!-- Mail Body -->
	<div class="mail-body">
		
		<div class="mail-header">
			<!-- title -->
			<h3 class="mail-title">
				All Post
				<span class="count">(4)</span>
			</h3>
			
			<!-- search -->
			{{--  <form method="get" role="form" class="mail-search">
				<div class="input-group">
					<input type="text" class="form-control" name="s" placeholder="Search for news..." />
					
					<div class="input-group-addon">
						<i class="entypo-search"></i>
					</div>
				</div>
			</form>  --}}
		</div>
		
		<div>
			<form action="" class="form-horizontal">
				<input type="text" class="form-control" placeholder="Judul Berita" name="judul">
				<br>
				<textarea class="form-control" name="judul">
				
				</textarea>
				<br>
				<input type="checkbox" name="komentar">
				
			</form>
		</div>
		<!-- mail table -->
		{{--  <table class="table mail-table">
			<!-- mail table header -->
			<thead>
				<tr>
					<th width="5%">
						<div class="checkbox checkbox-replace">
							<input type="checkbox" />
						</div>
					</th>
					<th colspan="4">
						
						<div class="mail-select-options">Mark as Read</div>
						
						<div class="mail-pagination" colspan="2">
							<strong>1-30</strong> <span>of 789</span>
							
							<div class="btn-group">
								<a href="#" class="btn btn-sm btn-white"><i class="entypo-left-open"></i></a>
								<a href="#" class="btn btn-sm btn-white"><i class="entypo-right-open"></i></a>
							</div>
						</div>
					</th>
				</tr>
			</thead>
			
			<!-- email list -->
			<tbody>
				<!-- disini nanti form textnya -->
				<form action="" class="form-horizontal">
					<input type="text" class="form-control">
				</form>
			</tbody>
			
			<!-- mail table footer -->
			<tfoot>
				<tr>
					<th width="5%">
						<div class="checkbox checkbox-replace">
							<input type="checkbox" />
						</div>
					</th>
					<th colspan="4">
						
						<div class="mail-pagination" colspan="2">
							<strong>1-30</strong> <span>of 789</span>
							
							<div class="btn-group">
								<a href="#" class="btn btn-sm btn-white"><i class="entypo-left-open"></i></a>
								<a href="#" class="btn btn-sm btn-white"><i class="entypo-right-open"></i></a>
							</div>
						</div>
					</th>
				</tr>
			</tfoot>
		</table>  --}}
	</div>
	
	<!-- Sidebar -->
	<div class="mail-sidebar">
		
		<!-- compose new email button -->
		<div class="mail-sidebar-row hidden-xs">
			<a href="post/create" class="btn btn-success btn-icon btn-block">
				Compose New Post
				<i class="entypo-pencil"></i>
			</a>
		</div>

	</div>
	
</div>
<script src="/src/tinymce/js/tinymce/tinymce.min.js"></script>	
<script>
	tinymce.init({
		selector: 'textarea',
		height: 200,
		plugins: 'image media codesample imagetools link',
		//toolbar: 'link image media codesample',
		image_caption: true,
		media_live_embeds: true,
		imagetools_cors_hosts: ['tinymce.com', 'codepen.io'],
		content_css: [
			'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			'//cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.css',
			'//www.tinymce.com/css/codepen.min.css'    
		]
	});
</script>
@endsection