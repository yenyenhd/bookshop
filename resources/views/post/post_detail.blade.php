
@extends('layouts.master')

@section('content')
<div class="breadcrumb_container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">     
                <nav>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home ></a>
                </li>
                <li>Blog Details</li>
            </ul>
        </nav>
            </div>
        </div> 
    </div>        
</div>
 <!--breadcrumb area end-->

<!--blog details area start-->      
<div class="blog_details_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-8">
                <div class="blog_details_left">
                    <div class="blog_left_sidebar mb-50">
                        <h3>Search </h3> 
                        <div class="blog_sidebar_search">
                            <form action="#">
                                <input placeholder="Search..." type="text">
                                <button><i class="icofont icofont-search-alt-2"></i></button>
                            </form>    
                        </div>   
                    </div>
                    <div class="blog_left_sidebar mb-50">
                        <h3>Categories</h3> 
                        <div class="blog_sidebar_categories">
                            <ul>
                                <li><a href="#">Accessories <span>4</span></a></li>
                                <li><a href="#">Book <span>6</span></a></li>
                                <li><a href="#">Clothing <span>9</span></a></li>
                                <li><a href="#">Homelife <span>3</span></a></li>
                                <li><a href="#">Kids & body <span>8</span></a></li>
                            </ul>  
                        </div>   
                    </div> 
                    <div class="blog_left_sidebar mb-50">
                        <h3>Bài viết liên quan</h3>
                        @foreach ($related as $item)
                        <div class="recent_post mb-30">
                            <div class="recent_post_title">
                                <a href="#"><img src="{{ asset('public/'.$item->image_path) }}" alt=""></a>    
                            </div>
                            <div class="recent_post_content">
                                <h4><a href="#">{{ $item->title }}</a></h4>
                                <span class="post_date">{{ $item->updated_at }}</span>   
                            </div>   
                        </div>
                        @endforeach
                        
                    </div>
                </div>    
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="blog_details_info">
                    <div class="blog_meta">
                        <ul>
                            <li>Sách</li>
                            <li>{{ $post->created_at }}</li>
                        </ul>   
                    </div>
                    
                    <h3>{{ $post->title }} </h3> 
                    <div class="post_excerpt">
                        {!! $post->description !!}
                    </div>
                    <div class="blog_details_img">
                        <img src="{{ asset('public/'.$post->image_path) }}" alt="">    
                    </div>  
                    
                    <div class="post_excerpt">
                        {!! $post->content !!}
                    </div>
                    <div class="blog_leave_area">
                        <h3>Leave your thought</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog_leave_form mb-20">
                                        <input placeholder="Name *" type="text">    
                                    </div>
                                    <div class="blog_leave_form mb-20">
                                        <input placeholder="Email *" type="Email">    
                                    </div>
                                    <div class="blog_leave_form mb-20">
                                        <input placeholder="Website" type="text">    
                                    </div>     

                                </div>
                                <div class="col-lg-6">
                                    <div class="label_textarea">
                                        <textarea placeholder="Comment*"></textarea>    
                                    </div>   
                                </div>
                                <div class="col-12">
                                    <div class="blog_leave_btn">
                                        <button type="submit">Submit</button>
                                    </div>    
                                </div>     
                            </div>
                        </form>    
                    </div>
                    <div class="blog_replay_wrapper">
                        <h4>HAVE 2 COMMENTS</h4>
                        <div class="single_blog_replay mb-50">
                            <div class="replay_img">
                                <a href="#"><img src="assets/img/cart/14.jpg" alt=""></a>    
                            </div>
                            <div class="replay-info-wrapper">
                                <div class="replay-info">
                                    <div class="replay-name-date">
                                        <h4><a href="#">Tayeb rayed</a></h4>
                                        <span>July 15, 2016 at 2:39 am</span>    
                                    </div>
                                    <div class="replay-btn">
                                        <a href="#">Reply</a>
                                    </div>    
                                </div>
                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>    
                            </div>    
                        </div>
                        <div class="single_blog_replay two mb-50">
                            <div class="replay_img">
                                <a href="#"><img src="assets/img/cart/15.jpg" alt=""></a>    
                            </div>
                            <div class="replay-info-wrapper">
                                <div class="replay-info">
                                    <div class="replay-name-date">
                                        <h4><a href="#">JOHN NGUYEN</a></h4>
                                        <span>July 15, 2016 at 2:39 am</span>    
                                    </div>
                                    <div class="replay-btn">
                                        <a href="#">Reply</a>
                                    </div>    
                                </div>
                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>    
                            </div>    
                        </div>
                        <div class="single_blog_replay">
                            <div class="replay_img">
                                <a href="#"><img src="assets/img/cart/16.jpg" alt=""></a>    
                            </div>
                            <div class="replay-info-wrapper">
                                <div class="replay-info">
                                    <div class="replay-name-date">
                                        <h4><a href="#">JOHN NGUYEN</a></h4>
                                        <span>July 15, 2016 at 2:39 am</span>    
                                    </div>
                                    <div class="replay-btn">
                                        <a href="#">Reply</a>
                                    </div>    
                                </div>
                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.</p>    
                            </div>    
                        </div>        
                    </div> 
                </div>
                   
            </div>    
        </div>    
    </div>    
</div>
@endsection