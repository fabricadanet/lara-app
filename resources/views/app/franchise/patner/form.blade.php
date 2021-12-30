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
<div class="form-row">
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="price"
            label="Valor"
            value="{{ old('price', ($editing ? $realty->price : '')) }}"
            maxlength="255"
            placeholder="Valor"

        ></x-inputs.text>
    </x-inputs.group>
    <x-inputs.group class="col-sm-4">
        <x-inputs.text
            name="area"
            label="Área"
            value="{{ old('area', ($editing ? $realty->area : '')) }}"
            maxlength="255"
            placeholder="Área"

        ></x-inputs.text>
    </x-inputs.group>
</div>
<div class="form-row">

    <x-inputs.group class="col-sm-6 ">
        <x-inputs.select class="my-auto mt-3" name="marital_status" Label="Recomendação Estado Civil">
            <option disabled value="">Selecione</option>
            <option value="Solteiro">Solteiro</option>
            <option value="Casado">Casado</option>
            <option value="Divorciado">Divorciado</option>
            <option value="Viúvo">Viúvo</option>
            <opition value="Outros">Outros</opition>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="children" label="Crianças">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>
        </x-inputs.select>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="garage" Label="Vagas na Garagem">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="bathrooms" label="Banheiros">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>

        </x-inputs.select>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="rooms" label="Quartos">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="suite" label="Suites">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="+04">04 ou mais</option>
        </x-inputs.select>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="proximity_beach" label="Proximidade da praia">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="Orla com vista">Orla com vista</option>
            <option value="Orla sem vista">Orla sem vista</option>
            <option value="Quadra com vista">Quadra com vista</option>
            <option value="Quadra sem vista">Quadra sem vista</option>
            <option value="Outro">Outro</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto m-3" name="location" label="Localização">
            <option disabled value="">Selecione</option>
            <option value="Centros Urbanos">Centros Urbanos</option>
            <option value="Condomínio">Condomínio</option>
            <option value="Área Comercial">Área Comercial</option>
            <option value="Acesso Rodovia">Acesso Rodovia</option>
            <option value="Área Rural">Área Rural</option>
            <option value="Outros">Outros</option>
        </x-inputs.select>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="sale_deadline" label="Prazo para Venda">
            <option disabled value="">Selecione</option>
            <option value="Urgente">Urgente</option>
            <option value="Durante o ano">Durante o ano</option>
            <option value="Sem previsão">Sem previsão</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="financing" label="Financiamento">
            <option disabled value="">Selecione</option>
            <option value="Já financiado">Já financiado</option>
            <option value="À financiar">À financiar</option>
            <option value="À vista">À vista</option>
            <option value="Outro">Outro</option>
        </x-inputs.select>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="construction" label="Tipo de construção">
            <option disabled value="">Selecione</option>
            <option value="Novo">Nova</option>
            <option value="Usado">Usada</option>
            <option value="Lançamento 01 ano">Lançamento 01 ano</option>
            <option value="Lançamento 02 anos">Lançamento 02 anos</option>
            <option value="lançamento 03 anos ou mais">Lançamento 03 ou mais anos</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class=" m-auto mt-3" name="property_type" label="Tipo de Imóvel">
            <option disabled value="">Selecione</option>
            <option value="Casa">Casa</option>
            <option value="Apartamento">Apartamento</option>
            <option value="Cobertura">Cobertura</option>
            <option value="Flat">Flat</option>
            <option value="Kitnet">Kitnet</option>
            <option value="Loft">Loft</option>
            <option value="Sobrado">Sobrado</option>
            <option value="Terreno">Terreno</option>
            <option value="Chacará">Chacará</option>
            <option value="Comercial">Comercial</option>
            <option value="Industrial">Industrial</option>
            <option value="Outro">Outro</option>
        </x-inputs.select>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="swap_type" label="Tipo de Permuta">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="Carro">Carro</option>
            <option value="Imóvel">Imóvel</option>
            <option value="Terreno">Terreno</option>
            <option value="Outro">Outro</option>
        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="furniture" label="Mobília">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
        </x-inputs.select>
    </x-inputs.group>
</div>
<div class="form-row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="pets" label="Pet">
            <option disabled value="">Selecione</option>
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>

        </x-inputs.select>
    </x-inputs.group>
    <x-inputs.group class="col-sm-6">
        <x-inputs.select class="m-auto mt-3" name="decision maker" label="Recomendado para tomador de descisão">
            <option disabled value="">Selecione</option>
            <option value="Marido">Marido</option>
            <option value="Esposa">Esposa</option>
            <option value="Companeiro(a)">Companheiro(a)</option>
            <option value="Casal">Casal</option>
            <option value="Família">Família</option>
        </x-inputs.select>
    </x-inputs.group>

</div>


