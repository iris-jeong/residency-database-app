@extends('layouts.main')
@section('title', 'Broadcast')

@section('content')
<h1>Broadcast</h1>
<div class="broadcast-container">
    <div id="tabs">
        <ul class="tab-menu d-flex justify-content-evenly mt-3">
            <li class="current"><a href="#custom-message" title="Custom Message">Custom Message</a></li>
            <li><a href="#automated-alerts" title="Automated Alerts">Automated Alerts</a></li>
        </ul>
    </div>
    <hr class="mb-3">

    <div class="tabcontent" id="custom-message">
        <form>
            <!-- <div class="input-group mb-3">
                <span class="input-group-text" id="to-input">To:</span>
                <input type="text" class="form-control" aria-label="to-input">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="to-input">Subject:</span>
                <input type="text" class="form-control" aria-label="to-input">
            </div> -->

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
                <button type="button" class="btn btn-outline-danger">Clear</button>
                <button type="button" class="btn btn-danger">Send</button>
            </div>

        </form>
    </div>

    <div class="tabcontent" id="automated-alerts">
        <button type="button" class="btn btn-outline-dark mb-3" id="newAlertBtn" data-bs-toggle="modal" data-bs-target="#newBroadcastModal">Create New Automated Broadcast</button>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Frequency</th>
                    <th scope="col"></th> <!-- col for extra options -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">License Renewal</th>
                    <td>Notification about license renewal</td>
                    <td>Auto</td>
                    <td> : </td> <!-- col for extra options -->
                </tr>
                <tr>
                    <th scope="row">Missing Document</th>
                    <td>Requesting a required document from resident</td>
                    <td>1x / month</td>
                    <td> : </td> <!-- col for extra options -->
                </tr>
                <tr>
                    <th scope="row">Update Demographics</th>
                    <td>Reminder to update demographics</td>
                    <td>1x / year</td>
                    <td> : </td> <!-- col for extra options -->
                </tr>
            </tbody>
        </table>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="newBroadcastModal" tabindex="-1" aria-labelledby="newBroadcastModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newBroadcastModalLabel">New Automated Broadcast</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form></form>
        
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
                            <button type="button" class="btn btn-outline-danger">Clear</button>
                            <button type="button" class="btn btn-danger">Create</button>
                        </div>
        
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection