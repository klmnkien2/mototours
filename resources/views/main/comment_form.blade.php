<div class="comment-area" id="comment-area">
    <div class="comment-write">
        <div class="comment-toggle-button"><a class="btn"><em class="fa fa-plus"></em> Write your review about this tour</a></div>
        @if(Session::has('error'))
            <div id="comment-message" class="comment-error ">
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            </div>
        @endif
        @if(Session::has('success'))
            <div id="comment-message" class="comment-success">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        @endif
        @if ($errors->any())
            <div id="comment-message" class="comment-error">
                <div class="alert alert-danger">
                    {!! implode('', $errors->all('<div class="error">:message</div>')) !!}
                </div>
            </div>
        @endif
        <div class="comment-form">
            <form class="write-comment-form" method="POST" action="{{ route('main.post_comment') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="tours_id" value="{{ $tours->id }}">
                <div class="form-group">
                    <input type="file" class="file" id="user-photo" name="photo" data-show-preview="false" data-placeholder="<span style='color:#999!important;'>Your Photo</span>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="year" placeholder="Years to make the trip">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="description" rows="2"></textarea>
                </div>
                <button type="submit" class="btn btn-write-comment">Submit</button>
            </form>
        </div>
    </div>
    <div class="comment-list">
        <div class="block tourfinder">
            <div class="block-title titlebar">
                <h3 class="title"><strong class="tit">What did they say?</strong><!--<a class="link" href="#">Tripadvisor Review</a>--></h3>
            </div>
            <div class="block-content">
                @if(empty($allComments))
                <div class="no-comment">{{ trans('Be the first one comment on this.') }}</div>
                @else
                <ul class="comments">
                    @foreach($allComments as $aComment)
                    <li class="comment">
                        <div class="clearfix inner">
                            <div class="user-photo"><img class="photo" src="{{ asset('uploads/' . $aComment['photo']) }}" alt="{{ $aComment['name'] }}"></div>
                            <div class="user-info">
                                <div class="info-head"><strong class="user-name">{{ $aComment['name'] }}</strong> - <span class="user-trip">Made this trip in {{ $aComment['year'] }}</span></div>
                                <div class="info-body"><p>{!! $aComment['description'] !!}</p></div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>