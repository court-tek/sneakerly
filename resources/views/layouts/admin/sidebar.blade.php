	    <?php 
			// die(var_dump(auth()->user()->role_id));
			// if (auth()->user()->role_id == 3) {
			// 	die(var_dump("Im a writer"));
			// } else {
			// 	die(var_dump("Im not writer"));
			// }
			$logged_in = auth()->user()->role_id;
		?>
		<div class="nav-left-sidebar sidebar-dark">
	        <div class="menu-list">
	            <nav class="navbar navbar-expand-lg navbar-light">
	                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
	                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="navbar-toggler-icon"></span>
	                </button>
	                <div class="collapse navbar-collapse" id="navbarNav">
	                    <ul class="navbar-nav flex-column">
	                        <li class="nav-divider">
	                            Menu
	                        </li>
	                        <li class="nav-item ">
	                            <a class="nav-link active" href="/admin/dashboard">
									<i class="fa fa-fw fa-user-circle"></i>
									Dashboard
								</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Articles</a>
	                            <div id="submenu-2" class="collapse submenu" style="">
	                                <ul class="nav flex-column">
										<li class="nav-item">
											@if ($logged_in == 1)
												<a class="nav-link text-muted">Create New Article</a>
											@else
												<a class="nav-link" href="/admin/articles-create">Create New Article</a>
											@endif
	                                    </li>
										<li class="nav-item">
											<a class="nav-link" href="/admin/articles-all">Show All Articles</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="nav-item">
	                            <div id="submenu-3" class="collapse submenu" style="">
	                                <ul class="nav flex-column">
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/chart-c3.html">C3 Charts</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/chart-chartist.html">Chartist Charts</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/chart-charts.html">Chart</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/chart-morris.html">Morris</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/chart-sparkline.html">Sparkline</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/chart-gauge.html">Guage</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                        <li class="nav-item ">
	                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Users</a>
	                            <div id="submenu-4" class="collapse submenu" style="">
	                                <ul class="nav flex-column">
	                                    <li class="nav-item">
	                                        <a class="nav-link" href="pages/form-elements.html">Show All Users</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </li>
	                    </ul>
	                </div>
	            </nav>
	        </div>
	    </div>