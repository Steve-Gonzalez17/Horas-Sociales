@include('components.navbar')
@include('components.scripts')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
    <title>Document</title>
</head>

<body>

    <button @click="openModal = true">Open Modal</button>

    <div style="width: 100%; height: 90%; display: flex; justify-content: center; align-items: center; gap: 60px">

        <a href="#" onclick="my_modal_1.showModal()">
            {{-- button 1 --}}
            <div class="card card-compact bg-base-100 w-96 shadow-xl button-start">
                <figure class="img-icon-container">
                    <img src="{{ asset('img/gas-station.png') }}" alt="gas-station" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Ingreso de vales de combustible</h2>
                    <p> &nbsp; a bodega general</p>

                </div>
            </div>
            {{-- button 1 end --}}
        </a>

        <a href="#" onclick="my_modal_2.showModal()">
            {{-- button 2 --}}
            <div class="card card-compact bg-base-100 w-96 shadow-xl button-start">
                <figure class="img-icon-container">
                    <img src="{{ asset('img/warehouse-icon-2.png') }}" alt="vouchers" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Entrega de vales para combustible</h2>
                    <p> &nbsp; (Diesel o gasolina)</p>

                </div>
            </div>
            {{-- button 2 end --}}
        </a>
    </div>

    <!-- Modal 1 -->
    <dialog id="my_modal_1" class="modal ">
        <div class="modal-box max-w-7xl bg-[#686D76]">
            <h2 class="text-center text-white font-bold mb-[1.6rem] mt-[0.8rem]">Ingreso de vales de combustible a bodega general
            </h2>

            <div class="mb-2">
                <hr />
            </div>
            <form class="p-4 md:p-5 ">
                <div class="grid gap-6 mb-6 md:grid-cols-3">
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Tipo de Combustible</span>
                            </div>
                            <select type="text" placeholder="Type here"
                                class="bg-gray-50 border text-gray-500 border-gray-300 select select-bordered w-full max-w-xs">
                                <option>ESPECIAL</option>
                                <option>REGULAR</option>
                                <option>DIESEL</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Tipo de Fondo</span>
                            </div>
                            <select type="text" placeholder=""
                                class="bg-gray-50 border text-gray-500 border-gray-300 select select-bordered w-full max-w-xs">
                                <option>TESORERIA</option>
                                <option>RECURSOS PROPIOS</option>
                                <option>PROYECTO</option>
                                <option>DONACION</option>
                                <option>FONDO GOES</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Programa:</span>
                            </div>
                            <select type="text" placeholder="Type here"
                                class="bg-white text-gray-500  border-gray-300 select select-bordered w-full max-w-xs">
                                <option>NORMAL</option>
                                <option>SEMANA SANTA</option>
                                <option>FIESTAS AGOSTINAS</option>
                                <option>FIN DE AÑO</option>
                                <option>FINLANDESA</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <div class="label">
                            <span class="label-text text-white">Fecha Compra:</span>
                        </div>
                        <div>
                            <input type="date" placeholder="Type here"
                                class="bg-[#686D76] border-white text-white border input input-bordered w-full max-w-xs" />
                        </div>
                    </div>
                    <div>
                        <div class="label">
                            <span class="label-text text-white">Fecha Vigencia:</span>
                        </div>
                        <div class="flex w-full justify-center items-center">
                            <div>
                                <input type="date" placeholder="Type here"
                                    class="bg-[#686D76] border-white text-white border input input-bordered w-full max-w-xs" />
                            </div>
                            <div class="divider divider-horizontal divider-error text-white">Hasta</div>
                            <div>
                                <input type="date" placeholder="Type here"
                                    class="bg-[#686D76] border-white text-white border input input-bordered w-full max-w-xs" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">#Orden de Compra</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-white text-gray-500 input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">#Factura</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-white text-gray-500 input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">NIT/Proveedor</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-white text-gray-500 input input-bordered w-full max-w-xs" />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs ">
                            <div class="label">
                                <span class="label-text text-white">Proveedor</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-white text-gray-500 input input-bordered w-full max-w-xs " />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs ">
                            <div class="label">
                                <span class="label-text text-white">Valor de vale</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-white  text-gray-500 input input-bordered w-full max-w-xs " />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs ">
                            <div class="label">
                                <span class="label-text text-white">Precio de Referencia Actual</span>
                            </div>
                            <input type="text" placeholder="Type here"
                                class="bg-white text-gray-500 input input-bordered w-full max-w-xs " />
                        </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text text-white">Series de los vales:</span>
                            </div>
                            <input type="text" placeholder="Digite el Cuerpo del #de vale"
                                class="bg-white text-gray-500 input input-bordered w-full max-w-xs" />
                            <div class="label">
                                <span class="label-text-alt text-white">Ejemplo "03112220836400"</span>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="mb-6">
                    <label  class="label-text text-white ">Observación:</label>
                        <textarea class="bg-white text-gray-500 textarea textarea-bordered w-full h-32 mt-1"
                        placeholder=""></textarea>
                </div>

                <div class="flex items-center justify-center">
                    <button class="btn btn-outline bg-white w-[15rem] text-black btn-white ">Generar</button>

                </div>

            </form>

            <div class="mb-2">
                <hr />
            </div>

            <div class="p-4 md:p-5">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg"
                    style="max-width: 1700px; max-height: 300px; overflow: auto;">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Corr
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nfactura
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ser_vale
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nocompra
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Proveedor
                                </th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope=""
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    ...
                                </th>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                                <td class="px-6 py-4">
                                    ...
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <!-- Model 2 -->
    <dialog id="my_modal_2" class="modal " x-data="{ openModal: false, activeTab: 'tabla1' }" @click.outside="openModal = false">
        <div class="modal-box max-w-7xl bg-gray-50">
            <h2 class="text-center text-black font-bold ">Entrega de vales para combustible (Disel o gasolina) </h2>
            <div class="divider divider-error"></div>
                <div style="width: 100%; display: flex; justify-content: center; margin-top: -10px; margin-bottom: -10px;">
                    <button class="mr-4 btn btn-accent" @click="activeTab = 'tabla1'" :class="{ 'btn-accent': activeTab === 'tabla1' }">Tabla 1</button>
                    <button class="ml-4 btn btn-accent" @click="activeTab = 'tabla2'" :class="{ 'btn-accent': activeTab === 'tabla2' }">Tabla 2</button>
                </div>
            <div class="divider divider-error"></div>
            <form class="p-4 md:p-5 " style="display: flex; flex-direction: column; justify-content: space-between">
                <div x-show="activeTab === 'tabla1'">
                    @include('components.tabla-1')
                </div>

                <div x-show="activeTab === 'tabla2'">
                    @include('components.tabla-2')
                </div>

                <div style="width: 100%; display: flex; justify-content: space-between;">
                    <button class="btn btn-wide" style="margin-left: 1.5em">Guardar</button>
                    <button class="btn btn-wide" style="margin-right: 1.5em">Cancelar</button>
                </div>                

            </form>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <script>
        document.querySelector('[onclick="document.getElementById(\'my_modal_2\').showModal()"]').addEventListener('click', function() {
            document.getElementById('my_modal_2').showModal();
        });
    </script>

<!-- Main modal 2  -->
<div id="crud-modal2" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <div class="relative max-w-7xl p-4 w-full h-full" >
            <!-- Modal content -->
            <br>
            <br>
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Ingreral
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->

                <form class="p-4 md:p-5">
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                            <input type="text" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="John" required />
                        </div>
                        <div>
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                            <input type="text" id="last_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Doe" required />
                        </div>
                        <div>
                            <label for="company"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                            <input type="text" id="company"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Flowbite" required />
                        </div>
                        <div class="dark:text-black">
                            <input type="text" placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                        </div>

                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            address</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="john.doe@company.com" required />
                    </div>


                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>

                <div class="p-4 md:p-5">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg"
                        style="max-width: 1700px; max-height: 300px; overflow: auto;">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Corr
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nfactura
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ...
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ...
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        ...
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope=""
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ...
                                    </th>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope=""
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ...
                                    </th>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope=""
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ...
                                    </th>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope=""
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ...
                                    </th>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope=""
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ...
                                    </th>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope=""
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        ...
                                    </th>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                    <td class="px-6 py-4">
                                        ...
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>