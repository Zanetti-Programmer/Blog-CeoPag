<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Desenvolvedores</h2>

    <button wire:click="createShowModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
        Novo Desenvolvedor
    </button>

    <table class="table-auto w-full mb-6">
        <thead>
            <tr>
                <th class="px-4 py-2">Foto</th>
                <th class="px-4 py-2">Nome</th>
                <th class="px-4 py-2">E-mail</th>
                <th class="px-4 py-2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($developers as $developer)
                <tr>
                    <td class="border px-4 py-2">
                        @if($developer->photo)
                            <img src="{{ asset('storage/' . $developer->photo) }}" class="h-10 w-10 rounded-full">
                        @endif
                    </td>
                    <td class="border px-4 py-2">{{ $developer->name }}</td>
                    <td class="border px-4 py-2">{{ $developer->email }}</td>
                    <td class="border px-4 py-2">
                        <button wire:click="updateShowModal({{ $developer->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Editar</button>
                        <button wire:click="delete({{ $developer->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Excluir</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if($modalFormVisible)
        <div class="fixed inset-0 flex items-center justify-center bg-opacity-75">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2" style="background: #454545;">
                <h3 class="text-xl font-semibold mb-4">{{ $developerId ? 'Editar Desenvolvedor' : 'Novo Desenvolvedor' }}</h3>

                <form wire:submit.prevent="save">
                    <div class="mb-4">
                        <label class="block">Nome:</label>
                        <input type="text" wire:model="name" class="border p-2 w-full">
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block">E-mail:</label>
                        <input type="email" wire:model="email" class="border p-2 w-full">
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block">Foto:</label>
                        <input type="file" wire:model="photo" class="border p-2 w-full">
                        @error('photo') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block">Biografia:</label>
                        <textarea wire:model="bio" class="border p-2 w-full"></textarea>
                        @error('bio') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="button" wire:click="$set('modalFormVisible', false)" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">
                            Cancelar
                        </button>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
