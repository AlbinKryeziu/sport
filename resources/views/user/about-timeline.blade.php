
@include('user/header-timeline')
<body>
        <section>
            <div class="feature-photo">
                <figure><img src="images/resources/timeline-1.jpg" alt=""></figure>
                <div class="add-btn">
                    <span>1205 followers</span>
                    <a href="#" title="" data-ripple="">Add Friend</a>
                </div>
                <form class="edit-phto">
                    <i class="fa fa-camera-retro"></i>
                    <label class="fileContainer">
                        Edit Cover Photo
                    <input type="file"/>
                    </label>
                </form>
                <div class="container-fluid">
                    <div class="row merged">
                        <div class="col-lg-2 col-sm-3">
                            <div class="user-avatar">
                                <figure>
                                    <img src="images/resources/user-avatar.jpg" alt="">
                                    <form class="edit-phto">
                                        <i class="fa fa-camera-retro"></i>
                                        <label class="fileContainer">
                                            Edit Display Photo
                                            <input type="file"/>
                                        </label>
                                    </form>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-10 col-sm-9">
                            <div class="timeline-info">
                                <ul>
                                    <li class="admin-name">
                                      <h5>Janice Griffith</h5>
                                      <span>Group Admin</span>
                                    </li>
                                    <li>
                                     
                                            <a class="active" href="{{ url('/user/photo') }}" title="" data-ripple="">time line</a>
                                            <a class="" href="{{ url('/photos/me ') }}" title="" data-ripple="" >Photos</a>
                                            <a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
                                            <a class="" href="{{ url('/friends') }}" title="" data-ripple="">Friends</a>
                                            <a class="" href="{{ url('/aboutUs') }}" title="" data-ripple="">about</a>
                                            <a class="" href="#" title="" data-ripple="">more</a>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- top area -->
            
        <section>
            <div class="gap gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row merged20" id="page-contents">
                                <div class="col-lg-3">
                                    
                                    <aside class="sidebar static">
                                        <div class="widget">
                                        <h4 class="widget-title">Edit info</h4>
                                        <ul class="naves">
                                            <li>
                                                <i class="ti-info-alt"></i>
                                                <a title="" href="{{ url('/edit/info') }}">Basic info</a>
                                            </li>
                                            <li>
                                                <i class="ti-mouse-alt"></i>
                                                <a title="" href="{{ url('/edit/user') }}">Education &amp; Work</a>
                                            </li>
                                           
                                            <li>
                                                <i class="ti-lock"></i>
                                                <a title="" href="{{ url('/edit/pswd') }}">change password</a>
                                            </li>
                                            <li>
                                                <i class="ti-link"></i>
                                                <a title="" href="edit-password.html">Social</a>
                                            </li>
                                        </ul>
                                    </div>
                                        <div class="widget">
                                                <h4 class="widget-title">Socials</h4>
                                                <ul class="socials">
                                                    <li class="facebook">
                                                        <a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span> <ins>45 likes</ins></a>
                                                    </li>
                                                    <li class="twitter">
                                                        <a title="" href="#"><i class="fa fa-twitter"></i> <span>twitter</span><ins>25 likes</ins></a>
                                                    </li>
                                                    <li class="google">
                                                        <a title="" href="#"><i class="fa fa-google"></i> <span>google</span><ins>35 likes</ins></a>
                                                    </li>
                                                </ul>
                                            </div>									
                                    </aside>
                                </div><!-- sidebar -->
                                <div class="col-lg-6">
                                    <div class="central-meta">
                                        <div class="about">
                                            <div class="personal">
                                                <h5 class="f-title"><i class="ti-info-alt"></i> Personal Info</h5>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>
                                            </div>
                                            <div class="d-flex flex-row mt-2">
                                                <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" >
                                                    <li class="nav-item">
                                                        <a href="#basic" class="nav-link active" data-toggle="tab" >Basic info</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#location" class="nav-link" data-toggle="tab" >location</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#work" class="nav-link" data-toggle="tab" >work and education</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#interest" class="nav-link" data-toggle="tab"  >interests</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#lang" class="nav-link" data-toggle="tab" >languages</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="basic" >
                                                        <ul class="basics">
                                                            <li><i class="ti-user"></i>sarah grey</li>
                                                            <li><i class="ti-map-alt"></i>live in Dubai</li>
                                                            <li><i class="ti-mobile"></i>+1-234-345675</li>
                                                            <li><i class="ti-email"></i>yourmail@email.com</li>
                                                            <li><i class="ti-world"></i>www.yoursite.com</li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="location" role="tabpanel">
                                                        <div class="location-map">
                                                            <div id="map-canvas"></div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="work" role="tabpanel">
                                                        <div>
                                                            
                                                            <a href="#" title="">Envato</a>
                                                            <p>work as autohr in envato themeforest from 2013</p> 
                                                            <ul class="education">
                                                                <li><i class="ti-facebook"></i> BSCS from Oxford University</li>
                                                                <li><i class="ti-twitter"></i> MSCS from Harvard Unversity</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="interest" role="tabpanel">
                                                        <ul class="basics">
                                                            <li>Footbal</li>
                                                            <li>internet</li>
                                                            <li>photography</li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane fade" id="lang" role="tabpanel">
                                                        <ul class="basics">
                                                            <li>english</li>
                                                            <li>french</li>
                                                            <li>spanish</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>	
                                </div><!-- centerl meta -->
                                <div class="col-lg-3">
                                    <aside class="sidebar static">
                                        <div class="widget">
                                                <h4 class="widget-title">Your page</h4>	
                                                <div class="your-page">
                                                    <figure>
                                                        <a title="" href="#"><img alt="" src="images/resources/friend-avatar9.jpg"></a>
                                                    </figure>
                                                    <div class="page-meta">
                                                        <a class="underline" title="" href="#">My page</a>
                                                        <span><i class="ti-comment"></i>Messages <em>9</em></span>
                                                        <span><i class="ti-bell"></i>Notifications <em>2</em></span>
                                                    </div>
                                                    <div class="page-likes">
                                                        <ul class="nav nav-tabs likes-btn">
                                                            <li class="nav-item"><a data-toggle="tab" href="#link1" class="active">likes</a></li>
                                                             <li class="nav-item"><a data-toggle="tab" href="#link2" class="">views</a></li>
                                                        </ul>
                                                        <!-- Tab panes -->
                                                        <div class="tab-content">
                                                          <div id="link1" class="tab-pane active fade show">
                                                            <span><i class="ti-heart"></i>884</span>
                                                              <a title="weekly-likes" href="#">35 new likes this week</a>
                                                              <div class="users-thumb-list">
                                                                  <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                                                    <img alt="" src="images/resources/userlist-1.jpg">  
                                                                </a>
                                                                <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                                                    <img alt="" src="images/resources/userlist-2.jpg">  
                                                                </a>
                                                                <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                                                    <img alt="" src="images/resources/userlist-3.jpg">  
                                                                </a>
                                                                <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                                                    <img alt="" src="images/resources/userlist-4.jpg">  
                                                                </a>
                                                                <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                                                    <img alt="" src="images/resources/userlist-5.jpg">  
                                                                </a>
                                                                <a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
                                                                    <img alt="" src="images/resources/userlist-6.jpg">  
                                                                </a>
                                                                <a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
                                                                    <img alt="" src="images/resources/userlist-7.jpg">  
                                                                </a>  
                                                              </div>
                                                          </div>
                                                          <div id="link2" class="tab-pane fade">
                                                              <span><i class="ti-eye"></i>445</span>
                                                              <a title="weekly-likes" href="#">440 new views this week</a>
                                                              <div class="users-thumb-list">
                                                                  <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                                                    <img alt="" src="images/resources/userlist-1.jpg">  
                                                                </a>
                                                                <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                                                    <img alt="" src="images/resources/userlist-2.jpg">  
                                                                </a>
                                                                <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                                                    <img alt="" src="images/resources/userlist-3.jpg">  
                                                                </a>
                                                                <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                                                    <img alt="" src="images/resources/userlist-4.jpg">  
                                                                </a>
                                                                <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                                                    <img alt="" src="images/resources/userlist-5.jpg">  
                                                                </a>
                                                                <a data-toggle="tooltip" title="" href="#" data-original-title="Sophie">
                                                                    <img alt="" src="images/resources/userlist-6.jpg">  
                                                                </a>
                                                                <a data-toggle="tooltip" title="" href="#" data-original-title="Maria">
                                                                    <img alt="" src="images/resources/userlist-7.jpg">  
                                                                </a>  
                                                              </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="widget stick-widget">
                                            <h4 class="widget-title">Who's follownig</h4>
                                            <ul class="followers">
                                                <li>
                                                    <figure><img src="images/resources/friend-avatar2.jpg" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="images/resources/friend-avatar4.jpg" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Issabel</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="images/resources/friend-avatar6.jpg" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Andrew</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="images/resources/friend-avatar8.jpg" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Sophia</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <figure><img src="images/resources/friend-avatar3.jpg" alt=""></figure>
                                                    <div class="friend-meta">
                                                        <h4><a href="time-line.html" title="">Allen</a></h4>
                                                        <a href="#" title="" class="underline">Add Friend</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!-- who's following -->
                                    </aside>
                                </div><!-- sidebar -->
                            </div>	
                        </div>
                    </div>
                </div>
            </div>	
        </section>
    
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget">
                            <div class="foot-logo">
                                <div class="logo">
                                    <a href="index.html" title=""><img src="images/logo.png" alt=""></a>
                                </div>	
                                <p>
                                    The trio took this simple idea and built it into the world’s leading carpooling platform.
                                </p>
                            </div>
                            <ul class="location">
                                <li>
                                    <i class="ti-map-alt"></i>
                                    <p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+1-56-346 345</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>follow</h4></div>
                            <ul class="list-style">
                                <li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
                                <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
                                <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
                                <li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
                                <li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>Navigate</h4></div>
                            <ul class="list-style">
                                <li><a href="about.html" title="">about us</a></li>
                                <li><a href="contact.html" title="">contact us</a></li>
                                <li><a href="terms.html" title="">terms & Conditions</a></li>
                                <li><a href="#" title="">RSS syndication</a></li>
                                <li><a href="sitemap.html" title="">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>useful links</h4></div>
                            <ul class="list-style">
                                <li><a href="#" title="">leasing</a></li>
                                <li><a href="#" title="">submit route</a></li>
                                <li><a href="#" title="">how does it work?</a></li>
                                <li><a href="#" title="">agent listings</a></li>
                                <li><a href="#" title="">view All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="widget">
                            <div class="widget-title"><h4>download apps</h4></div>
                            <ul class="colla-apps">
                                <li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
                                <li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
                                <li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- footer -->
        <div class="bottombar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="copyright">© Winku 2018. All rights reserved.</span>
                        <i><img src="images/credit-cards.png" alt=""></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="side-panel">
                <h4 class="panel-title">General Setting</h4>
                <form method="post">
                    <div class="setting-row">
                        <span>use night mode</span>
                        <input type="checkbox" id="nightmode1"/> 
                        <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Notifications</span>
                        <input type="checkbox" id="switch22" /> 
                        <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Notification sound</span>
                        <input type="checkbox" id="switch33" /> 
                        <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>My profile</span>
                        <input type="checkbox" id="switch44" /> 
                        <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Show profile</span>
                        <input type="checkbox" id="switch55" /> 
                        <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                </form>
                <h4 class="panel-title">Account Setting</h4>
                <form method="post">
                    <div class="setting-row">
                        <span>Sub users</span>
                        <input type="checkbox" id="switch66" /> 
                        <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>personal account</span>
                        <input type="checkbox" id="switch77" /> 
                        <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Business account</span>
                        <input type="checkbox" id="switch88" /> 
                        <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Show me online</span>
                        <input type="checkbox" id="switch99" /> 
                        <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Delete history</span>
                        <input type="checkbox" id="switch101" /> 
                        <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                    <div class="setting-row">
                        <span>Expose author name</span>
                        <input type="checkbox" id="switch111" /> 
                        <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
                    </div>
                </form>
            </div><!-- side panel -->		
        
        <script src="{{ asset('js/main.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/map-init.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
    
    </body>	
    </html>