@extends('layouts.main')

@section('title') Homepage @endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8" id="main">
                <div class="clearfix le-tabs">
                    <ul class="le-tabs_tab_container">
                        <li class="active"><a>Tour highlights</a></li>
                        <li><a>Itinerary</a></li>
                        <li><a>Prices and Booking info</a></li>
                    </ul>
                    <div class="le-tabs_content_container">
                        <div class="le-tabs_content_inner">
                            <div class="le-tabs_content">
                                <div class="clearfix tab-content">
                                    <div class="block welcome tour-highlights">
                                        <div class="block-title">
                                            <h1 class="title">Advanture Vietnam Laos Cambodia</h1>
                                            <div class="location"><em class="fa fa-map-marker"></em>Vietnam - Laos - Cambodia</div>
                                        </div>
                                        <div class="block-content">
                                            <p>Gorgeous scenery, breathtaking nature, many historic and cultural sites, and stunning motorcycle roads are the aces up this tour’s sleeve. It starts in Chiang Mai and takes us through Laos into Vietnam, then loops back to Thailand.</p>
                                            <p>As soon as we enter Vietnam you’ll notice that it still suffers from the ravages of the Vietnam War. Dien Bien Phu is where the most important battle of the First Indochina War took place. Around Sa Pa life goes on just as it did 100 years ago, it feels like traveling back in time. Breathtaking mountain roads take us to Nghia Lo and on to Hanoi, where we enjoy a rest day with an optional ride to Ha Long Bay.</p>
                                            <p>Our journey then takes us back to the west, over mountains, through valleys and alongside endless rice fields. Back in Laos we enjoy two more days of fantastic riding before returning to Thailand, where this special adventure comes to an end, leaving lasting memories.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix table-responsive">
                                    <table class="table">
                                        <colgroup>
                                            <col width="30%">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                        <tr>
                                            <th scope="row">Start/Finish</th>
                                            <td>Chiang Mai</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nearest Airport</th>
                                            <td>Chiang Mai</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Duration</th>
                                            <td>16 days vacation, 14 riding days</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Route</th>
                                            <td>Total distance: 3049-3369 km, 1895-2093 miles
                                                Daily distances: 136-349 km, 85-217 miles</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Accommodetions</th>
                                            <td>Middle-class hotels.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Rest Day</th>
                                            <td>Hanoi</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Highlights</th>
                                            <td><a href="#">Hanoi</a>, Minority Hill Tribes, <a href="#">Mai Chau Valley</a>, Northern Vietnam Mountains, <a href="#">Sa Pa</a>, <a href="#">Fansipan</a>, Battle Site of Dien Bien Phu, Nam Ou River, <a href="#">Luang Phabang</a>, Mekong River, Golden Triangle (Southeast Asia), Chiang Mai</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Minium Number of Participants</th>
                                            <td>8</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="le-tabs_content">
                                <div class="clearfix tab-content">
                                    <div class="block welcome tour-highlights">
                                        <div class="block-content">
                                            <p>The daily riding kilometres are approximate distances and may vary. The first and last days mentioned in the itinerary are the arrival and departure days; there is no riding on these days. Bear in mind the time difference between your country of origin and your travel destination. Arrival time should be arranged before 3 pm on the arrival day. Please book your flights accordingly. Route and overnight places may change due to unforeseen events.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix table-responsive">
                                    <table class="table">
                                        <colgroup>
                                            <col width="15%">
                                            <col>
                                        </colgroup>
                                        <tbody>
                                        <tr>
                                            <th scope="row">Day 1</th>
                                            <td>Arrival in Klagenfurt</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Day 2</th>
                                            <td>Klagenfurt - Opatija</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Day 3</th>
                                            <td>Opatija</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Day 4</th>
                                            <td>Opatija - Plitvicka Jezera/Otocac</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Day 5</th>
                                            <td>Plitvicka Jezera/Otocac</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Day 6</th>
                                            <td>Plitvicka Jezera/Otocac - Otocec</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Day 7</th>
                                            <td>Otocec - Klagenfurt</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Day 8</th>
                                            <td>Departure from Klagenfurt</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="le-tabs_content">
                                <div class="clearfix tab-content">
                                    <div class="block welcome tour-highlights">
                                        <div class="block-content">
                                            <p>Sed eleifend turpis vitae neque tempor eleifend. Morbi venenatis ligula et velit pretium tincidunt. Nulla facilisi. Aenean dignissim vestibulum arcu at egestas. Nulla facilisi. Praesent iaculis sollicitudin tristique. Donec aliquet elit eget lectus porta bibendum. Fusce sit amet neque nibh. Sed eleifend turpis vitae neque tempor eleifend. Morbi venenatis ligula et velit pretium tincidunt. Nulla facilisi. Aenean dignissim vestibulum arcu at egestas. Nulla facilisi. Praesent iaculis sollicitudin tristique. Donec aliquet elit eget lectus porta bibendum. Fusce sit amet neque nibh.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix block table-responsive">
                                    <table class="table table-hover price-info">
                                        <colgroup>
                                            <col width="35%">
                                            <col>
                                            <col>
                                            <col>
                                        </colgroup>
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th><img style="height:40px;" src="images/207.png" alt="sharing room, riding 2 up"></th>
                                            <th><img style="height:40px;" src="images/208.png" alt="sharing room, riding solo"></th>
                                            <th><img style="height:40px;" src="images/209.png" alt="single room, riding solo"></th>
                                        </tr>
                                        <tr>
                                            <th>Tour price per person</th>
                                            <th>sharing room, <br/>riding 2 up</th>
                                            <th>sharing room, <br/>riding solo</th>
                                            <th>single room, <br/>riding solo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 790 mm<br/>Weight: 216 kg<br/>Capacity: 745 ccm<br/>Performance: 40 kW / 55 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/3b166d6652340f56027559c03306b808_[200x0].jpg />" data-original-title="Honda NC 750 S ">Honda NC 750 S </a><br>
                                                <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 830 mm<br/>Weight: 219 kg<br/>Capacity: 745 ccm<br/>Performance: 40 kW / 55 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/eb5adbc2f4affe9e2d27eb8fd138305f_[200x0].jpg />" data-original-title="Honda NC 750 X">Honda NC 750 X</a><br>
                                                <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 820 mm<br/>Weight: 215 kg<br/>Capacity: 645 ccm<br/>Performance: 49 kW / 67 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/4e910d56d26cb044ff0de48ef8d490ae_[200x0].jpg />" data-original-title="Suzuki V-Strom 650">Suzuki V-Strom 650</a>
                                            </td>
                                            <td>$ 2.660</td>
                                            <td>$ 2.930</td>
                                            <td>$ 3.160</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 790 mm<br/>Weight: 216 kg<br/>Capacity: 745 ccm<br/>Performance: 40 kW / 55 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/3b166d6652340f56027559c03306b808_[200x0].jpg />" data-original-title="Honda NC 750 S ">Honda NC 750 S </a><br>
                                                <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 830 mm<br/>Weight: 219 kg<br/>Capacity: 745 ccm<br/>Performance: 40 kW / 55 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/eb5adbc2f4affe9e2d27eb8fd138305f_[200x0].jpg />" data-original-title="Honda NC 750 X">Honda NC 750 X</a><br>
                                                <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 820 mm<br/>Weight: 215 kg<br/>Capacity: 645 ccm<br/>Performance: 49 kW / 67 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/4e910d56d26cb044ff0de48ef8d490ae_[200x0].jpg />" data-original-title="Suzuki V-Strom 650">Suzuki V-Strom 650</a>
                                            </td>
                                            <td>$ 2.660</td>
                                            <td>$ 2.930</td>
                                            <td>$ 3.160</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 790 mm<br/>Weight: 216 kg<br/>Capacity: 745 ccm<br/>Performance: 40 kW / 55 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/3b166d6652340f56027559c03306b808_[200x0].jpg />" data-original-title="Honda NC 750 S ">Honda NC 750 S </a><br>
                                                <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 830 mm<br/>Weight: 219 kg<br/>Capacity: 745 ccm<br/>Performance: 40 kW / 55 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/eb5adbc2f4affe9e2d27eb8fd138305f_[200x0].jpg />" data-original-title="Honda NC 750 X">Honda NC 750 X</a><br>
                                                <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="Seat height: 820 mm<br/>Weight: 215 kg<br/>Capacity: 645 ccm<br/>Performance: 49 kW / 67 PS<br/><img src=http://www.edelweissbike.com/content/8d8818/96a3be/d72d18/4e910d56d26cb044ff0de48ef8d490ae_[200x0].jpg />" data-original-title="Suzuki V-Strom 650">Suzuki V-Strom 650</a>
                                            </td>
                                            <td>$ 2.660</td>
                                            <td>$ 2.930</td>
                                            <td>$ 3.160</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="clearfix tab-content">
                                    <p>Sed eleifend turpis vitae neque tempor eleifend. Morbi venenatis ligula et velit pretium tincidunt. Nulla facilisi. Aenean dignissim vestibulum arcu at egestas. Nulla facilisi. Praesent iaculis sollicitudin tristique. Donec aliquet elit eget lectus porta bibendum. Fusce sit amet neque nibh. Sed eleifend turpis vitae neque tempor eleifend. Morbi venenatis ligula et velit pretium tincidunt. Nulla facilisi. Aenean dignissim vestibulum arcu at egestas. Nulla facilisi. Praesent iaculis sollicitudin tristique. Donec aliquet elit eget lectus porta bibendum. Fusce sit amet neque nibh.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="clearfix stages">
                    <li><div class="clearfix inner">
                            <div class="stage">
                                <div class="stage-body">
                                    <h4 class="step">Stage 1</h4>
                                    <h5 class="date">02/01 ~ 09/01</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum pulvinar interdum.</p>
                                </div>
                                <div class="stage-foot">
                                    <a class="btn" href="#">Request</a>
                                </div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="stage">
                                <div class="stage-body">
                                    <h4 class="step">Stage 2</h4>
                                    <h5 class="date">12/01 ~ 19/01</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum pulvinar interdum.</p>
                                </div>
                                <div class="stage-foot">
                                    <a class="btn" href="#">Request</a>
                                </div>
                            </div>
                        </div></li>
                    <li><div class="clearfix inner">
                            <div class="stage">
                                <div class="stage-body">
                                    <h4 class="step">Stage 3</h4>
                                    <h5 class="date">22/01 ~ 29/01</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum pulvinar interdum.</p>
                                </div>
                                <div class="stage-foot">
                                    <a class="btn" href="#">Request</a>
                                </div>
                            </div>
                        </div></li>
                </ul>
                <div class="comment-area">
                    <div class="comment-write">
                        <div class="comment-toggle-button"><a class="btn"><em class="fa fa-plus"></em> Write your review about this tour</a></div>
                        <div class="comment-form">
                            <form class="write-comment-form">
                                <div class="form-group">
                                    <input type="file" class="file" id="user-photo" data-show-preview="false" data-placeholder="<span style='color:#999!important;'>Your Photo</span>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Years to make the trip">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="2"></textarea>
                                </div>
                                <button type="submit" class="btn btn-write-comment">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="comment-list">
                        <div class="block tourfinder">
                            <div class="block-title titlebar">
                                <h3 class="title"><strong class="tit">What did they say?</strong><a class="link" href="#">Tripadvisor Review</a></h3>
                            </div>
                            <div class="block-content">
                                <ul class="comments">
                                    <li class="comment">
                                        <div class="clearfix inner">
                                            <div class="user-photo"><img class="photo" src="images/user-photo.png" alt="John Doe"></div>
                                            <div class="user-info">
                                                <div class="info-head"><strong class="user-name">John Doe</strong> - <span class="user-trip">Made this trip in 2015</span></div>
                                                <div class="info-body"><p>adventure travel in Vietnam, Laos, Cambodia, Myanmar, India, Nepal, Bhutan, Sri Lankar... founded since 1996 from Hanoi, Vietnam. MotoTours Asia is an International Tour Operator licensed business</p></div>
                                            </div>
                                            <!--ul class="replies">
                                                <li class="comment">
                                                    <div class="clearfix inner">
                                                        <div class="user-photo"><img class="photo" src="images/user-photo.png" alt="John Doe"></div>
                                                        <div class="user-info">
                                                            <div class="info-head"><strong class="user-name">John Doe</strong> - <span class="user-trip">Made this trip in 2015</span></div>
                                                            <div class="info-body"><p>adventure travel in Vietnam, Laos, Cambodia, Myanmar, India, Nepal, Bhutan, Sri Lankar... founded since 1996 from Hanoi, Vietnam. MotoTours Asia is an International Tour Operator licensed business</p></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="clearfix inner">
                                                        <div class="user-photo"><img class="photo" src="images/user-photo.png" alt="John Doe"></div>
                                                        <div class="user-info">
                                                            <div class="info-head"><strong class="user-name">John Doe</strong> - <span class="user-trip">Made this trip in 2015</span></div>
                                                            <div class="info-body"><p>adventure travel in Vietnam, Laos, Cambodia, Myanmar, India, Nepal, Bhutan, Sri Lankar... founded since 1996 from Hanoi, Vietnam. MotoTours Asia is an International Tour Operator licensed business</p></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul-->
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <div class="clearfix inner">
                                            <div class="user-photo"><img class="photo" src="images/user-photo.png" alt="John Doe"></div>
                                            <div class="user-info">
                                                <div class="info-head"><strong class="user-name">John Doe</strong> - <span class="user-trip">Made this trip in 2015</span></div>
                                                <div class="info-body"><p>adventure travel in Vietnam, Laos, Cambodia, Myanmar, India, Nepal, Bhutan, Sri Lankar... founded since 1996 from Hanoi, Vietnam. MotoTours Asia is an International Tour Operator licensed business</p></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <div class="clearfix inner">
                                            <div class="user-photo"><img class="photo" src="images/user-photo.png" alt="John Doe"></div>
                                            <div class="user-info">
                                                <div class="info-head"><strong class="user-name">John Doe</strong> - <span class="user-trip">Made this trip in 2015</span></div>
                                                <div class="info-body"><p>adventure travel in Vietnam, Laos, Cambodia, Myanmar, India, Nepal, Bhutan, Sri Lankar... founded since 1996 from Hanoi, Vietnam. MotoTours Asia is an International Tour Operator licensed business</p></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4" id="sidebar">
                <div class="block tourfinder">
                    <div class="block-title titlebar">
                        <h3 class="title"><strong class="tit">Tour finder</strong><a class="link" href="/tour-calendar/">Tour Calendar</a></h3>
                    </div>
                    <div class="block-content">
                        <form class="clearfix tourfinder-form" id="tourfinderform">
                            <div class="row">
                                <div class="col-xs-12"><input type="text" class="form-control" placeholder="Search..."></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option>Destination</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option>Adventure level</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option>Motorcycle</option>
                                        <option>BMW</option>
                                        <option>Ducati</option>
                                        <option>Harley Davidson</option>
                                        <option>Triumph</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option>Date</option>
                                        <option>2017 / January</option>
                                        <option>2017 / February</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="block tourfinder-results" style="display:block;">
                    <div class="block-title titlebar">
                        <h4 class="title"><strong class="tit">Results for</strong><span class="text">“Vietnam” &amp; BMW &amp; 2017/January</span></h4>
                    </div>
                    <div class="block-content">
                        <ul class="tour-results">
                            <li class="tour"><a href="#">
                                    <figure class="figure"><img class="img" src="uploads/result-tour-1.png" alt=""></figure>
                                    <div class="tour-info">
                                        <h5 class="tour-name">Adventure Laos & Vietnam</h5>
                                        <span class="tour-text">Vietnam - Laos - Thailand: 16 days</span>
                                    </div>
                                </a></li>
                            <li class="tour"><a href="#">
                                    <figure class="figure"><img class="img" src="uploads/result-tour-1.png" alt=""></figure>
                                    <div class="tour-info">
                                        <h5 class="tour-name">Adventure Laos & Vietnam</h5>
                                        <span class="tour-text">Vietnam - Laos - Thailand: 16 days</span>
                                    </div>
                                </a></li>
                            <li class="tour"><a href="#">
                                    <figure class="figure"><img class="img" src="uploads/result-tour-1.png" alt=""></figure>
                                    <div class="tour-info">
                                        <h5 class="tour-name">Adventure Laos & Vietnam</h5>
                                        <span class="tour-text">Vietnam - Laos - Thailand: 16 days</span>
                                    </div>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix maps">
                    <div class="clearfix map"><img src="uploads/map-1.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>

@endsection