@include('components.navbar')
@include('components.scripts')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

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
        <div class="modal-box max-w-7xl bg-white">
            <h2 class="text-center text-black font-bold">Ingreso de vales de combustible a bodega general</h2>

            <div class="divider"></div>
            <form class="p-4 md:p-5 ">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="first_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                        <input type="text" id="first_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="John" required />
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                            name</label>
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
                        <input type="text" placeholder="Type here"
                            class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                    </div>
                    <div>
                        <input type="date" placeholder="Type here"
                            class="bg-[#686D76] border-white text-white border input input-bordered w-full max-w-xs" />
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

            <div class="divider"></div>

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
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <!-- Model 2 -->
    <dialog id="my_modal_2" class="modal ">
        <div class="modal-box max-w-7xl bg-gray-50">
            <h2 class="text-center text-black font-bold ">Entrega de vales para combustible (Disel o gasolina) </h2>
            <div class="divider divider-error"></div>
            <form class="p-4 md:p-5 ">

                <div class="grid gap-2 mb-10 md:grid-cols-3">
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                              <span class="label-text">Numero Solicitud</span>
                            </div>
                            <input type="text"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                          </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                              <span class="label-text">Programa</span>
                            </div>
                            <select type="text"  placeholder="Type here" class="bg-gray-50 border border-gray-300 select select-bordered w-full max-w-xs" >
                            <option disabled selected>Who shot first?</option>
                            <option>Han Solo</option>
                            <option>Greedo</option>
                        </select>
                          </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                              <span class="label-text">Suministra</span>
                            </div>
                            <select type="text"  placeholder="Type here" class="bg-gray-50 border border-gray-300 select select-bordered w-full max-w-xs" >
                            <option disabled selected>Who shot first?</option>
                            <option>Han Solo</option>
                            <option>Greedo</option>
                        </select>
                          </label>
                    </div>

                    <div class="dark:text-black">
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                              <span class="label-text">Solicita</span>
                            </div>
                            <input type="text"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                          </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                              <span class="label-text">Depto Solicita</span>
                            </div>
                            <input type="text"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                          </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                              <span class="label-text">Mision</span>
                            </div>
                            <textarea class="textarea textarea-ghost bg-gray-50 border border-gray-300" placeholder="Bio"></textarea>
                          </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                              <span class="label-text">Fecha reserva</span>
                            </div>
                            <input type="date"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                          </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                              <span class="label-text">F Vence</span>
                            </div>
                            <input type="date"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                          </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                              <span class="label-text">Destino</span>
                            </div>
                            <input type="text"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                          </label>
                    </div>
                    <div>
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                          <span class="label-text">Proyecto</span>
                        </div>
                        <input type="text"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                      </label>
                    </div>
                    <div>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                              <span class="label-text">Autoriza</span>
                            </div>
                            <input type="text"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                          </label>
                        </div>
                        <div>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                  <span class="label-text">Serie</span>
                                </div>
                                <select type="text"  placeholder="Type here" class="bg-gray-50 border border-gray-300 select select-bordered w-full max-w-xs" >
                                <option disabled selected>Who shot first?</option>
                                <option>Han Solo</option>
                                <option>Greedo</option>
                            </select>
                              </label>
                        </div>     
                        <div>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                  <span class="label-text">Combustible</span>
                                </div>
                                <select type="text"  placeholder="Type here" class="bg-gray-50 border border-gray-300 select select-bordered w-full max-w-xs" >
                                <option disabled selected>Who shot first?</option>
                                <option>Han Solo</option>
                                <option>Greedo</option>
                            </select>
                            <div class="divider divider-error"></div>
                            <input type="number"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                              </label>
                        </div>
                        <div>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                  <span class="label-text">Convercion</span>
                                </div>
                                <input type="number"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                                <div class="divider divider-error">Total galones por VALE</div>
                                <input type="number"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                              </label>
                        </div>
                        <div>
                            <label class="form-control w-full max-w-xs">
                                <div class="label">
                                  <span class="label-text">No.Requisicion</span>
                                </div>
                                <input type="number"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered w-full max-w-xs" />
                              </label>
                        </div>
                </div>
                <div class="divider divider-error">Precios de referencia</div>
                <div class="flex w-full mb-10">
                    <label class="form-control flex-grow">
                        <div class="label flex-grow">
                          <span class="label-text flex-grow">De Compra</span>
                        </div>
                    <input type="number"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                </label>
                    <div class="divider divider-horizontal divider-error"></div>
                    <label class="form-control flex-grow">
                        <div class="label flex-grow flex-grow">
                          <span class="label-text flex-grow">Actual</span>
                        </div>
                    <input type="number"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                </label>
                  </div>

                  <div class="divider divider-error">Cantidad de VALES</div>
                <div class="flex w-full mb-10">
                    <label class="form-control flex-grow">
                        <div class="label flex-grow">
                          <span class="label-text flex-grow">Autorizados</span>
                        </div>
                    <input type="number"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                </label>
                    <div class="divider divider-horizontal divider-error"></div>
                    <label class="form-control flex-grow">
                        <div class="label flex-grow flex-grow">
                          <span class="label-text flex-grow">Digitados</span>
                        </div>
                    <input type="number"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
                </label>
                  </div>
                  <div class="divider divider-error"></div>
                  <label class="form-control flex-grow mb-10">
                    <div class="label flex-grow flex-grow">
                      <span class="label-text flex-grow">Serie de Vale</span>
                    </div>
                <input type="number"  placeholder="Type here" class="bg-gray-50 border border-gray-300 input input-bordered flex-grow" />
            </label>
            <button class="btn btn-wide flex-grow">Guardar</button>
            </form>

            <div class="divider"></div>

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
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>








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