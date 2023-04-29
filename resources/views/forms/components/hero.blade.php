<x-dynamic-component
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-action="$getHintAction()"
    :hint-color="$getHintColor()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()">

    <div class="py-3">
        {{-- <label for="{{ $getId() }}" class="font-bold"></label> --}}
        {{-- <input wire:model.defer="{{ $getStatePath() }}" id="{{ $getId() }}" class="p-0 bg-transparent font-bold text-3xl" / disabled> --}}
        <p wire:model.defer="{{ $getStatePath() }}" id="{{ $getId() }}" class="p-0 bg-transparent font-bold md:text-3xl text-2xl">{{ $getState() }}</p>
    </div>
    <hr>
</x-dynamic-component>
