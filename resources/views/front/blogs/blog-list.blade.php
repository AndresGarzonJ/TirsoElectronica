@if(!empty($blogs) && !collect($blogs)->isEmpty())

    @foreach($blogs as $blog) 

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

        <!-- 
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 featured on-sale"> 
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 on-sale featured popular">
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 popular on-sale featured">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
 
            ----------------
            ESTOY ORGANIZANDO LA VISTA CATEGORIA
            --------------------
        -->
        <div
        @if($form_list == "grid")         
         class="col-lg-3 col-md-3 col-sm-4 col-xs-6 on-sale"
        @else


        @endif
         >

             <div class="blog-box">
                <a href={{asset("#")}}><span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>
                <div class="blog-img-holder">
                    <div class="post-date">
                        <span>{{ $date_array[1] }} {{ $date_array[2] }}</span>
                    </div>

                    @if(isset($blog->cover))
                        <a href={{asset("#")}}>
                            <img 
                            src="{{ asset("storage/$blog->cover") }}"
                            alt="{{ $blog->name_blog }}"
                            class="img-bordered img-responsive">
                        </a>

                    @else
                        <a href={{asset("#")}}>
                            <img 
                            src="https://placehold.it/263x330"
                            alt="{{ $blog->name_blog }}"
                            class="img-bordered img-responsive">
                        </a>
                    @endif  
                    
                </div>
                <div class="blog-content-holder">
                    <h3><a href="{{ route('front.get.blog', str_slug($blog->slug)) }}" >{{ $blog->name_blog }}</a></h3>
                    <ul class="solid-underline">
                        <li><span>by</span> {{ $blog->name_creator }}</li>
                        <li>Comments (03)</li>
                    </ul>
                    {{ $blog->description_short }}
                </div>
            </div>            
        </div>
    @endforeach
    @if($blogs instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">{{ $blogs->links() }}</div>
            </div>
        </div>
    @endif
@else
    <p class="alert alert-warning">No blogs yet.</p>
@endif