<div class="flex gap-4">
    @foreach ($getOptions() as $value => $label)
        <label class="cursor-pointer">
            <input
                type="radio"
                name="{{ $getName() }}"
                value="{{ $value }}"
                {{ $isDisabled() ? 'disabled' : '' }}
                {{ $isRequired() ? 'required' : '' }}
                @checked($getState() === $value)
                wire:click="$set('{{ $getStatePath() }}', '{{ $value }}')"
            >
            <span>{{ $label }}</span>
        </label>
    @endforeach
</div>
