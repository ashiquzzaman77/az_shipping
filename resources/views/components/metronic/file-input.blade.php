<div class="row gx-1">
    <div class="col-10">
        <input id="{{ $id ?? 'file-input' }}" type="file" class="form-control @error($name)is-invalid @enderror"
            name="{{ $name }}" accept="image/*" {{ $attributes }} onchange="previewFile(this)" />

        @error($name)
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-2 mt-n7">
        <img id="{{ $id ?? 'file-input' }}-preview" src="{{ $value ? asset('storage/' . $value) : '' }}"
            alt="Image Preview" class="img-thumbnail" style="display: {{ $value ? 'block' : 'none' }}; height: 68px;" width="55px">
    </div>
</div>

<script>
    function previewFile(input) {
        var file = input.files[0];
        var reader = new FileReader();

        reader.onload = function(e) {
            var preview = document.getElementById(input.id + '-preview');
            preview.src = e.target.result;
            preview.style.display = 'block';
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>
