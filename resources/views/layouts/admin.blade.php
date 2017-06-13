<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.includes.meta')
</head>

<body class="page-body" data-url="#">

<div class="page-container">
	
	<div class="sidebar-menu">	
		@include('layouts.includes.header')
				
		@include('layouts.includes.sidebar')		
	</div>	
	
	<div class="main-content">	
		@include('layouts.includes.subheader')
        <hr />
		@include('layouts.includes.pagination')
        @yield('content')
			
		@include('layouts.includes.footer')
	</div>
	
</div>
	@yield('scripts')
	
	@if (Request::is('/event'))
		@include('layouts.includes.modals')
		@include('layouts.includes.scripts2')
	@else
		@include('layouts.includes.scripts')
	@endif
</body>
</html>