
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

        <p for="" class="text-grey-700 font-semibold text-md mb-3">{{ $getLabel() }}</p>
        {{-- {{ dd($getStatePath()) }} --}}
        {{-- <input wire:model.defer="{{ $getStatePath() }}" class="p-0 bg-transparent w-full" / disabled> --}}
        <p wire:model.defer="{{ $getStatePath() }}">{{ $getState() }}</p>

    </div>
    <hr>
</x-dynamic-component>
