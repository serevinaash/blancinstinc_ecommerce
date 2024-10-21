<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="mb-10">
                <a href="{{route('dashboard.product.create')}}" class="bg-green-500 hover:bg-greeen-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    + Create Product
                </a>
           </div>
           <div class="shadow overflow-hidden sm-rounded-md">
                <div class="px-4 bg-white sm:p-6">
                    <table id="crudTable" class="text-center">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
           </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            var dataTable=$('#crudTable').DataTable({
                ajax:{
                    url:'{!! url()->current() !!}'
                },
                columns:[
                    {data:"id",name:"id"},
                    {data:"name",name:"name"},
                    {data:"price",name:"price"},
                    {data:"action",name:"action",orderable:false,searchable:false,width:'25%'},
                ]
            })
        </script>
    </x-slot>
</x-app-layout>
