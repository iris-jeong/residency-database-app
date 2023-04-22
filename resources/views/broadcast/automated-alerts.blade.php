<x-layouts.broadcast id="automated-alerts">
    <table class="table" id="auto-alerts-table">
        <thead >
            <tr id="automated-alerts-header">
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
        <x-slot name="color">usc btn-light</x-slot>
    </x-broadcast-modal>

    <x-broadcast-modal type="Edit" id="editBroadcastModal">
        <x-slot name="submitbtn">Save Changes</x-slot>
        <x-slot name="label">editBroadcastModalLabel</x-slot>
        <x-slot name="color">warning</x-slot>
    </x-broadcast-modal>

    <x-alert-modal type="" id="confirmDeleteModal">
        <x-slot name="title">Confirm Delete</x-slot>
        <x-slot name="label">confirmDeleteModalLabel</x-slot>
        <x-slot name="method"></x-slot>
        <x-slot name="action"></x-slot>
        <x-slot name="body">Are you sure you want to delete this automated broadcast?</x-slot>
        <x-slot name="footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </x-slot>
    </x-alert-modal>

</x-layouts.broadcast>