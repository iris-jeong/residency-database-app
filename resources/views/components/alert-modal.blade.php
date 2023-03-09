<div>
    <!-- Modal -->
    <div class="modal fade" {{ $attributes }} tabindex="-1" aria-labelledby="{{ $label }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="{{ $label }}">{{$title}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ $body }}
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-{{$color}}">{{ $type }}</button>
                </div>
            </div>
        </div>
    </div>
</div>