<div>
    <form class="row px-4 container" action="{{ route('images.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @foreach ($images as $index => $item)
            <div class="col-md-4">
                <label for="name{{ $index }}" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationCustom{{ $index }}"
                    wire.model="images{{ $index }}.name" name="name[{{ $index }}]" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-4 py-1">
                <label for="formFile{{ $index }}" class="form-label">Upload File</label>
                <input class="form-control" type="file" name="formFile{{ $index }}"
                    id="formFile{{ $index }}">
            </div>
            <div class="col-md-4">
                <label class="form-label">&nbsp;</label>
                <div class="row">
                    <div class="col-3">
                        @if ($index > 0)
                            <button class="btn btn-danger form-control"
                                wire:click.prevent="removeImage({{ $index }})">X</button>
                        @endif

                    </div>
                    <div class="col-9">

                    </div>
                </div>
            </div>
        @endforeach


        <div class="col-12">
            <div class="form-check py-2">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <div class="col-3 py-4">
            @if ($index <= 4)
                <button class="btn btn-warning form-control" wire:click.prevent="addImage">+ Add More</button>
            @endif
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</div>
