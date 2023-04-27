@extends('layouts.main')
@section('title', 'Broadcast')
@push('stylesheets')
<link rel="stylesheet" href="{{ asset('css/broadcast.css') }}">
@endpush
@section('content')

<h1 class="mb-3"><a href="{{route('broadcast.automated-alerts')}}"><i class="fa-solid fa-arrow-left"></i></a> Edit "{{$broadcast->title}}" Broadcast</h1>

<div>
    <form method="POST" action="{{ route('broadcast.editBroadcast', ['id' => $broadcast->id]) }}">
    @csrf
    @method('PATCH')
        <!-- To input -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingToInput" placeholder="to" name="to" value="{{$broadcast->to}}">
            <label for="floatingToInput">To: </label>
            @error("to")
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <!-- Title input -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingTitleInput" placeholder="title" name="title" value="{{$broadcast->title}}">
            <label for="floatingTitleInput">Title: </label>
            @error("title")
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <!-- Subject input -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingDescription" placeholder="description" name="description" value="{{$broadcast->description}}">
            <label for="floatingDescription">Description: </label>
            @error("description")
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <!-- Frequency input -->
        <div class="input-group mb-3 freq">
            <span class="input-group-text">Frequency: </span>
            <span class="input-group-text"><div class="form-check form-switch">
                <input class="form-check-input autoSwitch" type="checkbox" value="1" name="autoSwitch" @checked($broadcast->freq_auto == '1')>
                <label class="form-check-label" for="autoSwitch">Auto</label>
            </div></span>
            <input type="number" min="1" value="{{$broadcast->freq_count}}" name="count" class="form-control disable disableNum">
            <span class="input-group-text disableLabel">times per</span>
            <select class="form-select disable" id="inputGroupSelect01" name="period">
                <option value=""></option>
                @foreach($freqPeriods as $freqPeriod)
                <option value="{{$freqPeriod->id}}"
                @if ($broadcast->freq_auto != '1' && $broadcast->freqPeriod->id == $freqPeriod->id)
                    selected="selected"
                @endif
                >{{$freqPeriod->period}}</option>
                @endforeach
            </select>
            <span class="input-group-text disableLabel">starting</span>
            <select class="form-select disable" id="inputGroupSelect01" name="start_from">
                <option value=""></option>
                @foreach($freqStarts as $freqStart)
                <option value="{{$freqStart->id}}"
                @if ($broadcast->freq_auto != '1' && $broadcast->freqStartFrom->id == $freqStart->id)
                    selected="selected"
                @endif
                >{{$freqStart->start_from}}</option>
                @endforeach
            </select>
        </div>
        @error("period")
            <small class="text-danger">{{$message}}</small>
        @enderror
        @error("start_from")
            <small class="text-danger">{{$message}}</small>
        @enderror

        <!-- Message input (TEXT ONLY) -->
        <div class="form-floating mb-3">
            <textarea class="form-control" name="message" id="message-area" placeholder="Leave a comment here" id="floatingTextarea">{{$broadcast->message}}</textarea>
            <label for="floatingTextarea">Message</label>
            @error("message")
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <!-- File upload to include with message -->
        <div class="mb-3">
            <!-- <label for="formFileMultiple" class="form-label">Multiple files input example</label> -->
            <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>

        <!-- Send options -->
        <div class="send-options mb-3">
            @foreach($formats as $format)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="send" id="text" value="{{$format->id}}"
                @checked($broadcast->broadcastFormat->id == $format->id)>
                <label class="form-check-label" for="text">
                    {{$format->format}}
                </label>
            </div>
            @endforeach
            @error("send")
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        
        <!-- Buttons to cancel or send -->
        <div class="button-footer d-flex justify-content-between">
            <button type="button" class="btn btn-outline-secondary clear">Clear</button>
            <button type="submit" class="btn btn-warning">Save Changes</button>
        </div>

    </form>


</div>

@push('scripts')
<script>
    $(".clear").on('click',function(){
        $(this).parents('form').find('input').val('');
        $(this).parents('form').find('textarea').html('');
        $(this).parents('form').find('select').val('');
        $(this).parents('form').find('textarea').val('');
    });
    $(document).ready(function(){
        
        if($('.autoSwitch').is(':checked')){
            $('.disable').prop("disabled", true);
            $('.disableLabel').css("background-color", "#EAECEF");
            $('.disableLabel').css("color", "#C5C6C8");
            $('.disableNum').prop("value", "");

            // var activeTab = $(this).attr("href");
            // $('.autoSwitch').not(activeTab).css("display","none");
        }
        
        $('.autoSwitch').click(function() {
            if($(this).is(':checked')){
                $('.disable').prop("disabled", true);
                $('.disableLabel').css("background-color", "#EAECEF");
                $('.disableLabel').css("color", "#C5C6C8");
                $('.disableNum').prop("value", "");

                // var activeTab = $(this).attr("href");
                // $('.autoSwitch').not(activeTab).css("display","none");
            }
            else{
                $('.disable').prop("disabled", false);
                $('.disableLabel').css("background-color", "#F8F9FA");
                $('.disableLabel').css("color", "black");
                $('.disableNum').prop("value", "1");
            }
        })

    });
</script>
@endpush
@endsection