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
    <button class="btn " onclick="my_modal_1.showModal()">open modal</button>
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
    <button class="btn " onclick="my_modal_2.showModal()">open modal</button>
    <dialog id="my_modal_2" class="modal ">
        <div class="modal-box max-w-7xl bg-blue-500">
            <h2 class="text-center">Hola Mundo!!!</h2>
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



</body>

</html>