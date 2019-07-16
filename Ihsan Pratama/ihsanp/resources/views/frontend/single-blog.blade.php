
    @extends('layouts.frontend')
    @section('tittle')
        {{$artikel->judul}}
    @endsection

    @section('content')
        
    
    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>{{$artikel->judul}}</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="blog.html">Blog</a>
                        <a href="single-blog.html">Blog Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
    
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="/frontend/img/blog/feature-img1.jpg" alt="">
                            </div>									
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="{{$artikel->judul}}">Kategori</a>
                                    <a class="active" href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div>
                                <ul class="blog_meta list">
                                    @php
                                        $user = App\user::find($artikel->user_id);
                                    @endphp
                                    <li><a href="">{{$user->name}}<i class="lnr lnr-user"></i></a></li>

                                    <li><a href="#">{{date_format($artikel->created_at,"d M Y") }}
                                    <i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>{{$artikel->judul}}</h2>
                            <p>
                                    {{$artikel->isi}}
                            </p>
                        </div>
                    </div>
                    <div class="comments-area" id="komentar-list">
                        	
                    </div>

                <div class="comment-form"id="form-komentar">
                            <h4>Leave a Reply</h4>
                                <div class="form-group">
                                    <input id="artikel-id" value="{{ $artikel->id}}" type="hidden" name="artikel_id">
                                    <input id="induk-id" type="hidden" name="induk">
                                    <input type="hidden" id="csrf" value="{{ csrf_token() }}">
                                </div>
                                <div class="form-group">
                                    <textarea id="komentar" class="form-control mb-10" rows="5" name="komentar" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                </div>
    
                                @if(Auth::user())
                                    <button id="btn-simpan" class="primary-btn primary_btn">
                                        <span>Post Comment</span>
                                    </button>	
                                @else 
                                    <a href="/login" class="primary-btn primary_btn"><span>Login For Comment</span></a>	
                                @endif
    
                            @section('js-after')
                                <script>
                                    function getKomentar(id){
                                        $.get("/komentars/"+id)
                                        .done(function(res){
                                            console.log(res)
                                            let komen = "";
                                                for (let index = 0; index < res.length; index++) {
                                                    
                                                    if(res[index].induk == 0 || res[index].induk == null){

                                                    
                                                        komen += `<div class="comment-list" id="komen-${res[index].id}">
                                                            <div class="single-comment justify-content-between d-flex">
                                                                <div class="user justify-content-between d-flex">
                                                                    <div class="thumb">
                                                                        <img src="/frontend/img/blog/c1.jpg" alt="">
                                                                    </div>
                                                                    <div class="desc">
                                                                        <h5><a href="#">${res[index].name}</a></h5>
                                                                        <p class="date">${res[index].created_at}</p>
                                                                        <p class="comment">
                                                                            ${res[index].komentar}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="reply-btn">
                                                                        <a onclick="reply(${res[index].id})" href="#form-komentar" class="btn-reply text-uppercase">reply</a> 
                                                                </div>
                                                            </div>
                                                        </div>`;
                                                    }
                                        }






                                                                //push komen
                                            $("#komentar-list").append(komen);
                                        })
                                    }
                                    
                                    getKomentar($("#artikel-id").val())
                                    $("#btn-simpan").click(function(){
                                        let artikelId = $("#artikel-id").val();
                                        let indukId = $("#induk-id").val() || 0;
                                        let komentar = $("#komentar").val();
                                        let token = $("#csrf").val();
                                        
                                        let data = {
                                            artikel_id: artikelId,
                                            induk: indukId,
                                            _token: token,
                                            komentar: komentar
                                        }
                                        console.log(data);

                                        $.post("/tambah-komentar", data)
                                        .done ( (res) => {
                                           let isReply = "";
                                            if (res[0].induk > 0){
                                                isReply ="left-padding";
                                            }
                                         console.log(res)

                                            // alert("data berhasil disimpan");
                                            $("#komentar").val("");
                                            $("#induk-id").val("");
                                            let komen = `<div class="comment-list  ${isReply}" id="komen-${res[0].id}">
                                                <div class="single-comment justify-content-between d-flex">
                                                    <div class="user justify-content-between d-flex">
                                                        <div class="thumb">
                                                            <img src="/frontend/img/blog/c1.jpg" alt="">
                                                        </div>
                                                        <div class="desc">
                                                            <h5><a href="#">${res[1].name}</a></h5>
                                                            <p class="date">${res[0].created_at}</p>
                                                            <p class="comment">
                                                                ${res[0].komentar}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="reply-btn">
                                                            <a onclick="reply(${res[0].id})" href="#form-komentar" class="btn-reply text-uppercase">reply</a> 
                                                    </div>
                                                </div>
                                            </div>`;
                                                                //push komen
                                            $("#komentar-list").append(komen);
                                        }).fail( (e) => {
                                            alert("data gagal disimpan");
                                        })
                                        })
                                                function reply(id){
                                                    $("#induk-id").val(id);
                                                    alert(id);
                                                }
                                       
                                </script>
                            @endsection
                        </div>
                    </div>
                {{-- </div> --}}
        
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="/frontend/img/blog/author.png" alt="">
                            <h4>Charlie Barber</h4>
                            <p>Senior blog writer</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div class="media post_item">
                                <img src="/frontend/img/blog/popular-post/post1.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h3>Space The Final Frontier</h3></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="/frontend/img/blog/popular-post/post2.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h3>The Amazing Hubble</h3></a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="/frontend/img/blog/popular-post/post3.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h3>Astronomy Or Astrology</h3></a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="/frontend/img/blog/popular-post/post4.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.html"><h3>Asteroids telescope</h3></a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="/frontend/img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Technology</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Lifestyle</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Fashion</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Art</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Food</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Architecture</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>Adventure</p>
                                        <p>44</p>
                                    </a>
                                </li>															
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                            Here, I focus on a range of items and features that we use in life without
                            giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>	
                            <p class="text-bottom">You can unsubscribe at any time</p>	
                            <div class="br"></div>							
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Adventure</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection