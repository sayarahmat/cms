<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.includes.meta')
</head>

<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		@include('layouts.includes.header')
				
		@include('layouts.includes.sidebar')
	</div>	

	<div class="main-content">
		@include('layouts.includes.subheader')
        <hr />
        @yield('content')
    </div>
    @include('layouts.includes.footer')	
</div>

    @yield('script')
    @include('layouts.includes.chat')
    @include('layouts.includes.modal')
    @include('layouts.includes.scripts')
</body>
</html>