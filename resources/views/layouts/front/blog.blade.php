 @php 
	$months = [
	    '-01-' => '-Enero-',
	    '-02-' => '-Febrero-',
	    '-03-' => '-Marzo-',
	    '-04-' => '-Abril-',
	    '-05-' => '-Mayo-',
	    '-06-' => '-Junio-',
	    '-07-' => '-Julio-',
	    '-08-' => '-Agosto-',
	    '-09-' => '-Septiembre-',
	    '-10-' => '-Octubre-',
	    '-11-' => '-Noviembre-',
	    '-12-' => '-Diciembre-'
	];	
	
	$date_split = substr($blog->updated_at, 0, -9);
	$date = str_replace(array_keys($months), $months, $date_split);
	$date_array = explode("-", $date);
		
@endphp

<!-- Single Blog Page Area Start Here -->
<div class="single-blog-page-area">
    <div class="container">
        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar hidden-after-tab">
                    <!-- Barra busqueda ---------------------
                    <h2 class="title-sidebar">Search</h2>
                    <div class="sidebar-search-area sidebar-section-margin">
                        <div class="input-group stylish-input-group">
                            <input type="text" class="form-control" placeholder="Search Here . . .">
                            <span class="input-group-addon">
			                        <button type="submit">
			                            <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </div>
                    </div>
                    --------------------- -->
                    <h2 class="title-sidebar">RECENT POSTS</h2>
                    <div class="recent-posts sidebar-section-margin">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img alt="Media Object" src="img/sidebar/blog1.jpg" class="img-responsive">
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Blog Title Here</a></h3>
                                <p>7th June, 2014</p>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img alt="Media Object" src="img/sidebar/blog2.jpg" class="img-responsive">
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Blog Title Here</a></h3>
                                <p>7th June, 2014</p>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img alt="Media Object" src="img/sidebar/blog3.jpg" class="img-responsive">
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Blog Title Here</a></h3>
                                <p>7th June, 2014</p>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img alt="Media Object" src="img/sidebar/blog4.jpg" class="img-responsive">
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Blog Title Here</a></h3>
                                <p>7th June, 2014</p>
                            </div>
                        </div>
                    </div>
                    <h2 class="title-sidebar">Archives</h2>
                    <div class="archives sidebar-section-margin">
                        <ul>
                            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>January 2016</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>December 2015</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>November 2015</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>March 2015</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>January 2015</a></li>
                        </ul>
                    </div>
                    <h2 class="title-sidebar">Product Tags</h2>
                    <div class="product-tags">
                        <ul>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Glamour</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Dress</a></li>
                            <li><a href="#">Kid’s</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Mobile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="single-blog-details-content">
                    <a href="#">
                        @if(isset($blog->cover))
                            <img  id="main-image" class="img-responsive"
                                 src="{{ asset("storage/$blog->cover") }}?w=400"
                                 alt="{{ $blog->name }}">
                        @else
                            <img  id="main-image" class="img-responsive" src="https://placehold.it/300x300"
                                 alt="{{ $blog->name }}">
                        @endif 
                    </a>
                    <span>{{ $date_array[1] }} {{ $date_array[2] }}, {{ $date_array[0] }}</span>
                    <h3><a href="#">{{ $blog->name_blog}}</a></h3>
                    <ul class="comments-info">
                        <li><span>by</span> {{ $blog->name_creator }}</li>
                        <li>Comments (05)</li>
                    </ul>
                    <p>Rummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                    <p>
                        <span>We possess within us two minds. So far I have written ere  theronly of theewer conscious mind. within us two mind wewSo far I hheronly of theer conscious mind. within us two mind wewSo far I have only of Duis ntytonre conmind. within us two mind wew. . </span>
                    </p>
                    <br>
					<br>
					{{ $blog->slug}}<br>
					{{ $blog->description}}<br>
					{{ $blog->cover}}<br>
					{{ $blog->src_video1}}<br>
					
					<h3>xxxxxxxxxxxxxxxxxxxx</h3>
					{{ $blog->updated_at}}<br>
					{{ $blog->id}}<br>
					{{ $blog->status}}<br>

                    <p>Rummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                    <p>



                </div>
                <div class="single-blog-details-tags">
                    <h3>Did You Like This Post? Share it :</h3>
                    <ul class="single-blog-social">
                        <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="single-blog-details-comments">
                    <h3>Recent Comments</h3>
                    <div class="media solid-underline-comments">
                        <a href="#" class="pull-left">
                            <img alt="Comments" src="img/blog/single-blog2.jpg" class="media-object">
                        </a>
                        <div class="media-body">
                            <h3><a href="#">Jessy Robot</a></h3>
                            <p>February 20, 2016 @ 09:21</p>
                            <p><span>We possess within us two minds. So far I have written ere  theronly of theewer conscious mind within us two mind wewDuis ntytonssre conwithin us two minds. </span></p>
                            <div class="replay-area">
                                <a href="#"><i class="flaticon-reply-right-arrow"></i> Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="media solid-underline-comments">
                        <a href="#" class="pull-left">
                            <img alt="Comments" src="img/blog/single-blog3.jpg" class="media-object">
                        </a>
                        <div class="media-body">
                            <h3><a href="#">David Fahim</a></h3>
                            <p>February 20, 2016 @ 09:21</p>
                            <p><span>We possess within us two minds. So far I have written ere  theronly of theewer conscious mind within us two mind wewDuis ntytonssre conwithin us two minds. </span></p>
                            <div class="replay-area">
                                <a href="#"><i class="flaticon-reply-right-arrow"></i> Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-blog-details-leave-comments">
                    <h3>Leave Comment</h3>
                    <div class="row">
                        <div class="contact-form">
                            <form>
                                <fieldset>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name*" class="form-control" id="form-name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email*" class="form-control" id="form-email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea placeholder="Message*" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn-send-message">Send Message</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class='form-response'></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Single Blog Page Area End Here -->



