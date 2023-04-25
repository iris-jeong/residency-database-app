<div>
    <!-- Modal -->
    <div class="modal fade" {{ $attributes }} tabindex="-1" aria-labelledby="{{ $label }}" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="{{ $label }}">{{$type}} Automated Broadcast</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{$action}}">
                    @csrf
                    @if($method == 'PATCH')
                        @method('PATCH')
                    @endif
                        <!-- To input -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingToInput" placeholder="to" name="to" value="{{$broadcastSelected->to}}">
                            <label for="floatingToInput">To: </label>
                            @error("to")
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
        
                        <!-- Title input -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingTitleInput" placeholder="title" name="title">
                            <label for="floatingTitleInput">Title: </label>
                            @error("title")
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
        
                        <!-- Subject input -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingDescription" placeholder="description" name="description">
                            <label for="floatingDescription">Description: </label>
                            @error("description")
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <!-- Frequency input -->
                        <div class="input-group mb-3 freq">
                            <span class="input-group-text">Frequency: </span>
                            <span class="input-group-text"><div class="form-check form-switch">
                                <input class="form-check-input autoSwitch" type="checkbox" value="1" name="autoSwitch">
                                <label class="form-check-label" for="autoSwitch">Auto</label>
                            </div></span>
                            <input type="number" min="1" value="1" name="count" class="form-control disable disableNum">
                            <span class="input-group-text disableLabel">times per</span>
                            <select class="form-select disable" id="inputGroupSelect01" name="period">
                                <option selected></option>
                                @foreach($freqPeriods as $freqPeriod)
                                <option value="{{$freqPeriod->id}}">{{$freqPeriod->period}}</option>
                                @endforeach
                            </select>
                            <span class="input-group-text disableLabel">starting</span>
                            <select class="form-select disable" id="inputGroupSelect01" name="start_from">
                                <option selected></option>
                                @foreach($freqStarts as $freqStart)
                                <option value="{{$freqStart->id}}">{{$freqStart->start_from}}</option>
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
                            <textarea class="form-control" name="message" id="message-area" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
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
                                @checked($format->format == 'Text')>
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
                            <button type="button" class="btn btn-outline-secondary">Clear</button>
                            <button type="submit" class="btn btn-{{ $color }} {{ $submitbtn }}">{{ $submitbtn }}</button>
                        </div>
        
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>