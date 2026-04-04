<x-layout>
<section class="max-w-7xl mx-auto">
    {{-- Informativo --}}
    <div>
        <div class="flex items-center gap-3 mt-10 uppercase font-bold">
            {{-- barra vertical --}}
            <div class="w-1.5 h-10 bg-base"></div>
            <h2 class="text-[30px]">Monitoramento Operacional</h2>
        </div>
        <div class="text-gray-400 text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 border border-gray-300 
            divide-y md:divide-y-0 md:divide-x divide-gray-300 mt-10">
            <div class="p-6">
                <h3 class="uppercase font-bold">
                    Total
                </h3>
                <p class="text-black text-[30px]">
                    4
                </p>
            </div>
            <div class="p-6">
                <h3 class="uppercase font-bold">
                    Concluídas
                </h3>
                <p class="text-green-500 text-[30px]">
                    1
                </p>     
            </div>
            <div class="p-6">
                <h3 class="uppercase font-bold">
                    Pendentes
                </h3>
                <p class="text-yellow-500 text-[30px]">
                    2
                </p>
            </div>
            <div class="p-6">
                <h3 class="uppercase font-bold">
                    Conformidade
                </h3>
                <p class="text-black text-[30px]">
                    25%
                </p>
            </div>

        </div>
    </div>
    {{-- Tarefas --}}
    <div>
        <p class="text-base font-bold text-lg uppercase">Execução do dia</p>
        <hr>
        <table class="w-full mt-10 border border-gray-300">
            <thead class="bg-gray-100 text-left text-sm uppercase">
                <tr>
                    <th class="p-3">✔</th>
                    <th class="p-3">Rotina</th>
                    <th class="p-3">Responsável</th>
                    <th class="p-3">Indicador</th>
                    <th class="p-3">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <tr>
                    <td class="p-3">
                        <input type="checkbox">
                    </td>
                    <td class="p-3">Conferir caixa</td>
                    <td class="p-3">João</td>
                    <td class="p-3">Financeiro</td>
                    <td class="p-3 text-yellow-500 font-bold">Pendente</td>
                </tr>

                <tr>
                    <td class="p-3">
                        <input type="checkbox" checked>
                    </td>
                    <td class="p-3">Atualizar sistema</td>
                    <td class="p-3">Maria</td>
                    <td class="p-3">TI</td>
                    <td class="p-3 text-green-500 font-bold">Concluído</td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- Pendências --}}
    <div class="w-full">
        <p class="text-base font-bold text-lg uppercase">Pendências</p>
        <hr>
        <table class="w-1/2 mt-10 border border-gray-300">
            <td class="p-3">
                <div class="flex justify-between gap-2">
                    <span>Financeiro</span>
                    <span class="bg-yellow-100 text-yellow-700 text-xs font-bold px-2 py-1 rounded">
                        1 pendente
                    </span>
                </div>
            </td>
        </table>
    </div>
    
</section>



</x-layout>