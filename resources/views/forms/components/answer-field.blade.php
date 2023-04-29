
<x-dynamic-component
    :component="$getFieldWrapperView()"
    :id="$getId()"
    {{-- :label="$getLabel()" --}}
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-action="$getHintAction()"
    :hint-color="$getHintColor()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}').defer }" class="text-md py-3 grid">
        <!-- Interact with the `state` property in Alpine.js -->

        <label for="" class="text-grey-700 font-semibold text-md mb-3">{{ $getLabel() }}</label>

        <input wire:model.defer="{{ $getStatePath() }}" class="p-0 bg-transparent w-full" / disabled>

    </div>
    <hr>
</x-dynamic-component>
