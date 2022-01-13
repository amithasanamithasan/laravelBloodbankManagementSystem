@extends('layouts.home')

@section('main')



    <div class="col-lg-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" style="padding:25px;">
                <h2 data-bs-hover-animate="pulse">Recent Send your Massage to  <strong> Authority</strong>:</h2>
                </div>
                <div class="col-lg-4" style="padding:30px;">

                    {{Form::open(['route'=>'blog.index', 'method'=>'GET', 'class'=>'class_name' ])}}
                    {{Form::text('search')}}
                    {{Form::submit('Search')}}
                    {{Form::close()}}


                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="intro">
              
                                 
                                                <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                                <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                                <div class="wrap">
                                                    <input id="name" type="text" name="name" placeholder="Your Name">
                                                </div>
                                                <br>
                                                <div class="wrap">
                                                    <input  id="email" type="text" name="email" placeholder="Your Email">
                                                </div>
                                                <br>
                                                <div >
                                                    <textarea rows="5" cols="70" id="message" name="message"placeholder="Your Message"></textarea>
                                                </div>
                                                <div class="arlo_tm_button">
                                                    <!-- <a id="send_message" href="#"><span>Send Message</span></a>  -->
                                                  <button type="button" class="btn btn-success">SendMessage</a></button> 
                                                </div>
                                            </form>
            
				
            </div>
            <div class="row projects" style="padding-bottom: 20px" >
			
                @foreach($blog as $blogging)

                <div class="col-sm-6 col-lg-4 btn-outline-light rounded"   >
                    <a href="{{ route('blog.show', [$blogging->id])  }}">
                    <img class="img-fluid rounded" src="{!!  $blogging->blog_picture !!}">
                    <h4 class="name" style="padding-bottom: 30px">
                         {{ $blogging->head_line }}
                    </h4>
                    <!---MainPost   {!!  $blogging->post !!}    MainPost-->
                    </a>
                </div>
                @endforeach
            </div>
        </div>

@endsection