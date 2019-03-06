@php
    function cvf_convert_object_to_array($data) {

        if (is_object($data)) {
            $data = get_object_vars($data);
        }

        if (is_array($data)) {
            return array_map(__FUNCTION__, $data);
        }
        else {
            return $data;
        }
    }

    $months [0] = "Vacio";
    $months [1] = "Ene";
    $months [2] = "Feb";
    $months [3] = "Mar";
    $months [4] = "Abr";
    $months [5] = "May";
    $months [6] = "Jun";
    $months [7] = "Jul";
    $months [8] = "Ago";
    $months [9] = "Sep";
    $months [10] = "Oct";
    $months [11] = "Nov";
    $months [12] = "Dic";

    $countBlogsMostrado = 0;
    $temp_countBlogsMostrado = 0;
    $i = 0;
    
@endphp

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
        @include('front.blogs.blog-list', ['blogs' => $recentBlogs, 'form_list' => "column"])
                            
        <!--
        <div class="media">
            <a href="#" class="pull-left">
                <img alt="Media Object" src="img/sidebar/blog1.jpg" class="img-responsive">
            </a>
            <div class="media-body">
                <h3 class="media-heading"><a href="#">Blog Title Here</a></h3>
                <p>7th June, 2014</p>
            </div> 
        </div>
        -->

    </div>
    <h2 class="title-sidebar">Archives</h2>
    <div class="archives sidebar-section-margin">
        <div class="category-menu-area">
            @foreach ($countBlogsAnioMes as $grupoMesAnio)
                <ul class="category-menu-area-inner">
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-chevron-right"  aria-hidden="true"></i>{{ $months[$grupoMesAnio->mes] }} {{ $grupoMesAnio->anio }}({{ $grupoMesAnio->total }})
                        </a>                       

                        <ul class="dropdown-menu">
                            @for ($i = $countBlogsMostrado; $i < count($blogsAnioMes) ; $i++)
                                @if ($blogsAnioMes[$i]->anio == $grupoMesAnio->anio && $blogsAnioMes[$i]->mes == $grupoMesAnio->mes)
                                    <li>
                                        <a href="{{  route('front.get.blog', str_slug($blogsAnioMes[$i]->slug)) }}">
                                            {{ $blogsAnioMes[$i]->name_blog}}
                                        </a>
                                    </li>
                                    @php
                                        $temp_countBlogsMostrado++;
                                    @endphp
                                @else
                                                                                                           
                                @endif
                            @endfor
                            @php
                                $countBlogsMostrado = $temp_countBlogsMostrado;
                                //array_splice($blogsAnioMes, 0, $countBlogsMostrado);
                            @endphp
                        </ul>
                        
                    </li>
                </ul>                
            @endforeach  
        </div>
    </div>

       
    <!-- 
    <div class="archives sidebar-section-margin">
        <div class="category-menu-area"> 
            foreach ($countBlogsAnioMes as $grupoMesAnio)
                <ul>
                    <li data-toggle="collapse" data-target="#{ $grupoMesAnio->mes }}{ $grupoMesAnio->anio }}" class="collapsed has-sub-menu">
                        <a>
                            <i class="fa fa-chevron-right"  aria-hidden="true"></i>{ $months[$grupoMesAnio->mes] }} { $grupoMesAnio->anio }}({ $grupoMesAnio->total }})
                        </a>                       

                        <ul class="sub-menu collapse" id="{ $grupoMesAnio->mes }}{ $grupoMesAnio->anio }}">
                            for ($i = $countBlogsMostrado; $i < count($blogsAnioMes) ; $i++)
                                if ($blogsAnioMes[$i]->anio == $grupoMesAnio->anio && $blogsAnioMes[$i]->mes == $grupoMesAnio->mes)
                                    <li>
                                        <a href="{  route('front.get.blog', str_slug($blogsAnioMes[$i]->slug)) }}"><i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            { $blogsAnioMes[$i]->name_blog}}
                                        </a>
                                    </li>
                                    php
                                        $temp_countBlogsMostrado++;
                                    endphp
                                else
                                                                                                           
                                endif
                            endfor
                            php
                                $countBlogsMostrado = $temp_countBlogsMostrado;
                                //array_splice($blogsAnioMes, 0, $countBlogsMostrado);
                            endphp
                        </ul>
                        
                    </li>
                </ul>                
            endforeach  
        </div>
    </div>
    -->
    
    <h2 class="title-sidebar">Productos Destacados</h2>
    <div class="product-tags sidebar-section-margin">
        <ul>
            <li><a href="{{ route('front.category.novelty.slug', "Nuevo") }}">Nuevo</a></li>
            <li><a href="{{ route('front.category.novelty.slug', "Remate") }}">Remate</a></li>
            <li><a href="{{ route('front.category.novelty.slug', "Locura") }}">Locura</a></li>
            <li><a href="{{ route('front.category.novelty.slug', "Pronto") }}">Pronto</a></li>
            <li><a href="{{ route('front.category.novelty.slug', "Agotado") }}">Agotado</a></li>
        </ul>
    </div>
</div>