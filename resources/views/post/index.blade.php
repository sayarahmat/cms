@extends('layouts.admin')

@section('content')
<div class="mail-env">

	<!-- compose new email button -->
	<div class="mail-sidebar-row visible-xs">
		<a href="create" class="btn btn-success btn-icon btn-block">
			Compose New Post
			<i class="entypo-pencil"></i>
		</a>
	</div>
	
	
	<!-- Mail Body -->
	<div class="mail-body">
		
		<div class="mail-header">
			<!-- title -->
			<h3 class="mail-title">
				All Post
				<span class="count">(4)</span>
			</h3>
			
			<!-- search -->
			<form method="get" role="form" class="mail-search">
				<div class="input-group">
					<input type="text" class="form-control" name="s" placeholder="Search for news..." />
					
					<div class="input-group-addon">
						<i class="entypo-search"></i>
					</div>
				</div>
			</form>
		</div>
		
		
		<!-- mail table -->
		<table class="table mail-table">
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
				<tr class="unread"><!-- new email class: unread -->
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" />
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star stared">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Facebook</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Reset your account password
						</a>
					</td>
					<td class="col-options">
						<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
					</td>
					<td class="col-time">13:52</td>
				</tr>
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" />
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Google AdWords</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Google AdWords: Ads not serving
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">09:27</td>
				</tr>
				
				
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" />
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">Instagram</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							Instagram announces the new video uploadin feature.
						</a>
					</td>
					<td class="col-options">
						<a href="mailbox-message.html"><i class="entypo-attach"></i></a>
					</td>
					<td class="col-time">26 Oct</td>
				</tr>
				
				<tr class="unread">
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" />
						</div>
					</td>
					<td class="col-name">
						<a href="#" class="star">
							<i class="entypo-star"></i>
						</a>
						<a href="mailbox-message.html" class="col-name">James Blue</a>
					</td>
					<td class="col-subject">
						<a href="mailbox-message.html">
							<span class="label label-info">Sports</span>
							There are 20 notifications
						</a>
					</td>
					<td class="col-options"></td>
					<td class="col-time">18 Oct</td>
				</tr>
				
				
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
		</table>
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
		
		<!-- menu -->
		<ul class="mail-menu">
			<li class="active">
				<a href="#">
					{{-- <span class="badge badge-danger pull-right">6</span> --}}
					All
				</a>
			</li>
			
			<li>
				<a href="#">
					{{-- <span class="badge badge-gray pull-right">1</span> --}}
					Drafts
				</a>
			</li>
			
			<li>
				<a href="#">
					Archieve
				</a>
			</li>
			
		</ul>
		
		<div class="mail-distancer"></div>
		
		<h4>Tags</h4>
		
		<!-- menu -->
		<ul class="mail-menu">
			<li>
				<a href="#">
					<span class="badge badge-danger badge-roundless pull-right"></span>
					Business
				</a>
			</li>
			
			<li>
				<a href="#">
					<span class="badge badge-info badge-roundless pull-right"></span>
					Sports
				</a>
			</li>
			
			<li>
				<a href="#">
					<span class="badge badge-warning badge-roundless pull-right"></span>
					Friends
				</a>
			</li>
		</ul>
		
	</div>
	
</div>
@endsection