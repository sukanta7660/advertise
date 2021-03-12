@extends('layouts.general')
@section('content')
<section class="dhaka-section division">
    <div class="row">
        <div class="main-division">
            <div class="item-shop">
                <div class="left-title">
                    <div class="city-name">
                        <h3>{{$city->name}}</h3>
                    </div>
                </div>
                <div class="left-sides">
                    <div class="shop-box">
                        <div class="shop-name">
                            <h4>Shop Name</h4>
                        </div>
                        <div class="location">
                            <p>Location</p>
                        </div>
                        <div class="comment">
                            <p>Comment</p>
                        </div>
                        <div class="image">
                            <img src="../resource/image/shop6.jpg" alt="" />
                        </div>
                    </div>
                    <div class="shop-box">
                        <div class="shop-name">
                            <h4>shop name</h4>
                        </div>
                        <div class="location">
                            <p>location</p>
                        </div>
                        <div class="comment">
                            <p>comment</p>
                        </div>
                        <div class="image">
                            <img src="../resource/image/shop6.jpg" alt="" />
                        </div>
                    </div>
                    <div class="shop-box">
                        <div class="shop-name">
                            <h4>shop name</h4>
                        </div>
                        <div class="location">
                            <p>location</p>
                        </div>
                        <div class="comment">
                            <p>comment</p>
                        </div>
                        <div class="image">
                            <img src="../resource/image/shop6.jpg" alt="" />
                        </div>
                    </div>
                    <div class="shop-box">
                        <div class="shop-name">
                            <h4>shop name</h4>
                        </div>
                        <div class="location">
                            <p>location</p>
                        </div>
                        <div class="comment">
                            <p>comment</p>
                        </div>
                        <div class="image">
                            <img src="../resource/image/shop6.jpg" alt="" />
                        </div>
                    </div>
                    <div class="shop-box">
                        <div class="shop-name">
                            <h4>shop name</h4>
                        </div>
                        <div class="location">
                            <p>location</p>
                        </div>
                        <div class="comment">
                            <p>comment</p>
                        </div>
                        <div class="image">
                            <img src="../resource/image/shop6.jpg" alt="" />
                        </div>
                    </div>
                    <div class="shop-box">
                        <div class="shop-name">
                            <h4>shop name</h4>
                        </div>
                        <div class="location">
                            <p>location</p>
                        </div>
                        <div class="comment">
                            <p>comment</p>
                        </div>
                        <div class="image">
                            <img src="../resource/image/shop6.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-side">
                <div class="shop-type">
                    <p>Shop type</p>
                    <select>
                        <option value="All"> All</option >
                            @foreach ($shoptypes as $item)
                                <option value="{{$item->id}}" > {{$item->name}}</option >
                            @endforeach
                        
                    </select>
                </div>
                <div class="division-box box-margin">
                    <div class="division">
                        <h3>city</h3>
                    </div>
                    <div class="division-name">
                        <ul>
                            @foreach ($cities as $item)
                                <li> 
                                    <a href="{{action('User\HomeController@type_wise',['id' => $item->id, 'slug' => Str::slug($item->name)])}}" class="slider-city"> <i
                                        class="fas fa-map-marker-alt"></i>{{$item->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="pagination">
            <ul id="paginate">
                <li>
                    <a href="#" class="prev"> <span>&#8592;</span>Previous</a>
                </li>
                <li>
                    <div class="pageNumber active"><a href="#">1</a></div>
                </li>
                <li>
                    <div class="pageNumber"><a href="#">2</a></div>
                </li>
                <li>
                    <div class="pageNumber"><a href="#">3</a></div>
                </li>
                <li>
                    <div class="pageNumber"><a href="#">4</a></div>
                </li>
                <li>
                    <div class="pageNumber"><a href="#">5</a></div>
                </li>
                <li>
                    <a href="#" class="next">next <span>&#8594;</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection