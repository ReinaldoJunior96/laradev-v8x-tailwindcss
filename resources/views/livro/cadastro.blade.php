@extends('componentes.main')
@section('form-cadastro')
    <div class="flex flex-col sm:px-10 md:px-80">
        <form action="{{ route('livros.store') }}" method="POST"
              class="form bg-white p-6 my-10 relative shadow-md rounded ">
            @csrf
            <div class="">
                <h3 class="text-2xl text-gray-500 font-light ">Cadastro</h3>
                <p class="text-gray-300"> Insira novos livros para sua biblioteca vitural!</p>
            </div>
            <hr>
            <div class="flex space-x-5 mt-3">
                <input type="text" name="nome_livro" placeholder="Nome Livro"
                       class="shadow focus:outline-none focus:ring-1  p-2 rounded w-full">
            </div>
            <div class="flex space-x-5 mt-3">
                <select name="tipo_livro" class="shadow focus:outline-none w-1/2 focus:ring-1  p-2 rounded">
                    <option selected>Selecione</option>
                    <option value="Free">Free</option>
                    <option value="Pago">Pago</option>
                    <option value="Premium">Premium</option>
                </select>
                <input type="text" name="preco_livro" placeholder="Valor R$"
                       class="shadow focus:outline-none focus:ring-1 p-2 w-1/2 rounded">
            </div>


            <div class="flex mt-5">
                <button
                    class="w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-secondaria-normal hover:bg-secondaria-normal hover:bg-secondaria-normal hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                    <span class="mx-auto">Cadastro</span>
                </button>
            </div>

        </form>
    </div>



@endsection
