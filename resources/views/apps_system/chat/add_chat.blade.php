
<div id="add_chat_user" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Direct Chat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group m-b-30">
                    <input placeholder="Search to start a chat" class="form-control search-input" type="text">
                    <span class="input-group-append">
                        <button class="btn btn-primary">Search</button>
                    </span>
                </div>
                <div>
                    <h5>Recent Conversations</h5>
                    <ul class="chat-user-list">
                        <li>
                            <a href="#">
                                <div class="media">
                                    <span class="avatar align-self-center">
                                        <img src="{{ URL::to('assets/img/profiles/avatar-16.jpg')}}" alt="">
                                    </span>
                                <div class="media-body align-self-center text-nowrap">
                                    <div class="user-name">Jeffery Lalor</div>
                                    <span class="designation">Team Leader</span>
                                </div>
                                <div class="text-nowrap align-self-center">
                                    <div class="online-date">1 day ago</div>
                                </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="media ">
                                    <span class="avatar align-self-center">
                                        <img src="{{ URL::to('assets/img/profiles/avatar-13.jpg')}}" alt="">
                                    </span>
                                    <div class="media-body align-self-center text-nowrap">
                                        <div class="user-name">Bernardo Galaviz</div>
                                        <span class="designation">Web Developer</span>
                                    </div>
                                    <div class="align-self-center text-nowrap">
                                        <div class="online-date">3 days ago</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="media">
                                    <span class="avatar align-self-center">
                                        <img src="{{ URL::to('assets/img/profiles/avatar-02.jpg')}}" alt="">
                                    </span>
                                    <div class="media-body text-nowrap align-self-center">
                                        <div class="user-name">John Doe</div>
                                        <span class="designation">Web Designer</span>
                                    </div>
                                    <div class="align-self-center text-nowrap">
                                        <div class="online-date">7 months ago</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
