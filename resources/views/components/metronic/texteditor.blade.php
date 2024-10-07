<textarea id="{{ $id ?? '' }}" name="{{ $name }}" placeholder="{{ $placeholder ?? '' }}"
    class="form-control editor @error($name) is-invalid @enderror">{{ old($name, $value ?? '') }}</textarea>
@error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
