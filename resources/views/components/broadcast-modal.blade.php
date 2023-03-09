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
                    <form>

                        <!-- To input -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingToInput" placeholder="to">
                            <label for="floatingToInput">To: </label>
                        </div>
        
                        <!-- Title input -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingTitleInput" placeholder="title">
                            <label for="floatingTitleInput">Title: </label>
                        </div>
        
                        <!-- Subject input -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingDescription" placeholder="description">
                            <label for="floatingDescription">Description: </label>
                        </div>

                        <!-- Frequency input -->
                        <div class="input-group mb-3 freq">
                            <span class="input-group-text">Frequency: </span>
                            <span class="input-group-text"><div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="autoSwitch">
                                <label class="form-check-label" for="autoSwitch">Auto</label>
                            </div></span>
                            <input type="number" min="1" value="1" class="form-control disable disableNum">
                            <span class="input-group-text disableLabel">times per</span>
                            <select class="form-select disable" id="inputGroupSelect01">
                                <option selected></option>
                                <option value="1">day</option>
                                <option value="2">week</option>
                                <option value="3">month</option>
                                <option value="4">year</option>
                            </select>
                            <span class="input-group-text disableLabel">starting</span>
                            <select class="form-select disable" id="inputGroupSelect01">
                                <option selected></option>
                                <option value="1">6 months before due</option>
                                <option value="2">5 months before due</option>
                                <option value="3">4 months before due</option>
                                <option value="4">3 months before due</option>
                                <option value="5">2 months before due</option>
                                <option value="6">1 months before due</option>
                                <option value="7">2 weeks before due</option>
                                <option value="8">1 week before due</option>
                                <option value="9">day of due date</option>
                                <option value="10">day after due date</option>
                            </select>
                        </div>
        
                        <!-- Message input (TEXT ONLY) -->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message-area" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Message</label>
                        </div>
        
                        <!-- File upload to include with message -->
                        <div class="mb-3">
                            <!-- <label for="formFileMultiple" class="form-label">Multiple files input example</label> -->
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
        
                        <!-- Send options -->
                        <div class="send-options mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="send" id="text" checked>
                                <label class="form-check-label" for="text">
                                    Text
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="send" id="email">
                                <label class="form-check-label" for="email">
                                    Email
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="send" id="text-email">
                                <label class="form-check-label" for="text-email">
                                    Text & Email
                                </label>
                            </div>
                        </div>
                        
                        <!-- Buttons to cancel or send -->
                        <div class="button-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-secondary">Clear</button>
                            <button type="button" class="btn btn-{{ $color }} {{ $submitbtn }}">{{ $submitbtn }}</button>
                        </div>
        
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>