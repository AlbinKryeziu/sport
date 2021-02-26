@include('user/includes/header')
<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                @include('user/includes/shortcuts')
                                <!-- Shortcuts -->
                                <div class="widget stick-widget">
                                    <h4 class="widget-title">Profile intro</h4>
                                    <ul class="short-profile">
                                        <li>
                                            <span>about</span>
                                            <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company.</p>
                                        </li>
                                        <li>
                                            <span>fav tv show</span>
                                            <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company.</p>
                                        </li>
                                        <li>
                                            <span>favourit music</span>
                                            <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft company.</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- profile intro widget -->
                            </aside>
                        </div>
                        <!-- sidebar -->
                        <div class="col-lg-6">
                            <div class="central-meta">
                                <div class="frnds">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a class="active" href="#frends" data-toggle="tab">My Friends</a> <span>{{ $count }}</span></li>
                                        <li class="nav-item"><a class="" href="#frends-req" data-toggle="tab">Friend Requests</a><span>0</span></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active fade show" id="frends">
                                            <ul class="nearby-contct">
                                                @foreach($myfriends as $key => $friends)
                                                    
                                              
                                                <li>
                                                    <div class="nearly-pepls">
                                                        <figure  width="1450px;" height="45px"> 
                                                            <a href="{{ url('friends/profile/'.$friends->friend->id) }}" title=""><img style="width:40px; height:40px;" src="{{ asset('store/'.$friends->friend->profilePath) }}" alt=""   /></a>
                                                        </figure>
                                                        <div class="pepl-info">
                                                            <h4><a href="{{ url('friends/profile/'.$friends->friend->id) }}" title="">{{ $friends->friend->name }}</a></h4>
                                                            <span></span>
                                                            <form method="Post" action="{{ url('/unfollo/friends/'.$friends->friend->id) }}">
                                                                @csrf
                                                               
                                                             <button type="submit" class="add-butn more-action float-right"> unfriend</button> 
                                                               
                                                            </form>
                
                                                            {{-- <form method="Post" >
                                                            <a href="" title="" class="add-butn more-action" data-ripple="">unfriend</a>
                                                            </form> --}}
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <div class="lodmore"><button class="btn-view btn-load-more"></button></div>
                                        </div>
                                        <div class="tab-pane fade" id="frends-req">
                                            <ul class="nearby-contct">
                                            </ul>
                                            <button class="btn-view btn-load-more"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- centerl meta -->
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget">
                                    <h4 class="widget-title">Who's follownig</h4>
                                    <ul class="followers">
                                        <li>
                                            <figure><img src="images/resources/friend-avatar2.jpg" alt="" /></figure>
                                            <div class="friend-meta">
                                               <p >Empty</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- who's following -->
                                <div class="widget friend-list stick-widget">
                                    <h4 class="widget-title">Friends</h4>
                                    <div id="searchDir"></div>
                                    <ul id="people-list" class="friendz-list">
                                        @foreach($myfriends as $key => $friends)
                                        <li>
                                            <figure>
                                                <a href="{{ url('friends/profile/'.$friends->friend->id) }}" title=""><img style="width:40px; height:40px;" src="{{ asset('store/'.$friends->friend->profilePath) }}" alt=""   /></a>
                                              
                                            </figure>
                                            <div class="friendz-meta">
                                                <a href="time-line.html">{{ $friends->friend->name }}</a>
                                                <i></i>
                                            </div>
                                        </li>
                                        @endforeach
                                       
                                    </ul>
                                    <div class="chat-box">
                                        <div class="chat-head">
                                            <span class="status f-online"></span>
                                            <h6>Bucky Barnes</h6>
                                            <div class="more">
                                                <span><i class="ti-more-alt"></i></span>
                                                <span class="close-mesage"><i class="ti-close"></i></span>
                                            </div>
                                        </div>
                                        <div class="chat-list">
                                            <ul>
                                                <li class="me">
                                                    <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt="" /></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                                    </div>
                                                </li>
                                                <li class="you">
                                                    <div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt="" /></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                                    </div>
                                                </li>
                                                <li class="me">
                                                    <div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt="" /></div>
                                                    <div class="notification-event">
                                                        <span class="chat-message-item">
                                                            Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
                                                        </span>
                                                        <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <form class="text-box">
                                                <textarea placeholder="Post enter to post..."></textarea>
                                                <div class="add-smiles">
                                                    <span title="add icon" class="em em-expressionless"></span>
                                                </div>
                                                <div class="smiles-bunch">
                                                    <i class="em em---1"></i>
                                                    <i class="em em-smiley"></i>
                                                    <i class="em em-anguished"></i>
                                                    <i class="em em-laughing"></i>
                                                    <i class="em em-angry"></i>
                                                    <i class="em em-astonished"></i>
                                                    <i class="em em-blush"></i>
                                                    <i class="em em-disappointed"></i>
                                                    <i class="em em-worried"></i>
                                                    <i class="em em-kissing_heart"></i>
                                                    <i class="em em-rage"></i>
                                                    <i class="em em-stuck_out_tongue"></i>
                                                </div>
                                                <button type="submit"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- friends list sidebar -->
                            </aside>
                        </div>
                        <!-- sidebar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('user/includes/footer')

<script src="{{ asset('socail/js/main.min.js') }}"></script>
<script src="{{ asset('socail/js/script.js') }}"></script>



