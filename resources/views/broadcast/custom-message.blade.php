<x-layouts.broadcast id="custom-message">
    <form>
        <!-- To input -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingToInput" placeholder="name@usc.edu">
            <label for="floatingToInput">To: </label>
        </div>

        <!-- Subject input -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingSubject" placeholder="Password">
            <label for="floatingSubject">Subject: </label>
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
        <div class="form-group send-options mb-4">
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
            <button type="button" class="btn btn-outline-secondary clear">Clear</button>
            <button type="button" class="btn btn-usc">Send</button>
        </div>

    </form>

    @push('scripts')
    <script>
        $(".clear").on('click',function(){
            $(this).parents('form').find('input').val('');
            $(this).parents('form').find('textarea').html('');
            $(this).parents('form').find('textarea').val('');
        });
    </script>
    @endpush

</x-layouts.broadcast>