						<!-- Chat Right Sidebar -->
						<div class="col-lg-3 message-view chat-profile-view chat-sidebar" id="task_window">
							<div class="chat-window video-window">
								<div class="fixed-header">
									<ul class="nav nav-tabs nav-tabs-bottom">
										<li class="nav-item"><a class="nav-link" href="#calls_tab" data-toggle="tab">Calls</a></li>
										<li class="nav-item"><a class="nav-link active" href="#profile_tab" data-toggle="tab">Profile</a></li>
									</ul>
								</div>
								<div class="tab-content chat-contents">
                                    @include('apps_system.chat.my_contacts_calls')
                                    @include('apps_system.chat.my_contacts_profile')
								</div>
							</div>
						</div>
						<!-- /Chat Right Sidebar -->
