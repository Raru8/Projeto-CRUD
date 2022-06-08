<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <link href="dist/output.css" rel="stylesheet"> -->
<div class="bg-sei w-screen h-screen hidden items-center justify-center absolute inset-0 z-[99999]" id="add">

    <section class="w-[870px] h-[680px] flex flex-col items-center justify-center border-2  rounded-2xl bg-white">

        <div class="w-full h-[80px] flex items-center justify-between  relative border-b bottom-[100px]">
            <p class=" font-bold text-2xl ml-7">Pacientes</p>
            <button class="mr-7" id="close"><img src="icons/close-square.svg"></button>
        </div>

        <form action="php/save_patients.php" method="POST" class="w-[600px] h-[400px]  flex flex-col items-left justify-around">

            <input type="hidden" id="Eid" name="id" placeholder="Id" class="w-[565px] h-10 border-2 outline-none pl-4 border-aside">

            <input type="text" id="Enome" name="nome" placeholder="Nome" class="w-[565px] h-10 border-2 outline-none pl-4 border-aside">

            <input type="text" id="Ecpf" maxlength="11" name="cpf" placeholder="CPF" class="w-[565px] h-10 border-2 outline-none pl-4 border-aside">

            <input type="text" id="Ecelular" maxlength="11" name="celular" placeholder="Celular" class="w-[565px] h-10 border-2 outline-none pl-4 border-aside">

            <input type="text" id="Erua" name="rua" placeholder="Rua" class="w-[565px] h-10 border-2 outline-none pl-4 border-aside">

            <input type="text" id="Enumero" name="numero" placeholder="Numero" class="w-[565px] h-10 border-2 outline-none pl-4 border-aside">

            <button type="submit" id='suco' name="salvar" class="btn flex items-center justify-center font-body, font-bold text-xs border-solid border-2 border-aside bg-whites rounded-[5px] w-[80px] h-[35px] mr-[29px] hover:bg-white" onclick="Insert()"><img src="icons/clipboard-tick.svg">Salvar</button>
            <button type="submit" id='lapis' name="editar" class="btn hidden items-center justify-center font-body, font-bold text-xs border-solid border-2 border-aside bg-whites rounded-[5px] w-[80px] h-[35px] mr-[29px] hover:bg-white" onclick="Update(nome)"><img src="icons/clipboard-tick.svg">Editar</button>

        </form>

    </section>

</div>