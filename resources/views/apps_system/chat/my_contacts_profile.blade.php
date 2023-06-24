<div class="content-full tab-pane show active" id="profile_tab">
    <div class="display-table">
        <div class="table-row">
            <div class="table-body">
                <div class="table-content">
                    <div class="chat-profile-img">
                        <div class="edit-profile-img">
                            <img src="{{ URL::to('assets/img/profiles/avatar-02.jpg')}}" alt="">
                            <span class="change-img">Change Image</span>
                        </div>
                        <h3 class="user-name m-t-10 mb-0">John Doe</h3>
                        <small class="text-muted">Web Designer</small>
                        <a href="javascript:void(0);" class="btn btn-primary edit-btn"><i class="fa fa-pencil"></i></a>
                    </div>
                    <div class="chat-profile-info">
                        <ul class="user-det-list">
                            <li>
                                <span>Username:</span>
                                <span class="float-right text-muted">johndoe</span>
                            </li>
                            <li>
                                <span>DOB:</span>
                                <span class="float-right text-muted">24 July</span>
                            </li>
                            <li>
                                <span>Email:</span>
                                <span class="float-right text-muted">johndoe@example.com</span>
                            </li>
                            <li>
                                <span>Phone:</span>
                                <span class="float-right text-muted">9876543210</span>
                            </li>
                        </ul>
                    </div>
                    <div class="transfer-files">
                        <ul class="nav nav-tabs nav-tabs-solid nav-justified mb-0">
                            <li class="nav-item"><a class="nav-link active" href="#all_files" data-toggle="tab">All Files</a></li>
                            <li class="nav-item"><a class="nav-link" href="#my_files" data-toggle="tab">My Files</a></li>
                        </ul>
                        <div class="tab-content">
                            @include('apps_system.chat.all_messages_files')
                            @include('apps_system.chat.my_messages_files')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
