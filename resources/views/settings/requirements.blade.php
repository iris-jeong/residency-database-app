<x-layouts.settings id="requirements">
    <div class="content">
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
                            <p class="doc-name">{{$doc->required_doc}}</p>
                        </div>
                    </div>

                    <div class="">
                        <i class="fa-light fa-file-pen"></i>
                        <i class="fa-regular fa-trash-can"></i>
                    </div>
                </li>
            @endforeach
        </ul>
        <form id="box" class= "d-flex">
            <input id="requirement-input" class="form-control w-25" type="text" placeholder="">
            <button class="btn btn-outline-danger ms-3" type="button">Add requirement</button>
        </form>
    </div>
</x-layouts.settings><!-- #requirements -->
