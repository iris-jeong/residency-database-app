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
        
    <!-- <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>     -->
    <table class="table" id="auto-alerts-table">
            <thead >
                <tr class="table-secondary">
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Frequency</th>
                    <th scope="col"></th> <!-- col for extra options -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" >License Renewal</th>
                    <td>Notification about license renewal</td>
                    <td>Auto</td>
                    <td class="kebab">:</td>
					<td class="kebab-menu hidden">
						<div class="kebab-div">
							<div><button type="button" class="btn btn-link editAlertBtn" data-bs-toggle="modal" data-bs-target="#editBroadcastModal"><i class="fa-regular fa-pen-line"></i> Edit</button></div>
							<hr />
							<div><button type="button" class="btn btn-link deleteAlertBtn" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"><i class="fa-regular fa-trash-can"></i> Delete</button></div>
						</div>
					</td>
                </tr>
                <tr>
                    <th scope="row">Missing Document</th>
                    <td>Requesting a required document from resident</td>
                    <td>1x / month</td>
                    <td class="kebab">:</td>
					<td class="kebab-menu hidden">
						<div class="kebab-div">
                            <div><button type="button" class="btn btn-link editAlertBtn" data-bs-toggle="modal" data-bs-target="#editBroadcastModal"><i class="fa-regular fa-pen-line"></i> Edit</button></div>
							<hr />
							<div><button type="button" class="btn btn-link deleteAlertBtn" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"><i class="fa-regular fa-trash-can"></i> Delete</button></div>
						</div>
					</td>
                </tr>
                <tr>
                    <th scope="row">Update Demographics</th>
                    <td>Reminder to update demographics</td>
                    <td>1x / year</td>
                    <td class="kebab">:</td>
					<td class="kebab-menu hidden">
						<div class="kebab-div">
                            <div><button type="button" class="btn btn-link editAlertBtn" data-bs-toggle="modal" data-bs-target="#editBroadcastModal"><i class="fa-regular fa-pen-line"></i> Edit</button></div>
							<hr />
							<div><button type="button" class="btn btn-link deleteAlertBtn" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"><i class="fa-regular fa-trash-can"></i> Delete</button></div>
						</div>
					</td>               
                </tr>
                <tr>
                    <th scope="row">Update Demographics</th>
                    <td>Reminder to update demographics</td>
                    <td>1x / year</td>
                    <td class="kebab">:</td>
					<td class="kebab-menu hidden">
						<div class="kebab-div">
                            <div><button type="button" class="btn btn-link editAlertBtn" data-bs-toggle="modal" data-bs-target="#editBroadcastModal"><i class="fa-regular fa-pen-line"></i> Edit</button></div>
							<hr />
							<div><button type="button" class="btn btn-link deleteAlertBtn" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"><i class="fa-regular fa-trash-can"></i> Delete</button></div>
						</div>
					</td>               
                </tr>
                <tr>
                    <th scope="row">Update Demographics</th>
                    <td>Reminder to update demographics</td>
                    <td>1x / year</td>
                    <td class="kebab">:</td>
					<td class="kebab-menu hidden">
						<div class="kebab-div">
                            <div><button type="button" class="btn btn-link editAlertBtn" data-bs-toggle="modal" data-bs-target="#editBroadcastModal"><i class="fa-regular fa-pen-line"></i> Edit</button></div>
							<hr />
							<div><button type="button" class="btn btn-link deleteAlertBtn" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"><i class="fa-regular fa-trash-can"></i> Delete</button></div>
						</div>
					</td>              
                </tr>
            </tbody>
        </table>
        <div id="alertbtn-div"><button type="button" class="btn btn-outline-dark mb-3" id="newAlertBtn" data-bs-toggle="modal" data-bs-target="#newBroadcastModal">Create New Automated Broadcast</button></div>
    </div>

    <!-- Modals -->
    <x-broadcast-modal type="New" id="newBroadcastModal">
        <x-slot name="submitbtn">Create</x-slot>
        <x-slot name="label">newBroadcastModalLabel</x-slot>
        <x-slot name="color">danger</x-slot>
    </x-broadcast-modal>

    <x-broadcast-modal type="Edit" id="editBroadcastModal">
        <x-slot name="submitbtn">Save Changes</x-slot>
        <x-slot name="label">editBroadcastModalLabel</x-slot>
        <x-slot name="color">warning</x-slot>
    </x-broadcast-modal>

    <x-alert-modal type="Delete" id="confirmDeleteModal">
        <x-slot name="title">Confirm Delete</x-slot>
        <x-slot name="label">confirmDeleteModalLabel</x-slot>
        <x-slot name="body">Are you sure you want to delete this automated broadcast?</x-slot>
        <x-slot name="color">danger</x-slot>
    </x-alert-modal>
    
</div>
@endsection