<x-layouts.settings id="requirements">
    <div class="content">
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

        <div>
            <p id="every">Everyone</p>
            <p id="req-text">All residents and fellows are required to have these documents and licenses.</p>
        </div>

        <p id="req-doc">Document Name</p>
        <ul id="admin-users">
            @foreach( $requiredDocs as $doc) 
                <li class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="doc-info">
                            <p class="doc-name">{{$doc->name}}</p>
                        </div>
                    </div>

                    <div class="d-flex">
                        <button type="button" class="edit-btn">
                            <i class="fa-light fa-file-pen"></i>
                        </button>

                        <form method="POST" action="{{ route('settings.deleteRequirement', ['id' => $doc->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="edit-btn">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
        <form method="POST" action="{{ route('settings.createRequirement') }}" class= "d-flex">
            @csrf
            <div class="form-group w-25">
                <input id="requirement-input" name="requirement" class="form-control" type="text" value={{ old('requirement') }}>
                @error('requirement')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <button class="btn add-btn ms-3" type="submit">Add requirement</button>
        </form>
    </div>
</x-layouts.settings><!-- #requirements -->
