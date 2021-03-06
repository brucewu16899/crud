<!-- text input -->
  <div class="form-group">
    <label>{{ $field['label'] }}</label>
    <input
        type="text"
        class="form-control"

        @foreach ($field as $attribute => $value)
            @if (is_string($attribute) && is_string($value))
               @if($attribute == 'value')
                    {{ $attribute }}="{{ old($field['name']) ? old($field['name']) : $value }}"
                @else
                    {{ $attribute }}="{{ $value }}"
                @endif
            @endif
        @endforeach
        >
    @if (isset($field['hint']))
        <p class="help-block">{{ $field['hint'] }}</p>
    @endif
  </div>