@php $editing = isset($realty) @endphp
<div class="form-row">
     <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Nome"
            value="{{ old('name', ($editing ? $realty->name : '')) }}"
            maxlength="255"
            placeholder="Nome"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="street"
            label="Logradouro"
            value="{{ old('street', ($editing ? $realty->address->street : '')) }}"
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
            value="{{ old('number', ($editing ? $realty->address->number: '')) }}"
            maxlength="255"
            placeholder="Número"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="complement"
            label="Complemento"
            value="{{ old('complement', ($editing ? $realty->address->complement: '')) }}"
            maxlength="255"
            placeholder="Complemento"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="country"
            label="País"
            value="{{ old('country', ($editing ? $realty->address->country : '')) }}"
            maxlength="255"
            placeholder="País"

        ></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-8">
        <x-inputs.text
            name="city"
            label="Cidade"
            value="{{ old('city', ($editing ? $realty->address->city : '')) }}"
            maxlength="255"
            placeholder="Cidade"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="state"
            label="Estado"
            value="{{ old('state', ($editing ? $realty->address->state : '')) }}"
            maxlength="255"
            placeholder="Estado"

        ></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="zip_code"
            label="CEP"
            value="{{ old('zip_code', ($editing ? $realty->address->zip_code : '')) }}"
            maxlength="255"
            placeholder="CEP"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-8">
        <x-inputs.text
            name="district"
            label="Bairro"
            value="{{ old('district', ($editing ? $realty->address->district : '')) }}"
            maxlength="255"
            placeholder="Bairro"

        ></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="description"
            label="Descrição"
            value="{{ old('description', ($editing ? $realty->description : '')) }}"
            maxlength="255"
            placeholder="Descrição"

        ></x-inputs.textarea>
    </x-inputs.group>
</div>



