<div>
    @can('Editar Inventario')
    <div class="text-blue-500 hover:text-blue-700 w-4 mr-2 transform hover:scale-110"
    wire:click="edit_componente()">
        <i class="fas fa-edit"></i>
    </div>
    @endcan
{{--Ventana Modal categoria--}}
    <x-jet-dialog-modal wire:model="is_show">
		<x-slot name="title">  
            Editar Categoria
        </x-slot>

		<x-slot name="content">
            
            <dl>
                <div class="items-center bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

                    <dt class="font-medium text-gray-500">
                        <x-adminver.label for="nombre">
                            Nombre de la categoria:
                        </x-adminver.label>
                    </dt>

                    <dd class="mt-1 text-base text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-adminver.input type="text" id="nombre" wire:model="category.name"/>
                        <x-jet-input-error for="category.name"/>
                    </dd>

                </div>
            </dl>
            <dl>
                <div class="items-center bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

                    <dt class="font-medium text-gray-800">
                        <x-adminver.label for="nombre">
                            Nombre de la descripcion:
                        </x-adminver.label>
                    </dt>

                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-adminver.input type="text" id="nombre" wire:model="category.description"/>
                        <x-jet-input-error for="category.description"/>
                    </dd>

                </div>
            </dl>
            
            
		</x-slot>

        <x-slot name="footer">
            <x-buttons.red @click="cancelar()">
                {{__('Cancelar')}}
            </x-buttons.red>
            <x-buttons.cian wire:click="save_changes()">
                <i class ="far fa-save mr-3"></i>
                {{__('Guardar')}}
            </x-buttons.cian>	
	    </x-slot>
	    

	</x-jet-dialog-modal>
    {{--Fin de la ventana modal--}}
</div>
