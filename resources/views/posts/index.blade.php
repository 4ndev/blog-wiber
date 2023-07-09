<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Posts') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900">

					<!-- Modal toggle -->
					<button data-modal-target="createModal" data-modal-toggle="createModal"
						class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm mb-3 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
						type="button">
						Crear Post
					</button>

					<!-- Create modal -->
					<div id="createModal" tabindex="-1" aria-hidden="true"
						class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
						<div class="relative w-full max-w-2xl max-h-full">
							<!-- Modal content -->
							<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
								<!-- Modal header -->
								<div
									class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
									<h3 class="text-xl font-semibold text-gray-900 dark:text-white">
										Crear Post
									</h3>
									<button type="button"
										class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
										data-modal-hide="createModal">
										<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
											fill="none" viewBox="0 0 14 14">
											<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
												stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
										</svg>
										<span class="sr-only">Close modal</span>
									</button>
								</div>
								<!-- Modal body -->
								<div class="p-6 space-y-6">
									<form class="space-y-6" action="{{ route('posts.store') }}" method="POST">
										@csrf
										<div>
											<label for="title"
												class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
											<input type="text" name="title" id="title"
												class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
												placeholder="Nuevo post" required>
										</div>
										<div>
											<label for="description"
												class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
											<input type="text" name="description" id="description"
												class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
												placeholder="Descripción" required>
										</div>
										<div>
											<label for="body"
												class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenido</label>
											<textarea id="body" name="body" rows="4"
												class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
												placeholder="Escribe el contenido aquí..."></textarea>
										</div>
										<button type="submit"
											class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear post</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- Tabla -->
					<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
						<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
							<thead
								class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
								<tr>
									<th scope="col" class="px-6 py-3">
										Imagen
									</th>
									<th scope="col" class="px-6 py-3">
										<div class="flex items-center">
											Título
											<a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
													xmlns="http://www.w3.org/2000/svg" fill="currentColor"
													viewBox="0 0 24 24">
													<path
														d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
												</svg></a>
										</div>
									</th>
									<th scope="col" class="px-6 py-3">
										<div class="flex items-center">
											Contenido
											<a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
													xmlns="http://www.w3.org/2000/svg" fill="currentColor"
													viewBox="0 0 24 24">
													<path
														d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
												</svg></a>
										</div>
									</th>
									<th scope="col" class="px-6 py-3">
										<div class="flex items-center">
											Fecha
											<a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
													xmlns="http://www.w3.org/2000/svg" fill="currentColor"
													viewBox="0 0 24 24">
													<path
														d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
												</svg></a>
										</div>
									</th>
									<th scope="col" class="px-6 py-3">
										<span class="sr-only">Edit</span>
									</th>
								</tr>
							</thead>
							<tbody>
								@forelse ($posts as $post)
									<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
										<th scope="row"
											class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
											Imagen
										</th>
										<td class="px-6 py-4">
											{{ $post->title }}
										</td>
										<td class="px-6 py-4">
											{{ $post->body }}
										</td>
										<td class="px-6 py-4">
											{{ $post->created_at }}
										</td>
										<td class="px-6 py-4 text-right">
											<a href="{{ route('posts.show', $post)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver</a>
											<a href="{{ route('posts.delete', $post->id)}}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Borrar</a>
										</td>
									</tr>
								@empty
									<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
										<td colspan="5" class="text-center py-2">No hay ningún post.</th>
									</tr>
								@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>