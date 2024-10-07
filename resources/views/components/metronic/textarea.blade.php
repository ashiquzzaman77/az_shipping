<textarea id="{{ $id ?? '' }}" name="{{ $name }}" placeholder="{{ $placeholder ?? '' }}" rows="2"
    class="form-control @error($name) is-invalid @enderror">{{ old($name, $value ?? '') }}</textarea>
@error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
