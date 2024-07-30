<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="block w-full overflow-x-auto">
                            
                            <form action="{{ route('companies.update', [$id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <h2 class="text-2xl font-bold "> Company Update</h2>
                                <hr class="my-6">
                                <label class="uppercase text-sm font-bold opacity-70">Name</label>
                                <input type="text" name="name" value ="{{ $name }}" required class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                <label class="uppercase text-sm font-bold opacity-70">Address</label>
                                <input type="text" name="address" value ="{{ $address }}"  required class="p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
                                <input type="submit" class="py-2 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Submit">
                                <a href="{{ route('companies.index') }}" class="py-2 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-red-600 cursor-pointer ease-in-out duration-300" >Cancel</a>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</x-app-layout>