		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<li id="search">
				<form method="get" action="">
					<input type="text" name="q" class="search-input" placeholder="Search something..."/>
					<button type="submit">
						<i class="entypo-search"></i>
					</button>
				</form>
			</li>
			
			<li>
				<a href="/">
					<i class="entypo-user"></i>
					<span>Manajemen Domain</span>
				</a>
				
				<ul>
					<li>
						<a href="/">
							<span>List User</span>
						</a>
					</li>
					<li>
						<a href="/">
							<span>Register User</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="/user">
					<i class="entypo-user"></i>
					<span>Manajemen User</span>
				</a>
				
				<ul>
					<li>
						<a href="/user">
							<span>User</span>
						</a>
					</li>
					<li>
						<a href="/role">
							<span>Role</span>
						</a>
					</li>
					<li>
						<a href="/permission">
							<span>Permission</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>