
<div class="form-group">
    @if($type != 'checkbox')
        <label for="{{ $name }}">{{ $title }}</label>
    @else
        en ligne?
    @endif
    @if($type == 'textarea')
        <textarea name="{{ $name }}" id="{{ $name }}" class="form-control @error($name) is-invalid @enderror" cols="30" rows="10">{{ $value }}</textarea>
    @elseif ($type == 'select')
        <select name="{{ $name }}" id="{{ $name }}" class="form-control @error($name) is-invalid @enderror">
            @foreach ($options as $opt )
                <option value="{{ $opt->id }}" @if ($value ==$opt->id ) selected @endif>{{ $opt->name }}</option>
            @endforeach
        </select>
    @elseif($type == 'checkbox')
        <input type="{{ $type }}"  @if ($value == 1 ) checked @endif name="{{ $name }}" class="@error($name) is-invalid @enderror" id="{{ $name }}">
    @else
        <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" id="{{ $name }}" class="form-control @error($name) is-invalid @enderror">
    @endif
</div>

@error($name)
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
