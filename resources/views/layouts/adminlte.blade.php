<!DOCTYPE html>
<html>
	@includeif('includes.head')
	<body class="hold-transition skin-gitacode sidebar-mini" ng-app="gitacodeApp">
		<div class="wrapper">
			<header class="main-header">
				<a href="/" class="logo">
					<span class="logo-mini"><b>@yield('icon_aplikasi')</b></span>
					<span class="logo-lg">@yield('nama_aplikasi')</span>
				</a>
				<nav class="navbar navbar-static-top">
					<a href="javascript:void(0)" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>
				</nav>
			</header>
			<aside class="main-sidebar menu-sidebar-dark">
				<div class="user-panel">
					<div class="pull-left image">
					  <img src="/img/user_male.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
					  <p>@yield('username')</p>
					  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<section class="sidebar">
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
					<ul class="sidebar-menu">
						@yield('side-menu')
					</ul>
				</section>
			</aside>
			<div class="content-wrapper">
				@yield('content')
			</div>
			<footer class="main-footer">
				<div class="pull-right hidden-xs">
					<b>Version</b> 17.1
				</div>
				<strong>Copyright &copy; 2016-2017 Gita Citra Puspita</strong> All rights reserved.
			</footer>
			<div class="control-sidebar-bg"></div>
		</div>
	</body>
</html>
