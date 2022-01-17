@php $editing = isset($client) @endphp

<div class="form-row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text name="name" label="Nome" value="{{ old('name', $editing ? $client->name : '') }}"
            maxlength="255" placeholder="Nome" required></x-inputs.text>
    </x-inputs.group>
</div>

<div class="form-row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text name="email" label="E-mail" value="{{ old('email', $editing ? $client->email : '') }}"
            maxlength="255" placeholder="E-mail"></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-4">
        <x-inputs.text name="phone" label="Telefone" value="{{ old('phone', $editing ? $client->phone : '') }}"
            maxlength="255" placeholder="Telefone"></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-4">
        <x-inputs.text name="whatsapp" label="Whatsapp"
            value="{{ old('whatsapp', $editing ? $client->whatsapp : '') }}" maxlength="255" placeholder="Whatsapp">
        </x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-4">
        <x-inputs.text name="facebook" label="Facebook"
            value="{{ old('facebook', $editing ? $client->facebook : '') }}" maxlength="255" placeholder="Facebook">
        </x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text name="street" label="Logradouro"
            value="{{ old('street', $editing ? $client->address->street : '') }}" maxlength="255"
            placeholder="Logradouro"></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-4">
        <x-inputs.text name="number" label="Número"
            value="{{ old('number', $editing ? $client->address->number : '') }}" maxlength="255"
            placeholder="Número"></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text name="complement" label="Complemento"
            value="{{ old('complement', $editing ? $client->address->complement : '') }}" maxlength="255"
            placeholder="Complemento"></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text name="country" label="País"
            value="{{ old('country', $editing ? $client->address->country : '') }}" maxlength="255"
            placeholder="País"></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-8">
        <x-inputs.text name="city" label="Cidade" value="{{ old('city', $editing ? $client->address->city : '') }}"
            maxlength="255" placeholder="Cidade"></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text name="state" label="Estado"
            value="{{ old('state', $editing ? $client->address->state : '') }}" maxlength="255" placeholder="Estado">
        </x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-4">
        <x-inputs.text name="zip_code" label="CEP"
            value="{{ old('zip_code', $editing ? $client->address->zip_code : '') }}" maxlength="255"
            placeholder="CEP"></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-8">
        <x-inputs.text name="district" label="Bairro"
            value="{{ old('district', $editing ? $client->address->district : '') }}" maxlength="255"
            placeholder="Bairro"></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="description" label="Descrição"
            value="{{ old('description', $editing ? $client->description : '') }}" maxlength="255"
            placeholder="Descrição">{{ old('description', $editing ? $client->description : '') }}
        </x-inputs.textarea>
    </x-inputs.group>
</div>
