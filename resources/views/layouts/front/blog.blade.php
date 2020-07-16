 @php 
	/*
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
    */
    $months [0] = "NULL";
    $months [1] = "Enero";
    $months [2] = "Febrero";
    $months [3] = "Marzo";
    $months [4] = "Abril";
    $months [5] = "Mayo";
    $months [6] = "Junio";
    $months [7] = "Julio";
    $months [8] = "Agosto";
    $months [9] = "Septiembre";
    $months [10] = "Octubre";
    $months [11] = "Noviembre";
    $months [12] = "Diciembre";
                
    $blogMonth = $months[$blog->month];
		
@endphp

<!-- Single Blog Page Area Start Here -->
<div class="single-blog-page-area">
    <div class="container">
        <div class="row">
        	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                @include('layouts.front.blog-side-right')
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <!-- -------------- Se personalizo el css product-details2-area --------- -->
                <div class="product-details2-area-personalizada">
                    <div class="inner-product-details-left">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="related1">
                                <a href="#" class="zoom ex1">
                                    @if(isset($blog->cover))
                                        <img  id="main-image" class="img-responsive"
                                             src="{{ asset("storage/$blog->cover") }}?w=400"
                                             alt="{{ $blog->name_blog }}">
                                    @else
                                        <img  id="main-image" class="img-responsive" src="https://placehold.it/300x300"
                                             alt="{{ $blog->name_blog }}">
                                    @endif                                
                                </a>
                            </div>
                            @if( !empty($blog->src_video1))
                                <div class="tab-pane fade" id="related2">
                                        <div class="embed-container">
                                            <iframe width="560" height="315" src="{{ $blog->src_video1 }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>                                            
                                        </div>                                        
                                </div>
                            @endif                        
                        </div>

                        <ul>
                            <li class="active">
                                <a href="#related1" data-toggle="tab" aria-expanded="false">
                                    @if(isset($blog->cover))
                                        <img class="img-responsive"
                                            src="{{ asset("storage/$blog->cover") }}"
                                            alt="{{ $blog->name_blog }}" />
                                    @else
                                        <img class="img-responsive"
                                            src="{{ asset("storage/$blog->cover") }}"
                                            alt="{{ $blog->name_blog }}" />
                                    @endif

                                </a>
                            </li>
                            @if( !empty($blog->src_video1))
                                <li>
                                    <a href="#related2" data-toggle="tab" aria-expanded="false">
                                        <img class="img-responsive"
                                         src="{{ asset("front/images/videoYoutube.jpg") }}"
                                         alt="{{ $blog->name_blog }}" />
                                    </a>
                                </li>
                            @endif                       
                        </ul>
                    </div> 
<!-- </div> -->
                <br>
                <div class="single-blog-details-content">
                    <!-- 
                    <a href="#">
                        if(isset($blog->cover))
                            <img  id="main-image" class="img-responsive"
                                 src="{ asset("storage/$blog->cover") }}?w=400"
                                 alt="{ $blog->name }}">
                        else
                            <img  id="main-image" class="img-responsive" src="https://placehold.it/300x300"
                                 alt="{ $blog->name }}">
                        endif 
                    </a>
                    -->
                    <span>{{ $blogMonth }} {{ $blog->day }}, {{ $blog->year }}</span>
                    <h3><a href="#">{{ $blog->name_blog}}</a></h3>
                    <ul class="comments-info">
                        <li><span>by</span> {{ $blog->name_creator }}</li>
                        <li><a href="#disqus_thread">Comentarios</a></li>
                    </ul>

                    <br>

                    {!! $blog->description !!}
                </div>
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
               <!-- <div class="single-blog-details-comments">
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
                </div>-->
                <div id="disqus_thread" name="disqus_thread"></div>
                    <script>

                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://tirsoelectronica.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
                    </noscript>
                </div>
            
        </div>
    </div>
</div>
<!-- Single Blog Page Area End Here -->

@section('css')
    <style>

    

    .product-details2-area-personalizada .inner-product-details-left .tab-content {
      border: 1px solid #333333;
    }
    
    .product-details2-area-personalizada .inner-product-details-left .tab-content a {
      display: block;
    }
    .product-details2-area-personalizada .inner-product-details-left .tab-content a img {
      width: 100%;
    }


    .embed-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
    }
    .embed-container iframe {
        position: absolute;
        top:0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .product-details2-area-personalizada .inner-product-details-left ul li {
      border: 1px solid transparent;
      width: 22%;
      display: inline-block;
      margin: 16px 17px 0 0;
    }
        
    .product-details2-area-personalizada .inner-product-details-left ul li a img {
      width: 100%;
      opacity: 0.5;
    }
    .product-details2-area-personalizada .inner-product-details-left ul li a img:hover {
      opacity: 1;
    }


    .product-details2-area-personalizada .inner-product-details-left ul li a iframe {
      width: 100%;
      opacity: 0.5;
    }
    .product-details2-area-personalizada .inner-product-details-left ul li a iframe:hover {
      opacity: 1;
    }


    .product-details2-area-personalizada .inner-product-details-left ul li:last-child {
      margin: 16px 0 0 0;
    }
    .product-details2-area-personalizada .inner-product-details-left ul li:hover {
      border: 1px solid #333333;
    }
    .product-details2-area-personalizada .inner-product-details-left ul .active {
      border: 1px solid #333333;
    }
    .product-details2-area-personalizada .inner-product-details-left ul .active a img {
      opacity: 1;
    }





    </style>
@endsection
