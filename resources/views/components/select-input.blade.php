@props(['options' => [], 'label' => '', 'selected' => null])

<label {{ $attributes->merge(['class' => 'block font-medium text-gray-700']) }}>
    {{ $label }}
</label>

<select {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
    @foreach ($options as $value => $optionLabel)
        <option value="{{ $value }}" {{ $value == $selected ? 'selected' : '' }}>
            {{ $optionLabel }}
        </option>
    @endforeach
</select>
