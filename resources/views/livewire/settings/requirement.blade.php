<li class="d-flex justify-content-between align-items-center">
    @if($doc->editMode)
        <form class="d-flex" method="POST" action="{{ route('settings.updateRequirement', ['id' => $doc->id]) }}">
            @csrf
            @method('PATCH')
                <div class="">
                    <input wire:model="doc.requirement" 
                        name="editedRequirement" 
                        class="form-control" 
                        type="text" 
                        placeholder="{{$doc->name}}"
                        value={{old('requirement')}}
                    >
                    @error('editedRequirement')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
            <button class="btn add-btn ms-3" type="submit">Save</button>
            <button wire:click="disableEditMode" class="btn btn-outline-secondary ms-3" type="button">Cancel</button>
        </form>
    @else
        <div class="d-flex align-items-center">
        <div class="doc-info">
            <p class="doc-name">{{$doc->name}}</p>
        </div>
    </div>
    @endif
    
    <div class="d-flex">
        @if($doc->editMode)
            <button wire:click="enableEditMode" type="button" class="edit-btn" disabled>
                <i class="fa-light fa-file-pen"></i>
            </button>
        @else
            <button wire:click="enableEditMode" type="button" class="edit-btn">
                <i class="fa-light fa-file-pen"></i>
            </button>
        @endif

        <form method="POST" action="{{ route('settings.deleteRequirement', ['id' => $doc->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="edit-btn">
                <i class="fa-regular fa-trash-can"></i>
            </button>
        </form>
    </div>
</li>