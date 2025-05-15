    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">Artigos</h2>

        <button wire:click="createShowModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
            Novo Artigo
        </button>

        <table class="table-auto w-full mb-6">
            <thead>
                <tr>
                    <th class="px-4 py-2">Capa</th>
                    <th class="px-4 py-2">Título</th>
                    <th class="px-4 py-2">Categoria</th>
                    <th class="px-4 py-2">Publicado em</th>
                    <th class="px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td class="border px-4 py-2">
                            @if($article->cover)
                                <img src="{{ asset('storage/' . $article->cover) }}" class="h-10 w-10 rounded">
                            @endif
                        </td>
                        <td class="border px-4 py-2">{{ $article->title }}</td>
                        <td class="border px-4 py-2">{{ $article->category }}</td>
                        <td class="border px-4 py-2">{{ $article->published_at }}</td>
                        <td class="border px-4 py-2">
                            <button wire:click="updateShowModal({{ $article->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Editar</button>
                            <button wire:click="delete({{ $article->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if($modalFormVisible)
            <div  class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75">
                <div style="Background:rgb(148, 203, 235);" class="bg-white p-6 rounded-lg shadow-lg w-1/2">
                    <h3 class="text-xl font-semibold mb-4">{{ $articleId ? 'Editar Artigo' : 'Novo Artigo' }}</h3>

                    <form wire:submit.prevent="save">
                        <div class="mb-4">
                            <label class="block">Título:</label>
                            <input type="text" wire:model="title" class="border p-2 w-full">
                            @error('title')
                                @php /** @var string $message */ @endphp
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block">Categoria:</label>
                            <input type="text" wire:model="category" class="border p-2 w-full">
                            @error('category')
                                @php /** @var string $message */ @endphp
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block">Conteúdo:</label>
                            <textarea wire:model="content" class="border p-2 w-full"></textarea>
                            @error('content')
                                @php /** @var string $message */ @endphp
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block">Capa:</label>
                            <input type="file" wire:model="cover" class="border p-2 w-full">
                            @error('cover')
                                @php /** @var string $message */ @endphp
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block">Data de Publicação:</label>
                            <input type="date" wire:model="published_at" class="border p-2 w-full">
                            @error('published_at')
                                @php /** @var string $message */ @endphp
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block">Desenvolvedores:</label>
                            <select wire:model="developerIds" multiple class="border p-2 w-full">
                                @foreach($developers as $developer)
                                    <option value="{{ $developer->id }}">{{ $developer->name }}</option>
                                @endforeach
                            </select>
                            @error('developerIds')
                                @php /** @var string $message */ @endphp
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex justify-end">
                            <button type="button" wire:click="$set('modalFormVisible', false)" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
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
