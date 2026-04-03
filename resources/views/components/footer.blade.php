<footer class="bg-white border-t boder-grey mt-10">
    <div class="flex justify-between">
        <div class="flex font-bold opacity-70">
            <p class="text-center text-gray-500 text-sm p-4">
                @ <span id="year"></span> RoutineFlow.
            </p>

            <div class="w-[1px] h-12 bg-gray-400"></div>

            <p class="text-center text-gray-500 text-sm p-4">
                Criado por <a href="https://github.com/Douglas4lves" class="underline">Douglas Andrade</a>. Todos os direitos reservados.
            </p>

        </div>
        
        <p class="text-center text-gray-500 text-sm p-4">
            v1.0.0-stable
        </p>
    </div>
    



    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</footer>