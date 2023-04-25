<x-layouts.broadcast id="automated-alerts">
    @if( session('success') )
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if( session('error') )
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif 
    <input type="hidden" id="errors-exist" value="{{$errors->any() ? '1' : '0'}}"></p>
    <input type="hidden" id="currently-editing" name="currently_editing" value="{{old('currently_editing')}}"></p>
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
            @foreach($broadcasts as $broadcast)
            <tr>
                <th scope="row">{{$broadcast->title}}</th>
                <td>{{$broadcast->description}}</td>
                <td>
                    @if($broadcast->freq_auto)
                        Auto
                    @else
                        {{$broadcast->freq_count}}x / {{$broadcast->freqPeriod->period}}
                    @endif
                </td>
                <td class="kebab">:</td>
                <td class="kebab-menu hidden">
                    <div class="kebab-div">
                        <div>
                            <form method="POST" action="{{ route('broadcast.editBroadcast') }}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="id" value="{{$broadcast->id}}">
                                <button type="submit" class="btn btn-link editAlertBtn" onclick="currently_editing()"><i class="fa-regular fa-pen-line"></i> Edit</button>
                            </form>
                            <!-- <button type="button" class="btn btn-link editAlertBtn" data-bs-toggle="modal" data-bs-target="#editBroadcastModal"><i class="fa-regular fa-pen-line"></i> Edit</button> -->
                        </div>
                        <hr />
                        <div><button type="button" class="btn btn-link deleteAlertBtn" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"><i class="fa-regular fa-trash-can"></i> Delete</button></div>
                    </div>
                </td>
                

            </tr>
            @endforeach
        </tbody>
    </table>
    <div id="alertbtn-div"><button type="button" class="btn btn-outline-dark mb-3" id="newAlertBtn" data-bs-toggle="modal" data-bs-target="#newBroadcastModal">Create New Automated Broadcast</button></div>
    </div>

    <!-- Modals -->

     @php($action = 'broadcast.createBroadcast')
    <x-broadcast-modal type="New" id="newBroadcastModal" data="">
        <x-slot name="method">'POST'</x-slot>
        <x-slot name="action">{{ route('broadcast.createBroadcast') }}</x-slot>
        <x-slot name="submitbtn">Create</x-slot>
        <x-slot name="label">newBroadcastModalLabel</x-slot>
        <x-slot name="color">usc btn-light</x-slot>
        <x-slot name="modalFunction">createBroadcast</x-slot>
    </x-broadcast-modal>

    <x-alert-modal type="" id="confirmDeleteModal" >
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

    <x-broadcast-modal type="Edit" id="editBroadcastModal" data="">
        <x-slot name="method">PATCH</x-slot>
        <x-slot name="action">{{ route('broadcast.editBroadcast') }}</x-slot>
        <x-slot name="submitbtn">Save Changes</x-slot>
        <x-slot name="label">editBroadcastModalLabel</x-slot>
        <x-slot name="color">warning</x-slot>
        <x-slot name="modalFunction">editBroadcast</x-slot>
    </x-broadcast-modal>

    
    @push('scripts')
    <script src="{{ asset('js/broadcast.js') }}"></script>
    <script>
        
    </script>
    @endpush

</x-layouts.broadcast>