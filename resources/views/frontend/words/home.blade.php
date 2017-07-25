@extends('layouts.frontend')

@section('title','Word Page')

@section('add-style')
    
    <link href="{{URL::asset('public/assets/css/datatables.min.css')}}" rel="stylesheet">

    <style>
        audio {
            width: 140px;
        }
    </style>
@endsection

@section('body_class', 'word-page')

@section('content')

<div class="row">
    <div class="col-md-9">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h1 class="text-center">1000 Most Common English Words</h1>
            </div>
            <div class="ibox-content">
                
                <form method="POST" action="/word/add" class="form-horizontal">
                    {{ csrf_field() }}

                    <table class="table table-striped table-bordered table-hover"  id="editable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>English</th>
                                <th>Vietnamese</th>
                                <th>Audio</th>
                                <th>Select</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($words as $word)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $word->english }}</td>
                                    <td>{{ $word->vietnamese }}</td>
                                    <td>
                                        <audio controls controlsList="nodownload">
                                            <source src="/public/{{ $word->audio }}" type="audio/mpeg">
                                        </audio>
                                    </td>
                                    <td>
                                        
                                        <div class="switch">
                                            <div class="onoffswitch">
                                                <input type="checkbox" class="onoffswitch-checkbox" id="example-{{$word->id}}"  name="word_id[]" value="{{$word->id}}">
                                                <label class="onoffswitch-label" for="example-{{$word->id}}">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @php $i++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <button class="btn btn-primary dim" type="submit">Add To Storgage</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="ibox-content">
            <h3>Phrases</h3>
            <ul class="folder-list sidebar-list" style="padding: 0">
                <li><a href="/phrases"><i class="fa fa-hand-o-right"></i> All Phrases</a></li>
                <li><a href="/phrases/storgage"><i class="fa fa-hand-o-right"></i> Phrases Storgage</a></li>
                <li>
                    <span><i class="fa fa-hand-o-right"></i> Learn Phrases</span>
                    <ul>
                        <li><a href="/phrases/learn/engtoviet"><i class="fa fa-hand-o-right"></i> Englist to Vietnamese</a></li>
                        <li><a href="/phrases/learn/viettoeng"><i class="fa fa-hand-o-right"></i> Vietnamese to English</a></li>
                    </ul>
                </li>
            </ul>
            <div class="hr-line-dashed"></div>
            <h3>Words</h3>
            <ul class="folder-list sidebar-list" style="padding: 0">
                <li class="active"><a href="/word"><i class="fa fa-hand-o-right"></i> All words</a></li>
                <li><a href="/word/storgage"><i class="fa fa-hand-o-right"></i> Words storgage</a></li>
                <li>
                    <span><i class="fa fa-hand-o-right"></i> Learn Word</span>
                    <ul>
                        <li><a href="/word/learn/engtoviet"><i class="fa fa-hand-o-right"></i> Englist to Vietnamese</a></li>
                        <li><a href="/word/learn/viettoeng"><i class="fa fa-hand-o-right"></i> Vietnamese to English</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection

@section('add-script')
    <!-- Datatables -->
    <script src="{{URL::asset('public/assets/js/datatables.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#editable').DataTable();
        });
    </script>
@endsection