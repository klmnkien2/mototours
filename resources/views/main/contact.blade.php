@extends('layouts.main')

@section('title') Homepage @endsection

@section('custom_css')

    <style>
        #comment-message {
            margin-top: 10px;
        }

        #comment-message .alert {
            padding: 5px;
            margin-bottom: 10px;
        }
    </style>

@endsection

@section('content')

    <div class="col-xs-12 col-sm-8 col-md-8" id="main">
        <div class="block-title titlebar">
            <h3 class="title"><strong class="tit">Contact Form</strong></h3>
        </div>
        <div class="block-content">
            <div class="comment-area" id="comment-area">
                <div class="comment-write">

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
                    <div class="comment-form" style="display: block;">
                        <form class="write-comment-form" method="POST" action="{{ route('main.contact_submit') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" placeholder="Description" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-write-comment">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection