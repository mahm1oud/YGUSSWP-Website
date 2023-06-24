@extends('apps_system.apps_layout.appmaster')
@section('apps_system_content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Chat Main Row -->
        <div class="chat-main-row">
            <!-- Chat Main Wrapper -->
            <div class="chat-main-wrapper">

                <!-- Chats View -->
                <div class="col-lg-9 message-view task-view">
                    <div class="chat-window">
                        <div class="fixed-header">
                            <div class="navbar">
                                <div class="user-details mr-auto">
                                    <div class="float-left user-img">
                                        <a class="avatar" href="#" title="Mike Litorus">
                                            <img src="{{ URL::to('assets/img/profiles/avatar-05.jpg')}}" alt="" class="rounded-circle">
                                            <span class="status online"></span>
                                        </a>
                                    </div>
                                    <div class="user-info float-left">
                                        <a href="#" title="Mike Litorus"><span>Mike Litorus</span> <i class="typing-text">Typing...</i></a>
                                        <span class="last-seen">Last seen today at 7:50 AM</span>
                                    </div>
                                </div>
                                <div class="search-box">
                                    <div class="input-group input-group-sm">
                                        <input type="text" placeholder="Search" class="form-control">
                                        <span class="input-group-append">
                                            <button type="button" class="btn"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <ul class="nav custom-menu">
                                    <li class="nav-item">
                                        <a class="nav-link task-chat profile-rightbar float-right" id="task_chat" href="#task_window"><i class="fa fa-user"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="voice-call.html" class="nav-link"><i class="fa fa-phone"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="video-call.html" class="nav-link"><i class="fa fa-video-camera"></i></a>
                                    </li>
                                    <li class="nav-item dropdown dropdown-action">
                                        <a aria-expanded="false" data-toggle="dropdown" class="nav-link dropdown-toggle" href=""><i class="fa fa-cog"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item">Delete Conversations</a>
                                            <a href="javascript:void(0)" class="dropdown-item">Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="chat-contents">
                            <div class="chat-content-wrap">
                                <div class="chat-wrap-inner">
                                    <div class="chat-box">
                                        <div class="chats">
                                            <div class="chat chat-right">
                                                <div class="chat-body">
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>Hello. What can I do for you?</p>
                                                            <span class="chat-time">8:30 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-line">
                                                <span class="chat-date">October 8th, 2018</span>
                                            </div>
                                            <div class="chat chat-left">
                                                <div class="chat-avatar">
                                                    <a href="profile.html" class="avatar">
                                                        <img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="chat-body">
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>I'm just looking around.</p>
                                                            <p>Will you tell me something about yourself? </p>
                                                            <span class="chat-time">8:35 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>Are you there? That time!</p>
                                                            <span class="chat-time">8:40 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat chat-right">
                                                <div class="chat-body">
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>Where?</p>
                                                            <span class="chat-time">8:35 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>OK, my name is Limingqiang. I like singing, playing basketballand so on.</p>
                                                            <span class="chat-time">8:42 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat chat-left">
                                                <div class="chat-avatar">
                                                    <a href="profile.html" class="avatar">
                                                    <img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="chat-body">
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>You wait for notice.</p>
                                                            <span class="chat-time">8:30 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>Consectetuorem ipsum dolor sit?</p>
                                                            <span class="chat-time">8:50 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>OK?</p>
                                                            <span class="chat-time">8:55 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-bubble">
                                                        <div class="chat-content img-content">
                                                            <div class="chat-img-group clearfix">
                                                                <p>Uploaded 3 Images</p>
                                                                <a class="chat-img-attach" href="#">
                                                                    <img width="182" height="137" alt="" src="{{ URL::to('assets/img/placeholder.jpg')}}">
                                                                    <div class="chat-placeholder">
                                                                        <div class="chat-img-name">placeholder.jpg</div>
                                                                        <div class="chat-file-desc">842 KB</div>
                                                                    </div>
                                                                </a>
                                                                <a class="chat-img-attach" href="#">
                                                                    <img width="182" height="137" alt="" src="{{ URL::to('assets/img/placeholder.jpg')}}">
                                                                    <div class="chat-placeholder">
                                                                        <div class="chat-img-name">842 KB</div>
                                                                    </div>
                                                                </a>
                                                                <a class="chat-img-attach" href="#">
                                                                    <img width="182" height="137" alt="" src="{{ URL::to('assets/img/placeholder.jpg')}}">
                                                                    <div class="chat-placeholder">
                                                                        <div class="chat-img-name">placeholder.jpg</div>
                                                                        <div class="chat-file-desc">842 KB</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <span class="chat-time">9:00 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat chat-right">
                                                <div class="chat-body">
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>OK!</p>
                                                            <span class="chat-time">9:00 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat chat-left">
                                                <div class="chat-avatar">
                                                    <a href="profile.html" class="avatar">
                                                        <img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="chat-body">
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>Uploaded 3 files</p>
                                                            <ul class="attach-list">
                                                                <li><i class="fa fa-file"></i> <a href="#">example.avi</a></li>
                                                                <li><i class="fa fa-file"></i> <a href="#">activity.psd</a></li>
                                                                <li><i class="fa fa-file"></i> <a href="#">example.psd</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>Consectetuorem ipsum dolor sit?</p>
                                                            <span class="chat-time">8:50 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>OK?</p>
                                                            <span class="chat-time">8:55 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat chat-right">
                                                <div class="chat-body">
                                                    <div class="chat-bubble">
                                                        <div class="chat-content img-content">
                                                            <div class="chat-img-group clearfix">
                                                                <p>Uploaded 6 Images</p>
                                                                <a class="chat-img-attach" href="#">
                                                                    <img width="182" height="137" alt="" src="{{ URL::to('assets/img/placeholder.jpg')}}">
                                                                    <div class="chat-placeholder">
                                                                        <div class="chat-img-name">placeholder.jpg</div>
                                                                        <div class="chat-file-desc">842 KB</div>
                                                                    </div>
                                                                </a>
                                                                <a class="chat-img-attach" href="#">
                                                                    <img width="182" height="137" alt="" src="{{ URL::to('assets/img/placeholder.jpg')}}">
                                                                    <div class="chat-placeholder">
                                                                        <div class="chat-img-name">842 KB</div>
                                                                    </div>
                                                                </a>
                                                                <a class="chat-img-attach" href="#">
                                                                    <img width="182" height="137" alt="" src="{{ URL::to('assets/img/placeholder.jpg')}}">
                                                                    <div class="chat-placeholder">
                                                                        <div class="chat-img-name">placeholder.jpg</div>
                                                                        <div class="chat-file-desc">842 KB</div>
                                                                    </div>
                                                                </a>
                                                                <a class="chat-img-attach" href="#">
                                                                    <img width="182" height="137" alt="" src="{{ URL::to('assets/img/placeholder.jpg')}}">
                                                                    <div class="chat-placeholder">
                                                                        <div class="chat-img-name">placeholder.jpg</div>
                                                                        <div class="chat-file-desc">842 KB</div>
                                                                    </div>
                                                                </a>
                                                                <a class="chat-img-attach" href="#">
                                                                    <img width="182" height="137" alt="" src="{{ URL::to('assets/img/placeholder.jpg')}}">
                                                                    <div class="chat-placeholder">
                                                                        <div class="chat-img-name">placeholder.jpg</div>
                                                                        <div class="chat-file-desc">842 KB</div>
                                                                    </div>
                                                                </a>
                                                                <a class="chat-img-attach" href="#">
                                                                    <img width="182" height="137" alt="" src="{{ URL::to('assets/img/placeholder.jpg')}}">
                                                                    <div class="chat-placeholder">
                                                                        <div class="chat-img-name">placeholder.jpg</div>
                                                                        <div class="chat-file-desc">842 KB</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <span class="chat-time">9:00 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat chat-left">
                                                <div class="chat-avatar">
                                                    <a href="profile.html" class="avatar">
                                                        <img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="chat-body">
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <ul class="attach-list">
                                                                <li class="pdf-file"><i class="fa fa-file-pdf-o"></i> <a href="#">Document_2016.pdf</a></li>
                                                            </ul>
                                                            <span class="chat-time">9:00 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat chat-right">
                                                <div class="chat-body">
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <ul class="attach-list">
                                                                <li class="pdf-file"><i class="fa fa-file-pdf-o"></i> <a href="#">Document_2016.pdf</a></li>
                                                            </ul>
                                                            <span class="chat-time">9:00 am</span>
                                                        </div>
                                                        <div class="chat-action-btns">
                                                            <ul>
                                                                <li><a href="#" class="share-msg" title="Share"><i class="fa fa-share-alt"></i></a></li>
                                                                <li><a href="#" class="edit-msg"><i class="fa fa-pencil"></i></a></li>
                                                                <li><a href="#" class="del-msg"><i class="fa fa-trash-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat chat-left">
                                                <div class="chat-avatar">
                                                    <a href="profile.html" class="avatar">
                                                        <img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="chat-body">
                                                    <div class="chat-bubble">
                                                        <div class="chat-content">
                                                            <p>Typing ...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-footer">
                            <div class="message-bar">
                                <div class="message-inner">
                                    <a class="link attach-icon" href="#" data-toggle="modal" data-target="#drag_files"><img src="{{ URL::to('assets/img/attachment.png')}}" alt=""></a>
                                    <div class="message-area">
                                        <div class="input-group">
                                            <textarea class="form-control" placeholder="Type message..."></textarea>
                                            <span class="input-group-append">
                                                <button class="btn btn-custom" type="button"><i class="fa fa-send"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Chats View -->
                @include('apps_system.chat.chat_right_sidebar')
            </div>
            <!-- /Chat Main Wrapper -->
        </div>
        <!-- /Chat Main Row -->

         <!-- Drogfiles Modal -->
         @include('apps_system.chat.drogfiles')

         <!-- /Drogfiles Modal -->

         <!-- Add Group Modal -->
         @include('apps_system.chat.add_group')
         <!-- /Add Group Modal -->

         <!-- Add Chat User Modal -->
         @include('apps_system.chat.add_chat')
         <!-- /Add Chat User Modal -->

         <!-- Share Files Modal -->
         @include('apps_system.chat.share_files')
         <!-- /Share Files Modal -->
    </div>
<!-- /Page Wrapper -->

@endsection