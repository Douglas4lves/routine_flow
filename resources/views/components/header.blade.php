<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto  flex justify-between items-center p-3">
        <div class="flex justify-between items-center items-center justify-center gap-2">
            {{-- Logo --}}
            <div class="flex items-center gap-2">
                <div class="bg-base border p-1">
                    <x-icons.logo />
                </div>
                <h2 class="text-base text-[20px] font-bold">
                    ROUTINEFLOW
                </h2>

            </div>
            {{-- Menu --}}
            <nav class="font-bold opacity-60 uppercase">
                <ul class="flex gap-8">
                    <li class="flex items-center gap-2 hover:text-[#4F46E5] transition">
                        <x-icons.dashboard/>
                        <a href="#" >Dashboard</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-[#4F46E5] transition">
                        <x-icons.management/>
                        <a href="#">gestão</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-[#4F46E5] transition">
                        <x-icons.task/>
                        <a href="#">tarefas</a>
                    </li>
                    <li class="flex items-center gap-2 hover:text-[#4F46E5] transition">
                        <x-icons.history/>
                        <a href="#">Histórico</a>
                    </li>
                </ul>
            </nav>
        </div>
        {{-- Usuário --}}
        <div class="flex gap-12 items-center ">
            <div class="text-gray-500 border-1 p-1 text-right font-bold opacity-60">
                <p class="">02/04/2026</p>
            </div>
            {{-- barra vertical --}}
            <div class="w-[1px] h-12 bg-gray-400"></div>
            <div class="flex gap-2">
                <div>
                    <p class="font-bold uppercase">
                        Douglas Alves 
                    </p>          
                    <p class="text-sm opacity-60">
                        Supervisor
                    </p>
                    
                </div>
                <a href="#" class="bg-gray-300 hover:bg-gray-400 transition rounded-full p-2 flex items-center justify-center">
                    <x-icons.user />
                </a>
                
            </div>
            
        </div>    
        
    </div>
</header>