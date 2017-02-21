@extends('front.index')
@section('indexcontent')
   <section id="portfolio">
        <div class="container">
           <div class="row" style="width: 100%">
    <div class="col-md-12 ">

            <div class="col-md-10">
                <div class="container">
                <div class="center">  
                    <div class="col-md-5">
                        <div class="input-group searchbar">
                            <input type="text" id="searchdata" class="form-control has-error" placeholder="Search for..." autocomplete="off" data-url="{!!URL::to('/')!!}" required="required">


                            <span class="input-group-btn">
                                <button class="btn btn-default" id="btnsearch" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-md-3 filter">
                       <select class="form-control" name="filter" id="filter">
                           <option value="" selected="selected" disabled="disabled">Please Select Filter</option>
                           <option value="title">Title</option>
                           <option value="author">Author</option>
                            <option value="requestor">Requestor</option>
                       </select>
                    </div>
                      <div class="col-md-1">
                       <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Email Us!</button>
                    </div>
                </div>  
                <div class="col-md-5">
                    <span style="color: red;display: none" id="requiredsearch">
                        * This field is required.
                    </span>
                </div>
                 <div class="col-md-5">
                    <span style="color: red;display: none" id="requiredfilter">
                        * This field is required.
                    </span>
                </div>
            </div>
            </div>
            <br>

             <div class="col-md-12" id="steps" style="display: none">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel listcheckactive" style="display: flex">
            @foreach($steps as $step)
                <li class="disabled" style="display: flex;flex: 1"  id="{{$step['booksteps_position']}}"><a style="flex: 1"  href="#step-{{$step['booksteps_position']}}">  
                    <h4 class="list-group-item-heading">Step {{$step['booksteps_position']}}</h4>
                    <p class="list-group-item-text"><span  style="font-weight: bold;font-size: 11px">{{$step['booksteps_header']}}</span></p>
                    <p class="list-group-item-text"><span style="font-weight: normal;font-size: 11px"><?=$step['boksteps_details_1']?></span><br><span style="font-weight: normal;font-size: 11px"><?=$step['boksteps_details_2']?></span></p>
                </a></li>
             @endforeach
            </ul>
        </div>
    </div>
</div>
<main role="main-home-wrapper" class="container" >
    <div class="row" >  
        <div class="col-md-10 col-md-offset-1">
            <div align="center" id="resultfound" style="height: 180px"></div>
            <div align="center" style="display: none;z-index: 1000" id="loading"><img src="front/images/loading.gif"></div>    
            <div class="tab-wrap">

                
                <div class="media" id="resultsearch" style="background-color: #428bca;color: white">
                    <div class="parrent pull-left" style="background-color: #428bca;color: white">
                        <ul class="nav nav-tabs nav-stacked searchresult" >

                        </ul>
                    </div>
                    <div class="parrent media-body">
                        <div class="tab-content" style="background-color: #428bca;color: white">

                        </div> <!--/.tab-content-->  
                    </div> <!--/.media-body-->  
                </div>
            </div>
        </div>
    </div>
</div>
</main>
        </div>
    </section><!--/#portfolio-item-->



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@stop