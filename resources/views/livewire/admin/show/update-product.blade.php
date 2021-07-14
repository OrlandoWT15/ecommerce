<div>
    <x-containers.secondary>
        {{--Start of the Form--}}
        <x-containers.form>
            {{--Header--}}
            <x-slot name="title">
                {{ __('Editando producto') }}
            </x-slot>
            {{--Form--}}
            <x-slot name="content">
                {{--Photo--}}
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        <img src="" alt="producto">
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input class="w-full"/>
                    </x-slot>
                </x-containers.formbody>
                {{--Name--}}
                <x-containers.formbody>
                    <x-slot name="label">
                        {{ __('Nombre') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input wire:model="product.name" class="w-full"/>
                    </x-slot>
                </x-containers.formbody>
                {{--Barcode--}}
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Codigo de barras') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input type="number" min="0" wire:model.number="product.barcode" class="w-full"/>
                    </x-slot>
                </x-containers.formbody>
                {{--Trademarks--}}
                <x-containers.formbody>
                    <x-slot name="label">
                        {{ __('Marcas') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.select wire:model="product.trademark_id" class="w-full">
                            <x-slot name="default">
                                {{__('--Selecciona--')}}  
                            </x-slot>
                            @foreach($trademarks as $trademark)
                                <option value="{{$trademark->id}}">{{$trademark->name}}</option>
                            @endforeach
                        </x-component.select>
                    </x-slot>
                </x-containers.formbody>
                {{--Category--}}
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Categoría') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.select wire:model="product.category_id" class="w-full">
                            <x-slot name="default">
                                {{__('--Selecciona--')}}  
                            </x-slot>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </x-component.select>
                    </x-slot>
                </x-containers.formbody>
                {{--Sub Category--}}
                <x-containers.formbody>
                    <x-slot name="label">
                        {{ __('Sub Categoría') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.select wire:model="product.subcategory_id" class="w-full">
                            <x-slot name="default">
                                {{__('--Selecciona--')}}  
                            </x-slot>
                            @foreach($subcategories as $subcategory)
                                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                            @endforeach
                        </x-component.select>
                    </x-slot>
                </x-containers.formbody>
                {{--Description--}}
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Descripción') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.inputarea wire:model="product.description" rows="10" cols="10"></x-component.inputarea>
                    </x-slot>
                </x-containers.formbody>
                {{--Componente para editar variaciones--}}
                <h2 class="text-center text-lg font-sans font-bold">
                    Variaciones
                </h2>
                <div class="space-y-3 divide-y divide-gray-300">
                    @foreach($this->variations as  $variation)
                        <livewire:admin.show.update.variations :variation="$variation" :wire:key="$variation->id"/>
                    @endforeach
                </div>
            </x-slot>
            {{--Footer--}}
            <x-slot name="save">
                <div class="justify-between">
                    <x-buttons.cian wire:click="cancel()" class="bg-red-500">
                        {{__('Cancelar')}}
                    </x-buttons.cian>
                    <x-buttons.cian wire:click="save()" class="bg-blue-500">
                        {{__('Guardar')}}
                    </x-buttons.cian>
                </div>
            </x-slot>
        </x-containers.form>
        {{--End of the Form--}}
    </x-containers.secondary>
</div>