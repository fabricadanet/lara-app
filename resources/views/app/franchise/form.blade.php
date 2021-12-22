@php $editing = isset($franchise) @endphp

<div class="form-row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Nome"
            value="{{ old('name', ($editing ? $franchise->name : '')) }}"
            maxlength="255"
            placeholder="Nome"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="email"
            label="Email"
            value="{{ old('email', ($editing ? $franchise->email : '')) }}"
            maxlength="255"
            placeholder="Email"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.text
            name="phone"
            label="Telefone"
            value="{{ old('phone', ($editing ? $franchise->phone : '')) }}"
            maxlength="255"
            placeholder="Telefone"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.text
            name="whatsapp"
            label="Whatsapp"
            value="{{ old('whatsapp', ($editing ? $franchise->whatsapp : '')) }}"
            maxlength="255"
            placeholder="whatsapp"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.text
            name="facebook"
            label="Facebook"
            value="{{ old('facebook', ($editing ? $franchise->facebook : '')) }}"
            maxlength="255"
            placeholder="Facebook"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.text
            name="instagram"
            label="Instagram"
            value="{{ old('instagram', ($editing ? $franchise->instagram : '')) }}"
            maxlength="255"
            placeholder="Instagram"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.text
            name="twitter"
            label="twitter"
            value="{{ old('twitter', ($editing ? $franchise->twitter : '')) }}"
            maxlength="255"
            placeholder="twitter"
            required
        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.text
            name="youtube"
            label="youtube"
            value="{{ old('youtube', ($editing ? $franchise->youtube : '')) }}"
            maxlength="255"
            placeholder="youtube"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>

<div class="form-row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="description"
            label="Descrição"

            maxlength="255"
            placeholder="Descrição"
            required
        >
            @if($editing) {{$franchise->description}} @else  @endif
        </x-inputs.textarea>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="logo"
            label="Logo"
            value="{{ old('logo', ($editing ? $franchise->logo : '')) }}"
            maxlength="255"
            placeholder="Logo"

        ></x-inputs.text>

    </x-inputs.group>
</div>
<div class="form-row">
<x-inputs.group class="col-sm-12">
    <x-inputs.text
        name="street"
        label="Logradouro"
        value="{{ old('street', ($editing ? $franchise->address->street : '')) }}"
        maxlength="255"
        placeholder="Logradouro"

    ></x-inputs.text>

</x-inputs.group>
</div>
<div class="form-row">
<x-inputs.group class="col-sm-4">
    <x-inputs.text
        name="number"
        label="Número"
        value="{{ old('number', ($editing ? $franchise->address->number : '')) }}"
        maxlength="255"
        placeholder="Número"

    ></x-inputs.text>
</x-inputs.group>

<x-inputs.group class="col-sm-8">
    <x-inputs.text
        name="complement"
        label="Complemento"
        value="{{ old('complement', ($editing ? $franchise->address->complement : '')) }}"
        maxlength="255"
        placeholder="Complemento"

    ></x-inputs.text>
</x-inputs.group>


</div>
<div class="form-row">
<x-inputs.group class="col-sm-8">
    <x-inputs.text
        name="district"
        label="Bairro"
        value="{{ old('district', ($editing ? $franchise->address->district : '')) }}"
        maxlength="255"
        placeholder="Bairro"
    ></x-inputs.text>
</x-inputs.group>
<x-inputs.group class="col-sm-4">
    <x-inputs.text
        name="zip_code"
        label="CEP"
        value="{{ old('zip_code', ($editing ? $franchise->address->zip_code : '')) }}"
        maxlength="255"
        placeholder="CEP"

    ></x-inputs.text>
</x-inputs.group>

</div>
<div class="form-row">
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="city"
            label="Cidade"
            value="{{ old('city', ($editing ? $franchise->address->city : '')) }}"
            maxlength="255"
            placeholder="Cidade"

        ></x-inputs.text>
    </x-inputs.group>

<x-inputs.group class="col-sm-4">
    <x-inputs.text
        name="state"
        label="Estado"
        value="{{ old('state', ($editing ? $franchise->address->state : '')) }}"
        maxlength="255"
        placeholder="Estado"

    ></x-inputs.text>
</x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="country"
            label="País"
            value="{{ old('country', ($editing ? $franchise->address->country : '')) }}"
            maxlength="255"
            placeholder="País"

        ></x-inputs.text>
    </x-inputs.group>


</div>


