<form action="{{ route('events.store') }}">
    {{ method_field('PUT') }}
    <div class="input-group">
        <label for="event">Event:</label>
        <select id="event" class="form-control" name="event">
            @foreach ($types as $type)
                <option
                        value="{{ $type->code }}"
                        {{ isset($event) && $event->type_code == $type->code ? 'checked="checked"' : '' }}>
                    {{ $type->label }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="input-group">
        <label for="template">Template:</label>
        <select id="template" class="form-control" name="template">
            <option value="0">Default</option>
            @if ($templates->count())
                @foreach ($templates as $template)
                    <option value="{{ $template->id }}">{{ $template->name }}</option>
                @endforeach
            @endif
        </select>
    </div>
</form>