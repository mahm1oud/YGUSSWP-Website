			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
							<li>
								<a href="{{ route('home') }}"><i class="la la-home"></i> <span>Back to Home</span></a>
							</li>
                            <!-- Group-list-->
                            @include('apps_system.chat.my_chat_group_list')
                            <!-- Contact-list-->
                            @include('apps_system.chat.my_contact_list')

						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
