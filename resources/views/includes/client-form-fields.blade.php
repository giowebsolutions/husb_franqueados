<div class="personal flex flex-wrap w-50 ">
    <h2 class="w-full my-4">Informações pessoais</h2>
    
    {{-- 2 col --}}
    <div class="form-row grid grid-cols-2 spacing-2 w-full">
        <div class="group">
            <label class="form-label" for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-input" @isset($client->name) value="{{$client->name}}" @endisset>
        </div>
        <div class="group">
            <label class="form-label" for="email">Email</label>
            <input type="email" name="email" id="email" class="form-input" @isset($client->email) value="{{$client->email}}" @endisset>
        </div>
    </div>

    {{-- 2 col --}}
    <div class="form-row grid grid-cols-2 spacing-2 w-full mt-2">
        <div class="group">
            <label class="form-label" for="phone">Telefone</label>
            <input type="tel" name="phone" id="phone"  class="form-input" @isset($client->phone) value="{{$client->phone}}" @endisset>
        </div>
        <div class="group">
            <label class="form-label" for="whatsapp">Whatsapp</label>
            <input type="tel" name="whatsapp" id="whatsapp"  class="form-input" @isset($client->whatsapp) value="{{$client->whatsapp}}" @endisset>
        </div>
    </div>
</div>

<div class="address flex flex-wrap w-50">
    <h2 class="w-full my-4">Endereço</h2>
    <div class="form-row w-full">
        <label class="form-label" for="address_postal">CEP</label>
        <input type="text" name="address_postal" id="address_postal"  class="form-input" @isset($client->address_postal) value="{{$client->address_postal}}" @endisset>
    </div>
    <div class="form-row grid grid-cols-2 spacing-2 w-full mt-2">
        <div class="group">
            <label class="form-label" for="address_city">Cidade</label>
            <input type="text" name="address_city" id="address_city"  class="form-input" @isset($client->address_city) value="{{$client->address_city}}" @endisset>
        </div>
        <div class="group">
            <label class="form-label" for="address_state">Estado</label>
            <input type="text" name="address_state" id="address_state"  class="form-input" @isset($client->address_state) value="{{$client->address_state}}" @endisset>
        </div>
    </div>

    <div class="form-row grid grid-cols-2 spacing-2 w-full mt-2">
        <div class="group">
            <label class="form-label" for="address_street">Rua</label>
            <input type="text" name="address_street" id="address_street"  class="form-input" @isset($client->address_street) value="{{$client->address_street}}" @endisset>
        </div>
        <div class="group">
            <label class="form-label" for="address_number">Número</label>
            <input type="text" name="address_number" id="address_number"  class="form-input" @isset($client->address_number) value="{{$client->address_number}}" @endisset>
        </div>
    </div>
    <div class="form-row grid grid-cols-2 spacing-2 w-full mt-2">
        <div class="group">
            <label class="form-label" for="address_complement">Complemento</label>
            <input type="text" name="address_complement" id="address_complement"  class="form-input" @isset($client->address_complement) value="{{$client->address_complement}}" @endisset>
        </div>
        <div class="group">
            <label class="form-label" for="address_reference">Referência</label>
            <input type="text" name="address_reference" id="address_reference"  class="form-input" @isset($client->address_reference) value="{{$client->address_reference}}" @endisset>
        </div>
    </div>
</div>